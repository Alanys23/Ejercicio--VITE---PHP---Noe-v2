<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/servicios') ?>">
    <title>Servicios de Software a Medida | Emporium Digital</title>
    <meta name="description" content="Conoce los servicios de Emporium Digital: desarrollo de software a medida, aplicaciones web, SEO y soluciones Data-ERP.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require app_path('includes/cookielad.php'); ?>
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <header class="header01">
      <img class="header01__media" src="<?= asset('assets/img/views/hero_servicios.avif') ?>" alt="Equipo de Emporium Digital desarrollando soluciones de software" loading="eager" fetchpriority="high">
      <div class="header01__content">
        <p class="header01__eyebrow">Servicios</p>
        <h1>Todo lo que necesita tu negocio para crecer</h1>
        <p class="header01__text">Lo que otros prometen, nosotros lo construimos. Cada línea de código escrita para tu negocio.</p>
        <a href="/es/contacto" class="boton">Contáctanos</a>
      </div>
    </header>

    <main>

    <section class="section--compact">
      <h2>Nuestros servicios</h2>

      <article class="art15">
        <div>
          <h3>Soluciones de software a medida para tu negocio</h3>
          <p>Desarrollamos aplicaciones web, tiendas on-line y sistemas a medida, adaptados a tu presupuesto y plazos.</p>
        </div>

        <div>
          <a href="" class="item">
            <h4>Programación Multiplataforma</h4>
            <p>Aplicaciones web y móviles que funcionan igual de bien en cualquier dispositivo.</p>
            <img src="<?= asset('assets/img/views/card1.avif') ?>" alt="Servicio de programación multiplataforma en Emporium Digital" width="700" height="700" loading="lazy">
          </a>

          <a href="" class="item">
            <h4>Servicio de posicionamiento SEO</h4>
            <p>Optimizamos tu web para que aparezca en las primeras posiciones de Google.</p>
            <img src="<?= asset('assets/img/views/card3.avif') ?>" alt="Servicio de posicionamiento SEO en Emporium Digital" width="700" height="700" loading="lazy">
          </a>

          <a href="" class="item">
            <h4>Data-ERP</h4>
            <p>Gestión centralizada de datos y procesos para que tu empresa tome mejores decisiones.</p>
            <img src="<?= asset('assets/img/views/card2.avif') ?>" alt="Servicio de gestión de datos y ERP en Emporium Digital" width="700" height="700" loading="lazy">
          </a>
        </div>
      </article>
</section>






       
      <?php require app_path('includes/es/contacto_cta.php'); ?>
      
    </main>
    
    <?php require app_path('includes/es/footer.php'); ?>
</body>
</html>
