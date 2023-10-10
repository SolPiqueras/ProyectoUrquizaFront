<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Nivel Terciario - Urquiza</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/publicaciones.css">
	<link rel="stylesheet" href="fonts/estilos.css">
	<link rel="stylesheet" href="fonts/style.css">
</head>
<body>

		<!-- T  O  D  O  -  E  N  C  A  B  E  Z  A  D  O  -->
	<header>
		<!--  M  E  N  U  -->
		<nav class="navbar  navbar-expand-lg fixed-top navbar-bark bg-dark ">
			<!-- .container nos permite centrar el contenido de nuestro menu, esta clase es opcional y podemos encerrar el menu <nav> o incluir el contenedor dentro del <nav> -->
			<div class="container">
				<!-- Nos sirve para agregar un logotipo al menu -->
				<a class="navbar-brand" href="terciario.php"><img src="img/encabezados/cropped-logo_urquiza-32x32.gif" alt="Urquiza"></a>
				<!-- Nos permite usar el componente collapse para dispositivos moviles -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Menu de Navegacion">
					<span class=" icon-grid" ></span>
				</button>
				
				<div class="collapse  navbar-collapse" id="navbar">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item ">
							<a href="./historia.html" class="nav-link">Conocenos</a>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Desarrollo de Software
							</a>
							<div class="dropdown-menu" aria-labelledby="menu-categorias">					
								<a href="./pdf/ds.pdf" class="dropdown-item">Correlatividades</a>
								<a href="./pdf/Estructura_Curricular_ds.pdf" class="dropdown-item">Plan de Estudio</a>
								<a href="./ds.html" class="dropdown-item">Breve Reseña</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Insfraestructura 
							</a>
							<div class="dropdown-menu" aria-labelledby="menu-categorias">
								<a href="./pdf/iti.pdf" class="dropdown-item">Correlatividades</a>
								<a href="./pdf/Estructura_Curricular_iti.pdf" class="dropdown-item">Plan de Estudio</a>
								<a href="./iti.html" class="dropdown-item">Breve Reseña</a>
							</div>
						</li>
							<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Analista Funcional 
							</a>
							<div class="dropdown-menu" aria-labelledby="menu-categorias">
								<a href="./pdf/af.pdf" class="dropdown-item">Correlatividades</a>
								<a href="./pdf/Estructura_Curricular_af.pdf" class="dropdown-item">Plan de Estudio</a>
								<a href="./af.html" class="dropdown-item">Breve Reseña</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Login
							</a>
							<div class="dropdown-menu" aria-labelledby="menu-categorias">
								<div class="container">
									<div class="form sign-in-container">
										<h3>Iniciar sesión</h3>
										<form class="formulario2" action="login.php" method="post">
											<input type="email" placeholder="Email" id="email2" name="usuario">
											<input type="password" placeholder="Contraseña" id="password2" name= "clave">
											<input type="submit" value="Iniciar Sesión">
										</form>
									</div>
								</div>
								<script src="js/scriptLogin.js"></script>
							</div>
						</li>				
					</ul>
				</div>
			</div>
		</nav>
		<!--  F  I  N  -  M  E  N  U  -->


		<!--  C  A  B  E  C  E  R  A  -->
		<div class="container  bg-white encabezado "> 
			<div class="row ">
				<div class="col d-none d-sm-block">
					<img class="img-fluid mt-3" src="img/encabezados/logotipo1.png" alt=""><!--img/encabezados/11gde.png PC-->
				</div>
			</div>
		</div>
		<!--  F  I  N  -  C  A  B  E  C  E  R  A  -->

	</header>
	<!-- F  I  N  -  T  O  D  O  -  E  N  C  A  B  E  Z  A  D  O  -->	
	<div class="container">

		<div class="row mt-3 mb-3">
			<div class="col mt-3 mb-3">
				<img class="img-fluid  border-0 img-thumbnail" src="img/encabezados/terciario.png" alt="">
			</div>
		</div>

		<div class="row justify-content-around">
			<div class="col-md-12 mb-3 mt-3"> 
				<div class="text-center ">
					<p class="bg-secondary text-white  text-uppercase"><strong>- presencial -</strong></p>
				</div>			
			</div>
		</div>

		<div class="row">
			<div class="col">
						<!--  S   E   P   A   R   A   D   O   R  -  S  L  I  D  E  -->
		<div class="row">
			<div class="col-12 mt-3 mb-3">
				<div class="carousel slide" id="terciario-carousel" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="carousel-caption d-block">
							</div>
							<img class="img-fluid" src="img/slide/examenes finales.png" alt="Examenes Turno Inicial">
						</div>
						<div class="carousel-item">
							<div class="carousel-caption d-block">
							</div>
							<img class="img-fluid" src="img/slide/parciales.png" alt="Examenes Turno Medio">
						</div>														
					</div>

					<a href="#terciario-carousel" class="carousel-control-prev" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Anterior</span>
					</a>

					<a href="#terciario-carousel" class="carousel-control-next" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Siguiente</span>
					</a>
				</div>
			</div>
		</div>
		<!--  F  I  N   -   S  L  I  D  E  -->			</div>
		</div>

		<div class="row justify-content-around">
			<div class="col-md-12 mb-3 mt-3"> 
				<div class="text-center ">
					<p class="bg-secondary text-white  text-uppercase"><strong>- ingreso 2023 -</strong></p>
				</div>			
			</div>
		</div>

		<div class="row mt-3 mb-3">
			<div class="col mb-3">
				<div class="card bg-light border-primary">
					<div class="card-body">
						<h4 class="card-title">Inscripción a Carreras Terciarias</h4>
						<p class="card-subtitle text-muted mb-2"><span class="icon-feather"></span> Desarrollo de Software</p>
						<p class="card-subtitle text-muted mb-2"><span class="icon-line-graph"></span> Analista de Sistemas</p>
						<p class="card-subtitle text-muted mb-2"><span class="icon-line-graph"></span> Infraestructura</p>
						<p class="card-text">
							<strong>Desarrollo del cursillo nivelatorio</strong> <br>
							En el curso preparatorio presencial, a desarrollarse del 27/02/2023 al 10/03/2023. Constará de 10 clases.
						</p>
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<p class="card-text">
									<strong>Requisitos para la inscripción al año lectivo</strong> <br>
									<ul>
										<li>Fotocopia legalizada DNI</li>
										<li>Fotocopia legalizada partida de nacimiento (con no más de 6 meses de antigüedad)</li>
										<li>Fotocopia legalizada de haber finalizado los estudios secundarios</li>
									</ul>
								</p>
								<p class="card-text"><strong>Costo de cooperadora:</strong> $ 4000</p>
								<p class="card-text">
									<strong>Informes</strong> <br>
									<ul>
										<li>Teléfono: (341) 472-1431- int. 203</li>
										<li>Mails: <a href="mailto:info@terciariourquiza.edu.ar">Gmail</a> / <a href="mailto:info@terciariourquiza.edu.ar">info@terciariourquiza.edu.ar</a></li>
									</ul>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		
		<section class="post-list">
			<div class="content1">
			<?php
			require_once 'controller/ControladorSesion.php';
			require_once 'model/publicacion.php';

