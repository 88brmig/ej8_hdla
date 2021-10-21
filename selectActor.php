<?php
$sql = "select * from catActor order by last_name;";
//echo "Hola mundo";
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
	echo "<script> alert('Consulta inexistente');
			window.location ='index.html';
			</script>";
	die();
}
else{ //cuanlo la consulta fue exitosa
echo 
'<table id="tabActor">
<tr>
	<td class="tdTit">APELLIDO</td>
	<td class="tdTit">NOMBRE</td>
	<td class="tdTit">OSCARS</td>
</tr>';
	while($row=sqlsrv_fetch_array($trans,SQLSRV_FETCH_ASSOC)){
		echo '<tr>';
		echo '<td>'.$row['last_name'].'</td>';
		echo '<td>'.$row['first_name'].'</td>';
		if($row['oscarawards']==null){
			echo '<td class="tdoscars">0</td>';
		}
		else{
			echo '<td class="tdoscars">'.$row['oscarawards'].'</td>';	
		}
		echo '</tr>';
	}
	echo "</table>";

}
sqlsrv_free_stmt($trans);
sqlsrv_close($con);
?>



