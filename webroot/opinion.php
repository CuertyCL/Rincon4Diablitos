<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;500;600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/test.css">
    <link rel="icon" type="image/png" href="images/logo.png">
</head>

<body>
    <header class="sitio-header">
        <div id="menu-btn" class="fas fa-bars icono"></div>
        <!--<div id="search-btn" class="fas fa-search icono"></div>-->
        <span></span><!--Espacio-->
        <a href="index.php" class="logo"><img src="images/logo.png"></a>

        <!--Barra principal de menu-->
       <nav class="navbar">
            <a href="index.php">Inicio</a>
            <a href="menu.php">Menu</a>
            <a href="index.php">Acerca de</a>
            <a href="index.php">Ubicacion</a>
            <a href="blog.php">Blog</a>
            <a href="opinion.php">Opiniones</a>
        </nav> 
        <!--Iconos de redes sociales-->
        <div class="iconosSuperior">
            <a href="https://wa.me/56979592806" class="fab fa-whatsapp icono"></a>
            <a href="https://www.instagram.com/el_rincon_de_los_4_diablitos/" class="fab fa-instagram icono"></a>
        </div>
    </header>

    <section class="home" id="inicio">
            <div class="contenido">
                <img id="Foto" data-aos="fade-up" data-aos-delay="150" src="./images/logo-grande.png" alt="banner">
                <h3 data-aos="fade-up" data-aos-delay="300">Opiniones</h3>
                <p data-aos="fade-up" data-aos-delay="450"></p>
            </div>
    </section>

    <!-- Seccion de opiniones -->
    <section class="opinion" id="opinion">
        <div class="row">
            <div class="form">
                <form action="php/contacto.php" method="POST" >
                    <input data-aos="fade-up" data-aos-delay="150" type="text" name="nombre" placeholder="Nombre completo" class="cajas" required>
                    <input data-aos="fade-up" data-aos-delay="300" type="email" name="email" placeholder="Correo electronico" class="cajas" required>
                    <input data-aos="fade-up" data-aos-delay="450" type="number" name="telefono" placeholder="Telefono" class="cajas" required>
                    <textarea data-aos="fade-up" data-aos-delay="600" name="mensaje" placeholder="Escriba un mensaje" class="cajas" cols="30" rows="10" required></textarea>
                    <input data-aos="fade-up" data-aos-delay="750" type="submit" value="Enviar mensaje" class="btn">
                </form>
            </div> 
        </div>
    </section>

    <footer class="sitio-footer">
        <div class="footer-container">
            <div class="footer-logo">
                <a href="index.php"><img src="images/logo.png" alt="Rincon De Los 4 Diablitos" style="height:60px;"></a>
            </div>
            <div class="footer-links">
                <h4>Navegación</h4>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="menu.php">Menú</a></li>
                    <li><a href="#acercade">Acerca de</a></li>
                    <li><a href="#ubicacion">Ubicación</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="opinion.php">Opiniones</a></li>
                </ul>
            </div>
            <div class="footer-contacto">
                <h4>Contacto</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Esmeralda 6367, Peñalolén</li>
                    <li><i class="fas fa-phone"></i> <a href="tel:+56979592806">+56 9 7959 2806</a></li>
                    <li><i class="fab fa-whatsapp"></i> <a href="https://wa.me/56979592806" target="_blank" rel="noopener">WhatsApp</a></li>
                    <li><i class="fab fa-instagram"></i> <a href="https://www.instagram.com/el_rincon_de_los_4_diablitos/" target="_blank" rel="noopener">@el_rincon_de_los_4_diablitos</a></li>
                </ul>
            </div>
            <div class="footer-horario">
                <h4>Horario</h4>
                <ul>
                    <li>Domingo a Jueves: 19:00 - 01:00</li>
                    <li>Viernes y Sábado: 19:00 - 03:00</li>
                </ul>
            </div>
        </div>
        <div class="footer-creditos">
            <p>&copy; 2024 Rincon De Los 4 Diablitos. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!--Scripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="js/script.js"></script>
</body>
</html>

