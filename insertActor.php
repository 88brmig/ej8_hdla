<html>
<head></head>
<body>
<?php

// Insercion a sql server

$vnombre = $_POST['nombre'];
$vapellido = $_POST['apellido'];
$vcorreo = $_POST['correo'];
$vfechaNacimiento = $_POST['fechaNacimiento'];
$voscars = $_POST['oscars'];

$sql = "insert into actor(first_name, last_name, last_update, email,
datebirth, oscarawards) values('".$vnombre."','".$vapellido."',
getdate(),'".$vcorreo."','".$vfechaNacimiento."',".$voscars.")";

echo $sql; 

include('config.php');
$parametros = array("UID"=>$USER, "PWD"=>$PASS,
"Database"=>$BD);
$con = sqlsrv_connect($HOST, $parametros);

if($con==false){
	//echo "<br> sin conexion";
	//die(print_r(sqlsrv_errors(), true));
	echo "<script> alert('Intente mas tarde');
			window.location ='index.html';
			</script>";
	die();
}
$trans = sqlsrv_query($con, $sql);

if($trans==false){
	//echo "<br> error en BD";
	//die(print_r(sqlsrv_errors(), true));
	echo "<script> alert('No se registro');
			window.location ='index.html';
			</script>";
	die();
}
else{
	echo "<script> alert('Registro exitoso!!!');
			window.location ='index.html';
			</script>";
}
sqlsrv_free_stmt($trans);
sqlsrv_close($con);

	
?>

</body>
</html>