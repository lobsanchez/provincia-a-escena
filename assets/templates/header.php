<header class="container mx-auto">
    <div class="bg-white mx auto">
        <nav class="flex items-center mx-auto my-5 px-6 justify-between animate-fade-down animate-once animate-duration-500 animate-delay-500 animate-ease-linear">
            <a href="index.php" class="enlace">
                <img class="h-14 lg:h-16 xl:h-[80px] " src="assets/images/logo-provincia-low.png" width="Logotipo">
            </a>
            <ul class="hidden links lg:flex items-center justify-center gap-1 px-4 py-1 rounded-full menu text-menu">
                <li class="link"><?php if($pagina == 1): echo "active"; endif; ?>"><a href="festival.php"><span>EL FESTIVAL</span></a></li>
                <li class="link"><?php if($pagina == 2): echo "active"; endif; ?>"><a href="provincia.php"><span>PROVINCIA<sup class="index">A ESCENA</sup></span></a></li>
                <li class="link"><?php if($pagina == 2): echo "active"; endif; ?>"><a href="provincia.php#calendario" ><span>CALENDARIO</span></a></li>
                <li class="link"><?php if($pagina == 3): echo "active"; endif; ?>"><a href="escuela.php"><span>ESCUELA<sup class="index">DE ESPECTADORES</sup></span></a></li>
                <li class="link"><?php if($pagina == 4): echo "active"; endif; ?>"><a href="contacto.php"><span>CONTACTO</span></a></li>
            </ul>
            
            <input type="checkbox" id="check" class="hidden">
            <label for="check" class="checkbtn link lg:hidden">
                <h3>MENÚ</h3>
            </label>
        </nav>
        <section>
       
        </section>
    </div>  
</header>