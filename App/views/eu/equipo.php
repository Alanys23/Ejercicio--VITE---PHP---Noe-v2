<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/nortzuk-gara') ?>">
    <title>Gure garatzaile taldea | Emporium Digital</title>
    <meta name="description" content="Ezagutu Emporium Digital-eko taldea: softwarea neurrira, cloud arkitektura eta web garapenean espezializatutako programatzaileak.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require app_path('includes/cookielad.php'); ?>
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="header01">
      <img class="header01__media" src="<?= asset('assets/img/views/hero-equipo.avif') ?>" alt="Emporium Digital-eko taldea software proiektuetan lanean" title="Software proiektuetan lanean ari den taldea" loading="eager" fetchpriority="high">
      <div class="header01__content">
        <p class="header01__eyebrow">Taldea</p>
        <h1>Nor gara</h1>
        <p class="header01__text">Ez gara programatzaile hutsak; zure aliatu estrategikoa gara bikaintasun operazionala lortzeko.</p>
        <a href="/eu/kontaktua" class="boton" title="Jarri gurekin harremanetan">Jarri gurekin harremanetan</a>
      </div>
    </header>

    <main>

      <section>
         <!-- El equipo -->
        <!-- Artículo 12 -->
          <article class="art12">
              <h2>Ezagutu gure taldea</h2>
              <p>Soluzio digital bikainak sortzeko grinaz aritzen den diziplina anitzeko taldea.</p>
              <div>
                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/worker1.avif') ?>" alt="Lorena M., Emporium Digital-eko CEO eta sortzailea" title="Lorena M. - CEO eta sortzailea" loading="lazy">
                  <div>
                      <h3>Lorena M.</h3>
                      <p>CEO eta sortzailea</p>
                      <p>10 urte baino gehiago garapen taldeak gidatzen. Software arkitektura eskalagarrian zaletu handia.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/worker2.avif') ?>" alt="Roberto P., Emporium Digital-eko CTO eta sortzailea" title="Roberto P. - CTO eta sortzailea" loading="lazy">
                  <div>
                      <h3>Roberto P.</h3>
                      <p>CTO eta sortzailea</p>
                      <p>Cloud arkitekturetan eta DevOps-en aditua. Proiektu konplexuen lider teknikoa.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/worker3.avif') ?>" alt="Marco T., Emporium Digital-eko Lead Developerra" title="Marco T. - Lead Developerra" loading="lazy">
                  <div>
                      <h3>Marco T.</h3>
                      <p>Lead Developerra</p>
                      <p>Frontend modernoan eta UXean espezialista. Esperientzia digital bikainak sortzen ditu.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/worker4.avif') ?>" alt="Anatol G., Emporium Digital-eko Backend Engineerra" title="Anatol G. - Backend Engineerra" loading="lazy">
                  <div>
                      <h3>Anatol G.</h3>
                      <p>Backend Engineerra</p>
                      <p>API eta datu baseen maisua. Sistema sendo eta eskalagarriak eraikitzen ditu.</p>
                  </div>
                  </div>
              </div>
          </article>
          
      </section>
     
      <section>
          <h2>Gure filosofia</h2>
         <!-- ModulePersonal01 -->
          <div class="modulePersonal01">
            <div>
              <img src="<?= asset('assets/img/icons/telephone-in-solid.svg') ?>" alt="Laguntza etengabearen ikonoa" title="Laguntza etengabea" aria-hidden="true">
              <h3>Laguntza etengabea</h3>
            </div>
            <div>
              <img src="<?= asset('assets/img/icons/people-outline.svg') ?>" alt="Arreta pertsonalizatuaren ikonoa" title="Arreta pertsonalizatua" aria-hidden="true">
              <h3>Arreta pertsonalizatua</h3>
            </div>
            <div>
              <img src="<?= asset('assets/img/icons/ribbon.svg') ?>" alt="Gardentasun osoaren ikonoa" title="Gardentasun osoa" aria-hidden="true">
              <h3>Gardentasun osoa</h3>
            </div>
            <div>
              <img src="<?= asset('assets/img/icons/tools.svg') ?>" alt="Neurrira egindako garapenaren ikonoa" title="Neurrira egindako garapena" aria-hidden="true">
              <h3>Neurrira egindako garapena</h3>
            </div>
            <div>
              <img src="<?= asset('assets/img/icons/money.svg') ?>" alt="Emaitza neurgarrien ikonoa" title="Emaitza neurgarriak" aria-hidden="true">
              <h3>Emaitza neurgarriak</h3>
            </div>
          </div>
      </section>
    
    
      <section>
          <!-- Lo que opinnan de nosotros -->
          <!-- artículo 4 -->
          <article class="art04">
              <h2>Guri buruz zer esaten duten</h2>
              <span class="ralla"></span>
              <div class="contenedor-fichas">
                  <div class="ficha">
                      <h3>Karolina Macedo</h3>
                      <p class="empresa">Nébula Tech</p>
                      <img src="<?= asset('assets/img/views/test44.avif') ?>" alt="Karolina Macedo, Nébula Tech-eko bezeroa" title="Karolina Macedo - Nébula Tech" loading="lazy" width="80" height="80">                        
                      <p>"Haien SaaS arkitekturaren inplementazioak gure eragiketa globala eraldatu zuen hilabete gutxitan. Xehetasun tekniko maila ikaragarria."</p>
                      <span class="ralla"></span>
                  </div>

                  <div class="ficha">
                      <h3>Carlos Ubarrechena</h3>
                      <p class="empresa">Vértice Studio</p>
                      <img src="<?= asset('assets/img/views/tes2.avif') ?>" alt="Carlos Ubarrechena, Vértice Studio-eko bezeroa" title="Carlos Ubarrechena - Vértice Studio" loading="lazy" width="80" height="80">                        
                      <p>"Ez dute soilik softwarea entregatzen, ikuspegi estrategikoa ere bai. Hazkunde handiko startup orok behar duen bazkide teknologikoa dira."</p>
                      <span class="ralla"></span>
                  </div>

                  <div class="ficha">
                      <h3>Fernanda Manterola</h3>
                      <p class="empresa">Arcadia Software</p>
                      <img src="<?= asset('assets/img/views/test3.avif') ?>" alt="Fernanda Manterola, Arcadia Software-eko bezeroa" title="Fernanda Manterola - Arcadia Software" loading="lazy" width="80" height="80">                        
                      <p>"Emporium Digital-ek soluzio konplexuak eskalatzeko duen gaitasuna, kodearen dotorezia galdu gabe, benetan apartekoa da."</p>
                      <span class="ralla"></span>
                  </div>

                  <div class="ficha">
                      <h3>Roberto Castro</h3>
                      <p class="empresa">Kairos Digital</p>
                      <img src="<?= asset('assets/img/views/tes1.avif') ?>" alt="Roberto Castro, Kairos Digital-eko bezeroa" title="Roberto Castro - Kairos Digital" loading="lazy" width="80" height="80">                        
                      <p>"Adostutako epe guztiak bete zituzten eta emaitzak gure itxaropenak gainditu zituen. Zalantzarik gabe gomendatzen dugu Emporium Digital."</p>
                      <span class="ralla"></span>
                  </div>
              </div>
          </article>


      </section>
  
        
      <?php require app_path('includes/eu/contacto_cta.php'); ?>

    </main>

    <?php require app_path('includes/eu/footer.php'); ?>
</body>
</html>
