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
    <!-- Start Top Header Bar -->
    <div class="cs_top_header">
        <div class="container">
            <div class="cs_top_header_in">
                <!-- Left: Graduation Cap & Rotating Messages -->
                <div class="cs_top_header_left">
                    <span class="cs_top_cap_icon" aria-hidden="true">
                        <i class="ri-graduation-cap-fill"></i>
                    </span>
                    <div class="cs_top_ticker" aria-live="polite">
                        <span class="cs_top_ticker_item cs_ticker_active">Your Career. Our Mission.</span>
                        <span class="cs_top_ticker_item">Your Future. Our Priority.</span>
                        <span class="cs_top_ticker_item">Learn Today. Lead Tomorrow.</span>
                    </div>
                </div>

                <!-- Right: Phone, Email, Social Media Icons -->
                <div class="cs_top_header_right">
                    <div class="cs_top_contact_group">
                        <a href="tel:+919315913702" class="cs_top_contact_link" title="Call Us">
                            <i class="ri-phone-fill"></i>
                            <span>+91 93159 13702</span>
                        </a>
                        <span class="cs_top_v_sep cs_top_v_sep_email"></span>
                        <a href="mailto:arpansangam01@gmail.com" class="cs_top_contact_link cs_top_email" title="Email Us">
                            <i class="ri-mail-fill"></i>
                            <span>arpansangam01@gmail.com</span>
                        </a>
                    </div>
                    <span class="cs_top_v_sep cs_top_v_sep_social"></span>
                    <div class="cs_top_social_group">
                        <a href="#" aria-label="Facebook" class="cs_top_social_btn"><i class="ri-facebook-fill"></i></a>
                        <a href="#" aria-label="Instagram" class="cs_top_social_btn"><i class="ri-instagram-line"></i></a>
                        <a href="#" aria-label="LinkedIn" class="cs_top_social_btn"><i class="ri-linkedin-fill"></i></a>
                        <a href="#" aria-label="YouTube" class="cs_top_social_btn"><i class="ri-youtube-fill"></i></a>
                        <a href="#" aria-label="X (Twitter)" class="cs_top_social_btn"><i class="ri-twitter-x-line"></i></a>
                    </div>
                    <a href="tel:+919315913702" class="cs_top_mobile_call_btn" title="Call Now">
                        <i class="ri-phone-fill"></i>
                        <span>Call</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header Bar -->
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

<script>
    (function() {
        function initDuraTopTicker() {
            var ticker = document.querySelector('.cs_top_ticker');
            if (!ticker) return;
            var items = ticker.querySelectorAll('.cs_top_ticker_item');
            if (!items || items.length <= 1) return;
            var currentIdx = 0;
            setInterval(function() {
                var prevIdx = currentIdx;
                currentIdx = (currentIdx + 1) % items.length;
                items[prevIdx].classList.remove('cs_ticker_active');
                items[prevIdx].classList.add('cs_ticker_prev');
                items[currentIdx].classList.add('cs_ticker_active');
                setTimeout(function() {
                    items[prevIdx].classList.remove('cs_ticker_prev');
                }, 600);
            }, 3500);
        }
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initDuraTopTicker);
        } else {
            initDuraTopTicker();
        }
    })();
</script>
<!-- End Header -->