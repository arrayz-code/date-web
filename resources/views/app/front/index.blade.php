@extends('layouts.templade')

@section('header')
@endsection
@section('content')
<header class="header-2">
  <div class="page-header min-vh-65 relative" style="background-color:#f5a333">
    <span class="mask bg-gradient-warning opacity-4"></span>
    <div class="container">
      <div class="row">

        <div class="col-lg-7 text-center mx-auto">
          <img style=" max-width: 80%; 
  height: auto;
  display: block; /* Optional, for better alignment */
  margin: 0 auto; /* Optional, for centering */r" src="{{asset('logo-date.png')}}">
        </div>
      </div>
    </div>
  </div>
</header>





@endsection