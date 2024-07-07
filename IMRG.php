<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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

       <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .services {
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* Cambiamos de una columna a dos columnas */
        grid-gap: 20px;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
    }

        .service {
            border-radius: 15px; /* Bordes redondeados */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4); /* Sombra */
            transition: transform 0.5s ease; /* Transición suave */
        }

        .service img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
            border-radius: 8px; /* Redondea las esquinas de las imágenes */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Agrega sombra a las imágenes */
        }

        .service p {
            margin-bottom: 20px;
        }

        .service:hover {
            background: #ff6347;
            transform: translateY(-10px);
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 20px;
        }
        
        .grid-item {
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
            transition: transform 0.5s ease;
        }
        
        .grid-item:hover {
            transform: scale(1.05);
        }

        .icono {
        font-size: 24px; /* Tamaño del icono */
        color: #ff6347; /* Color del icono */
        margin-right: 5px; /* Espacio a la derecha del icono */
    }


    </style>
    
    </head>
    <body>
        <div class="container">
            <h1>Nuestros Servicios</h1>
            <div class="services">
                 <div class="service">
                    <img src="img/IMRG/Instalacion-de-gas-domiciliario.jpg" alt="Instalación y Mantenimiento de Redes de Gas Domiciliario">
                    <h2>Instalación y Mantenimiento de Redes de Gas Domiciliario</h2>
                    <p>Confía en nosotros para detectar y reparar cualquier fuga de agua de manera eficiente y oportuna.</p>
                </div>
                <div class="service">
                    <img src="img/IMRG/testo-316-2-application-indoor-air-quality-004613.jpeg" alt="Detección y Reparación de Fugas de Gas">
                    <h2>Detección y Reparación de Fugas de Gas</h2>
                    <p>Nuestro equipo está capacitado para llevar a cabo la instalación y reparación de sistemas de riego en cualquier tipo de terreno.</p>
                </div>
                <div class="service">
                    <img src="img/IMRG/GettyImages-1300212904-960x750.jpg" alt="Calentadores de Agua">
                    <h2>Instalación y Reparación de Artefactos a Gas</h2>
                    <p>Somos expertos en la instalación y reparación de calentadores de agua. Contamos con personal capacitado para brindarte el mejor servicio.</p>
                </div>
                
                <div class="service">
                    <img src="img/IMRG/LS.jpg" alt="Instalación y Mantenimiento de Sistemas de Filtración de Agua">
                    <h2>Mantenimiento Preventivo de Sistemas de Gas</h2>
                    <p>Te ofrecemos soluciones completas para la instalación y mantenimiento de sistemas de filtración de agua.</p>
                </div>
                
            </div>
        </div>
    </body>
    </html>

    <main>
        <section class="por-que-elegirnos">
            <h2>Por Qué Contar Con Nosotros</h2>
        </section>
    </main>
    
    <div class="grid-container">
        <div class="grid-item">
            <h2><i class="fas fa-user-tie icono"></i></i>EXPERTOS CALIFICADOS</h2>
            <p>Nuestros técnicos están altamente capacitados y cuentan con años de experiencia en la reparación de todo tipo de electrodomésticos. Constantemente actualizamos nuestras habilidades para estar al día con las últimas tecnologías.</p>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-search icono"></i>DIAGNÓSTICO PRECISO</h2>
            <p>Utilizamos herramientas avanzadas para diagnosticar problemas de manera precisa, lo que nos permite solucionarlos eficazmente y evitar reparaciones innecesarias.</p>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-dollar-sign icono"></i> PRECIOS TRANSPARENTES</h2>
            <p>Proporcionamos estimaciones claras y detalladas antes de comenzar cualquier trabajo. Nuestros precios son competitivos y justos, sin cargos ocultos.</p>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-wrench icono"></i> REPARACIONES DURADERAS</h2>
            <p>Nos enorgullecemos de la calidad de nuestro trabajo. Utilizamos piezas de repuesto originales o equivalentes de alta calidad para asegurar que nuestras reparaciones sean duraderas y fiables.</p>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-stopwatch icono"></i> SERVICIO RÁPIDO Y CONVENIENTE</h2>
            <p>Entendemos lo importante que es tener tus electrodomésticos funcionando correctamente. Ofrecemos un servicio rápido y nos esforzamos por realizar las reparaciones en la menor cantidad de visitas posible.</p>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-cogs icono"></i> SOLUCIONES PERSONALIZADAS</h2>
            <p>Entendemos que cada electrodoméstico y situación es única. Ofrecemos soluciones personalizadas que se adaptan específicamente a tus necesidades y al problema específico de tu aparato, garantizando una reparación efectiva.</p>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-clipboard-list icono"></i> ATENCIÓN AL DETALLE</h2>
            <p>Nos distinguimos por nuestra meticulosa atención al detalle en cada reparación. Este enfoque asegura que no solo se solucionen los problemas evidentes, sino que también se identifiquen y corrijan posibles fallos futuros.</p>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-shield-alt icono"></i> GARANTÍA EN TODAS LAS REPARACIONES</h2>
            <p>Ofrecemos garantías en todas nuestras reparaciones para darte tranquilidad. Si algo no está bien, nos comprometemos a hacerlo bien.</p>
        </div>
        
    </div>
    
    
</body>
</html>