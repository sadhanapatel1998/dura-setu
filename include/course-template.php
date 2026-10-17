<?php
/**
 * DuraSetu Centralized Course Detail Template
 * 
 * Reusable layout engine ensuring identical UI, typography, colors,
 * responsive behavior, and component hierarchy across all course detail pages.
 */

if (!isset($course) || empty($course)) {
    header("Location: courses.php");
    exit;
}

$offering_universities = dura_get_course_universities_list($course['id']);
?>

<main>
    <!-- Start Page Header -->
    <section class="cs_page_header cs_bg_filed" data-src="assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="cs_page_header_text" data-aos="fade-up">
                <h1 class="cs_page_header_title cs_fs_48 cs_bold"><?= htmlspecialchars($course['full_title'] ?? $course['title']); ?></h1>
                <ul class="cs_breadcrumb cs_mp_0 cs_fs_16">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="courses.php">Programs</a></li>
                    <li><?= htmlspecialchars($course['title']); ?></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Header -->

    <!-- Start Sticky Navigation Tabs -->
    <nav class="cs_course_sticky_nav" id="courseStickyNav">
        <div class="container">
            <ul class="cs_course_nav_tabs cs_mp_0">
                <li class="active"><a href="#overview">Overview</a></li>
                <li><a href="#universities">Universities</a></li>
                <li><a href="#specialisations">Specialisations</a></li>
                <li><a href="#fees">Fees</a></li>
                <li><a href="#eligibility">Eligibility</a></li>
                <li><a href="#syllabus">Syllabus</a></li>
                <li><a href="#career">Career</a></li>
                <li><a href="#faqs">FAQs</a></li>
            </ul>
        </div>
    </nav>
    <!-- End Sticky Navigation Tabs -->

    <!-- Start Overview Section -->
    <section class="cs_mba_hero" id="overview">
        <div class="container">
            <div class="row align-items-center cs_gap_y_40">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="cs_mba_badge">
                        <i class="ri-graduation-cap-line"></i> <?= htmlspecialchars($course['program_badge'] ?? 'Degree Program'); ?>
                    </span>
                    <h1 class="cs_mba_section_title">
                        <?= htmlspecialchars($course['full_title'] ?? $course['title']); ?>
                    </h1>
                    <p class="cs_mba_section_subtitle mb-0">
                        <?= htmlspecialchars($course['hero_desc'] ?? ''); ?>
                    </p>

                    <div class="cs_mba_metrics_grid">
                        <div class="cs_mba_metric_item">
                            <div class="cs_mba_metric_icon">
                                <i class="ri-time-line"></i>
                            </div>
                            <div class="cs_mba_metric_info">
                                <h4>Duration</h4>
                                <p><?= htmlspecialchars($course['duration'] ?? '2 Years'); ?></p>
                            </div>
                        </div>

                        <div class="cs_mba_metric_item">
                            <div class="cs_mba_metric_icon">
                                <i class="ri-computer-line"></i>
                            </div>
                            <div class="cs_mba_metric_info">
                                <h4>Learning Mode</h4>
                                <p><?= htmlspecialchars($course['mode'] ?? '100% Online & Self-Paced'); ?></p>
                            </div>
                        </div>

                        <div class="cs_mba_metric_item">
                            <div class="cs_mba_metric_icon">
                                <i class="ri-award-line"></i>
                            </div>
                            <div class="cs_mba_metric_info">
                                <h4>Accreditation</h4>
                                <p><?= htmlspecialchars($course['accreditation'] ?? 'UGC-DEB Entitled'); ?></p>
                            </div>
                        </div>

                        <div class="cs_mba_metric_item">
                            <div class="cs_mba_metric_icon">
                                <i class="ri-user-star-line"></i>
                            </div>
                            <div class="cs_mba_metric_info">
                                <h4>Eligibility</h4>
                                <p><?= htmlspecialchars($course['eligibility'] ?? 'Graduation (Min 50%)'); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-3 align-items-center">
                        <a href="#counselling" class="cs_primary_btn">
                            <span>Talk to an Expert</span>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                        <a href="#universities" class="cs_secondary_btn">
                            <span>Compare Universities</span>
                            <i class="ri-arrow-down-line"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="cs_mba_hero_media">
                        <img src="<?= htmlspecialchars($course['image'] ?? 'assets/img/course/mba.jpg'); ?>" alt="<?= htmlspecialchars($course['title']); ?>" class="cs_mba_hero_img" width="600" height="400" loading="eager">
                        <div class="cs_mba_hero_pill cs_top_pill">
                            <i class="ri-verified-badge-fill text-primary"></i>
                            <span><?= htmlspecialchars($course['pill_top'] ?? 'UGC Entitled Degree'); ?></span>
                        </div>
                        <div class="cs_mba_hero_pill cs_bottom_pill">
                            <i class="ri-line-chart-fill"></i>
                            <span><?= htmlspecialchars($course['pill_bottom'] ?? 'Career Growth'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Overview Section -->

    <!-- Start Universities Section -->
    <section class="cs_uni_section cs_section_padding cs_gray_bg" id="universities">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="cs_mba_badge">
                    <i class="ri-building-line"></i> Top Accredited Institutions
                </span>
                <h2 class="cs_mba_section_title">Top Universities Offering <?= htmlspecialchars($course['title']); ?></h2>
                <p class="cs_mba_section_subtitle mx-auto">
                    Compare and choose from India's premier UGC-entitled universities offering recognized online <?= htmlspecialchars($course['title']); ?> degrees.
                </p>
            </div>

            <?php if (!empty($offering_universities)): ?>
                <div class="cs_uni_grid">
                    <?php foreach ($offering_universities as $uni): ?>
                        <div class="cs_uni_card" data-aos="fade-up">
                            <div class="cs_uni_card_top">
                                <div class="cs_uni_logo_box">
                                    <img src="<?= htmlspecialchars($uni['logo'] ?? 'assets/img/icons/graduation-cap.svg'); ?>" alt="<?= htmlspecialchars($uni['alt'] ?? $uni['name']); ?>" loading="lazy">
                                </div>
                                <span class="cs_uni_badge_top">
                                    <i class="ri-shield-check-fill"></i> <?= htmlspecialchars($uni['badge'] ?? 'UGC-DEB'); ?>
                                </span>
                            </div>
                            
                            <h3 class="cs_uni_name"><a href="<?= htmlspecialchars($uni['url'] ?? 'universities.php'); ?>" style="color:inherit; text-decoration:none;"><?= htmlspecialchars($uni['name']); ?></a></h3>
                            
                            <div class="cs_uni_meta">
                                <span class="cs_uni_meta_pill"><i class="ri-award-line"></i> <?= htmlspecialchars($uni['accreditation'] ?? 'NAAC'); ?></span>
                                <span class="cs_uni_meta_pill"><i class="ri-time-line"></i> <?= htmlspecialchars($uni['duration'] ?? $course['duration'] ?? '2 Years'); ?></span>
                                <span class="cs_uni_meta_pill"><i class="ri-global-line"></i> Online Mode</span>
                            </div>

                            <div class="cs_uni_fee_row">
                                <div class="cs_uni_fee_text">
                                    <small>Starting Fees</small>
                                    <strong><?= htmlspecialchars($uni['fee'] ?? 'Fees On Request'); ?></strong>
                                </div>
                                <a href="#counselling" class="cs_uni_btn">
                                    <span>Enquire</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="text-center p-5 bg-white rounded-3 shadow-sm my-4" data-aos="fade-up">
                    <div class="mb-3 text-primary" style="font-size: 42px;"><i class="ri-building-line"></i></div>
                    <h3 class="cs_fs_24 cs_bold mb-2">Admissions Opening Soon</h3>
                    <p class="text-muted mx-auto" style="max-width: 600px; font-size: 15px; line-height: 1.6;">
                        Partner universities offering this program will be updated shortly as newly entitled institutions open their admission cycle. Connect with our academic counselling team for the latest syllabus, partner updates, and early admission support.
                    </p>
                    <a href="#counselling" class="cs_primary_btn mt-3">
                        <span>Get Admission Guidance</span>
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- End Universities Section -->

    <!-- Start Popular Specialisations -->
    <?php if (!empty($course['specialisations'])): ?>
    <section class="cs_spec_section" id="specialisations">
        <div class="container">
            <div data-aos="fade-up">
                <span class="cs_mba_badge">
                    <i class="ri-graduation-cap-line"></i> CHOOSE YOUR INTEREST
                </span>
                <h2 class="cs_mba_section_title">Popular <?= htmlspecialchars($course['title']); ?> Specialisations</h2>
            </div>

            <div class="cs_spec_grid mt-4">
                <?php 
                $delay = 0;
                foreach ($course['specialisations'] as $spec): 
                    $color_class = 'cs_spec_' . ($spec['color'] ?? 'blue');
                ?>
                    <div class="cs_spec_card" data-aos="fade-up" data-aos-delay="<?= $delay; ?>">
                        <div class="cs_spec_card_top">
                            <div class="cs_spec_icon <?= $color_class; ?>">
                                <i class="<?= htmlspecialchars($spec['icon'] ?? 'ri-bookmark-line'); ?>"></i>
                            </div>
                            <span class="cs_spec_arrow">
                                <i class="ri-arrow-right-s-line"></i>
                            </span>
                        </div>
                        <h3 class="cs_spec_title"><?= htmlspecialchars($spec['title']); ?></h3>
                        <p class="cs_spec_desc"><?= htmlspecialchars($spec['desc']); ?></p>
                    </div>
                <?php 
                    $delay += 100;
                endforeach; 
                ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End Popular Specialisations -->

    <!-- Start Fees & Eligibility Cards -->
    <section class="cs_fees_eligibility_section" id="fees">
        <div class="container">
            <div class="cs_two_cards_grid">
                <!-- Card 1: Fees -->
                <div class="cs_highlight_card cs_card_fees" data-aos="fade-right">
                    <div class="cs_highlight_icon_box">
                        <i class="ri-wallet-3-line"></i>
                    </div>
                    <div class="cs_highlight_content">
                        <span class="cs_highlight_badge">
                            <i class="ri-coin-line"></i> COURSE FEES
                        </span>
                        <h3 class="cs_highlight_title">Understand <?= htmlspecialchars($course['title']); ?> Fees</h3>
                        <p class="cs_highlight_desc">
                            <?= htmlspecialchars($course['fee_desc'] ?? 'Fees vary by university, specialisation and payment structure. Compare fees and find the best option for your budget.'); ?>
                        </p>
                        <a href="universities.php" class="cs_highlight_link">
                            Compare University Fees <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 2: Eligibility -->
                <div class="cs_highlight_card cs_card_eligibility" id="eligibility" data-aos="fade-left">
                    <div class="cs_highlight_icon_box">
                        <i class="ri-file-user-line"></i>
                    </div>
                    <div class="cs_highlight_content">
                        <span class="cs_highlight_badge">
                            <i class="ri-graduation-cap-line"></i> ELIGIBILITY
                        </span>
                        <h3 class="cs_highlight_title">Who Can Apply?</h3>
                        <p class="cs_highlight_desc">
                            <?= htmlspecialchars($course['eligibility_desc'] ?? 'Graduates from a recognised university are eligible. Check the exact requirements before applying.'); ?>
                        </p>
                        <a href="universities.php" class="cs_highlight_link">
                            Check Eligibility <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fees & Eligibility Cards -->

    <!-- Start Admission Process -->
    <section class="cs_admission_process_section" id="admission-process">
        <div class="container">
            <div data-aos="fade-up">
                <span class="cs_mba_badge">
                    <i class="ri-graduation-cap-line"></i> ADMISSION PROCESS
                </span>
                <h2 class="cs_mba_section_title">How to Get Started?</h2>
                <p class="cs_mba_section_subtitle">
                    A simple process to help you move from exploration to admission with expert guidance.
                </p>
            </div>

            <div class="cs_admission_steps_row mt-4" data-aos="fade-up" data-aos-delay="100">
                <!-- Step 01 -->
                <div class="cs_admission_step_item">
                    <div class="cs_admission_step_icon">
                        <i class="ri-search-line"></i>
                    </div>
                    <div class="cs_admission_step_content">
                        <span class="cs_admission_step_num">01</span>
                        <h4 class="cs_admission_step_title">Explore</h4>
                        <p class="cs_admission_step_desc">Explore online <?= htmlspecialchars($course['title']); ?> universities and courses.</p>
                    </div>
                </div>

                <div class="cs_admission_step_arrow">
                    <i class="ri-arrow-right-s-line"></i>
                </div>

                <!-- Step 02 -->
                <div class="cs_admission_step_item">
                    <div class="cs_admission_step_icon">
                        <i class="ri-scales-3-line"></i>
                    </div>
                    <div class="cs_admission_step_content">
                        <span class="cs_admission_step_num">02</span>
                        <h4 class="cs_admission_step_title">Compare</h4>
                        <p class="cs_admission_step_desc">Compare fees, duration and specialisations.</p>
                    </div>
                </div>

                <div class="cs_admission_step_arrow">
                    <i class="ri-arrow-right-s-line"></i>
                </div>

                <!-- Step 03 -->
                <div class="cs_admission_step_item">
                    <div class="cs_admission_step_icon">
                        <i class="ri-user-3-line"></i>
                    </div>
                    <div class="cs_admission_step_content">
                        <span class="cs_admission_step_num">03</span>
                        <h4 class="cs_admission_step_title">Get Guidance</h4>
                        <p class="cs_admission_step_desc">Speak with a DuraSetu admission expert.</p>
                    </div>
                </div>

                <div class="cs_admission_step_arrow">
                    <i class="ri-arrow-right-s-line"></i>
                </div>

                <!-- Step 04 -->
                <div class="cs_admission_step_item">
                    <div class="cs_admission_step_icon">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                    <div class="cs_admission_step_content">
                        <span class="cs_admission_step_num">04</span>
                        <h4 class="cs_admission_step_title">Apply</h4>
                        <p class="cs_admission_step_desc">Complete your application and start your journey.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Admission Process -->

    <!-- Start Syllabus Section -->
    <?php if (!empty($course['syllabus'])): ?>
    <section class="cs_section_padding" id="syllabus">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="cs_mba_badge">
                    <i class="ri-book-open-line"></i> CURRICULUM &amp; MODULES
                </span>
                <h2 class="cs_mba_section_title"><?= htmlspecialchars($course['title']); ?> Syllabus Overview</h2>
                <p class="cs_mba_section_subtitle mx-auto">
                    A comprehensive curriculum designed by leading academic scholars and industry practitioners.
                </p>
            </div>

            <div class="cs_syllabus_grid" data-aos="fade-up">
                <?php foreach ($course['syllabus'] as $sem): ?>
                    <div class="cs_syllabus_card active">
                        <div class="cs_syllabus_head">
                            <h4><?= htmlspecialchars($sem['sem']); ?></h4>
                            <span><?= htmlspecialchars($sem['badge'] ?? 'Core Subjects'); ?></span>
                        </div>
                        <div class="cs_syllabus_body">
                            <ul class="cs_syllabus_list">
                                <?php foreach ($sem['subjects'] as $subject): ?>
                                    <li><i class="ri-checkbox-circle-fill"></i> <?= htmlspecialchars($subject); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End Syllabus Section -->

    <!-- Start Career Scope Section -->
    <?php if (!empty($course['careers'])): ?>
    <section class="cs_career_scope_section" id="career">
        <div class="container">
            <div class="cs_career_grid_wrap">
                <!-- Left text column -->
                <div data-aos="fade-right">
                    <span class="cs_mba_badge">
                        <i class="ri-graduation-cap-line"></i> CAREER SCOPE
                    </span>
                    <h2 class="cs_mba_section_title">
                        Career Opportunities After <?= htmlspecialchars($course['title']); ?>
                    </h2>
                    <p class="cs_mba_section_subtitle">
                        An Online <?= htmlspecialchars($course['title']); ?> prepares you for diverse high-growth job roles across leading corporate and technological sectors.
                    </p>
                    <a href="#counselling" class="cs_career_btn">
                        <span>Explore Career Insights</span>
                        <span class="cs_career_btn_circle">
                            <i class="ri-arrow-right-s-line"></i>
                        </span>
                    </a>
                </div>

                <!-- Right pills grid -->
                <div class="cs_career_pills_grid" data-aos="fade-left">
                    <?php foreach ($course['careers'] as $career): 
                        $cp_color = 'cs_cp_' . ($career['color'] ?? 'blue');
                    ?>
                        <div class="cs_career_pill">
                            <div class="cs_career_pill_icon <?= $cp_color; ?>">
                                <i class="<?= htmlspecialchars($career['icon'] ?? 'ri-briefcase-line'); ?>"></i>
                            </div>
                            <span class="cs_career_pill_text"><?= htmlspecialchars($career['title']); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End Career Scope Section -->

    <!-- Start Frequently Asked Questions -->
    <?php if (!empty($course['faqs'])): ?>
    <section class="cs_mba_faq_section" id="faqs">
        <div class="container">
            <div class="cs_faq_head_row" data-aos="fade-up">
                <div>
                    <span class="cs_mba_badge">
                        <i class="ri-questionnaire-line"></i> FAQ
                    </span>
                    <h2 class="cs_mba_section_title mb-2">Frequently Asked Questions</h2>
                    <p class="cs_mba_section_subtitle mb-0">
                        Find answers to common questions about <?= htmlspecialchars($course['title']); ?> programs, eligibility, fees and admission.
                    </p>
                </div>
                <div>
                    <a href="#counselling" class="cs_faq_view_all">
                        View All FAQs <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>

            <!-- 2-Column Accordion Grid -->
            <?php 
            $faqs = $course['faqs'];
            $col1 = array_slice($faqs, 0, ceil(count($faqs) / 2));
            $col2 = array_slice($faqs, ceil(count($faqs) / 2));
            ?>
            <div class="cs_faq_2col_grid mt-4" data-aos="fade-up">
                <!-- Column 1 -->
                <div>
                    <?php foreach ($col1 as $idx => $faq): ?>
                        <div class="cs_faq_accordion_item <?= $idx === 0 ? 'active' : ''; ?>">
                            <div class="cs_faq_accordion_head">
                                <h4 class="cs_faq_question"><?= htmlspecialchars($faq['q']); ?></h4>
                                <span class="cs_faq_toggle_icon"><i class="ri-add-line"></i></span>
                            </div>
                            <div class="cs_faq_accordion_body">
                                <?= htmlspecialchars($faq['a']); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Column 2 -->
                <div>
                    <?php foreach ($col2 as $faq): ?>
                        <div class="cs_faq_accordion_item">
                            <div class="cs_faq_accordion_head">
                                <h4 class="cs_faq_question"><?= htmlspecialchars($faq['q']); ?></h4>
                                <span class="cs_faq_toggle_icon"><i class="ri-add-line"></i></span>
                            </div>
                            <div class="cs_faq_accordion_body">
                                <?= htmlspecialchars($faq['a']); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- End Frequently Asked Questions -->

    <!-- Start Need Help Choosing Banner -->
    <div class="container" id="counselling">
        <div class="cs_need_help_banner" data-aos="fade-up">
            <div class="cs_need_help_left">
                <div class="cs_need_help_avatar">
                    <i class="ri-customer-service-2-fill"></i>
                </div>
                <div>
                    <h3 class="cs_need_help_title">Need Help Choosing the Right <?= htmlspecialchars($course['title']); ?>?</h3>
                    <p class="cs_need_help_subtitle">Get free and personalised guidance from our education counsellors.</p>
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
    <!-- End Need Help Choosing Banner -->

</main>

<!-- In-page Navigation Tabs & Accordion Script -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    // 1. Sticky Nav Smooth Scrolling with Header Offset
    const navLinks = document.querySelectorAll(".cs_course_nav_tabs li a");
    const navItems = document.querySelectorAll(".cs_course_nav_tabs li");
    const sections = [];

    navLinks.forEach(link => {
        const targetId = link.getAttribute("href");
        if (targetId && targetId.startsWith("#")) {
            const section = document.querySelector(targetId);
            if (section) {
                sections.push({ id: targetId, el: section, link: link, item: link.parentElement });
            }
        }

        link.addEventListener("click", function (e) {
            e.preventDefault();
            const targetId = this.getAttribute("href");
            const targetEl = document.querySelector(targetId);
            if (targetEl) {
                const header = document.querySelector(".cs_site_header");
                const stickyNav = document.getElementById("courseStickyNav");
                const headerHeight = header ? header.offsetHeight : 0;
                const navHeight = stickyNav ? stickyNav.offsetHeight : 50;
                const targetPosition = targetEl.getBoundingClientRect().top + window.pageYOffset - (headerHeight + navHeight + 15);

                window.scrollTo({
                    top: targetPosition,
                    behavior: "smooth"
                });

                navItems.forEach(item => item.classList.remove("active"));
                this.parentElement.classList.add("active");
            }
        });
    });

    // 2. ScrollSpy for Active Tab Highlighting
    window.addEventListener("scroll", function () {
        const header = document.querySelector(".cs_site_header");
        const stickyNav = document.getElementById("courseStickyNav");
        const offset = (header ? header.offsetHeight : 0) + (stickyNav ? stickyNav.offsetHeight : 50) + 120;
        const scrollPosition = window.pageYOffset + offset;

        for (let i = sections.length - 1; i >= 0; i--) {
            const sec = sections[i];
            const top = sec.el.offsetTop;
            const height = sec.el.offsetHeight;

            if (scrollPosition >= top && scrollPosition < top + height) {
                navItems.forEach(item => item.classList.remove("active"));
                sec.item.classList.add("active");

                // Auto scroll tab container on mobile
                const navTabsContainer = document.querySelector(".cs_course_nav_tabs");
                if (navTabsContainer) {
                    const activeTab = sec.item;
                    const leftPos = activeTab.offsetLeft - (navTabsContainer.clientWidth / 2) + (activeTab.clientWidth / 2);
                    navTabsContainer.scrollTo({ left: leftPos, behavior: "smooth" });
                }
                break;
            }
        }
    });

    // 3. FAQ Accordion Toggle Interaction
    const faqHeads = document.querySelectorAll(".cs_faq_accordion_head");
    faqHeads.forEach(head => {
        head.addEventListener("click", function () {
            const currentItem = this.parentElement;
            const isActive = currentItem.classList.contains("active");

            const siblingItems = currentItem.parentElement.querySelectorAll(".cs_faq_accordion_item");
            siblingItems.forEach(item => item.classList.remove("active"));

            if (!isActive) {
                currentItem.classList.add("active");
            }
        });
    });

    // 4. Syllabus Accordion Toggle
    const syllabusHeads = document.querySelectorAll(".cs_syllabus_head");
    syllabusHeads.forEach(head => {
        head.addEventListener("click", function () {
            this.parentElement.classList.toggle("active");
        });
    });
});
</script>

