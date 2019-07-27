@extends('layouts.masterThree')
@section('title', 'Login')

@section('content')
    <div class="login">
        <div class="right">
            <div class="login-description">
                <div class="title">Login</div>
                <div class="sub-title">Welcome to Spark which helps you to travel</div>
            </div>
            <div class="login-mode">
                <div class="form">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="username">
                            <label>Email</label>
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"placeholder="Enter your Email" autofocus>
                            @error('email')
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
                        <div class="remember">
                            <div class="input">
                                <input type="checkbox" value="remember_me" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><span>Remember Me</span>
                            </div>
                            <label><a href="{{ route('password.request') }}">Forgot Password?</a></label>
                        </div>
                        <div class="btn">
                            <button type="submit">Login</button>
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
            <img src="{{asset('image/hhh.jpg')}}">
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
