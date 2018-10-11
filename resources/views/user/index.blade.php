@extends('layout.user.master')

@section('content')
	@include('user.includes.nav')

	<div class="row">
      <br>
      <div class="span4"></div>
      <div class="span4"><img class="center-block" src="{{asset('assets/img/logo.jpg')}}" width="270" height="95" alt="Google" id="logo"></div>
      <div class="span4"></div>
    </div>
    <div class="row">
      <div class="col-xs-6">
        <form method="post" action="{{route('user.search')}}">
          {{ csrf_field() }}
          <div class="input-group input-group-lg">
            <input type="text" class="form-control" name="certnumber" placeholder="Enter Certificate number" maxlength="8">
            <span class="input-group-btn">
              <button class="btn btn-primary" type="submit">
                Verify Cert
                <i class="fa fa-user"></i>
              </button>
            </span>
          </div>
        </form>
      </div>
    </div>

    @include('user.includes.footer')

@endsection