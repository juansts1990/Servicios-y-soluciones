<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog/Noticias - Servicios y Soluciones Técnicas</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
</head>

<body class="light-theme">

  <!--
    - #HEADER
  -->

  <header>

    <div class="container">

      <nav class="navbar">

        <a href="#">
          <!-- <img src="./assets/images/logo-light.svg" alt="SimpleBlog logo" width="150" class="logo-light"> -->
          <img src="./assets/images/logo-dark.svg" alt="SimpleBlog logo" width="150" class="logo-dark">
        </a>

        <div class="btn-group">

          <button class="theme-btn theme-btn-mobile light">
            <ion-icon name="moon" class="moon"></ion-icon>
            <ion-icon name="sunny" class="sun"></ion-icon>
          </button>

          <button class="nav-menu-btn">
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

        <div class="flex-wrapper">

          <ul class="desktop-nav">

            <li>
              <a href="#" class="nav-link">Inicio</a>
            </li>

            <li>
              <a href="#" class="nav-link">Sobre Nosotros</a>
            </li>

            <li>
              <a href="#" class="nav-link">Contacto</a>
            </li>

          </ul>

          <button class="theme-btn theme-btn-desktop light">
            <ion-icon name="moon" class="moon"></ion-icon>
            <ion-icon name="sunny" class="sun"></ion-icon>
          </button>

        </div>

        <div class="mobile-nav">

          <button class="nav-close-btn">
            <ion-icon name="close-outline"></ion-icon>
          </button>

          <div class="wrapper">

            <p class="h3 nav-title">Menú Principal</p>

            <ul>
              <li class="nav-item">
                <a href="#" class="nav-link">Inicio</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Sobre Nosotros</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Contacto</a>
              </li>
            </ul>

          </div>

          <div>

            <p class="h3 nav-title">Temas</p>

            <ul>
              <li class="nav-item">
                <a href="#" class="nav-link">Mantenimiento</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Soluciones Técnicas</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">Tips para el Hogar</a>
              </li>
            </ul>

          </div>

        </div>

      </nav>

    </div>

  </header>

  <main>

    <!--
      - #HERO SECTION
    -->

    <div class="hero">

      <div class="container">

        <div class="left">

          <h1 class="h1">
            Bienvenidos a <b>Nuestro Blog</b>
            <br>Servicios y Soluciones Técnicas
          </h1>

          <p class="h3">
            Actualizaciones, tips y soluciones técnicas para tu hogar.
          </p>

          <div class="btn-group">
            <a href="#" class="btn btn-primary">Contáctanos</a>
            <a href="#" class="btn btn-secondary">Sobre Nosotros</a>
          </div>

        </div>

        <div class="right">

          <div class="pattern-bg"></div>
          <div class="img-box">
            <img src="assets/images/logo definitivo.png" alt="Servicios y Soluciones Técnicas para el Hogar" class="hero-img">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
          </div>

        </div>

      </div>

    </div>

    <div class="main">

      <div class="container">

        <!--
          - BLOG SECTION
        -->

        <div class="blog">

          <h2 class="h2">Últimos Artículos</h2>

          <div class="blog-card-group">

            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/mantenimiento.png" alt="Consejos para el mantenimiento preventivo de tu hogar"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Mantenimiento</button>

                <h3>
                  <a href="#" class="h3">
                    Consejos para el mantenimiento preventivo de tu hogar
                  </a>
                </h3>

                <p class="blog-text">
                  Descubre cómo realizar un mantenimiento preventivo efectivo para evitar problemas mayores en tu hogar.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/autor.png" alt="Autor" width="50" height="60px">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Autor del Blog</a>

                    <p class="text-sm">
                      <time datetime="2024-05-22">May 22, 2024</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT3M">3 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>

            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/fontanero.png" alt="Soluciones técnicas para problemas comunes del hogar"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Soluciones Técnicas</button>

                <h3><a href="" class="h3">Soluciones técnicas para problemas comunes del hogar</a></h3>

                <p class="blog-text">
                  Aprende a solucionar los problemas más comunes de tu hogar con estas técnicas sencillas y efectivas.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/autor.png" alt="Autor" width="50" height="60px">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Autor del Blog</a>

                    <p class="text-sm">
                      <time datetime="2024-05-20">May 20, 2024</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT2M">2 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>

            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="./assets/images/aprender.png" alt="10 tips para mantener tu hogar en óptimas condiciones"
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

                <button class="blog-topic text-tiny">Tips para el Hogar</button>

                <h3><a href="" class="h3">10 tips para mantener tu hogar en óptimas condiciones</a></h3>

                <p class="blog-text">
                  Sigue estos 10 consejos prácticos para asegurarte de que tu hogar siempre esté en las mejores condiciones.
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="./assets/images/autor.png" alt="Autor" width="50" height="60px">
                  </div>

                  <div class="wrapper">
                    <a href="#" class="h4">Autor del Blog</a>

                    <p class="text-sm">
                      <time datetime="2024-05-18">May 18, 2024</time>
                      <span class="separator"></span>
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="PT4M">4 min</time>
                    </p>
                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

        <!--
          - UPDATE SECTION
        -->

        <div class="update">

          <div class="update-card">

            <div class="update-content">

              <p class="update-title">Últimas Actualizaciones</p>

              <ul>

                <li>
                  <a href="#" class="update-link">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                    Nueva técnica para la reparación de filtraciones en techos.
                  </a>
                </li>

                <li>
                  <a href="#" class="update-link">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                    Cómo identificar y resolver problemas eléctricos comunes.
                  </a>
                </li>

                <li>
                  <a href="#" class="update-link">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                    Actualización de nuestro servicio de atención al cliente.
                  </a>
                </li>

              </ul>

            </div>

            <div class="update-banner"></div>

          </div>

        </div>

      </div>

    </div>

  </main>

  <!--
    - #FAQ
  -->

  <section class="faq" id="faq">

    <div class="container">

      <h2 class="h2">Preguntas Frecuentes</h2>

      <div class="faq-accordion">

        <div class="accordion-item">

          <button class="accordion-btn" data-accordion-btn>
            <h3 class="h3">¿Cómo puedo solicitar un servicio técnico?</h3>
            <div class="icon-box">
              <!-- <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon> -->
            </div>
          </button>

          <div class="accordion-content">
            <p>Puedes solicitar un servicio técnico contactándonos a través de nuestro formulario en la página de contacto o llamando a nuestro número de atención al cliente.</p>
          </div>

        </div>

        <div class="accordion-item">

          <button class="accordion-btn" data-accordion-btn>
            <h3 class="h3">¿Cuáles son los horarios de atención?</h3>
            <div class="icon-box">
             <!--  <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon> -->
            </div>
          </button>

          <div class="accordion-content">
            <p>Atendemos de Lunes a domingos: 07:00 am – 06:00 pm</p>
          </div>

        </div>

        <div class="accordion-item">

          <button class="accordion-btn" data-accordion-btn>
            <h3 class="h3">¿Qué tipos de servicios ofrecen?</h3>
            <div class="icon-box">
              <!-- <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon> -->
            </div>
          </button>

          <div class="accordion-content">
            <p>Ofrecemos una amplia gama de servicios técnicos, incluyendo reparaciones eléctricas, fontanería, mantenimiento de electrodomésticos, entre otros.</p>
          </div>

        </div>

      </div>

    </div>

  </section>

  <!--
    - #FOOTER
  -->

  <footer>

    <div class="container">

      <div class="wrapper">

        <a href="#" class="footer-logo">
          <img src="./assets/images/blog.png" alt="SimpleBlog logo" width="150" class="logo-light">
          
        </a>

        <p class="footer-text">Tu fuente confiable para soluciones técnicas y mantenimiento del hogar.</p>

        <ul class="footer-link">

          <li>
            <a href="#" class="footer-link">Inicio</a>
          </li>

          <li>
            <a href="#" class="footer-link">Sobre Nosotros</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contacto</a>
          </li>

        </ul>

      </div>


    </div>

  </footer>

  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
