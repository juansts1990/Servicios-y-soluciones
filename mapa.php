<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quienes Somos</title>
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Krub&display=swap" rel="stylesheet">
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

        <main style="font-size: 10px;">
            <section>
               <h3 style="font-size: 25px;">Escribe A Nuestro WhatsApp</h3>
               <p>  Comunicate Con Nosotros y Te Resolveremos Tus Inquietudes <br> 
                Direccion: Calle 10c#81-71 <br> Las Flores Jamundí
               </p>
       
               <p><span class="phone-number"></span></p>
               <a href="https://wa.me/573107284321" target="_blank">
                <style>
                    /* Estilos para el botón */
                    .whatsapp-button {
                        background-color: #25D366;
                        color: white;
                        font-size: 24px;
                        padding: 10px 25px;
                        border: 2px solid transparent;
                        border-radius: 50px;
                        cursor: pointer;
                        transition: background-color 0.3s ease, border-color 0.3s ease;
                        text-decoration: none;
                        display: inline-flex;
                        align-items: center;
                        position: relative;
                    }
                
                    /* Cambiar el color de fondo al pasar el cursor por encima */
                    .whatsapp-button:hover {
                        background-color: #128C7E;
                        border-color: #128C7E;
                    }
                
                    /* Estilos para el icono de WhatsApp */
                    .whatsapp-button img {
                        width: 28px; /* Ajustar el tamaño del icono */
                        height: auto;
                        margin-right: 10px;
                        transition: opacity 0.3s ease;
                        opacity: 0;
                    }
                
                    /* Mostrar el icono de WhatsApp al pasar el cursor por encima */
                    .whatsapp-button:hover img {
                        opacity: 1;
                    }
                
                    /* Cambiar el color de los números al pasar el cursor por encima */
                    .whatsapp-button:hover span {
                        color: #00b341;
                    }
                
                    /* Aumentar el espaciado entre el icono y los números */
                    .whatsapp-button span {
                        margin-left: 8px;
                    }
                </style>
                
                <a href="https://wa.me/123456789" target="_blank" class="whatsapp-button">
                    <img src="img/icono.png" alt="Icono de WhatsApp">
                    <span>310-728-4321</span>
                </a>
                
                
                <style>
                    
                </style>
            </section>
      </main>
      
      <!-- Ubicación en forma de imagen -->
<img src="img/ubicacion.png" alt="Ubicación" style="width: 100%; max-width: 600px; display: block; margin: 0 auto;">

    
    
   
</body>
</html>