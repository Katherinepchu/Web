<?php

$nombre= $_REQUEST["nombre"];




$target_path = "img_galeria/";
$target_path = $target_path . basename( $_FILES['imagen']['name']); 
if(move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path)) {
	echo "El archivo ". basename( $_FILES['imagen']['name']). " La imagen ha sido subido";
} else{
echo "Ha ocurrido un error, trate de nuevo!";
}

$sql = "
 INSERT INTO galeria (
nombre, imagen)
VALUES
(
		'".$nombre."','".$target_path."')";
$rsc = mysql_query($sql);
if ($rsc){
	echo "se ingreso correctamente el registro<br>";
	echo "<a href='index.php'> Insertar Nuevo Registro</a>";
	
}else{
	echo "no se ingreso correctamente el registro ".$sql."<br>";
	echo "<a href='index.php'>Insertar Nuevamente el Registro</a>";
}
?>