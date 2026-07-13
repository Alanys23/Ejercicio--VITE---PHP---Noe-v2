<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/quienes-somos') ?>">
    <title>Nuestro equipo de panaderos y pasteleros</title>
    <meta name="description" content="Conoce al equipo de panaderos y pasteleros que trabaja cada dia en nuestro obrador.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <header class="header01">
      <img class="header01__media" src="<?= asset('assets/img/test/dummy01.avif') ?>" alt="Escena de Matrix">
      <div class="header01__content">
        <p class="header01__eyebrow">Header 01</p>
        <h1>Showroom de resources</h1>
        <p class="header01__text">Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum.</p>
        <a href="#showroom-recursos" class="boton">Ver recursos</a>
      </div>
    </header>

    <main>

      <section>
         <!-- El equipo -->
        <!-- Artículo 12 -->
          <article class="art12">
              <h3>Nuestro Equipo</h3>
              <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum. Morpheus quaerat optionem, pillula rubra aperiam systema et realitatem.</p>
              <div>
                  <div class="ficha">
                  <img src="<?= asset('assets/img/test/dummy01.avif') ?>" alt="Escena de Matrix" title="">
                  <div>
                      <h4>Matrix ipsum 01</h4>
                      <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <p>Neo veritatem eligit.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/test/dummy02.avif') ?>" alt="Escena de Matrix" title="">
                  <div>
                      <h4>Matrix ipsum 02</h4>
                      <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem.</p>
                      <p>Pillula rubra aperit.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/test/dummy03.avif') ?>" alt="Escena de Matrix" title="">
                  <div>
                      <h4>Matrix ipsum 03</h4>
                      <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <p>Zion libertatem defendit.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/test/dummy04.avif') ?>" alt="Escena de Matrix" title="">
                  <div>
                      <h4>Matrix ipsum 04</h4>
                      <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <p>Systema simulacrum celat.</p>
                  </div>
                  </div>
              </div>
          </article>
          
      </section>
     
      <section>
          <h3>Nuestra Filosofía</h3>
         <!-- ModulePersonal01 -->
          <div class="modulePersonal01">
            <div>
              <img src="<?= asset('assets/img/icons/truck.svg') ?>" alt="">
              <h4>modulePersonal01 · Item 01</h4>
            </div>
            <div>
              <img src="<?= asset('assets/img/icons/tools.svg') ?>" alt="">
              <h4>modulePersonal01 · Item 02</h4>
            </div>
            <div>
              <img src="<?= asset('assets/img/icons/clip.svg') ?>" alt="">
              <h4>modulePersonal01 · Item 03</h4>
            </div>
            <div>
              <img src="<?= asset('assets/img/icons/bag.svg') ?>" alt="">
              <h4>modulePersonal01 · Item 04</h4>
            </div>
            <div>
              <img src="<?= asset('assets/img/icons/money.svg') ?>" alt="">
              <h4>modulePersonal01 · Item 05</h4>
            </div>
          </div>
      </section>
    
    
      <section>
          <!-- Lo que opinnan de nosotros -->
          <!-- artículo 4 -->
          <article class="art04">
              <h3>Lo que opinan de nosotros</h3>
              <span class="ralla"></span>
              <div class="contenedor-fichas">
                  <div class="ficha">
                      <h4>Matrix ipsum 01</h4>
                      <img src="<?= asset('assets/img/test/dummy01.avif') ?>" alt="Escena de Matrix" title="">                        
                      <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Neo eligendi veritatis codicem et simulacrum.</p>
                      <span class="ralla"></span>
                  </div>

                  <div class="ficha">
                      <h4>Matrix ipsum 02</h4>
                      <img src="<?= asset('assets/img/test/dummy02.avif') ?>" alt="Escena de Matrix" title="">                        
                      <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Morpheus quaerat optionem et realitatem.</p>
                      <span class="ralla"></span>
                  </div>

                  <div class="ficha">
                      <h4>Matrix ipsum 03</h4>
                      <img src="<?= asset('assets/img/test/dummy03.avif') ?>" alt="Escena de Matrix" title="">                        
                      <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Agent Smith erroribus reiciendis et systema.</p>
                      <span class="ralla"></span>
                  </div>

                  <div class="ficha">
                      <h4>Matrix ipsum 04</h4>
                      <img src="<?= asset('assets/img/test/dummy04.avif') ?>" alt="Escena de Matrix" title="">                        
                      <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Zion libertatem defendit contra machinas.</p>
                      <span class="ralla"></span>
                  </div>
              </div>
          </article>


      </section>
  
     

    </main>

    <?php require app_path('includes/es/footer.php'); ?>
</body>
</html>
