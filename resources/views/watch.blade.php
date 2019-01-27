<!DOCTYPE html>
<html>
<head>
	<title>watch - iv-book</title>
	@include('scripts.head')
	<link rel='stylesheet 'href={{URL::asset('css/watch.css')}} type='text/css'>
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
			<div class="col-lg-4">
				
			</div>
		</div>
	</div>
	<!-- Scripts -->
	@include('scripts.footerscript')
</body>
</html>