<!-- ===========================================================
     СЛАЙДЕР «НАШИ СПЕЦИАЛИСТЫ» (Swiper 11)
     Структура по образцу старого сайта: header (фото + градиент) → body.
     CSS подключается отдельно (см. specialists-slider.css).
     Требуется на странице: swiper-bundle.min.js и swiper-bundle.min.css
     ВАЖНО: фото — PNG/JPG на белом фоне (как на старом сайте),
     тогда верх фото сливается с белым фоном страницы.
     =========================================================== -->

<section class="specialists_slider">
  <div class="specialists_slider_head">
    <h2>Наши специалисты</h2>
    <a class="specialists_slider_all" href="#">Все специалисты</a>
  </div>

  <div class="swiper">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <article class="specialist_card">
          <div class="specialist_card_header">
            <img src="includes/specialists-slider/assets/1.webp" alt="Жармуханова Айслу Курмантаевна">
            <div class="specialist_card_header_gradient"></div>
          </div>
          <div class="specialist_card_body">
            <div class="specialist_card_info">
              <h4 class="specialist_card_name">Жармуханова Айслу Курмантаевна</h4>
              <p class="specialist_card_role">Врач-офтальмолог, детский офтальмолог</p>
              <span class="specialist_card_place"><a href="#">Центр коррекции зрения Линз-Очки "Озерки"</a></span>
            </div>
            <div class="specialist_card_btn">
              <a class="btn" href="#">Запись на приём</a>
            </div>
            <a class="specialist_card_link" href="#" aria-label="Подробнее о специалисте"></a>
          </div>
        </article>
      </div>

      <div class="swiper-slide">
        <article class="specialist_card">
          <div class="specialist_card_header">
            <img src="includes/specialists-slider/assets/2.webp" alt="Артемов Андрей Александрович">
            <div class="specialist_card_header_gradient"></div>
          </div>
          <div class="specialist_card_body">
            <div class="specialist_card_info">
              <h4 class="specialist_card_name">Артемов Андрей Александрович</h4>
              <p class="specialist_card_role">Медицинский оптик-оптометрист</p>
              <span class="specialist_card_place"><a href="#">Центр коррекции зрения Линз-Очки "Озерки"</a></span>
              <span class="specialist_card_place"><a href="#">Салон оптики Линз-Очки "Дыбенко"</a></span>
            </div>
            <div class="specialist_card_btn">
              <a class="btn" href="#">Запись на приём</a>
            </div>
            <a class="specialist_card_link" href="#" aria-label="Подробнее о специалисте"></a>
          </div>
        </article>
      </div>

      <div class="swiper-slide">
        <article class="specialist_card">
          <div class="specialist_card_header">
            <img src="includes/specialists-slider/assets/3.webp" alt="Морозов Роман Александрович">
            <div class="specialist_card_header_gradient"></div>
          </div>
          <div class="specialist_card_body">
            <div class="specialist_card_info">
              <h4 class="specialist_card_name">Морозов Роман Александрович</h4>
              <p class="specialist_card_role">Главный врач сети "Линз-Очки", врач-офтальмолог</p>
              <span class="specialist_card_place"><a href="#">Салон оптики Линз-Очки "Академический"</a></span>
            </div>
            <div class="specialist_card_btn">
              <a class="btn" href="#">Запись на приём</a>
            </div>
            <a class="specialist_card_link" href="#" aria-label="Подробнее о специалисте"></a>
          </div>
        </article>
      </div>

      <div class="swiper-slide">
        <article class="specialist_card">
          <div class="specialist_card_header">
            <img src="includes/specialists-slider/assets/4.webp" alt="Лесакова Алёна Константиновна">
            <div class="specialist_card_header_gradient"></div>
          </div>
          <div class="specialist_card_body">
            <div class="specialist_card_info">
              <h4 class="specialist_card_name">Лесакова Алёна Константиновна</h4>
              <p class="specialist_card_role">Медицинский оптик-оптометрист</p>
              <span class="specialist_card_place"><a href="#">Салон оптики Линз-Очки "Академический"</a></span>
              <span class="specialist_card_place"><a href="#">Салон оптики Линз-Очки "Дыбенко"</a></span>
            </div>
            <div class="specialist_card_btn">
              <a class="btn" href="#">Запись на приём</a>
            </div>
            <a class="specialist_card_link" href="#" aria-label="Подробнее о специалисте"></a>
          </div>
        </article>
      </div>

      <div class="swiper-slide">
        <article class="specialist_card">
          <div class="specialist_card_header">
            <img src="includes/specialists-slider/assets/5.webp" alt="Борисова Екатерина Александровна">
            <div class="specialist_card_header_gradient"></div>
          </div>
          <div class="specialist_card_body">
            <div class="specialist_card_info">
              <h4 class="specialist_card_name">Борисова Екатерина Александровна</h4>
              <p class="specialist_card_role">Медицинский оптик-оптометрист</p>
              <span class="specialist_card_place"><a href="#">Центр коррекции зрения Линз-Очки "Озерки"</a></span>
              <span class="specialist_card_place"><a href="#">Салон оптики Линз-Очки "Дыбенко"</a></span>
            </div>
            <div class="specialist_card_btn">
              <a class="btn" href="#">Запись на приём</a>
            </div>
            <a class="specialist_card_link" href="#" aria-label="Подробнее о специалисте"></a>
          </div>
        </article>
      </div>

      <div class="swiper-slide">
        <article class="specialist_card">
          <div class="specialist_card_header">
            <img src="includes/specialists-slider/assets/6.webp" alt="Юденков Геннадий Юрьевич">
            <div class="specialist_card_header_gradient"></div>
          </div>
          <div class="specialist_card_body">
            <div class="specialist_card_info">
              <h4 class="specialist_card_name">Юденков Геннадий Юрьевич</h4>
              <p class="specialist_card_role">Медицинский оптик-оптометрист</p>
              <span class="specialist_card_place"><a href="#">Салон оптики Линз-Очки "Дыбенко"</a></span>
            </div>
            <div class="specialist_card_btn">
              <a class="btn" href="#">Запись на приём</a>
            </div>
            <a class="specialist_card_link" href="#" aria-label="Подробнее о специалисте"></a>
          </div>
        </article>
      </div>
    </div>

    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.specialists_slider .swiper', {
      slidesPerView: 1.2,
      spaceBetween: 20,
      pagination: { el: '.specialists_slider .swiper-pagination', clickable: true },
      navigation: {
        nextEl: '.specialists_slider .swiper-button-next',
        prevEl: '.specialists_slider .swiper-button-prev',
      },
      breakpoints: {
        560:  { slidesPerView: 2.2, spaceBetween: 20 },
        900:  { slidesPerView: 3.2, spaceBetween: 24 },
        1200: { slidesPerView: 5,   spaceBetween: 24 },
      },
    });
  });
</script>