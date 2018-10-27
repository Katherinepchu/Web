<?php
session_start();
include 'conexion.php';
?>
<html lang="es">
    <head>
        <title>ALONDRA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="style.css">
        <!-- Jquery lib  from google server============-->
        <script src="principal.js"></script>
        <script src="js/jquery-1.7.2.min.js"></script>
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/jquery-3.1.0.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    </head>
    
    <header>

	<div class="contenedor">
		<h1 class="icon-dog">ALONDRA</h1>
		<input type="checkbox" id="menu-bar">
		<label class="fontawesome-align-justify" for="menu-bar"></label>
				<nav class="menu">
					<a href="#" onclick="galeria();">Galeria</a>
					<a href="">Reservaciones</a>
					<a href="">Contactenos</a>
					<a href="">Trabajacon Nosotros</a>
				</nav>
			</div>
    </header>
		
		<main>
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
				<h2>BIENVENIDOS A NUESTRO CLUB</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ea eum alias reiciendis, tempore fugiat, distinctio nihil corrupti hic nostrum!</p>
				</div>
			</section>
			
			<section id="blog">
                
				<h3>Lo último de nuestro blog</h3>
				<div class="contenedor">
                    
					<article>
						<img src="https://s21.postimg.org/5q412tttz/pet_blog1.jpg">
						<h4>Organización Empresariales</h4>
					</article>
                    
					<article>
						<img src="https://s21.postimg.org/owh860abr/pet_blog2.jpg">
						<h4>Matrimonios</h4>
					</article>
					<article>
						<img src="https://s21.postimg.org/x397xl0ef/pet_blog3.jpg">
						<h4>Fiesta de 15 años</h4>
					</article>
                    <article>
						<img src="https://s21.postimg.org/x397xl0ef/pet_blog3.jpg">
						<h4>Fiestas Infantiles</h4>
					</article>
                    <article>
						<img src="https://s21.postimg.org/x397xl0ef/pet_blog3.jpg">
						<h4>Baby Shower Organizacion</h4>
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
		</footer>
</html>