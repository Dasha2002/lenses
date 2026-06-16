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

    <!-- Ваши стили -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <?php include __DIR__ . '/includes/popap-record/popap-record.php'; ?>
    <?php include __DIR__ . '/includes/popup-overlay/popup-overlay.php'; ?>
    <?php include __DIR__ . '/includes/popap-filter/popap-filter.php'; ?>
    <?php include __DIR__ . '/includes/catalog/catalog.php'; ?>
    <?php include __DIR__ . '/includes/header/header.php'; ?>

    <?php include __DIR__ . '/includes/service_main/service_main.php'; ?>
    <?php include __DIR__ . '/includes/main/main.php'; ?>
    <?php include __DIR__ . '/includes/category/category.php'; ?>
    <?php include __DIR__ . '/includes/news/news.php'; ?>
    <?php include __DIR__ . '/includes/about/about.php'; ?>
    <?php include __DIR__ . '/includes/thanks/thanks.php'; ?>
    <?php include __DIR__ . '/includes/how-work/how-work.php'; ?>
    <?php include __DIR__ . '/includes/social-stories/social-stories.php'; ?>
    <?php include __DIR__ . '/includes/reviews/reviews.php'; ?>
    <?php include __DIR__ . '/includes/mailing/mailing.php'; ?>

    <?php include __DIR__ . '/includes/footer/footer.php'; ?>
    <!-- Ваши скрипты -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/js/main.js"></script>

</body>

</html>