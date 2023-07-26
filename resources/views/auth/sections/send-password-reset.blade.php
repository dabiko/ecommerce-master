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
            <i class="fas fa-envelope"></i>
            <label for="email"></label>
            <input type="email"
                   id="email"
                   name="email"
                   value="{{old('email')}}"
                   placeholder="email"
            >
        </div>

        <x-auth-primary class="ml-3 common_btn mt-4">
            {{ __('Send Reset Password Link') }}
        </x-auth-primary>
    </form>
    <div class="wsus__login_save">
        <div class="flex items-center justify-end">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
               href="{{ route('login') }}">
                {{ __('Remember your password?') }}
            </a>

        </div>
    </div>
</div>
