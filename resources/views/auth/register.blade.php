@include('dashboard.layouts.login-header')

<header>
    <h1>Register</h1>
    <p>Create your account to get started</p>
</header>

<form id="loginForm" method="POST" action="{{ route('register') }}" >
    @csrf

    <!-- Full Name -->
    <div class="form-field">
        <label for="username">Full Name</label>
        <input 
            type="text" 
            id="username" 
            name="name"
            value="{{ old('name') }}"
            autocomplete="name"
            required 
            placeholder="John Doe"
        >

        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <!-- Email -->
    <div class="form-field">
        <label for="email">Email</label>
        <input 
            type="email" 
            id="email" 
            name="email"
            value="{{ old('email') }}"
            autocomplete="email"
            required 
            placeholder="you@example.com"
        >

        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <!-- Password -->
    <div class="form-field">
        <label for="password">Password</label>
        <input 
            type="password" 
            id="password" 
            name="password"
            autocomplete="new-password"
            required 
            placeholder="••••••••"
        >

        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div class="form-field">
        <label for="reg-confirm">Confirm Password</label>
        <input 
            type="password" 
            id="reg-confirm" 
            name="password_confirmation"
            autocomplete="new-password"
            required 
            placeholder="••••••••"
        >

        @error('password_confirmation')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <!-- Terms -->
    <div class="terms">
        <input type="checkbox" id="agree" required>
        <label for="agree">
            I agree to the <a href="#">Terms</a> and 
            <a href="#">Privacy Policy</a>
        </label>
    </div>

    <footer>
        <button id="submit" type="submit" class="footer-register-btn">
            Create Account
        </button>

        <div class="no-account">
            <p>Already have an account?</p>
            <a href="{{ route('login') }}">Log In</a>
        </div>

        <div class="continue-with">Or Continue With</div>

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