<?php session_start();?>
<?php
include("includes/conexionedit.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SISTEMA GEJFR</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link  rel="icon"   href="favicon.ico" type="image/png" />
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/modernizr.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</head>

<body>
	<?php
		
	?>
<!--======================================== Navegación ========================================-->
	<header class="full-reset header">
<!--======================================== Links de navegación ========================================-->
		<nav class="full-reset navigation">
			<ul class="full-reset list-unstyled">
				<li><a href="index.php"><b><?php echo $row['menu1']; ?></b></a></li>
				<li><a href="galeria.php"><b><?php echo $row['menu2']; ?></b></a></li>
				<li><a href="secretaria.php"><b><?php echo $row['menu3']; ?></b></a></li>
				<li><a href="institucion.php"><b><?php echo $row['menu4']; ?></b></a></li>
			</ul>
		</nav>
<!--======================================== Logo(nombre) ========================================-->
		<div class="full-reset logo">
			<a href="/gejfr" title="Gejfr">
			<img src="assets/img/logo.jpg" class="avatar" alt="Avatar Image">
			</a>
			<span class="hidden-lg hidden-md"><b><?php echo $row['titulo']; ?></b></span>
			<span class="hidden-xs hidden-sm"><b><?php echo $row['titulo']; ?></b></span>

		</div>
	</header>
<!--======================================== Video corto carrusel========================================-->
	<section class="full-reset" style="background-color: rgb(255, 255, 255); padding: 0px 0;">
		<div class="container">
			<h2 class="text-center titles"><b><?php echo $row['header']; ?></b></h2>
<!--======================================== Carrusel ========================================-->
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-push-6">
					<h class="text-center titles"></h2>
					<p class="lead">Intranet GEJFR 
						<p class="text-center"><a href="login.php" class="btn btn-primary" role="button"><b>Ingreso a sistema GEJFR</b></a></p>	
					<!-- <a href="galeria.html" class="open-link-newTab">Has click aqui para ver las fotos</a> -->
					</p>
					
					<!-- <i class="fa fa-picture-o icon-index hidden-xs hidden-sm"></i> --> 
				</div>
				<div class="col-xs-12 col-sm-6 col-sm-pull-6">
					<div id="slider-ins" class="carousel slide" data-ride="carousel">
					  <!-- Indicadores -->
					  <ol class="carousel-indicators">
					    <li data-target="#slider-ins" data-slide-to="0" class="active"></li>
					    <li data-target="#slider-ins" data-slide-to="1"></li>
					    <li data-target="#slider-ins" data-slide-to="2"></li>
					  </ol>

					  <!-- Imagenes -->
					  <div class="carousel-inner" role="listbox">
						
						<!-- Primera imagen del slider -->
					    <div class="item active">
					      <img src="assets/gallery/img1.jpg" alt="Default">
					      <div class="carousel-caption">
					        <?php echo $row['nota1']; ?>
					      </div>
					    </div>
						
						<!-- Segunda imagen del slider -->
					    <div class="item">
					      <img src="assets/gallery/img2.jpg" alt="Default">
					      <div class="carousel-caption">
					       <?php echo $row['nota2']; ?>
					      </div>
					    </div>
						
						<!-- Tercera imagen del slider de la pgina principal -->
					    <div class="item">
					      <img src="assets/gallery/img3.jpg" alt="Default">
					      <div class="carousel-caption">
					       <?php echo $row['nota3']; ?>
					      </div>
					    </div>
					    
					  </div>

					  <!-- Controles -->
					  <a class="left carousel-control" href="#slider-ins" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#slider-ins" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>
			

			<div class="divider-general"></div>
			
		</div>
	</section>
	<div class="divider-general"></div>
	<!--======================================== Acontecer institucional ========================================-->
	<section class="events-ins">
		<div class="container">
			<h2 class="text-center titles"><?php echo $row ['header2']; ?></h2>
			
			<div class="row">
				<!--======================================== Articulo 1 ========================================-->
				<article class="col-xs-12 col-sm-6 col-md-4">
					<div class="thumbnail">
				      <img src="assets/gallery/img4.jpg" alt="IMG"class="img-responsive img-rounded">
				      <div class="caption">
				        <h3 class="text-center"><?php echo $row['note1']; ?></h3>
				        <p class="text-justify"><?php echo $row['noete11']; ?></p>
				        <p class="text-center"><a href="#" class="btn btn-primary" role="button">Ver imágenes</a></p>
				      </div>
				    </div>
				</article>
				<!--======================================== Articulo 2 ========================================-->
				<article class="col-xs-12 col-sm-6 col-md-4">
					<div class="thumbnail">
				      <img src="assets/gallery/img5.jpg" alt="IMG"  class="img-responsive img-rounded">
				      <div class="caption">
				        <h3 class="text-center"><?php echo $row['note2']; ?></h3>
				        <p class="text-justify"><?php echo $row['note22']; ?></p>
				        <p class="text-center"><a href="#" class="btn btn-primary" role="button">Ver imágenes</a></p>
				      </div>
				    </div>
				</article>
				<!--======================================== Articulo 3 ========================================-->
				<article class="col-xs-12 col-sm-6 col-md-4">
					<div class="thumbnail">
				      <img src="assets/gallery/img6.jpg" alt="IMG" class="img-responsive img-rounded">
				      <div class="caption">
				        <h3 class="text-center"><?php echo $row['note3']; ?></h3>
				        <p class="text-justify"><?php echo $row['note33']; ?></p>
				        <p class="text-center"><a href="#" class="btn btn-primary" role="button">Ver imágenes</a></p>
				      </div>
				    </div>
				</article>
		
			</div>
		
		</div>
					
	</section>
	<div class="divider-general">
		
		</div>
		
<footer>
<?php require('footer.php');?>
</footer>
</body>
</html>
