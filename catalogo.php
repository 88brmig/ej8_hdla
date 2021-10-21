<!DOCTYPE html>
<!--Ejercicio 8, -->
<html>
<head>
	<title> Catalogo </title>
	<link rel="stylesheet" href="css/estiloCata.css"/>
		<link rel="stylesheet" href="css/catalogo.css"/>
	<meta http-equiv="Content-Type" 
	content="text/html; charset=utf-8"/>
</head>

<body>
<main> Logo de la empresa y correo
</main>
<header>
	<nav> <!--menu-->
		<ul>
			<li><a href="index.html">INICIO</a></li>
			<li><a href="catalogo.php">CATALOGO</a></li>
			<li><a href="actores.html">ACTORES</a></li>
			<li><a href="">OTROS</a></li>
		</ul>
	</nav>
</header>
<section id="principal">
	<section id="catActor">
	<p class="titCat"> CATALOGO ACTORES </p>
	<?php
	include('selectActor.php');
	?>
	
	</section>
	
<aside>
...
</aside>

<aside>
...
</aside>

</section>

<footer> Ejemplo para fines educativos &copy Abel Hernandez 
</footer>


</body>
</html>