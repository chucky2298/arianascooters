<!DOCTYPE html>
<html lang="en">
	<?PHP
include "../core/eventC.php";
$event1C=new eventC();
$listeevents=$event1C->afficherevents();

//var_dump($listeEmployes->fetchAll());
?>
<!-- Mirrored from www.spruko.com/demo/splite/pricing-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:01 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Splite-Admin Dashboard</title>

		<!--favicon -->
		<link rel="icon" href="favicon.html" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

		<!--Icons css-->
		<link rel="stylesheet" href="assets/css/icons.css">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

		<!--Style css-->
		<link rel="stylesheet" href="assets/css/style.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">

	</head>

	<body class="app ">
	<div class="wave -three"></div>

		<div id="spinner"></div>

		<!--app open-->
		<div id="app" class="page">
			<div class="main-wrapper">

			    

               <!--nav open-->
				<nav class="navbar navbar-expand-lg main-navbar">
					<a class="header-brand" href="galerie.php">
						<img src="assets/img/brand/logo-white.png" class="header-brand-img" alt="Splite-Admin  logo">
					</a>
					<form class="form-inline mr-auto" method="GET" action="recherche_event.php">
						<ul class="navbar-nav mr-2">
							<li><a href="#" data-toggle="sidebar" class="nav-link nav-link toggle"><i class="fa fa-reorder"></i></a></li>
							<li><a href="#" data-toggle="search" class="nav-link nav-link d-md-none navsearch"><i class="fa fa-search"></i></a></li>
						</ul>
						<div class="search-element mr-3">
							<input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search">
							<span class="Search-icon"><i class="fa fa-search"></i></span>
						</div>
					</form>
						<li class="dropdown dropdown-list-toggle d-none d-lg-block">
							<a href="#" class="nav-link nav-link-lg full-screen-link">
								<i class="fa fa-expand " id="fullscreen-button"></i>
							</a>
						</li>
					</ul>
				</nav>
				<!--nav closed-->

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Evénements</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Events</a></li>
								<li class="breadcrumb-item active" aria-current="page">A venir</li>
							</ol>
						</div>
						<!--page-header closed-->
						<div >
							<a class="btn btn-info mt-2 mb-2" href="galerie.php">Galerie</a>
						</div>
                        <!--section-body open-->
						<div class="section-body card-columns gallery">

						    <!--row open-->
						    <?PHP
							foreach($listeevents as $row){
								?>
								
							<div class="row">
								<div class="col-md-12">
									<div class="card pricing-table-7">
										<div class="card-header price-header">
											<h3 class="title"><?PHP echo $row['nom']; ?></h3>
										</div>
										<div class="card-body price-body">
											<ul>
												<li><b>Adresse: </b><?PHP echo $row['adr']; ?></li>
												<li><b>Date: </b><?PHP echo $row['date']; ?></li>
											</ul>
										</div>
										<div class="card-footer price-footer">
											<a href="<?PHP echo $row['lien']; ?>"  target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a><p>Facebook</p>
										</div>
										<form method="GET" action="participer_event.php">
											<div class="card-footer price-footer">
												<input class="btn btn-warning mt-2 mb-2" type="submit" name="Participer" value="Participer">
											</div>
												<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
										</form>
									</div>
								</div>
							</div>
								<?PHP
							}
							?>
							<!--row closed-->

						</div>
						<!--section-body closed-->

					</section>
				</div>
				<!--app-content closed-->


				
			</div>
		</div>
		<!--app closed-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-angle-up"></i></a>


		<!--Jquery.min js-->
		<script src="assets/js/jquery.min.js"></script>

		<!--popper js-->
		<script src="assets/js/popper.js"></script>

		<!--Tooltip js-->
		<script src="assets/js/tooltip.js"></script>

		<!--Bootstrap.min js-->
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Jquery star rating-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

		<!--mCustomScrollbar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Scroll-up-bar.min js-->
		<script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

		<!--Sidemenu js-->
		<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--Scripts js-->
		<script src="assets/js/scripts.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>

	</body>

<!-- Mirrored from www.spruko.com/demo/splite/pricing-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:01 GMT -->
</html>