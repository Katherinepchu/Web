<?php
session_start();
include 'conexion1.php';
if(!isset($_SESSION["nombre"])){
	header("Location:login.php");
} 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>ALONDRA INVERIONES</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<script>
function FuncVentana(){
	OpenProgressBar();
	$.post('registro.php',{},function(datos){
		if($("#ventana").length > 0) $("#ventana").remove();
		if($("#ventana").length == 0) $("body").prepend("<div id='ventana' class='flora' title='Agregar Nuevo Usuario' style='display:none;' </div>");
		$("#ventana").html(datos);

		$("#btnCerrarVta").click(function(){CerrarVentana();});
		$("#ventana").show().dialog({
			modal:true,
			overlay:{opacity: 0.5, background: "gray"},
			width:800,
			height:650
		});
		CloseProgressBar();
	});
}
function OpenProgressBar(){ //abrir_cargador
	$("#bloqueo").show();
	$("#cargador").show();
}

function CloseProgressBar(){ //cerrar_cargador
	$("#bloqueo").hide();
	$("#cargador").hide();
}

function CerrarVentana(){
	if($("#ventana").length > 0) $("#ventana").remove();
}
</script>
</head>
<body>

<div id="main_bg">
<div id="main">
<!-- header -->
<div id="header">
	<div id="logo">
		<a href="#">ALONDRA INVERSIONES</a>
		<h2><a href="#"><small>Company Slogan Goes Here</small></a></h2>
	</div>
 <div id="buttons">
	<a href="index.html" class="but_home" title=""></a><div class="but_razd"></div>
	<a href="blog.html" class="but" title="">¿QUIENES SOMOS?</a><div class="but_razd"></div>
	<a href="gallery.html" class="but" title="">ORGANIZADORA DE EVENTOS</a><div class="but_razd"></div>
	<a href="about_us.html" class="but" title="">COTIZACIÓN</a><div class="but_razd"></div>
	<a href="contact_us.html" class="but" title="">GALERIA</a>
     <a href="contact_us.html" class="but" title="">CONTÁCTENOS</a>
     <a href="contact_us.html" class="but" title="">TRABAJA CON NOSOTROS</a>
	</div>
</div><div class="inner_copy"></div>
<!-- / header -->
<div class="top">

<ul class="round">
			<li><img src="images/header1.jpg" alt="" /></li>
			<li><img src="images/header2.jpg" alt="" /></li>
			<li><img src="images/header3.jpg" alt="" /></li>
			<li><img src="images/header4.jpg" alt="" /></li>
			<li><img src="images/header5.jpg" alt="" /></li>
			<li><img src="images/header6.jpg" alt="" /></li>
</ul>
<script type="text/javascript" src="lib/jquery.js"></script>
<script type="text/javascript" src="lib/jquery.roundabout.js"></script>
<script type="text/javascript">
			
			$(document).ready(function() {
				$('.round').roundabout();
			});
		
		</script>
</div>

