@extends('pages.layout.app')
@section('content')
@php
    $supportEmail = env('MAIL_FROM_ADDRESS_2', env('MAIL_FROM_ADDRESS', 'support@brixfin.com'));
@endphp

@include('pages.layout.page-header', [
    'label' => 'Contact',
    'title' => 'Contact Us',
    'subtitle' => 'Have any questions? Our team is ready to assist.',
    'image' => 'img2/banner.jpg',
])

<section class="premium-section">
    <div class="container contact-grid">
        <article class="contact-card reveal-up">
            <span class="section-label">Direct Support</span>
            <h3>Speak with our team.</h3>
            <p>
                Reach us for platform, account, or market-related questions.
                We respond quickly with practical guidance.
            </p>
            <ul class="contact-list">
                <li><i class="fa fa-envelope"></i> <a href="mailto:{{ $supportEmail }}">{{ $supportEmail }}</a></li>
            </ul>
        </article>

        <article class="contact-card reveal-up delay-1">
            <span class="section-label">Consultation</span>
            <h3>Need tailored support?</h3>
            <p>
                For business or strategic consultation requests, use the dedicated form and our team will follow up.
            </p>
            <div class="hero-actions" style="margin-top: 20px;">
                <a class="btn btn-primary" href="{{ route('consultant') }}">Open Consultant Form</a>
            </div>
        </article>
    </div>
</section>
@endsection
