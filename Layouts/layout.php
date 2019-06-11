<!DOCTYPE html>
<html lang="es">
<head>

	<title> <?php echo $nameServer; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- LIBRERIAS BOOTSTRAP-->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/estilo.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/mydialogo.js"></script>
	<script type="text/javascript">
	var URLactualL = jQuery(location).attr('href');
	//alert(URLactualL);
	var URLdomain = window.location.host;
	//alert(URLdomain);
	</script>
 <style>
    html {

        height:100%;

        width:100%;

    }

    body{

        background:#FFFFFF url('img/ImagenFondo.png') no-repeat center center;

        background-size:100% 100%;

    }
    </style>

</head>
<body>
<header>
	<?php
		#require_once('header.php');
				switch ($typeApp) {
							case 1:
							require_once('headerserv.php');
							break;
							case 2:
							require_once('headerweb.php');
							break;
							case 3:
							require_once('headersecu.php');
							break;
							case 4:
							require_once('headerid.php');
							break;
							default:
							require_once('header.php');
							}	
	?>
</header>

<section>
	<div class="container">
	<?php
			// carga el archivo routing.php para direccionar a la página .php que se incrustará entre la header y el footer
			require_once('routing.php');
	?>
	</div>
</section>

<footer >
	<?php
		include_once('footer.php');
	?>
</footer>
</body>
</html>
