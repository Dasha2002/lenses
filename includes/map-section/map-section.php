<!-- ===========================================================
     СЕКЦИЯ «КАРТА + АДРЕСА»
     CSS подключается отдельно (см. map-section.css).
     Карта — Yandex Maps JS API 2.1. Перед закрытием </body> или в <head>
     нужно подключить API с вашим ключом:
       <script src="https://api-maps.yandex.ru/2.1/?apikey=119abfea-01aa-4af5-9ca1-892d4dc21b76&lang=ru_RU"></script>
     =========================================================== -->

<!-- SVG-спрайт: иконка-метка (можно заменить на свой <img src="map-pin-black.svg">) -->
<svg width="0" height="0" style="position:absolute" aria-hidden="true">
  <defs>
    <symbol id="icon-pin" viewBox="0 0 24 24">
      <path d="M12 2C8.27 2 5.25 5.02 5.25 8.75c0 4.85 6.05 12.1 6.31 12.41a.57.57 0 0 0 .88 0c.26-.31 6.31-7.56 6.31-12.41C18.75 5.02 15.73 2 12 2Z" color="black" fill="none" stroke="currentColor" stroke-width="1.6"/>
      <circle cx="12" cy="8.75" r="2.6" color="black" fill="none" stroke="currentColor" stroke-width="1.6"/>
    </symbol>
  </defs>
</svg>


<section class="map">
  <!-- контейнер карты (Yandex API рендерит сюда) -->
  <div class="map_card" id="map"></div>

  <!-- карточки адресов -->
  <div class="map_blocks">

    <div class="map_block">
      <div class="map_block_head">
        <svg class="svg-icon" aria-hidden="true"><use href="#icon-pin"></use></svg>
        <span>Центр коррекции зрения Линз-Очки "Озерки"</span>
      </div>
      <h4>
        <b>Время работы: пн - вс:</b><br>
        с 10:00 до 21:00.<br>
        <span class="map_block_note">без перерывов и выходных</span>
      </h4>
      <h2><a href="tel:+78129282958">8 (812) 928-29-58</a></h2>
      <a href="/optician-ozerki"><button type="button">Подробнее</button></a>
    </div>

    <div class="map_block">
      <div class="map_block_head">
        <svg class="svg-icon" aria-hidden="true"><use href="#icon-pin"></use></svg>
        <span>Салон оптики "Академический"</span>
      </div>
      <h4>
        <b>Время работы: пн - вс:</b><br>
        с 10:00 до 21:00.<br>
        <span class="map_block_note">без перерывов и выходных</span>
      </h4>
      <h2><a href="tel:+78129292958">8 (812) 929-29-58</a></h2>
      <a href="/optician-akademicheskij"><button type="button">Подробнее</button></a>
    </div>

    <div class="map_block">
      <div class="map_block_head">
        <svg class="svg-icon" aria-hidden="true"><use href="#icon-pin"></use></svg>
        <span>Салон оптики "Дыбенко"</span>
      </div>
      <h4>
        <b>Время работы: пн - вс:</b><br>
        с 10:00 до 21:00.<br>
        <span class="map_block_note">без перерывов и выходных</span>
      </h4>
      <h2><a href="tel:+78129295099">8 (812) 929-50-99</a></h2>
      <a href="/optician-dybenko"><button type="button">Подробнее</button></a>
    </div>

  </div>
  <script src="https://api-maps.yandex.ru/2.1/?apikey=119abfea-01aa-4af5-9ca1-892d4dc21b76&lang=ru_RU"></script>
</section>

<!-- Инициализация карты.
     Замените координаты [широта, долгота] на реальные для каждого салона. -->
<script>
  (function () {
    function initMap() {
      // координаты салонов
      var points = [
        { coords: [60.039719, 30.326176], name: 'Центр коррекции зрения Линз-Очки "Озерки"' },
        { coords: [60.014577, 30.393288], name: 'Салон оптики "Академический"' },
        { coords: [59.904980, 30.473811], name: 'Салон оптики "Дыбенко"' }
      ];

      var map = new ymaps.Map('map', {
        center: [59.9386, 30.3141],   // центр (Санкт-Петербург)
        zoom: 7,
        controls: ['zoomControl'],
      }, {
        suppressMapOpenBlock: true
      });

      map.behaviors.disable('scrollZoom'); // не зумить колесом при прокрутке страницы

      var collection = new ymaps.GeoObjectCollection();
      points.forEach(function (p) {
        collection.add(new ymaps.Placemark(p.coords, { balloonContent: p.name }));
      });
      map.geoObjects.add(collection);

      // вписать все метки в видимую область
      function fitPoints() {
        if (points.length > 1) {
          map.setBounds(collection.getBounds(), { checkZoomRange: true, zoomMargin: 40 });
        }
      }
      fitPoints();

      // подгонять карту под контейнер при изменении размера окна
      var resizeTimer;
      window.addEventListener('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
          map.container.fitToViewport();  // пересчитать размеры под контейнер
          fitPoints();                    // снова вписать метки
        }, 200);
      });
    }

    if (window.ymaps && ymaps.ready) {
      ymaps.ready(initMap);
    } else {
      document.addEventListener('DOMContentLoaded', function () {
        if (window.ymaps) ymaps.ready(initMap);
      });
    }
  })();
</script>