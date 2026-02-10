<?php

namespace App\Services;

use App\Models\CryptoAsset;

class CryptoService
{
    protected $apiKey;
    protected $url;
    protected $genericApiErrorMessage = 'Live market data is temporarily unavailable. Please try again later.';

    public function __construct()
    {
        $this->apiKey = env('COINMARKETCAP_API_KEY'); // Store API key in .env file
        $this->url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
    }

    public function getTopCryptoAssets()
    {
        if (empty($this->apiKey)) {
            throw new \RuntimeException($this->genericApiErrorMessage);
        }

        $parameters = [
            'start' => '1',
            'limit' => '15',
            'convert' => 'USD',
        ];

        $headers = [
            'Accepts: application/json',
            'X-CMC_PRO_API_KEY: ' . $this->apiKey,
        ];

        $qs = http_build_query($parameters);
        $request = "{$this->url}?{$qs}";

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $request,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_TIMEOUT => 60,
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);
        curl_close($curl);

        if ($error) {
            report("Crypto API cURL error: {$error}");
            throw new \RuntimeException($this->genericApiErrorMessage);
        }

        $decodedResponse = json_decode($response, true);

        if (!is_array($decodedResponse)) {
            report('Crypto API returned invalid JSON.');
            throw new \RuntimeException($this->genericApiErrorMessage);
        }

        if (isset($decodedResponse['status']['error_code']) && $decodedResponse['status']['error_code'] !== 0) {
            $apiErrorCode = $decodedResponse['status']['error_code'];
            $apiErrorMessage = $decodedResponse['status']['error_message'] ?? 'Unknown API error.';

            report("Crypto API error ({$apiErrorCode}): {$apiErrorMessage}");
            throw new \RuntimeException($this->getSafeApiErrorMessage($apiErrorMessage));
        }

        return $decodedResponse;
    }

    public function getBTCPrice()
    {
        try {
            $cryptoData = $this->getTopCryptoAssets();
            $btcData = collect($cryptoData['data'] ?? [])->firstWhere('name', 'Bitcoin');

            if ($btcData) {
                return $btcData['quote']['USD']['price'];
            }
        } catch (\Throwable $e) {
            report($e);
        }

        return null;
    }

    public function getTokenPrice($tokenName)
    {
        try {
            $cryptoData = $this->getTopCryptoAssets();
            $tokenData = collect($cryptoData['data'] ?? [])->firstWhere('name', $tokenName);

            if ($tokenData) {
                return $tokenData['quote']['USD']['price'];
            }
        } catch (\Throwable $e) {
            report($e);
        }

        return null;
    }

    public function syncCryptoAssets($userId)
    {
        try {
            $cryptoData = $this->getTopCryptoAssets();

            foreach ($cryptoData['data'] ?? [] as $data) {
                $existingAsset = CryptoAsset::where('name', $data['name'])
                    ->where('user_id', $userId)
                    ->first();

                $price = $data['quote']['USD']['price'] ?? null;
                if ($price === null) {
                    continue;
                }

                $percentChange = $data['quote']['USD']['percent_change_24h'] ?? 0;

                // Retain existing balance or default to 0.00 for new assets.
                $balance = $existingAsset ? $existingAsset->balance : 0.00;

                CryptoAsset::updateOrCreate(
                    ['name' => $data['name'], 'user_id' => $userId],
                    [
                        'avatar' => $data['logo'] ?? null,
                        'price' => $price,
                        'change' => $percentChange,
                        'balance' => $balance,
                    ]
                );
            }
        } catch (\Throwable $e) {
            report($e);
            return false;
        }

        return true;
    }

    protected function getSafeApiErrorMessage(string $apiErrorMessage): string
    {
        $normalizedMessage = strtolower($apiErrorMessage);
        $sensitiveKeywords = ['api key', 'authorization', 'auth', 'forbidden', 'unauthorized', 'invalid key', 'missing key'];

        foreach ($sensitiveKeywords as $keyword) {
            if (str_contains($normalizedMessage, $keyword)) {
                return $this->genericApiErrorMessage;
            }
        }

        return $this->genericApiErrorMessage;
    }
}
