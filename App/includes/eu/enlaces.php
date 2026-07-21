<?php
// Nabigatzaile eta footerrean partekatzen den zerrenda euskara hutsean.
// Orrialde berri bat sortuz gero, haren href-ak App/config/config.php-ko
// ibilbidearekin bat etorri behar du.
// $idSubmenu nav.php edo footer.php-tik dator, HTML ID bikoizketak saihesteko.
?>
<ul class="enlaces01">
  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/eu" title="Joan hasierara">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/home.svg') ?>" alt="Hasierako ikonoa" title="Hasiera">
      <span>Hasiera</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/eu/kontaktua" title="Joan kontaktura">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/mail.svg') ?>" alt="Posta ikonoa" title="Kontaktua">
      <span>Kontaktua</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/eu/nortzuk-gara" title="Joan nor gara atalera">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/users.svg') ?>" alt="Pertsonen ikonoa" title="Nortzuk gara">
      <span>Nortzuk gara</span>
    </a>
  </li>

   <li class="enlaces01__item">
    <a class="enlaces01__link" href="/es/servicios">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/cubenav-outline.svg') ?>" alt="">
      <span>Zerbitzuak</span>
    </a>
  </li>

  
  <!-- Este item contiene un segundo nivel de navegaciÃ³n. -->
  <?php /*
  <li class="enlaces01__item enlaces01__item--hasSubmenu" data-nav01-submenu-item>
    <div class="enlaces01__submenuHeader">
      <a class="enlaces01__link enlaces01__link--parent" href="/eu/zerbitzuak" title="Joan zerbitzuetara">
        <img class="enlaces01__icon" src="<?= asset('assets/img/icons/boxes.svg') ?>" alt="Zerbitzuen ikonoa" title="Zerbitzuak">
        <span>Zerbitzuak</span>
      </a>
      <button class="enlaces01__submenuToggle" type="button" aria-controls="<?= e($idSubmenu) ?>" aria-expanded="false" aria-label="Azpimenua ireki Zerbitzuak" data-nav01-submenu-toggle data-nav01-label-open="Azpimenua ireki" data-nav01-label-close="Azpimenua itxi" data-nav01-submenu-label="Zerbitzuak">
        <img class="enlaces01__chevron" src="<?= asset('assets/img/icons/chevron.svg') ?>" alt="Azpimenuaren gezia" title="Azpimenua">
      </button>
    </div>

    <ul class="enlaces01__submenu" id="<?= e($idSubmenu) ?>" data-nav01-submenu>
      <li class="enlaces01__item">
        <a class="enlaces01__link enlaces01__link--child" href="/eu/zerbitzuak/pintorea" title="Pintorea">
          <img class="enlaces01__icon" src="<?= asset('assets/img/icons/tag.svg') ?>" alt="Etiketaren ikonoa" title="Pintorea">
          <span>Pintorea</span>
        </a>
      </li>
      <li class="enlaces01__item">
        <a class="enlaces01__link enlaces01__link--child" href="/eu/zerbitzuak/altzari-zaharberritzailea" title="Altzari zaharberritzailea">
          <img class="enlaces01__icon" src="<?= asset('assets/img/icons/spark.svg') ?>" alt="Txinpartaren ikonoa" title="Altzari zaharberritzailea">
          <span>Altzari zaharberritzailea</span>
        </a>
      </li>
    </ul>
  </li>
  */ ?>

   <?php /*
  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/showroom" title="Joan showroom-era">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/grid.svg') ?>" alt="Sareta ikonoa" title="Showroom">
      <span>Showroom</span>
  </li> 
   */ ?>
</ul>
