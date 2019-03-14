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
							<span id="booktitle">8 Langkah Ajaib Menuju ke Langit - Introduction</span>
						</div>
						<div class="col-sm-4">
							<a href="/books/1"><img src="{{URL::asset('img/logo/seemore.png')}}" id='buttons'></a>
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

				<div class="cover">
					<a href="javascript:void(0)" onclick="SwapDivsWithClick('intro','intro2')"><img src="{{URL::asset('img/cover/cover1.jpg')}}" id="cover"></a>
				</div>

				<div class="cover2">
					<img src="{{URL::asset('img/cover/covertest.jpg')}}" id="cover">
				</div>

				<div class="cover">
					<img src="{{URL::asset('img/cover/covertest.jpg')}}" id="cover">
				</div>
			</div>
		</div>
	</div>
	@include('scripts.footerscript')
	<script type="text/javascript">
		function SwapDivsWithClick(div1,div2)
		{
		   d1 = document.getElementById(div1);
		   d2 = document.getElementById(div2);
		   if( d2.style.display == "none" )
		   {
		      d1.style.display = "none";
		      d2.style.display = "block";
		   }
		   else
		   {
		      d1.style.display = "block";
		      d2.style.display = "none";
		   }
		}
	</script>


</body>
</html>