@extends('layouts.master') 
@section('title', 'Dashboard') 
@section('content')
<div class="row">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body text-center">
                <h4 class="card-title">Number of users</h4>
                <p class="card-text">{{$userCount}}</p>
            <a href="{{asset('userList')}}" class="btn btn-primary">User List</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body text-center">
                <h4 class="card-title">Number of agents</h4>
                <p class="card-text">{{$agentCount}}</p>
                <a href="{{asset('agentList')}}" class="btn btn-primary">Agent List</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body text-center">
                <h4 class="card-title">Number of customers</h4>
                <p class="card-text">{{$customerCount}}</p>
                <a href="{{asset('customerList')}}" class="btn btn-primary">Customer List</a>
            </div>
        </div>
    </div>
</div>
@endsection