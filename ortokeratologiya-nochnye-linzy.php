<?php
$pageTitle = 'Ортокератологические (ночные) линзы в Санкт-Петербурге | Линз-Очки';
$pageDescription = 'Ортокератологические линзы (ОК-линзы) для коррекции зрения во сне: показания, преимущества, подбор и уход. Запись на консультацию в Линз-Очки.';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <meta name="description" content="<?= $pageDescription ?>">

    <!-- Шрифты и иконки -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="icon" type="image/svg+xml" sizes="any" href="img/36.svg">

    <!-- Ваши стили -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <?php include __DIR__ . '/includes/popap-record/popap-record.php'; ?>
    <?php include __DIR__ . '/includes/popup-overlay/popup-overlay.php'; ?>
    <?php include __DIR__ . '/includes/popap-filter/popap-filter.php'; ?>
    <?php include __DIR__ . '/includes/catalog/catalog.php'; ?>
    <?php include __DIR__ . '/includes/header/header.php'; ?>

    <main>
        <div class="lens_seo">

            <div class="welcome_lens">
                <div class="welcome_lens_contant" style="background-image: url(includes/ortho-lens/assets/hero_image.png);">
                    <div class="welcome_lens_contant_text">
                        <h2>Ортокератологические линзы: ночной комфорт для вашего зрения</h2>
                        <p>Ортокератологические линзы (ночные линзы или просто ОК-линзы) — это уникальный способ коррекции зрения, который работает, пока вы спите. Они мягко изменяют форму роговицы, обеспечивая чёткое зрение в течение всего дня без необходимости носить очки или контактные линзы. Это современное решение, которое становится всё более популярным среди людей, ищущих комфорт и свободу.</p>
                        <div class="contacts-callback-btn gr-callback-btn">
                            <button class="contacts-callback-btn__link popap-record-btn">Оставить заявку</button>
                        </div>
                    </div>
                    <div class="welcome_lens_contant_gradient"></div>
                </div>
                <div class="welcome_lens_link">
                    <a href="#what">Как работают ортокератологические линзы</a>
                    <a href="#whom">Кому подходят</a>
                    <a href="#advantages">Преимущества</a>
                    <a href="#how">Как подобрать</a>
                    <a href="#care">Как ухаживать</a>
                    <a href="#faq">Часто задаваемые вопросы</a>
                </div>
            </div>

            <div class="what" id="what">
                <h2>Как работают ортокератологические линзы?</h2>
                <div class="what_block">
                    <p>ОК-линзы надеваются перед сном и снимаются утром. Пока вы отдыхаете, они мягко воздействуют на роговицу, корректируя её форму. Это позволяет свету правильно фокусироваться на сетчатке, устраняя такие проблемы, как близорукость, дальнозоркость и астигматизм. После снятия линз утром зрение остаётся чётким на протяжении всего дня.</p>
                </div>
            </div>

            <div class="whom" id="whom">
                <h2>Кому подойдут ОК-линзы?</h2>
                <div class="whom_block">
                    <img src="includes/ortho-lens/assets/lens.png" alt="Кому подойдут ОК-линзы">
                    <div class="whom_block_text">
                        <p>Ортокератологические линзы рекомендуются в следующих случаях:</p>
                        <ul>
                            <li><b>Близорукость (миопия)</b> (степень миопии, которую можно скорректировать, оценивается специалистом на приёме)</li>
                            <li><b>Астигматизм</b> (степень астигматизма, которую можно скорректировать, оценивается специалистом на приёме)</li>
                            <li><b>Дальнозоркость (гиперметропия)</b> (степень гиперметропии, которую можно скорректировать, оценивается специалистом на приёме)</li>
                            <li><b>Дети и подростки.</b> Особенно актуально при прогрессирующей миопии. ОК-линзы помогают замедлить, а иногда могут полностью остановить прогрессирование близорукости.</li>
                            <li><b>Активный образ жизни.</b> Если вы занимаетесь спортом или ведёте активную жизнь, отсутствие очков или дневных линз станет большим преимуществом.</li>
                            <li><b>Работа в пыльной среде.</b> Для людей, работающих в условиях, где дневные контактные линзы могут доставлять дискомфорт.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="advantages_lenses" id="advantages">
                <h2>Преимущества ортокератологических линз</h2>
                <div class="advantages_lenses_blocks">
                    <div class="advantages_lenses_block">
                        <div class="advantages_lenses_block_ico">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="advantages_lenses_block_text">
                            <span>Чёткое зрение без линз и очков днём</span>
                            <p>Идеально для тех, кто хочет чувствовать свободу в течение дня.</p>
                        </div>
                    </div>
                    <div class="advantages_lenses_block">
                        <div class="advantages_lenses_block_ico">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="advantages_lenses_block_text">
                            <span>Безопасность</span>
                            <p>ОК-линзы не контактируют с роговицей в течение дня, что снижает риск её пересыхания.</p>
                        </div>
                    </div>
                    <div class="advantages_lenses_block">
                        <div class="advantages_lenses_block_ico">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="advantages_lenses_block_text">
                            <span>Подходят для детей</span>
                            <p>Это отличный вариант для школьников, которые не хотят носить очки.</p>
                        </div>
                    </div>
                    <div class="advantages_lenses_block">
                        <div class="advantages_lenses_block_ico">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="advantages_lenses_block_text">
                            <span>Комфорт для глаз</span>
                            <p>Отсутствие линз в течение дня устраняет риск раздражения от сухого воздуха или длительной работы за компьютером.</p>
                        </div>
                    </div>
                    <div class="advantages_lenses_block">
                        <div class="advantages_lenses_block_ico">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="advantages_lenses_block_text">
                            <span>Замедление прогрессии близорукости</span>
                            <p>Клинические исследования доказали, что ОК-линзы эффективно замедляют, а у некоторых детей позволяют полностью остановить развитие миопии.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="how" id="how">
                <h2>Как подобрать ортокератологические линзы?</h2>
                <div class="how_block">
                    <div class="how_block_text">
                        <p>Подбор ОК-линз — это сложный и важный процесс, который требует участия профессионального специалиста. В салонах Линз-Очки мы проводим:</p>
                        <ul>
                            <li><b>Диагностику состояния глаз.</b> Используем высокоточное оборудование для определения параметров роговицы.</li>
                            <li><b>Подбор линз.</b> Оцениваем посадку и эффективность коррекции.</li>
                            <li><b>Обучение использованию.</b> Наши специалисты покажут, как правильно надевать, снимать и ухаживать за линзами.</li>
                            <li><b>Контрольные осмотры.</b> Регулярные проверки помогают поддерживать здоровье глаз и корректировать линзы при необходимости.</li>
                        </ul>
                    </div>
                    <img src="includes/ortho-lens/assets/cabinet.png" alt="Как подобрать ОК-линзы">
                </div>
            </div>

            <div class="care" id="care">
                <div class="care_header">
                    <div>
                        <h2>Как ухаживать за ОК-линзами?</h2>
                        <p>Для долговечности линз и здоровья глаз важно соблюдать правила ухода:<p>
                    </div>
                    <a href="#videoContainer" class="care_header_btn">
                        <div class="icon"><img src="includes/ortho-lens/assets/play.svg" alt=""></div>
                        <div class="care_header_btn_text">
                            <h4>Посмотрите видео</h4>
                            <p>как ухаживать и надевать линзы</p>
                        </div>
                    </a>
                </div>
                <div class="care_blocks">
                    <div class="care_block">
                        <div class="care_block_num">1</div>
                        <div class="care_block_text">
                            <p>Очищайте линзы ежедневно специальными растворами.</p>
                        </div>
                    </div>
                    <div class="care_block">
                        <div class="care_block_num">2</div>
                        <div class="care_block_text">
                            <p>Храните в контейнере с дезинфицирующей жидкостью.</p>
                        </div>
                    </div>
                    <div class="care_block">
                        <div class="care_block_num">3</div>
                        <div class="care_block_text">
                            <p>Мойте руки перед использованием линз.</p>
                        </div>
                    </div>
                    <div class="care_block">
                        <div class="care_block_num">4</div>
                        <div class="care_block_text">
                            <p>Регулярно посещайте офтальмолога для проверки состояния глаз.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="video_instructions" id="videoContainer">
                <h2>Посмотрите наши видеоинструкции</h2>
                <div class="video_instructions_grid">

                    <div class="video_card" data-video="https://dev.miram-prod.ru/assets/video/linzochki/2.mp4">
                        <img src="includes/ortho-lens/assets/video_1.png" alt="Видеоинструкция 1">
                        <button class="video_play" type="button" aria-label="Смотреть видео">
                            <!-- <img src="includes/ortho-lens/assets/play.svg" alt=""> -->
                        </button>
                    </div>

                    <div class="video_card" data-video="https://dev.miram-prod.ru/assets/video/linzochki/3.mp4">
                        <img src="includes/ortho-lens/assets/video_2.png" alt="Видеоинструкция 2">
                        <button class="video_play" type="button" aria-label="Смотреть видео">
                            <!-- <img src="includes/ortho-lens/assets/play.svg" alt=""> -->
                        </button>
                    </div>

                    <div class="video_card" data-video="https://dev.miram-prod.ru/assets/video/linzochki/6.mp4">
                        <img src="includes/ortho-lens/assets/video_3.png" alt="Видеоинструкция 3">
                        <button class="video_play" type="button" aria-label="Смотреть видео">
                            <!-- <img src="includes/ortho-lens/assets/play.svg" alt=""> -->
                        </button>
                    </div>

                    <div class="video_card" data-video="https://dev.miram-prod.ru/assets/video/linzochki/9.mp4">
                        <img src="includes/ortho-lens/assets/video_4.png" alt="Видеоинструкция 4">
                        <button class="video_play" type="button" aria-label="Смотреть видео">
                            <!-- <img src="includes/ortho-lens/assets/play.svg" alt=""> -->
                        </button>
                    </div>

                    <div class="video_card" data-video="https://dev.miram-prod.ru/assets/video/linzochki/10.mp4">
                        <img src="includes/ortho-lens/assets/video_5.png" alt="Видеоинструкция 5">
                        <button class="video_play" type="button" aria-label="Смотреть видео">
                            <!-- <img src="includes/ortho-lens/assets/play.svg" alt=""> -->
                        </button>
                    </div>

                    <div class="video_card" data-video="https://dev.miram-prod.ru/assets/video/linzochki/13.mp4">
                        <img src="includes/ortho-lens/assets/video_6.png" alt="Видеоинструкция 6">
                        <button class="video_play" type="button" aria-label="Смотреть видео">
                            <!-- <img src="includes/ortho-lens/assets/play.svg" alt=""> -->
                        </button>
                    </div>

                    <div class="video_card" data-video="https://dev.miram-prod.ru/assets/video/linzochki/14.mp4">
                        <img src="includes/ortho-lens/assets/video_7.png" alt="Видеоинструкция 7">
                        <button class="video_play" type="button" aria-label="Смотреть видео">
                            <!-- <img src="includes/ortho-lens/assets/play.svg" alt=""> -->
                        </button>
                    </div>

                </div>
            </div>

            <!-- попап с видео -->
            <div class="video_popup" id="videoPopup">
                <button class="video_popup_close" type="button" aria-label="Закрыть">&times;</button>
                <div class="video_popup_content">
                    <video class="video_popup_video" controls playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>
                    <button class="video_popup_play" type="button" aria-label="Воспроизвести">
                        <!-- <img src="includes/ortho-lens/assets/play.svg" alt=""> -->
                    </button>
                </div>
            </div>

            <!-- <div id="faq"> -->
                <?php include __DIR__ . '/includes/faq/faq.php'; ?>
            <!-- </div> -->

            <div class="why">
                <h2>Почему нужно выбрать Линз-Очки?</h2>
                <div class="why_blocks">
                    <div class="why_block_text">
                        <div class="why_block_text_block">
                            <ul>
                                <li><b>Опытные специалисты.</b><br>Наши офтальмологи и оптометристы подбирают линзы для самых сложных случаев.</li>
                                <li><b>Современное оборудование.</b><br>Полная диагностика для точного подбора.</li>
                                <li><b>Индивидуальный подход.</b><br>Каждая пара линз разрабатывается с учётом всех особенностей вашего зрения.</li>
                                <li><b>Гарантия качества.</b><br>Мы сотрудничаем только с ведущими производителями.</li>
                            </ul>
                        </div>
                        <p>Ортокератологические линзы — это ваш путь к свободе от очков и дневных контактных линз.</p>
                        <p>Запишитесь на консультацию в Линз-Очки и начните видеть мир чётко и комфортно уже сегодня!</p>
                        <div class="contacts-callback-btn gr-callback-btn">
                            <button class="contacts-callback-btn__link popap-record-btn">Запись на приём</button>
                        </div>
                    </div>
                    <div id="map" style="width: 100%; height: 485px;"></div>
                </div>
            </div>

        </div>
    </main>

    <?php include __DIR__ . '/includes/footer/footer.php'; ?>

    <!-- Ваши скрипты -->
    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Яндекс.Карта (как в секции map-section) -->
    <script src="https://api-maps.yandex.ru/2.1/?apikey=119abfea-01aa-4af5-9ca1-892d4dc21b76&lang=ru_RU"></script>
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

          map.behaviors.disable('scrollZoom');

          var collection = new ymaps.GeoObjectCollection();
          points.forEach(function (p) {
            collection.add(new ymaps.Placemark(p.coords, { balloonContent: p.name }));
          });
          map.geoObjects.add(collection);

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
              map.container.fitToViewport();
              fitPoints();
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

</body>

</html>
