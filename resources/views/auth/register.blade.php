@extends('layouts.auth')

@section('content')
    <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <div class="auth-form-transparent text-left p-3">
            <div class="brand-logo">
                <img href="#" src="{{asset('./accounts/images/logo.png')}}" alt="logo"> </a>
            </div>
            <h4>Join Nodule Investment Today?</h4>
            <h6 class="font-weight-light">Join us today! It takes only few steps</h6>

            <p id="successMsg" class="bg-success"></p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label> Full Name </label>
                    <div class="">
                        <input id="name" type="text" placeholder="Enter Full Name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label> Cell Number </label>
                    <div class="input-group">
                        <input id="phone_number" type="text" placeholder="Enter Cell Number" class="form-control form-control-lg {{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" required autofocus>
                        @if ($errors->has('phone_number'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone_number') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label> Email </label>
                    <div class="input-group">
                        <input id="email" type="email" class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label> Password </label>
                    <div class="input-group">
                        <input id="password" type="password" class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label> Confirm Password </label>
                    <div class="input-group">
                        <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required>
                    </div>
                </div>

                @if (isset($countries))
                    <div class="form-group">
                        <select class="form-control form-control-lg"  name="country_id" id="country_id" required>
                            @foreach( $countries as $country)
                                <option value="{{$country->id}}"> {{ $country->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('country_id'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('country_id') }}</strong>
                            </span>
                        @endif
                    </div>
                @endif

                <div class="form-group">
                    <label> Referral Email(Optional) </label>
                    <input id="referral-email" type="email" class="form-control form-control-lg" name="referral_email" placeholder="Referral Email (Optional)">
                </div>
                <div class="my-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"> {{ __('Register') }} </button>
                </div>

                <div class="text-center mt-4 font-weight-light">
                    @if (Route::has('login'))
                        Have an account? <a
                                href="{{ route('login') }}" class="text-primary">Log In</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
