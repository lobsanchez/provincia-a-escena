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
                <h2 class="xl:text-[40px] lg:text-[30px] text-[20px] px-16 font-light font-anton text-black animate-fade-right animate-once animate-duration-700 animate-ease-linear">ÓSCAR ESCALANTE</h2>
                <h1 class="xl:text-[160px] lg:text-[120px] text-[60px] px-16 leading-tight font-anton text-black animate-fade-right animate-once animate-duration-700 animate-ease-linear"><span>IMAGINA</span></h1> 
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
                    <li class="text-neutral-500 dark:text-neutral-300">ALDEADÁVILA DE LA RIBERA</li>
                </ol>
            </nav>
          <section class="lg:flex flex-wrap text-white bg-black justify-center py-16 px-6">
            <img src="assets/images/IMAGEN+EL+PRINCIPATO_mini.jpg" class="w-1/2">
           <div class="w-1/2 px-6">
                <h3 class="pt-2 px-8 text-6xl font-bold text-center animate-jump-in animate-once animate-duration-1000 animate-delay-1000 animate-ease-in-out">ALDEADÁVILA DE LA RIBERA</h3>
                <div class="text-xl font-semibold text-center ">
                    <p class=" ">Centro Cultural</p>
                    <p class=" ">Domingo, 28 de octubre</p>
                    <p class="">18:00 horas</p>
                </div>
                <div class="px-8 py-10 text-lg leading-10 font-light">
                    <p><span class="font-semibold">OBRA:</span>Imagina</p>
                    <p><span class="font-semibold">COMPAÑÍA:</span>Óscar Escalante</p>
                    <p><span class="font-semibold">WEB:</span><a href="www.oscarescalante.com" target="_blanc">www.oscarescalante.com</a></p>
                    <p><span class="font-semibold">PROCEDENCIA:</span>Castilla y León/Valladolid</p>
                    <p><span class="font-semibold">DURACIÓN:</span> 60 minutos</p>
                    <p><span class="font-semibold">FORMATO:</span> Magia y humor</p>
                    <p><span class="font-semibold">MIRA UN POQUITO:</span><a href="https://youtu.be/qUnKqdCd7yY" target="_blanc">https://youtu.be/qUnKqdCd7yY</a></p>
                    <p><span class="font-semibold">PREMIOS:</span> Premio Nacional de Magia de Calle 2021. Premio Nacional de Magia Escénica 2019. Premio Nacional de Magia 2020</p>
                </div>
                <div class="px-8 py-10 text-xl leading-8 font-light">    
                    <p class="pt-6 font-semibold">SINOPSIS:</p>
                    <p class="pt-6">¡Bienvenidos a 'Imagina', el espectáculo que trasciende generaciones! En este cautivador show, el ilusionista internacional Óscar Escalante te lleva en un viaje mágico a través del tiempo, desde sus humildes comienzos hasta convertirse en un maestro de la magia. , 'Imagina' fusiona la magia con las experiencias personales de Escalante para sumergir al público en un mundo de asombro y emoción.</p>
                    <p class="pt-6">Pero 'Imagina' no es solo magia, es un recordatorio de que la imaginación es la clave para crear un futuro extraordinario. Cada truco, cada ilusión, es una prueba de que lo imposible se convierte en realidad cuando creemos en ello con pasión.</p>
                    <p class="pt-6">Este espectáculo único, cargado de efectos mágicos exclusivos, ofrece 60 minutos de entretenimiento de calidad suprema. En 'Imagina', el ilusionismo se entrelaza con el humor y la reflexión personal, brindando un respiro a la complejidad de la vida moderna.</p>
                    <p class="pt-6">¿Estás listo para desafiar tus límites imaginativos y unirte a él en esta experiencia única?</p>
                </div>
            </div>  
          </section>
        </main>
        <?php include("assets/templates/footer.php"); ?> 
        <script src="assets/js/custom.js"></script>
   </body>   
</html>