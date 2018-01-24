
<!DOCTYPE html>
<html>
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
	<title></title>
	<link rel="stylesheet" href="">
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
<?php
$nombre;
$apellido;
$email;
$telefono;
$direccion;
$asunto;
//validacion del nombre
if (empty($_POST["name"])) {
    ?><header id="header" class="skel-layers-fixed">
				<h1>ERROR</h1>
				<nav id="nav">

				</nav>
			</header>
		<section id="one" class="wrapper style1">
				<header class="major">
				<h2>¡Error! </h2>
				<p><?php echo "El campo del nombre no puede estar vacio"; ?></p>
					<a href="index.php" class="button big alt">Regresar</a>
				</header>
<?php
exit();
} elseif (is_numeric($_POST["name"])) {
    ?><header id="header" class="skel-layers-fixed">
				<h1>ERROR</h1>
				<nav id="nav">

				</nav>
			</header>
		<section id="one" class="wrapper style1">
				<header class="major">
				<h2>¡Error! </h2>
				<p><?php echo "El campo del nombre no puede ser numerico"; ?></p>
					<a href="index.php" class="button big alt">Regresar</a>
				</header>


<?php
exit();
} else {
    $nombre = $_POST["name"];
}
//validacion del apellido
if (empty($_POST["ape"])) {
    ?><header id="header" class="skel-layers-fixed">
				<h1>ERROR</h1>
				<nav id="nav">

				</nav>
			</header>
		<section id="one" class="wrapper style1">
				<header class="major">
				<h2>¡Error! </h2>
				<p><?php echo "El campo del apellido no puede estar vacio"; ?></p>
					<a href="index.php" class="button big alt">Regresar</a>
				</header>
<?php
exit();
} elseif (is_numeric($_POST["ape"])) {
    ?><header id="header" class="skel-layers-fixed">
				<h1>ERROR</h1>
				<nav id="nav">

				</nav>
			</header>
		<section id="one" class="wrapper style1">
				<header class="major">
				<h2>¡Error! </h2>
				<p><?php echo "El campo del apellido no puede ser numerico"; ?></p>
					<a href="index.php" class="button big alt">Regresar</a>
				</header>


<?php
exit();
} else {
    $apellido = $_POST["ape"];
} // validacion correo
if (empty($_POST["email"])) {
    ?><header id="header" class="skel-layers-fixed">
				<h1>ERROR</h1>
				<nav id="nav">

				</nav>
			</header>
		<section id="one" class="wrapper style1">
				<header class="major">
				<h2>¡Error! </h2>
				<p><?php echo "El campo del email no puede estar vacio"; ?></p>
					<a href="index.php" class="button big alt">Regresar</a>
				</header>
<?php
exit();
} else {
    $email = $_POST["email"];
} // validacion del telefono

if (empty($_POST["tel"])) {
    ?><header id="header" class="skel-layers-fixed">
				<h1>ERROR</h1>
				<nav id="nav">

				</nav>
			</header>
		<section id="one" class="wrapper style1">
				<header class="major">
				<h2>¡Error! </h2>
				<p><?php echo "El campo del telefono no puede estar vacio"; ?></p>
					<a href="index.php" class="button big alt">Regresar</a>
				</header>
<?php
exit();
} elseif (!is_numeric($_POST["tel"])) {
    ?><header id="header" class="skel-layers-fixed">
				<h1>ERROR</h1>
				<nav id="nav">

				</nav>
			</header>
		<section id="one" class="wrapper style1">
				<header class="major">
				<h2>¡Error! </h2>
				<p><?php echo "El campo del telefono no puede ser alfabetico"; ?></p>
					<a href="index.php" class="button big alt">Regresar</a>
				</header>


<?php
exit();
} else {
    $telefono = $_POST["tel"];
}
if (empty($_POST["direcc"])) {
    ?><header id="header" class="skel-layers-fixed">
				<h1>ERROR</h1>
				<nav id="nav">

				</nav>
			</header>
		<section id="one" class="wrapper style1">
				<header class="major">
				<h2>¡Error! </h2>
				<p><?php echo "El campo de la direccion no puede estar vacio"; ?></p>
					<a href="index.php" class="button big alt">Regresar</a>
				</header>
<?php
exit();
} else {
    $direccion = $_POST["direcc"];
}
if (empty($_POST["comen"])) {
    ?><header id="header" class="skel-layers-fixed">
				<h1>ERROR</h1>
				<nav id="nav">

				</nav>
			</header>
		<section id="one" class="wrapper style1">
				<header class="major">
				<h2>¡Error! </h2>
				<p><?php echo "debes poner un asunto"; ?></p>
					<a href="index.php" class="button big alt">Regresar</a>
				</header>
<?php
exit();
} else {
    $asunto = $_POST["comen"];
}
?>
			<section id="banner">
				<div class="inner">
					<h2>Tus datos son: </h2>


				</div>
			</section>

			<header id="header" class="skel-layers-fixed">
				<h1>DATOS GUARDADOS</h1>
				<nav id="nav">

				</nav>
			</header>

			<section id="one" class="wrapper style1">
				<header class="major">
				<h2>Nombre: </h2>
				<p><?php echo $nombre ?></p>
				</header>

				<header class="major">
				<h2>Apellido: </h2>
				<p><?php echo $apellido ?></p>
				</header>

				<header class="major">
				<h2>Email: </h2>
				<p><?php echo $email ?></p>
				</header>

				<header class="major">
				<h2>Telefono: </h2>
				<p><?php echo $telefono ?></p>
				</header>

				<header class="major">
				<h2>Direccion: </h2>
				<p><?php echo $direccion ?></p>
				</header>

				<header class="major">
				<h2>Asunto: </h2>
				<p><?php echo $asunto ?></p>
				</header>

				<header class="major">
				<a href="index.php" class="button big alt">Regresar</a>
				</header>

			</section>
</body>
</html>