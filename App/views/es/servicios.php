<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/servicios') ?>">
    <title>Nuestros servicios</title>
    <meta name="description" content="Descubre nuestros productos de panaderia, pasteleria, bolleria y especialidades artesanas.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <header class="header01">
      <img class="header01__media" src="<?= asset('assets/img/views/hero_servicios.avif') ?>" alt="Escena de Matrix">
      <div class="header01__content">
        <p class="header01__eyebrow">Servicios</p>
        <h1>Todo lo que necesita tu negocio para crecer</h1>
        <p class="header01__text">Lo que otros prometen, nosotros lo construimos. Cada línea de código escrita para tu negocio.</p>
        <a href="#showroom-recursos" class="boton">Ver servicios</a>
      </div>
    </header>


    
    <?php require app_path('includes/es/footer.php'); ?>
</body>
</html>
