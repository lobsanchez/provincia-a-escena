<?php require_once("assets/config/config.php"); ?>
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
          <section class="container py-16 mx-auto hero">
            <h2 class="xl:text-[160px] lg:text-[120px] text-[60px] px-4 leading-tight font-anton animate-fade-up animate-once animate-duration-700 animate-delay-0 animate-ease-linear"><span>IV FESTIVAL FAMILIAR PROVINCIA A ESCENA</span></h2> 
            <div class="flex justify-start py-16">
              <p class="w-3/6 xl:text-3xl lg:text-xl text-lg px-4">FESTIVAL FAMILIAR<br> DE LAS ARTES ESCÉNICAS</p>
              <p class="w-3/6 xl:text-3xl lg:text-xl text-lg px-4">ESCUELA RURAL<br> DE ESPECTADORES/AS</p>
            </div>
          </section>
        
          <section class="lg:flex festival_familiar bg-background-1">
            <div class="p-20">
              <a class="text-6xl font-anton text-menu" href="#">FESTIVAL FAMILIAR</a>
              <p class="py-6 text-lg text-menu">EL IV FESTIVAL FAMILIAR DE LAS ARTES ESCÉNICAS contribuye a facilitar el acceso a la cultura a los ciudadanos 
                de entornos rurales con una programación multidisciplinar en recintos escénicos de una quincena de municipios 
                de menos de seis mil habitantes.
              </p>
              <button class="mt-6 px-4 py-1 transition duration-500 rounded-3xl text-lg text-white bg-menu hover:bg-white hover:text-menu">PROGRAMACIÓN ESCÉNICA</button>
            </div>
            <img class="lg:w-3/6" src="assets/images/web+inicio.png">
          </section>
         
          <section class="lg:flex escuela_espectadores bg-background-2">
            <div class="p-20">
              <a class="py-6 text-6xl font-anton text-menu" href="#">ESCUELA RURAL DE ESPECTADORES</a>
              <p class="py-6 text-lg text-menu">LA ESCUELA RURAL DE ESPECTADORES Y ESPECTADORAS, es una programación complementaria de actividades de 
                formación de públicos en colegios e institutos de la provincia de Salamanca, con atención preferencial 
                a los Centros Rurales Agrupados.
              </p>
              <button class="mt-6 px-4 py-1 transition duration-500 rounded-3xl text-lg text-white bg-menu hover:bg-white hover:text-menu">PROGRAMACIÓN ALUMNADO</button>
            </div>
            <img class="lg:w-3/6" src="assets/images/web+inicio2.png">
          </section>
        </main>
        <?php include("assets/templates/footer.php"); ?> 
        <script src="assets/js/custom.js"></script>
   </body>   
 </html>
