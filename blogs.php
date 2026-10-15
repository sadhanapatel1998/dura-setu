<?php
ob_start();
include("include/data.php");
?>

<main>
    <!-- Start Page Header -->
    <section class="cs_page_header cs_bg_filed" data-src="assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="cs_page_header_text">
                <h1 class="cs_page_header_title cs_fs_64">Blogs</h1>
                <ul class="cs_breadcrumb cs_mp_0 cs_fs_16">
                    <li><a href="index.php">Home</a></li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Header -->

    <!-- Start Blog Section -->
    <section class="cs_demo_section cs_section_padding">
        <div class="container">
            <div class="cs_section_heading_style_1 cs_center_column text-center mb-5 aos-init aos-animate" data-aos="fade-up">
                <h2 class="cs_pop_title cs_fs_42 cs_medium mb-2">
                    Latest <span>Career Insights</span>
                </h2>
                <p class="cs_section_subtitle mb-0">
                    Explore expert insights, university updates, course guides,
                    and tips to make smarter decisions about your online education.
                </p>
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
                                    <p class="cs_course_text"
                                        style="margin-top: 0; display: block; overflow: visible; font-size: 16px;">
                                        <?= htmlspecialchars($blog['description']); ?>
                                    </p>
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