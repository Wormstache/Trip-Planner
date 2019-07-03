@extends('layouts.master')
@section('title', 'Blogs')

@section('content')
    <!-- registration form -->
    <div class="card bg-light mb-3 w-50 mx-auto">
        <div class="card-header text-center"><h2>Create Blog</h2></div>
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
                <form action="{{ route('blogCreate.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                    <div class="form-group mx-auto">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" name="title" value="{{ old('title') }}" required>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group mx-auto">
                        <label for="description">Description:</label>
                        <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="description" style="resize: none;">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group custom-file mx-auto">
                        <label class="custom-file-label" for="filename"></label>
                        <input type="file" class="form-control custom-file-input {{ $errors->has('filename') ? ' is-invalid' : '' }}" id="filename" name="filename" value="{{ old('filename') }}" required>
                        @if ($errors->has('filename'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('filename') }}</strong>
                            </span>
                        @endif
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