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
    <?php include __DIR__ . '/includes/rogovichnye-1/rogovichnye.php'; ?>
    <?php include __DIR__ . '/includes/rogovichnye-2/rogovichnye-2.php'; ?>
    <?php include __DIR__ . '/includes/rogovichnye-3/rogovichnye-3.php'; ?>
    <?php include __DIR__ . '/includes/rogovichnye-4/rogovichnye-4.php'; ?>
    <?php include __DIR__ . '/includes/rogovichnye-5/rogovichnye-5.php'; ?>
    <?php include __DIR__ . '/includes/rogovichnye-6/rogovichnye-6.php'; ?>
    <?php include __DIR__ . '/includes/rogovichnye-7/rogovichnye-7.php'; ?>
    <?php include __DIR__ . '/includes/rogovichnye-8/rogovichnye-8.php'; ?>
    <?php include __DIR__ . '/includes/rogovichnye-9/rogovichnye-9.php'; ?>


    <?php include __DIR__ . '/includes/footer/footer.php'; ?>
    <!-- Ваши скрипты -->
    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>