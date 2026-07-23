<?php
// Footer en euskera. Los textos, rutas y datos de contacto se editan aquí
// sin depender de arrays de configuración ni de condiciones de idioma.
?>
<footer class="footer01">
  <div class="footer01__inner">
    <section class="footer01__column" aria-labelledby="footer01-menu-title-eu">
      <h2 class="footer01__title" id="footer01-menu-title-eu">Nabigazioa</h2>
      <?php
      // Se reutiliza el listado para no mantener dos menús diferentes.
      $idSubmenu = 'footer-zerbitzuak-eu';
      require app_path('includes/eu/enlaces.php');
      ?>
    </section>

    <section class="footer01__column" aria-labelledby="footer01-legal-title-eu">
      <h2 class="footer01__title" id="footer01-legal-title-eu">Legezkoa</h2>
      <ul class="footer01__list">
        <li><a class="footer01__link" href="<?= url('/eu/lege-oharra#aviso-legal') ?>" title="Lege oharra">Lege oharra</a></li>
        <li><a class="footer01__link" href="<?= url('/eu/lege-oharra#politica-privacidad') ?>" title="Pribatutasun politika">Pribatutasun politika</a></li>
        <li><a class="footer01__link" href="<?= url('/eu/lege-oharra#gestion-cookies') ?>" title="Cookieen kudeaketa">Cookieen kudeaketa</a></li>
      </ul>
    </section>

    <section class="footer01__column" aria-labelledby="footer01-contact-title-eu">
      <h2 class="footer01__title" id="footer01-contact-title-eu">Kontaktua</h2>
      <address class="footer01__address">
        <a class="footer01__link" href="tel:+34000000000" title="Deitu +34 000 000 000 zenbakira">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/phone.svg') ?>" alt="Telefonoaren ikonoa" title="Telefonoa">
          <span>+34 000 000 000</span>
        </a>
        <a class="footer01__link" href="mailto:hola@ejemplo.com" title="Bidali mezu elektronikoa hola@ejemplo.com helbidera">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/mail.svg') ?>" alt="Posta elektronikoaren ikonoa" title="Posta elektronikoa">
          <span>hola@ejemplo.com</span>
        </a>
        <a class="footer01__link" href="https://www.google.com/maps/search/?api=1&query=Calle+Ejemplo+1" target="_blank" rel="noopener noreferrer" title="Ikusi Google Mapsen">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/map.svg') ?>" alt="Maparen ikonoa" title="Google Maps">
          <span>Ikusi Google Mapsen</span>
        </a>
        <p class="footer01__text">
          <img class="footer01__icon" src="<?= asset('assets/img/icons/pin.svg') ?>" alt="Kokapenaren ikonoa" title="Kokapena">
          <span>Calle Ejemplo 1, 00000 Ciudad</span>
        </p>
      </address>
    </section>
  </div>

  <div class="footer01__bottom">
    <p>xxxx-ek garatua. &copy; <?= date('Y') ?> Eskubide guztiak erreserbatuta.</p>
  </div>
</footer>
