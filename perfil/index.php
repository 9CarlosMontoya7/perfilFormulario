<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Ion by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1>Carlos Montoya</h1>
				<nav id="nav">

				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2>Carlos Andres Montoya</h2>
					<p>Estudiante en tecnologia en sistemas</p>

				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<header class="major">
					<h2>Perfil</h2>
					<p>¡Hola!, me llamo Carlos Montoya tengo 21 años; soy de Cali, Colombia y vivo en el barrio El Diamante.
					Soy una persona respetuosa con los demas, siempre busco la manera de ayudar a mis allegados, soy un hombre de pocas palabras y Muy tranquilo.</p>

				</header>
				<header class="major">
					<h2>Estudios </h2>
					<p>La primaria y el bachillerato lo hice en la Institucion Educativa el Diamante, me gradue en el año 2014.
						Tengo un titulo como tecnico en sistemas por el SENA y en estos momento estoy estudiando la tecnologia en sistemas tambien por el SENA.</p>

				</header>
				<header class="major">
					<h2>Aspiraciones </h2>
					<p>Mis aspiraciones son continuar con mis estudios y viajar, conocer distintos paises.</p>

				</header>

			</section>


		<!-- Two -->
			<section id="two" class="wrapper style2">
				<header class="major">
					<h2>Mis hobbies</h2>

				</header>
				<div class="container">
					<div class="row">
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a>
								<p>Me gusta salir a caminar y conocer nuevos sitios</p>

							</section>
						</div>
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/musica.jpg" alt="" /></a>

								<p>Me gusta escuchar musica </p>

							</section>
						</div>
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/pizza.jpg" alt="" /></a>

								<p>Me gusta comer</p>

							</section>
						</div>
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/pc.jpg" alt="" /></a>

								<p>Me gusta la programacion y la tecnologia</p>

							</section>
						</div>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style1">
				<div class="container">
					<div class="row">
						<div class="8u">
							<section>
								<h2>Por favor ingrese sus datos</h2>
								<form action="pag2.php" method="POST">

									<div>
										Nombre:
										<input type="text" name="name" required>
									</div>
									<div>
										Apellido:
										<input type="text" name="ape" required>
									</div>
									<div>
										Email:
										<input type="text" name="email" required>
									</div>
									<div>
									Telefono:
										<input type="text" name="tel" required>
									</div>
									<div>
										Asunto:
										<input type="text" name="direcc" required>
									</div>
									<div>
									Mensaje:
										<textarea name="comen" required></textarea>
									</div>
									<div>
										<input type="submit" value="Enviar">
										<input type="reset" value="Restablecer">
									</div>
								</form>
							</section>
						</div>
						<div class="4u">
							<section>
								<h3>INFORMACIÓN</h3>
								<div>Carlos Montoya</div>
								<div>ADSI 1355931</div>
								<div>EMAIL: carlosamr1997@gmail.com</div>
						<?php
date_default_timezone_set("America/Bogota");
?><p><?php echo date("d/m/Y - h:i:s"); ?>

							</section>

						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->


	</body>
</html>