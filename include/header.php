<?php
require_once __DIR__ . '/data-loader.php';
$currentPage = basename($_SERVER['PHP_SELF']);

$allUnis = dura_get_all_universities();
$universityPages = array_merge(['universities.php', 'compare.php'], array_map(function($u) { return $u['slug']; }, $allUnis));

$allCourses = dura_get_all_courses();
$coursePages = array_merge(['courses.php'], array_filter(array_map(function($c) { return (!empty($c['url']) && $c['url'] !== '#') ? $c['url'] : null; }, $allCourses)));
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
                                <li>
                                    <a href="universities.php"
                                        class="<?= in_array($currentPage, $universityPages) ? 'active' : ''; ?>">
                                        Top Universities
                                    </a>
                                </li>

                                <!-- Courses -->
                                <li>
                                    <a href="courses.php"
                                        class="<?= in_array($currentPage, $coursePages) ? 'active' : ''; ?>">
                                        Courses
                                    </a>
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
                        <a href="tel:9315913702"
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