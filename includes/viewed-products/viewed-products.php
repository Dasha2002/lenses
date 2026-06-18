
<svg width="0" height="0" style="position:absolute" aria-hidden="true">
  <defs>
    <symbol id="icon-cart" viewBox="0 0 18 18">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 15.75C3.75 14.5074 4.75736 13.5 6 13.5C7.24264 13.5 8.25 14.5074 8.25 15.75C8.25 16.9926 7.24264 18 6 18C4.75736 18 3.75 16.9926 3.75 15.75ZM6 15C5.58579 15 5.25 15.3358 5.25 15.75C5.25 16.1642 5.58579 16.5 6 16.5C6.41421 16.5 6.75 16.1642 6.75 15.75C6.75 15.3358 6.41421 15 6 15Z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M12.75 15.75C12.75 14.5074 13.7574 13.5 15 13.5C16.2426 13.5 17.25 14.5074 17.25 15.75C17.25 16.9926 16.2426 18 15 18C13.7574 18 12.75 16.9926 12.75 15.75ZM15 15C14.5858 15 14.25 15.3358 14.25 15.75C14.25 16.1642 14.5858 16.5 15 16.5C15.4142 16.5 15.75 16.1642 15.75 15.75C15.75 15.3358 15.4142 15 15 15Z"/>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.75C0 0.335786 0.335786 0 0.75 0H2.43864C3.56681 0.00170906 4.51928 0.83864 4.66609 1.95719L4.90265 3.75H17.25C17.4747 3.75 17.6876 3.85077 17.8301 4.02457C17.9725 4.19838 18.0295 4.4269 17.9854 4.64726L16.7256 10.9386C16.5132 12.0055 15.5695 12.7671 14.4835 12.75H6.56534C5.43025 12.7579 4.46682 11.9189 4.31894 10.7931L3.17894 2.15311C3.13007 1.78036 2.81272 1.5008 2.43683 1.5H0.75C0.335786 1.5 0 1.16421 0 0.75ZM5.10056 5.25L5.80606 10.5969C5.85531 10.9726 6.17719 11.2532 6.55614 11.25L14.49 11.25L14.5044 11.2501C14.8676 11.2571 15.1836 11.0027 15.2544 10.6464L16.3349 5.25H5.10056Z"/>
    </symbol>
    <symbol id="icon-lensbox" viewBox="0 0 200 200">
      <rect x="34" y="58" width="132" height="84" rx="8" fill="none" stroke="currentColor" stroke-width="4"/>
      <rect x="34" y="58" width="44" height="84" rx="8" fill="currentColor" opacity=".35"/>
      <circle cx="124" cy="100" r="24" fill="none" stroke="currentColor" stroke-width="4"/>
      <circle cx="124" cy="100" r="10" fill="currentColor" opacity=".5"/>
    </symbol>
  </defs>
</svg>


