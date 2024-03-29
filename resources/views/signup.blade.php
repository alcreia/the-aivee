<!DOCTYPE html>
<html>
<head>
	<title>sign up - iv-book</title>
	@include('scripts.head')
	<link rel='stylesheet 'href={{URL::asset('css/signup.css')}} type='text/css'>
	<link rel='stylesheet 'href={{URL::asset('css/navbar.css')}} type='text/css'>
	<meta name='viewport'
	content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
</head>
<body>
	@include('layouts.navbar')
	<div class="container">
		<div class="row">
			<div class="col-lg-4"></div>	
			<div class="col-lg-4">
				<div class="title">
					<img src="{{URL::asset('img/logo/type.png')}}" id='logo'/>
					Sign Up
				</div>
				<form class="form" method="POST" action="{{ route('register') }}">

					{{ csrf_field()}}
					<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
						<label for="name" class="col-lg-4">Name:</label>
						<div class="col-lg-8">
							<input type="text" name='name' class="form-control" id="name" placeholder="Input name here..." required value="{{ old('name') }}">
							<span class="text-danger">{{ $errors->first('name') }}</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="dob" class="col-lg-4">Date of Birth:</label>
						<div class="col-lg-8">
							<input type="date" name='dob' class="form-control" id="dob" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="country" class="col-lg-4">Country:</label>
						<div class="col-lg-8">
							<input type="text" name='country' class="form-control" id="country" required>
						</div>		
					</div>
					<div class="form-group row">
						<label for="city" class="col-lg-4">City:</label>
						<div class="col-lg-8">
							<input type="text" name='city' class="form-control" id="city" required>
						</div>				
					</div>
					<div class="form-group row">
						<label for="address" class="col-lg-4">Address:</label>
						<div class="col-lg-8">
							<input type="text" name='address' class="form-control" id="address">
						</div>
					</div>
					<div class="form-group row">
						<label for="postal" class="col-lg-4">Postal Code:</label>
						<div class="col-lg-8">
							<input type="text" name='postal' class="form-control" id="postal">
						</div>
					</div>
					<div class="form-group row">
						<label for="phone" class="col-lg-4">Phone Number:</label>
						<div class="col-lg-8">
							<input type="tel" name='phone' class="form-control" id="phone">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="email" class="col-lg-4">E-mail:</label>
						<div class="col-lg-8">
							<input type="email" name='email' class="form-control" id="email" placeholder="Input e-mail here..." required value="{{ old('email') }}">
						</div>
					</div>
					<div class="form-group row">
						<label for="password" class="col-lg-4">Password:</label>
						<div class="col-lg-8">
							<input type="password" name='password' class="form-control" id="password" placeholder="Minimum 8 characters." required>
						</div>
					</div>
					<div class="form-group row">
						<label for="password_confirmation" class="col-lg-4">Rewrite Password:</label>
						<div class="col-lg-8">
							<input type="password" name='password_confirmation' class="form-control" id="password_confirmation" required placeholder="Re-enter your password...">
						</div>
					</div>
					<div class="submit-wrap">
						<button type="submit" class="btn btn-default signup">SIGN UP</button>
					</div>				
					@if($errors->any())
					<div class="row collapse">
						<ul class="alert-box warning radius">
							@foreach($errors->all() as $error)
							<li> {{ $error }} </li>
							@endforeach
						</ul>
					</div>
					@endif
				</form>
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>
	@include('scripts.footerscript')
</body>
</html>