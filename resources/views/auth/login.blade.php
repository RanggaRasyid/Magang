@extends('auth_template.auth')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class=""   style="margin-left: 80px">
                    <h3 class="mb-1 fw-bold">Welcome to Magang <span><a href="{{ url('/') }}"><img src={{ asset('background/logo-jsh.png') }} alt="icon" style="margin-bottom: 10px;" width="auto" height="50px"></a></span>👋</h3>
                    <p class="mb-4">Please sign-in to your account and start the adventure</p>
                <div class="form-group mb-3">
                    <label for="email" class="col-md-4 col-form-label">{{ __('Email') }}</label>
                    <div class="form-group mb-3">
                        <input id="email" type="email" placeholder="jabarsibehoax@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                        @error('email') 
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="col-md-4 col-form-label ">{{ __('Password') }}</label>
                    <div class="form-group mb-3">
                        <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 form-password-toggle">
                    <div class="form-group mb-3 d-flex form-check justify-content-between">
                        <input class="form-check-input" type="checkbox" id="remember-me" />
                        <label class="form-check-label" for="remember-me"> Remember Me </label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                <small>Forgot Password?</small>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary d-grid w-100" style="background: var(--primary-500-base, #4EA971);">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
                <p class="text-center">
                    <span>Don't have an account?</span>
                    <a href="{{ route('register') }}">
                      <span>Create an account</span>
                    </a>
                </p>
                </div>
            </form>
        
        </div>
    </div>
@endsection
