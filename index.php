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
          <section class="container py-12 mx-auto hero">
            <h2 class="lg:text-[160px] text-[120px] leading-tight font-anton "><span>IV FESTIVAL FAMILIAR PROVINCIA A ESCENA</span></h2> 
            <div class="flex justify-start py-16">
              <p class="w-3/6 lg:text-4xl text-2xl">FESTIVAL FAMILIAR<br> DE LAS ARTES ESCÉNICAS</p>
              <p class="w-3/6 lg:text-4xl text-2xl">ESCUELA RURAL<br> DE ESPECTADORES/AS</p>
            </div>
          </section>
          <section class="lg:flex block festival_familiar bg-background-1">
            <div class="">
              <div class="ml-20 mt-20 text-6xl font-anton text-menu"><a class="" href="#">FESTIVAL FAMILIAR</a></div>
              <p class="mx-20 my-6 text-lg text-menu">EL IV FESTIVAL FAMILIAR DE LAS ARTES ESCÉNICAS contribuye a facilitar el acceso a la cultura a los ciudadanos 
                de entornos rurales con una programación multidisciplinar en recintos escénicos de una quincena de municipios 
                de menos de seis mil habitantes.
              </p>
              <button class="ml-20 mt-6 px-4 py-1 transition duration-500 rounded-3xl text-lg text-white bg-menu hover:bg-white hover:text-menu">PROGRAMACIÓN ESCÉNICA</button>
            </div>
            <div>
              <img class="" src="assets/images/web+inicio.png">
            </div>
          </section>
          <section class="lg:flex escuela_espectadores bg-background-2">
            <div>
            <div class="ml-20 mt-20 text-6xl font-anton text-menu"><a href="#">ESCUELA RURAL DE ESPECTADORES</a></div>
              <p class="mx-20 my-6 text-lg text-menu">LA ESCUELA RURAL DE ESPECTADORES Y ESPECTADORAS, es una programación complementaria de actividades de 
                formación de públicos en colegios e institutos de la provincia de Salamanca, con atención preferencial 
                a los Centros Rurales Agrupados.
              </p>
              <button class="ml-20 mt-6 px-4 py-1 transition duration-500 rounded-3xl text-lg text-white bg-menu hover:bg-white hover:text-menu">PROGRAMACIÓN ALUMNADO</button>
            </div>
            <div>
              <img class="" src="assets/images/web+inicio2.png">
            </div>
          </section>
        </main>
        <?php include("assets/templates/footer.php"); ?> 
        <script src="assets/js/custom.js"></script>
   </body>   
 </html>
