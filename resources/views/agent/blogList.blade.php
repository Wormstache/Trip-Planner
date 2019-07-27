@extends('layouts.master')
@section('title', 'Blog List')

@section('content')

<!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0 text-center">Blog List</h3>
                </div>
                <!-- error message -->
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            {{$error}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endforeach
                @endif

                <!-- Success Message -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <!-- table -->
                <div class="table-responsive"><h5>
                    <table class="table align-items-center table-flush" id="table"></h5>
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Author</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td data-title="Name">{{$blog->agent->name}}</td>
                                <td data-title="description">{{str_limit($blog->title,20)}}</td>
                                <td data-title="Contact">{{str_limit($blog->description,30)}}</td>
                                <td data-title="Email">{{$blog->filename}}</td>
                                <td>
                                    <button class="btn btn-info" data-toggle="modal" data-target="#blogEdit{{ $blog->id }}" href="{{ route('blogList.edit',$blog->id) }}">Edit</i></button> 
                                </td>
                                <td>
                                    <form action="{{ route('blogList.destroy', $blog->id) }}" method="post">
                                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-xs" onclick=" return confirm('Are you sure?')";>Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    @foreach($blogs as $blog)
    <div class="modal fade" id="blogEdit{{ $blog->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form name="blog" action="{{ route('blogList.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PATCH">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Blog Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$blog->title}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{$blog->description}}">
                        </div>
                        <div class="form-group">
                            <label for="filename">Image</label>
                            <input type="text" class="form-control" id="filename" name="filename" value="{{$blog->filename}}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
@endsection