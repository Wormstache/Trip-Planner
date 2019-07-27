@extends('layouts.master')
@section('title', 'Customer Panel')

@section('content')
  <div class="card text-center w-50 mx-auto">
    <div class="card-header">
      My Account
    </div>
    <div class="card-body">
      <div class="row justify-content-center">
        <div class="col-lg-3 order-lg-2">
          <div class="card-profile-image mt-4">
            <img src="{{Auth::user()->image}}" class="img-circle">
          </div>
        </div>
      </div>
      <div class="card-body pt-0 pt-md-4">
        <div class="text-center mt-md-6">
          <h2>
            {{Auth::user()->name}}
          </h2>
          <div class="h3 font-weight-300">
            <i class="ni location_pin mr-2"></i>{{Auth::user()->email}}
          </div>
          <div class="h3 font-weight-300">
            <i class="ni location_pin mr-2"></i>{{Auth::user()->contact_no}}
          </div>
          <div class="h3 font-weight-300">
            <i class="ni location_pin mr-2"></i>{{Auth::user()->address}}
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer text-muted">
      2 days ago
    </div>
  </div>
@endsection