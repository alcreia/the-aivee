<!DOCTYPE html>
<html>
<head>
	<title>iv-book</title>
	@include('scripts.head')
	<link rel='stylesheet 'href={{URL::asset('css/index.css')}} type='text/css'>
	<link rel='stylesheet 'href={{URL::asset('css/navbar.css')}} type='text/css'>
</head>
<body>
	@include('layouts.header')
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6 content">
				<div>
					<p>
						Welcome to<br>
						<img src="{{URL::asset('img/logo/type.png')}}" id='logotitle'/><br>
						<span id="title">What is iv-book?</span><br>
						Interactive virtual book (iv-Book) adalah cara terbaru untuk menikmati sebuah buku. Berawal dari buku konvensional, buku ini telah direvolusi menjadi format digital, melebihi e-book dan audio book. Sesuai dengan namanya, "interactive-virtual book", “buku” ini berbentuk video interaktif dan forum diskusi yang mengantarkan isi buku secara praktis dan menyenangkan.<br>
						<br>
						Penasaran?

					</p>
				</div>
				<div>
					<button class="btn btn-primary signup" onclick="window.location.href='signup'">
						SIGN UP
					</button>
					<p>Already have an account? <a href="#" role="button" data-toggle="modal" data-target="#loginModal">Log in</a></p>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		<div id="loginModal" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-dialog-centered">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title">Login</h4>
		      </div>
		      <div class="modal-body">
		        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
		        	{{ csrf_field() }}
		        	<div class="form-group">
					    <label for="email">E-mail:</label>
						<input type="email" name='email' class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="password">Password:</label>
						<input type="password" name='password' class="form-control" id="password">
					</div>
					<button type="submit" class="btn btn-default">Login</button>
		        </form>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	@include('scripts.footerscript')
</body>