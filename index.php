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

    <!-- Start Universities Section -->
    <section class="cs_partners_section durasetu_universities_section" data-aos="fade-up">
        <div class="container">
            <div class="cs_partners_wrap">
                <h2 class="cs_partners_title cs_fs_20 cs_semibold mb-0">
                    Top Online Universities
                </h2>
                <div class="cs_partners_marquee swiper" data-marquee="1" data-autoplay="1" data-speed="6000"
                    data-slides-per-view="responsive" data-gap="24" data-xxlg-gap="65" data-xsm-slides="2"
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
    <!-- End Universities Section -->

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

                <div class="cs_slider cs_slider_3 swiper" data-slides-per-view="responsive" data-xxlg-slides="4"
                    data-xlg-slides="4" data-lg-slides="3" data-md-slides="2" data-sm-slides="1" data-xsm-slides="1"
                    data-gap="20" data-speed="600" data-loop="1" data-autoplay="1" data-pagination-type="bullets">
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
                            <div class="cs_promo_feat_item">
                                <span class="cs_promo_feat_icon"><i class="ri-graduation-cap-line"></i></span>
                                <span class="cs_promo_feat_text">UGC Recognized</span>
                            </div>
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
                            <a href="courses.php" class="cs_primary_btn cs_login_btn">
                                <span class="cs_login_text">Explore Online Degrees</span>
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
                <h2 class="cs_section_title cs_fs_42 cs_medium mb-2">Meet Our Mentors</h2>
                <p class="cs_section_subtitle mb-0">Learn from industry experts who bring real‑world experience straight
                    to
                    your screen.</p>
            </div>
            <div class="cs_work_process_steps">
                <div class="cs_work_step_1">
                    <span class="cs_work_step_number cs_center cs_fs_24 cs_semibold">01</span>
                    <div class="cs_work_step_card">
                        <h3 class="cs_work_step_title cs_fs_20 cs_semibold">Pick a Live Track</h3>
                        <p class="cs_work_step_text cs_fs_14">Browse AI, Data Science, or Full-stack tracks. Choose your
                            schedule & mentor.</p>
                        <div class="cs_work_step_thumb cs_center">
                            <img src="assets/img/work-img-5.png" alt="Instructor applying online">
                        </div>
                    </div>
                </div>
                <div class="cs_work_step_1">
                    <span class="cs_work_step_number cs_center cs_fs_24 cs_semibold">02</span>
                    <div class="cs_work_step_card">
                        <h3 class="cs_work_step_title cs_fs_20 cs_semibold">Attend Immersive Labs</h3>
                        <p class="cs_work_step_text cs_fs_14">Real-time whiteboarding, code reviews, and live Q&A with
                            industry experts.</p>
                        <div class="cs_work_step_thumb cs_center">
                            <img src="assets/img/work-img-6.png" alt="Instructor reviewing a course curriculum">
                        </div>
                    </div>
                </div>
                <div class="cs_work_step_1">
                    <span class="cs_work_step_number cs_center cs_fs_24 cs_semibold">03</span>
                    <div class="cs_work_step_card">
                        <h3 class="cs_work_step_title cs_fs_20 cs_semibold">Build & Collaborate</h3>
                        <p class="cs_work_step_text cs_fs_14">Work on real-world capstones, peer reviews, & get feedback
                            from mentors.</p>
                        <div class="cs_work_step_thumb cs_center">
                            <img src="assets/img/work-img-7.png" alt="Instructor recording a live course">
                        </div>
                    </div>
                </div>
                <div class="cs_work_step_1">
                    <span class="cs_work_step_number cs_center cs_fs_24 cs_semibold">04</span>
                    <div class="cs_work_step_card">
                        <h3 class="cs_work_step_title cs_fs_20 cs_semibold">Earn Credentials</h3>
                        <p class="cs_work_step_text cs_fs_14">Receive industry-recognized certificate + portfolio
                            projects & career coaching.</p>
                        <div class="cs_work_step_thumb cs_center">
                            <img src="assets/img/work-img-8.png" alt="Instructor launching a new course">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End How It Work Section -->


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