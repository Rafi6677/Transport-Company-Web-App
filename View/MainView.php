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
					</p>
				</div>
				<div class="col d-flex justify-content-end">
					<p class="num"><span class="icon-phone"></span> +48 111 222 333</p>
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
							echo '<li class="nav-item cta"><a href="../Pages/login.php" class="nav-link ml-lg-2"><span class="icon-user"></span> Zaloguj</a></li>';
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
	<footer class="footer-mine">
		stopka
	</footer>
	
<?php
}

?>