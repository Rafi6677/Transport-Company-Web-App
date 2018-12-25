<?php

function addNavbar(){ ?>
	<div class="top">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col">
					<p class="social d-flex">
						<a href="#"><span class="icon-facebook"></span></a>
						<a href="#"><span class="icon-twitter"></span></a>
						<a href="#"><span class="icon-google"></span></a>
						<a href="#"><span class="icon-pinterest"></span></a>
					</p>
				</div>
				<div class="col d-flex justify-content-end">
					<p class="num"><span class="icon-phone"></span> + 1700 12345 6789</p>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">Royal<span>estate</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<?php
						if((isset($_SESSION['userLogged'])) && ($_SESSION['userLogged'] == true))
						{
							echo '<li class="nav-item cta"><a href="#" class="nav-link ml-lg-2">'.$_SESSION['name'].' '.$_SESSION['surename'].'</a></li>';
							echo '<li class="nav-item cta cta-colored"><a href="../Controller/logout.php" class="nav-link">Wyloguj</a></li>';
						}
						else
						{
							echo '<li class="nav-item cta"><a href="login.php" class="nav-link ml-lg-2"><span class="icon-user"></span> Zaloguj</a></li>';
						}
					?>
					
				</ul>
			</div>
		</div>
	</nav>
	<?php
}

function addMainSection(){ ?>
	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image:url(../app/images/bg_1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
				<div class="col-md-6 text p-4 ftco-animate">
					<h1 class="mb-3">3015 Grand Avenue, CocoWalk</h1>
					<span class="location d-block mb-3"><i class="icon-my_location"></i> Melbourne, Vic 3004</span>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
					<span class="price">$28,000</span>
					<a href="#" class="btn-custom p-3 px-4 bg-primary">View Details <span class="icon-plus ml-1"></span></a>
				</div>
			</div>
			</div>
		</div>

		<div class="slider-item" style="background-image:url(../app/images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
				<div class="col-md-6 text p-4 ftco-animate">
					<h1 class="mb-3">3015 Grand Avenue, CocoWalk</h1>
					<span class="location d-block mb-3"><i class="icon-my_location"></i> Melbourne, Vic 3004</span>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
					<span class="price">$28,000</span>
					<a href="#" class="btn-custom p-3 px-4 bg-primary">View Details <span class="icon-plus ml-1"></span></a>
				</div>
			</div>
			</div>
		</div>
	</section>
	<?php
}

function addFooter(){ ?>
	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Royalestate</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Buy</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Home For Sale</a></li>
							<li><a href="#" class="py-2 d-block">Open Houses</a></li>
							<li><a href="#" class="py-2 d-block">New Listing</a></li>
							<li><a href="#" class="py-2 d-block">Recently Reduce</a></li>
							<li><a href="#" class="py-2 d-block">Off-Market Homes</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
						<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Sell</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Sell Your Home</a></li>
							<li><a href="#" class="py-2 d-block">Get A Home Valuation</a></li>
							<li><a href="#" class="py-2 d-block">Local Home Prices</a></li>
							<li><a href="#" class="py-2 d-block">Guides &amp; Rules</a></li>
							<li><a href="#" class="py-2 d-block">Others</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			</div>
		</div>
    </footer>
    
  

  

	<?php
}

?>