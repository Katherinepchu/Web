<?Php 
$cnx = mysql_connect("localhost","root","");
mysql_select_db("alondra");

?>

<form  method="post" action="insertargaleria.php">
<table style='position:relative; float:right;  top:auto; padd-top:0px; left: 0; align:right'align=center width="554" height="456" border="0">
<tr>
<td width="115" align="right">Nombre:</td>
<td width="369"><input name="nombre" type="text" class="formulariocontact" size="60" /></td>
</tr>


<tr>
		<td>  <font size=5 face="Arial" color="teal">Imagen:</font> </td>
		
		<td><input type="file"style="height:20px;" name="imagen" class="form-control" ></td>
	</tr>
	
<tr>
<td align="center"style='position:relative; float:right; '><input class='myButton'type="submit" value="Enviar" class="formulariocontact" style="cursor:pointer; width:100px" /></td>
</tr>
</table>
<div class="imagenmapa">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62407.85938450929!2d-76.9935492903006!3d-12.146924497082322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4b9859c843bd78dc!2sLa+Inmaculada!5e0!3m2!1ses!2spe!4v1479519383852" width="700" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>

</form>