<!-- content -->
				<div class="cont_top"></div>
				<div id="content">
					<div class="cont_home">
						<div class="home_box">
							<h1><center>Organización de Eventos Empresariales</center></h1>
							<div style="height:15px"></div>
							<img src="images/img11.jpg" alt="" />
						<div style="height:10px;"></div>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna tortor, ultricies id pellentesque a, tristique in nulla. Donec commodo consectetur mauris quis sagittis. Donec ac lectus turpis, et eleifend dolor. <div style="height:5px"></div>
							<div style="height:20px;"><a class="read_l" href="#">more</a></div>
						</div><div style="width: 40px; height:20px; float: left;"></div>
						<div class="home_box">
							<h1><center>Matrimonios</center></h1>
							<div style="height:15px"></div>
							<img src="images/img12.jpg" alt="" />
							<div style="height:10px;"></div>
							Etiam vitae enim diam, in molestie ipsum. Aenean mollis diam nec dui commodo condimentum. Sed quam libero, luctus id pharetra et, iaculis quis lorem. Praesent magna orci, pharetra nec ornare id, porta id <div style="height:5px"></div>
 
							<div style="height:20px;"><a class="read_l" href="#">more</a></div>
					</div><div style="width: 40px; height:20px; float: left;"></div>
					<div class="home_box">
							<h1><center>Fiesta de 15 años</center></h1>
							<div style="height:15px"></div>
							<img src="images/img13.jpg" alt="" />
							<div style="height:10px;"></div>
							Integer id mi ligula, non aliquet diam. Ut venenatis arcu ut augue luctus lacinia. Nam pretium enim id magna vehicula at suscipit odio vehicula. Morbi mollis augue at sem tincidunt sit amet accumsan nibh <div style="height:5px"></div>
							<div style="height:20px;"><a class="read_l" href="#">more</a></div><div style="width: 40px; height:20px; float: left;"></div>
                        
					</div>
                        <div class="home_box">
							<h1><center>Fiesta Infantiles</center></h1>
							<div style="height:15px"></div>
							<img src="images/img13.jpg" alt="" />
							<div style="height:10px;"></div>
							Integer id mi ligula, non aliquet diam. Ut venenatis arcu ut augue luctus lacinia. Nam pretium enim id magna vehicula at suscipit odio vehicula. Morbi mollis augue at sem tincidunt sit amet accumsan nibh <div style="height:5px"></div>
							<div style="height:20px;"><a class="read_l" href="#">more</a></div>
                        
					</div><div style="width: 40px; height:20px; float: left;"></div>
                          <div class="home_box">
							<h1><center>Baby Shower Organizacion</center></h1>
							<div style="height:15px"></div>
							<img src="images/img13.jpg" alt="" />
							<div style="height:10px;"></div>
							Integer id mi ligula, non aliquet diam. Ut venenatis arcu ut augue luctus lacinia. Nam pretium enim id magna vehicula at suscipit odio vehicula. Morbi mollis augue at sem tincidunt sit amet accumsan nibh <div style="height:5px"></div>
							<div style="height:20px;"><a class="read_l" href="#">more</a></div>
                        
					</div>
						
					<div style="clear: both"></div>
					</div>
				</div>
				<div class="cont_bot"></div>
<!-- / content --> 
	<div style="height:15px"></div>
<!-- bottom -->
	<div id="bottom">
		<div style="height:10px"></div>
	<div id="b_col1">
		<h1>Recent Posts</h1>
		<div style="height:10px"></div>
			<ul class="spis_bot">
				<li><a href="#">Lorem ipsum dolor sit amet </a></li>
				<li><a href="#">Maecenas in magna quis augue</a></li>
				<li><a href="#">Ut a mauris nec eros consect</a></li>
				<li><a href="#">Nam luctus felis at mauris co </a></li>
				<li><a href="#">Aliquam sagittis ligula sit amet </a></li>
				<li><a href="#">Quisque sit amet est id urna</a></li>
				<li><a href="#">Aenean gravida ipsum in quam</a></li>
			</ul>
	</div>
	<div id="b_col2">
			<h1>Nulla Eu Leo At Ligula</h1>
			<div style="height:15px"></div>
			<img src="images/img14.jpg" class="img_l" alt="" />
			<span class="span_cont">Nulla eu leo at ligula porta aliquam. </span><br/>
			Donec fermentum leo sed ante accumsan vitae faucibus tellus commodo. Pellentesque fermentum, purus eu aliquam. <br/><div style="height:5px"></div>
			
			<img src="images/img15.jpg" class="img_l" alt="" />
			<span class="span_cont">Cras dictum, est eget adipiscing consectetur, eros eros posuere eros, non mattis neque sem ultricies mauris. </span>
			Vestibulum aliquet congue nunc a consect <br/>
	</div>

	<div id="b_col3">
			<h1>Send a Message</h1>
			<div style="height:15px"></div>
			<form action="" method="post">
				<div style="height:30px;"><label>Name</label><input class="input_txt" value="" name="Name" type="text" /></div><div style="height:5px"></div>
				<div style="height:30px;"><label>E-mail</label><input class="input_txt" value="" name="E-mail" type="text" /></div><div style="height:5px"></div>
					<div><textarea class="text_area" cols="32" rows="3" name="Message"></textarea></div>
				<div style=" float:left;"><input class="submit" name="Submit" type="submit" value="Submit" /></div>
		</form>
	</div>
	<div style="clear: both;"></div>
	</div>
	<div class="cont_bot"></div>
	
<!-- / bottom --> 
	<div id="footer">
		<p>Copyright statement. Designed by <a href="http://www.metamorphozis.com">Flash Templates</a></p>
		<p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
		<p>Busque m&aacute;s plantillas web gratis <a href="http://www.mejoresplantillasgratis.es" target="_blank">en MPG.es</a>.</p>
	</div>
</div>

</div>

</body>
</html>
