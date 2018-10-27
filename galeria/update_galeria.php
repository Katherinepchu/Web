<?php
$cod=$_REQUEST["cod"];
//$imagen= $_REQUEST["imagen"];
$nombre= $_REQUEST["nombre"];
$cnx = mysql_connect("localhost","root","");
mysql_select_db("alondra");
echo basename( $_FILES['imagen']['name'])."----";

if(basename( $_FILES['imagen']['name']) != ""){
	
$target_path = "img/";
$target_path = $target_path . basename( $_FILES['imagen']['name']); 
if(move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path)) {
	echo "El archivo ". basename( $_FILES['imagen']['name']). " ha sido subido";
} else{
echo "Ha ocurrido un error, trate de nuevo!";
}
$sql="update galeria set
nombre='".$nombre."',
imagen='".$target_path."'
where idgaleria=".$cod;

}else{
	$sql = "update galeria set

nombre='".$nombre."'
where idgaleria=".$cod;

}

$src=mysql_query($sql);
if($src){
	echo "se grabo los datos correctamente<br>";
	echo "<a onclick='listar_galeria();'>Retornar al listado</a>";
}else{
	echo "    no se ingreso correctamente el registro ".$sql."<br>";
	echo "<a href='index.html'>Retornar al listado</a>";
}

?>