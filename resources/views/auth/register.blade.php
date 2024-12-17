@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh; background-color: #f4f7fc; padding: 0;">
    <div class="col-md-10 col-lg-8">
        <div class="card" style="border-radius: 20px; overflow: hidden; box-shadow: 0px 6px 18px rgba(0, 0, 0, 0.1); background: #ffffff;">
            <div class="card-header text-center" style="background-color: #0057e7; color: white; font-weight: bold; padding: 25px 20px; font-size: 1.5rem; border-bottom: 2px solid #0040b3;">
                {{ __('Register') }}
                <span id="status-icon" class="float-end" style="font-size: 1.5rem; color: #28a745;">
                    <i class="fas fa-circle"></i> <!-- Default online icon -->
                </span>
            </div>

            <div class="card-body p-4">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-4">
                        <label for="name" class="col-md-4 col-form-label text-md-end" style="font-weight: 500; font-size: 1.1rem; color: #333;">{{ __('Name') }}</label>
                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                   style="border-radius: 12px; border: 1px solid #ced4da; padding: 14px; font-size: 1rem; width: 100%; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="email" class="col-md-4 col-form-label text-md-end" style="font-weight: 500; font-size: 1.1rem; color: #333;">{{ __('Email Address') }}</label>
                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                                   style="border-radius: 12px; border: 1px solid #ced4da; padding: 14px; font-size: 1rem; width: 100%; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="password" class="col-md-4 col-form-label text-md-end" style="font-weight: 500; font-size: 1.1rem; color: #333;">{{ __('Password') }}</label>
                        <div class="col-md-8 position-relative">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                                   style="border-radius: 12px; border: 1px solid #ced4da; padding: 14px; font-size: 1rem; width: 100%; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);">
                            <button type="button" class="btn btn-link position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%); color: #0057e7; background: none; border: none; font-size: 1.5rem;" onclick="togglePassword('password')">
                                <i id="password-toggle-icon" class="fas fa-eye"></i>
                            </button>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end" style="font-weight: 500; font-size: 1.1rem; color: #333;">{{ __('Confirm Password') }}</label>
                        <div class="col-md-8 position-relative">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"
                                   style="border-radius: 12px; border: 1px solid #ced4da; padding: 14px; font-size: 1rem; width: 100%; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);">
                            <button type="button" class="btn btn-link position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%); color: #0057e7; background: none; border: none; font-size: 1.5rem;" onclick="togglePassword('password-confirm')">
                                <i id="password-confirm-toggle-icon" class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember" style="font-size: 1rem; color: #333;">{{ __('Remember Me') }}</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-0 text-center">
                        <button type="submit" class="btn btn-primary w-100" style="background-color: #0057e7; border: none; border-radius: 30px; padding: 14px; font-size: 1.1rem; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); transition: all 0.3s ease-in-out;">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePassword(fieldId) {
        const passwordField = document.getElementById(fieldId);
        const passwordIcon = document.getElementById(fieldId + '-toggle-icon');

        // Toggle password visibility
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            passwordIcon.classList.remove('fa-eye');
            passwordIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            passwordIcon.classList.remove('fa-eye-slash');
            passwordIcon.classList.add('fa-eye');
        }
    }

    // Monitor network status and update icon
    window.addEventListener('online', updateNetworkStatus);
    window.addEventListener('offline', updateNetworkStatus);

    function updateNetworkStatus() {
        const statusIcon = document.getElementById('status-icon');
        if (navigator.onLine) {
            statusIcon.innerHTML = '<i class="fas fa-circle" style="color: #28a745;"></i>'; // Green circle for online
        } else {
            statusIcon.innerHTML = '<i class="fas fa-circle" style="color: #dc3545;"></i>'; // Red circle for offline
        }
    }

    // Initialize network status on page load
    updateNetworkStatus();
</script>

@endsection
