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
        <div class="mainSeoContainer">

            <div class="headerSeoContainer">
                <div class="content">
                    <h1>Жёсткие контактные линзы в Санкт-Петербурге</h1>
                    <p>Современное решение для коррекции зрения при сложных аномалиях рефракции. Индивидуальный подбор жёстких газопроницаемых линз с использованием современного оборудования.</p>
                    <a href="#" class="headerSeoBtn popap-record-btn">Записаться на консультацию</a>
                </div>
                <div class="image">
                    <img src="includes/zkl/assets/hero_image.png" alt="Жёсткие контактные линзы">
                </div>
            </div>

            <!-- Цены -->
            <section>
                <div class="container">
                    <div class="section-title">
                        <h2>Цены и сроки изготовления</h2>
                    </div>
                    <p class="t-center">Все жёсткие контактные линзы изготавливаются индивидуально для каждого пациента. Срок изготовления — 14 рабочих дней.</p>

                    <div class="price-info-grid">
                        <div class="price-info">
                            <h3>Склеральные линзы</h3>
                            <p>Цена:</p>
                            <div class="lensPrice">от 19 999 до 35 599 руб.</div>
                            <p class="lensDescr">Стоимость зависит от сложности дизайна и материала.</p>
                        </div>
                        <div class="price-info">
                            <h3>Ортокератологические (ночные) линзы</h3>
                            <p>Цена:</p>
                            <div class="lensPrice">от 17 999 до 39 999 руб.</div>
                            <p class="lensDescr">Стоимость зависит от сложности дизайна и материала.</p>
                        </div>
                        <div class="price-info">
                            <h3>Роговичные линзы</h3>
                            <p>Цена:</p>
                            <div class="lensPrice">от 14 999 до 29 999 руб.</div>
                            <p class="lensDescr">Стоимость зависит от сложности дизайна и материала.</p>
                        </div>
                        <div class="price-info">
                            <h3>Индивидуальные мягкие контактные линзы</h3>
                            <p>Цена:</p>
                            <div class="lensPrice">от 3 799 до 7 100 руб.</div>
                            <p class="lensDescr">Стоимость зависит от сложности дизайна и материала.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Виды линз -->
            <section>
                <div class="container">
                    <div class="section-title">
                        <h2>Виды жёстких контактных линз</h2>
                    </div>

                    <div class="lens-types">
                        <!-- Ортокератологические линзы -->
                        <div class="lens-card">
                            <div class="lens-img">
                                <a href="/ortokeratologiya-nochnye-linzy"><img src="includes/zkl/assets/types_1.png" alt="Ортокератологические линзы"></a>
                            </div>
                            <div class="lens-content">
                                <a href="/ortokeratologiya-nochnye-linzy"><h3>Ортокератологические (ночные) линзы</h3></a>
                                <p>Инновационный метод коррекции зрения: носите линзы ночью — видите чётко днём без очков.</p>

                                <h4>Показания:</h4>
                                <ul>
                                    <li>Близорукость (миопия)</li>
                                    <li>Астигматизм</li>
                                    <li>Дальнозоркость (гиперметропия)</li>
                                    <li>Прогрессирующая миопия у детей</li>
                                </ul>

                                <h4>Преимущества:</h4>
                                <ul>
                                    <li>Чёткое зрение без линз днём</li>
                                    <li>Безопасность и комфорт</li>
                                    <li>Замедление прогрессии близорукости</li>
                                </ul>

                                <div class="lens-links">
                                    <a href="/ortokeratologiya-nochnye-linzy">Подробнее</a>
                                    <a href="/zkl/ortokeratologiya-nochnye-linzy/ceny-na-ortokeratologicheskie-linzy-v-sankt-peterburge-linz-ochki">Цены</a>
                                    <a href="/zkl/ortokeratologiya-nochnye-linzy/process-podbora-ortokeratologicheskih-linz-v-sankt-peterburge-linz-ochki">Процесс подбора</a>
                                    <a href="/zkl/ortokeratologiya-nochnye-linzy/ortokeratologicheskie-linzy-dlya-detej-v-sankt-peterburge">Для детей</a>
                                    <a href="/zkl/ortokeratologiya-nochnye-linzy/uhod-za-ortokeratologicheskimi-linzami-linz-ochki">Уход</a>
                                    <a href="/zkl/ortokeratologiya-nochnye-linzy/protivopokazaniya-i-oslozhneniya-ortokeratologicheskih-linz-linz-ochki">Противопоказания</a>
                                </div>
                            </div>
                        </div>

                        <!-- Склеральные линзы -->
                        <div class="lens-card">
                            <div class="lens-img">
                                <a href="/skleralnye-linzy"><img src="includes/zkl/assets/types_2.png" alt="Склеральные линзы"></a>
                            </div>
                            <div class="lens-content">
                                <a href="/skleralnye-linzy"><h3>Склеральные линзы</h3></a>
                                <p>Большие линзы, опирающиеся на склеру, создающие защитное увлажняющее пространство для роговицы.</p>

                                <h4>Показания:</h4>
                                <ul>
                                    <li>Кератоконус</li>
                                    <li>Оперированная роговица</li>
                                    <li>Состояние после пересадки роговицы</li>
                                    <li>Синдром сухого глаза</li>
                                    <li>Высокая степень астигматизма</li>
                                </ul>

                                <h4>Преимущества:</h4>
                                <ul>
                                    <li>Максимальный комфорт</li>
                                    <li>Постоянное увлажнение глаз</li>
                                    <li>Коррекция сложных нарушений</li>
                                </ul>

                                <div class="lens-links">
                                    <a href="/skleralnye-linzy">Подробнее</a>
                                    <a href="/zkl/skleralnye-linzy/ceny-na-skleralnye-linzy-v-sankt-peterburge-linz-ochki">Цены</a>
                                    <a href="/zkl/skleralnye-linzy/process-podbora-skleralnyh-linz-v-sankt-peterburge-linz-ochki">Процесс подбора</a>
                                    <a href="/zkl/skleralnye-linzy/skleralnye-linzy-pri-keratokonuse-v-sankt-peterburge-linz-ochki">При кератоконусе</a>
                                    <a href="/zkl/skleralnye-linzy/skleralnye-linzy-pri-sindrome-suhogo-glaza-v-sankt-peterburge-linz-ochki">При сухом глазе</a>
                                    <a href="/zkl/skleralnye-linzy/uhod-za-skleralnymi-linzami-linz-ochki">Уход</a>
                                </div>
                            </div>
                        </div>

                        <!-- Роговичные линзы -->
                        <div class="lens-card">
                            <div class="lens-img">
                                <a href="/rogovichnye-page.php"><img src="includes/zkl/assets/types_3.png" alt="Роговичные линзы"></a>
                            </div>
                            <div class="lens-content">
                                <a href="/rogovichnye-page.php"><h3>Роговичные дневные линзы</h3></a>
                                <p>Классические жёсткие газопроницаемые линзы для дневного ношения с высокой кислородопроницаемостью.</p>

                                <h4>Показания:</h4>
                                <ul>
                                    <li>Сложные аномалии рефракции</li>
                                    <li>Астигматизм высокой степени</li>
                                    <li>Кератоконус</li>
                                    <li>Непереносимость мягких линз</li>
                                </ul>

                                <h4>Преимущества:</h4>
                                <ul>
                                    <li>Высокая кислородопроницаемость</li>
                                    <li>Стабильная коррекция зрения</li>
                                    <li>Долговечность</li>
                                </ul>

                                <div class="lens-links">
                                    <a href="/rogovichnye-linzy">Подробнее</a>
                                    <a href="/zkl/rogovichnye-linzy/ceny-na-rogovichnye-linzy-v-sankt-peterburge-linz-ochki">Цены</a>
                                    <a href="/zkl/rogovichnye-linzy/process-podbora-rogovichnyh-linz-v-sankt-peterburge-linz-ochki">Процесс подбора</a>
                                    <a href="/zkl/rogovichnye-linzy/rogovichnye-linzy-pri-astigmatizme-v-sankt-peterburge-linz-ochki">При астигматизме</a>
                                    <a href="/zkl/rogovichnye-linzy/uhod-za-rogovichnymi-linzami-linz-ochki">Уход</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Преимущества -->
            <section class="features">
                <div class="container">
                    <div class="section-title">
                        <h2>Преимущества жёстких контактных линз</h2>
                    </div>
                    <div class="features-grid">
                        <div class="feature-card">
                            <i class="fas fa-user-check"></i>
                            <h3>Индивидуальное изготовление</h3>
                            <p>Все линзы производятся по персональным параметрам ваших глаз для максимального комфорта и эффективности.</p>
                        </div>
                        <div class="feature-card">
                            <i class="fas fa-wind"></i>
                            <h3>Высокая кислородопроницаемость</h3>
                            <p>Специальные материалы обеспечивают доступ кислорода к роговице, поддерживая здоровье глаз.</p>
                        </div>
                        <div class="feature-card">
                            <i class="fas fa-eye"></i>
                            <h3>Коррекция сложных нарушений</h3>
                            <p>Эффективны при кератоконусе, высоких степенях астигматизма и других сложных случаях.</p>
                        </div>
                        <div class="feature-card">
                            <i class="fas fa-shield-alt"></i>
                            <h3>Долговечность и стабильность</h3>
                            <p>Жёсткие линзы служат дольше мягких и обеспечивают стабильную коррекцию зрения.</p>
                        </div>
                        <div class="feature-card">
                            <i class="fas fa-child"></i>
                            <h3>Для детей и подростков</h3>
                            <p>Замедляют прогрессию близорукости у детей, что особенно важно в период активного роста.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Аксессуары -->
            <section class="features">
                <div class="container">
                    <div class="section-title">
                        <h2>Аксессуары для жёстких контактных линз</h2>
                    </div>
                    <p class="t-center mb-3">Для правильного ухода и хранения жёстких контактных линз необходимы специальные аксессуары. В Линз-Очки вы найдёте всё необходимое для комфортного использования ваших линз.</p>

                    <div class="features-grid">
                        <div class="feature-card">
                            <i class="fas fa-tint"></i>
                            <h3>Растворы для жёстких линз</h3>
                            <p>Специальные растворы для очистки, дезинфекции и хранения жёстких контактных линз.</p>
                        </div>
                        <div class="feature-card">
                            <i class="fas fa-archive"></i>
                            <h3>Контейнеры для хранения</h3>
                            <p>Удобные и безопасные контейнеры для хранения жёстких линз в перерывах между ношением.</p>
                        </div>
                        <div class="feature-card">
                            <i class="fas fa-eye-dropper"></i>
                            <h3>Увлажняющие капли</h3>
                            <p>Специальные капли для увлажнения глаз при использовании жёстких контактных линз.</p>
                        </div>
                        <div class="feature-card">
                            <i class="fas fa-box"></i>
                            <h3>Наборы для ухода</h3>
                            <p>Комплекты аксессуаров, включающие всё необходимое для полноценного ухода за линзами.</p>
                        </div>
                    </div>

                    <div style="text-align: center; margin-top: 30px;">
                        <a href="/magazin/folder/aksessuary-dlya-kontaktnyh-linz" class="btn">Все аксессуары для жёстких линз</a>
                    </div>
                </div>
            </section>

            <!-- Процесс -->
            <section class="process">
                <div class="container">
                    <div class="section-title">
                        <h2>Как проходит подбор жёстких контактных линз</h2>
                    </div>
                    <p class="t-center mb-3">Подбор жёстких контактных линз в Линз-Очки — это комплексный процесс, который занимает от 1 до 2 часов и включает:</p>

                    <div class="process-steps">
                        <div class="step">
                            <div class="step-number">1</div>
                            <h3>Диагностика состояния глаз</h3>
                            <p>С использованием высокоточного оборудования для определения параметров глаз.</p>
                        </div>
                        <div class="step">
                            <div class="step-number">2</div>
                            <h3>Подбор линз</h3>
                            <p>Оценка посадки и эффективности коррекции с помощью пробных линз.</p>
                        </div>
                        <div class="step">
                            <div class="step-number">3</div>
                            <h3>Обучение использованию</h3>
                            <p>Наши специалисты покажут, как правильно надевать, снимать и ухаживать за линзами.</p>
                        </div>
                        <div class="step">
                            <div class="step-number">4</div>
                            <h3>Контрольные осмотры</h3>
                            <p>Регулярные проверки для поддержания здоровья глаз и эффективности коррекции.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA -->
            <section class="cta">
                <div class="container">
                    <h2>Запишитесь на консультацию в Санкт-Петербурге</h2>
                    <p>Опытные специалисты Линз-Очки помогут подобрать жёсткие контактные линзы для самых сложных случаев. Мы используем современное оборудование для точной диагностики и индивидуального подхода к каждому пациенту.</p>
                    <a href="#" class="btn popap-record-btn">Записаться на приём</a>
                </div>
            </section>
        </div>

        <!-- <?php include __DIR__ . '/includes/reviews/reviews.php'; ?> -->
        <?php include __DIR__ . '/includes/viewed-products/viewed-products.php'; ?>
    </main>

    <?php include __DIR__ . '/includes/footer/footer.php'; ?>

    <!-- Ваши скрипты -->
    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>
