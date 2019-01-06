@extends('layouts.auth')

@section('content')
    <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <div class="auth-form-transparent text-left p-3">
            <div class="brand-logo">
                <img href="#" src="{{asset('./accounts/images/logo.png')}}" alt="logo"> </a>
            </div>
            <h4>Welcome To Nodule Investment!</h4>

            <p id="successMsg" class="bg-success"></p>
            <h6 class="font-weight-light">Happy to see you again!</h6>

            <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-user text-primary"></i>
                      </span>
                    </div>
                    <input id="email" type="email" placeholder="Email" class="form-control form-control-lg border-left-0 {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <p id="emailError" class="bg-warning"></p>

            <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-lock text-primary"></i>
                      </span>
                    </div>
                    <input id="password" type="password" placeholder="Password" class="form-control form-control-lg border-left-0 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <p id="passError" class="bg-warning"></p>
            <div class="my-2 d-flex justify-content-between align-items-center">
                <div class="form-check">
                  <label class="form-check-label text-muted">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    Keep me signed in
                  </label>
                </div>
                @if (Route::has('password.request'))
                    <a class="auth-link text-black" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
            <div class="my-3">
                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" onclick="login()"> {{ __('Login') }} </button>
            </div>

            <div class="text-center mt-4 font-weight-light">
                @if (Route::has('register'))
                    Don't have an account? <a
                     href="{{ route('register') }}" class="text-primary">Create</a>

                @endif
            </div>
            </form>
        </div>
    </div>
@endsection
