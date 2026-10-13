<?php
ob_start();
include("include/data.php");
?>

<main>
    <!-- Start Hero Section -->
    <div class="cs_banner_slider_wrap slider-section">
        <div class="cs_banner_slider swiper" data-slides-per-view="1" data-gap="0" data-autoplay="5000" data-loop="1"
            data-speed="800" data-pagination="1">

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/img/hero/banner-1.jpg" alt="Banner 1">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/img/hero/banner-2.jpg" alt="Banner 2">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/img/hero/banner-3.jpg" alt="Banner 3">
                    </a>
                </div>
            </div>

            <!-- Arrows -->
            <div class="cs_arrows_style_1">
                <button type="button" class="cs_slider_arrow slider-prev" aria-label="Previous banner">
                    <i class="ri-arrow-left-line"></i>
                </button>
                <button type="button" class="cs_slider_arrow slider-next" aria-label="Next banner">
                    <i class="ri-arrow-right-line"></i>
                </button>
            </div>

            <!-- Dots -->
            <div class="swiper-pagination"></div>

        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Partners Section -->
    <section class="cs_partners_section" data-aos="fade-up">
        <div class="container">
            <div class="cs_partners_wrap">
                <h2 class="cs_partners_title cs_fs_20 cs_semibold mb-0">Our Trusted Global Partners</h2>
                <div class="cs_partners_marquee swiper" data-marquee="1" data-autoplay="1" data-speed="6000"
                    data-slides-per-view="responsive" data-gap="24" data-xxlg-gap="65" data-xsm-slides="2"
                    data-sm-slides="3" data-smd-slides="3" data-md-slides="4" data-lg-slides="5" data-xlg-slides="6"
                    data-xxlg-slides="6">
                    <div class="swiper-wrapper cs_partners_track">
                        <div class="swiper-slide">
                            <div class="cs_partner_logo">
                                <img src="assets/img/partner-logo-1.svg" alt="Ciseco">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cs_partner_logo">
                                <img src="assets/img/partner-logo-2.svg" alt="Opturo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cs_partner_logo">
                                <img src="assets/img/partner-logo-3.svg" alt="Shree">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cs_partner_logo">
                                <img src="assets/img/partner-logo-4.svg" alt="Aquila">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cs_partner_logo">
                                <img src="assets/img/partner-logo-5.svg" alt="Merify">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cs_partner_logo">
                                <img src="assets/img/partner-logo-6.svg" alt="Oeur">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cs_partner_logo">
                                <img src="assets/img/partner-logo-3.svg" alt="Ciseco">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Partners Section -->

    <!-- Start Categories Section -->
    <section class="cs_categories_section cs_section_padding">
        <div class="container">
            <div class="cs_section_heading_style_2" data-aos="fade-up">
                <div class="cs_section_heading_text">
                    <h2 class="cs_fs_42 cs_medium mb-0">Explore <span>Categories</span></h2>
                    <p class="cs_fs_16 cs_secondary_color mt-2 mb-0">Browse top categories and find the perfect course
                        to grow
                        your skills.</p>
                </div>
            </div>
            <div class="cs_grid_col_4">
                <?php foreach ($categories as $category): ?>
                    <a href="<?php echo htmlspecialchars($category['url']); ?>"
                        class="cs_category_card_1 cs_cat_v2 cs_cat_v2_<?php echo htmlspecialchars($category['color']); ?> cs_radius_10"
                        data-aos="fade-up"
                        <?php if ($category['delay'] > 0): ?>
                        data-aos-delay="<?php echo $category['delay']; ?>"
                        <?php endif; ?>>
                        <div class="cs_category_info">
                            <h3 class="cs_category_title cs_fs_20 cs_semibold">
                                <?php echo htmlspecialchars($category['title']); ?>
                            </h3>
                            <p class="cs_category_lessons mb-0">
                                <?php echo htmlspecialchars($category['duration']); ?>
                                &nbsp;|&nbsp;
                                <?php echo htmlspecialchars($category['category']); ?>
                            </p>
                        </div>
                        <div class="cs_cat_v2_right">
                            <div class="cs_cat_v2_icon">
                                <img
                                    src="<?php echo htmlspecialchars($category['image']); ?>"
                                    onerror="this.onerror=null; this.src='<?php echo htmlspecialchars($category['fallback']); ?>';"
                                    alt="<?php echo htmlspecialchars($category['alt']); ?>">

                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="cs_cat_badge_row">
                <span class="cs_cat_badge_pill">
                    <i class="ri-group-line"></i> Top UGC-Recognized Universities
                </span>
                <span class="cs_cat_badge_pill">
                    <i class="ri-star-line"></i> Flexible Learning Options
                </span>
                <span class="cs_cat_badge_pill">
                    <i class="ri-bar-chart-line"></i> Career-Focused Programs
                </span>
            </div>

        </div>
    </section>
    <!-- End Categories Section -->

    <!-- Start Universities Section -->
    <section class="cs_universities_section cs_section_padding">
        <div class="cs_universities_bg_overlay"></div>
        <div class="container position-relative" style="z-index: 2;">
            <!-- Heading Area -->
            <div class="cs_uni_heading_row" data-aos="fade-up">
                <div class="cs_uni_heading_text">
                    <h2 class="cs_uni_title">Explore Top <span>Universities</span></h2>
                    <p class="cs_uni_subtitle">Discover UGC-recognized universities offering flexible online degree programs.</p>
                </div>
                <div class="cs_uni_heading_badges">
                    <!-- <div class="cs_uni_badge_pill">
                        <span class="cs_uni_badge_icon cs_badge_blue"><i class="ri-shield-check-line"></i></span>
                        <div class="cs_uni_badge_label">
                            <strong>UGC</strong>
                            <span>Recognized</span>
                        </div>
                    </div>
                    <div class="cs_uni_badge_pill">
                        <span class="cs_uni_badge_icon cs_badge_orange"><i class="ri-award-line"></i></span>
                        <div class="cs_uni_badge_label">
                            <strong>NAAC</strong>
                            <span>Accredited</span>
                        </div>
                    </div>
                    <div class="cs_uni_badge_pill">
                        <span class="cs_uni_badge_icon cs_badge_green"><i class="ri-graduation-cap-line"></i></span>
                        <div class="cs_uni_badge_label">
                            <strong>Flexible</strong>
                            <span>Learning</span>
                        </div>
                    </div> -->
                    <a href="universities.php" class="cs_primary_btn cs_login_btn">
                              <span class="cs_login_text">View All Universities</span>
                              <span class="cs_user_icon"><i class="ri-arrow-right-line"></i></span>
                          </a>
                </div>
            </div>

            <!-- Slider Container -->
            <div class="cs_uni_slider_wrapper position-relative" data-aos="fade-up" data-aos-delay="100">
                <!-- Navigation Prev -->
                <button type="button" class="cs_uni_slider_nav cs_uni_prev slider-prev" aria-label="Previous slide">
                    <i class="ri-arrow-left-s-line"></i>
                </button>
                <!-- Navigation Next -->
                <button type="button" class="cs_uni_slider_nav cs_uni_next slider-next" aria-label="Next slide">
                    <i class="ri-arrow-right-s-line"></i>
                </button>

                <div class="cs_slider cs_slider_3 swiper"
                    data-slides-per-view="responsive"
                    data-xxlg-slides="4"
                    data-xlg-slides="4"
                    data-lg-slides="3"
                    data-md-slides="2"
                    data-sm-slides="1"
                    data-xsm-slides="1"
                    data-gap="20"
                    data-speed="600"
                    data-loop="1"
                    data-autoplay="1"
                    data-pagination-type="bullets">
                    <div class="swiper-wrapper">
                        <?php if (!empty($universities)): ?>
                            <?php foreach ($universities as $uni): ?>
                                <div class="swiper-slide">
                                    <div class="cs_uni_card">
                                        <!-- Campus Image with Logo overlay -->
                                        <div class="cs_uni_card_thumb">
                                            <img src="<?php echo htmlspecialchars($uni['image']); ?>"
                                                onerror="this.onerror=null; this.src='<?php echo htmlspecialchars($uni['fallback_image']); ?>';"
                                                alt="<?php echo htmlspecialchars($uni['name']); ?>">
                                            <div class="cs_uni_logo_box">
                                                <img src="<?php echo htmlspecialchars($uni['logo']); ?>"
                                                    onerror="this.onerror=null; this.src='<?php echo htmlspecialchars($uni['fallback_logo']); ?>';"
                                                    alt="<?php echo htmlspecialchars($uni['name']); ?> Logo">
                                            </div>
                                        </div>

                                        <!-- Card Content -->
                                        <div class="cs_uni_card_body">
                                            <h3 class="cs_uni_card_title" title="<?php echo htmlspecialchars($uni['name']); ?>">
                                                <a href="<?php echo htmlspecialchars($uni['url']); ?>"><?php echo htmlspecialchars($uni['name']); ?></a>
                                            </h3>
                                            <p class="cs_uni_card_accred"><?php echo htmlspecialchars($uni['accreditation']); ?></p>

                                            <!-- Course tags -->
                                            <div class="cs_uni_tags cs_tags_<?php echo htmlspecialchars($uni['tag_theme']); ?>">
                                                <?php foreach ($uni['courses'] as $course): ?>
                                                    <span class="cs_uni_tag"><?php echo htmlspecialchars($course); ?></span>
                                                <?php endforeach; ?>
                                            </div>

                                            <!-- View Programs Button -->
                                            <a href="<?php echo htmlspecialchars($uni['url']); ?>" class="cs_uni_card_btn">
                                                <span>View Programs</span>
                                                <i class="ri-arrow-right-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Pagination Dots -->
                <div class="swiper-pagination cs_uni_pagination"></div>
            </div>
        </div>
    </section>
    <!-- End Universities Section -->

    <!-- Start Features Section -->
    <!-- <section class=" cs_bg_filed cs_section_padding feature-section" data-src="assets/img/bg/vector-bg-1.svg">
        <div class="container">
            <div class="row cs_gap_y_40 justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="cs_iconbox_style_1">
                        <div class="cs_iconbox_icon cs_center cs_white_bg cs_radius_20">
                            <img src="assets/img/icons/mentor-studio.svg" alt="AI Mentor Studio">
                        </div>
                        <div class="cs_iconbox_info">
                            <h2 class="cs_iconbox_title cs_fs_24 cs_semibold cs_white_color">AI Mentor Studio</h2>
                            <p class="cs_iconbox_subtitle cs_gray3_color mb-0">An adaptive AI coach that analyzes your
                                progress,
                                identifies weak spots, and delivers micro-lessons.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="cs_iconbox_style_1">
                        <div class="cs_iconbox_icon cs_center cs_white_bg cs_radius_20">
                            <img src="assets/img/icons/live-insight.svg" alt="Live Insight Engine">
                        </div>
                        <div class="cs_iconbox_info">
                            <h2 class="cs_iconbox_title cs_fs_24 cs_semibold cs_white_color">Live Insight Engine</h2>
                            <p class="cs_iconbox_subtitle cs_gray3_color mb-0">Real-time knowledge heatmaps, predictive
                                score
                                analytics, and personalized study recommendations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="cs_iconbox_style_1">
                        <div class="cs_iconbox_icon cs_center cs_white_bg cs_radius_20">
                            <img src="assets/img/icons/deep-learning.svg" alt="Deep Learning Analytics">
                        </div>
                        <div class="cs_iconbox_info">
                            <h2 class="cs_iconbox_title cs_fs_24 cs_semibold cs_white_color">Deep Learning Analytics
                            </h2>
                            <p class="cs_iconbox_subtitle cs_gray3_color mb-0">Visualize strengths, weak spots, and time
                                management
                                with AI-driven weekly reports & recommendations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Features Section -->
    <!-- Start Trending Courses Section -->
    <section class="cs_course_section cs_section_padding pb-0">
        <div class="container">
            <div class="cs_section_heading_style_2 mb-4 mb-lg-5" data-aos="fade-up">
                <div class="cs_section_heading_text">
                    <h2 class="cs_fs_42 cs_medium mb-0">Trending Courses</h2>
                    <p class="cs_fs_16 cs_secondary_color mt-2 mb-0">Join thousands of learners — most popular,
                        highest‑rated &
                        freshly updated content.</p>
                </div>
                <a href="courses.html" class="cs_text_btn">
                    <span class="cs_btn_text">View All Courses</span>
                    <span><i class="ri-arrow-right-s-line"></i></span>
                </a>
            </div>
            <div class="cs_grid_col_4">
                <div class="cs_course_style_1 cs_white_bg cs_radius_20">
                    <div class="cs_course_thumbnail cs_radius_15">
                        <img src="assets/img/course-img-1.jpg" alt="Ultimate Web Development Bootcamp 2025">
                        <span class="cs_course_badge cs_primary_bg cs_fs_12 cs_white_color">Bestseller</span>
                    </div>
                    <div class="cs_course_body">
                        <h3 class="cs_course_title cs_fs_20 cs_semibold">
                            <a href="course-details.html">Ultimate Web Development Bootcamp 2025</a>
                        </h3>
                        <div class="cs_course_meta cs_fs_14">
                            <span class="cs_course_author">Tammi Allison</span>
                            <span class="cs_course_rating"><i class="ri-star-fill"></i> 4.9 (2,840)</span>
                        </div>
                        <div class="cs_course_price">
                            <span class="cs_price_new">$89.99</span>
                            <del class="cs_price_old">$199.99</del>
                        </div>
                        <div class="cs_course_info cs_radius_20">
                            <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                <a href="course-details.html">Ultimate Web Development Bootcamp 2025</a>
                            </h3>
                            <p class="cs_course_info_text cs_fs_14">Learn user-centered design, prototyping, and create
                                stunning
                                interfaces. Portfolio projects included.</p>
                            <ul class="cs_course_info_list cs_fs_12 cs_mp_0">
                                <li><i class="ri-graduation-cap-line"></i>All Levels</li>
                                <li><i class="ri-time-line"></i>32 hours</li>
                                <li><i class="ri-video-on-line"></i>98 lectures</li>
                                <li><i class="ri-star-line"></i>4.7 (5,400 ratings)</li>
                            </ul>
                            <ul class="cs_course_features cs_fs_14 cs_mp_0">
                                <li>Design Thinking</li>
                                <li>Wireframing</li>
                                <li>Prototyping</li>
                                <li>User Testing</li>
                                <li>Portfolio Case Study</li>
                            </ul>
                            <div class="cs_action_btns">
                                <button type="button" class="cs_primary_btn cs_radius_3 enrollBtn">
                                    <span>Enroll Now</span>
                                    <span><i class="ri-shopping-bag-line"></i></span>
                                </button>
                                <button type="button"
                                    class="cs_wishlist_btn cs_gray3_bg cs_black_color cs_radius_3 wishlistBtn">
                                    <span><i class="ri-heart-line"></i></span>
                                </button>
                            </div>
                            <div class="cs_course_price">
                                <span class="cs_price_new">$89.99</span>
                                <del class="cs_price_old">$199.99</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs_course_style_1 cs_white_bg cs_radius_20">
                    <div class="cs_course_thumbnail cs_radius_15">
                        <img src="assets/img/course-img-2.jpg" alt="UI/UX Design Pro (Figma + Adobe XD)">
                        <span class="cs_course_badge cs_primary_bg cs_fs_12 cs_white_color">Top Rated</span>
                    </div>
                    <div class="cs_course_body">
                        <h3 class="cs_course_title cs_fs_20 cs_semibold"><a href="course-details.html">UI/UX Design Pro
                                (Figma +
                                Adobe XD)</a></h3>
                        <div class="cs_course_meta cs_fs_14">
                            <span class="cs_course_author">Micheal Cabot</span>
                            <span class="cs_course_rating"><i class="ri-star-fill"></i> 4.8 (6,280)</span>
                        </div>
                        <div class="cs_course_price">
                            <span class="cs_price_new">$69.99</span>
                            <del class="cs_price_old">$149.99</del>
                        </div>
                        <div class="cs_course_info cs_radius_20">
                            <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                <a href="course-details.html">UI/UX Design Pro (Figma + Adobe XD)</a>
                            </h3>
                            <p class="cs_course_info_text cs_fs_14">Design pixel‑perfect interfaces and prototypes with
                                Figma and
                                Adobe XD workflows.</p>
                            <ul class="cs_course_info_list cs_fs_12 cs_mp_0">
                                <li><i class="ri-graduation-cap-line"></i>Beginner</li>
                                <li><i class="ri-time-line"></i>28 hours</li>
                                <li><i class="ri-video-on-line"></i>180 lectures</li>
                                <li><i class="ri-star-line"></i>4.8 (6,280 ratings)</li>
                            </ul>
                            <ul class="cs_course_features cs_fs_14 cs_mp_0">
                                <li>Figma</li>
                                <li>Adobe XD</li>
                                <li>Wireframing</li>
                                <li>Prototyping</li>
                                <li>Design Systems</li>
                            </ul>
                            <div class="cs_action_btns">
                                <button type="button" class="cs_primary_btn cs_radius_3 enrollBtn">
                                    <span>Enroll Now</span>
                                    <span><i class="ri-shopping-bag-line"></i></span>
                                </button>
                                <button type="button"
                                    class="cs_wishlist_btn cs_gray3_bg cs_black_color cs_radius_3 wishlistBtn">
                                    <span><i class="ri-heart-line"></i></span>
                                </button>
                            </div>
                            <div class="cs_course_price">
                                <span class="cs_price_new">$69.99</span>
                                <del class="cs_price_old">$149.99</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs_course_style_1 cs_white_bg cs_radius_20">
                    <div class="cs_course_thumbnail cs_radius_15">
                        <img src="assets/img/course-img-3.jpg" alt="Game Development with Unity and C#">
                        <span class="cs_course_badge cs_primary_bg cs_fs_12 cs_white_color">Creative</span>
                    </div>
                    <div class="cs_course_body">
                        <h3 class="cs_course_title cs_fs_20 cs_semibold"><a href="course-details.html">Game Development
                                with Unity
                                and C#</a></h3>
                        <div class="cs_course_meta cs_fs_14">
                            <span class="cs_course_author">Fannie Sargent</span>
                            <span class="cs_course_rating"><i class="ri-star-fill"></i> 4.9 (2,840)</span>
                        </div>
                        <div class="cs_course_price">
                            <span class="cs_price_new">$84.99</span>
                            <del class="cs_price_old">$149.99</del>
                        </div>
                        <div class="cs_course_info cs_radius_20">
                            <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                <a href="course-details.html">Game Development with Unity and C#</a>
                            </h3>
                            <p class="cs_course_info_text cs_fs_14">Build 2D & 3D games with Unity and C#, from core
                                mechanics to
                                publishing.</p>
                            <ul class="cs_course_info_list cs_fs_12 cs_mp_0">
                                <li><i class="ri-graduation-cap-line"></i>Intermediate</li>
                                <li><i class="ri-time-line"></i>36 hours</li>
                                <li><i class="ri-video-on-line"></i>240 lectures</li>
                                <li><i class="ri-star-line"></i>4.9 (2,840 ratings)</li>
                            </ul>
                            <ul class="cs_course_features cs_fs_14 cs_mp_0">
                                <li>Unity Engine</li>
                                <li>C# Scripting</li>
                                <li>2D & 3D</li>
                                <li>Game Physics</li>
                                <li>Publishing</li>
                            </ul>
                            <div class="cs_action_btns">
                                <button type="button" class="cs_primary_btn cs_radius_3 enrollBtn">
                                    <span>Enroll Now</span>
                                    <span><i class="ri-shopping-bag-line"></i></span>
                                </button>
                                <button type="button"
                                    class="cs_wishlist_btn cs_gray3_bg cs_black_color cs_radius_3 wishlistBtn">
                                    <span><i class="ri-heart-line"></i></span>
                                </button>
                            </div>
                            <div class="cs_course_price">
                                <span class="cs_price_new">$84.99</span>
                                <del class="cs_price_old">$149.99</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs_course_style_1 cs_white_bg cs_radius_20">
                    <div class="cs_course_thumbnail cs_radius_15">
                        <img src="assets/img/course-img-4.jpg" alt="Digital Marketing & Growth Hacking">
                        <span class="cs_course_badge cs_primary_bg cs_fs_12 cs_white_color">Hot</span>
                    </div>
                    <div class="cs_course_body">
                        <h3 class="cs_course_title cs_fs_20 cs_semibold"><a href="course-details.html">Digital Marketing
                                & Growth
                                Hacking</a></h3>
                        <div class="cs_course_meta cs_fs_14">
                            <span class="cs_course_author">Dennis Churchwell</span>
                            <span class="cs_course_rating"><i class="ri-star-fill"></i> 4.6 (10,320)</span>
                        </div>
                        <div class="cs_course_price">
                            <span class="cs_price_new">$59.99</span>
                            <del class="cs_price_old">$129.99</del>
                        </div>
                        <div class="cs_course_info cs_radius_20">
                            <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                <a href="course-details.html">Digital Marketing & Growth Hacking</a>
                            </h3>
                            <p class="cs_course_info_text cs_fs_14">SEO, paid ads, funnels and growth tactics that scale
                                real
                                businesses fast.</p>
                            <ul class="cs_course_info_list cs_fs_12 cs_mp_0">
                                <li><i class="ri-graduation-cap-line"></i>Intermediate</li>
                                <li><i class="ri-time-line"></i>24 hours</li>
                                <li><i class="ri-video-on-line"></i>160 lectures</li>
                                <li><i class="ri-star-line"></i>4.6 (10,320 ratings)</li>
                            </ul>
                            <ul class="cs_course_features cs_fs_14 cs_mp_0">
                                <li>SEO</li>
                                <li>Paid Ads</li>
                                <li>Funnels</li>
                                <li>Analytics</li>
                                <li>Growth Hacking</li>
                            </ul>
                            <div class="cs_action_btns">
                                <button type="button" class="cs_primary_btn cs_radius_3 enrollBtn">
                                    <span>Enroll Now</span>
                                    <span><i class="ri-shopping-bag-line"></i></span>
                                </button>
                                <button type="button"
                                    class="cs_wishlist_btn cs_gray3_bg cs_black_color cs_radius_3 wishlistBtn">
                                    <span><i class="ri-heart-line"></i></span>
                                </button>
                            </div>
                            <div class="cs_course_price">
                                <span class="cs_price_new">$59.99</span>
                                <del class="cs_price_old">$129.99</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs_course_style_1 cs_white_bg cs_radius_20">
                    <div class="cs_course_thumbnail cs_radius_15">
                        <img src="assets/img/course-img-5.jpg" alt="Cloud Computing (AWS + Azure)">
                        <span class="cs_course_badge cs_primary_bg cs_fs_12 cs_white_color">Expert</span>
                    </div>
                    <div class="cs_course_body">
                        <h3 class="cs_course_title cs_fs_20 cs_semibold"><a href="course-details.html">Cloud Computing
                                (AWS +
                                Azure)</a></h3>
                        <div class="cs_course_meta cs_fs_14">
                            <span class="cs_course_author">Ronda Campbell</span>
                            <span class="cs_course_rating"><i class="ri-star-fill"></i> 4.7 (4,670)</span>
                        </div>
                        <div class="cs_course_price">
                            <span class="cs_price_new">$109.99</span>
                            <del class="cs_price_old">$259.99</del>
                        </div>
                        <div class="cs_course_info cs_radius_20">
                            <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                <a href="course-details.html">Cloud Computing (AWS + Azure)</a>
                            </h3>
                            <p class="cs_course_info_text cs_fs_14">Deploy, scale and secure apps across AWS and Azure
                                with hands‑on
                                labs.</p>
                            <ul class="cs_course_info_list cs_fs_12 cs_mp_0">
                                <li><i class="ri-graduation-cap-line"></i>Intermediate</li>
                                <li><i class="ri-time-line"></i>40 hours</li>
                                <li><i class="ri-video-on-line"></i>300 lectures</li>
                                <li><i class="ri-star-line"></i>4.7 (4,670 ratings)</li>
                            </ul>
                            <ul class="cs_course_features cs_fs_14 cs_mp_0">
                                <li>AWS</li>
                                <li>Azure</li>
                                <li>DevOps</li>
                                <li>Security</li>
                                <li>Hands-on Labs</li>
                            </ul>
                            <div class="cs_action_btns">
                                <button type="button" class="cs_primary_btn cs_radius_3 enrollBtn">
                                    <span>Enroll Now</span>
                                    <span><i class="ri-shopping-bag-line"></i></span>
                                </button>
                                <button type="button"
                                    class="cs_wishlist_btn cs_gray3_bg cs_black_color cs_radius_3 wishlistBtn">
                                    <span><i class="ri-heart-line"></i></span>
                                </button>
                            </div>
                            <div class="cs_course_price">
                                <span class="cs_price_new">$109.99</span>
                                <del class="cs_price_old">$259.99</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs_course_style_1 cs_white_bg cs_radius_20">
                    <div class="cs_course_thumbnail cs_radius_15">
                        <img src="assets/img/course-img-6.jpg" alt="Financial Analysis and Investment">
                        <span class="cs_course_badge cs_primary_bg cs_fs_12 cs_white_color">High Demand</span>
                    </div>
                    <div class="cs_course_body">
                        <h3 class="cs_course_title cs_fs_20 cs_semibold"><a href="course-details.html">Financial
                                Analysis and
                                Investment</a></h3>
                        <div class="cs_course_meta cs_fs_14">
                            <span class="cs_course_author">Mary Moore</span>
                            <span class="cs_course_rating"><i class="ri-star-fill"></i> 4.6 (4,300)</span>
                        </div>
                        <div class="cs_course_price">
                            <span class="cs_price_new">$47.99</span>
                            <del class="cs_price_old">$149.99</del>
                        </div>
                        <div class="cs_course_info cs_radius_20">
                            <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                <a href="course-details.html">Financial Analysis and Investment</a>
                            </h3>
                            <p class="cs_course_info_text cs_fs_14">Analyze statements, value companies and build smart
                                investment
                                models.</p>
                            <ul class="cs_course_info_list cs_fs_12 cs_mp_0">
                                <li><i class="ri-graduation-cap-line"></i>Intermediate</li>
                                <li><i class="ri-time-line"></i>22 hours</li>
                                <li><i class="ri-video-on-line"></i>150 lectures</li>
                                <li><i class="ri-star-line"></i>4.6 (4,300 ratings)</li>
                            </ul>
                            <ul class="cs_course_features cs_fs_14 cs_mp_0">
                                <li>Financial Statements</li>
                                <li>Valuation</li>
                                <li>Modeling</li>
                                <li>Investing</li>
                                <li>Excel</li>
                            </ul>
                            <div class="cs_action_btns">
                                <button type="button" class="cs_primary_btn cs_radius_3 enrollBtn">
                                    <span>Enroll Now</span>
                                    <span><i class="ri-shopping-bag-line"></i></span>
                                </button>
                                <button type="button"
                                    class="cs_wishlist_btn cs_gray3_bg cs_black_color cs_radius_3 wishlistBtn">
                                    <span><i class="ri-heart-line"></i></span>
                                </button>
                            </div>
                            <div class="cs_course_price">
                                <span class="cs_price_new">$47.99</span>
                                <del class="cs_price_old">$149.99</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs_course_style_1 cs_white_bg cs_radius_20">
                    <div class="cs_course_thumbnail cs_radius_15">
                        <img src="assets/img/course-img-7.jpg" alt="English Speaking and Communication">
                        <span class="cs_course_badge cs_primary_bg cs_fs_12 cs_white_color">Popular</span>
                    </div>
                    <div class="cs_course_body">
                        <h3 class="cs_course_title cs_fs_20 cs_semibold"><a href="course-details.html">English Speaking
                                and
                                Communication</a></h3>
                        <div class="cs_course_meta cs_fs_14">
                            <span class="cs_course_author">Sandra Hicks</span>
                            <span class="cs_course_rating"><i class="ri-star-fill"></i> 4.5 (15,200)</span>
                        </div>
                        <div class="cs_course_price">
                            <span class="cs_price_new">$39.99</span>
                            <del class="cs_price_old">$99.99</del>
                        </div>
                        <div class="cs_course_info cs_radius_20">
                            <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                <a href="course-details.html">English Speaking and Communication</a>
                            </h3>
                            <p class="cs_course_info_text cs_fs_14">Speak fluently and confidently with real‑world
                                conversation
                                practice.</p>
                            <ul class="cs_course_info_list cs_fs_12 cs_mp_0">
                                <li><i class="ri-graduation-cap-line"></i>Advanced</li>
                                <li><i class="ri-time-line"></i>18 hours</li>
                                <li><i class="ri-video-on-line"></i>120 lectures</li>
                                <li><i class="ri-star-line"></i>4.5 (15,200 ratings)</li>
                            </ul>
                            <ul class="cs_course_features cs_fs_14 cs_mp_0">
                                <li>Speaking</li>
                                <li>Pronunciation</li>
                                <li>Vocabulary</li>
                                <li>Fluency</li>
                                <li>Confidence</li>
                            </ul>
                            <div class="cs_action_btns">
                                <button type="button" class="cs_primary_btn cs_radius_3 enrollBtn">
                                    <span>Enroll Now</span>
                                    <span><i class="ri-shopping-bag-line"></i></span>
                                </button>
                                <button type="button"
                                    class="cs_wishlist_btn cs_gray3_bg cs_black_color cs_radius_3 wishlistBtn">
                                    <span><i class="ri-heart-line"></i></span>
                                </button>
                            </div>
                            <div class="cs_course_price">
                                <span class="cs_price_new">$39.99</span>
                                <del class="cs_price_old">$99.99</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs_course_style_1 cs_white_bg cs_radius_20">
                    <div class="cs_course_thumbnail cs_radius_15">
                        <img src="assets/img/course-img-8.jpg" alt="Product Management Zero to Hero">
                        <span class="cs_course_badge cs_primary_bg cs_fs_12 cs_white_color">Best for career</span>
                    </div>
                    <div class="cs_course_body">
                        <h3 class="cs_course_title cs_fs_20 cs_semibold"><a href="course-details.html">Product
                                Management Zero to
                                Hero</a></h3>
                        <div class="cs_course_meta cs_fs_14">
                            <span class="cs_course_author">Kathryn Woodbury</span>
                            <span class="cs_course_rating"><i class="ri-star-fill"></i> 4.8 (3,150)</span>
                        </div>
                        <div class="cs_course_price">
                            <span class="cs_price_new">$79.99</span>
                            <del class="cs_price_old">$149.99</del>
                        </div>
                        <div class="cs_course_info cs_radius_20">
                            <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                <a href="course-details.html">Product Management Zero to Hero</a>
                            </h3>
                            <p class="cs_course_info_text cs_fs_14">Go from idea to launch — strategy, roadmaps and
                                stakeholder
                                management.</p>
                            <ul class="cs_course_info_list cs_fs_12 cs_mp_0">
                                <li><i class="ri-graduation-cap-line"></i>Advanced</li>
                                <li><i class="ri-time-line"></i>30 hours</li>
                                <li><i class="ri-video-on-line"></i>210 lectures</li>
                                <li><i class="ri-star-line"></i>4.8 (3,150 ratings)</li>
                            </ul>
                            <ul class="cs_course_features cs_fs_14 cs_mp_0">
                                <li>Strategy</li>
                                <li>Roadmaps</li>
                                <li>Stakeholders</li>
                                <li>Agile</li>
                                <li>Launch</li>
                            </ul>
                            <div class="cs_action_btns">
                                <button type="button" class="cs_primary_btn cs_radius_3 enrollBtn">
                                    <span>Enroll Now</span>
                                    <span><i class="ri-shopping-bag-line"></i></span>
                                </button>
                                <button type="button"
                                    class="cs_wishlist_btn cs_gray3_bg cs_black_color cs_radius_3 wishlistBtn">
                                    <span><i class="ri-heart-line"></i></span>
                                </button>
                            </div>
                            <div class="cs_course_price">
                                <span class="cs_price_new">$79.99</span>
                                <del class="cs_price_old">$149.99</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Trending Courses Section -->

    <!-- Start Promo Banner Section -->
    <section class="cs_promo_section cs_section_padding pb-0" data-aos="fade-up">
        <div class="container">
            <div class="cs_promo_banner_1 cs_radius_20">
                <span class="cs_promo_pattern cs_bg_filed" data-src="assets/img/vector-bg-2.svg"></span>
                <div class="cs_promo_content">
                    <span class="cs_promo_badge cs_fs_14">For Passionate Instructors</span>
                    <h2 class="cs_promo_title cs_semibold cs_white_color">Why Sell on Lerntix? Grow, Earn & Inspire</h2>
                    <div class="cs_promo_testimonial cs_accent_bg cs_radius_10">
                        <span class="cs_promo_quote" aria-hidden="true">
                            <img src="assets/img/icons/quote.svg" alt="Quote icon">
                        </span>
                        <blockquote>"Lerntix helped me earn $15k in 6 months. The platform's tools are unmatched!"
                        </blockquote>
                        <p class="cs_promo_author">
                            <span class="cs_author_name cs_white_color">Darren Treadway</span>, <span
                                class="cs_author_role cs_fs_12 cs_gray3_color">Data Science Instructor</span>
                        </p>
                    </div>
                </div>
                <div class="cs_promo_media">
                    <span class="cs_promo_shape" aria-hidden="true">
                        <img src="assets/img/wheel-2.svg" alt="Decorative shape">
                    </span>
                    <img class="cs_promo_person" src="assets/img/instructor-img-1.png"
                        alt="Confident instructor standing with crossed arms">
                </div>
                <ul class="cs_promo_features cs_mp_0">
                    <li class="cs_promo_feature">
                        <span class="cs_promo_feature_icon">
                            <img src="assets/img/icons/ai-tutor.svg" alt="AI Tutor for Students">
                        </span>
                        <div class="cs_promo_feature_info">
                            <h3 class="cs_promo_feature_title cs_fs_24 cs_semibold cs_white_color">AI Tutor for Students
                            </h3>
                            <p class="cs_promo_feature_text cs_gray3_color mb-0">Boost engagement with 24/7 AI that
                                answers
                                questions about your course content</p>
                        </div>
                    </li>
                    <li class="cs_promo_feature">
                        <span class="cs_promo_feature_icon">
                            <img src="assets/img/icons/smart-analysis.svg" alt="Smart Analytics">
                        </span>
                        <div class="cs_promo_feature_info">
                            <h3 class="cs_promo_feature_title cs_fs_24 cs_semibold cs_white_color">Smart Analytics</h3>
                            <p class="cs_promo_feature_text cs_gray3_color mb-0">Know your audience. Real-time insights
                                & course
                                performance dashboard.</p>
                        </div>
                    </li>
                    <li class="cs_promo_feature">
                        <span class="cs_promo_feature_icon">
                            <img src="assets/img/icons/flexible-payout.svg" alt="Flexible Payout">
                        </span>
                        <div class="cs_promo_feature_info">
                            <h3 class="cs_promo_feature_title cs_fs_24 cs_semibold cs_white_color">Flexible Payout</h3>
                            <p class="cs_promo_feature_text cs_gray3_color mb-0">Set your own prices, coupons, and
                                receive payouts
                                directly.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Promo Banner Section -->
    <!-- Start Mentor Section -->
    <section class="cs_mentor_section cs_section_padding pb-0">
        <div class="container">
            <div class="cs_section_heading_style_1 cs_center_column text-center mb-4" data-aos="fade-up">
                <h2 class="cs_section_title cs_fs_42 cs_medium mb-2">Meet Our Mentors</h2>
                <p class="cs_section_subtitle mb-0">Learn from industry experts who bring real‑world experience straight
                    to
                    your screen.</p>
            </div>
            <div class="cs_grid_col_4">
                <div class="cs_instructor_style_1 cs_radius_20" data-aos="fade-up">
                    <div class="cs_instructor_thumbnail cs_radius_15">
                        <img src="assets/img/instructor-img-2.jpg" alt="Darren Treadway">
                        <div class="cs_instructor_social">
                            <a href="#"><i class="ri-facebook-fill"></i></a>
                            <a href="#"><i class="ri-twitter-x-fill"></i></a>
                            <a href="#"><i class="ri-linkedin-fill"></i></a>
                            <a href="#"><i class="ri-instagram-line"></i></a>
                        </div>
                    </div>
                    <div class="cs_instructor_body">
                        <h3 class="cs_instructor_name cs_fs_20 cs_semibold">
                            <a href="instructor-details.html">Darren Treadway</a>
                        </h3>
                        <span class="cs_instructor_designation cs_fs_14">Data Science Instructor</span>
                        <ul class="cs_instructor_stats">
                            <li><span class="cs_stat_value cs_fs_20 cs_semibold">28k+</span><span
                                    class="cs_stat_label cs_fs_14">Students</span></li>
                            <li><span class="cs_stat_value cs_fs_20 cs_semibold">8</span><span
                                    class="cs_stat_label cs_fs_14">Courses</span></li>
                            <li><span class="cs_stat_value cs_fs_20 cs_semibold">98%</span><span
                                    class="cs_stat_label cs_fs_14">5-star</span></li>
                        </ul>
                    </div>
                </div>
                <div class="cs_instructor_style_1 cs_radius_20" data-aos="fade-up" data-aos-delay="100">
                    <div class="cs_instructor_thumbnail cs_radius_15">
                        <img src="assets/img/instructor-img-3.jpg" alt="Tammi Allison">
                        <div class="cs_instructor_social">
                            <a href="#"><i class="ri-facebook-fill"></i></a>
                            <a href="#"><i class="ri-twitter-x-fill"></i></a>
                            <a href="#"><i class="ri-linkedin-fill"></i></a>
                            <a href="#"><i class="ri-instagram-line"></i></a>
                        </div>
                    </div>
                    <div class="cs_instructor_body">
                        <h3 class="cs_instructor_name cs_fs_20 cs_semibold">
                            <a href="instructor-details.html">Tammi Allison</a>
                        </h3>
                        <span class="cs_instructor_designation cs_fs_14">UI/UX Design Mentor</span>
                        <ul class="cs_instructor_stats">
                            <li><span class="cs_stat_value cs_fs_20 cs_semibold">19k+</span><span
                                    class="cs_stat_label cs_fs_14">Students</span></li>
                            <li><span class="cs_stat_value cs_fs_20 cs_semibold">12</span><span
                                    class="cs_stat_label cs_fs_14">Courses</span></li>
                            <li><span class="cs_stat_value cs_fs_20 cs_semibold">96%</span><span
                                    class="cs_stat_label cs_fs_14">5-star</span></li>
                        </ul>
                    </div>
                </div>
                <div class="cs_instructor_style_1 cs_radius_20" data-aos="fade-up" data-aos-delay="200">
                    <div class="cs_instructor_thumbnail cs_radius_15">
                        <img src="assets/img/instructor-img-4.jpg" alt="Micheal Cabot">
                        <div class="cs_instructor_social">
                            <a href="#"><i class="ri-facebook-fill"></i></a>
                            <a href="#"><i class="ri-twitter-x-fill"></i></a>
                            <a href="#"><i class="ri-linkedin-fill"></i></a>
                            <a href="#"><i class="ri-instagram-line"></i></a>
                        </div>
                    </div>
                    <div class="cs_instructor_body">
                        <h3 class="cs_instructor_name cs_fs_20 cs_semibold">
                            <a href="instructor-details.html">Micheal Cabot</a>
                        </h3>
                        <span class="cs_instructor_designation cs_fs_14">Full‑Stack Web Instructor</span>
                        <ul class="cs_instructor_stats">
                            <li><span class="cs_stat_value cs_fs_20 cs_semibold">24k+</span><span
                                    class="cs_stat_label cs_fs_14">Students</span></li>
                            <li><span class="cs_stat_value cs_fs_20 cs_semibold">10</span><span
                                    class="cs_stat_label cs_fs_14">Courses</span></li>
                            <li><span class="cs_stat_value cs_fs_20 cs_semibold">97%</span><span
                                    class="cs_stat_label cs_fs_14">5-star</span></li>
                        </ul>
                    </div>
                </div>
                <div class="cs_instructor_style_1 cs_radius_20" data-aos="fade-up" data-aos-delay="300">
                    <div class="cs_instructor_thumbnail cs_radius_15">
                        <img src="assets/img/instructor-img-5.jpg" alt="Sofia Bennett">
                        <div class="cs_instructor_social">
                            <a href="#"><i class="ri-facebook-fill"></i></a>
                            <a href="#"><i class="ri-twitter-x-fill"></i></a>
                            <a href="#"><i class="ri-linkedin-fill"></i></a>
                            <a href="#"><i class="ri-instagram-line"></i></a>
                        </div>
                    </div>
                    <div class="cs_instructor_body">
                        <h3 class="cs_instructor_name cs_fs_20 cs_semibold">
                            <a href="instructor-details.html">Sofia Bennett</a>
                        </h3>
                        <span class="cs_instructor_designation cs_fs_14">Marketing & Growth Coach</span>
                        <ul class="cs_instructor_stats">
                            <li>
                                <span class="cs_stat_value cs_fs_20 cs_semibold">31k+</span>
                                <span class="cs_stat_label cs_fs_14">Students</span>
                            </li>
                            <li>
                                <span class="cs_stat_value cs_fs_20 cs_semibold">9</span>
                                <span class="cs_stat_label cs_fs_14">Courses</span>
                            </li>
                            <li>
                                <span class="cs_stat_value cs_fs_20 cs_semibold">95%</span>
                                <span class="cs_stat_label cs_fs_14">5-star</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Mentor Section -->

    <!-- Start Testimonial Section -->
    <section class="cs_testimonial_section cs_section_padding">
        <div class="container">
            <div class="cs_section_heading_style_2 cs_testimonial_heading mb-4 mb-lg-5" data-aos="fade-up">
                <div class="cs_section_heading_text">
                    <h2 class="cs_fs_42 cs_medium mb-0">Top Voices of Lerntix Community</h2>
                    <p class="cs_fs_16 mt-2 mb-0">Real stories, real impact — see why learners love our platform.</p>
                </div>
                <span class="cs_testimonial_trust cs_fs_14 cs_primary_color">
                    <span class="cs_rating" data-rating="5">
                        <span class="cs_rating_percentage"></span>
                    </span>
                    <span>Trusted by 10,000+ happy learners</span>
                </span>
            </div>
            <div class="cs_testimonial_wrap">
                <div class="cs_video_review">
                    <div class="cs_video_review_media cs_radius_20">
                        <video class="cs_video_review_video" src="assets/video/review.mp4"
                            poster="assets/img/testimonial-img-1.jpg" autoplay muted loop playsinline preload="auto"
                            aria-label="Eric Westerfield sharing his Lerntix experience">
                        </video>
                    </div>
                    <div class="cs_video_review_footer">
                        <div class="cs_video_review_person">
                            <h3 class="cs_avatar_name cs_fs_18 cs_medium">Eric Westerfield</h3>
                            <span class="cs_fs_14 cs_primary_color">Senior Frontend Engineer</span>
                        </div>
                        <span class="cs_rating" data-rating="5">
                            <span class="cs_rating_percentage"></span>
                        </span>
                    </div>
                </div>
                <!-- Right: Text review list -->
                <ul class="cs_review_list cs_mp_0">
                    <li class="cs_review_card cs_radius_20">
                        <div class="cs_review_card_head">
                            <span class="cs_review_avatar rounded-circle">
                                <img src="assets/img/avatar-1.jpg" alt="Daniel Bowers">
                            </span>
                            <div class="cs_review_person">
                                <div>
                                    <h3 class="cs_avatar_name cs_fs_18 cs_medium">Daniel Bowers</h3>
                                    <span class="cs_fs_14 cs_primary_color">Creative Director</span>
                                </div>
                                <span class="cs_rating" data-rating="5">
                                    <span class="cs_rating_percentage"></span>
                                </span>
                            </div>
                        </div>
                        <p class="cs_review_text cs_medium cs_black_color mb-0">“The No-Code & Webflow course helped me
                            prototype
                            faster than ever. My team adopted new tools thanks to Lerntix. Amazing content & vibes!”</p>
                    </li>
                    <li class="cs_review_card cs_radius_20">
                        <div class="cs_review_card_head">
                            <span class="cs_review_avatar rounded-circle">
                                <img src="assets/img/avatar-2.jpg" alt="Jenny Jones">
                            </span>
                            <div class="cs_review_person">
                                <div>
                                    <h3 class="cs_avatar_name cs_fs_18 cs_medium">Jenny Jones</h3>
                                    <span class="cs_fs_14 cs_primary_color">Product Designer, Figma</span>
                                </div>
                                <span class="cs_rating" data-rating="5">
                                    <span class="cs_rating_percentage"></span>
                                </span>
                            </div>
                        </div>
                        <p class="cs_review_text cs_medium cs_black_color mb-0">“Flexibility + world-class content. I
                            completed
                            the UX/UI specialization while working full-time. The interactive projects gave me a
                            portfolio that
                            landed my dream design role.”</p>
                    </li>
                    <li class="cs_review_card cs_radius_20">
                        <div class="cs_review_card_head">
                            <span class="cs_review_avatar rounded-circle">
                                <img src="assets/img/avatar-3.jpg" alt="Nathaniel Marini">
                            </span>
                            <div class="cs_review_person">
                                <div>
                                    <h3 class="cs_avatar_name cs_fs_18 cs_medium">Nathaniel Marini</h3>
                                    <span class="cs_fs_14 cs_primary_color">Security Analyst</span>
                                </div>
                                <span class="cs_rating" data-rating="5">
                                    <span class="cs_rating_percentage"></span>
                                </span>
                            </div>
                        </div>
                        <p class="cs_review_text cs_medium cs_black_color mb-0">“Cybersecurity track is top-tier!
                            Real-world
                            attack sims and zero to hero structure. I passed the certification with confidence. Thanks,
                            Lerntix
                            team!”</p>
                    </li>
                    <li class="cs_review_card cs_radius_20">
                        <div class="cs_review_card_head">
                            <span class="cs_review_avatar rounded-circle">
                                <img src="assets/img/avatar-4.jpg" alt="Vicki Kirby">
                            </span>
                            <div class="cs_review_person">
                                <div>
                                    <h3 class="cs_avatar_name cs_fs_18 cs_medium">Vicki Kirby</h3>
                                    <span class="cs_fs_14 cs_primary_color">Data Analyst</span>
                                </div>
                                <span class="cs_rating" data-rating="5">
                                    <span class="cs_rating_percentage"></span>
                                </span>
                            </div>
                        </div>
                        <p class="cs_review_text cs_medium cs_black_color mb-0">“Lerntix completely transformed how I
                            learn. The
                            AI-driven recommendations and hands-on labs helped me land my first data role within 4
                            months. Absolute
                            game changer!”</p>
                    </li>
                    <li class="cs_review_card cs_radius_20">
                        <div class="cs_review_card_head">
                            <span class="cs_review_avatar rounded-circle">
                                <img src="assets/img/avatar-5.jpg" alt="David Gregor">
                            </span>
                            <div class="cs_review_person">
                                <div>
                                    <h3 class="cs_avatar_name cs_fs_18 cs_medium">David Gregor</h3>
                                    <span class="cs_fs_14 cs_primary_color">Game Developer</span>
                                </div>
                                <span class="cs_rating" data-rating="5">
                                    <span class="cs_rating_percentage"></span>
                                </span>
                            </div>
                        </div>
                        <p class="cs_review_text cs_medium cs_black_color mb-0">“Unity & C# course was incredible! I
                            built my
                            first mobile game and published it. The instructors are super responsive. 10/10 Lerntix!”
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->
    <!-- Start Events Section -->
    <section class="cs_event_section cs_section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="cs_section_heading_style_2 mb-4" data-aos="fade-up">
                        <div class="cs_section_heading_text">
                            <h2 class="cs_fs_42 cs_medium mb-0">Upcoming Live Events</h2>
                            <p class="cs_fs_16 cs_secondary_color mt-2 mb-0">Join mentors, industry experts, and global
                                learners in
                                real‑time sessions.</p>
                        </div>
                        <a href="events.html" class="cs_text_btn">
                            <span class="cs_btn_text">View All Event</span>
                            <span><i class="ri-arrow-right-s-line"></i></span>
                        </a>
                    </div>
                    <ul class="cs_event_list cs_mp_0">
                        <li class="cs_event_card cs_radius_15 cs_bg_filed" data-src="assets/img/vector-bg-3.svg">
                            <div class="cs_event_card_top">
                                <span class="cs_event_meta cs_fs_12"><i class="ri-calendar-line"></i> Jul 02,
                                    2026</span>
                                <span class="cs_event_meta cs_fs_12"><i class="ri-map-pin-line"></i> Singapore</span>
                            </div>
                            <h3 class="cs_event_title cs_fs_24 cs_semibold">
                                <a href="event-details.html">Web3 Builder's Meetup</a>
                            </h3>
                            <div class="cs_event_card_bottom">
                                <p class="cs_event_price cs_fs_14 mb-0"><span
                                        class="cs_event_price_value cs_semibold">$79</span> /
                                    networking</p>
                                <a href="event-details.html" class="cs_text_btn cs_event_btn cs_fs_14">
                                    <span class="cs_btn_text">Reserve Spot</span>
                                    <span><i class="ri-arrow-right-s-line"></i></span>
                                </a>
                            </div>
                        </li>
                        <li class="cs_event_card cs_radius_15 cs_bg_filed" data-src="assets/img/vector-bg-3.svg">
                            <div class="cs_event_card_top">
                                <span class="cs_event_meta cs_fs_12"><i class="ri-calendar-line"></i> Jul 10,
                                    2026</span>
                                <span class="cs_event_meta cs_fs_12"><i class="ri-map-pin-line"></i> Online (Zoom +
                                    Discord)</span>
                            </div>
                            <h3 class="cs_event_title cs_fs_24 cs_semibold">
                                <a href="event-details.html">Data Science Bootcamp</a>
                            </h3>
                            <div class="cs_event_card_bottom">
                                <p class="cs_event_price cs_fs_14 mb-0"><span
                                        class="cs_event_price_value cs_semibold">Free</span> /
                                    limited seats</p>
                                <a href="event-details.html" class="cs_text_btn cs_event_btn cs_fs_14">
                                    <span class="cs_btn_text">Reserve Spot</span>
                                    <span><i class="ri-arrow-right-s-line"></i></span>
                                </a>
                            </div>
                        </li>
                        <li class="cs_event_card cs_radius_15 cs_bg_filed" data-src="assets/img/vector-bg-3.svg">
                            <div class="cs_event_card_top">
                                <span class="cs_event_meta cs_fs_12"><i class="ri-calendar-line"></i> Jul 20,
                                    2026</span>
                                <span class="cs_event_meta cs_fs_12"><i class="ri-map-pin-line"></i> Berlin &
                                    Online</span>
                            </div>
                            <h3 class="cs_event_title cs_fs_24 cs_semibold">
                                <a href="event-details.html">UI/UX Design Hackathon</a>
                            </h3>
                            <div class="cs_event_card_bottom">
                                <p class="cs_event_price cs_fs_14 mb-0"><span
                                        class="cs_event_price_value cs_semibold">$49</span> /
                                    early bird</p>
                                <a href="event-details.html" class="cs_text_btn cs_event_btn cs_fs_14">
                                    <span class="cs_btn_text">Reserve Spot</span>
                                    <span><i class="ri-arrow-right-s-line"></i></span>
                                </a>
                            </div>
                        </li>
                        <li class="cs_event_card cs_radius_15 cs_bg_filed" data-src="assets/img/vector-bg-3.svg">
                            <div class="cs_event_card_top">
                                <span class="cs_event_meta cs_fs_12"><i class="ri-calendar-line"></i> Jul 28,
                                    2026</span>
                                <span class="cs_event_meta cs_fs_12"><i class="ri-map-pin-line"></i> Virtual +
                                    Global</span>
                            </div>
                            <h3 class="cs_event_title cs_fs_24 cs_semibold">
                                <a href="event-details.html">No-Code Hackathon</a>
                            </h3>
                            <div class="cs_event_card_bottom">
                                <p class="cs_event_price cs_fs_14 mb-0"><span
                                        class="cs_event_price_value cs_semibold">$15</span> /
                                    student discount</p>
                                <a href="event-details.html" class="cs_text_btn cs_event_btn cs_fs_14">
                                    <span class="cs_btn_text">Reserve Spot</span>
                                    <span><i class="ri-arrow-right-s-line"></i></span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="cs_event_media">
                        <span class="cs_event_glow" aria-hidden="true">
                            <img src="assets/img/wheel-4.svg" alt="Decorative shape">
                        </span>
                        <img src="assets/img/speaker-img-1.png" alt="Instructor ready to host a live event">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Events Section -->
    <!-- Start Latest Trending Courses Section -->
    <section class="cs_course_section cs_latest_course_section data_filter cs_section_padding pt-0">
        <div class="container">
            <div class="cs_section_heading_style_1 text-center" data-aos="fade-up">
                <h2 class="cs_fs_42 cs_medium mb-0">Latest Trending Courses</h2>
                <p class="cs_fs_16 cs_secondary_color mt-2 mb-0">Fresh content, expert instructors, and real-world
                    projects —
                    updated weekly.</p>
            </div>
            <ul class="cs_course_filter_nav cs_fs_16 cs_medium cs_mp_0 mb-4">
                <li><button type="button" class="cs_filter_btn" data-filter="business">Business</button></li>
                <li><button type="button" class="cs_filter_btn" data-filter="it">IT</button></li>
                <li><button type="button" class="cs_filter_btn active" data-filter="python">Python</button></li>
                <li><button type="button" class="cs_filter_btn" data-filter="data-analytics">Data Analytics</button>
                </li>
                <li><button type="button" class="cs_filter_btn" data-filter="project-management">Project
                        Management</button>
                </li>
                <li><button type="button" class="cs_filter_btn" data-filter="cyber-security">Cyber Security</button>
                </li>
            </ul>
            <div class="cs_course_slider_wrap slider-section">
                <div class="cs_product_filter_slider swiper" data-slides-per-view="responsive" data-gap="24"
                    data-autoplay="0" data-loop="1" data-speed="600" data-pagination="0" data-xsm-slides="1"
                    data-sm-slides="1" data-smd-slides="2" data-md-slides="2" data-lg-slides="3" data-xlg-slides="4"
                    data-xxlg-slides="4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-category="python">
                            <div class="cs_course_style_1 cs_white_bg cs_radius_20">
                                <div class="cs_course_thumbnail cs_radius_15">
                                    <img src="assets/img/course-img-1.jpg" alt="Python Zero to Mastery">
                                    <span class="cs_course_badge cs_primary_bg cs_fs_12 cs_white_color">Advanced</span>
                                </div>
                                <div class="cs_course_body">
                                    <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                        <a href="course-details.html">Python Zero to Mastery</a>
                                    </h3>
                                    <div class="cs_course_meta cs_fs_14">
                                        <span class="cs_course_author">Darlene Reeves</span>
                                        <span class="cs_course_rating"><i class="ri-star-fill"></i> 4.8 (350)</span>
                                    </div>
                                    <div class="cs_course_price">
                                        <span class="cs_price_new">$89.99</span>
                                        <del class="cs_price_old">$179.99</del>
                                    </div>
                                    <div class="cs_course_info cs_radius_20">
                                        <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                            <a href="course-details.html">Python Zero to Mastery</a>
                                        </h3>
                                        <p class="cs_course_info_text cs_fs_14">Master Python from the ground up —
                                            syntax, OOP, and real
                                            projects you can ship.</p>
                                        <ul class="cs_course_info_list cs_fs_12 cs_mp_0">
                                            <li><i class="ri-graduation-cap-line"></i>All Levels</li>
                                            <li><i class="ri-time-line"></i>36 hours</li>
                                            <li><i class="ri-video-on-line"></i>240 lectures</li>
                                            <li><i class="ri-star-line"></i>4.8 (350 ratings)</li>
                                        </ul>
                                        <ul class="cs_course_features cs_fs_14 cs_mp_0">
                                            <li>Core Python</li>
                                            <li>OOP</li>
                                            <li>APIs</li>
                                            <li>Testing</li>
                                            <li>Projects</li>
                                        </ul>
                                        <div class="cs_action_btns">
                                            <button type="button" class="cs_primary_btn cs_radius_3 enrollBtn">
                                                <span>Enroll Now</span>
                                                <span><i class="ri-shopping-bag-line"></i></span>
                                            </button>
                                            <button type="button"
                                                class="cs_wishlist_btn cs_gray3_bg cs_black_color cs_radius_3 wishlistBtn">
                                                <span><i class="ri-heart-line"></i></span>
                                            </button>
                                        </div>
                                        <div class="cs_course_price">
                                            <span class="cs_price_new">$89.99</span>
                                            <del class="cs_price_old">$179.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="python">
                            <div class="cs_course_style_1 cs_white_bg cs_radius_20">
                                <div class="cs_course_thumbnail cs_radius_15">
                                    <img src="assets/img/course-img-2.jpg" alt="Data Science with Python">
                                    <span class="cs_course_badge cs_primary_bg cs_fs_12 cs_white_color">Data
                                        Focus</span>
                                </div>
                                <div class="cs_course_body">
                                    <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                        <a href="course-details.html">Data Science with Python</a>
                                    </h3>
                                    <div class="cs_course_meta cs_fs_14">
                                        <span class="cs_course_author">Judith Culp</span>
                                        <span class="cs_course_rating"><i class="ri-star-fill"></i> 4.8 (750)</span>
                                    </div>
                                    <div class="cs_course_price">
                                        <span class="cs_price_new">$99.99</span>
                                        <del class="cs_price_old">$199.99</del>
                                    </div>
                                    <div class="cs_course_info cs_radius_20">
                                        <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                            <a href="course-details.html">Data Science with Python</a>
                                        </h3>
                                        <p class="cs_course_info_text cs_fs_14">Turn raw data into insight with Pandas,
                                            NumPy and machine
                                            learning workflows.</p>
                                        <ul class="cs_course_info_list cs_fs_12 cs_mp_0">
                                            <li><i class="ri-graduation-cap-line"></i>Intermediate</li>
                                            <li><i class="ri-time-line"></i>42 hours</li>
                                            <li><i class="ri-video-on-line"></i>265 lectures</li>
                                            <li><i class="ri-star-line"></i>4.8 (750 ratings)</li>
                                        </ul>
                                        <ul class="cs_course_features cs_fs_14 cs_mp_0">
                                            <li>Pandas</li>
                                            <li>NumPy</li>
                                            <li>Visualization</li>
                                            <li>Machine Learning</li>
                                            <li>Case Studies</li>
                                        </ul>
                                        <div class="cs_action_btns">
                                            <button type="button" class="cs_primary_btn cs_radius_3 enrollBtn">
                                                <span>Enroll Now</span>
                                                <span><i class="ri-shopping-bag-line"></i></span>
                                            </button>
                                            <button type="button"
                                                class="cs_wishlist_btn cs_gray3_bg cs_black_color cs_radius_3 wishlistBtn">
                                                <span><i class="ri-heart-line"></i></span>
                                            </button>
                                        </div>
                                        <div class="cs_course_price">
                                            <span class="cs_price_new">$99.99</span>
                                            <del class="cs_price_old">$199.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="python">
                            <div class="cs_course_style_1 cs_white_bg cs_radius_20">
                                <div class="cs_course_thumbnail cs_radius_15">
                                    <img src="assets/img/course-img-3.jpg" alt="Django Mastery: Full-Stack">
                                    <span
                                        class="cs_course_badge cs_primary_bg cs_fs_12 cs_white_color">Development</span>
                                </div>
                                <div class="cs_course_body">
                                    <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                        <a href="course-details.html">Django Mastery: Full-Stack</a>
                                    </h3>
                                    <div class="cs_course_meta cs_fs_14">
                                        <span class="cs_course_author">Larry Beale</span>
                                        <span class="cs_course_rating"><i class="ri-star-fill"></i> 4.9 (4,670)</span>
                                    </div>
                                    <div class="cs_course_price">
                                        <span class="cs_price_new">$109.99</span>
                                        <del class="cs_price_old">$219.99</del>
                                    </div>
                                    <div class="cs_course_info cs_radius_20">
                                        <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                            <a href="course-details.html">Django Mastery: Full-Stack</a>
                                        </h3>
                                        <p class="cs_course_info_text cs_fs_14">Build and deploy production-ready web
                                            apps with Django,
                                            REST APIs and PostgreSQL.</p>
                                        <ul class="cs_course_info_list cs_fs_12 cs_mp_0">
                                            <li><i class="ri-graduation-cap-line"></i>Advanced</li>
                                            <li><i class="ri-time-line"></i>38 hours</li>
                                            <li><i class="ri-video-on-line"></i>228 lectures</li>
                                            <li><i class="ri-star-line"></i>4.9 (4,670 ratings)</li>
                                        </ul>
                                        <ul class="cs_course_features cs_fs_14 cs_mp_0">
                                            <li>Django ORM</li>
                                            <li>REST API</li>
                                            <li>Auth</li>
                                            <li>PostgreSQL</li>
                                            <li>Deployment</li>
                                        </ul>
                                        <div class="cs_action_btns">
                                            <button type="button" class="cs_primary_btn cs_radius_3 enrollBtn">
                                                <span>Enroll Now</span>
                                                <span><i class="ri-shopping-bag-line"></i></span>
                                            </button>
                                            <button type="button"
                                                class="cs_wishlist_btn cs_gray3_bg cs_black_color cs_radius_3 wishlistBtn">
                                                <span><i class="ri-heart-line"></i></span>
                                            </button>
                                        </div>
                                        <div class="cs_course_price">
                                            <span class="cs_price_new">$109.99</span>
                                            <del class="cs_price_old">$219.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="python">
                            <div class="cs_course_style_1 cs_white_bg cs_radius_20">
                                <div class="cs_course_thumbnail cs_radius_15">
                                    <img src="assets/img/course-img-4.jpg" alt="Automation with Python">
                                    <span class="cs_course_badge cs_primary_bg cs_fs_12 cs_white_color">Expert</span>
                                </div>
                                <div class="cs_course_body">
                                    <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                        <a href="course-details.html">Automation with Python</a>
                                    </h3>
                                    <div class="cs_course_meta cs_fs_14">
                                        <span class="cs_course_author">Miguel Robinson</span>
                                        <span class="cs_course_rating"><i class="ri-star-fill"></i> 4.8 (1,775)</span>
                                    </div>
                                    <div class="cs_course_price">
                                        <span class="cs_price_new">$59.99</span>
                                        <del class="cs_price_old">$129.99</del>
                                    </div>
                                    <div class="cs_course_info cs_radius_20">
                                        <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                            <a href="course-details.html">Automation with Python</a>
                                        </h3>
                                        <p class="cs_course_info_text cs_fs_14">Automate boring tasks — files,
                                            spreadsheets, emails and
                                            web scraping with scripts.</p>
                                        <ul class="cs_course_info_list cs_fs_12 cs_mp_0">
                                            <li><i class="ri-graduation-cap-line"></i>Expert</li>
                                            <li><i class="ri-time-line"></i>24 hours</li>
                                            <li><i class="ri-video-on-line"></i>160 lectures</li>
                                            <li><i class="ri-star-line"></i>4.8 (1,775 ratings)</li>
                                        </ul>
                                        <ul class="cs_course_features cs_fs_14 cs_mp_0">
                                            <li>Scripting</li>
                                            <li>Web Scraping</li>
                                            <li>Excel</li>
                                            <li>Selenium</li>
                                            <li>Scheduling</li>
                                        </ul>
                                        <div class="cs_action_btns">
                                            <button type="button" class="cs_primary_btn cs_radius_3 enrollBtn">
                                                <span>Enroll Now</span>
                                                <span><i class="ri-shopping-bag-line"></i></span>
                                            </button>
                                            <button type="button"
                                                class="cs_wishlist_btn cs_gray3_bg cs_black_color cs_radius_3 wishlistBtn">
                                                <span><i class="ri-heart-line"></i></span>
                                            </button>
                                        </div>
                                        <div class="cs_course_price">
                                            <span class="cs_price_new">$59.99</span>
                                            <del class="cs_price_old">$129.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="business">
                            <div class="cs_course_style_1 cs_white_bg cs_radius_20">
                                <div class="cs_course_thumbnail cs_radius_15">
                                    <img src="assets/img/course-img-5.jpg" alt="Startup Growth & Business Strategy">
                                    <span
                                        class="cs_course_badge cs_primary_bg cs_fs_12 cs_white_color">Bestseller</span>
                                </div>
                                <div class="cs_course_body">
                                    <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                        <a href="course-details.html">Startup Growth & Business Strategy</a>
                                    </h3>
                                    <div class="cs_course_meta cs_fs_14">
                                        <span class="cs_course_author">Tammi Allison</span>
                                        <span class="cs_course_rating"><i class="ri-star-fill"></i> 4.7 (2,140)</span>
                                    </div>
                                    <div class="cs_course_price">
                                        <span class="cs_price_new">$74.99</span>
                                        <del class="cs_price_old">$159.99</del>
                                    </div>
                                    <div class="cs_course_info cs_radius_20">
                                        <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                            <a href="course-details.html">Startup Growth & Business Strategy</a>
                                        </h3>
                                        <p class="cs_course_info_text cs_fs_14">Validate ideas, find product-market fit
                                            and scale growth
                                            with proven frameworks.</p>
                                        <ul class="cs_course_info_list cs_fs_12 cs_mp_0">
                                            <li><i class="ri-graduation-cap-line"></i>All Levels</li>
                                            <li><i class="ri-time-line"></i>26 hours</li>
                                            <li><i class="ri-video-on-line"></i>145 lectures</li>
                                            <li><i class="ri-star-line"></i>4.7 (2,140 ratings)</li>
                                        </ul>
                                        <ul class="cs_course_features cs_fs_14 cs_mp_0">
                                            <li>Market Fit</li>
                                            <li>Growth Loops</li>
                                            <li>Pricing</li>
                                            <li>Pitching</li>
                                            <li>Metrics</li>
                                        </ul>
                                        <div class="cs_action_btns">
                                            <button type="button" class="cs_primary_btn cs_radius_3 enrollBtn">
                                                <span>Enroll Now</span>
                                                <span><i class="ri-shopping-bag-line"></i></span>
                                            </button>
                                            <button type="button"
                                                class="cs_wishlist_btn cs_gray3_bg cs_black_color cs_radius_3 wishlistBtn">
                                                <span><i class="ri-heart-line"></i></span>
                                            </button>
                                        </div>
                                        <div class="cs_course_price">
                                            <span class="cs_price_new">$74.99</span>
                                            <del class="cs_price_old">$159.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="business">
                            <div class="cs_course_style_1 cs_white_bg cs_radius_20">
                                <div class="cs_course_thumbnail cs_radius_15">
                                    <img src="assets/img/course-img-6.jpg" alt="Financial Modeling for Founders">
                                    <span class="cs_course_badge cs_primary_bg cs_fs_12 cs_white_color">New</span>
                                </div>
                                <div class="cs_course_body">
                                    <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                        <a href="course-details.html">Financial Modeling for Founders</a>
                                    </h3>
                                    <div class="cs_course_meta cs_fs_14">
                                        <span class="cs_course_author">Dennis Churchwell</span>
                                        <span class="cs_course_rating"><i class="ri-star-fill"></i> 4.6 (980)</span>
                                    </div>
                                    <div class="cs_course_price">
                                        <span class="cs_price_new">$64.99</span>
                                        <del class="cs_price_old">$139.99</del>
                                    </div>
                                    <div class="cs_course_info cs_radius_20">
                                        <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                            <a href="course-details.html">Financial Modeling for Founders</a>
                                        </h3>
                                        <p class="cs_course_info_text cs_fs_14">Build investor-ready models — forecasts,
                                            cap tables and
                                            valuation from scratch.</p>
                                        <ul class="cs_course_info_list cs_fs_12 cs_mp_0">
                                            <li><i class="ri-graduation-cap-line"></i>Intermediate</li>
                                            <li><i class="ri-time-line"></i>22 hours</li>
                                            <li><i class="ri-video-on-line"></i>130 lectures</li>
                                            <li><i class="ri-star-line"></i>4.6 (980 ratings)</li>
                                        </ul>
                                        <ul class="cs_course_features cs_fs_14 cs_mp_0">
                                            <li>Forecasting</li>
                                            <li>Cap Tables</li>
                                            <li>Valuation</li>
                                            <li>Unit Economics</li>
                                            <li>Excel</li>
                                        </ul>
                                        <div class="cs_action_btns">
                                            <button type="button" class="cs_primary_btn cs_radius_3 enrollBtn">
                                                <span>Enroll Now</span>
                                                <span><i class="ri-shopping-bag-line"></i></span>
                                            </button>
                                            <button type="button"
                                                class="cs_wishlist_btn cs_gray3_bg cs_black_color cs_radius_3 wishlistBtn">
                                                <span><i class="ri-heart-line"></i></span>
                                            </button>
                                        </div>
                                        <div class="cs_course_price">
                                            <span class="cs_price_new">$64.99</span>
                                            <del class="cs_price_old">$139.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="it">
                            <div class="cs_course_style_1 cs_white_bg cs_radius_20">
                                <div class="cs_course_thumbnail cs_radius_15">
                                    <img src="assets/img/course-img-7.jpg" alt="Cloud Computing with AWS">
                                    <span class="cs_course_badge cs_primary_bg cs_fs_12 cs_white_color">Top Rated</span>
                                </div>
                                <div class="cs_course_body">
                                    <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                        <a href="course-details.html">Cloud Computing with AWS</a>
                                    </h3>
                                    <div class="cs_course_meta cs_fs_14">
                                        <span class="cs_course_author">Micheal Cabot</span>
                                        <span class="cs_course_rating"><i class="ri-star-fill"></i> 4.9 (5,320)</span>
                                    </div>
                                    <div class="cs_course_price">
                                        <span class="cs_price_new">$94.99</span>
                                        <del class="cs_price_old">$189.99</del>
                                    </div>
                                    <div class="cs_course_info cs_radius_20">
                                        <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                            <a href="course-details.html">Cloud Computing with AWS</a>
                                        </h3>
                                        <p class="cs_course_info_text cs_fs_14">Design, deploy and secure scalable cloud
                                            infrastructure on
                                            AWS — hands-on labs.</p>
                                        <ul class="cs_course_info_list cs_fs_12 cs_mp_0">
                                            <li><i class="ri-graduation-cap-line"></i>Advanced</li>
                                            <li><i class="ri-time-line"></i>40 hours</li>
                                            <li><i class="ri-video-on-line"></i>252 lectures</li>
                                            <li><i class="ri-star-line"></i>4.9 (5,320 ratings)</li>
                                        </ul>
                                        <ul class="cs_course_features cs_fs_14 cs_mp_0">
                                            <li>EC2 & S3</li>
                                            <li>Networking</li>
                                            <li>Serverless</li>
                                            <li>IAM Security</li>
                                            <li>Certification</li>
                                        </ul>
                                        <div class="cs_action_btns">
                                            <button type="button" class="cs_primary_btn cs_radius_3 enrollBtn">
                                                <span>Enroll Now</span>
                                                <span><i class="ri-shopping-bag-line"></i></span>
                                            </button>
                                            <button type="button"
                                                class="cs_wishlist_btn cs_gray3_bg cs_black_color cs_radius_3 wishlistBtn">
                                                <span><i class="ri-heart-line"></i></span>
                                            </button>
                                        </div>
                                        <div class="cs_course_price">
                                            <span class="cs_price_new">$94.99</span>
                                            <del class="cs_price_old">$189.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="data-analytics">
                            <div class="cs_course_style_1 cs_white_bg cs_radius_20">
                                <div class="cs_course_thumbnail cs_radius_15">
                                    <img src="assets/img/course-img-8.jpg" alt="Power BI & SQL for Analysts">
                                    <span class="cs_course_badge cs_primary_bg cs_fs_12 cs_white_color">Hot</span>
                                </div>
                                <div class="cs_course_body">
                                    <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                        <a href="course-details.html">Power BI & SQL for Analysts</a>
                                    </h3>
                                    <div class="cs_course_meta cs_fs_14">
                                        <span class="cs_course_author">Fannie Sargent</span>
                                        <span class="cs_course_rating"><i class="ri-star-fill"></i> 4.8 (3,410)</span>
                                    </div>
                                    <div class="cs_course_price">
                                        <span class="cs_price_new">$79.99</span>
                                        <del class="cs_price_old">$149.99</del>
                                    </div>
                                    <div class="cs_course_info cs_radius_20">
                                        <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                            <a href="course-details.html">Power BI & SQL for Analysts</a>
                                        </h3>
                                        <p class="cs_course_info_text cs_fs_14">Query, model and visualize business data
                                            with SQL and
                                            interactive Power BI dashboards.</p>
                                        <ul class="cs_course_info_list cs_fs_12 cs_mp_0">
                                            <li><i class="ri-graduation-cap-line"></i>Intermediate</li>
                                            <li><i class="ri-time-line"></i>30 hours</li>
                                            <li><i class="ri-video-on-line"></i>195 lectures</li>
                                            <li><i class="ri-star-line"></i>4.8 (3,410 ratings)</li>
                                        </ul>
                                        <ul class="cs_course_features cs_fs_14 cs_mp_0">
                                            <li>SQL Joins</li>
                                            <li>Data Modeling</li>
                                            <li>DAX</li>
                                            <li>Dashboards</li>
                                            <li>Reporting</li>
                                        </ul>
                                        <div class="cs_action_btns">
                                            <button type="button" class="cs_primary_btn cs_radius_3 enrollBtn">
                                                <span>Enroll Now</span>
                                                <span><i class="ri-shopping-bag-line"></i></span>
                                            </button>
                                            <button type="button"
                                                class="cs_wishlist_btn cs_gray3_bg cs_black_color cs_radius_3 wishlistBtn">
                                                <span><i class="ri-heart-line"></i></span>
                                            </button>
                                        </div>
                                        <div class="cs_course_price">
                                            <span class="cs_price_new">$79.99</span>
                                            <del class="cs_price_old">$149.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="project-management">
                            <div class="cs_course_style_1 cs_white_bg cs_radius_20">
                                <div class="cs_course_thumbnail cs_radius_15">
                                    <img src="assets/img/course-img-9.jpg" alt="Agile & Scrum Master Complete">
                                    <span class="cs_course_badge cs_primary_bg cs_fs_12 cs_white_color">Certified</span>
                                </div>
                                <div class="cs_course_body">
                                    <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                        <a href="course-details.html">Agile & Scrum Master Complete</a>
                                    </h3>
                                    <div class="cs_course_meta cs_fs_14">
                                        <span class="cs_course_author">Judith Culp</span>
                                        <span class="cs_course_rating"><i class="ri-star-fill"></i> 4.7 (6,120)</span>
                                    </div>
                                    <div class="cs_course_price">
                                        <span class="cs_price_new">$69.99</span>
                                        <del class="cs_price_old">$144.99</del>
                                    </div>
                                    <div class="cs_course_info cs_radius_20">
                                        <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                            <a href="course-details.html">Agile & Scrum Master Complete</a>
                                        </h3>
                                        <p class="cs_course_info_text cs_fs_14">Lead agile teams with confidence —
                                            sprints, ceremonies and
                                            certification prep.</p>
                                        <ul class="cs_course_info_list cs_fs_12 cs_mp_0">
                                            <li><i class="ri-graduation-cap-line"></i>All Levels</li>
                                            <li><i class="ri-time-line"></i>27 hours</li>
                                            <li><i class="ri-video-on-line"></i>175 lectures</li>
                                            <li><i class="ri-star-line"></i>4.7 (6,120 ratings)</li>
                                        </ul>
                                        <ul class="cs_course_features cs_fs_14 cs_mp_0">
                                            <li>Scrum</li>
                                            <li>Kanban</li>
                                            <li>Backlogs</li>
                                            <li>Retrospectives</li>
                                            <li>Certification</li>
                                        </ul>
                                        <div class="cs_action_btns">
                                            <button type="button" class="cs_primary_btn cs_radius_3 enrollBtn">
                                                <span>Enroll Now</span>
                                                <span><i class="ri-shopping-bag-line"></i></span>
                                            </button>
                                            <button type="button"
                                                class="cs_wishlist_btn cs_gray3_bg cs_black_color cs_radius_3 wishlistBtn">
                                                <span><i class="ri-heart-line"></i></span>
                                            </button>
                                        </div>
                                        <div class="cs_course_price">
                                            <span class="cs_price_new">$69.99</span>
                                            <del class="cs_price_old">$144.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="cyber-security">
                            <div class="cs_course_style_1 cs_white_bg cs_radius_20">
                                <div class="cs_course_thumbnail cs_radius_15">
                                    <img src="assets/img/course-img-10.jpg" alt="Ethical Hacking Fundamentals">
                                    <span class="cs_course_badge cs_primary_bg cs_fs_12 cs_white_color">Advanced</span>
                                </div>
                                <div class="cs_course_body">
                                    <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                        <a href="course-details.html">Ethical Hacking Fundamentals</a>
                                    </h3>
                                    <div class="cs_course_meta cs_fs_14">
                                        <span class="cs_course_author">Larry Beale</span>
                                        <span class="cs_course_rating"><i class="ri-star-fill"></i> 4.9 (2,860)</span>
                                    </div>
                                    <div class="cs_course_price">
                                        <span class="cs_price_new">$84.99</span>
                                        <del class="cs_price_old">$169.99</del>
                                    </div>
                                    <div class="cs_course_info cs_radius_20">
                                        <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                            <a href="course-details.html">Ethical Hacking Fundamentals</a>
                                        </h3>
                                        <p class="cs_course_info_text cs_fs_14">Think like an attacker — recon,
                                            exploitation and defence
                                            in a safe lab environment.</p>
                                        <ul class="cs_course_info_list cs_fs_12 cs_mp_0">
                                            <li><i class="ri-graduation-cap-line"></i>Advanced</li>
                                            <li><i class="ri-time-line"></i>34 hours</li>
                                            <li><i class="ri-video-on-line"></i>205 lectures</li>
                                            <li><i class="ri-star-line"></i>4.9 (2,860 ratings)</li>
                                        </ul>
                                        <ul class="cs_course_features cs_fs_14 cs_mp_0">
                                            <li>Recon</li>
                                            <li>Network Security</li>
                                            <li>Web Exploits</li>
                                            <li>Kali Linux</li>
                                            <li>Reporting</li>
                                        </ul>
                                        <div class="cs_action_btns">
                                            <button type="button" class="cs_primary_btn cs_radius_3 enrollBtn">
                                                <span>Enroll Now</span>
                                                <span><i class="ri-shopping-bag-line"></i></span>
                                            </button>
                                            <button type="button"
                                                class="cs_wishlist_btn cs_gray3_bg cs_black_color cs_radius_3 wishlistBtn">
                                                <span><i class="ri-heart-line"></i></span>
                                            </button>
                                        </div>
                                        <div class="cs_course_price">
                                            <span class="cs_price_new">$84.99</span>
                                            <del class="cs_price_old">$169.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs_arrows_style_1">
                    <button type="button" class="cs_slider_arrow slider-prev" aria-label="Previous courses">
                        <i class="ri-arrow-left-line"></i>
                    </button>
                    <button type="button" class="cs_slider_arrow slider-next" aria-label="Next courses">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest Trending Courses Section -->
    <!-- Start Join Banner Section -->
    <section class="cs_join_section">
        <div class="container">
            <div class="row cs_gap_y_16">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="cs_join_banner_1 cs_primary_bg cs_radius_20 cs_bg_filed"
                        data-src="assets/img/vector-bg-4.svg">
                        <div class="cs_join_content">
                            <h3 class="cs_join_title cs_fs_24 cs_semibold cs_white_color">Become a Student</h3>
                            <p class="cs_join_subtitle cs_fs_16 cs_gray3_color">Unlock 500+ expert-led courses, earn
                                certificates,
                                and join a global community of passionate learners.</p>
                            <ul class="cs_join_features cs_fs_14 cs_mp_0">
                                <li><i class="ri-checkbox-circle-fill"></i>Unlimited access to premium content</li>
                                <li><i class="ri-checkbox-circle-fill"></i>Career-oriented projects & quizzes</li>
                                <li><i class="ri-checkbox-circle-fill"></i>Shareable certificates & badges</li>
                                <li><i class="ri-checkbox-circle-fill"></i>Peer collaboration & mentorship</li>
                            </ul>
                        </div>
                        <a href="login.html" class="cs_primary_btn cs_small_btn cs_join_btn cs_fs_16">
                            <span class="cs_btn_text">Join Now</span>
                            <span><i class="ri-arrow-right-s-line"></i></span>
                        </a>
                        <span class="cs_join_shape cs_accent_bg" aria-hidden="true"></span>
                        <img class="cs_join_person" src="assets/img/student-img-1.png"
                            alt="Smiling student holding notebooks">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="cs_join_banner_1 cs_type_1 cs_radius_20">
                        <div class="cs_join_content">
                            <h3 class="cs_join_title cs_fs_24 cs_semibold cs_white_color">Become an Instructor</h3>
                            <p class="cs_join_subtitle cs_fs_16 cs_gray3_color">Empower thousands of students by sharing
                                your
                                knowledge. Build courses, and grow your brand.</p>
                            <ul class="cs_join_features cs_fs_14 cs_mp_0">
                                <li><i class="ri-checkbox-circle-fill"></i>Industry-leading revenue share</li>
                                <li><i class="ri-checkbox-circle-fill"></i>Easy course creation tools</li>
                                <li><i class="ri-checkbox-circle-fill"></i>Reach global learners</li>
                                <li><i class="ri-checkbox-circle-fill"></i>Dedicated instructor support</li>
                            </ul>
                        </div>
                        <a href="login.html" class="cs_primary_btn cs_small_btn cs_join_btn cs_fs_16">
                            <span class="cs_btn_text">Join Now</span>
                            <span><i class="ri-arrow-right-s-line"></i></span>
                        </a>
                        <span class="cs_join_shape cs_warning_bg" aria-hidden="true"></span>
                        <img class="cs_join_person" src="assets/img/instructor-img-2.png"
                            alt="Smiling student holding notebooks">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Join Banner Section -->
    <!-- Start FAQ Section -->
    <section class="cs_faq_section cs_section_padding">
        <div class="container">
            <div class="cs_section_heading_style_1 cs_center_column text-center mb-4" data-aos="fade-up">
                <h2 class="cs_section_title cs_fs_42 cs_medium mb-2">Frequently Asked Questions</h2>
                <p class="cs_section_subtitle mb-0">Everything you need to know about Lerntix. Find clarity in seconds.
                </p>
            </div>
            <div class="cs_faq_wrap">
                <div class="cs_faq_media">
                    <div class="cs_help_card cs_radius_20">
                        <div class="cs_help_thumbnail cs_radius_15">
                            <img src="assets/img/help-desk-1.jpg" alt="Laptop showing the Lerntix help desk">
                        </div>
                        <h3 class="cs_help_title cs_fs_24 cs_semibold">Still Need Help?</h3>
                        <p class="cs_help_text cs_fs_14">Our support team is available 24/7 to guide you through your
                            learning
                            journey.</p>
                        <a href="mailto:hello@lerntix.com" class="cs_help_mail cs_fs_12">
                            <i class="ri-mail-line"></i>
                            <span>hello@lerntix.com</span>
                        </a>
                    </div>
                    <span class="cs_faq_shape" aria-hidden="true">
                        <img src="assets/img/wheel.svg" alt="Decorative shape">
                    </span>
                </div>
                <div class="cs_accordians_style_1 position-relative z-1">
                    <div class="cs_accordian active">
                        <div class="cs_accordian_head">
                            <h3 class="cs_accordian_title cs_fs_18 cs_medium mb-0">What makes Lerntix different from
                                other LMS
                                platforms?</h3>
                            <span class="cs_accordian_toggle" aria-hidden="true"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_accordian_body">
                            Lerntix combines AI-driven learning paths, hands-on labs, and real-time progress analytics.
                            Unlike
                            traditional LMS, we offer adaptive quizzes, industry-verified certificates, and a vibrant
                            mentor
                            community — all in one intuitive dashboard.
                        </div>
                    </div>
                    <div class="cs_accordian">
                        <div class="cs_accordian_head">
                            <h3 class="cs_accordian_title cs_fs_18 cs_medium mb-0">Are the certificates recognized by
                                employers?
                            </h3>
                            <span class="cs_accordian_toggle" aria-hidden="true"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_accordian_body">
                            Every certificate is co-signed by our industry partners and comes with a verifiable link you
                            can add
                            straight to your LinkedIn profile or résumé.
                        </div>
                    </div>
                    <div class="cs_accordian">
                        <div class="cs_accordian_head">
                            <h3 class="cs_accordian_title cs_fs_18 cs_medium mb-0">Can I try Lerntix before subscribing?
                            </h3>
                            <span class="cs_accordian_toggle" aria-hidden="true"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_accordian_body">
                            Yes. Start with a 7-day free trial that unlocks full access to every course, lab, and quiz —
                            no card
                            required to begin.
                        </div>
                    </div>
                    <div class="cs_accordian">
                        <div class="cs_accordian_head">
                            <h3 class="cs_accordian_title cs_fs_18 cs_medium mb-0">Are the courses self-paced or live?
                            </h3>
                            <span class="cs_accordian_toggle" aria-hidden="true"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_accordian_body">
                            Both. Most tracks are self-paced with lifetime access, while selected cohorts run weekly
                            live sessions
                            and Q & A with the instructor.
                        </div>
                    </div>
                    <div class="cs_accordian">
                        <div class="cs_accordian_head">
                            <h3 class="cs_accordian_title cs_fs_18 cs_medium mb-0">Is there a mobile app for offline
                                learning?</h3>
                            <span class="cs_accordian_toggle" aria-hidden="true"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_accordian_body">
                            Our iOS and Android apps let you download lessons, keep your progress in sync, and pick up
                            right where
                            you left off — even without a connection.
                        </div>
                    </div>
                    <div class="cs_accordian">
                        <div class="cs_accordian_head">
                            <h3 class="cs_accordian_title cs_fs_18 cs_medium mb-0">Can teams or businesses use Lerntix?
                            </h3>
                            <span class="cs_accordian_toggle" aria-hidden="true"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_accordian_body">
                            Lerntix for Business adds seat management, custom learning paths, and team analytics so you
                            can upskill
                            your whole organisation from one dashboard.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ Section -->
    <!-- Start Funfact Section -->
    <section class="cs_funfact_section cs_section_padding">
        <div class="container">
            <div class="cs_section_heading_style_1 cs_center_column text-center mb-4" data-aos="fade-up">
                <h2 class="cs_section_title cs_fs_42 cs_medium mb-2">Loved by Teams Around the World</h2>
                <p class="cs_section_subtitle mb-0">From ambitious individuals to Fortune 500 companies, millions rely
                    on
                    Lerntix to upskill and grow.</p>
            </div>
            <div class="cs_funfact_wrapper">
                <div class="cs_funfact_style_1 cs_center_column cs_radius_20 cs_bg_filed text-center"
                    data-src="assets/img/vector-bg-5.svg" data-aos="fade-up">
                    <div class="cs_funfact_icon cs_radius_20">
                        <img src="assets/img/icons/learner.svg" alt="Active learners">
                    </div>
                    <h3 class="cs_funfact_number cs_fs_64 cs_medium  mb-0">
                        <span class="odometer" data-count-to="1.2"></span>M+
                    </h3>
                    <p class="cs_funfact_label mb-0">Active learners</p>
                </div>
                <div class="cs_funfact_style_1 cs_center_column cs_radius_20 cs_bg_filed text-center"
                    data-src="assets/img/vector-bg-5.svg" data-aos="fade-up" data-aos-delay="100">
                    <div class="cs_funfact_icon cs_radius_20">
                        <img src="assets/img/icons/globe.svg" alt="Countries">
                    </div>
                    <h3 class="cs_funfact_number cs_fs_64 cs_medium  mb-0">
                        <span class="odometer" data-count-to="150"></span>+
                    </h3>
                    <p class="cs_funfact_label mb-0">Countries</p>
                </div>
                <div class="cs_funfact_style_1 cs_center_column cs_radius_20 cs_bg_filed text-center"
                    data-src="assets/img/vector-bg-5.svg" data-aos="fade-up" data-aos-delay="200">
                    <div class="cs_funfact_icon cs_radius_20">
                        <img src="assets/img/icons/clients.svg" alt="Enterprise clients">
                    </div>
                    <h3 class="cs_funfact_number cs_fs_64 cs_medium  mb-0">
                        <span class="odometer" data-count-to="8.2"></span>k+
                    </h3>
                    <p class="cs_funfact_label mb-0">Enterprise clients</p>
                </div>
                <div class="cs_funfact_style_1 cs_center_column cs_radius_20 cs_bg_filed text-center"
                    data-src="assets/img/vector-bg-5.svg" data-aos="fade-up">
                    <div class="cs_funfact_icon cs_radius_20">
                        <img src="assets/img/icons/certified-badge.svg" alt="Certificates issued">
                    </div>
                    <h3 class="cs_funfact_number cs_fs_64 cs_medium  mb-0">
                        <span class="odometer" data-count-to="450"></span>k+
                    </h3>
                    <p class="cs_funfact_label mb-0">Certificates issued</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Funfact Section -->
</main>





<?php
$content = ob_get_clean();
require 'layout.php';
?>