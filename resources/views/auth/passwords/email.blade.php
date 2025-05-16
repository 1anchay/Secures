@extends('layouts.app')

@include('header')
@section('content')
<div class="min-vh-100 d-flex align-items-center bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0"><i class="fas fa-key me-2"></i>{{ __('Reset Password') }}</h4>
                    </div>

                    <div class="card-body p-4">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                <i class="fas fa-check-circle me-2"></i>{{ session('status') }}
                            </div>
                        @endif

                        <p class="text-muted mb-4">{{ __('Enter your email address and we will send you a password reset link.') }}</p>

                        <form method="POST" action="{{ route('password.email') }}" class="needs-validation" novalidate>
                            @csrf

                            <div class="mb-4">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input id="email" type="email" 
                                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                           placeholder="your@email.com">
                                </div>
                               
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>{{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </form>

                        <div class="mt-4 text-center">
                            <a href="{{ route('login') }}" class="text-decoration-none">
                                <i class="fas fa-arrow-left me-1"></i>{{ __('Back to Login') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-center text-muted">
                    <small>
                        <i class="fas fa-lock me-1"></i>{{ __('Your security is important to us. We use encryption to protect your data.') }}
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>


@include('footer')
@endsection