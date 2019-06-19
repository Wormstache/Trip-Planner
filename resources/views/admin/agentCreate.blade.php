@extends('layouts.master')
@section('title', 'Create Agent')

@section('content')

    <!-- registration form -->
    <div class="card bg-light mb-3 w-50 mx-auto">
        <div class="card-header text-center"><h2>Create Agent</h2></div>
        <div class="card-body">
        <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <p class="card-text">
                <form action="{{ route('agentCreate.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                    <div class="form-group mx-auto">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                
                    <div class="form-group mx-auto">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                
                    <div class="form-group mx-auto">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group mx-auto">
                        <label for="password_confirmation">Password Confirmation:</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                
                    <div class="form-group row">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </p>
        </div>
    </div>
@endsection