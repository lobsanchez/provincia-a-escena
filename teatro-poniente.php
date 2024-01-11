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
          <section class="lg:flex flex-wrap bg-black justify-center py-16 px-6">
          
            <p class="pt-5 text-lg text-menu">
                Durante los meses de otoño se han programado 18 funciones para colectivos escolares, completando las dinámicas educativas iniciadas en la primera edición de Provincia
                a Escena con diferentes colegios rurales agrupados de la provincia de Salamanca y abriendo la oportunidad de llevar las acciones escénicas a colegios de nuevos 
                municipios. Se han programado 18 funciones escénicas de teatro, títeres y circo en las que participarán escolares de medio centenar de pueblos diferentes y otra 
                quincena de funciones en centros escolares. 
            </p>
            <p class="pt-5 text-lg text-menu">
                En los meses de octubre y noviembre se extenderán las actividades  con una programación específica para alumnado de educación infantil, primaria y secundaria; 
                combinando la programación escénica en teatros municipales específica para colegios e institutos, con el desarrollo de espectáculos de pequeño formato sin exigencias 
                técnicas que serán desarrollados en los propios centros escolares por compañías emergentes salmantinas (con la doble intención de apoyar la creación de jóvenes 
                artistas y la de disponer de espectáculos adaptado a las necesidades de los colegios rurales agrupados), al amparo de un conjunto de actividades didácticas y de 
                formación, talleres y coloquios con las compañías, de la mano de profesionales de la mediación cultural y educativa.
            </p>
          </section>

         
        </main>
        <?php include("assets/templates/footer.php"); ?> 
        <script src="assets/js/custom.js"></script>
   </body>   
</html>