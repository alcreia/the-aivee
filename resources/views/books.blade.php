<!DOCTYPE html>
<html>
<head>
	<title> 8 Langkah Ajaib Menuju ke Langit - iv-book</title>
	@include('scripts.head')
	<link rel='stylesheet 'href={{URL::asset('css/books.css')}} type='text/css'>
	<link rel='stylesheet 'href={{URL::asset('css/navbar.css')}} type='text/css'>
</head>
<body>
	@include('layouts.navbar')
	<!-- Code -->
	<div class="container-fluid">
		<div class="row content">
			<div class="col-lg-3 cover-etc">
				<div>
					<img src="{{URL::asset('img/cover/cover1.jpg')}}" id="cover">
				</div>
				@if ($premium === 1)
				<div>
					<a href="/watch/1" class="read">
						<img src="{{URL::asset('img/logo/readbook.png')}}" id="buylogo">
					</a>
				</div>
				@else
				<div>
					<a href="/payment" class="buy">
						<img src="{{URL::asset('img/logo/purchase.png')}}" id="buylogo">
					</a>
				</div>
				@endif
			</div>
			<div class="col-lg-5 synopsis">
				<span>Victor Asih - 8 Langkah Ajaib Menuju ke Langit</span>
				<br>
				<br>
				<p id="synopsis">
					Beberapa kesaksian pembaca buku "8 Langkah Ajaib Menuju ke Langit".
					<br><br>
					Buku 8 Langkah Ajaib Menuju ke Langit ini memberikan acuan sistematika tentang cara mendefinisikan dan mencapai sukses. <br>- Djoko Santoso, Rektor Institut Teknologi Bandung (ITB).
					<br><br>
					Teori yang baik adalah teori yang telah dipraktikkan dalam kehidupan nyata.. bisa memberikan hasil yang luar biasa. Sebaliknya, praktik yang antusias, jika ditorikan akan menginspirasi banyak orang juga. Teori dan praktik semacam itulah yang tersua dalam buku ini. BACALAH!. <br>- Andrias Harefa, Pembelajar Mindset Transformation, Penulis 30 buku best-seller.
					<br><br>
					Adapun yang dibahas dalam buku ini :<br>
					- Berani membuat impian atau cita-cita<br>
					- Menentukan impian Anda dengan jelas<br>
					- Menguji impian Anda, apakah sudah SMART+O?<br>
					- Membuat peta perjalanan menuju impian<br>
					- Menentukan alat/sistem/kendaraan untuk mencapai impian Anda<br>
					- Fokuskan semua pikiran dan tindakan nyata untuk mencapai impian Anda<br>
					- Menyelesaikan sesuai rencana<br>
					- Jika impian telah tercapai, buatlah impian baru yang lebih besar
				</p>
			</div>
			@if ($premium === 1)
			<div class="col-lg-4">
				<div class="chapters">
					<div class="accordion" id="accordionExample">
						  <div class="card">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Chapter 1
						        </button>
						      </h5>
						    </div>
						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <p><a href="/watch/1">Story</a></p>
						        <p><a href="/watch/2">Materi</a></p>
						      </div>
						    </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingTwo">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Chapter 2
						        </button>
						      </h5>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						      <div class="card-body">
						        <p><a href="/watch/3">Story</a></p>
						        <p><a href="/watch/4">Materi</a></p>
						      </div>
						    </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingThree">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Chapter 3
						        </button>
						      </h5>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        <p><a href="/watch/5">Story</a></p>
						        <p><a href="/watch/6">Materi</a></p>
						      </div>
						    </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingFour">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						          Chapter 4
						        </button>
						      </h5>
						    </div>
						    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
						      <div class="card-body">
						        <p><a href="/watch/7">Story</a></p>
						        <p><a href="/watch/8">Materi</a></p>
						      </div>
						    </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingFive">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
						          Chapter 5
						        </button>
						      </h5>
						    </div>
						    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
						      <div class="card-body">
						        <p><a href="/watch/9">Story</a></p>
						        <p><a href="/watch/10">Materi</a></p>
						      </div>
						    </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingSix">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
						          Chapter 6
						        </button>
						      </h5>
						    </div>
						    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
						      <div class="card-body">
						        <p><a href="/watch/11">Story</a></p>
						        <p><a href="/watch/12">Materi</a></p>
						      </div>
						    </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingSeven">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
						          Chapter 7
						        </button>
						      </h5>
						    </div>
						    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
						      <div class="card-body">
						        <p><a href="/watch/13">Story</a></p>
						        <p><a href="/watch/14">Materi</a></p>
						      </div>
						    </div>
						  </div>
						  <div class="card">
						    <div class="card-header" id="headingEight">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
						          Chapter 8
						        </button>
						      </h5>
						    </div>
						    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
						      <div class="card-body">
						        <p><a href="/watch/15">Story</a></p>
						        <p><a href="/watch/16">Materi</a></p>
						      </div>
						    </div>
						  </div>
						</div>

					</div>
			</div>
			@else
			<div class="col-lg-4">
				<div class="chapters">
					<p>Purchase the book to access the chapters!</p>
				</div>
			</div>
			@endif
		</div>
	</div>
	<!-- Scripts -->
	@include('scripts.footerscript')
</body>
</html>