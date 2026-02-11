@extends('pages.layout.app')

@section('body_class', 'landing-page')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endpush

@section('content')
    @include('pages.sections.hero')
    @include('pages.sections.capabilities')
    @include('pages.sections.onboarding')
    @include('pages.sections.proof')
    @include('pages.sections.trust')
    @include('pages.sections.market-coverage')
    @include('pages.sections.faq')
    @include('pages.sections.final-cta')
@endsection
