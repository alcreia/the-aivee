<!DOCTYPE html>
<html>
<head>
	<title>payment - iv-book</title>
	@include('scripts.head')
	<link rel='stylesheet 'href={{URL::asset('css/payment.css')}} type='text/css'>
	<link rel='stylesheet 'href={{URL::asset('css/navbar.css')}} type='text/css'>
</head>
<body>
	<!-- Code -->
	@include('layouts.navbar')
	<div class="container-fluid content">
		<div class="row">
			<div class="col-lg-3 cover-etc">
				<div>
					<img src="{{URL::asset($img)}}" id="cover">
				</div>
			</div>
			<div class="col-lg-9 text">
				<p>Dapatkan akses terhadap buku yang anda inginkan!</p>
				<p>Transfer sebesar <span class="highlight">Rp 89.100</span> ke rekening di bawah ini</p>
				<p>BCA <span class="highlight">8830211579</span> a.n. Meishelle Andriani Young</p> 
				<p>atau</p>
				<p>BTPN <span class="highlight">90012897710</span> a.n Felix Swarnadwipa</p>
				<p>Tambahkan kode <span class="highlight code">{{$code}}</span> di berita transfer sebagai bukti verifikasi</p>	
				<p>Kemudian email bukti transfer ke theaivee.co@gmail.com</p>
				<p>Konfirmasi pembelian akan dilakukan 1x24 jam setelah pengiriman e-mail.</p>

				<a href="/home">Back to Homepage</a>
				<a href="/books/{{$id}}">Go to Book Page</a>
			</div>
		</div>		
	</div>
	<!-- Scripts -->
	@include('scripts.footerscript')
</body>
</html>