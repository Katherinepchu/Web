<?php
//$imagen= $_POST["imagen"];
$tipoeventos= $_POST["tipoeventos"];
$marco= $_POST["marco"];
$invitado = $_POST["invitado"];
$fecha = $_POST["fecha"];
$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$fechanac= $_POST["fechanac"];
$correo= $_POST["correo"];
$telef= $_POST["telef"];
$mensaje= $_POST["mensaje"];

$cnx = mysql_connect("localhost","root","");
mysql_select_db("alondra");




$sql = "
 INSERT INTO reservas (idtipoeventos, marcoevento, numerinvitados,
fecha, nombre, apellidos,fechanac, email, telefono, mensaje)
VALUES
(
		".$tipoeventos.", ".$marco.", ".$invitado.",
		'".$fecha."', '".$nombre."', '".$apellido."', '".$fechanac."', '".$correo."', ".$telef.", '".$mensaje."'
)";
$rsc = mysql_query($sql);


if ($rsc){
	?><script>alert("se ingreso correctamente el registro");</script><?php
	//echo "<a href='principal.php'> Insertar Nuevo Registro</a>";
	header("Location:index.php");
}else{
	echo " no se ingreso correctamente el registro ".$sql."<br>";
	echo "<a href='index.php'>Insertar Nuevamente el Registro</a>";
}
?>