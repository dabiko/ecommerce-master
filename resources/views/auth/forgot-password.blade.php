@extends('frontend.layouts.master')

@section('content')

    {{-- Bread crumb section --}}
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>Reset Password</h4>
                        <ul>
                            <li><a href="{{ route('home-page') }}">home</a></li>
                            <li>
                                <a href="{{ route('login') }}">login  </a>
                                <a href="javascript:void(0)"> - </a>
                                <a href="{{ route('register') }}"> register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Login section --}}
    <section id="wsus__login_register">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="wsus__forget_area">
                        <span class="qiestion_icon"><i class="fal fa-question-circle"></i></span>
                        <h4>Forgot your password?</h4>
                            <div class="mb-4 text-sm text-gray-600">
                                {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                            </div>
                        @include('auth.sections.send-password-reset')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
