<nav class="navbar fixed-top iss-navbar" style="background:#222;">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
			<img src="<?php echo get_home_url(); ?>/wp-content/uploads/integrity-sound-logo.svg" class="img-fluid d-inline-block align-text-top" width="240" height="46.27" alt="" />
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
			<i class="fas fa-bars fa-2x text-green"></i>
		</button>
		<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Integrity Sound Solutions</h5>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body" style="background:#222;">
				<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
					<li class="nav-item">
						<a class="nav-link active text-white" aria-current="page" href="<?php echo get_home_url(); ?>/#about-us">Who We Are</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active text-white" aria-current="page" href="<?php echo get_home_url(); ?>/#what-we-do">What We Do</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active text-white" aria-current="page" href="<?php echo get_home_url(); ?>/#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>