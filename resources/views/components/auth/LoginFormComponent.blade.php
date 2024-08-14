{{-- resources/views/components/LoginFormComponent.blade.php --}}
<div class="col-lg-6">
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
        </div>

        {{-- Form submission to the login route --}}
        <form class="user" method="POST" action="{{ route('login') }}">
            @csrf  {{-- CSRF token for security --}}
            <div class="form-group">
                <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                    id="exampleInputEmail" name="email" aria-describedby="emailHelp"
                    placeholder="Enter Email Address..."
                    {{-- ! value="{{ old('email') }}" --}}
                    value="johndoe@example.com" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                    id="exampleInputPassword" name="password" placeholder="Password"
                    value="password123"
                    required>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Login
            </button>
            <hr>
            <a href="{{ url('index') }}" class="btn btn-google btn-user btn-block">
                <i class="fab fa-google fa-fw"></i> Login with Google
            </a>
            <a href="{{ url('index') }}" class="btn btn-facebook btn-user btn-block">
                <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
            </a>
        </form>
        <hr>
        @if (Route::has('password.request'))
            <div class="text-center">
                <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
            </div>
        @endif
        <div class="text-center">
            <a class="small" href="/register">Create an Account!</a>
        </div>
    </div>
</div>
