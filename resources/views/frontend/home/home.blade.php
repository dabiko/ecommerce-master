@extends('frontend.layouts.master')

@section('content')

    {{-- Product Modal --}}
    @include('frontend.home.sections.product-modal')

    {{-- Banner Slider --}}
    @include('frontend.home.sections.banner-slider')

    {{-- Flash Sales --}}
    @include('frontend.home.sections.flash-sales')

    {{-- Top categories --}}
    @include('frontend.home.sections.top-categories')

    {{-- Brand slider --}}
    @include('frontend.home.sections.brand-slider')

    {{-- Single banner --}}
    @include('frontend.home.sections.single-banner')

    {{-- Hot Deals --}}
    @include('frontend.home.sections.hot-deals')

    {{-- Electronics one --}}
    @include('frontend.home.sections.electronics-one')

    {{-- Electronics two --}}
    @include('frontend.home.sections.electronics-two')

    {{-- Large banner --}}
    @include('frontend.home.sections.large-banner')

    {{-- Weekly best rated --}}
    @include('frontend.home.sections.best-rated')

    {{-- Our services --}}
    @include('frontend.home.sections.our-services')

    {{-- Recent blogs --}}
    @include('frontend.home.sections.recent-blogs')

@endsection
