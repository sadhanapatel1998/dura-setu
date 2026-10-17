<?php include('seo.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

    <title><?= htmlspecialchars($pageMeta['title']) ?></title>

    <meta name="description"
        content="<?= htmlspecialchars($pageMeta['description']) ?>">

    <meta name="keywords"
        content="<?= htmlspecialchars($pageMeta['keywords']) ?>">

    <meta name="robots"
        content="<?= htmlspecialchars($pageMeta['robots']) ?>">

    <?php if (!empty($pageMeta['canonical'])): ?>
        <link rel="canonical"
            href="<?= htmlspecialchars($pageMeta['canonical']) ?>">
    <?php endif; ?>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/remixicon.min.css">
    <link rel="stylesheet" href="assets/css/lightgallery.min.css">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/style.css?v=<?= file_exists(__DIR__ . '/assets/css/style.css') ? filemtime(__DIR__ . '/assets/css/style.css') : '1.0'; ?>">

    <link
        href="https://db.onlinewebfonts.com/c/bf7f60c66ad9f354c959a42e7e80b139?family=BreveNews-SemiBold"
        rel="stylesheet">
</head>

<body>
    <!-- Start Preloader -->
    <!-- <div class="cs_preloader" aria-hidden="true">
        <div class="cs_preloader_in">
            <div class="cs_preloader_spinner">
                <img src="assets/img/favicon.png" alt="Lerntix">
            </div>
            <span class="cs_preloader_text cs_fs_14 cs_medium">Loading...</span>
        </div>
    </div> -->
    <!-- End Preloader -->

    <?php require_once("include/header.php"); ?>
    <?= $content ?? ''; ?>
    <?php require_once("include/footer.php"); ?>

    <!-- Start Scroll Up -->
    <button type="button" class="cs_scrollup_btn" aria-label="Scroll to top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!-- End Scroll Up -->
    <script defer src="assets/js/jquery.min.js"></script>
    <script defer src="assets/js/swiper.min.js"></script>
    <script defer src="assets/js/nice-select.min.js"></script>
    <script defer src="assets/js/odometer.min.js"></script>
    <script defer src="assets/js/lightgallery.min.js"></script>
    <script defer src="assets/js/aos.min.js"></script>
    <script defer src="assets/js/main.js"></script>
</body>


<!-- Mirrored from lerntix-html.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Oct 2026 06:07:59 GMT -->

</html>