<section class="viewed_slider">
  <div class="viewed_slider_head">
    <h2>Недавно просмотренные товары</h2>
  </div>

  <div class="swiper">
    <div class="swiper-wrapper">

      <!-- ===== КАРТОЧКА «в наличии» — кнопка-корзина ===== -->
      <div class="swiper-slide">
        <article class="viewed_card in_stock">
          <div class="viewed_card_main_pic_price_box">
            <div class="viewed_card_image">
              <svg class="svg-icon placeholder" aria-hidden="true"><use href="#icon-lensbox"></use></svg>
              <!-- реальное фото: <img src="..." alt="..."> -->
            </div>
            <div class="viewed_card_info">
              <a class="viewed_card_name" href="#">Dailies Total 1 for Astigmatism</a>
              <div class="viewed_card_price">3&nbsp;754<span>₽</span></div>
            </div>
          </div>
          <div class="viewed_card_actions">
            <button class="viewed_card_btn primary cart" type="button" aria-label="В корзину"><svg class="svg-icon"><use href="#icon-cart"></use></svg></button>
          </div>
        </article>
      </div>

      <!-- ===== КАРТОЧКА «в салоне» — две кнопки ===== -->
      <div class="swiper-slide">
        <article class="viewed_card salon">
          <div class="viewed_card_main_pic_price_box">
            <div class="viewed_card_image">
                <svg class="svg-icon placeholder" aria-hidden="true"><use href="#icon-lensbox"></use></svg>
            </div>
            <div class="viewed_card_info">
                <a class="viewed_card_name" href="#">MiSight® 1 day</a>
                <div class="viewed_card_price">3&nbsp;199<span>₽</span></div>
            </div>
          </div>
          <div class="viewed_card_actions">
            <span class="viewed_card_btn disabled">В салонах оптики</span>
            <a class="viewed_card_btn primary" href="#">Записаться на приём</a>
          </div>
        </article>
      </div>

      <!-- ===== КАРТОЧКА «в наличии» ===== -->
      <div class="swiper-slide">
        <article class="viewed_card in_stock">
          <div class="viewed_card_main_pic_price_box">
            <div class="viewed_card_image">
              <svg class="svg-icon placeholder" aria-hidden="true"><use href="#icon-lensbox"></use></svg>
            </div>
            <div class="viewed_card_info">
              <a class="viewed_card_name" href="#">ULTRA ONE DAY</a>
              <div class="viewed_card_price">2&nbsp;888<span>₽</span></div>
            </div>
          </div>
          <div class="viewed_card_actions">
            <button class="viewed_card_btn primary cart" type="button" aria-label="В корзину"><svg class="svg-icon"><use href="#icon-cart"></use></svg></button>
          </div>
        </article>
      </div>

      <!-- ===== КАРТОЧКА «в салоне» ===== -->
      <div class="swiper-slide">
        <article class="viewed_card salon">
          <div class="viewed_card_main_pic_price_box">
            <div class="viewed_card_image">
              <svg class="svg-icon placeholder" aria-hidden="true"><use href="#icon-lensbox"></use></svg>
            </div>
            <div class="viewed_card_info">
              <a class="viewed_card_name" href="#">MiSight® 1 day (90 линз)</a>
              <div class="viewed_card_price">7&nbsp;996<span>₽</span></div>
            </div>
          </div>
          <div class="viewed_card_actions">
            <span class="viewed_card_btn disabled">В салонах оптики</span>
            <a class="viewed_card_btn primary" href="#">Записаться на приём</a>
          </div>
        </article>
      </div>

      <!-- ===== КАРТОЧКА «в наличии» ===== -->
      <div class="swiper-slide">
        <article class="viewed_card in_stock">
          <div class="viewed_card_main_pic_price_box">
            <div class="viewed_card_image">
              <svg class="svg-icon placeholder" aria-hidden="true"><use href="#icon-lensbox"></use></svg>
            </div>
            <div class="viewed_card_info">
              <a class="viewed_card_name" href="#">Relins Perfect Cleaner 30 мл</a>
              <div class="viewed_card_price">899<span>₽</span></div>
            </div>
          </div>
          <div class="viewed_card_actions">
            <button class="viewed_card_btn primary cart" type="button" aria-label="В корзину"><svg class="svg-icon"><use href="#icon-cart"></use></svg></button>
          </div>
        </article>
      </div>

      <!-- ===== КАРТОЧКА «в салоне» ===== -->
      <div class="swiper-slide">
        <article class="viewed_card salon">
          <div class="viewed_card_main_pic_price_box">
            <div class="viewed_card_image">
              <svg class="svg-icon placeholder" aria-hidden="true"><use href="#icon-lensbox"></use></svg>
            </div>
            <div class="viewed_card_info">
              <a class="viewed_card_name" href="#">1•DAY ACUVUE MOIST Multifocal</a>
              <div class="viewed_card_price">3&nbsp;018<span>₽</span></div>
            </div>
          </div>
          <div class="viewed_card_actions">
            <span class="viewed_card_btn disabled">В салонах оптики</span>
            <a class="viewed_card_btn primary" href="#">Записаться на приём</a>
          </div>
        </article>
      </div>

      <!-- ===== КАРТОЧКА «в наличии» ===== -->
      <div class="swiper-slide">
        <article class="viewed_card in_stock">
          <div class="viewed_card_main_pic_price_box">
            <div class="viewed_card_image">
              <svg class="svg-icon placeholder" aria-hidden="true"><use href="#icon-lensbox"></use></svg>
            </div>
            <div class="viewed_card_info">
              <a class="viewed_card_name" href="#">Dailies Total 1 for Astigmatism</a>
              <div class="viewed_card_price">3&nbsp;754<span>₽</span></div>
            </div>
          </div>
          <div class="viewed_card_actions">
            <button class="viewed_card_btn primary cart" type="button" aria-label="В корзину"><svg class="svg-icon"><use href="#icon-cart"></use></svg></button>
          </div>
        </article>
      </div>

      <!-- ===== КАРТОЧКА «в салоне» ===== -->
      <div class="swiper-slide">
        <article class="viewed_card salon">
          <div class="viewed_card_main_pic_price_box">
            <div class="viewed_card_image">
              <svg class="svg-icon placeholder" aria-hidden="true"><use href="#icon-lensbox"></use></svg>
            </div>
            <div class="viewed_card_info">
              <a class="viewed_card_name" href="#">MiSight® 1 day</a>
              <div class="viewed_card_price">3&nbsp;199<span>₽</span></div>
            </div>
          </div>
          <div class="viewed_card_actions">
            <span class="viewed_card_btn disabled">В салонах оптики</span>
            <a class="viewed_card_btn primary" href="#">Записаться на приём</a>
          </div>
        </article>
      </div>

    </div><!-- /swiper-wrapper -->

    <!-- точки-пагинация и стрелки (необязательны — можно удалить) -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div><!-- /swiper -->
</section>

<!-- Инициализация Swiper (swiper-bundle.min.js уже подключён в index.php) -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.viewed_slider .swiper', {
      slidesPerView: 1,
      spaceBetween: 12,
      pagination: { el: '.viewed_slider .swiper-pagination', clickable: true },
      navigation: {
        nextEl: '.viewed_slider .swiper-button-next',
        prevEl: '.viewed_slider .swiper-button-prev',
      },
      breakpoints: {
        768: { slidesPerView: 2, spaceBetween: 12 },
      },
    });
  });
</script>