<?Php 
$cnx = mysql_connect("localhost","root","");
mysql_select_db("alondra");
echo "<center>si inggfdgfdgfdreso</center>";

?>
<html lang="es">
    <head>
        <title>ALONDRA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="estilos.css">
      
         <!-- Jquery lib  from google server============-->
      <script src="js/jquery-1.10.2.min.js"></script>
        <script src="principal.js"></script>
    </head>
   
    <header>

	<div class="contenedor">
        
		<a href="index.html"><h1 class="icon-dog" >ALONDRA</h1></a>
		<input type="checkbox" id="menu-bar">
		<label class="fontawesome-align-justify" for="menu-bar"></label>
        
				<nav class="menu">
					<a href="organizadora.php">Organizadora de Eventos</a>
					<a href="reservas.php">Reservaciones</a>
					<a href="galeria.php">Galeria</a>
					<a href="contacto.php">Contactenos</a>
					<a href="laboral.php">Trabaja con Nosotros</a>
				</nav>
			</div>
    </header>
  
    <div class="contenedor">
    <form action="">
        <h2>Contacto</h2>
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="correo" placeholder="Correo">
        <input type="text" name="telefono" placeholder="Telefono">
        <textarea name="mensaje" placeholder="Escriba aqui su mensaje..."></textarea>
        <input type="button" value="Enviar" id="boton">        
       
        </form>
     <div class="imagenmapa">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62407.85938450929!2d-76.9935492903006!3d-12.146924497082322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4b9859c843bd78dc!2sLa+Inmaculada!5e0!3m2!1ses!2spe!4v1479519383852" width="700" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>
    </div>
	 	<!--<main>
			<section id="banner">
				<img src="img/01.jpg">
				<div class="contenedor">
					<h2>¿Quines somos?</h2>
					<p>Conosca nuestra gran familia</p>
					<a href="#">Leer más</a>
				</div>
			</section>
			
			<section id="bienvenidos">
			<div class="contenedor">
				<h2>Galeria</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ea eum alias reiciendis, tempore fugiat, distinctio nihil corrupti hic nostrum!</p>
				</div>
			</section>
			
			<section id="blog">
				<h3>Lo último de nuestro blog</h3>
				<div class="contenedor">
					<article>
						<img src="https://s21.postimg.org/5q412tttz/pet_blog1.jpg">
						<h4>Esconge tu mascota perfecta</h4>
					</article>
					<article>
						<img src="https://s21.postimg.org/owh860abr/pet_blog2.jpg">
						<h4>Los animales necesitan cariño</h4>
					</article>
					<article>
						<img src="https://s21.postimg.org/x397xl0ef/pet_blog3.jpg">
						<h4>Camina con tu mascota</h4>
					</article>
				</div>
			</section>
			
			<section id="info">
				<h3>Para muchos de nosotros las mascotas no son simples compañeros, son miembros de la familia.</h3>
				<div class="contenedor">
					<div class="info-pet">
						<img src="https://s21.postimg.org/k42tgtq9z/pet1.jpg" alt="">
						<h4>Max</h4>
					</div>
					<div class="info-pet">
						<img src="https://s21.postimg.org/ccm3i9m4n/pet2.jpg" alt="">
						<h4>Jerry</h4>
					</div>
					<div class="info-pet">
						<img src="https://s21.postimg.org/dsxm0ep1j/pet3.jpg" alt="">
						<h4>Tom</h4>
					</div>
					<div class="info-pet">
						<img src="https://s21.postimg.org/ui3na2b0n/pet4.jpg" alt="">
						<h4>Sam</h4>
					</div>
				</div>
			</section>
		</main>
		
		<footer>
			<div class="contenedor">
				<p class="copy">My pets &copy; 2015</p>
				<div class="sociales">
					<a class="fontawesome-facebook-sign" href="#"></a>
					<a class="fontawesome-twitter" href="#"></a>
					<a class="fontawesome-camera-retro" href="#"></a>
					<a class="fontawesome-google-plus-sign" href="#"></a>
				</div>
			</div>
		</footer>-->
        
</html>