@extends('pages.layout.app')
@section('content')
@php
    $supportEmail = env('MAIL_FROM_ADDRESS_2', env('MAIL_FROM_ADDRESS', 'support@brixfin.com'));
@endphp

@include('pages.layout.page-header', [
    'label' => 'Consultancy',
    'title' => 'Consultant Request',
    'subtitle' => 'Share your goals and we will map the right advisory path.',
    'image' => 'img2/signal.jpg',
])

<section class="premium-section">
    <div class="container content-grid">
        <article class="form-card reveal-up">
            <span class="section-label">Request Form</span>
            <h3>Tell us what you need.</h3>

            @if (session('success'))
                <div class="form-message success">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="form-message error">
                    <strong>Please correct the following:</strong>
                    <ul style="margin: 8px 0 0 20px; padding: 0; color: #ffd8d8;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" novalidate>
                @csrf

                <div class="form-row">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input id="first_name" name="first_name" type="text" value="{{ old('first_name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input id="last_name" name="last_name" type="text" value="{{ old('last_name') }}" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="business_email">Business Email</label>
                        <input id="business_email" name="business_email" type="email" value="{{ old('business_email') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input id="phone_number" name="phone_number" type="tel" value="{{ old('phone_number') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="company_name">Company Name</label>
                    <input id="company_name" name="company_name" type="text" value="{{ old('company_name') }}">
                </div>

                <div class="form-group">
                    <label for="help_topic">What can we help with?</label>
                    <select id="help_topic" name="help_topic">
                        <option value="corporate-setup" {{ old('help_topic') === 'corporate-setup' ? 'selected' : '' }}>Corporate Setup</option>
                        <option value="financial-planning" {{ old('help_topic') === 'financial-planning' ? 'selected' : '' }}>Financial Planning</option>
                        <option value="tax-optimisation" {{ old('help_topic') === 'tax-optimisation' ? 'selected' : '' }}>Tax Optimization</option>
                        <option value="legal-advisory" {{ old('help_topic') === 'legal-advisory' ? 'selected' : '' }}>Legal Advisory</option>
                        <option value="compliance-services" {{ old('help_topic') === 'compliance-services' ? 'selected' : '' }}>Compliance Services</option>
                        <option value="financial-advisory" {{ old('help_topic') === 'financial-advisory' ? 'selected' : '' }}>Financial Advisory</option>
                        <option value="other" {{ old('help_topic') === 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message">{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Send Request</button>
            </form>
        </article>

        <article class="contact-card reveal-up delay-1">
            <span class="section-label">Contact Information</span>
            <h3>Advisory support desk.</h3>
            <p>
                We assist with market entry planning, execution frameworks, and operational setup for trading teams and individuals.
            </p>
            <ul class="contact-list">
                <li><i class="fa fa-envelope"></i> <a href="mailto:{{ $supportEmail }}">{{ $supportEmail }}</a></li>
                <li><i class="fa fa-clock-o"></i> Response window: 24 hours</li>
            </ul>

            <div style="margin-top: 22px;">
                <a class="btn btn-ghost" href="{{ route('contact') }}">General Contact Page</a>
            </div>
        </article>
    </div>
</section>
@endsection
