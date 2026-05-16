@include('dashboard.layouts.login-header')

<header>
    <h1>Log In</h1>
    <p>Welcome back, please enter details</p>
</header>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-field">
        <label for="email">Email</label>

        <input
            type="email"
            name="email"
            id="email"
            value="{{ old('email') }}"
            required
            autofocus
        >

        <div id="invalid-user" class="error" aria-live="polite">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
    </div>

    <div class="form-field">
        <label for="password">Password</label>

        <input
            type="password"
            name="password"
            id="password"
            required
            autocomplete="current-password"
        >

        <a href="{{ route('password.request') }}" class="forgot-pass">
            Forgot Password?
        </a>

        <div id="invalid-pass" class="error" aria-live="polite">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
    </div>

    <footer>
        <button type="submit" class="footer-log-in-btn">
            Log In
        </button>

        <div class="no-account">
            <p>Don't have an account?</p>

            <a href="{{ route('register') }}">
                Register
            </a>
        </div>

        <div class="continue-with">
            Or Continue With
        </div>

        <div class="socials">
            <a class="socials-img" href="#">
                <img src="{{ asset('assets/dashboard/login/assets/Google.png') }}" alt="Google">
            </a>

            <a class="socials-img" href="#">
                <img src="{{ asset('assets/dashboard/login/assets/Github.png') }}" alt="GitHub">
            </a>

            <a class="socials-img" href="#">
                <img src="{{ asset('assets/dashboard/login/assets/Facebook.png') }}" alt="Facebook">
            </a>
        </div>
    </footer>
</form>

@include('dashboard.layouts.login-footer')