<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Krub&display=swap" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <title>Nuestros Aliados</title>
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
            grid-template-columns: repeat(2, 1fr); /* Cambiado a dos columnas */
            grid-gap: 20px;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }
        .service {
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
            transition: transform 0.5s ease;
        }

        .service p {
            margin-bottom: 20px;
        }

        .service:hover {
            background: #ff6347;
            transform: translateY(-10px);
        }

        .service img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
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
            font-size: 24px;
            color: #ff6347;
            margin-right: 5px;
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
            <img src="img/electricidad/Redes Eléctricas Domiciliarias.jpg" alt="Instalación y Mantenimiento de Redes Eléctricas Domiciliarias">
            <h2>Instalación y Mantenimiento de Redes Eléctricas Domiciliarias</h2>
            <p>Nuestra empresa se especializa en brindar servicios de instalación y mantenimiento de redes eléctricas domiciliarias. Desde la planificación inicial hasta la implementación y el mantenimiento continuo, nos aseguramos de que sus sistemas eléctricos funcionen de manera segura y eficiente en todo momento.</p>
        </div>
        <div class="service">
            <img src="img/electricidad/Reparación de Fallas Eléctricas.jpg" alt="Reparación de Fallas Eléctricas">
            <h2>Reparación de Fallas Eléctricas</h2>
            <p>¿Experimentando problemas con su sistema eléctrico? ¡No se preocupe! Nuestro equipo altamente capacitado está listo para abordar cualquier falla eléctrica que pueda surgir. Desde cortocircuitos hasta problemas de cableado, estamos aquí para solucionar sus problemas eléctricos de manera rápida y efectiva.</p>
        </div>
        <div class="service">
            <img src="img/electricidad/Instalación y Mantenimiento de Paneles Solares.jpg" alt="Instalación y Mantenimiento de Paneles Solares">
            <h2>Instalación y Mantenimiento de Paneles Solares</h2>
            <p>Como parte de nuestro compromiso con la energía sostenible, ofrecemos servicios completos de instalación y mantenimiento de paneles solares. Desde la evaluación inicial hasta la instalación y el monitoreo continuo, nos aseguramos de que su sistema de energía solar funcione de manera óptima, ayudando a reducir su huella de carbono y sus costos energéticos.</p>
        </div>
        <div class="service">
            <img src="img/electricidad/Asesoramiento y Consultoría en Eficiencia Energética.webp" alt="Asesoramiento y Consultoría en Eficiencia Energética">
            <h2>Asesoramiento y Consultoría en Eficiencia Energética</h2>
            <p>Además de nuestros servicios de instalación y mantenimiento, también ofrecemos asesoramiento y consultoría en eficiencia energética. Nuestros expertos pueden ayudarlo a identificar áreas de mejora en su consumo de energía y desarrollar estrategias para optimizar la eficiencia y reducir los costos operativos.</p>
        </div>
    </div>
</div>


    <main>
        <section class="por-que-elegirnos">
            <h2>Por Qué Contar Con Nosotros</h2>
        </section>
    </main>
    
    <div class="grid-container">
        <div class="grid-item">
            <h2><i class="fas fa-user-tie icono"></i>EXPERTOS CALIFICADOS</h2>
            <p>Nuestros técnicos están altamente capacitados y cuentan con años de experiencia en la reparación de todo tipo de electrodomésticos. Constantemente actualizamos nuestras habilidades para estar al día con las últimas tecnologías.</p>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-search icono"></i>DIAGNÓSTICO PRECISO</h2>
            <p>Utilizamos herramientas avanzadas para diagnosticar problemas de manera precisa, lo que nos permite solucionarlos eficazmente y evitar reparaciones innecesarias.</p>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-dollar-sign icono"></i>PRECIOS TRANSPARENTES</h2>
            <p>Proporcionamos estimaciones claras y detalladas antes de comenzar cualquier trabajo. Nuestros precios son competitivos y justos, sin cargos ocultos.</p>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-wrench icono"></i>REPARACIONES DURADERAS</h2>
            <p>Nos enorgullecemos de la calidad de nuestro trabajo. Utilizamos piezas de repuesto originales o equivalentes de alta calidad para asegurar que nuestras reparaciones sean duraderas y fiables.</p>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-stopwatch icono"></i>SERVICIO RÁPIDO Y CONVENIENTE</h2>
            <p>Entendemos lo importante que es tener tus electrodomésticos funcionando correctamente. Ofrecemos un servicio rápido y nos esforzamos por realizar las reparaciones en la menor cantidad de visitas posible.</p>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-cogs icono"></i>SOLUCIONES PERSONALIZADAS</h2>
            <p>Entendemos que cada electrodoméstico y situación es única. Ofrecemos soluciones personalizadas que se adaptan específicamente a tus necesidades y al problema específico de tu aparato, garantizando una reparación efectiva.</p>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-clipboard-list icono"></i>ATENCIÓN AL DETALLE</h2>
            <p>Nos distinguimos por nuestra meticulosa atención al detalle en cada reparación. Este enfoque asegura que no solo se solucionen los problemas evidentes, sino que también se identifiquen y corrijan posibles fallos futuros.</p>
        </div>
        <div class="grid-item">
            <h2><i class="fas fa-shield-alt icono"></i>GARANTÍA EN TODAS LAS REPARACIONES</h2>
            <p>Ofrecemos garantías en todas nuestras reparaciones para darte tranquilidad. Si algo no está bien, nos comprometemos a hacerlo bien.</p>
        </div>
    </div>
</body>
</html>
