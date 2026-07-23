<!doctype html>
<html lang="<?= e($lang ?? env('LANG_DEFAULT', 'es')) ?>">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="<?= asset('favicon.svg') ?>">
    <link rel="canonical" href="<?= url('/eu/kontaktua') ?>">
    <title>Jarri gurekin harremanetan | Emporium Digital</title>
    <meta name="description" content="Jarri harremanetan Emporium Digital-ekin zure software, web edo SEO proiektua azaltzeko eta hurrengo urratsa definitzeko.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require app_path('includes/cookielad.php'); ?>
    <?= vite_tags($route['resources'] ?? null) ?>
</head>
<body>
    
    <?php require app_path('includes/eu/nav.php'); ?>

    <header class="header01">
      <img class="header01__media" src="<?= asset('assets/img/views/hero_contacto.avif') ?>" alt="Emporium Digital-eko taldea bezeroen kontsultak artatzen" title="Bezeroen arreta" loading="eager" fetchpriority="high">
      <div class="header01__content">
        <p class="header01__eyebrow">Kontaktua</p>
        <h1>Jarri harremanetan gure taldearekin</h1>
        <p class="header01__text">Pozik entzungo dugu zure proiektua.</p>
        <a href="#idForAjax" class="boton" title="Jarri gurekin harremanetan">Jarri gurekin harremanetan</a>
      </div>
    </header>

    <main>

      <section>
        <!-- artForm02 ajax -->
        <article class="artForm02">          

            <h2>Kontaiguzu zure proiektua</h2>
            <div>
                <div class="contenedor-form">
                
                <img src="<?= asset('assets/img/icons/mail-solid.svg') ?>" alt="Posta elektronikoaren ikonoa" title="Harremanetarako ikonoa" aria-hidden="true">                                
                <!-- MODAL QUE SALE CUANDO SE ENVÍA EL FORM CON ÉXITO -->
                <div id="modal_envio">
                    <!-- nuestro modal con html y css -->
                    <h3 id="h3_modal_envio">Mezua arrakastaz bidali da!</h3>
                    <p id="p_modal_envio">Eskerrik asko Emporium Digital-ekin harremanetan jartzeagatik. Zure kontsulta jaso dugu eta ahal bezain laster erantzungo dizugu.</p>
                    <div class="boton" id="boton_modal_envio">Beste kontsulta bat idatzi</div>
                </div>

                <form id="idForAjax" action="<?= e(app_url('/app/artForm02')) ?>" method="post">
                    
                    <p class="error" id="errorForm02"></p>

                    <!-- nombre -->
                    <label for="nombreAjax">Izena *</label>
                    <input type="text" id="nombreAjax" name="nombre" placeholder="Idatzi hemen zure izena *">

                    <!-- teléfono -->
                    <label for="telefonoAjax">Telefonoa *</label>
                    <input type="tel" id="telefonoAjax" name="telefono" placeholder="Idatzi hemen zure telefonoa *">

                    <!-- Correo -->
                    <label for="emailAjax">Helbide elektronikoa</label>
                    <input type="email" id="emailAjax" name="email" placeholder="Idatzi hemen zure helbide elektronikoa">

                    <!-- Mensaje -->
                    <label for="mensajeAjax">Idatzi zure mezua</label>
                    <textarea name="mensaje" id="mensajeAjax" placeholder="Idatzi hemen zure mezua"></textarea>

                    <!-- términos -->
                    <div class="horizontal">
                    <label for="terminosAjax">Pribatutasun baldintzak onartzea</label>
                    <input type="checkbox" name="terminos" id="terminosAjax">
                    </div>
                    

                    <!-- captcha -->
                    <label for="respuesta">Ebatzi</label>
                    <div class="horizontal">
                    <span id="num1ajax"></span>
                    <span id="operadorajax"></span>
                    <span id="num2ajax"></span>
                    <input type="text" name="respUser" id="respuestaajax" placeholder="Erantzuna" autocomplete="off">
                    <input type="hidden" name="respSystem" id="respSystemajax" value="">
                    </div>

                    <input type="hidden" name="url" value="<?= e($url) ?>">
                    <input type="hidden" name="lang" value="<?= e($lang) ?>">

                    <input type="submit" class="boton" value="Bidali" id="botonEnviarAjax">
                </form>
                
                <div class="moduloLoader01" id="moduloLoader01">
                    <!-- <svg version="1.1" id="L2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                    <circle fill="none" stroke="#000000" stroke-width="4" stroke-miterlimit="10" cx="50" cy="50" r="48"/>
                    <line fill="none" stroke-linecap="round" stroke="#000000" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="85" y2="50.5">
                        <animateTransform 
                            attributeName="transform" 
                            dur="2s"
                            type="rotate"
                            from="0 50 50"
                            to="360 50 50"
                            repeatCount="indefinite" />
                    </line>
                    <line fill="none" stroke-linecap="round" stroke="#000000" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="49.5" y2="74">
                        <animateTransform 
                            attributeName="transform" 
                            dur="15s"
                            type="rotate"
                            from="0 50 50"
                            to="360 50 50"
                            repeatCount="indefinite" />
                    </line>
                    </svg> -->
                    <svg version="1.1" id="L7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                    <path fill="#000000" d="M31.6,3.5C5.9,13.6-6.6,42.7,3.5,68.4c10.1,25.7,39.2,38.3,64.9,28.1l-3.1-7.9c-21.3,8.4-45.4-2-53.8-23.3
                        c-8.4-21.3,2-45.4,23.3-53.8L31.6,3.5z">
                            <animateTransform 
                            attributeName="transform" 
                            attributeType="XML" 
                            type="rotate"
                            dur="2s" 
                            from="0 50 50"
                            to="360 50 50" 
                            repeatCount="indefinite" />
                        </path>
                    <path fill="#000000" d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
                        c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z">
                            <animateTransform 
                            attributeName="transform" 
                            attributeType="XML" 
                            type="rotate"
                            dur="1s" 
                            from="0 50 50"
                            to="-360 50 50" 
                            repeatCount="indefinite" />
                        </path>
                    <path fill="#000000" d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
                        L82,35.7z">
                            <animateTransform 
                            attributeName="transform" 
                            attributeType="XML" 
                            type="rotate"
                            dur="2s" 
                            from="0 50 50"
                            to="360 50 50" 
                            repeatCount="indefinite" />
                        </path>
                    </svg>
                </div>

                </div>
                <div class="contenedor-info">
                <ul>
                    <li>
                    <a href="tel:+34943123123" target="_blank" title="Deitu 943 123 123 zenbakira">
                        <img src="<?= asset('assets/img/icons/tel.svg') ?>" alt="Telefonoaren ikonoa" title="Telefonoa" aria-hidden="true">
                        <span>943 123 123</span>
                    </a>
                    </li>
                    <li>
                    <a href="mailto:aranaz@webda.eus" target="_blank" title="Bidali mezu elektronikoa aranaz@webda.eus helbidera">
                        <img src="<?= asset('assets/img/icons/mail-solid.svg') ?>" alt="Posta elektronikoaren ikonoa" title="Posta elektronikoa" aria-hidden="true">
                        <span>aranaz@webda.eus</span>
                    </a>
                    </li>
                    <li>
                    <a href="https://wa.me/628749350" target="_blank" title="Ireki WhatsApp harremanetarako">
                        <img src="<?= asset('assets/img/icons/wa.svg') ?>" alt="WhatsApp ikonoa" title="WhatsApp" aria-hidden="true">
                        <span>628 749 350</span>
                    </a>
                    </li>
                    <li>
                    <a href="https://maps.app.goo.gl/Kh7rZM3WF1chSZSj7" target="_blank" title="Ikusi kokapena Google Mapsen">
                        <img src="<?= asset('assets/img/icons/map-pin-solid.svg') ?>" alt="Kokapenaren ikonoa" title="Kokapena" aria-hidden="true">
                        <span>C/ Juan Fermín, Juan F. Gilisagasti Kalea, 4, 1º, 20018 Donostia / San Sebastián, Gipuzkoa</span>
                    </a>
                    </li>
                </ul>
                <iframe title="Emporium Digital-en kokapena Google Maps-en" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1886.901188915529!2d-2.0047191655624914!3d43.29790730427824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b013f0513629%3A0x57e4ff3311f619d9!2s%C3%81rea%20Escuela%20de%20Dise%C3%B1o%20y%20Nuevas%20Tecnolog%C3%ADas!5e1!3m2!1ses!2ses!4v1768584957042!5m2!1ses!2ses" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </article>
      </section>

      <section>
        <!-- ArtAcordeon01 -->
        <article class="artAcordeon01">
          <div class="cabecera">
            <div>
              <h2>Zure galderak, gure erantzunak</h2>
              <p>Gure zerbitzuei buruz gehien egiten diren galderei emandako erantzunak.</p>
              <p>Proiektuaren fase guztietan zurekin elkarlanean aritzen gara, lehen ideiatik abian jarri arte. Zure aurrekontura eta epeetara egokitzen gara, kalitatea eta xehetasuna baztertu gabe. Nola hasi zalantzan bazaude, jarri gurekin harremanetan eta konpromisorik gabe aholkatuko zaitugu.</p>
            </div>
            <img src="<?= asset('assets/img/views/fichaContacto.avif') ?>" alt="Emporium Digital-eko taldea bezeroen zalantzak argitzen" title="Maiz egindako galderei erantzuten" loading="lazy" width="600" height="600">
          </div>
          <div class="contenedor">
            <div class="ficha">
              <h3>Zer zerbitzu eskaintzen ditugu?</h3>
              <p class="respuesta">Espainiako enpresentzat neurrira egindako webguneen sorreran espezializatzen gara: diseinua, garapena, SEOa eta mantentze-lanak. Proiektu bakoitza hutsetik eraikitzen dugu, plantillarik gabe, eta Sanity CMS integratzen dugu zure edukia modu autonomoan editatu ahal izan dezazun.</p>
              <span class="mostrar boton">Gehiago erakutsi</span>
            </div>
            <div class="ficha">
              <h3>Nire enpresa txikia da, egokituta al daude zuen irtenbideak?</h3>
              <p class="respuesta">Bai, guztiz. Gure Oinarrizko plana 700€-tik hasten da, eta bereziki autonomo eta denda txikientzat diseinatuta dago. Irtenbide bakoitza zure errealitatera egokitzen dugu, funtzionalitate soberakinik gabe.</p>
              <span class="mostrar boton">Gehiago erakutsi</span>
            </div>
            <div class="ficha">
              <h3>Zeintzuk dira espero ditzakedan emaitza zehatzak?</h3>
              <p class="respuesta">Webgune azkarrak (PageSpeed 90+), Google-ko tokiko bilaketetarako posizionamendua, ekintzara bideratutako diseinuari esker hobetu diren bihurketa-tasak, eta zure edukia kudeatzeko autonomia osoa.</p>
              <span class="mostrar boton">Gehiago erakutsi</span>
            </div>
            <div class="ficha">
              <h3>Ez naiz eroso sentitzen teknologiaren aurrean. Arazoa al da?</h3>
              <p class="respuesta">Inola ere ez. Gure ikuspegia teknologia ulergarri bihurtzea eta irisgarri egitea da. Entrega bakoitzak Sanity Studio erabiltzeko gida bat dauka, eta zure galderei erantzuteko prest egoten gara.</p>
              <span class="mostrar boton">Gehiago erakutsi</span>
            </div>
            <div class="ficha">
              <h3>Proiektua amaitu ondoren ere badago laguntzarik?</h3>
              <p class="respuesta">Gure kodearen akatsak doan zuzentzen ditugu entregatu eta hurrengo 30 egunetan. Etengabeko mantentzerako edo funtzionalitate berrietarako, zure beharrari egokitutako aurrekontu zehatzekin lan egiten dugu.</p>
              <span class="mostrar boton">Gehiago erakutsi</span>
            </div>
            <div class="ficha">
              <h3>Eta jada eginda dudan webgune bat badut?</h3>
              <p class="respuesta">Auditoria egin eta faseka berritzeko proposamena egin diezazukegu, SEOa galdu gabe. Mantentze-lanez soilik ere arduratu gaitezke.</p>
              <span class="mostrar boton">Gehiago erakutsi</span>
            </div>
          </div>
        </article>
      </section>

         
      <?php require app_path('includes/eu/contacto_cta.php'); ?>

    </main>

    

    <?php require app_path('includes/eu/footer.php'); ?>
</body>
</html>
