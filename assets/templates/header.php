<header class="container">
    <div class="bg-white mx auto">
        <nav class="flex items-center justify-between mx-auto py-5 animate-fade-down animate-once animate-duration-500 animate-delay-1000 animate-ease-linear">
            
        
            <div class="logobox flex items-end bg-white"><a href="index.php" class="enlace"></a>
                <img class="h-[150px] inline-block logotipo1" src="assets/images/logo+mini.png" alt="Logotipo imagen">
                <img class="h-[70px] xl:h-[90px] logotipo2 hidden" src="assets/images/logo-provincia-low.png" alt="Logotipo texto">
            </div>
            <ul class="items-center justify-center hidden gap-1 px-4 py-1 rounded-full links lg:flex menu text-menu">
                <li class="link <?php if($pagina == 1): echo 'active'; endif; ?>"><a aria-label="III Festival Familiar de Teatro Provincia a Escena" href="festival.php"><span>FESTIVAL</span></a></li>
                <li class="link <?php if($pagina == 2): echo 'active'; endif; ?>"><a aria-label="Programación de Provincia a Escena" href="provincia.php"><span>PROGRAMACIÓN</span></a></li>
                <li class="link <?php if($pagina == 4): echo 'active'; endif; ?>"><a aria-label="Escuela rural de espectadores y espectadoras" href="escuela.php"><span>ESCUELA<sup class="index">DE ESPECTADORES</sup></span></a></li>
                <li class="link <?php if($pagina == 3): echo 'active'; endif; ?>"><a aria-label="Decálogo del buen espectador" href="decalogo.php" ><span>DECÁLOGO</span></a></li>
                <li class="link <?php if($pagina == 5): echo 'active'; endif; ?>"><a aria-label="Datos y formulario de contacto" href="contacto.php"><span>CONTACTO</span></a></li>
            </ul>
            
            <input type="checkbox" id="check" class="hidden">
            <label for="check" class="checkbtn link lg:hidden mr-4">
                <h3>MENÚ</h3>
            </label> 
        </nav>
        <section>
       
        </section>
    </div>  
</header>