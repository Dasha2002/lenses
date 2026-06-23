<?php
$pageTitle = 'Линзочки';
$pageDescription = 'Сеть салонов оптики';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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
        <div class="mainSeoContainer">
            <div class="headerSeoContainer">
                <div class="content">
                    <h1>Уход за ортокератологическими линзами</h1>
                    <p>Правильный уход за ортокератологическими линзами (ночными линзами) — залог их долговечности, эффективности и безопасности использования. В Линз-Очки мы рекомендуем строго соблюдать правила гигиены и использовать только специальные средства, предназначенные для жестких контактных линз.</p>
                </div>
                <div class="image">
                    <img src="/assets/frame1948754212.png">
                </div>
            </div>

            <section class="seo-text-block">
                <div class="container-ortokeratologiya-pricescontainer">
                    <h2>Основные правила ухода за ортокератологическими линзами</h2>
                    <p>Ежедневный уход за ночными линзами включает несколько обязательных шагов, которые необходимо выполнять каждый вечер после снятия линз и каждое утро перед их установкой:</p>
                </div>
            </section>

            <section class="features">
                <div class="container-ortokeratologiya-prices">
                    <div class="section-title">
                        <h2>Ежедневный уход</h2>
                    </div>
                    <div class="features-grid">
                        <div class="feature-card">
                            <i class="fa-solid fa-star-of-life"></i>
                            <h3>Мытье рук</h3>
                            <p>Перед тем как прикасаться к линзам, тщательно вымойте руки с мылом и высушите их чистым полотенцем без ворса.</p>
                        </div>
                        <div class="feature-card">
                            <i class="fa-solid fa-star-of-life"></i>
                            <h3>Снятие линз</h3>
                            <p>Аккуратно снимите линзы с глаз, используя рекомендуемый специалистом метод.</p>
                        </div>
                        <div class="feature-card">
                            <i class="fa-solid fa-star-of-life"></i>
                            <h3>Очистка линз</h3>
                            <p>Нанесите на ладонь специальный раствор для жестких линз, поместите линзу и аккуратно протрите ее подушечкой пальца circularными движениями в течение 20-30 секунд.</p>
                        </div>
                        <div class="feature-card">
                            <i class="fa-solid fa-star-of-life"></i>
                            <h3>Промывание линз</h3>
                            <p>Тщательно промойте линзы свежим раствором для жестких линз, чтобы удалить остатки загрязнений.</p>
                        </div>
                        <div class="feature-card">
                            <i class="fa-solid fa-star-of-life"></i>
                            <h3>Хранение линз</h3>
                            <p>Поместите очищенные линзы в чистый контейнер, залейте свежим раствором для хранения и плотно закройте крышку.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container-ortokeratologiya-prices">
                    <div class="section-title">
                        <h2>Утренние и вечерние процедуры</h2>
                    </div>
                    <div class="price-info-grid">
                        <div class="price-info">
                            <h3>Утренние процедуры</h3>
                            <ul>
                                <li>Мытье рук перед снятием линз</li>
                                <li>Аккуратное снятие линз с глаз</li>
                                <li>Очистка линз специальным раствором</li>
                                <li>Помещение линз в чистый контейнер со свежим раствором</li>
                            </ul>
                        </div>
                        <div class="price-info">
                            <h3>Вечерние процедуры</h3>
                            <ul>
                                <li>Мытье рук перед надеванием линз</li>
                                <li>Аккуратное извлечение линз из контейнера</li>
                                <li>Промывание линз свежим раствором</li>
                                <li>Установка линз на глаза согласно инструкции</li>
                                <li>Очистка контейнера после использования</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="features">
                <div class="container-ortokeratologiya-prices">
                    <div class="section-title">
                        <h2>Средства для ухода за ортокератологическими линзами</h2>
                    </div>
                    <p class="t-center mb-3">Для правильного ухода за ночными линзами необходимы специальные средства, предназначенные именно для жестких контактных линз:</p>
                    <div class="features-grid">
                        <div class="feature-card p-25" style="text-align: left;">
                            <h3>Растворы для жестких линз</h3>
                            <ul>
                                <li>Многофункциональные растворы — для ежедневной очистки, дезинфекции и хранения</li>
                                <li>Пероксидные растворы — обеспечивают глубокую дезинфекцию линз</li>
                                <li>Солевые растворы — для промывания линз перед установкой на глаза</li>
                            </ul>
                        </div>
                        <div class="feature-card p-25" style="text-align: left;">
                            <h3>Контейнеры для хранения</h3>
                            <ul>
                                <li>Должен быть чистым и сухим</li>
                                <li>Предназначен именно для жестких линз</li>
                                <li>С плотно закрывающейся крышкой</li>
                                <li>Регулярно заменяемым (не реже 1 раза в 3 месяца)</li>
                            </ul>
                        </div>
                        <div class="feature-card p-25" style="text-align: left;">
                            <h3>Дополнительные средства</h3>
                            <ul>
                                <li>Увлажняющие капли — для комфорта при ношении линз</li>
                                <li>Присоска для линз — для удобного снятия линз</li>
                                <li>Салфетки для линз — безворсовые салфетки для протирания линз</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div class="care" id="videoContainer">
                <div class="care_header">
                    <div>
                        <h2>Посмотрите наши видеоинструкции</h2>
                    </div>
                </div>
                <div class="videoContainer">
                </div>
            </div>
            <section class="seo-text-block">
                <div class="container-ortokeratologiya-prices">
                    <h2>Глубокая очистка ортокератологических линз</h2>
                    <p>Помимо ежедневного ухода, ортокератологические линзы требуют периодической глубокой очистки для удаления белковых и липидных отложений, которые не удаляются при ежедневном уходе:</p>

                    <h3>Когда проводить глубокую очистку</h3>
                    <ul>
                        <li>1-2 раза в неделю при регулярном использовании линз</li>
                        <li>При появлении видимых отложений на поверхности линз</li>
                        <li>При ощущении дискомфорта при ношении линз</li>
                        <li>После перерыва в использовании линз</li>
                    </ul>

                    <h3>Как проводить глубокую очистку</h3>
                    <ol style="padding-left: 20px;">
                        <li>Подготовьте рабочее место: вымойте руки, подготовьте все необходимые средства.</li>
                        <li>Снимите линзы и проведите очистку с помощью специального раствора для удаления белковых отложений.</li>
                        <li>Тщательно промойте линзы многофункциональным раствором.</li>
                        <li>Поместите линзы в чистый контейнер со свежим раствором для хранения.</li>
                    </ol>
                </div>
            </section>

            <section>
                <div class="container-ortokeratologiya-prices">
                    <div class="section-title">
                        <h2>Правила хранения ортокератологических линз</h2>
                    </div>
                    <div class="price-info-grid">
                        <div class="price-info">
                            <h3>Ежедневное хранение</h3>
                            <ul>
                                <li>Используйте только специальные растворы для жестких линз</li>
                                <li>Не используйте водопроводную воду для хранения линз</li>
                                <li>Регулярно меняйте раствор в контейнере</li>
                                <li>Храните контейнер в прохладном, защищенном от света месте</li>
                            </ul>
                        </div>
                        <div class="price-info">
                            <h3>Длительное хранение</h3>
                            <p>Если вы не планируете использовать линзы длительное время (более 7 дней):</p>
                            <ul>
                                <li>Тщательно очистите и продезинфицируйте линзы, высушите</li>
                                <li>Храните их в чистом контейнере в сухом виде</li>
                                <li>Перед повторным использованием линз проведите полную очистку и дезинфекцию</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="seo-text-block">
                <div class="container-ortokeratologiya-prices">
                    <h2>Уход за контейнером для хранения</h2>
                    <p>Контейнер для хранения линз требует регулярного ухода:</p>
                    <ul>
                        <li>Ежедневно опустошайте и промывайте контейнер свежим раствором</li>
                        <li>Заменяйте контейнер на новый раз в месяц</li>
                        <li>При появлении видимых загрязнений или налета немедленно замените контейнер</li>
                    </ul>
                </div>
            </section>

            <section class="features">
                <div class="container-ortokeratologiya-prices">
                    <div class="section-title">
                        <h2>Распространенные ошибки в уходе за ортокератологическими линзами</h2>
                    </div>
                    <div class="features-grid">
                        <div class="feature-card p-25" style="text-align: left;">
                            <h3>Ошибки в очистке</h3>
                            <ul>
                                <li>Использование водопроводной воды для промывания линз</li>
                                <li>Использование слюны для очистки линз</li>
                                <li>Неправильная техника очистки (слишком сильное трение)</li>
                                <li>Пропуск этапа очистки при сильной усталости</li>
                            </ul>
                        </div>
                        <div class="feature-card p-25" style="text-align: left;">
                            <h3>Ошибки в хранении</h3>
                            <ul>
                                <li>Хранение линз в старом растворе</li>
                                <li>Использование грязного или поврежденного контейнера</li>
                                <li>Хранение контейнера в ванной (высокая влажность и температура)</li>
                                <li>Использование одного контейнера для разных типов линз</li>
                            </ul>
                        </div>
                        <div class="feature-card p-25" style="text-align: left;">
                            <h3>Ошибки в использовании</h3>
                            <ul>
                                <li>Использование линз после истечения срока их годности</li>
                                <li>Использование линз при наличии видимых повреждений</li>
                                <li>Превышение рекомендованного срока ношения линз</li>
                                <li>Использование линз при наличии признаков воспаления глаз</li>
                                <li>Несвоевременная замена растворов и средств по уходу</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="seo-text-block">
                <div class="container-ortokeratologiya-prices">
                    <h2>Уход за ортокератологическими линзами в особых ситуациях</h2>

                    <h3>Уход во время болезни</h3>
                    <p>При простудных заболеваниях:</p>
                    <ul>
                        <li>Временно прекратите использование линз до полного выздоровления</li>
                        <li>Храните линзы в чистом контейнере со свежим раствором</li>
                        <li>Меняйте раствор каждые 2 дня</li>
                        <li>Перед возобновлением использования проведите полную дезинфекцию линз</li>
                    </ul>

                    <h3>Уход во время путешествий</h3>
                    <p>При поездках соблюдайте следующие правила:</p>
                    <ul>
                        <li>Возьмите с собой все необходимые средства для ухода в дорожной упаковке</li>
                        <li>Используйте специальный дорожный контейнер для линз</li>
                        <li>Не храните линзы в багаже при перелетах (только в ручной клади)</li>
                        <li>При изменении климата используйте увлажняющие капли</li>
                    </ul>
                </div>
            </section>

            <section>
                <div class="container-ortokeratologiya-prices">
                    <div class="section-title">
                        <h2>Часто задаваемые вопросы об уходе за ортокератологическими линзами</h2>
                    </div>
                    <div class="features-grid">
                        <div class="feature-card p-25" style="text-align:left;">
                            <h3>Можно ли использовать водопроводную воду для промывания линз?</h3>
                            <p>Нет, категорически нельзя. Водопроводная вода содержит микроорганизмы, которые могут вызвать инфекционные осложнения. Используйте только специальные растворы для жестких контактных линз.</p>
                        </div>
                        <div class="feature-card p-25" style="text-align:left;">
                            <h3>Как часто нужно менять раствор в контейнере?</h3>
                            <p>Раствор в контейнере нужно менять ежедневно. Если вы не используете линзы, меняйте раствор минимум каждые 2 дня.</p>
                        </div>
                        <div class="feature-card p-25" style="text-align:left;">
                            <h3>Как часто нужно заменять контейнер для хранения линз?</h3>
                            <p>Контейнер для хранения линз нужно заменять каждые 3 месяца или раньше, если на нем появились видимые загрязнения или повреждения.</p>
                        </div>
                        <div class="feature-card p-25" style="text-align:left;">
                            <h3>Что делать, если линза высохла?</h3>
                            <p>Если линза высохла, поместите ее в свежий раствор на 10-20 минут. Не пытайтесь надеть высохшую линзу на глаз. После тщательно промойте и проверьте ее на наличие повреждений.</p>
                        </div>
                        <div class="feature-card p-25" style="text-align:left;">
                            <h3>Можно ли использовать ортокератологические линзы после перерыва в использовании?</h3>
                            <p>Да, но перед использованием необходимо провести полную очистку и дезинфекцию линз. Если перерыв был длительным (более месяца), рекомендуется проконсультироваться со специалистом.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA -->
            <section class="cta">
                <div class="container-ortokeratologiya-prices">
                    <h2>Приобретите средства для ухода за ортокератологическими линзами в Линз-Очки</h2>
                    <p>В салонах Линз-Очки в Санкт-Петербурге вы можете приобрести все необходимые средства для ухода за ортокератологическими линзами. Наши специалисты помогут подобрать оптимальные средства именно для вашего случая и дадут подробные инструкции по их использованию.</p>
                    <a href="#" class="btn openContactForm popap-record-btn">Записаться на консультацию</a>
                </div>
            </section>
        </div>
    </main>




    <?php include __DIR__ . '/includes/footer/footer.php'; ?>
    <!-- Ваши скрипты -->
    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>