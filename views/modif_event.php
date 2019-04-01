<!DOCTYPE html>
<html lang="en">
<?PHP
include "../entities/event.php";
include "../core/eventC.php";
if (isset($_GET['id'])){
	$eventC=new eventC();
    $result=$eventC->recupererevent($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
		$adr=$row['adr'];
		$date=$row['date'];
		$quantite=$row['quantite'];
		$lien=$row['lien'];


	}
?>
	<style>
/* width */
::-webkit-scrollbar {
  width: 10px;
  height: 30px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: darkblue; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: black; 
}
</style>
<!-- Mirrored from www.spruko.com/demo/splite/formelements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:42 GMT -->
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

		<!--Style css-->
		<link rel="stylesheet" href="assets/css/style.css">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">

		<!--Morris css-->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
		<script src="v.js"></script>

	</head>

	<body class="app ">
	<div class="wave -three"></div>

		<div id="spinner"></div>

		<!--app open-->
		<div id="app" class="page">
			<div class="main-wrapper" >

			    

                <!--aside open-->
				<aside class="app-sidebar">
					
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Evénements</span><span class="badge badge-orange nav-badge">5</span></a>
							<ul class="slide-menu">
								<li><a class="slide-item"  href="ajouter_event.html"><span>Ajouter event </span></a></li>
								<li><a class="slide-item" href="modifier_event.html"><span>Modifier event</span></a></li>
								<li><a class="slide-item" href="supprimer_event.html"><span>Supprimer event</span></a></li>
								<li><a class="slide-item" href="ajouter_picture.html"><span>Ajouter au galerie</span></a></li>
								<li><a class="slide-item" href="supprimer_picture.html"><span>Supprimer du galerie</span></a></li>
								<li><a class="slide-item" href="stats.html"><span>Statistiques</span></a></li>
							</ul>
						</li>
					</ul>
				</aside>
				<!--aside closed-->

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Evénements</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Evénements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Modifier event</li>
							</ol>
						</div>
						<!--page-header closed-->

                        <!--row open-->
							<div class="row">
							<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Modifier</h4>
									</div>
									<div class="card-body">
										<form class="form-horizontal" method="GET" action="modifier_event.php"  name="f">
											<div class="form-group row">
												<label class="col-md-3 col-form-label">ID </label>
												<div class="col-md-9">
													<input type="number" placeholder="<?PHP echo $id; ?>" class="form-control"  disabled="disabled">
													<input type="hidden" value="<?PHP echo $id; ?>" name="id">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">NOM </label>
												<div class="col-md-9">
													<input type="text" placeholder="<?PHP echo $nom; ?>" class="form-control"  name="nom">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">ADRESSE </label>
												<div class="col-md-9">
													<input type="text" placeholder="<?PHP echo $adr; ?>" class="form-control"  name="adr">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Date</label>
												<div class="col-md-9">
													<input class="form-control" placeholder="<?PHP echo $date; ?>" type="date" name="date">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Quantité </label>
												<div class="col-md-9">
													<input type="number" placeholder="<?PHP echo $quantite; ?>" class="form-control"  name="quantite">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Lien facebook </label>
												<div class="col-md-9">
													<input type="text" placeholder="<?PHP echo $lien; ?>" class="form-control"  name="lien">
												</div>
											</div>
											
											<button type="submit" class="btn btn-primary mt-1 mb-0" >Modifier</button>
											
										</form>
													<?php
													}
													?>					

									</div>
								</div>
							</div>
						<!--row closed-->
					</div>

			</div>
		<!--app closed-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-angle-up"></i></a>

		<!-- Popup-chat -->
		<!--Jquery.min js-->
		<script type="text/javascript" src="js/form.js"></script>
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

		<!--Scroll-up-bar.min js-->
		<script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

		<!--mCustomScrollbar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Sidemenu js-->
		<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--Scripts js-->
		<script src="assets/js/scripts.js"></script>
		<script src="js/form.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>

	 </body>

<!-- Mirrored from www.spruko.com/demo/splite/formelements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:42 GMT -->
</html>