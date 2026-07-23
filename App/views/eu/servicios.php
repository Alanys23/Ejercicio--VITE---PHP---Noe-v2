<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/zerbitzuak') ?>">
    <title>Softwarea neurrira egiteko zerbitzuak | Emporium Digital</title>
    <meta name="description" content="Ezagutu Emporium Digital-en zerbitzuak: softwarea neurrira, web aplikazioak, SEOa eta Data-ERP irtenbideak.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require app_path('includes/cookielad.php'); ?>
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="header01">
      <img class="header01__media" src="<?= asset('assets/img/views/hero_servicios.avif') ?>" alt="Emporium Digital-eko taldea software irtenbideak garatzen" title="Software irtenbideak garatzen dituen taldea" loading="eager" fetchpriority="high">
      <div class="header01__content">
        <p class="header01__eyebrow">Zerbitzuak</p>
        <h1>Zure negozioak hazteko behar duen guztia</h1>
        <p class="header01__text">Besteek agintzen dutena, guk eraikitzen dugu. Zure negoziorako idatzitako kode lerro bakoitza.</p>
        <a href="<?= url('/eu/kontaktua') ?>" class="boton" title="Jarri gurekin harremanetan">Jarri gurekin harremanetan</a>
      </div>
    </header>

    <main>

    <section class="section--compact">
      <h2>Gure zerbitzuak</h2>

      <article class="art15">
        <div>
          <h3>Zure negoziorako neurrira egindako software irtenbideak</h3>
          <p>Web aplikazioak, online dendak eta neurrira egindako sistemak garatzen ditugu, zure aurrekontura eta epeetara egokituta.</p>
        </div>

        <div>
          <a href="<?= url('/eu/kontaktua') ?>" class="item" title="Plataforma anitzeko programazioari buruz hitz egin">
            <h4>Plataforma anitzeko programazioa</h4>
            <p>Gailu guztietan berdin ondo funtzionatzen duten web eta mugikor aplikazioak.</p>
            <img src="<?= asset('assets/img/views/card1.avif') ?>" alt="Plataforma anitzeko programazio zerbitzua Emporium Digital-en" title="Plataforma anitzeko programazioa" width="700" height="700" loading="lazy">
          </a>

          <a href="<?= url('/eu/kontaktua') ?>" class="item" title="SEO posizionamendu zerbitzuari buruz hitz egin">
            <h4>SEO posizionamendu zerbitzua</h4>
            <p>Zure webgunea Google-ko lehen emaitzen artean agertzeko optimizatzen dugu.</p>
            <img src="<?= asset('assets/img/views/card3.avif') ?>" alt="SEO posizionamendu zerbitzua Emporium Digital-en" title="SEO posizionamendu zerbitzua" width="700" height="700" loading="lazy">
          </a>
          
          <a href="<?= url('/eu/kontaktua') ?>" class="item" title="Data-ERP irtenbideei buruz hitz egin">
            <h4>Data-ERP</h4>
            <p>Datuen eta prozesuen kudeaketa zentralizatua, zure enpresak erabaki hobeak har ditzan.</p>
            <img src="<?= asset('assets/img/views/card2.avif') ?>" alt="Datuen kudeaketa eta ERP zerbitzua Emporium Digital-en" title="Datuen kudeaketa eta ERP irtenbideak" width="700" height="700" loading="lazy">
          </a>
        </div>
      </article>
</section>





       
      <?php require app_path('includes/eu/contacto_cta.php'); ?>
      
    </main>
    
    <?php require app_path('includes/eu/footer.php'); ?>
</body>
</html>
