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
    <?php include __DIR__ . '/includes/soft-lenses/soft-lenses-1.php'; ?>
    <?php include __DIR__ . '/includes/soft-lenses/soft-lenses-2.php'; ?>
    <?php include __DIR__ . '/includes/soft-lenses/soft-lenses-3.php'; ?>
    <?php include __DIR__ . '/includes/soft-lenses/soft-lenses-4.php'; ?>
    <?php include __DIR__ . '/includes/soft-lenses/soft-lenses-5.php'; ?>
    <?php include __DIR__ . '/includes/soft-lenses/soft-lenses-6.php'; ?>
    <?php include __DIR__ . '/includes/faq-soft-lenses/faq-soft-lenses.php'; ?>
    <?php include __DIR__ . '/includes/reviews-soft-lenses/reviews-soft-lenses.php'; ?>
    <?php include __DIR__ . '/includes/gift/gift.php'; ?>
    <?php include __DIR__ . '/includes/consultation/consultation.php'; ?>

    <?php include __DIR__ . '/includes/viewed-products/viewed-products.php'; ?>
    

    <?php include __DIR__ . '/includes/footer/footer.php'; ?>
    <!-- Ваши скрипты -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/js/main.js"></script>

</body>

</html>