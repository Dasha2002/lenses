<?php
$pageTitle = 'Жёсткие контактные линзы в Санкт-Петербурге | Линз-Очки';
$pageDescription = 'Подбор жёстких контактных линз в Санкт-Петербурге: ортокератологические, склеральные и роговичные линзы для коррекции зрения.';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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
                <div class="welcome_lens_contant" style="background-image: url(/assets/scleral_welcome_lens.png);">
                    <div class="welcome_lens_contant_text">
                        <h2>Склеральные линзы: комфорт и решение сложных задач зрения</h2>
                        <h4>Склеральные линзы — это современное достижение в области коррекции зрения, которое становится всё более популярным. Они обеспечивают комфорт, чёткое зрение и подходят для коррекции самых сложных случаев. В этой статье расскажем, что такое склеральные линзы, кому они подойдут, и почему стоит обратить внимание именно на этот вид линз.</h4>
                        <div class="contacts-callback-btn gr-callback-btn">
                            <button class="contacts-callback-btn__link popap-record-btn" data-remodal-target="header-callback-form" href="javascript:void(0);">Запись на приём</button>
                        </div>
                    </div>
                    <div class="welcome_lens_contant_gradient"></div>
                </div>
                <div class="welcome_lens_link">
                    <a href="#what">Что такое склеральные линзы</a>
                    <a href="#whom">Кому подходят</a>
                    <a href="#advantages">Преимущества</a>
                    <a href="#how">Как подобрать</a>
                    <a href="#care">Как ухаживать</a>
                    <a href="#faq">Часто задаваемые вопросы</a>
                </div>
            </div>

            <div class="what">
                <h2>Что такое склеральные линзы?</h2>
                <div class="what_block">
                    <h4>Склеральные линзы — это большие контактные линзы, которые опираются не на роговицу, как стандартные линзы, а на белковую оболочку глаза (склеру). Они создают между роговицей и линзой пространство, которое заполняется увлажняющим раствором. Это обеспечивает максимальный комфорт и защиту роговицы.</h4>
                </div>
            </div>

            <div class="whom">
                <h2>Кому подходят склеральные линзы?</h2>
                <div class="whom_block">
                    <img src="/assets/scleral-into-eye-1-768x510.jpg.optimal.jpg" alt="">
                    <div class="whom_block_text">
                        <p>Склеральные линзы разработаны для коррекции зрения в самых сложных случаях. Они подойдут, если у вас:</p>
                        <ul>
                            <li><b>Кератоконус.</b> Неровная форма роговицы требует стабильной оптики, которую обеспечивают склеральные линзы.
                            </li>
                            <li><b>Оперированная роговица,</b> например, вам выполнили радиальную кератотомию.</li>
                            <li><b>Состояние после пересадки роговицы, кератопластики.</b></li>
                            <li><b>Синдром сухого глаза.</b> Постоянное увлажнение под линзой помогает устранить симптомы сухости.</li>
                            <li><b>Нарушения роговицы.</b> После операций, травм или заболеваний роговицы склеральные линзы становятся незаменимыми.</li>
                            <li><b>Высокая степень астигматизма.</b> Благодаря своему размеру, линзы обеспечивают стабильную посадку и чёткое зрение.</li>
                        </ul>
                        <p>Косметические дефекты. Они могут скрывать внешние повреждения или рубцы роговицы.</p>
                    </div>
                </div>
            </div>

            <div class="advantages_lenses">
                <h2>Преимущества склеральных линз</h2>
                <div class="advantages_lenses_blocks">
                    <div class="advantages_lenses_block">
                        <div class="advantages_lenses_block_ico">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="advantages_lenses_block_text">
                            <span>Максимальный комфорт</span>
                            <p>Линзы не касаются роговицы, устраняя риск её раздражения.</p>
                        </div>
                    </div>
                    <div class="advantages_lenses_block">
                        <div class="advantages_lenses_block_ico">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="advantages_lenses_block_text">
                            <span>Увлажнение глаз</span>
                            <p>Постоянный слой жидкости под линзой снимает ощущение сухости и защищает роговицу.</p>
                        </div>
                    </div>
                    <div class="advantages_lenses_block">
                        <div class="advantages_lenses_block_ico">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="advantages_lenses_block_text">
                            <span>Коррекция сложных нарушений</span>
                            <p>Эти линзы подходят даже для самых нестандартных случаев, где другие методы коррекции бессильны.</p>
                        </div>
                    </div>
                    <div class="advantages_lenses_block">
                        <div class="advantages_lenses_block_ico">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="advantages_lenses_block_text">
                            <span>Долговечность</span>
                            <p>Склеральные линзы изготавливаются из материалов, обеспечивающих длительное использование при правильном уходе.</p>
                        </div>
                    </div>
                    <div class="advantages_lenses_block">
                        <div class="advantages_lenses_block_ico">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="advantages_lenses_block_text">
                            <span>Индивидуальное изготовление</span>
                            <p>Каждая пара создаётся с учётом уникальной формы вашего глаза.</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="how">
                <h2>Как подобрать склеральные линзы?</h2>
                <div class="how_block">
                    <div class="how_block_text">
                        <p>Подбор склеральных линз требует высокой квалификации специалиста и специального оборудования. В салонах Линз-Очки мы предлагаем:</p>
                        <ul>
                            <li><b>Полную диагностику.</b> С использованием современного оборудования для определения параметров роговицы и склеры.</li>
                            <li><b>Индивидуальное проектирование.</b> Линзы разрабатываются под ваши особенности.</li>
                            <li><b>Обучение уходу.</b> Мы покажем, как правильно надевать, снимать и ухаживать за линзами.</li>
                            <li><b>Контрольные осмотры.</b> Регулярное наблюдение позволяет убедиться, что линзы обеспечивают оптимальное зрение и комфорт.</li>
                        </ul>
                    </div>
                    <img src="includes/ortho-lens/assets/cabinet.png" alt="">
                </div>
            </div>


            <div class="care">
                <div class="care_header">
                    <div>
                        <h2>Как ухаживать за склеральными линзами?</h2>
                        <h4>Правильный уход за линзами — это залог их долговечности и здоровья ваших глаз:</h4>
                    </div>
                    <a href="#videoContainer" class="care_header_btn">
                        <div class="icon"><img src="includes/ortho-lens/assets/play.svg" alt=""></div>
                        <div class="care_header_btn_text">
                            <h4>Посмотрите видео</h4>
                            <p>как ухaживать и надевать линзы</p>
                        </div>
                    </a>
                </div>
                <div class="care_blocks">
                    <div class="care_block">
                        <div class="care_block_num">1</div>
                        <div class="care_block_text">
                            <h4 style="font-weight: 400; margin: 0;">Очищайте линзы ежедневно специальными растворами.</h4>
                        </div>
                    </div>
                    <div class="care_block">
                        <div class="care_block_num">2</div>
                        <div class="care_block_text">
                            <h4 style="font-weight: 400; margin: 0;">Храните в контейнере с дезинфицирующей жидкостью.</h4>
                        </div>
                    </div>
                    <div class="care_block">
                        <div class="care_block_num">3</div>
                        <div class="care_block_text">
                            <h4 style="font-weight: 400; margin: 0;">Мойте руки перед использованием линз.</h4>
                        </div>
                    </div>
                    <div class="care_block">
                        <div class="care_block_num">4</div>
                        <div class="care_block_text">
                            <h4 style="font-weight: 400; margin: 0;">Регулярно посещайте офтальмолога для проверки состояния глаз.</h4>
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
        (function() {
            function initMap() {
                // координаты салонов
                var points = [{
                        coords: [60.039719, 30.326176],
                        name: 'Центр коррекции зрения Линз-Очки "Озерки"'
                    },
                    {
                        coords: [60.014577, 30.393288],
                        name: 'Салон оптики "Академический"'
                    },
                    {
                        coords: [59.904980, 30.473811],
                        name: 'Салон оптики "Дыбенко"'
                    }
                ];

                var map = new ymaps.Map('map', {
                    center: [59.9386, 30.3141], // центр (Санкт-Петербург)
                    zoom: 7,
                    controls: ['zoomControl'],
                }, {
                    suppressMapOpenBlock: true
                });

                map.behaviors.disable('scrollZoom');

                var collection = new ymaps.GeoObjectCollection();
                points.forEach(function(p) {
                    collection.add(new ymaps.Placemark(p.coords, {
                        balloonContent: p.name
                    }));
                });
                map.geoObjects.add(collection);

                function fitPoints() {
                    if (points.length > 1) {
                        map.setBounds(collection.getBounds(), {
                            checkZoomRange: true,
                            zoomMargin: 40
                        });
                    }
                }
                fitPoints();

                // подгонять карту под контейнер при изменении размера окна
                var resizeTimer;
                window.addEventListener('resize', function() {
                    clearTimeout(resizeTimer);
                    resizeTimer = setTimeout(function() {
                        map.container.fitToViewport();
                        fitPoints();
                    }, 200);
                });
            }

            if (window.ymaps && ymaps.ready) {
                ymaps.ready(initMap);
            } else {
                document.addEventListener('DOMContentLoaded', function() {
                    if (window.ymaps) ymaps.ready(initMap);
                });
            }
        })();
    </script>
</body>

</html>