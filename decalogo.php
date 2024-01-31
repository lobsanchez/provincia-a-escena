<?php require_once("assets/config/config.php"); 
$pagina=3; ?>
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
      <link rel="dns-prefetch" href="//unpkg.com" />
                <link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
                <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

                <style>
                    [x-cloak] {
                        display: none;
                    }
                </style>   
   </head>
   <body class="font-roboto container" id="top">
        <?php include("assets/templates/header.php"); ?>   	
        <main>
            <section class="py-16 text-right hero ">
                <h2 class="xl:text-[180px] lg:text-[140px] text-[60px] px-16 leading-none font-anton text-black animate-fade-right animate-once animate-duration-700 animate-ease-linear"><span>DECÁLOGO DEL BUEN ESPECTADOR</span></h2> 
            </section>
            <img class="mt-16" src="assets/images/asdf.jpg">
            <section class="justify-center pb-16 bg-white lg:flex flex-wrap">    
                <div class="px-6 pt-12">
                    <!-- <div class="w-[424px] h-[400px] bg-[#343363] text-center text-6xl text-white align-middle hover:text-[#343363] hover:bg-[url('../../images/sanctispiritus_foto_bn.jpg')]">SANCTI SPIRITUS</div> -->
                    <img src="assets/images/decalogo1.jpg" class="lg:w-[400px] w-[320px] mx-auto">
                </div>
                <div class="px-6 pt-12">
                    <img src="assets/images/decalogo2.jpg" class="lg:w-[400px] w-[320px] mx-auto">
                </div>
                <div class="px-6 pt-12">
                   <img src="assets/images/decalogo3.jpg" class="lg:w-[400px] w-[320px] mx-auto"> 
                </div>
                <div class="px-6 pt-12">
                    <img src="assets/images/decalogo4.jpg" class="lg:w-[400px] w-[320px] mx-auto">    
                </div>
                <div class="px-6 pt-12">
                    <img src="assets/images/decalogo5.jpg" class="lg:w-[400px] w-[320px] mx-auto">
                </div>
                <div class="px-6 pt-12">
                    <img src="assets/images/decalogo6.jpg" class="lg:w-[400px] w-[320px] mx-auto">
                </div>
                <div class="px-6 pt-12">
                    <img src="assets/images/decalogo7.jpg" class="lg:w-[400px] w-[320px] mx-auto">
                </div>
                <div class="px-6 pt-12">
                    <img src="assets/images/decalogo8.jpg" class="lg:w-[400px] w-[320px] mx-auto">
                </div>
                <div class="px-6 pt-12">
                    <img src="assets/images/decalogo9.jpg" class="lg:w-[400px] w-[320px] mx-auto">
                </div>
                <div class="px-6 pt-12">
                    <img src="assets/images/decalogo10.jpg" class="lg:w-[400px] w-[320px] mx-auto">
                </div>      
            </section>
        </main>
        <?php include("assets/templates/footer.php"); ?> 
        <script src="assets/js/custom.js"></script>
   </body>   
</html>