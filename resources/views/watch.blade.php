<!DOCTYPE html>
<html>
<head>
	<title>watch - iv-book</title>
	@include('scripts.head')
	<link rel='stylesheet 'href={{URL::asset('css/watch.css')}} type='text/css'>
	<meta name="csrf-token" content="{{csrf_token()}}">
	@if(Auth::check()) <meta name="user-id" content="{{ Auth::user()->id }}"> @endif
	<meta name="video-id" content="{{ $code }}">
</head>
<body>
	<!-- Code -->
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-8 video">
				<iframe 
				src="//www.dailymotion.com/embed/video/{{$code}}?ui-logo=false&ui-start-screen-info=false&sharing-enable=false&queue-enable=false"
				allowfullscreen allow="autoplay">
				</iframe>

				<a href="/home">Back to Homepage</a>
				<a href="/books">Go to Book Page</a>
			</div>
			<div class="col-lg-4" id="app">
				<chat-component code="{{$code}}"></chat-component>
			</div>
		</div>
	</div>
	<!-- Scripts -->
	@include('scripts.footerscript')
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>