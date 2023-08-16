@extends('layouts.details')

@push('myTitle')
<title>Gallery</title>
@endpush

@section('main-section')
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>

  <link href="assets/css/style1.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <br>
  <br>
  <br>
  <br>
  <!-- partial:index.partial.html -->
  <div class="box-form mt-4 mb-4">
    <div class="left">
      <div class="overlay">
        <h2>WelCome..</h2>
        <img src="/son.png" alt="Not Found" width="95%" height="75%" style="border-radius:20px">

				</pre>
        <span>
          <p>login with social media</p>
          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Login with Twitter</a>
        </span>
      </div>
    </div>


    <div class="right">
      <h5>Signin</h5>
      <br>
      <br>
      @if(Session::has('signup'))
      
      <script>alert("Registration is successfull now login to your email");</script>
      <p>Don't have an account? <a href="signup">Creat Your Account</a> it takes less than a minute</p>
      @elseif(Session::has('notfound'))
      <script>alert("user is not found");</script>
      <p>Don't have an account? <a href="signup">Creat Your Account</a> it takes less than a minute</p>
      @else
      <p>Don't have an account? <a href="signup">Creat Your Account</a> it takes less than a minute</p>
      @endif
      <form action="{{route('login')}}" method="post">
        @csrf
        <div class="inputs mb-2">
          <input type="email" placeholder="Enter your Email" id="emailid" name="emailid">
        </div>
        @error('emailid')
        {{$message}}
        @enderror
        <div class="inputs ">
          <input type="password" id="pwd" name="pwd" placeholder="password">
        </div>
        @error('pwd')
        {{$message}}
        @enderror
        <br><br>

        <div class="remember-me--forget-password">
          <!-- Angular -->
          <p>forget password?</p>
        </div>

        <br>
        <button type="submit">Login</button>
    </div>
    </form>

  </div>


  @endsection