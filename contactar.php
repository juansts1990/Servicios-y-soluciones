
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactar</title>
    <link href="css/contactar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>


        <?php  
        include "components/header.php";

        ?>
        
      
        <div class="nav-bg">  
            <nav>
             <a href="index.php">Inicio</a>
            </nav>
         </div>

     <div class="container">
        <?php
        if(isset($_GET["result"] ) && $_GET["result"]=="success"){
            echo "MENSAJE ENVIADO";
        }

        ?>
        <form action = "contactar_process.php" method="post" class="form">
            <h3>Contactanos</h3>
            
            <label for="nombre">Nombre Completo</label>
            <input name="nombre" type="text" id="nombre" class="box">
            <label for="celular">Número de Celular</label>
            <input name="celular" type="text" id="celular" class="box">
            <label for="correo">Correo Electronico</label>
            <input name="correo" type="text" id="correo" class="box">
            <label for="mensaje">Observacion</label>
            <textarea name="mensaje" class="box" id="mensaje" cols="30" rows="10"></textarea> 

            <input type="submit" value="Enviar" class="submit"> 
            
        </form>

        <div class="info">
                <img src="img/info-1.svg" class="img-1" alt="">
           
                <div class="location">

                 <div class="icons">
                 <a href="mapa.php" target="_blank">
                    <img src="img/google-maps.png" alt="">
                    <p>Nuestra Ubicacion</p>
                    </div>
                    <div class="icons">
                    <a href="https://www.gmail.com/mail/help/intl/es/about.html?iframe" target="_blank">
                    <img src="img/email.png" alt="">
                    <p>juansebas6@hotmail.com</p>
                    </div>
                </div>
                <div class="social">
                    <a href="https://www.facebook.com/?locale=es_LA" target="_blank">
                    <img src="img/facebook.png" alt="icono de facebook">
                    <a href="https://www.instagram.com/" target="_blank">
                    <img src="img/instagram.png" alt="ícono de instagram"></a>
                    <a href="https://wa.me/573107284321" target="_blank">
                    <img src="img/whatsapp.png" alt="Icono de whatsapp"></a>
                </div>

        </div>
    </div>
</body>
</html>
