<!DOCTYPE html>
<html lang="en">
	<?PHP
include "../core/pictureC.php";
$picture1C=new pictureC();
$listepictures=$picture1C->afficherpictures();

?>
<!-- Mirrored from www.spruko.com/demo/splite/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:01 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Splite-Admin Dashboard</title>

		<!--Favicon -->
		<link rel="icon" href="favicon.html" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

		<!--Icons css-->
		<link rel="stylesheet" href="assets/css/icons.css">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

		<!--gallery css-->
		<link rel="stylesheet" href="assets/plugins/gallery/main.css">

		<!--Style css-->
		<link rel="stylesheet" href="assets/css/style.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">

	</head>

	<body class="app ">
	<div class="wave -three"></div>

		<div id="spinner"></div>

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Galerie</h4>
						</div>
						<!--page-header closed-->
				<!--aside open-->
				<aside class="app-sidebar">
					
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Evénements</span><span class="badge badge-orange nav-badge">3</span></a>
							<ul class="slide-menu">
								<li><a class="slide-item"  href="events.php"><span>Gérer events </span></a></li>
								<li><a class="slide-item" href="gerer_gal.php"><span>Gérer galerie</span></a></li>
								<li><a class="slide-item" href="stats.html"><span>Statistiques</span></a></li>
							</ul>
						</li>
					</ul>
				</aside>
				<!--aside closed-->
                        <!--row open-->
							<div class="row">
							<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Ajouter photo</h4>
									</div>
									<div class="card-body">
										<form class="form-horizontal" method="GET" action="ajouter_picture.php"  name="f">
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Nom événement </label>
												<div class="col-md-9">
													<input type="text" placeholder="Nom:" class="form-control"  name="event">
												</div>
											</div>
											
											<div class="form-group row">
												<label class="col-md-3 col-form-label">schemaa photo </label>
												<div class="col-md-9">
													<input type="text" placeholder="600x600.jpg" class="form-control"  name="schemaa">
												</div>
											</div>
											<button type="submit" class="btn btn-primary mt-1 mb-0" >Ajouter</button>
										</form>
																		

									</div>
								</div>
							</div>
						<!--row closed-->


			</div>
		</div>
		<!--app closed-->
		<!--app open-->
		<div id="app" class="page">
			<div class="main-wrapper" >

			

                

                <!--app-content open-->
				<div class="app-content">
					<div class="section">


						<div class="section-body card-columns gallery">
								<?PHP
							foreach($listepictures as $row){
								?>
								
							<div class="col-md-12">
									<div class="galleryItem card">
										<h5><?PHP echo $row['event']; ?></h5>
										<img class="card-img-top" src="../pictures/<?PHP echo $row['schemaa']; ?>" alt="gallery-img" data-text="Gallery-Image01">
										<form method="POST" action="supprimer_picture.php">
											<div class="card-footer price-footer">
												<input class="btn btn-warning mt-2 mb-2" type="submit" name="supprimer" value="supprimer">
											</div>
												<input type="hidden" value="<?PHP echo $row['schemaa']; ?>" name="schemaa">
										</form>
									</div>
								</div>
								<?PHP
							}
							?>

						</div>
					</div>
				</div>
				<!--app-content closed-->




			</div>
		</div>
		<!--app closed-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-angle-up"></i></a>

		<!-- Popup-chat -->

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

		<!--gallery js-->
		<script src="assets/plugins/gallery/main.js"></script>

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

<!-- Mirrored from www.spruko.com/demo/splite/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:02 GMT -->
</html>