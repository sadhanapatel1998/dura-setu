<?php include('seo.php'); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />

    <title><?php echo $pageMeta['title']; ?></title>
    <meta name="description" content="<?php echo $pageMeta['description']; ?>">
    <meta name="keywords" content="<?php echo $pageMeta['keywords']; ?>">
    <meta name="robots" content="<?php echo $pageMeta['robots']; ?>">

    <title>Jexi - Online Coaching & Education Training HTML Template</title>


    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css" type="text/css" media="all" />
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css" media="all" />
    <!-- swiper css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" type="text/css" media="all" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all" />
    <!-- magnific popup css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" type="text/css" media="all" />
    <!-- fullcalender css -->
    <link rel="stylesheet" href="assets/css/main.min.css" type="text/css" media="all" />
    <!-- boxicons css -->
    <link rel='stylesheet' href='assets/css/boxicons.min.css' type="text/css" media="all" />
    <!-- flaticon css -->
    <link rel='stylesheet' href='assets/css/flaticon.css' type="text/css" media="all" />
    <!-- revolution slider css -->
    <link rel='stylesheet' href='assets/css/settings.css' type="text/css" media="all" />
    <link rel='stylesheet' href='assets/css/layers.css' type="text/css" media="all" />
    <link rel='stylesheet' href='assets/css/navigation.css' type="text/css" media="all" />
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all" />
    <!-- theme dark css -->
    <link rel="stylesheet" href="assets/css/theme-dark.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>

<body>
    <!-- preloader -->
    <!-- <div class="preloader bg-blue">
        <div class="preloader-wrapper">
            <div class="loader-content book">
                <figure class="page"></figure>
                <figure class="page"></figure>
                <figure class="page"></figure>
            </div>
            <h3>Loading</h3>
        </div>
    </div> -->
    <!-- .end preloader -->

    <?php require_once("include/header.php"); ?>
    <?= $content ?? ''; ?>
    <?php require_once("include/footer.php"); ?>


    <!-- scroll-top -->
    <div class="scroll-top scroll-top-secondcolor" id="scrolltop">
        <div class="scroll-top-inner">
            <span><i class="flaticon-up-arrow"></i></span>
        </div>
    </div>
    <!-- .end scroll-top -->


    <div class="floating-icons">

        <!-- Call Button -->
        <a href="tel:+919310103871" class="float-call">
            <i class="bi bi-telephone-fill"></i>
        </a>

        <!-- WhatsApp Button -->
        <a href="https://wa.me/919310103871" target="_blank" class="float-whatsapp">
            <i class="bi bi-whatsapp"></i>
        </a>

    </div>

    <!-- essential js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- magnific popup js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- swiper js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- counter js -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- fullcalender js -->
    <script src="assets/js/moment.js"></script>
    <script src="assets/js/main.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <!-- isotope js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- revolution slider js -->
    <script src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/jquery.themepunch.tools.min.js"></script>
    <!-- slider revolution extension scripts. only needed for local testing -->
    <script src="assets/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/js/extensions/revolution.extension.video.min.js"></script>
    <!-- form ajazchimp js -->
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- form validator js  -->
    <script src="assets/js/form-validator.min.js"></script>
    <!-- contact form js -->
    <script src="assets/js/contact-form-script.js"></script>
    <!-- meanmenu js -->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!-- main js -->
    <script src="assets/js/script.js"></script>
</body>

</html>