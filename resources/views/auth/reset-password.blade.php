@extends('frontend.layouts.master')

@section('content')

    {{-- Bread crumb section --}}
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>Update password</h4>
                        <ul>
                            <li><a href="{{ route('home-page') }}">home</a></li>
                            <li>
                                <a href="{{ route('login') }}"> login  </a>
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
                   @include('auth.sections.update-user-password')
                </div>
            </div>
        </div>
    </section>
@endsection
