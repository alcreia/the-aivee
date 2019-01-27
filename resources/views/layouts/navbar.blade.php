<div class="nav">
	<nav class="navbar" style="width: 100%">
	<div id="sidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="javascript:void(0)" onclick="aboutUs()">About us</a>
		<a href="javascript:void(0)" onclick="contactUs()">Contact Us</a>
		<a href="javascript:void(0)" onclick="disclaimer()">Disclaimer</a>
		<div>
			<a href="{{ route('logout') }}" onclick="event.preventDefault();
  	            document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
		</div>
	</div>
	<span onclick="openNav()"><img src="{{URL::asset('img/logo/threelines.png')}}" id="logo"></span>
	<a class="navbar-brand" href="/home"> 
		<img src="{{URL::asset('img/logo/logo-inverse.png')}}" id='logo'/>
		<img src="{{URL::asset('img/logo/type-inverse.png')}}" id='logo'/>
	</a>
	</nav>	
</div>
<div id="aboutUs">
	<p>
		<span>“ It’s not just a book, it’s iv-Book “</span><br><br>
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
<div id="contactUs">
	<p>
		<span>Contact Information</span>
		<br><br>
		[+62] 858 7103 8954<br><br>
		theaivee.co@gmail.com<br><br>
		Bandung, Jawa Barat, Indonesia<br><br>

	</p>
</div>
<div id="disclaimer">
	<p>
		Last updated: January 26, 2019<br>
		<br>
		The information contained on http://www.theaivee.com website (the "Service") is for general information purposes only.<br>
		<br>
		iv-book assumes no responsibility for errors or omissions in the contents on the Service.<br>
		<br>
		In no event shall iv-book be liable for any special, direct, indirect, consequential, or incidental damages or any damages whatsoever, whether in an action of contract, negligence or other tort, arising out of or in connection with the use of the Service or the contents of the Service. iv-book reserves the right to make additions, deletions, or modification to the contents on the Service at any time without prior notice. This Disclaimer for iv-book has been created with the help of TermsFeed.<br>
		<br>
		iv-book does not warrant that the website is free of viruses or other harmful components.
				
	</p>
</div>

<script type="text/javascript">
	function openNav() {
	    document.getElementById("sidenav").style.width = "20%";
	}

	function closeNav() {
    	document.getElementById("sidenav").style.width = "0";
    	document.getElementById("aboutUs").style.width = "0";
    	document.getElementById("contactUs").style.width = "0";
    	document.getElementById("disclaimer").style.width = "0";
	} 

	function aboutUs() {
		document.getElementById("aboutUs").style.width = "80%";
		document.getElementById("contactUs").style.width = "0";
		document.getElementById("disclaimer").style.width = "0";
	}
	function contactUs() {
		document.getElementById("contactUs").style.width = "80%";
		document.getElementById("aboutUs").style.width = "0";
		document.getElementById("disclaimer").style.width = "0";
	}
	function disclaimer() {
		document.getElementById("contactUs").style.width = "0";
		document.getElementById("aboutUs").style.width = "0";
		document.getElementById("disclaimer").style.width = "80%";
	}
</script>