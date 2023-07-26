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
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="wsus__login_input">
            <i class="fas fa-user-tie"></i>
            <label for="email"></label>
            <input type="text"
                   id="email"
                   name="email"
                   value="{{old('email')}}"
                   placeholder="email address"
            >

        </div>

        <div class="wsus__login_input">
            <i class="fas fa-key"></i>
            <label for="password"></label>
            <input type="password"
                   id="password"
                   name="password"
                   placeholder="password"
            >
        </div>

        <div class="wsus__login_save">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox"
                    id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">
                    {{ __('Remember me') }}
                </label>
            </div>
                    <div class="flex items-center justify-end">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                               href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                    </div>
        </div>
        <x-auth-primary class="ml-3 common_btn">
            {{ __('Log in') }}
        </x-auth-primary>

        <div class="wsus__login_save">
            <div class="flex items-center justify-end">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                       href="{{ route('register') }}">
                        {{ __('Not having an account') }}
                    </a>

            </div>
        </div>
{{--        <p class="social_text">Sign in with social account</p>--}}
{{--        <ul class="wsus__login_link">--}}
{{--            <li><a href="#"><i class="fab fa-google"></i></a></li>--}}
{{--            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--            <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>--}}
{{--        </ul>--}}
    </form>
</div>
