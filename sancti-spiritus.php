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
                <h2 class="xl:text-[40px] lg:text-[30px] text-[20px] px-16 font-light font-anton text-black animate-fade-right animate-once animate-duration-700 animate-ease-linear">TEATRO DE PONIENTE</h2>
                <h1 class="xl:text-[160px] lg:text-[120px] text-[60px] px-16 leading-tight font-anton text-black animate-fade-right animate-once animate-duration-700 animate-ease-linear"><span>LAS BUSCADORAS DE PALABRAS</span></h1> 
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
                    <li class="text-neutral-500 dark:text-neutral-300">SANCTI SPIRITUS</li>
                </ol>
            </nav>
          <section class="lg:flex flex-wrap text-white bg-black justify-center py-16 px-6">
            <img src="assets/images/TEATRO+DE+PONIENTE_mini.jpg" class="w-1/2">
           <div class="w-1/2 px-6">
                <h3 class="pt-2 px-8 text-6xl font-bold text-center animate-jump-in animate-once animate-duration-1000 animate-delay-1000 animate-ease-in-out">SANCTI SPIRITUS</h3>
                <div class="text-xl font-semibold text-center ">
                    <p class=" ">Centro cultural</p>
                    <p class=" ">Domingo, 1 de octubre</p>
                    <p class="">18:30 horas</p>
                </div>
                <div class="px-8 py-10 text-lg leading-10 font-light">
                    <p><span class="font-semibold">OBRA:</span>  Las buscadoras de las palabras</p>
                    <p><span class="font-semibold">COMPAÑÍA:</span> Teatro de Poniente</p>
                    <p><span class="font-semibold">WEB:</span>  www.teatrodeponiente.com</p>
                    <p><span class="font-semibold">PROCEDENCIA:</span> Castilla y León/Salamanca</p>
                    <p><span class="font-semibold">DURACIÓN:</span> 60 minutos</p>
                    <p><span class="font-semibold">FORMATO:</span> Teatro</p>
                    <p><span class="font-semibold">MIRA UN POQUITO:</span>https://www.youtube.com/watch?v=bUcwdJ-Y-bg&t=1s</p>
                    <p><span class="font-semibold">Premios:</span> Compañía nominada Premios Max 2023</p>
                </div>
                <div class="px-8 py-10 text-xl leading-8 font-light">    
                    <p class="pt-6 font-semibold">SINOPSIS:</p>
                    <p class="pt-6">Rita Peripecia y Lola Molécula son las protagonistas de nuestra aventura. Dos exploradoras que viajan por el universo buscando las palabras más bonitas del mundo, reales e inventadas, que se han ido a esconder en los libros de aventuras para niños y jóvenes más importantes de la Literatura Universal. Rita Peripecia es una soñadora sin miedo a nada. Una viajera intrépida, valiente, y atrevida a quien ningún peligro frena. Junto a ella viaja Lola Molécula, una audaz y extravagante científica que no para de inventar objetos de lo más curiosos, para conseguir llevar a cabo la misión.</p>
                    <p class="pt-6">Junto a nuestras protagonistas viajaremos a Las aventuras del Rey Arturo, La Isla del Tesoro, Los viajes de Gullliver, La vuelta al mundo en 80 días, Alicia en el país de las maravillas, La Historia Interminable o a Los tres mosqueteros.</p>
                </div>
            </div>  
          </section>
        </main>
        <?php include("assets/templates/footer.php"); ?> 
        <script src="assets/js/custom.js"></script>
   </body>   
</html>