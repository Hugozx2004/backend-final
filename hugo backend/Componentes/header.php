<header class="header">

        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="index.php">
                    <h1 class="logo__nombre no-margin centrar-texto">Gamez<span class="logo__bold">Full</span></h1>
                </a>

                <nav class="navegacion">
                    <a href="nosotros.php" class="navegacion__enlace">Nosotros</a>
                    <a href="contacto.php" class="navegacion__enlace">Contacto</a>
                    <a href="categorias.php" class="navegacion__enlace">categorias</a>
                    <?php if(isset($_SESSION['user_id'])) {?>
                        <a href="cerrar_sesion.php" class="navegacion__enlace">Cerrar Sesión</a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg></a>
                        <?php } else { ?>
                        <a href="iniciar_sesion.php" class="navegacion__enlace">Iniciar Sesión</a>    
                        <?php } ?>
                </nav>
            </div>
        </div>

        <div class="header__texto">
            <h2 class="no-margin">Juegos y programas</h2>
            <p class="no-margin">Los mejores juegos en un solo lugar</p>
        </div>

        <div class="header__nav">
            <nav class="navegacion">
                <a href="nosotros.php" class="navegacion__enlace">Nosotros</a>
                <a href="contacto.php" class="navegacion__enlace">Contacto</a>
                <a href="categorias.php" class="navegacion__enlace">categorias</a>
            </nav>
        </div>
    </header>