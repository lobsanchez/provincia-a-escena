<?php require_once("assets/config/config.php"); 
$pagina=2;?>
<!DOCTYPE html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]> 		<html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]> 		<html class="ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9]> 		<html class="ie9 no-js" lang="es"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->
   <head>
      <meta charset="utf-8">
      <meta name="author" content="Luis Óscar Bueno Sánchez">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Proyecto final DIW - Provincia a escena">   
      <title>Provincia a escena </title>    
      <link rel="stylesheet" href="assets/css/dist/output.css" type="text/css"/>   
   </head>
   <body class="font-roboto">
        <?php include("assets/templates/header.php"); ?>   	
        <main>
          <section class="py-16 mx-auto text-left hero ">
                <h2 class="xl:text-[40px] lg:text-[30px] text-[20px] px-16 font-light font-anton text-black animate-fade-right animate-once animate-duration-700 animate-ease-linear">BAOBAB TEATRO</h2>
                <h1 class="xl:text-[160px] lg:text-[120px] text-[60px] px-16 leading-tight font-anton text-black animate-fade-right animate-once animate-duration-700 animate-ease-linear"><span>ALAS PARA ÁLEX</span></h1> 
          </section>
          <nav class="w-full rounded-md bg-white text-black px-16 py-3 mx-auto dark:bg-neutral-600">
                <ol class="list-reset flex">
                    <li>
                        <a href="index.php" class="text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600">INDEX</a>
                    </li>
                    <li>
                        <span class="mx-2 text-neutral-500 dark:text-neutral-300">/</span>
                    </li>
                    <li>
                        <a href="provincia.php" class="text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600">PROVINCIA A ESCENA</a>
                    </li>
                    <li>
                        <span class="mx-2 text-neutral-500 dark:text-neutral-300">/</span>
                    </li>
                    <li class="text-neutral-500 dark:text-neutral-300">VITIGUDINO</li>
                </ol>
            </nav>
          <section class="lg:flex flex-wrap text-white bg-black justify-center py-16 px-6">
            <img src="assets/images/alasparaalex.jpg" class="w-1/2">
           <div class="w-1/2 px-6">
                <h3 class="pt-2 px-8 text-6xl font-bold text-center animate-jump-in animate-once animate-duration-1000 animate-delay-1000 animate-ease-in-out">VITIGUDINO</h3>
                <div class="text-xl font-semibold text-center ">
                    <p class=" ">Centro Cultural</p>
                    <p class=" ">Domingo, 18 de noviembre</p>
                    <p class="">19:00 horas</p>
                </div>
                <div class="px-8 py-10 text-lg leading-10 font-light">
                    <p><span class="font-semibold">OBRA: </span>Alas para Álex</p>
                    <p><span class="font-semibold">COMPAÑÍA:</span>Baobab Teatro</p>
                    <p><span class="font-semibold">WEB:</span><a href="www.baobabteatro.com" target="_blanc">www.baobabteatro.com</a></p>
                    <p><span class="font-semibold">PROCEDENCIA:</span>Galicia</p>
                    <p><span class="font-semibold">DURACIÓN:</span> 50 minutos</p>
                    <p><span class="font-semibold">FORMATO:</span> Teatro de títeres y actores, recomendado a partir de 5 años</p>
                    <p><span class="font-semibold">MIRA UN POQUITO:</span><a href="https://vimeo.com/595167019" target="_blanc">https://vimeo.com/595167019</a></p>
                    <p><span class="font-semibold">PREMIOS:</span> Premio Provincia a Escena 2022 en la 25 Feria de Teatro de Castilla y León/Ciudad Rodrigo</p>
                </div>
                <div class="px-8 py-10 text-xl leading-8 font-light">    
                    <p class="pt-6 font-semibold">SINOPSIS:</p>
                    <p class="pt-6">Álex es un niño como cualquier niño de 8 años al que le encanta correr, jugar, quedar con sus amigos/as, ir al parque…, su pasión: el fútbol, pero un día Álex tiene que dejarlo todo, porque su cuerpo no responde, no camina… y como cualquier niño, Álex se enfada, se enfada con su madre, con su hermana, con su perro, hasta con el fútbol, Álex se enfada con el mundo y le asaltan muchas preguntas, - ¿por qué a mi?, ¿por qué no puedo jugar?, ¿por qué, por qué, por qué? …, está tan enfadado que deja de mirar a su alrededor, hasta que un día aparece Laura en su camino, y sin pedir permiso pero con mucho cuidado y cariño entra de lleno en su vida para ayudarle a cambiar su mirada.</p>
                </div>
            </div>  
          </section>
        </main>
        <?php include("assets/templates/footer.php"); ?> 
        <script src="assets/js/custom.js"></script>
   </body>   
</html>