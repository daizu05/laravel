@extends('layouts.main')
@section('page-title', 'AndroSms')
@section('content')
  <div class="content">
    <div class="title m-b-md">
       AndroSms
    </div>
    <div class="links">
          <a href="#myModal" class="trigger-btn" data-toggle="modal">Login</a>
          <a href="#signup">Signup</a>
          <a href="{{ url('about.html') }}">About</a>
    </div>
  </div>
  <button class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">
  Button
  </button>
@endsection

