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
			<h2 class="text-">WelCome to...</h2>
			<h1>Grishma Grih Udhyog</h1>
			<h2>(SWEETS & NAMKEEN)</h2><br>

<pre><p>Welcome to Grishma Grih Udhyog, your one-step for 
high-quality sweets and namkeen! We are thrilled to have you
as a new customer,</p><!--
<pre>Welcome to Grishma Grih Udhyog, your one-stop-shop for 
high-quality sweets and namkeen! We are thrilled to have you
as a new customer, and we want to take a moment to introduce
you to our products and share a little bit about who we are.

-->		</pre> 
				<span>
					<p>login with social media</p>
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Login with Twitter</a>
				</span>
			</div>
		</div>


		<div class="right">
			<h5>SignUp</h5>
			<br>
			<br>
			<p>have an account? <a href="/signin">login now</a></p>
			<form action="{{route('store')}}" method="post">
				@csrf
				
				<div class="inputs mb-2">
					<input type="text" placeholder="Enter your name" id="uname" name="uname">
				</div>
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

				
				<br>
				<button type="submit">Signup</button>
		</div>
		</form>

	</div>


	@endsection