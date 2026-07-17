<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/') ?>">
    <title>SoftwarePremium</title>
    <meta name="description" content="Panaderia y pasteleria artesana con panes, bolleria y productos recien hechos.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>

    <?php require app_path('includes/es/nav.php'); ?>

    <header class="header01">
      <img class="header01__media" src="<?= asset('assets/img/views/programacion.avif') ?>" alt="Escena de Matrix">
      <div class="header01__content">
        <p class="header01__eyebrow">Estudio de Diseño de Software</p>
        <h1>Software a medida</h1>
        <p class="header01__text">Diseñamos, creamos , orientamos tus proyectos desde el momento 1</p>
        <a href="#showroom-recursos" class="boton">Contáctanos</a>
      </div>
    </header>

    <main>

      <section class="Nosotros">
        <!-- Sección de Presentación de la empresa -->
        <h2>Sobre Nosotros</h2>
        <!-- Art14 -->
        <article class="art14">
          <div class="content">
            <h3>Programadores que diseñan tu Éxito Digital</h3>
            <p>Somos una pequeña empresa de programadores y nos encanta serlo, ya que nos permite ofrecer un trato personalizado, cercano y 100% profesional a nuestros clientes, ofreciendo calidad, compromiso y presupuestos a medida. Nos encanta formar parte e implicarnos en el proyecto del cliente y hacerlo realidad juntos, como si fuera nuestro, asesorándolo para conseguir la mejor relación calidad-precio en su proyecto.</p>
            <img src="<?= asset('assets/img/views/developer-pointing.avif') ?>" alt="Programador apuntando">
          </div>
        </article>
      </section>

      <section>
        <!-- sección de servicios -->
        <h2>Nuestros servicios</h2>

        <!-- Artículo 15-->
        <!-- Servicios de Programacion -->
        <article class="art15">
          
          <div>
            <h3>Servicios de Aplicaciones Web y Software con propuesta de valor</h3>
            <p>Somos un estudio de Web & Software dedicados a desarrollar páginas web, tiendas on-line y software a medida.</p>
            <p>Somos una pequeña empresa y nos encanta serlo, ya que nos permite ofrecer un trato personalizado y cercano a nuestros clientes, ofreciendo calidad, compromiso y presupuestos a medida. Nos encanta formar parte e implicarnos en el proyecto del cliente y hacerlo realidad juntos, como si fuera nuestro, asesorándolo para conseguir la mejor relación calidad-precio en su proyecto.</p>
          </div>

          <div>
            <a href="" class="item">
              <h4>Programacion Multiplataforma</h4>
              <p>Neo eligendi veritatis codicem, dum pillula rubra realitatem aperit.</p>
              <img src="<?= asset('assets/img/views/card1.avif') ?>" alt="Varios programadores" width="700" height="700">              
            </a>

            <a href="" class="item">
              <h4>Servicio de posicionamiento SEO</h4>
              <p>Morpheus quaerat optionem et Trinity per simulacrum navigat.</p>
              <img src="<?= asset('assets/img/views/card3.avif') ?>" alt="Programador con 3 monitores">
            </a>
            
            <a href="" class="item">
              <h4>Data-ERP</h4>
              <p>Agent Smith codicem custodit, sed Zion machinis resistit.</p>
              <img src="<?= asset('assets/img/views/card2.avif') ?>" alt="">
            </a>
          </div>

        </article>
      </section>
    
      <section>
        <!-- Sección de Contacto -->
        <!-- artículpo 06 -->
        
          <article class="art06">
              <h2>Contáctanos</h2>
              <div>
                  <h3>Hagamos realidad tu Proyecto Digital</h3>
                  <p>Explícanos qué quieres construir. Si encajamos, te proponemos cómo abordarlo. Podemos ayudarte a definirla, diseñarla y construir una primera versión sólida. Cuéntanos en una línea quién eres y qué quieres construir.</p>
                  <a href="#" title="" class="boton">Empieza tu Proyecto</a>
              </div>     
          </article>

      </section>

      
    </main>
   
    <?php require app_path('includes/es/footer.php'); ?>
  </body>
</html>
