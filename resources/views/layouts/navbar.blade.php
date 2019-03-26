<nav class="navbar navbar-expand-lg bg-dark" >
	<a class="navbar-brand" href="/"> 
		<img src="{{URL::asset('img/logo/logo-inverse.png')}}" id='logo'/>
		<img src="{{URL::asset('img/logo/type-inverse.png')}}" id='logo'/>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span><img src="{{URL::asset('img/logo/threelines.png')}}" id="logo"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="/">Home</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Info
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a href="#" class="dropdown-item" role="button" data-toggle="modal" data-target="#aboutUsModal">About us</a>
					<a href="#" class="dropdown-item" role="button" data-toggle="modal" data-target="#contactUsModal">Contact Us</a>
					<a href="#" class="dropdown-item" role="button" data-toggle="modal" data-target="#disclaimerModal">Disclaimer</a>
				</div>
			</li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<!-- Authentication Links -->
			@guest
			<li class="nav-item"><a class="nav-link" href="#" role="button" data-toggle="modal" data-target="#loginModal">Login</a></li>
			<li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
			@else
			<li class="dropdown">
				<a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
					{{ Auth::user()->name }} <span class="caret"></span>
				</a>

				<ul class="dropdown-menu dropdown-menu-right">
					<li>
						<a class="dropdown-item" href="{{ route('logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						Logout
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				</li>
			</ul>
		</li>
		@endguest
	</ul>
</div>
</nav>

<div id="loginModal" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<span class="modal-title">Login</span>
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
					<button type="submit" class="btn btn-primary">Login</button>
					<a href="/{{ route('register') }}">Don't have account?</a>
				</form>
			</div>
		</div>
	</div>
</div>

<div id="aboutUsModal" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-lg modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<span class="modal-title">“ It’s not just a book, it’s iv-Book “</span>
			</div>
			<div class="modal-body">
				<p>
					Generasi millenial dan seterusnya membutuhkan revolusi dalam membaca buku. The Aivee Company didirikan untuk membawa revolusi tersebut dalam bentuk interactive virtual book (iv-Book). Start-up ini didirikan oleh 10 mahasiswa Sekolah Bisnis dan Manajemen Institut Teknologi Bandung (SBM ITB) pada bulan September 2018. Berawal dari melihat beberapa masalah seperti semakin lama semakin banyak orang malas membaca buku padahal banyak nilai baik yang terkandung di dalamnya, banyak buku berkualitas yang pendistribusiannya kurang luas, dll. Di sisi lain, semakin banyak orang yang senang menonton dan mencari hiburan lewat internet. Kami melihat peluang untuk menggabungkan buku-buku berkualitas dan teknologi informasi,tersebut kepada lebih banyak orang dengan cara yang lebih menyenangkan.
					<br><br>
					Chief Executive Officer (CEO): Vioni Giovanni <br>
					Sekretaris: Stefani Dwi Noviani <br>
					Chief Financial Officer (CFO): Felix Swarnadwipa <br>
					Finance: Andrew Octavianus Michael <br>
					Credit Marketing Officer: Meishelle Andriani Young<br>
					Marketing: Michelle Olga & Ananda Nur Yanto <br>
					Human Resource: Pradna C.R<br>
					Operation: Raden Arif Adi Nugroho & Gregorius Adhisakti Pradana <br>
				</p>
			</div>
		</div>
	</div>
</div>

<div id="contactUsModal" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<span>Contact Information</span>
			</div>
			<div class="modal-body">
				<p>
					[+62] 815 7055 169<br><br>
					theaivee.co@gmail.com<br><br>
					Bandung, Jawa Barat, Indonesia<br><br>
				</p>
			</div>
		</div>
	</div>
</div>

<div id="disclaimerModal" class="modal fade" role="dialog" tabindex="-1">
	<div class="modal-lg modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<span>Disclaimer</span>
			</div>
			<div class="modal-body">
				<p>
					Last updated: January 26, 2019<br>
					<br>
					The information contained on https://www.theaivee.com website (the "Service") is for general information purposes only.<br>
					<br>
					iv-book assumes no responsibility for errors or omissions in the contents on the Service.<br>
					<br>
					In no event shall iv-book be liable for any special, direct, indirect, consequential, or incidental damages or any damages whatsoever, whether in an action of contract, negligence or other tort, arising out of or in connection with the use of the Service or the contents of the Service. iv-book reserves the right to make additions, deletions, or modification to the contents on the Service at any time without prior notice. This Disclaimer for iv-book has been created with the help of TermsFeed.<br>
					<br>
					iv-book does not warrant that the website is free of viruses or other harmful components.
				</p>
			</div>
		</div>
	</div>
</div>