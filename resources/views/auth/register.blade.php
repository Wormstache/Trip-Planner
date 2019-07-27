@extends('layouts.masterThree')
@section('title', 'Register')

@section('content')
    <div class="login">
        <div class="right">
            <div class="login-description">
                <div class="title">Register</div>
                <div class="sub-title">Welcome to Spark which helps you to travel</div>
            </div>
            <div class="login-mode">
                <div class="form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="username">
                            <label>Name</label>
                            <input type="text" placeholder="Enter your name" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="username">
                            <label>Email</label>
                            <input type="email" placeholder="Enter your email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="username">
                            <label>Address</label>
                            <input type="text" placeholder="Enter your address" id="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="name" autofocus>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="username">
                            <label>Contact</label>
                            <input type="text" placeholder="Enter your contact" id="contact_no" class="form-control @error('contact_no') is-invalid @enderror" name="contact_no" value="{{ old('contact_no') }}" required autocomplete="name" autofocus>
                            @error('contact_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="password">
                            <label>Password</label>
                            <div class="password-input">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your Password">
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="password">
                            <label>Confirm Password</label>
                            <div class="password-input">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Enter your Password" required>
                            </div>
                        </div>
                        <div class="btn">
                            <button type="submit">Register</button>
                        </div>
                        <div class="sub-title">
                            <a href="{{ url('/login/facebook') }}" class="fab fa-facebook">Login with Facebook</a><br>
                            <a href="{{ url('/login/google') }}" class="fab fa-google"> Login with Google</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="terms">I herebly agree <span> Term and Conditions & Privacy Policy</span></div>
        </div>
        <div class="left">
            <img src="../image/register.jpg">
            <div class="des">
                <h1>Welcome To SPARK</h1>
            </div>
            <div class="sub-dis">
                <h4>Spark which helps people to plan trip across the Nepal. Spark is a personalizes trip planner</h4>
                <input type="button" value="Explore">
            </div>
        </div>
    </div>
@endsection
