<?php
$cod=$_REQUEST["cod"];
$cnx = mysql_connect("localhost","root","");
mysql_select_db("alondra");
$sql = "delete  from galeria where idgaleria = ".$cod;
$rsc = mysql_query($sql);


if ($rsc){
	?>
	<script>
	alert("Se elimino correctamente");
	</script>
<?php
	// header("location:eliminar.php");
	
	echo "<br><table  align=center><tr><td ><input class='myButton' type='button' onclick='listar_producto();'  value='Retomar al listado'></td></tr></table>";
	
}else{
    ?>
	<script>
	alert("Se elimino correctamente");
	</script
    <?php
	echo "no se elimino correctamente el registro ".$sql."<br>";
	echo "<a href='#' onclick='listar_galeria();'>Insertar Retornar al listado</a>";
}
?><style>
.myButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #9acc85;
	-webkit-box-shadow:inset 0px 1px 0px 0px #9acc85;
	box-shadow:inset 0px 1px 0px 0px #9acc85;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #74ad5a), color-stop(1, #68a54b));
	background:-moz-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
	background:-webkit-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
	background:-o-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
	background:-ms-linear-gradient(top, #74ad5a 5%, #68a54b 100%);
	background:linear-gradient(to bottom, #74ad5a 5%, #68a54b 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#74ad5a', endColorstr='#68a54b',GradientType=0);
	background-color:#74ad5a;
	border:1px solid #3b6e22;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:bold;
	padding:6px 12px;
	text-decoration:none;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #68a54b), color-stop(1, #74ad5a));
	background:-moz-linear-gradient(top, #68a54b 5%, #74ad5a 100%);
	background:-webkit-linear-gradient(top, #68a54b 5%, #74ad5a 100%);
	background:-o-linear-gradient(top, #68a54b 5%, #74ad5a 100%);
	background:-ms-linear-gradient(top, #68a54b 5%, #74ad5a 100%);
	background:linear-gradient(to bottom, #68a54b 5%, #74ad5a 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#68a54b', endColorstr='#74ad5a',GradientType=0);
	background-color:#68a54b;
}
.myButton:active {
	position:relative;
	top:1px;
}

</style>