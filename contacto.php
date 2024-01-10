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
                <h2 class="xl:text-[160px] lg:text-[120px] text-[60px] px-4 leading-tight font-anton animate-fade-up animate-duration-700 animate-ease-linear animate-normal"><span>CONTACTO</span></h2> 
          </section>
          
          <section class="container mx-auto lg:flex gap-5">            
                <div class="w-2/3 px-4">
                    <div class="container ">
                        <h6 class="px-4 font-extralight py-12 text-xl">ENVÍANOS UN MENSAJE</h6>
                        <p class="px-4 py-12 font-light text-3xl">RELLENA EL FORMULARIO PARA SOLICITARNOS CUALQUIER INFORMACIÓN Y NOS PONDREMOS EN CONTACTO CONTIGO LO ANTES POSIBLE.</p>
                    </div>    
                    <form>
                        <div class="container px-4 pb-10 mx-auto grid md:grid-cols-2 md:gap-8">                  
                            <div class="flex flex-col space-y-3">
                                <label for="name" class="text-[#121212] text-lg font-light">Nombre (obligatorio)</label>
                                <input type="text" name="name" id="name" class="bg-[#f0f0f0] text-lg px-4 rounded-[4px] h-14 w-full focus:outline-0 hover:border-black border focus:border-black focus:border">
                            </div>
                            <div class="flex flex-col space-y-3">
                                <label for="last_name" class="text-[#121212] text-lg font-light">Apellidos</label>
                                <input type="text" name="last_name" id="last_name" class="bg-[#f0f0f0] text-lg px-4 rounded-[4px] h-14 w-full focus:outline-0 hover:border-black border focus:border-black focus:border">
                            </div>
                        </div>
                        <div class="flex flex-col space-y-3 px-4 pb-10">
                            <label for="email" class="text-[#121212] text-lg font-light">Email (obligatorio)</label>
                            <input type="text" name="email" id="email" class="bg-[#f0f0f0] text-lg px-4 rounded-[4px] h-14 w-full focus:outline-0 hover:border-black border focus:border-black focus:border">
                        </div>
                        <div class="flex flex-col space-y-3 px-4 pb-10">
                            <label for="phone" class="text-[#121212] text-lg font-light">Teléfono</label>
                            <input type="text" name="phone" id="phone" class="bg-[#f0f0f0] text-lg px-4 rounded-[4px] h-14 w-full focus:outline-0 hover:border-black border focus:border-black focus:border">
                        </div>
                        <div class="flex flex-col space-y-3 px-4 pb-10">
                            <label for="subject" class="text-[#121212] text-lg font-light">Asunto (obligatorio)</label>
                            <input type="text" name="subject" id="subject" class="bg-[#f0f0f0] text-lg px-4 rounded-[4px] h-14 w-full focus:outline-0 hover:border-black border focus:border-black focus:border">
                        </div>
                        <div class="flex flex-col space-y-3 px-4 pb-10">
                            <label for="message" class="text-[#121212] text-lg font-light">Mensaje (obligatorio)</label>
                            <textarea id="message" rows="4" class="bg-[#f0f0f0] text-lg px-4 rounded-[4px] w-full focus:outline-0 hover:border-black border focus:border-black focus:border"></textarea>
                        </div>
                        <div class="px-4 pb-10">
                            <button type="submit" class="lg:text-lg xl:text-xl transition duration-500 rounded-[36px] text-white bg-black hover:border hover:border-black hover:bg-white hover:text-black font-normal text-sm w-full sm:w-auto px-6 py-4 text-center">ENVIAR</button>
                        </div>
                    </form>     
                </div>
                <div class="container w-1/3 text-center mt-80">
                    <img class="w-[80%] mx-auto pb-20"src="./assets/images/LG_PROVINCIA+ESCENA+blanco-01.png">
                    <h6 class="px-4 font-extralight pt-20 text-xl">EMAIL</h6>
                    <p class="px-4 py-2 font-light text-2xl">provinciaaescena@gmail.com</p>
                    <h6 class="px-4 font-extralight pt-20 text-xl">WHATSAPP</h6>
                    <p class="px-4 py-2 font-light text-2xl">636922702</p>
                </div>
          </section>
        </main>
        <?php include("assets/templates/footer.php"); ?> 
        <script src="assets/js/custom.js"></script>
   </body>   
</html>