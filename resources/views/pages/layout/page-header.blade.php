@php
    $heroTitle = $title ?? env('APP_NAME');
    $heroSubtitle = $subtitle ?? null;
    $heroLabel = $label ?? 'Overview';
    $heroImage = $image ?? 'slide1.jpg';
@endphp

<section class="page-hero" style="--hero-image: url('{{ asset($heroImage) }}');">
    <div class="container">
        <span class="page-hero-label">{{ $heroLabel }}</span>
        <h1>{{ $heroTitle }}</h1>
        @if ($heroSubtitle)
            <p>{{ $heroSubtitle }}</p>
        @endif
        <div class="page-breadcrumb">
            <a href="{{ route('index') }}">Home</a>
            <span>/</span>
            <strong>{{ $heroTitle }}</strong>
        </div>
    </div>
</section>
