<?php

    require_once("../conecctions/conexion.php");

?>




<?php
    if ((isset($_POST["MM_insert"]))&&($_POST["MM_insert"]=="formreg"))
    {
        $nombre=    $_POST['nombre'];
        $telefono=     $_POST['telefono'];
        $correo=    $_POST['correo'];
        $ciudad=   $_POST['ciudad'];
    
$insertsql="INSERT INTO contactarr(nombre,telefono,correo,ciudad) VALUES('$nombre','$telefono','$correo','$ciudad')";
           mysqli_query($mysqli,$insertsql);
           echo '<script>alert ("envio exitoso, Gracias");</script>';
           echo '<script>window.location="plantilla.html"</script>';
    }    
    
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagen/logo.PNG" type="image/x-icon">
    <link rel="stylesheet" href="../css/estylos.css" type="text/css">
    <title>TECNOSOFT</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Tiro+Kannada&display=swap');
</style>

<body>
    <header>

        <div id="encabezado">
            <div class="avatar">
                <img src="../imagen/logo.PNG" alt="avatar image">
            </div>
            <div class="logo">
                <img src="../imagen/logo.PNG" alt="avatar image">
            </div>
            <div>
                <h1 class="title1">TECNOSOFT</h1>
                <h1 class="title">Tecnología, Innovación y Soluciones</h1>
            </div>

        </div>
        <br>
        <br>
        <br>
        <div class="login-box">
            <ul class="menu">
                <li><a href="servicios.html">servicios</a></li>
                <li><a href="productos.html">productos</a></li>
                <li><a href="plantilla.html">inicio</a></li>
                <li><a href="acercade.html">acerca de</a></li>
                <li class="activa"><a href="#">contacto </a></li>
            </ul>
            <div id="contenido">
                <h2>contacta con nosotros</h2>
                <div id="imgs-contact">
                    <h3>ESCRIBENOS O LLAMANOS</h3>
                    <img src="../imagen/correo.webp" alt="correo">
                    <p id="contact"><span class="envelope"></span>info.contact@gmail.com<br>yalinares04qmisena.edu.co</p>
                    <img id="telefono" src="../imagen/telefono.jpg" alt="telefono">
                    <p id="contact"><span class="mobile"></span>+1(585)902-8675<br>+573138789025<br>+573114757886</p>

                </div>
                <div id="text-info">
                    <p>si quieres informacion sobre nuestros productos y servicios o estas interesado en informacion adicional, rellena nuestro formulario y nos pondremos en contacto contigo</p>
                </div>
                <div id="formulario">

                    <form method="POST" name="formreg"  autocomplete="off">
                        <h2>Dejanos tus datos</h2>
                        <div class="user_info">
                            <label for="names">nombres *</label>
                            <input type="text" name="nombre" id="names">
                            <br>
                            <br>
                            <label for="names">telefono/ celular *</label>
                            <input type="number" name="telefono" id="names" required>
                            <br>
                            <br>
                            <label for="email">correo electronico</label>
                            <input type="varchar" name="correo" id="email" required>
                            <br>
                            <br>
                            <label for="ciudad">donde vive*</label>
                            <input type="text" name="ciudad" id="ciudad" required>
                            <br>
                            <br>
                            <input id="boton" type="submit" value="enviar">
                            <input type="hidden" name="MM_insert" value="formreg">
                        </div>
                    </form>
                </div>
            </div>
            <footer>
                <div id="footer">
                    <img id="piie" src="../imagen/logo.png" alt="avatar image">
                    <h4>siguenos en nuestras redes sociales</h4>
                    <div id="pie">
                        <a href="#"><img src="../imagen/facebook.png" alt="facebook imagen"></a>
                        <a href="#"><img src="../imagen/instagram.png" alt="instagram imagen"></a>
                        <a href="#"><img src="../imagen/twiter.png" alt="tik tok imagen"></a>
                        <h4>Tecnología, Innovación y Soluciones</h4>
                    </div>
                    <br>
                    <br>

                </div>

            </footer>
        </div>
    </header>
</body>

</html>