<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/eu') ?>">
    <title>Softwarea neurrira | Emporium Digital</title>
    <meta name="description" content="Emporium Digital-en softwarea neurrira, web aplikazioak, SEOa eta datu eta ERP irtenbideak eskaintzen ditugu.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require app_path('includes/cookielad.php'); ?>
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="header01">
      <img class="header01__media" src="<?= asset('assets/img/views/programacion.avif') ?>" alt="Emporium Digital-eko taldea neurrira egindako softwarea programatzen" title="Softwarea neurrira garatzen duen taldea" loading="eager" fetchpriority="high">
      <div class="header01__content">
        <p class="header01__eyebrow">Software diseinu estudioa</p>
        <h1>Softwarea neurrira</h1>
        <p class="header01__text">Zure proiektuak lehen unetik diseinatu, sortu eta gidatzen ditugu.</p>
        <a href="/eu/kontaktua" class="boton" title="Jarri gurekin harremanetan">Jarri gurekin harremanetan</a>
      </div>
    </header>

    <main>

      <section class="Nosotros">
        <!-- SecciÃ³n de PresentaciÃ³n de la empresa -->
        <h2>Guri buruz</h2>
        <!-- Art14 -->
        <article class="art14">
          <div class="content">
            <h3>Zure arrakasta digitala diseinatzen duten programatzaileak</h3>
            <p>Programatzaile talde txiki bat gara, eta horixe izatea gustatzen zaigu; horri esker, tratu pertsonalizatua, gertukoa eta %100 profesionala eskain dezakegu, kalitatea, konpromisoa eta neurrira egindako aurrekontuak uztartuz. Gustuko dugu bezeroaren proiektuaren parte izatea eta hari benetan inplikatzea, proiektua gurea balitz bezala, eta aholkularitza ematea kalitate-prezio erlaziorik onena lortzeko.</p>
            <img src="<?= asset('assets/img/views/developer-pointing.avif') ?>" alt="Emporium Digital-eko programatzaile batek software irtenbide bat aurkezten" title="Software irtenbide baten azalpena" loading="lazy" width="600" height="600">
          </div>
        </article>
      </section>

      <section>
        <!-- secciÃ³n de servicios -->
        <h2>Gure zerbitzuak</h2>

        <!-- ArtÃ­culo 15-->
        <!-- Servicios de Programacion -->
        <article class="art15">
          
          <div>
            <h3>Web aplikazio eta software zerbitzuak, balio-proposamenarekin</h3>
            <p>Webguneak, online dendak eta neurrira egindako softwarea garatzen ditugu.</p>
            <p>Programatzaile talde txiki bat gara, eta horrek tratu pertsonalizatua eta gertukoa ematea ahalbidetzen digu, kalitatea, konpromisoa eta neurrira egindako aurrekontuak eskainiz. Gustuko dugu bezeroaren proiektuaren parte izatea eta hari benetan inplikatzea, proiektua gurea balitz bezala, eta aholkularitza ematea kalitate-prezio erlaziorik onena lortzeko.</p>
          </div>

          <div>
            <a href="/eu/zerbitzuak" class="item" title="Ikusi plataforma anitzeko programazioa">
              <h4>Plataforma anitzeko programazioa</h4>
              <p>Gailu guztietan ondo funtzionatzen duten web aplikazioak eta irtenbide digitalak garatzen ditugu.</p>
              <img src="<?= asset('assets/img/views/card1.avif') ?>" alt="Plataforma anitzeko programazio zerbitzua Emporium Digital-en" title="Plataforma anitzeko programazioa" width="700" height="700" loading="lazy">              
            </a>

            <a href="/eu/zerbitzuak" class="item" title="Ikusi SEO posizionamendu zerbitzua">
              <h4>SEO posizionamendu zerbitzua</h4>
              <p>Zure webgunea bilaketa-emaitzetan hobeto kokatzeko optimizatzen dugu.</p>
              <img src="<?= asset('assets/img/views/card3.avif') ?>" alt="SEO posizionamendu zerbitzua Emporium Digital-en" title="SEO posizionamendu zerbitzua" width="700" height="700" loading="lazy">
            </a>
            
            <a href="/eu/zerbitzuak" class="item" title="Ikusi datuen kudeaketa eta ERP irtenbideak">
              <h4>Data-ERP</h4>
              <p>Datuak eta prozesuak modu zentralizatuan kudeatzeko irtenbide eraginkorrak sortzen ditugu.</p>
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
