@extends('layouts.master')
@section('title', 'Customer List')

@section('content')

<h2 class="text-center">Agent Table</h2>

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
                    <h3 class="mb-0">Customer List</h3>
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
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                            <tr>
                                <td data-title="Name">{{$customer->name}}</td>
                                <td data-title="Address">{{$customer->address}}</td>
                                <td data-title="Contact_no">{{$customer->contact_no}}</td>
                                <td data-title="Email">{{$customer->email}}</td>
                                <td>
                                    <button class="btn btn-info" data-toggle="modal" data-target="#customerEdit{{ $customer->id }}" href="{{ route('customerList.edit',$customer->id) }}">Edit</i></button> 
                                </td>
                                <td>
                                    <form action="{{ route('customerList.destroy', $customer->id) }}" method="post">
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

    
    
    @foreach($customers as $customer)
    <div class="modal fade" id="customerEdit{{ $customer->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form name="customer" action="{{ route('customerList.update', $customer->id) }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PATCH">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Student List Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$customer->name}}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{$customer->address}}">
                        </div>
                        <div class="form-group">
                            <label for="contact_no">Contact</label>
                            <input type="text" class="form-control" id="contact_no" name="contact_no" value="{{$customer->contact_no}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{$customer->email}}">
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