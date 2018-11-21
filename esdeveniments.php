<?php
$enviado = -1; // Controla si se envia o no
if (isset($_POST['nombre'])) { // Verifica si viene desde el formulario o se carga la pagina por primera vez
$to = 'info@polisso.com'; // Se envia al webmaster la primer copia
$mensaje = 'El mensaje lo envia ' . $_POST['nombre'] . ' desde su email ' . $_POST['email'] . " \r \r" . $_POST['mensaje'];
mail($to, $_POST['asunto'], $mensaje); // envio al webmaster


$to = $_POST['email']; // SE envia al usuario la segunda copia
$mensaje = "Mensaje enviado correctamente a Polisso. \r \r"  . $_POST['mensaje'];

mail($to, $_POST['asunto'], $mensaje); // Envio al usuario 
$enviado = 1; // Marca que se envio OK
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Metadatos Web -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- HTML Meta Tags -->
    <title>Polissó</title>
    <meta name="description" content="">


    <!-- Google / Search Engine Tags -->
    <meta itemprop="Polissó" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="http://">


    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="http://">


    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SEAT">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="http://">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
        crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/estilos.css">

    <!-- Para evitar que solo los rastreadores web de Google indexen una página -->
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">


</head>

<body>

    <!--****************************************** 
        ********** Bloque HEADER *****************
    **********************************************-->
    <header class="header__humo">
        <!-- MENU HAMBURGUESA -->

        <nav class="menu">
            <a href="index.html">
                <div class="menu__logo"></div>
            </a>
            <div class="menu__desplegable">
                <label class="menu__desplegable__icono" for="click">
                    <div></div>
                </label>
                <input type="checkbox" id="click">
                <ul class="menu__desplegable__lista">
                    <li class="menu__desplegable__lista__link1">
                        <a href="index.html" class="menu__desplegable__lista__link1__inicio">inici</a>
                    </li>
                    <li class="menu__desplegable__lista__link2">
                        <a href="productes.html" class="menu__desplegable__lista__link__productos">products</a>
                    </li>
                    <li class="menu__desplegable__lista__link3">
                        <a href="esdeveniments.php" class="menu__desplegable__lista__link__eventos">esdeveniments</a>
                    </li>
                    <li class="menu__desplegable__lista__link4">
                        <a href="sobre_noltros.html" class="menu__desplegable__lista__link__nosotros">sobre noltros</a>
                    </li>
                </ul>
            </div>
        </nav>



    </header>

    <!--****************************************** 
        ********** Bloque SECCION Descubrenos**********
    **********************************************-->
    <!-- eslogan -->
    <h1 class="eslogan">Polissó, el teu concepte de gelat de qualitat.</h1>

    <section class="eventos">

        <div class="eventos__info">
            <div class="eventos__info__svg">
                <div class="eventos__info__svg__pastel"></div>
                <div class="eventos__info__svg__boda"></div>
            </div>
            <p class="eventos__info__texto">
                Vols originalitat, espectacle, diversió i gust pes teu esdeveniment? Ho has conseguit, POLISSO NITRE
                HISSI CREAM te proposa tot això i més. Pots escollir es gusts de sa nostra carta de gelats o
                dissenyarem junts es que tu desitgis, només has de contactar-mos amb, almanco, una setmana
                d'anticipació i te convidarem una degustació en es nostro local en ….
            </p>
        </div>
        <!-- Formulario de envio de sugerencias y  Contacto -->
        <?php
if ($enviado == 1) { // Se envio ??
?>
      El mensaje fue enviado con exito !!.
      <?php
} else { // No es el envio es la primera vez y pide los datos
?>


        <form class="eventos__formulario" action="" method="post" enctype="multipart/form-data" name="form1">
            <label class="eventos__formulario__label__nom" for='nombre'>Nom: *</label>
            <input class="eventos__formulario__input__nom" name='nombre' type='text' maxlength='50' placeholder='Nom *'
                autofocus>

            <label class="eventos__formulario__label__email" for='email'>Email: * </label>
            <input class="eventos__formulario__input__email" name='email' type='email' placeholder='Email *' required>

            <label class="eventos__formulario__label__asunto" for='asunto'>Asumpte: * </label>
            <input class="eventos__formulario__input__asunto" name='asunto' type='text' maxlength='50' placeholder='Asumpte *'
                required>

            <label class="eventos__formulario__label__msj" for='mensaje'>Missatge * </label>
            <textarea class="eventos__formulario__textarea__msj" name='mensaje' placeholder='Introdueix aqui el missatge *'
                required></textarea>

            <div class="eventos__formulario__input__btn">
                <input class="eventos__formulario__input__btn__btn" id="submit" type='submit' value='Enviar'>
            </div>

        </form>
        <?php
}
?>

        <!-- Apartado de info. de Contacto -->
        <div class="eventos__contacto">
            <h4>Info. contacte</h4>
            <ul>
                <li class="eventos__contacto__dir">Direcció: (calle)</li>
                <li class="eventos__contacto__email">Email: email.contacto@gmail.com</li>
                <li class="eventos__contacto__telf">Telèfon: 68522321 | 971 22233</li>
            </ul>
        </div>


        <!-- mapa de localizacion del local-->
        <div class="eventos__mapa">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3075.1144283190924!2d2.6500825153706433!3d39.579571379471226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x129792563cfdc695%3A0x338f043e9b713070!2sIbecon+Centro+De+Formaci%C3%B3n.!5e0!3m2!1ses!2ses!4v1541620531166"
                width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>

         <section class="googlemaps__pequeno">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3075.1144283190924!2d2.6500825153706433!3d39.579571379471226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x129792563cfdc695%3A0x338f043e9b713070!2sIbecon+Centro+De+Formaci%C3%B3n.!5e0!3m2!1ses!2ses!4v1541620531166"
                width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

        </section>



    </section>


    <!--****************************************** 
    ********** Bloque FOOTER *****************
    **********************************************-->
    <footer>
        <div class="footer__datos">

            <!-- h6 -->

            <h6>NICTRO ICE CREAM @ 2018</h6>
            <ul>
                <li>direcion</li>
                <li>horario</li>
            </ul>
            <h4>Segueix-mos:</h4>
        </div>



        <!-- redes sociales -->
        <div class="footer__redessociales">

            <a href="https://www.facebook.com/">
                <div class="footer__redessociales__fb"> </div>
            </a>
            <a href="https://twitter.com/?lang=es">
                <div class="footer__redessociales__tw"></div>
            </a>
            <a href="https://www.instagram.com/">
                <div class="footer__redessociales__insta"></div>
            </a>
        </div>

        <!-- ENLACES -->
        <div class="footer__enlaces">
            <div class="footer__enlaces__derecha">
                <ul>
                    <li>
                        <a href="index.html" class="footer__enlaces--inici">Inici</a>
                    </li>
                    <li>
                        <a href="productes.html" class="footer__enlaces--servicios">Productes</a>
                    </li>
                </ul>
            </div>
            <span class="footer__linea"></span>
            <div class="footer__enlaces__izquierda">
                <ul>
                    <li>
                        <a href="esdeveniments.php" class="footer__enlaces--about">Esdeveniments</a>
                    </li>
                    <li class="footer__enlaces--blog">
                        <a href="sobre_noltros.html">Sobre noltros</a>
                    </li>
                </ul>
            </div>
        </div>

    </footer>

</body>

</html>