<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education LMS and Online course template">

    <!-- Site Title -->
    <title>Dura Setu</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/edunex-icons.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/venobox.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">
</head>

<body>
    <div class="body-overlay"></div>

    <!-- Preloader Start -->
    <!-- <div class="preloader is-loading">
    <div class="loading-container">
      <div class="loading"></div>
      <div id="loading-icon"><img src="assets/images/logos/logo-icon.png" alt="Loading"></div>
    </div>
  </div> -->
    <!-- Preloader End -->

    <!-- Back to top -->
    <div class="back-to-top-wrapper">
        <button id="back-to-top" type="button" class="back-to-top-btn">
            <span class="back-to-top-icon"><i class="ti-arrow-up-2"></i></span>
        </button>
    </div>

    <!-- start: Hamburger Menu -->
    <div class="hamburger-area">
        <div class="hamburger_bg"></div>
        <div class="hamburger_wrapper">
            <div class="hamburger_inner">
                <div class="hamburger_top d-flex align-items-center justify-content-between">
                    <div class="hamburger_logo">
                        <a href="index.html" class="mobile_logo">
                            <img src="assets/images/logos/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="hamburger_close">
                        <button class="hamburger_close_btn">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="hamburger-text d-none d-lg-block">
                    <p>Developing personalize our customer journeys to increase satisfaction &amp; loyalty of our expansion
                        recognized
                        by industry leaders.</p>
                </div>
                <div class="hamburger-search-area">
                    <h5 class="hamburger-title">Search now</h5>
                    <div class="hamburger_search">
                        <form method="get" action="index.html">
                            <button type="submit"><i class="ti-search"></i></button>
                            <input type="search" autocomplete="off" name="s" value="" placeholder="Search here...">
                        </form>
                    </div>
                </div>
                <div class="hamburger_menu">
                    <div class="mobile_menu"></div>
                </div>
                <div class="hamburger-infos">
                    <h5 class="hamburger-title">Contact info</h5>
                    <div class="contact-info">
                        <div class="contact-item">
                            <span class="subtitle">Phone:</span>
                            <a class="contact-link" href="tel:+1(009)544-7818">+1 (009) 544-7818</a>
                        </div>
                        <div class="contact-item">
                            <span class="subtitle">Email:</span>
                            <a class="contact-link" href="mailto:support@edunex.com">support@edunex.com</a>
                        </div>
                        <div class="contact-item">
                            <span class="subtitle">Location:</span>
                            <span class="contact-link">189 Congress, Suite 300 TX 78701, USA</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hamburger-socials">
                <h5 class="hamburger-title">Follow us</h5>
                <div class="social-links">
                    <ul class="tj-socials">
                        <li>
                            <a href="https://facebook.com" target="_blank"><i class="ti-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://instagram.com" target="_blank"><i class="ti-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://x.com" target="_blank"><i class="ti-x-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://linkedin.com/" target="_blank"><i class="ti-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end: Hamburger Menu -->

    <?php require_once("include/header.php"); ?>

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main id="primary" class="site-main">
                <div class="space-for-header"></div>
                <?= $content ?? ''; ?>
            </main>
            <?php require_once("include/footer.php"); ?>

        </div>
    </div>


    <!-- JS here -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/gsap-scroll-smoother.js"></script>
    <script src="assets/js/gsap-scroll-to-plugin.min.js"></script>
    <script src="assets/js/gsap-scroll-trigger.min.js"></script>
    <script src="assets/js/gsap-split-text.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/venobox.min.js"></script>
    <script src="assets/js/gsap-animation.js"></script>
    <script src="assets/js/meanmenu.js"></script>
    <script src="assets/js/imagesloaded-pkgd.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>