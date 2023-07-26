@extends('frontend.layouts.master')

@section('content')

    {{-- Bread crumb section --}}
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>login - register</h4>
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
                        <div class="wsus__login">
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">

                                @csrf

                                <div class="wsus__login_input">
                                    <i class="fal fa-envelope"></i>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        value="{{old('email')}}"
                                        placeholder="Your email address ">
                                </div>
                                <x-auth-primary class="ml-3 common_btn">
                                    {{ __('Email Password Reset Link') }}
                                </x-auth-primary>
                            </form>
                        </div>
                        <div class="wsus__login_save">
                            <div class="flex items-center justify-end">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                   href="{{ route('login') }}">
                                    {{ __('Remember your password?') }}
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


{{--<x-guest-layout>--}}
{{--    <div class="mb-4 text-sm text-gray-600">--}}
{{--        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
{{--    </div>--}}

{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('password.email') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <x-primary-button>--}}
{{--                {{ __('Email Password Reset Link') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
