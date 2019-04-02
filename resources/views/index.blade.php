<!DOCTYPE html>
<html>
<head>
	<title>home - iv-book</title>
	@include('scripts.head')
	<link rel='stylesheet 'href={{URL::asset('css/home.css')}} type='text/css'>
	<link rel='stylesheet 'href={{URL::asset('css/navbar.css')}} type='text/css'>
	<link rel='stylesheet 'href={{URL::asset('css/booklist.css')}} type='text/css'>
	<meta name='viewport'
      content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
</head>
<body>
	@include('layouts.navbar')
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-9 content">
				<!-- Main vid-->
				<div id="intro">
					<div class="col-12">
						<p id="introtitle">
							Welcome to<br>
							<img class="img-fluid" src="{{URL::asset('img/logo/type.png')}}" id='logotitle'/><br>
							<span id="title">What is iv-book?</span><br>
							<p id="desc">	
								Interactive virtual book (iv-Book) adalah cara terbaru untuk menikmati sebuah buku. Berawal dari buku konvensional, buku ini telah direvolusi menjadi format digital, melebihi e-book dan audio book. Sesuai dengan namanya, "interactive-virtual book", “buku” ini berbentuk video interaktif dan forum diskusi yang mengantarkan isi buku secara praktis dan menyenangkan.<br>
								<br>
								Penasaran?
								<br>
								Choose and click the book cover on the right side of your screen to review books summary and introduction video.
							</p>	
						</div>
					</div>

					<div id="intro2">
						<div class="video">	
							<iframe src="https://www.youtube.com/embed/BFh0Ul-snOc?controls=0&rel=0">
							</iframe>
						</div>
						<div class="row bars">
							<div class="col-8">
								<p id="vidtitle">8 Langkah Ajaib Menuju ke Langit - Trailer</p>
							</div>
							<div class="col-4">
								@guest
								<a href="#" role="button" data-toggle="modal" data-target="#loginModal">
								@else
								<a href="/books/1">
								@endguest
								<img src="{{URL::asset('img/logo/seemore.png')}}" id='buttons'></a>
							</div>
						</div>
					</div>

					<div id="intro3">
						<div class="video">	
							<iframe src="https://www.youtube.com/embed/COuNKcdQ06k?controls=0&rel=0">
							</iframe>
						</div>
						<div class="row bars">
							<div class="col-8">
								<p id="vidtitle">Days With You - Trailer</p>
							</div>
							<div class="col-4">
								@guest
								<a href="#" role="button" data-toggle="modal" data-target="#loginModal">
								@else
								<a href="/books/2">
								@endguest
								<img src="{{URL::asset('img/logo/seemore.png')}}" id='buttons'></a>
							</div>
						</div>
					</div>
			</div>
			<div class="col-md-3 booklist">
				<!-- Book list-->
				<div>
					<p id='bookheader'>
						<span id="bold"><b>iv-books</b></span>
					</p>
				</div>
					<div id="cover">
					<a href="#"><img src="{{URL::asset('img/cover/cover1.jpg')}}" class="cover"></a>
				</div>
					<div id="cover2">
					<a href="#"><img src="{{URL::asset('img/cover/cover2.jpg')}}" class="cover"></a>
				</div>
					<div id="covertest">
					<img src="{{URL::asset('img/cover/covertest.jpg')}}" class="cover">
				</div>
			</div>
		</div>
	</div>
	@include('scripts.footerscript')
	<script>
		$("#cover").click(function(e){
			$("#intro2").toggle();
			$("#intro3").hide();
			if ($("#intro2").is(":visible")) {
				$("#intro").hide();
			} else {
				$("#intro").show();
			}
		});
		$("#cover2").click(function(e){
			$("#intro3").toggle();
			$("#intro2").hide();
			if ($("#intro3").is(":visible")) {
				$("#intro").hide();
			} else {
				$("#intro").show();
			}
		});
	</script>
</body>
</html>