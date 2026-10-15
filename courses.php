<?php
ob_start();
include("include/data.php");
?>

<main>
    <!-- Start Page Header -->
    <section class="cs_page_header cs_bg_filed" data-src="assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="cs_page_header_text" data-aos="fade-up">
                <h1 class="cs_page_header_title cs_fs_48 cs_bold">Explore All Online Programs</h1>
                <ul class="cs_breadcrumb cs_mp_0 cs_fs_16">
                    <li><a href="index.php">Home</a></li>
                    <li>Courses</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Header -->

    <!-- Start Courses Directory Section -->
    <section class="cs_course_section cs_section_padding" data-aos="fade-up">
        <div class="container">
            <div class="text-center mb-5">
                <span class="cs_mba_badge">
                    <i class="ri-graduation-cap-line"></i> UGC-DEB ENTITLED DEGREES
                </span>
                <h2 class="cs_mba_section_title">Browse Undergraduate &amp; Postgraduate Degrees</h2>
                <p class="cs_mba_section_subtitle mx-auto">
                    Choose from government-approved online degrees with flexible learning, accredited university partners, and comprehensive career assistance.
                </p>
            </div>

            <div class="row g-4">
                <?php if (!empty($popular_courses)): ?>
                    <?php foreach ($popular_courses as $course): ?>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up">
                            <div class="cs_pop_card h-100 d-flex flex-column">
                                <div class="cs_pop_thumb_wrap">
                                    <img src="<?php echo htmlspecialchars($course['image']); ?>"
                                        onerror="this.onerror=null; this.src='<?php echo htmlspecialchars($course['fallback_image']); ?>';"
                                        alt="<?php echo htmlspecialchars($course['title']); ?>"
                                        class="cs_pop_thumb_img" width="600" height="400">
                                    <div class="cs_pop_corner_slope"></div>
                                    <div class="cs_pop_icon_badge">
                                        <i class="<?php echo htmlspecialchars($course['icon']); ?>"></i>
                                    </div>
                                </div>

                                <div class="cs_pop_card_body d-flex flex-column flex-grow-1">
                                    <h3 class="cs_pop_card_title">
                                        <a href="<?php echo htmlspecialchars($course['url']); ?>">
                                            <?php echo htmlspecialchars($course['title']); ?>
                                        </a>
                                    </h3>
                                    <h4 class="cs_pop_card_sub"><?php echo htmlspecialchars($course['subtitle']); ?></h4>
                                    <p class="cs_pop_card_desc flex-grow-1"><?php echo htmlspecialchars($course['desc']); ?></p>

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

                                    <div class="cs_pop_btn_wrap mt-3">
                                        <a href="<?php echo htmlspecialchars($course['url']); ?>" class="cs_pop_view_btn w-100 text-center">
                                            <span>Explore Program</span>
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
    </section>

    <!-- Start Need Help Banner -->
    <div class="container mb-5 pb-5">
        <div class="cs_need_help_banner" data-aos="fade-up">
            <div class="cs_need_help_left">
                <div class="cs_need_help_avatar">
                    <i class="ri-customer-service-2-fill"></i>
                </div>
                <div>
                    <h3 class="cs_need_help_title">Not Sure Which Course Fits Your Career?</h3>
                    <p class="cs_need_help_subtitle">Connect with our senior academic counsellors for a free 1-on-1 profile evaluation.</p>
                </div>
            </div>
            <div>
                <a href="tel:+919876543210" class="cs_need_help_btn">
                    <span>Talk to an Expert</span>
                    <span class="cs_need_help_btn_circle">
                        <i class="ri-arrow-right-s-line"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
</main>

<?php
$content = ob_get_clean();
require 'layout.php';
?>

