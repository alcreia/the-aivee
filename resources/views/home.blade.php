<!DOCTYPE html>
<html>
<head>
	<title>home - iv-book</title>
	@include('scripts.head')
	<link rel='stylesheet 'href={{URL::asset('css/home.css')}} type='text/css'>
	<link rel='stylesheet 'href={{URL::asset('css/navbar.css')}} type='text/css'>
	<link rel='stylesheet 'href={{URL::asset('css/booklist.css')}} type='text/css'>
</head>
<body>
	@include('layouts.navbar')
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-9 content">
				<!-- Main vid-->
				<div id="intro">
					<p id="introtitle">
						Welcome to<br>
						<img src="{{URL::asset('img/logo/type.png')}}" id='logotitle'/><br>
						Thank you for joining us!
					</p>
					<p id="desc">
						Choose and click the book cover on the right side of your screen to review books summary and introduction video.
					</p>	
				</div>
				<div id="intro2">
					<div>	
						<iframe src="https://www.youtube.com/embed/BFh0Ul-snOc?controls=0&rel=0">
						</iframe>
					</div>
					<div class="row bars">
						<div class="col-sm-8">
							<span id="booktitle">8 Langkah Ajaib Menuju ke Langit - Trailer</span>
						</div>
						<div class="col-sm-4">
							<a href="/books/1"><img src="{{URL::asset('img/logo/seemore.png')}}" id='buttons'></a>
						</div>
					</div>
				</div>
				<div id="intro3">
					<div>	
						<iframe src="https://www.youtube.com/embed/COuNKcdQ06k?controls=0&rel=0">
						</iframe>
					</div>
					<div class="row bars">
						<div class="col-sm-8">
							<span id="booktitle">Days With You - Trailer</span>
						</div>
						<div class="col-sm-4">
							<a href="/books/2"><img src="{{URL::asset('img/logo/seemore.png')}}" id='buttons'></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3 booklist">
				<!-- Book list-->
				<div>
					<p id='booktitle'>
						our<br> 
						<span id="bold"><b>books</b></span>
					</p>
				</div>

				<div id="cover">
					<a href="#"><img src="{{URL::asset('img/cover/cover1.jpg')}}" class="cover"></a>
				</div>

				<div id="cover2">
					<a href="#" onclick="openBook('intro3');"><img src="{{URL::asset('img/cover/cover2.jpg')}}" class="cover"></a>
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