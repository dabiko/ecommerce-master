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
    <form method="POST" action="{{ route('password.store') }}">
        <div class="wsus__change_password">
        @csrf
        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <h4>change password</h4>
        <div class="wsus__single_pass">
            <i class="fas fa-user-tie"></i>
            <label for="email"></label>
            <input type="email"
                   id="email"
                   name="email"
                   value="{{old('email', $request->email)}}"
                   placeholder="email"
            >

        </div>
        <div class="wsus__single_pass">
            <i class="fas fa-key"></i>
            <label for="password"></label>
            <input type="password"
                   id="password"
                   name="password"
                   placeholder="password"
            >
        </div>

        <div class="wsus__single_pass">
            <i class="fas fa-key"></i>
            <label for="password_confirmation"></label>
            <input type="password"
                   id="password_confirmation"
                   name="password_confirmation"
                   placeholder="confirm password"
            >
        </div>

        <x-auth-primary class="ml-3 common_btn mt-4">
            {{ __('Reset Password') }}
        </x-auth-primary>
        </div>
    </form>

</div>
