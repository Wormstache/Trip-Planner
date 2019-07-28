@extends('layouts.master')
@section('title', 'User List')

@section('content')

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

<!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <h3 class="mb-0">User List</h3>
                </div>
                <div class="table-responsive"><h5>
                    <table class="table align-items-center table-flush" id="table"></h5>
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Contact_no</th>
                                <th scope="col">Email</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td data-title="Name">{{$user->name}}</td>
                                <td data-title="Address">{{$user->address}}</td>
                                <td data-title="Contact_no">{{$user->contact_no}}</td>
                                <td data-title="Email">{{$user->email}}</td>
                                <td>
                                    <form action="{{ route('userList.destroy', $user->id) }}" method="post">
                                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-xs" onclick=" return confirm('Are you sure?')";>Block</button>
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
@endsection