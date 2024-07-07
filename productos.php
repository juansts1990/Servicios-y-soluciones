<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>



    <div>
    </style>
      
        
      
       
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
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
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
        .service p {
            margin-bottom: 20px;
        }
        

        .service img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
            border-radius: 8px; /* Redondea las esquinas de las imágenes */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Agrega sombra a las imágenes */
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

    <?php  
include "components/header.php";

?>
    <div class="nav-bg">  
            <nav>
             <a href="index.php">Inicio</a>
            </nav>
         </div>
        
      
    

        <div class="container">
            <h1>Nuestros Servicios</h1>
            <div class="services">
            <div class="service">
                <img src="img/productos/tv.webp" alt="Televisores">
                <h2>Televisores</h2>
                <p>Somos expertos en televisores, brindando servicios de instalación, reparación y mantenimiento para garantizar que disfrutes de una experiencia de visualización óptima. Ya sea que necesites configurar un nuevo televisor, resolver problemas de señal o realizar actualizaciones, nuestro equipo está aquí para ayudarte.</p>
            </div>
            <div class="service">
                <img src="img/productos/nevera.jpg" alt="Neveras">
                <h2>Neveras</h2>
                <p>Con años de experiencia en la industria, ofrecemos servicios completos para tus neveras, desde la instalación inicial hasta las reparaciones y el mantenimiento periódico. Nos aseguramos de que tu nevera funcione de manera eficiente y confiable, manteniendo tus alimentos frescos por más tiempo.</p>
            </div>
            <div class="service">
                <img src="img/productos/lavadoras.jpg" alt="Lavadoras">
                <h2>Lavadoras</h2>
                <p>Nuestro equipo de técnicos está especializado en el servicio de lavadoras, brindando soluciones rápidas y efectivas para garantizar que tus prendas se laven de manera eficiente y sin problemas. Desde reparaciones simples hasta mantenimiento preventivo, estamos aquí para mantener tu lavadora funcionando sin problemas.</p>
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