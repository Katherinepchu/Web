<?php
$cnx = mysql_connect("localhost","root","");
mysql_select_db("alondra");
$sql = "SELECT * FROM galeria";
$rsc = mysql_query($sql);
$tabla = "<table align=center  border=10px solid black width=70%  bgcolor='5ACEFF' size=40 cellspading='0' >";
$tabla.="<tr bgcolor='#ffffff' size=50  >";


$tabla.="<td >CODIGO</td>";
$tabla.="<td>NOMBRE</td>";
$tabla.="<td>IMAGEN</td>";
$tabla.="<td>Editar</td>";
$tabla.="</tr>";
//obtiene la cantidad de columnas o campos de una tabla
$cont_colum = mysql_num_fields($rsc);
while($fila = mysql_fetch_array($rsc)) {
	$tabla.="<tr bgcolor= '#ffffff'>";
	for ($x=0; $x<$cont_colum;$x++){
		$tabla.="<td>".$fila[$x]."</td>";
	}
	$tabla.="<td><a href='form_act_galeria.php?cod=".$fila[0]."'>Editar</td>";//metodo get
	$tabla.="</tr>";
	}
	$tabla.="</table>";
	echo $tabla;
?>