// Obtener las últimas 3 publicaciones
$cs = new ControladorSesion();
$ultimasPublicaciones = $cs->obtenerUltimasPublicaciones();

if (!empty($ultimasPublicaciones)) {
    foreach ($ultimasPublicaciones as $publicacion) {
        echo '<article class="post">';
        echo '<div class="post-header">';
        
        // Muestra la imagen aquí si está presente en la carpeta de imágenes
        $imagenPath = $publicacion->getImagen(); // Debes ajustar la ruta de acuerdo a tu estructura de archivos
        if (!empty($imagenPath) && file_exists($imagenPath)) {
            echo '<div class="post-img"><img src="' . $imagenPath . '" alt="Imagen" style="width: 100%; height: 100%;"></div>';
        } else {
            // Muestra una imagen predeterminada o un mensaje de imagen no encontrada si es necesario
            echo '<div class="post-img"><img src="img/default-image.jpg" alt="Imagen no encontrada"></div>';
        }

        echo '</div>';
        echo '<div class="post-body">';
        echo '<span>' .date('d/m/Y ', strtotime(substr($publicacion->getFecha(),0,10))). '</span>';
        echo '<h2>' . $publicacion->getTitulo() . '</h2>';
        echo '<p>' . $publicacion->getDescripcion() . '</p>';
        // Agrega un enlace para ver más detalles de la publicación si es necesario
        echo '<a href="home.php?id=' . $publicacion->getIdPublicacion() . '" class="post-link">Leer más</a>';
        echo '</div>';
        echo '</article>';
    }
} else {
    echo '<p>No hay publicaciones disponibles.</p>';
}

// ... (código posterior)
?>

				<!-- <article class="post">
					<div class="post-header">
						<div class="post-img">Imagen</div>
					</div>
					<div class="post-body">
						<span>Fecha</span>
						<h2>Titulo</h2>
						<p>Contenido</p>
						<a href="" class="post-link">Leer más</a>
					</div>
				</article>
				<article class="post">
					<div class="post-header">
						<div class="post-img">Imagen</div>
					</div>
					<div class="post-body">
						<span>Fecha</span>
						<h2>Titulo</h2>
						<p>Contenido</p>
						<a href="" class="post-link">Leer más</a>
					</div>
				</article>
				<article class="post">
					<div class="post-header">
						<div class="post-img">Imagen</div>
					</div>
					<div class="post-body">
						<span>Fecha</span>
						<h2>Titulo</h2>
						<p>Contenido</p>
						<a href="" class="post-link">Leer más</a>
					</div>
				</article> -->
			</div>
		</section>
	</div>

		<!--  P  I  E  -  P  A  G  I  N  A  -->
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-4 text-white text-center mt-3 ">
				</div>
				<div class="col-xs-12 col-md-4 text-white text-center mt-3">
					<p class="text-center lead">Contacto</p>
					<p><span class="icon-address"></span> Oroño 634</p>
					<p><span class="icon-location-pin"></span> Rosario │ Santa Fe │ Argentina</p>
					<p><span class="icon-mobile"></span> <!--Tel&eacute;fonos-->0341 472-1431</p>
					<p><span class="icon-mail"></span> Secundario:<a href="mailto:direccion-urquiza@unr.edu.ar"> direccion-urquiza@unr.edu.ar</a></p>
					<p><span class="icon-mail"></span> Terciario:<a href="mailto:terciario-urquiza@unr.edu.ar"> terciario-urquiza@unr.edu.ar</a></p>
					<p><span class="icon-mail"></span> Asociación Cooperadora:<a href="mailto:info@terciariourquiza.edu.ar"> info@terciariourquiza.edu.ar

					</a></p>
					<p><span class="icon-creative-commons"></span></p>
				</div>
			</div>		
		</div>
	</footer>
		<!--  F  I  N  -  P  I  E  -  P  A  G  I  N  A  -->	
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>