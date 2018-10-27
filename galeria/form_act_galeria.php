<?php
$cod = $_REQUEST["cod"];
$cnx = mysql_connect("localhost","root","");
mysql_select_db("alondra");
$sql ="SELECT * FROM galeria WHERE idgaleria=".$cod;
$rsc=mysql_query($sql);
$reg = mysql_fetch_array($rsc);
?>
<form name="form" method="post"  enctype="multipart/form-data">
<input type="hidden" id="cod" name="cod" value="<?php echo $reg[0]; ?>">
<table width="900px" height="250px" border=10  align="center"  >
<font size=20 color="teal"><fieldset><legend> Editar Galeria</legend></font>
<tr>
<Td> <font size=5 face="Arial" color="teal">Nombre:</font></td>
<td><input type ="text" id="nombre" style="width:200px; height:20px;" name="nombre" required class="form-control" placeholder="Nombre del Producto" value="<?php echo $reg[2]; ?>"></td>

</tr>
<tr>
		<td>  <font size=5 face="Arial" color="teal">Imagen:</font> </td>
		
		<td><input  type="file"style="width:200px; height:20px;" name="imagen" class="form-control" value="<?php echo $reg[1]; ?>"></td>
	</tr>




<tr>
<tr>
<td colspan="2" align="center">
<input type="submit" onclick="update_galeria();" font size=5 color="black" style="width:230px; height:30px; background:teal; margin-top:6px; font-size: x-large;" value="Guardar Producto" >

</td>


</tr>
	
				
		</table>
		
		</fieldset>
		
</form>






