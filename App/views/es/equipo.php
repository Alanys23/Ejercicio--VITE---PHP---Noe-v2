<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/quienes-somos') ?>">
    <title>Nuestro equipo de programadores</title>
    <meta name="description" content="Conoce al equipo de panaderos y pasteleros que trabaja cada dia en nuestro obrador.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= vite_tags($route['resources'] ?? null) ?>
  </head>
  <body>
    <?php require app_path('includes/es/nav.php'); ?>

    <header class="header01">
      <img class="header01__media" src="<?= asset('assets/img/views/hero-equipo.avif') ?>" alt="Escena de Matrix">
      <div class="header01__content">
        <p class="header01__eyebrow">Equipo</p>
        <h1>Quiénes somos</h1>
        <p class="header01__text">No somos solo programadores; somos tu aliado estratégico para alcanzar la excelencia operativa.</p>
        <a href="#showroom-recursos" class="boton">Ver recursos</a>
      </div>
    </header>

    <main>

      <section>
         <!-- El equipo -->
        <!-- Artículo 12 -->
          <article class="art12">
              <h2>Conoce a nuestro Equipo</h2>
              <p>Un equipo multidisciplinar apasionado por crear soluciones digitales excepcionales.</p>
              <div>
                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/worker1.avif') ?>" alt="Programadora sonriendo" title="">
                  <div>
                      <h3>Lorena M.</h3>
                      <p>CEO & Fundadora</p>
                      <p>10+ años liderando equipos de desarrollo. Apasionada por la arquitectura de software escalable.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/worker2.avif') ?>" alt=Programador sonriendo" title="">
                  <div>
                      <h3>Roberto p.</h3>
                      <p>CTO & Fundador</p>
                      <p>Experto en arquitecturas cloud y DevOps. Líder técnico de proyectos complejos.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/worker3.avif') ?>" alt="Escena de Matrix" title="">
                  <div>
                      <h3>Marco T.</h3>
                      <p>Lead Developer</p>
                      <p>Especialista en frontend moderno y UX. Crea experiencias digitales excepcionales.</p>
                  </div>
                  </div>

                  <div class="ficha">
                  <img src="<?= asset('assets/img/views/worker4.avif') ?>" alt="Escena de Matrix" title="">
                  <div>
                      <h3>Anatol G.</h3>
                      <p>Backend Engineer</p>
                      <p>Maestro de APIs y bases de datos. Construye sistemas robustos y escalables.</p>
                  </div>
                  </div>
              </div>
          </article>
          
      </section>
     
      <section>
          <h2>Nuestra Filosofía</h2>
         <!-- ModulePersonal01 -->
          <div class="modulePersonal01">
            <div>
              <img src="<?= asset('assets/img/icons/telephone-in-solid.svg') ?>" alt="">
              <h3>Soporte Continuo</h3>
            </div>
            <div>
              <img src="<?= asset('assets/img/icons/people-outline.svg') ?>" alt="">
              <h3>Atención Personalizada</h3>
            </div>
            <div>
              <img src="<?= asset('assets/img/icons/ribbon.svg') ?>" alt="">
              <h3>Transparencia Total</h3>
            </div>
            <div>
              <img src="<?= asset('assets/img/icons/tools.svg') ?>" alt="">
              <h3>Desarrollo a Medida</h3>
            </div>
            <div>
              <img src="<?= asset('assets/img/icons/money.svg') ?>" alt="">
              <h3>Resultados Medibles</h3>
            </div>
          </div>
      </section>
    
    
      <section>
          <!-- Lo que opinnan de nosotros -->
          <!-- artículo 4 -->
          <article class="art04">
              <h2>Lo que opinan de nosotros</h2>
              <span class="ralla"></span>
              <div class="contenedor-fichas">
                  <div class="ficha">
                      <h3>Karolina Macedo</h3>
                      <p class="empresa">Nébula Tech</p>
                      <img src="<?= asset('assets/img/views/test44.avif') ?>" alt="Mujer sonriendo" title="">                        
                      <p>"La implementación de su arquitectura SaaS transformó nuestra operatividad global en cuestión de meses. Un nivel de detalle técnico impresionante."</p>
                      <span class="ralla"></span>
                  </div>

                  <div class="ficha">
                      <h3>Carlos Ubarrechena</h3>
                      <p class="empresa">Vórtice Studio</p>
                      <img src="<?= asset('assets/img/views/tes2.avif') ?>" alt="Hombre sonriendo" title="">                        
                      <p>"No solo entregan software, entregan una visión estratégica. Son el socio tecnológico que toda startup de alto crecimiento necesita."</p>
                      <span class="ralla"></span>
                  </div>

                  <div class="ficha">
                      <h3>Fernanda Manterola</h3>
                      <p class="empresa">Arcadia Software</p>
                      <img src="<?= asset('assets/img/views/test3.avif') ?>" alt="Mujer sonriendo" title="">                        
                      <p>"La capacidad de Pistacho Digital para escalar soluciones complejas sin comprometer la elegancia del código es simplemente excepcional."</p>
                      <span class="ralla"></span>
                  </div>

                  <div class="ficha">
                      <h3>Roberto Castro</h3>
                      <p class="empresa">Kairos Digital</p>
                      <img src="<?= asset('assets/img/views/tes1.avif') ?>" alt="Hombre sonriendo" title="">                        
                      <p>Matrix ipsum dolor sit amet, consectetur adipisicing elit. Zion libertatem defendit contra machinas.</p>
                      <span class="ralla"></span>
                  </div>
              </div>
          </article>


      </section>
  
        
      <?php require app_path('includes/es/contacto_cta.php'); ?>

    </main>

    <?php require app_path('includes/es/footer.php'); ?>
</body>
</html>
