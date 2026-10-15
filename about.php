<?php
ob_start();
include("include/data.php");
?>

<main>
    <!-- Start Page Header -->
    <section class="cs_page_header cs_bg_filed" data-src="assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="cs_page_header_text">
                <h1 class="cs_page_header_title cs_fs_64">About Us</h1>
                <ul class="cs_breadcrumb cs_mp_0 cs_fs_16">
                    <li><a href="index.php">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Header -->
    <!-- Start About Info Section -->
    <section class="cs_about_section cs_section_padding pb-0">
        <div class="container">
            <div class="row cs_gap_y_40">
                <!-- Left Image Collage -->
                <div class="col-lg-5" data-aos="fade-up">
                    <div class="cs_about_collage">
                        <div class="cs_about_thumb cs_about_thumb_1 cs_radius_20">
                            <img src="assets/img/about-two.jpg"
                                alt="Instructor teaching an online class from a library desk">
                            <span class="cs_about_shape cs_about_shape_2"></span>
                        </div>
                        <div class="cs_about_thumb cs_about_thumb_2 cs_radius_20">
                            <img src="assets/img/about-one.jpg" alt="Two students waving during a live video lesson">
                        </div>
                        <div class="cs_about_experience cs_center_column cs_radius_10 text-center">
                            <h2 class="cs_fs_32 cs_semibold cs_primary_color mb-0">15+</h2>
                            <span class="cs_fs_14">Years of Experience</span>
                            <span class="cs_about_shape cs_about_shape_4" aria-hidden="true">
                                <img src="assets/img/about-shape-4.svg" alt="Hand shape">
                            </span>
                            <span class="cs_about_shape cs_about_shape_5" aria-hidden="true">
                                <img src="assets/img/about-shape-5.svg" alt="Wave shape">
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Right Content -->
                <div class="col-lg-7">
                    <div class="cs_about_content">
                        <h2 class="cs_about_title cs_fs_32 cs_semibold">
                            Your Bridge to the Right University &amp; Career
                        </h2>
                        <p class="cs_about_intro">
                            DuraSetu helps students and working professionals discover
                            the right online university, course, and career pathway
                            with clear and personalised guidance.
                        </p>
                        <span class="cs_section_pill cs_fs_14 cs_primary_color">
                            <span>About DuraSetu</span>
                        </span>
                        <div class="cs_about_text">
                            <p class="mb-0">
                                Choosing the right university or online degree can be
                                confusing with so many courses, fees, specialisations,
                                and admission options available. DuraSetu brings these
                                choices together in one place, making it easier to
                                explore, compare, and make informed decisions.
                            </p>
                            <p class="mb-0">
                                From discovering popular courses and comparing
                                universities to understanding eligibility, fees,
                                scholarships, and admission requirements, we help you
                                move forward with greater clarity and confidence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Info Section -->

    <!-- Start DuraSetu Core Features -->
    <section class="cs_core_feature_section cs_section_padding pb-0">
        <div class="container">
            <div class="cs_core_feature_panel cs_durasetu_features cs_radius_20"
                data-src="assets/img/bg/vector-bg-1.svg">
                <!-- Overlay -->
                <span class="cs_feature_overlay"></span>
                <!-- <div class="cs_section_heading_style_1 cs_center_column text-center mb-5"
                    data-aos="fade-up">
                    <h2 class="cs_section_title cs_fs_36 cs_semibold cs_white_color mb-2">
                        Make Smarter Education Decisions
                    </h2>
                    <p class="cs_feature_heading_text mb-0">
                        Explore, compare and choose the right university and course
                        with confidence.
                    </p>
                </div> -->
                <div class="cs_uni_heading_text text-center" style="max-width: 100%">
                    <h2 class="cs_uni_title">Make Smarter Education <span>Decisions</span></h2>
                    <p class="cs_uni_subtitle">Explore, compare and choose the right university and course
                        with confidence.</p>
                </div>
                <div class="cs_grid_col_3 cs_feature_grid">
                    <!-- Feature 1 -->
                    <div class="cs_durasetu_feature_item" data-aos="fade-up">

                        <span class="cs_durasetu_feature_icon">
                            <i class="ri-building-4-line"></i>
                        </span>

                        <div class="cs_feature_number">01</div>

                        <h3 class="cs_iconbox_title cs_fs_24 cs_semibold cs_white_color">
                            Explore Top Universities
                        </h3>

                        <p class="cs_iconbox_subtitle mb-0">
                            Discover leading online universities and explore their
                            courses, eligibility, fees, approvals and admission options.
                        </p>

                        <a href="universities.php" class="cs_feature_link">
                            Explore Universities
                            <i class="ri-arrow-right-line"></i>
                        </a>

                    </div>


                    <!-- Feature 2 -->
                    <div class="cs_durasetu_feature_item"
                        data-aos="fade-up"
                        data-aos-delay="100">

                        <span class="cs_durasetu_feature_icon">
                            <i class="ri-scales-3-line"></i>
                        </span>

                        <div class="cs_feature_number">02</div>

                        <h3 class="cs_iconbox_title cs_fs_24 cs_semibold cs_white_color">
                            Compare Courses &amp; Fees
                        </h3>

                        <p class="cs_iconbox_subtitle mb-0">
                            Compare universities, course fees, duration, specialisations
                            and other important details before making your choice.
                        </p>

                        <a href="courses.php" class="cs_feature_link">
                            Compare Options
                            <i class="ri-arrow-right-line"></i>
                        </a>

                    </div>


                    <!-- Feature 3 -->
                    <div class="cs_durasetu_feature_item"
                        data-aos="fade-up"
                        data-aos-delay="200">

                        <span class="cs_durasetu_feature_icon">
                            <i class="ri-user-star-line"></i>
                        </span>

                        <div class="cs_feature_number">03</div>

                        <h3 class="cs_iconbox_title cs_fs_24 cs_semibold cs_white_color">
                            Get Expert Guidance
                        </h3>

                        <p class="cs_iconbox_subtitle mb-0">
                            Get personalised guidance to understand your options and
                            choose a course that fits your career goals.
                        </p>

                        <a href="contact.php" class="cs_feature_link">
                            Talk to an Expert
                            <i class="ri-arrow-right-line"></i>
                        </a>

                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End DuraSetu Core Features -->

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

    <!-- Start Universities Section -->
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
    <!-- End Universities Section -->
</main>



<?php
$content = ob_get_clean();
require 'layout.php';
?>