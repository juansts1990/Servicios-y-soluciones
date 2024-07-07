<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="css/styles.css" rel="stylesheet">
    <title>Nuestros Aliados</title>
</head>
<body>
<div>
<style>
        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
            width: 80%;
            max-width: 1000px;
            margin: 0 auto; /* Centra el contenedor horizontalmente */
        }

        .aliado {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .aliado:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .text-box {
            margin-bottom: 20px;
            text-align: center;
        }

        .text-box p {
            margin: 0;
            font-size: 0.875em;
            line-height: 1.6;
        }

        .image-box {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .info-section {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
            width: 100%;
            max-width: 1000px;
            margin: 40px auto; 
        }
        main {
    text-align: center; /* Centra todo el contenido dentro de main */
}

.logo {
    /* margin-bottom: 20px;  */
}

.info-section {
    display: flex;
    justify-content: space-between; /* Cambiado a space-between para distribuir los elementos uniformemente */
    align-items: center;
    flex-wrap: wrap; /* Permite que los elementos se ajusten a una sola fila o se envuelvan a la siguiente */
}

.text-boxx {
    background-color: #f9f9f9;
    border-radius: 10px;
    padding: 20px;
    margin: 10px; /* Cambiado el margen a 10px para separar los elementos */
    flex: 2 2 calc(50% - 20px); 
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.text-boxx h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 10px;
}

.text-boxx p,
.text-boxx ul {
    font-size: 16px;
    line-height: 1.5;
    color: #555;
    margin-bottom: 10px;
}

.text-boxx ul {
    list-style: none;
    padding: 0;
}

.text-boxx ul li {
    margin-bottom: 5px;
}

.text-boxx ul li a {
    text-decoration: none;
    color: #007bff;
}

.text-boxx ul li a:hover {
    text-decoration: underline;
}

.image-boxx {
    width: 150px;
    flex: 1 1 calc(50% - 20px); /* Cambiado el ancho y establecido el margen */
    margin: 10px;
}

.image-boxx img {
    width: 100%;
    border-radius: 50%;
}

ul {
    margin: 0px;
    padding: 0px;
}

.footer-section {
    background: #294380; /* Cambiamos el color de fondo */;
    position: relative;
    padding: 50px 0;
}

.footer-cta {
    border-bottom: 1px solid #373636;
}

.single-cta i {
    color: #ff5e14;
    font-size: 30px;
    float: left;
    margin-top: 8px;
}

.cta-text {
    padding-left: 15px;
    display: inline-block;
}

.cta-text h4 {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 2px;
}

.cta-text span {
    color: #757575;
    font-size: 15px;
}

.footer-content {
    position: relative;
    z-index: 2;
}

.footer-pattern img {
    position: absolute;
    top: 0;
    left: 0;
    height: 330px;
    background-size: cover;
    background-position: 100% 100%;
}

.footer-logo {
    margin-bottom: 30px;
}

.footer-logo img {
    max-width: 200px;
}

.footer-text p {
    margin-bottom: 14px;
    font-size: 14px;
    color: #7e7e7e;
    line-height: 28px;
}

.footer-social-icon span {
    color: #fff;
    display: block;
    font-size: 20px;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
    margin-bottom: 20px;
}

.footer-social-icon a {
    color: #fff;
    font-size: 16px;
    margin-right: 15px;
}

.footer-social-icon i {
    height: 40px;
    width: 40px;
    text-align: center;
    line-height: 38px;
    border-radius: 50%;
}

.facebook-bg {
    background: #3B5998;
}

.twitter-bg {
    background: #55ACEE;
}

.google-bg {
    background: #DD4B39;
}

.footer-widget-heading h3 {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 40px;
    position: relative;
}

.footer-widget-heading h3::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: -15px;
    height: 2px;
    width: 50px;
    background: #ff5e14;
}

.footer-widget ul li {
    display: inline-block;
    float: left;
    width: 50%;
    margin-bottom: 12px;
}

.footer-widget ul li a:hover {
    color: #ff5e14;
}

.footer-widget ul li a {
    color: #878787;
    text-transform: capitalize;
}

.subscribe-form {
    position: relative;
    overflow: hidden;
}

.subscribe-form input {
    width: 100%;
    padding: 14px 28px;
    background: #2E2E2E;
    border: 1px solid #2E2E2E;
    color: #fff;
}

.subscribe-form button {
    position: absolute;
    right: 0;
    background: #ff5e14;
    padding: 13px 20px;
    border: 1px solid #ff5e14;
    top: 0;
}

.subscribe-form button i {
    color: #fff;
    font-size: 22px;
    transform: rotate(-6deg);
}

.copyright-area {
    background: #202020;
    padding: 25px 0;
}

.copyright-text p {
    margin: 0;
    font-size: 14px;
    color: #878787;
}

.footer-menu li {
    display: inline-block;
    margin-left: 20px;
}

.footer-menu li:hover a {
    color: #ff5e14;
}

.footer-menu li a {
    font-size: 14px;
    color: #878787;
}



    </style>
       
       <?php  
        include "components/header.php";

        ?>

    
      
        <div class="nav-bg">  
            <nav>
             <a href="index.php">Inicio</a>
            </nav>
         </div>

         <div class="container">
    <div class="aliado">
        <div class="text-box">
            <p>Nos enorgullece colaborar con Whirlpool, líder en innovación en electrodomésticos para el hogar. Juntos, estamos transformando la experiencia culinaria y de lavandería de nuestros clientes.</p>
        </div>
        <div class="image-box">
            <img src="img/Whirlpool Logo.png" alt="Logo de Whirlpool">
        </div>
    </div>
    
    <div class="aliado">
        <div class="text-box">
            <p>LG es nuestro aliado estratégico en tecnología de vanguardia. Su compromiso con la calidad y la excelencia nos permite ofrecer productos y servicios de primera clase a nuestros clientes.</p>
        </div>
        <div class="image-box">
            <img src="img/LG_logo.png" alt="Logo de LG">
        </div>
    </div>

    <div class="aliado">
        <div class="text-box">
            <p>Celsia es nuestro socio en energía limpia y sostenibilidad. Juntos, estamos impulsando la transición hacia un futuro más verde y sostenible para todos.</p>
        </div>
        <div class="image-box">
            <img src="img/Celsia logo.webp" alt="Logo de Celsia">
        </div>
    </div>

    <div class="aliado">
        <div class="text-box">
            <p>Ferretería Jamundí es parte fundamental de nuestra red de proveedores locales. Su compromiso con la calidad y el servicio nos permite ofrecer soluciones confiables a nuestros clientes.</p>
        </div>
        <div class="image-box">
            <img src="img/ferreteria jamundi.png" alt="Logo de Ferretería Jamundí">
        </div>
    </div>

    <div class="aliado">
        <div class="text-box">
            <p>Grival es sinónimo de calidad y confiabilidad en el sector de grifería y accesorios para el hogar. Estamos orgullosos de asociarnos con ellos para ofrecer productos de alto rendimiento a nuestros clientes.</p>
        </div>
        <div class="image-box">
            <img src="img/grival logo.jpg" alt="Logo de Grival">
        </div>
    </div>

    <div class="aliado">
        <div class="text-box">
            <p>Homcenter es nuestro aliado en el sector de mejoramiento del hogar. Su amplia gama de productos y servicios nos permite satisfacer las necesidades de nuestros clientes en todo momento.</p>
        </div>
        <div class="image-box">
            <img src="img/logo homcenter.png" alt="Logo de Homcenter">
        </div>
    </div>
</div>

     

<footer class="footer-section">
    <div class="container">
        <div class="info-section">
            <div class="text-boxx">
                <h2>Contáctanos</h2>
                <p>Tel: 310-728-43-21</p>
                <p>Lunes a domingos: 07:00 am – 06:00 pm</p>
                <p>Agendamos citas de lunes a sábado.</p>
                <p>Dirección: Calle 10c#81-71 Las Flores Jamundí</p>
            </div>
        
            <div class="text-boxx">
                <h2>Políticas</h2>
                <ul>
                    <li><a href="politicas.php">Política de Garantía</a></li>
                    <li><a href="#">Términos y Condiciones</a></li>
                    <li><a href="#">Política de Privacidad</a></li>
                    <li><a href="#">Política de Tratamiento de Datos</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text">
                            <h4>Encuentranos</h4>
                            <span>Dirección: Calle 10c#81-71 Las Flores Jamundí</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                            <h4>LLamanos o escribenos</h4>
                            <span>310-728-4321</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>Correo</h4>
                            <span>Juansebas6@hotmail.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image-boxx">
            <img src="img/Etiqueta circular Calidad Garantizada en Marrón.png" alt="Descripción de la imagen">
        </div>
        </div>
    </div>
</footer>



</body>
</html>