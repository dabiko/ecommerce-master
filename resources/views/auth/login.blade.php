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
                                <a href="javascript:void(0)">login  </a>
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
                    <div class="wsus__login_reg_area">
                        <h4>logo</h4>
                        <div class="tab-content" id="pills-tabContent2">
                            <div class="tab-pane fade show active" id="pills-homes" role="tabpanel"
                                 aria-labelledby="pills-home-tab2">
                                 @include('auth.sections.user-login')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
