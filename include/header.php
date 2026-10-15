<?php
$currentPage = basename($_SERVER['PHP_SELF']);

$universityPages = [
    'manipal-university-jaipur.php',
    'nmims-online.php',
    'ignou-online.php',
    'jain-university-online.php',
    'lpu-online.php',
    'vit-online.php',
    'uttaranchal-university-online.php',
    'sikkim-manipal-online.php',
    'sharda-university-online.php'
];

$coursePages = [
    'courses.php',
    'online-mba.php',
    'online-mca.php',
    'online-mcom.php',
    'online-bba.php',
    'online-bca.php',
    'online-bcom.php'
];
?>

<!-- Start Header -->
<header class="cs_site_header cs_style_1 cs_sticky_header">
    <div class="cs_main_header">
        <div class="container">
            <div class="cs_main_header_in">

                <div class="cs_main_header_left">
                    <a class="cs_site_branding" href="index.php" aria-label="Home page">
                        <img src="assets/img/logo/logo.png" alt="Logo">
                    </a>
                </div>

                <div class="cs_main_header_right">

                    <nav class="cs_nav">

                        <div class="cs_nav_list_wrapper">

                            <div class="cs_nav_list_header">
                                <a class="cs_site_branding" href="index.php" aria-label="Home page">
                                    <img src="assets/img/logo/logo.png" alt="Logo">
                                </a>

                                <button type="button"
                                    class="cs_close_nav"
                                    aria-label="Close menu">
                                </button>
                            </div>

                            <ul class="cs_nav_list cs_mp_0">

                                <!-- Home -->
                                <li>
                                    <a href="index.php"
                                        class="<?= $currentPage == 'index.php' ? 'active' : ''; ?>">
                                        Home
                                    </a>
                                </li>
                                <!-- About Us -->
                                <li>
                                    <a href="about.php"
                                        class="<?= $currentPage == 'about.php' ? 'active' : ''; ?>">
                                        About Us
                                    </a>
                                </li>
                                <!-- Top Universities -->
                                <li class="menu-item-has-children">
                                    <a href="courses.php"
                                        class="<?= in_array($currentPage, $universityPages) ? 'active' : ''; ?>">
                                        Top Universities
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="manipal-university-jaipur.php"
                                                class="<?= $currentPage == 'manipal-university-jaipur.php' ? 'active' : ''; ?>">
                                                Manipal University Jaipur Online
                                            </a>
                                        </li>
                                        <li>
                                            <a href="nmims-online.php"
                                                class="<?= $currentPage == 'nmims-online.php' ? 'active' : ''; ?>">
                                                NMIMS Online University
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ignou-online.php"
                                                class="<?= $currentPage == 'ignou-online.php' ? 'active' : ''; ?>">
                                                IGNOU Online University
                                            </a>
                                        </li>
                                        <li>
                                            <a href="jain-university-online.php"
                                                class="<?= $currentPage == 'jain-university-online.php' ? 'active' : ''; ?>">
                                                Jain University Online
                                            </a>
                                        </li>
                                        <li>
                                            <a href="lpu-online.php"
                                                class="<?= $currentPage == 'lpu-online.php' ? 'active' : ''; ?>">
                                                Online Lovely Professional University
                                            </a>
                                        </li>
                                        <li>
                                            <a href="vit-online.php"
                                                class="<?= $currentPage == 'vit-online.php' ? 'active' : ''; ?>">
                                                VIT Online University
                                            </a>
                                        </li>
                                        <li>
                                            <a href="uttaranchal-university-online.php"
                                                class="<?= $currentPage == 'uttaranchal-university-online.php' ? 'active' : ''; ?>">
                                                Uttaranchal University Online
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sikkim-manipal-online.php"
                                                class="<?= $currentPage == 'sikkim-manipal-online.php' ? 'active' : ''; ?>">
                                                Sikkim Manipal University Online
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sharda-university-online.php"
                                                class="<?= $currentPage == 'sharda-university-online.php' ? 'active' : ''; ?>">
                                                Sharda University Online
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Courses -->
                                <li class="menu-item-has-children">
                                    <a href="courses.php"
                                        class="<?= in_array($currentPage, $coursePages) ? 'active' : ''; ?>">
                                        Courses
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="online-mba.php"
                                                class="<?= $currentPage == 'online-mba.php' ? 'active' : ''; ?>">
                                                Online MBA
                                            </a>
                                        </li>
                                        <li>
                                            <a href="online-mca.php"
                                                class="<?= $currentPage == 'online-mca.php' ? 'active' : ''; ?>">
                                                Online MCA
                                            </a>
                                        </li>
                                        <li>
                                            <a href="online-mcom.php"
                                                class="<?= $currentPage == 'online-mcom.php' ? 'active' : ''; ?>">
                                                Online M.Com
                                            </a>
                                        </li>
                                        <li>
                                            <a href="online-bba.php"
                                                class="<?= $currentPage == 'online-bba.php' ? 'active' : ''; ?>">
                                                Online BBA
                                            </a>
                                        </li>
                                        <li>
                                            <a href="online-bca.php"
                                                class="<?= $currentPage == 'online-bca.php' ? 'active' : ''; ?>">
                                                Online BCA
                                            </a>
                                        </li>
                                        <li>
                                            <a href="online-bcom.php"
                                                class="<?= $currentPage == 'online-bcom.php' ? 'active' : ''; ?>">
                                                Online B.Com
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- Scholarships -->
                                <!--
                                <li>
                                    <a href="scholarships.php">
                                        Scholarships
                                    </a>
                                </li>
                                -->

                                <!-- Blogs -->
                                <li>
                                    <a href="blogs.php"
                                        class="<?= $currentPage == 'blogs.php' ? 'active' : ''; ?>">
                                        Blogs
                                    </a>
                                </li>
                                <!-- Contact -->
                                <li>
                                    <a href="contact.php"
                                        class="<?= $currentPage == 'contact.php' ? 'active' : ''; ?>">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="cs_sidenav_overlay"></div>
                    </nav>


                    <!-- Header Actions -->
                    <div class="cs_header_actions">
                        <a href="contact.php"
                            class="cs_primary_btn cs_login_btn">
                            <span class="cs_login_text">
                                Apply Now
                            </span>
                            <span class="cs_user_icon">
                                <i class="ri-arrow-right-line"></i>
                            </span>
                        </a>
                        <a href="#"
                            class="cs_header_icon_btn cs_cart_btn"
                            aria-label="Contact">

                            <i class="ri-headphone-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->