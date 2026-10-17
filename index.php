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
                        <img src="assets/img/hero/ds-banner-one.jpg" alt="Banner 1" class="desktop-banner">
                        <img src="assets/img/hero/m-banner-one.jpg" alt="Banner 1" class="mobile-banner">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/img/hero/ds-banner-three.jpg" alt="Banner 3" class="desktop-banner">
                        <img src="assets/img/hero/m-banner-three.jpg" alt="Banner 3" class="mobile-banner">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/img/hero/ds-banner-two.jpg" alt="Banner 2" class="desktop-banner">
                        <img src="assets/img/hero/m-banner-two.jpg" alt="Banner 2" class="mobile-banner">
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

    <!-- Start Universities Logo Section -->
    <section class="cs_partners_section durasetu_universities_section" data-aos="fade-up">
        <div class="container">
            <div class="cs_partners_wrap">
                <h2 class="cs_partners_title cs_fs_20 cs_semibold mb-0">
                    Top Online Universities
                </h2>
                <div class="cs_partners_marquee swiper" data-marquee="1" data-autoplay="1" data-speed="6000"
                    data-slides-per-view="responsive" data-gap="24" data-xxlg-gap="65" data-xsm-slides="3"
                    data-sm-slides="3" data-smd-slides="3" data-md-slides="4" data-lg-slides="5" data-xlg-slides="6"
                    data-xxlg-slides="6">
                    <div class="swiper-wrapper cs_partners_track">
                        <?php foreach ($universities as $university): ?>
                            <div class="swiper-slide">
                                <div class="cs_partner_logo durasetu_university_logo">
                                    <img src="<?= htmlspecialchars($university['logo']); ?>"
                                        alt="<?= htmlspecialchars($university['name']); ?>" loading="lazy">

                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Universities Logo Section -->

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
                        data-aos="fade-up" <?php if ($category['delay'] > 0): ?>
                        data-aos-delay="<?php echo $category['delay']; ?>" <?php endif; ?>>
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
                                <img src="<?php echo htmlspecialchars($category['image']); ?>"
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
                    <p class="cs_uni_subtitle">Discover UGC-recognized universities offering flexible online degree
                        programs.</p>
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
                        <span class="cs_login_text">All Universities</span>
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

                <div class="cs_slider cs_slider_3 swiper" data-slides-per-view="responsive" data-xxlg-slides="4"
                    data-xlg-slides="3" data-lg-slides="3" data-md-slides="2" data-sm-slides="1" data-xsm-slides="1"
                    data-gap="20" data-speed="600" data-loop="1" data-autoplay="0" data-pagination-type="bullets">
                    <div class="swiper-wrapper">
                        <?php if (!empty($universities)): ?>
                            <?php foreach (array_slice($universities, 0, 8) as $uni): ?>
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
                                                <a
                                                    href="<?php echo htmlspecialchars($uni['url']); ?>"><?php echo htmlspecialchars($uni['name']); ?></a>
                                            </h3>
                                            <p class="cs_uni_card_accred"><?php echo htmlspecialchars($uni['accreditation']); ?>
                                            </p>

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

    <!-- Start Trending / Popular Courses Section -->
    <section class="cs_course_section cs_popular_courses_section cs_section_padding pb-0" data-aos="fade-up">
        <div class="container">
            <div class="cs_pop_heading_row mb-4 mb-lg-5">
                <div class="cs_pop_heading_text">
                    <h2 class="cs_pop_title cs_fs_42 cs_medium mb-2">Explore <span>Popular Courses</span></h2>
                    <p class="cs_pop_subtitle cs_fs_16 cs_secondary_color mb-0">Choose from a wide range of
                        career-focused online programs and find the right course for your future.</p>
                </div>
                <div class="cs_pop_heading_btn">
                    <a href="courses.php" class="cs_primary_btn cs_radius_50">
                        <span>View All Courses</span>
                        <span><i class="ri-arrow-right-line"></i></span>
                    </a>
                </div>
            </div>
            <div class="cs_course_slider_wrap cs_pop_slider_wrapper slider-section position-relative">
                <div class="cs_product_filter_slider swiper" data-slides-per-view="responsive" data-gap="20"
                    data-autoplay="0" data-loop="1" data-speed="600" data-pagination-type="bullets" data-xsm-slides="1"
                    data-sm-slides="2" data-smd-slides="2" data-md-slides="3" data-lg-slides="3" data-xlg-slides="4"
                    data-xxlg-slides="4">
                    <div class="swiper-wrapper">
                        <?php if (!empty($popular_courses)): ?>
                            <?php foreach ($popular_courses as $course): ?>
                                <div class="swiper-slide">
                                    <div class="cs_pop_card">
                                        <div class="cs_pop_thumb_wrap">
                                            <img src="<?php echo htmlspecialchars($course['image']); ?>"
                                                alt="<?php echo htmlspecialchars($course['title']); ?>"
                                                class="cs_pop_thumb_img">
                                            <div class="cs_pop_corner_slope"></div>
                                            <div class="cs_pop_icon_badge">
                                                <i class="<?php echo htmlspecialchars($course['icon']); ?>"></i>
                                            </div>
                                        </div>

                                        <!-- Card Body -->
                                        <div class="cs_pop_card_body">
                                            <h3 class="cs_pop_card_title">
                                                <a href="<?php echo htmlspecialchars($course['url']); ?>">
                                                    <?php echo htmlspecialchars($course['title']); ?>
                                                </a>
                                            </h3>
                                            <h4 class="cs_pop_card_sub"><?php echo htmlspecialchars($course['subtitle']); ?>
                                            </h4>
                                            <p class="cs_pop_card_desc"><?php echo htmlspecialchars($course['desc']); ?></p>

                                            <!-- Meta Details (Duration & Mode) -->
                                            <div class="cs_pop_meta_row">
                                                <div class="cs_pop_meta_item">
                                                    <span class="cs_pop_meta_icon"><i class="ri-calendar-line"></i></span>
                                                    <div class="cs_pop_meta_text">
                                                        <strong><?php echo htmlspecialchars($course['duration']); ?></strong>
                                                        <span>Duration</span>
                                                    </div>
                                                </div>
                                                <div class="cs_pop_meta_item">
                                                    <span class="cs_pop_meta_icon"><i class="ri-computer-line"></i></span>
                                                    <div class="cs_pop_meta_text">
                                                        <strong><?php echo htmlspecialchars($course['mode']); ?></strong>
                                                        <span>Mode</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Card Button -->
                                            <div class="cs_pop_btn_wrap">
                                                <a href="<?php echo htmlspecialchars($course['url']); ?>"
                                                    class="cs_pop_view_btn">
                                                    <span>View Details</span>
                                                    <i class="ri-arrow-right-line"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="swiper-pagination cs_pop_pagination"></div>
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

    <!-- Start Promo Banner Section -->
    <section class="cs_promo_section cs_section_padding pb-0" data-aos="fade-up">
        <div class="container">
            <div class="cs_promo_banner_1 cs_radius_24">
                <span class="cs_promo_pattern cs_bg_filed" data-src="assets/img/vector-bg-2.svg"></span>
                <div class="cs_promo_grid">
                    <!-- Left Column: Content -->
                    <div class="cs_promo_col_left">
                        <span class="cs_promo_badge_pill">For Ambitious Learners</span>
                        <h2 class="cs_promo_main_title">
                            Build Your Future With The <span>Right Degree</span>
                        </h2>
                        <p class="cs_promo_desc_text">
                            Choose from UGC-recognized universities, flexible learning options and career-focused
                            programs to achieve your goals.
                        </p>
                        <div class="cs_promo_features_row">
                            <!-- <div class="cs_promo_feat_item">
                                <span class="cs_promo_feat_icon"><i class="ri-graduation-cap-line"></i></span>
                                <span class="cs_promo_feat_text">UGC Recognized</span>
                            </div> -->
                            <span class="cs_promo_feat_sep"></span>
                            <div class="cs_promo_feat_item">
                                <span class="cs_promo_feat_icon"><i class="ri-book-open-line"></i></span>
                                <span class="cs_promo_feat_text">Flexible Learning</span>
                            </div>
                            <span class="cs_promo_feat_sep"></span>
                            <div class="cs_promo_feat_item">
                                <span class="cs_promo_feat_icon"><i class="ri-line-chart-line"></i></span>
                                <span class="cs_promo_feat_text">Career Growth</span>
                            </div>
                        </div>
                        <div class="cs_promo_btn_box">
                            <a href="universities.php" class="cs_primary_btn cs_login_btn">
                                <span class="cs_login_text">Compare Universities</span>
                                <span class="cs_user_icon"><i class="ri-arrow-right-line"></i></span>
                            </a>
                        </div>
                    </div>

                    <!-- Center Column: Girl with background pattern combined image -->
                    <div class="cs_promo_col_center">
                        <div class="cs_promo_media_wrapper">
                            <img src="assets/img/cta/png-bg-pattern-with-girl.png" alt="Student with books"
                                class="cs_promo_media_girl">
                        </div>
                    </div>

                    <!-- Right Column: 3 Feature Cards -->
                    <div class="cs_promo_col_right">
                        <div class="cs_promo_card_item">
                            <div class="cs_promo_card_icon">
                                <img src="assets/img/cta/icon-1.jpg" alt="Top Universities">
                            </div>
                            <div class="cs_promo_card_text">
                                <h3 class="cs_promo_card_title">Top Universities</h3>
                                <p class="cs_promo_card_desc">Choose from UGC-recognized universities and
                                    industry-relevant degree programs.</p>
                            </div>
                        </div>

                        <div class="cs_promo_card_item">
                            <div class="cs_promo_card_icon">
                                <img src="assets/img/cta/icon-2.jpg" alt="Learn Your Way">
                            </div>
                            <div class="cs_promo_card_text">
                                <h3 class="cs_promo_card_title">Learn Your Way</h3>
                                <p class="cs_promo_card_desc">Study anytime, anywhere with flexible online classes,
                                    recorded lectures and digital resources.</p>
                            </div>
                        </div>

                        <div class="cs_promo_card_item">
                            <div class="cs_promo_card_icon">
                                <img src="assets/img/cta/icon-3.jpg" alt="Career-Focused Programs">
                            </div>
                            <div class="cs_promo_card_text">
                                <h3 class="cs_promo_card_title">Career-Focused Programs</h3>
                                <p class="cs_promo_card_desc">Build practical skills and earn a recognized degree that
                                    supports your career goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Promo Banner Section -->

    <!-- Start How It Work Section -->
    <section class="cs_work_process_section cs_type_1 cs_section_padding">
        <div class="container">
            <div class="cs_section_heading_style_1 cs_center_column text-center mb-4" data-aos="fade-up">
                <h2 class="cs_pop_title cs_fs_42 cs_medium mb-2">
                    How DuraSetu Makes Your <span>Journey Simple</span>
                </h2>
                <p class="cs_section_subtitle mb-0">
                    From exploring courses to getting admitted, we guide you at every step.
                </p>
            </div>
            <div class="cs_work_process_steps">
                <!-- Step 1 -->
                <div class="cs_work_step_1 cs_step_theme_blue">
                    <span class="cs_work_step_number cs_center cs_fs_24 cs_semibold">01</span>
                    <div class="card-border-blue">
                        <div class="cs_work_step_card">
                            <div class="cs_step_icon_badge">
                                <i class="ri-search-line"></i>
                            </div>
                            <h3 class="cs_work_step_title cs_fs_22 cs_semibold">Explore Courses</h3>
                            <p class="cs_work_step_text cs_fs_14">Discover a wide range of online programs across top
                                universities. Use filters to find the right course as per your career goals.</p>
                            <div class="cs_work_step_thumb cs_center">
                                <img src="assets/img/step/step-1.png" alt="Explore Courses">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="cs_work_step_1 cs_step_theme_orange">
                    <span class="cs_work_step_number cs_center cs_fs_24 cs_semibold">02</span>
                    <div class="card-border-yellow">
                        <div class="cs_work_step_card">
                            <div class="cs_step_icon_badge">
                                <i class="ri-scales-3-line"></i>
                            </div>
                            <h3 class="cs_work_step_title cs_fs_22 cs_semibold">Compare & Evaluate</h3>
                            <p class="cs_work_step_text cs_fs_14">Compare universities, fees, program details, duration,
                                and accreditations — all in one place.</p>
                            <div class="cs_work_step_thumb cs_center">
                                <img src="assets/img/step/step-2.png" alt="Compare & Evaluate">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="cs_work_step_1 cs_step_theme_blue">
                    <span class="cs_work_step_number cs_center cs_fs_24 cs_semibold">03</span>
                    <div class="card-border-blue">
                        <div class="cs_work_step_card">
                            <div class="cs_step_icon_badge">
                                <i class="ri-file-check-line"></i>
                            </div>
                            <h3 class="cs_work_step_title cs_fs_22 cs_semibold">Get Expert Guidance</h3>
                            <p class="cs_work_step_text cs_fs_14">Our education experts help you choose the best
                                university and course as per your interests, budget, and career goals.</p>
                            <div class="cs_work_step_thumb cs_center">
                                <img src="assets/img/step/step-3.png" alt="Get Expert Guidance">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="cs_work_step_1 cs_step_theme_orange">
                    <span class="cs_work_step_number cs_center cs_fs_24 cs_semibold">04</span>
                    <div class="card-border-yellow">
                        <div class="cs_work_step_card">
                            <div class="cs_step_icon_badge">
                                <i class="ri-file-check-line"></i>
                            </div>
                            <h3 class="cs_work_step_title cs_fs_22 cs_semibold">Apply & Get Admitted</h3>
                            <p class="cs_work_step_text cs_fs_14">
                                We guide you through documentation, applications, and admission for a smooth enrollment
                                experience.
                            </p>
                            <div class="cs_work_step_thumb cs_center">
                                <img src="assets/img/step/step-4.png" alt="Apply & Get Admitted">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End How It Work Section -->

    <!-- Start Testimonial Section -->
    <section class="cs_testimonial_section cs_white_bg">
        <div class="container">
            <div class="cs_testimonial_panel cs_primary_bg cs_radius_20 cs_bg_filed slider-section"
                data-src="assets/img/vector-bg-2.svg">
                <div class="cs_section_heading_style_2 cs_type_1 mb-4" data-aos="fade-up">
                    <div>
                        <span class="cs_section_label cs_fs_14 cs_primary_color mb-2 px-3">
                            <span>Testimonials</span>
                        </span>
                        <h2 class="cs_fs_42 cs_semibold cs_white_color mb-0">What Students Say About DuraSetu</h2>
                    </div>
                    <div class="cs_arrows_style_1 cs_demo_arrows">
                        <button type="button" class="cs_demo_arrow slider-prev cs_radius_3 cs_center"
                            aria-label="Previous testimonial"><i class="ri-arrow-left-s-line"></i>
                        </button>
                        <button type="button" class="cs_demo_arrow slider-next cs_radius_3 cs_center"
                            aria-label="Next testimonial"><i class="ri-arrow-right-s-line"></i>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 align-self-end" data-aos="fade-up">
                        <div class="cs_testimonial_art" aria-hidden="true">
                            <span class="cs_testimonial_art_outer"></span>
                            <span class="cs_testimonial_art_inner"></span>
                            <span class="cs_testimonial_art_img">
                                <img src="assets/img/student.png" alt="Smiling student holding a Bag and notebook">
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                        <div class="cs_testimonial_panel_in">
                            <div class="swiper" data-slides-per-view="responsive" data-xsm-slides="1" data-sm-slides="1"
                                data-smd-slides="1" data-md-slides="1" data-lg-slides="1" data-xlg-slides="2"
                                data-xxlg-slides="2" data-gap="24" data-loop="1">

                                <div class="swiper-wrapper">
                                    <?php foreach ($testimonials as $testimonial): ?>
                                        <div class="swiper-slide">
                                            <article class="cs_testimonial_style_1 cs_radius_15">
                                                <!-- Author -->
                                                <div class="cs_testimonial_author">
                                                    <span class="cs_testimonial_avatar">
                                                        <img src="<?= htmlspecialchars($testimonial['image']); ?>"
                                                            alt="<?= htmlspecialchars($testimonial['name']); ?>"
                                                            loading="lazy">
                                                    </span>
                                                    <div class="cs_testimonial_author_text">
                                                        <h3 class="cs_testimonial_name cs_fs_18 cs_medium mb-0">
                                                            <?= htmlspecialchars($testimonial['name']); ?>
                                                        </h3>
                                                        <p class="cs_testimonial_role cs_fs_14 cs_primary_color mb-0">
                                                            <?= htmlspecialchars($testimonial['role']); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Rating -->
                                                <span class="cs_rating" data-rating="<?= (int) $testimonial['rating']; ?>">
                                                    <span class="cs_rating_percentage"></span>
                                                </span>
                                                <!-- Testimonial -->
                                                <p class="cs_testimonial_text mb-0">
                                                    "<?= htmlspecialchars($testimonial['message']); ?>"
                                                </p>
                                            </article>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <ul class="cs_testimonial_trust cs_mp_0">
                                <li class="cs_fs_14 cs_white_color">
                                    <img src="assets/img/icons/learner-satisfaction.svg" alt="">
                                    Expert Course Guidance
                                </li>

                                <li class="cs_fs_14 cs_white_color">
                                    <img src="assets/img/icons/active-members.svg" alt="">
                                    Top Online Universities
                                </li>

                                <li class="cs_fs_14 cs_white_color">
                                    <img src="assets/img/icons/industry-recognized.svg" alt="">
                                    Hassle-Free Admission Support
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Start FAQ Section -->
    <section class="cs_faq_section cs_section_padding">
        <div class="container">
            <div class="cs_section_heading_style_1 cs_center_column text-center mb-5" data-aos="fade-up">
                <h2 class="cs_pop_title cs_fs_42 cs_medium mb-2">
                    Frequently Asked <span>Questions</span>
                </h2>
                <p class="cs_section_subtitle mb-0">
                    Find answers to common questions about universities, courses, fees, and admissions.
                </p>
            </div>
            <div class="cs_faq_wrap">
                <!-- Left Side Card -->
                <div class="cs_faq_media_col" data-aos="fade-right">
                    <div class="cs_faq_left_wrapper">
                        <div class="cs_help_card">
                            <div class="cs_help_thumbnail">
                                <img src="assets/img/help-desk-1.jpg" alt="DuraSetu student guidance">
                                <!-- Doodle burst rays on top-right of screen -->
                                <span class="cs_help_doodle_burst" aria-hidden="true">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <path d="M5 23L1 27M14 15L14 8M21 19L27 15" stroke="#f59e0b" stroke-width="2.5"
                                            stroke-linecap="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="cs_help_content">
                                <h3 class="cs_help_title">
                                    Need Help <span>Choosing?</span>
                                </h3>

                                <p class="cs_help_text">
                                    Not sure which university or course is right for you? Our experts can help you
                                    compare your options and make a confident decision.
                                </p>
                                <a href="contact.php" class="cs_help_expert_btn">
                                    <i class="ri-user-line"></i>
                                    <span>Talk to an Expert</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                            <!-- Warm peach curved bottom-right accent -->
                            <div class="cs_help_corner_accent" aria-hidden="true"></div>
                        </div>
                        <!-- Dotted pattern at bottom-left -->
                        <div class="cs_help_dots_grid" aria-hidden="true"></div>
                    </div>
                </div>

                <!-- Right Side Accordion -->
                <div class="cs_accordians_style_1 position-relative z-1" data-aos="fade-left">

                    <!-- FAQ 01 -->
                    <div class="cs_accordian active">
                        <div class="cs_accordian_head">
                            <h3 class="cs_accordian_title mb-0">
                                How can DuraSetu help me choose the right university?
                            </h3>
                            <span class="cs_accordian_toggle" aria-hidden="true">
                                <i class="ri-add-line cs_toggle_plus"></i>
                                <i class="ri-subtract-line cs_toggle_minus"></i>
                            </span>
                        </div>
                        <div class="cs_accordian_body">
                            DuraSetu helps you explore and compare online universities, courses, fees, eligibility, and
                            admission options so you can make an informed choice.
                        </div>
                    </div>

                    <!-- FAQ 02 -->
                    <div class="cs_accordian">
                        <div class="cs_accordian_head">
                            <h3 class="cs_accordian_title mb-0">
                                What courses can I explore on DuraSetu?
                            </h3>
                            <span class="cs_accordian_toggle" aria-hidden="true">
                                <i class="ri-add-line cs_toggle_plus"></i>
                                <i class="ri-subtract-line cs_toggle_minus"></i>
                            </span>
                        </div>
                        <div class="cs_accordian_body">
                            You can explore popular online programs such as MBA, MCA, M.Com, BBA, BCA, and B.Com along
                            with other available specializations.
                        </div>
                    </div>

                    <!-- FAQ 03 -->
                    <div class="cs_accordian">
                        <div class="cs_accordian_head">
                            <h3 class="cs_accordian_title mb-0">
                                Can I compare different universities and courses?
                            </h3>
                            <span class="cs_accordian_toggle" aria-hidden="true">
                                <i class="ri-add-line cs_toggle_plus"></i>
                                <i class="ri-subtract-line cs_toggle_minus"></i>
                            </span>
                        </div>
                        <div class="cs_accordian_body">
                            Yes. You can compare important details such as universities, courses, fees, duration,
                            eligibility, and other admission information.
                        </div>
                    </div>

                    <!-- FAQ 04 -->
                    <div class="cs_accordian">
                        <div class="cs_accordian_head">
                            <h3 class="cs_accordian_title mb-0">
                                Do you provide admission guidance?
                            </h3>
                            <span class="cs_accordian_toggle" aria-hidden="true">
                                <i class="ri-add-line cs_toggle_plus"></i>
                                <i class="ri-subtract-line cs_toggle_minus"></i>
                            </span>
                        </div>
                        <div class="cs_accordian_body">
                            Yes. Our guidance is designed to help you understand the application process, documentation,
                            eligibility, and next steps toward admission.
                        </div>
                    </div>

                    <!-- FAQ 05 -->
                    <div class="cs_accordian">
                        <div class="cs_accordian_head">
                            <h3 class="cs_accordian_title mb-0">
                                Is DuraSetu suitable for working professionals?
                            </h3>
                            <span class="cs_accordian_toggle" aria-hidden="true">
                                <i class="ri-add-line cs_toggle_plus"></i>
                                <i class="ri-subtract-line cs_toggle_minus"></i>
                            </span>
                        </div>
                        <div class="cs_accordian_body">
                            Absolutely. Online programs can provide flexible learning options for working professionals
                            looking to upskill, change careers, or continue their education.
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- End FAQ Section -->

    <!-- Start Funfact Section -->
    <section class="container cs_funfact_section">
        <div class="cs_funfact_decorations" aria-hidden="true">
            <!-- Left doodle: graduation cap & paper plane -->
            <div class="cs_funfact_doodle_left">
                <svg class="cs_doodle_grad_cap" width="70" height="70" viewBox="0 0 70 70" fill="none">
                    <path d="M35 15L60 27L35 39L10 27L35 15Z" stroke="rgba(255,255,255,0.22)" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M20 32V48C20 48 26 53 35 53C44 53 50 48 50 48V32" stroke="rgba(255,255,255,0.22)"
                        stroke-width="2" stroke-linecap="round" />
                    <path d="M55 29.5V47" stroke="rgba(255,255,255,0.22)" stroke-width="2" stroke-linecap="round" />
                </svg>
                <div class="cs_doodle_plane_wrap">
                    <svg class="cs_doodle_plane_trail" width="130" height="50" viewBox="0 0 130 50" fill="none">
                        <path d="M5 45C35 48 70 42 110 15" stroke="rgba(255, 255, 255, 0.28)" stroke-width="1.8"
                            stroke-dasharray="4 4" />
                    </svg>
                    <svg class="cs_doodle_plane" width="28" height="28" viewBox="0 0 28 28" fill="none">
                        <path d="M25 3L11 17M25 3L16 25L11 17M25 3L3 12L11 17" fill="#FFAA00" stroke="#FFAA00"
                            stroke-width="1.5" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>

            <!-- Right doodle: open book -->
            <div class="cs_funfact_doodle_right">
                <svg class="cs_doodle_book" width="65" height="65" viewBox="0 0 65 65" fill="none">
                    <path
                        d="M32.5 48C26 44 17 44 10 47V15C17 12 26 12 32.5 16C39 12 48 12 55 15V47C48 44 39 44 32.5 48Z"
                        stroke="rgba(255,255,255,0.2)" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M32.5 16V48" stroke="rgba(255,255,255,0.2)" stroke-width="2" />
                </svg>
            </div>
        </div>

        <div class="position-relative z-1">
            <!-- <div class="cs_funfact_header text-center" data-aos="fade-up">
                <div class="cs_funfact_eyebrow">
                    <span class="cs_eyebrow_line cs_left"></span>
                    <span class="cs_eyebrow_text">OUR IMPACT</span>
                    <span class="cs_eyebrow_line cs_right"></span>
                </div>

                <h2 class="cs_funfact_title">
                    Trusted by Learners <span class="cs_funfact_highlight">Worldwid</span>
                </h2>

                <p class="cs_funfact_desc mb-0">
                    From ambitious students to leading organizations, millions rely on DuraSetu to explore, compare, and
                    choose the right online universities.
                </p>
            </div> -->

            <div class="cs_funfact_wrapper">

                <!-- Stat 1 -->
                <div class="cs_impact_card" data-aos="fade-up">
                    <div class="cs_impact_card_main">
                        <div class="cs_impact_icon_wrap">
                            <div class="cs_impact_icon_inner">
                                <i class="ri-graduation-cap-fill"></i>
                            </div>
                        </div>

                        <div class="cs_impact_text">
                            <h3 class="cs_impact_number mb-0">
                                <span class="odometer" data-count-to="06">06 </span>&nbsp;+
                            </h3>
                            <p class="cs_impact_label mb-0">Popular Online Courses</p>
                        </div>
                    </div>

                    <div class="cs_impact_bottom_line">
                        <span class="cs_impact_gold_bar"></span>
                    </div>
                </div>


                <!-- Stat 2 -->
                <div class="cs_impact_card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cs_impact_card_main">
                        <div class="cs_impact_icon_wrap">
                            <div class="cs_impact_icon_inner">
                                <i class="ri-building-4-fill"></i>
                            </div>
                        </div>

                        <div class="cs_impact_text">
                            <h3 class="cs_impact_number mb-0">
                                <span class="odometer" data-count-to="09">09</span>&nbsp;+
                            </h3>
                            <p class="cs_impact_label mb-0">Online Universities</p>
                        </div>
                    </div>

                    <div class="cs_impact_bottom_line">
                        <span class="cs_impact_gold_bar"></span>
                    </div>
                </div>


                <!-- Stat 3 -->
                <div class="cs_impact_card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cs_impact_card_main">
                        <div class="cs_impact_icon_wrap">
                            <div class="cs_impact_icon_inner">
                                <i class="ri-book-open-fill"></i>
                            </div>
                        </div>

                        <div class="cs_impact_text">
                            <h3 class="cs_impact_number mb-0">
                                <span class="odometer" data-count-to="08">08</span>&nbsp;+
                            </h3>
                            <p class="cs_impact_label mb-0">Course Options</p>
                        </div>
                    </div>

                    <div class="cs_impact_bottom_line">
                        <span class="cs_impact_gold_bar"></span>
                    </div>
                </div>


                <!-- Stat 4 -->
                <div class="cs_impact_card" data-aos="fade-up" data-aos-delay="300">
                    <div class="cs_impact_card_main">
                        <div class="cs_impact_icon_wrap">
                            <div class="cs_impact_icon_inner">
                                <i class="ri-shield-check-fill"></i>
                            </div>
                        </div>

                        <div class="cs_impact_text">
                            <h3 class="cs_impact_number mb-0">
                                <span class="odometer" data-count-to="100">100</span>%
                            </h3>
                            <p class="cs_impact_label mb-0">Guidance Focused</p>
                        </div>
                    </div>

                    <div class="cs_impact_bottom_line">
                        <span class="cs_impact_gold_bar"></span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Funfact Section -->

    <!-- Start Blog Section -->
    <section class="cs_demo_section cs_section_padding">
        <div class="container">
            <div class="cs_pop_heading_row mb-4 mb-lg-5">
                <div class="cs_pop_heading_text">
                    <h2 class="cs_pop_title cs_fs_42 cs_medium mb-2">Latest <span>Career Insights</span></h2>
                    <p class="cs_pop_subtitle cs_fs_16 cs_secondary_color mb-0"> Explore expert insights, university updates, course guides,
                        and tips to make smarter decisions about your online education.</p>
                </div>
                <div class="cs_pop_heading_btn">
                    <a href="courses.php" class="cs_primary_btn cs_radius_50">
                        <span>View All Blogs</span>
                        <span><i class="ri-arrow-right-line"></i></span>
                    </a>
                </div>
            </div>

            <!-- Blog Slider -->
            <div class="cs_demo_slider_wrap slider-section">

                <div class="swiper"
                    data-slides-per-view="responsive"
                    data-gap="24"
                    data-loop="1"
                    data-xsm-slides="1"
                    data-sm-slides="1"
                    data-smd-slides="2"
                    data-md-slides="2"
                    data-lg-slides="3"
                    data-xlg-slides="3"
                    data-xxlg-slides="3">
                    <div class="swiper-wrapper">
                        <?php foreach ($blogs as $blog): ?>
                            <div class="swiper-slide">
                                <article class="cs_course_style_4 cs_radius_20">
                                    <div class="cs_course_thumbnail cs_radius_15">
                                        <img
                                            src="<?= htmlspecialchars($blog['image']); ?>"
                                            alt="<?= htmlspecialchars($blog['title']); ?>"
                                            loading="lazy">
                                        <span class="cs_course_badge cs_primary_bg cs_fs_14 cs_white_color">
                                            <?= htmlspecialchars($blog['category']); ?>
                                        </span>

                                    </div>
                                    <h3 class="cs_course_title cs_fs_20 cs_semibold">
                                        <a href="<?= htmlspecialchars($blog['url']); ?>">
                                            <?= htmlspecialchars($blog['title']); ?>
                                        </a>
                                    </h3>
                                    <p class="cs_course_text">
                                        <?= htmlspecialchars($blog['description']); ?>
                                    </p>
                                    <a href="<?= htmlspecialchars($blog['url']); ?>"
                                        class="blog-btn">
                                        <span class="cs_login_text">
                                            Read More
                                        </span>
                                        <span class="cs_user_icon">
                                            <i class="ri-arrow-right-line"></i>
                                        </span>
                                    </a>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section -->
</main>





<?php
$content = ob_get_clean();
require 'layout.php';
?>