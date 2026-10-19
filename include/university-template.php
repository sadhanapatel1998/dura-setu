<?php
if (!isset($univ) || empty($univ)) {
    die("University data not specified.");
}
?>

<main>
    <!-- Start Page Header / Breadcrumb -->
    <section class="cs_page_header cs_bg_filed" data-src="assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="cs_page_header_text" data-aos="fade-up">
                <h1 class="cs_page_header_title cs_fs_48 cs_bold"><?= htmlspecialchars($univ['name']); ?></h1>
                <ul class="cs_breadcrumb cs_mp_0 cs_fs_16">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="universities.php">Universities</a></li>
                    <li><?= htmlspecialchars($univ['name']); ?></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Header -->

    <!-- Start University Hero & Overview Section -->
    <section class="cs_unid_hero">
        <div class="container">
            <div class="cs_unid_hero_grid">
                
                <!-- Left Hero Details -->
                <div class="cs_unid_hero_left" data-aos="fade-right">
                    <div class="cs_unid_hero_top_row">
                        <!-- Left Content Info -->
                        <div>
                            <img src="<?= htmlspecialchars($univ['logo']); ?>" alt="<?= htmlspecialchars($univ['name']); ?> Logo" class="cs_unid_logo">
                            <h1 class="cs_unid_title"><?= htmlspecialchars($univ['name']); ?></h1>
                            <p class="cs_unid_subtitle"><?= htmlspecialchars($univ['subtitle']); ?></p>
                            <p class="cs_unid_desc"><?= htmlspecialchars($univ['hero_desc']); ?></p>

                            <!-- Trust Badges Row -->
                            <div class="cs_unid_trust_badges">
                                <?php foreach ($univ['trust_badges'] as $badge): ?>
                                    <span class="cs_unid_trust_pill <?= htmlspecialchars($badge['type']); ?>">
                                        <i class="<?= htmlspecialchars($badge['icon']); ?>"></i>
                                        <?= htmlspecialchars($badge['label']); ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>

                            <!-- CTA Buttons -->
                            <div class="cs_unid_hero_btns">
                                <a href="universities.php" class="cs_unid_btn_primary">
                                    <span>Compare Universities</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                                <a href="contact.php" class="cs_unid_btn_secondary">
                                    <span>Apply Now</span>
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Right Campus Photo & 3 Stats (Under Photo) -->
                        <div class="cs_unid_campus_box">
                            <img src="<?= htmlspecialchars($univ['campus_img']); ?>" alt="<?= htmlspecialchars($univ['name']); ?> Campus" class="cs_unid_campus_img" width="400" height="200" loading="eager">
                            <div class="cs_unid_stats_row">
                                <div class="cs_unid_stat_item">
                                    <span class="cs_unid_stat_num"><?= htmlspecialchars($univ['since']); ?></span>
                                    <span class="cs_unid_stat_lbl">Online Programs Since</span>
                                </div>
                                <div class="cs_unid_stat_item">
                                    <span class="cs_unid_stat_num"><?= htmlspecialchars($univ['learners']); ?></span>
                                    <span class="cs_unid_stat_lbl">Learners Enrolled</span>
                                </div>
                                <div class="cs_unid_stat_item">
                                    <span class="cs_unid_stat_num">Top Ranked</span>
                                    <span class="cs_unid_stat_lbl"><?= htmlspecialchars($univ['overview']['type']); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Floating University Overview Card -->
                <div class="cs_unid_sidebar_col" data-aos="fade-left">
                    <div class="cs_unid_sidebar_card">
                        <div class="cs_unid_sidebar_head">
                            <h3>University Overview</h3>
                            <div class="cs_unid_sidebar_icon">
                                <i class="ri-bank-line"></i>
                            </div>
                        </div>

                        <ul class="cs_unid_overview_list">
                            <li class="cs_unid_overview_row">
                                <span class="cs_unid_overview_label">
                                    <i class="ri-building-line"></i> University Type
                                </span>
                                <span class="cs_unid_overview_val"><?= htmlspecialchars($univ['overview']['type']); ?></span>
                            </li>
                            <li class="cs_unid_overview_row">
                                <span class="cs_unid_overview_label">
                                    <i class="ri-shield-check-line"></i> Recognition
                                </span>
                                <span class="cs_unid_overview_val"><?= htmlspecialchars($univ['overview']['recognition']); ?></span>
                            </li>
                            <li class="cs_unid_overview_row">
                                <span class="cs_unid_overview_label">
                                    <i class="ri-award-line"></i> Accreditation
                                </span>
                                <span class="cs_unid_overview_val"><?= htmlspecialchars($univ['overview']['accreditation']); ?></span>
                            </li>
                            <li class="cs_unid_overview_row">
                                <span class="cs_unid_overview_label">
                                    <i class="ri-computer-line"></i> Learning Mode
                                </span>
                                <span class="cs_unid_overview_val"><?= htmlspecialchars($univ['overview']['mode']); ?></span>
                            </li>
                            <li class="cs_unid_overview_row">
                                <span class="cs_unid_overview_label">
                                    <i class="ri-calendar-line"></i> Online Programs Since
                                </span>
                                <span class="cs_unid_overview_val"><?= htmlspecialchars($univ['overview']['since']); ?></span>
                            </li>
                            <li class="cs_unid_overview_row">
                                <span class="cs_unid_overview_label">
                                    <i class="ri-community-line"></i> Part of
                                </span>
                                <span class="cs_unid_overview_val"><?= htmlspecialchars($univ['overview']['group']); ?></span>
                            </li>
                        </ul>

                        <div class="cs_unid_sidebar_actions">
                            <a href="tel:+919315913702" class="cs_unid_sidebar_btn_primary">
                                <span>Talk to an Expert</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                            <a href="tel:+919315913702" class="cs_unid_sidebar_btn_secondary">
                                <i class="ri-phone-line"></i>
                                <span>Get Free Counselling</span>
                            </a>
                        </div>

                        <p class="cs_unid_sidebar_trust_note">
                            <i class="ri-shield-check-fill"></i>
                            <span>Get personalised guidance from our education counsellors.</span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End University Hero -->

    <!-- Start Sticky Horizontal Navigation Bar -->
    <nav class="cs_unid_sticky_nav" id="unidStickyNav">
        <div class="container">
            <ul class="cs_unid_nav_list">
                <li class="active"><a href="#overview">Overview</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a href="#approvals">Approvals &amp; Accreditation</a></li>
                <li><a href="#fees">Fees</a></li>
                <li><a href="#admission">Admission</a></li>
                <li><a href="#lms">LMS</a></li>
                <li><a href="#exams">Exams</a></li>
                <li><a href="#placements">Placements</a></li>
                <li><a href="#faqs">FAQs</a></li>
            </ul>
        </div>
    </nav>
    <!-- End Sticky Horizontal Navigation Bar -->

    <!-- Section 1: About the University (#overview) -->
    <section class="cs_unid_section" id="overview">
        <div class="container">
            <div class="cs_unid_about_grid">
                <!-- Left Story -->
                <div class="cs_unid_about_text" data-aos="fade-right">
                    <span class="cs_unid_badge">
                        <i class="ri-graduation-cap-line"></i> ABOUT THE UNIVERSITY
                    </span>
                    <h2 class="cs_unid_sec_title">About <?= htmlspecialchars($univ['name']); ?></h2>
                    <p><?= htmlspecialchars($univ['about_p1']); ?></p>
                    <p><?= htmlspecialchars($univ['about_p2']); ?></p>
                    <p>Learners gain 24/7 access to comprehensive LMS courseware, interactive virtual labs, live academic webinars, and continuous faculty mentorship. Programs are structured specifically to empower working executives and career changers to attain accredited degrees without halting their current profession.</p>
                </div>

                <!-- Right Why Choose Card -->
                <div class="cs_unid_why_col" data-aos="fade-left">
                    <div class="cs_unid_why_card">
                        <h3 class="cs_unid_why_title">
                            <i class="ri-trophy-line"></i>
                            Why Choose <?= htmlspecialchars($univ['short_name']); ?>?
                        </h3>
                        <ul class="cs_unid_why_list">
                            <?php foreach ($univ['why_points'] as $point): ?>
                                <li class="cs_unid_why_item">
                                    <i class="ri-checkbox-circle-fill"></i>
                                    <span><?= htmlspecialchars($point); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section 1: About the University -->

    <!-- Section 2: Popular Online Courses (#courses) -->
    <section class="cs_unid_section alt_bg" id="courses">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-4" data-aos="fade-up">
                <div>
                    <span class="cs_unid_badge">
                        <i class="ri-book-open-line"></i> POPULAR PROGRAMS
                    </span>
                    <h2 class="cs_unid_sec_title mb-1">Popular Online Courses</h2>
                    <p class="cs_unid_sec_subtitle mb-0">Choose from a wide range of UGC-entitled undergraduate and postgraduate programs.</p>
                </div>
                <div>
                    <a href="courses.php" class="cs_unid_btn_secondary">
                        <span>View All Courses</span>
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>

            <?php if (!empty($univ['courses'])): ?>
                <div class="cs_unid_course_grid">
                    <?php foreach ($univ['courses'] as $course): ?>
                        <div class="cs_unid_course_card" data-aos="fade-up">
                            <div class="cs_unid_course_icon <?= htmlspecialchars($course['theme']); ?>">
                                <i class="<?= htmlspecialchars($course['icon']); ?>"></i>
                            </div>
                            <h3 class="cs_unid_course_name"><?= htmlspecialchars($course['name']); ?></h3>
                            <span class="cs_unid_course_duration"><?= htmlspecialchars($course['duration']); ?></span>
                            <div class="cs_unid_course_fee"><?= htmlspecialchars($course['fee']); ?></div>
                            <a href="<?= htmlspecialchars($course['url']); ?>" class="cs_unid_course_btn">
                                <span>View Course</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="p-4 text-center bg-white rounded-3 border" data-aos="fade-up">
                    <p class="text-muted mb-0">Course details for this university will be available soon. Please connect with our counsellors for the latest prospectus.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- End Section 2: Popular Online Courses -->

    <!-- Section 3: Approvals & Recognition (#approvals) -->
    <section class="cs_unid_section" id="approvals">
        <div class="container">
            <div data-aos="fade-up">
                <span class="cs_unid_badge">
                    <i class="ri-award-line"></i> APPROVALS &amp; RECOGNITION
                </span>
                <h2 class="cs_unid_sec_title">Recognised, Trusted and Reputed</h2>
                <p class="cs_unid_sec_subtitle">Degrees from <?= htmlspecialchars($univ['name']); ?> are recognised and valued by employers across industries.</p>
            </div>

            <div class="cs_unid_approvals_grid mt-4">
                <!-- Left Approval Cards -->
                <div class="cs_unid_approval_cards" data-aos="fade-right">
                    <?php foreach ($univ['approvals'] as $app): ?>
                        <div class="cs_unid_approval_item">
                            <div class="cs_unid_approval_badge_img <?= htmlspecialchars($app['type']); ?>">
                                <i class="<?= htmlspecialchars($app['icon']); ?>"></i>
                            </div>
                            <div class="cs_unid_approval_info">
                                <h4><?= htmlspecialchars($app['title']); ?></h4>
                                <p><?= htmlspecialchars($app['desc']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Right Campus Building Photo -->
                <div class="cs_unid_approvals_img_wrap" data-aos="fade-left">
                    <img src="<?= htmlspecialchars($univ['campus_img']); ?>" alt="<?= htmlspecialchars($univ['name']); ?> Campus Building" class="cs_unid_approvals_campus_img" width="500" height="250" loading="lazy">
                </div>
            </div>
        </div>
    </section>
    <!-- End Section 3: Approvals & Recognition -->

    <!-- Section 4: Affordable Fee Structure (#fees) -->
    <section class="cs_unid_section alt_bg" id="fees">
        <div class="container">
            <div data-aos="fade-up">
                <span class="cs_unid_badge">
                    <i class="ri-wallet-3-line"></i> FEES &amp; EMI OPTIONS
                </span>
                <h2 class="cs_unid_sec_title">Affordable Fee Structure</h2>
                <p class="cs_unid_sec_subtitle">Choose from flexible payment options to plan your education with ease.</p>
            </div>

            <div class="cs_unid_fees_grid mt-4">
                <!-- Left Table -->
                <div class="cs_unid_fee_table_wrap" data-aos="fade-right">
                    <table class="cs_unid_fee_table">
                        <thead>
                            <tr>
                                <th>Program</th>
                                <th>Duration</th>
                                <th>Total Fees (INR)</th>
                                <th>EMI Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($univ['fee_structure'])): ?>
                                <?php foreach ($univ['fee_structure'] as $feeRow): ?>
                                    <tr>
                                        <td><strong><?= htmlspecialchars($feeRow['program']); ?></strong></td>
                                        <td><?= htmlspecialchars($feeRow['duration']); ?></td>
                                        <td><strong><?= htmlspecialchars($feeRow['total']); ?></strong></td>
                                        <td><?= htmlspecialchars($feeRow['emi']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="text-center text-muted py-4">Detailed fee schedule will be updated shortly. Please connect with our counselling team for the official fee breakdown.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <!-- Right Highlight Box -->
                <div class="cs_unid_fee_highlight_col" data-aos="fade-left">
                    <div class="cs_unid_fee_highlight_card">
                        <h3 class="cs_unid_fee_highlight_title">
                            <i class="ri-wallet-fill"></i>
                            Flexible Payment Options
                        </h3>
                        <ul class="cs_unid_why_list mb-4">
                            <li class="cs_unid_why_item">
                                <i class="ri-checkbox-circle-fill"></i>
                                <span>Easy EMI options available</span>
                            </li>
                            <li class="cs_unid_why_item">
                                <i class="ri-checkbox-circle-fill"></i>
                                <span>Pay semester-wise installments</span>
                            </li>
                            <li class="cs_unid_why_item">
                                <i class="ri-checkbox-circle-fill"></i>
                                <span>Multiple digital payment modes</span>
                            </li>
                            <li class="cs_unid_why_item">
                                <i class="ri-checkbox-circle-fill"></i>
                                <span>Get detailed fee structure from our counsellors.</span>
                            </li>
                        </ul>
                        <a href="universities.php" class="cs_unid_btn_primary w-100 justify-content-center">
                            <span>Compare Universities</span>
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section 4: Fee Structure -->

    <!-- Section 5: Admission Process (#admission) -->
    <section class="cs_unid_section" id="admission">
        <div class="container">
            <div data-aos="fade-up">
                <span class="cs_unid_badge">
                    <i class="ri-file-user-line"></i> ADMISSION PROCESS
                </span>
                <h2 class="cs_unid_sec_title">Simple Steps to Start Your Journey</h2>
                <p class="cs_unid_sec_subtitle">A transparent and hassle-free online admission process.</p>
            </div>

            <div class="cs_unid_steps_row mt-4" data-aos="fade-up">
                <!-- Step 01 -->
                <div class="cs_unid_step_box">
                    <div class="cs_unid_step_num">01</div>
                    <div class="cs_unid_step_icon"><i class="ri-file-list-line"></i></div>
                    <h4 class="cs_unid_step_title">Check Eligibility</h4>
                    <p class="cs_unid_step_desc">Review the eligibility criteria for your program.</p>
                </div>

                <div class="cs_unid_step_arrow"><i class="ri-arrow-right-s-line"></i></div>

                <!-- Step 02 -->
                <div class="cs_unid_step_box">
                    <div class="cs_unid_step_num">02</div>
                    <div class="cs_unid_step_icon"><i class="ri-edit-line"></i></div>
                    <h4 class="cs_unid_step_title">Fill Application Form</h4>
                    <p class="cs_unid_step_desc">Complete the online application form.</p>
                </div>

                <div class="cs_unid_step_arrow"><i class="ri-arrow-right-s-line"></i></div>

                <!-- Step 03 -->
                <div class="cs_unid_step_box">
                    <div class="cs_unid_step_num">03</div>
                    <div class="cs_unid_step_icon"><i class="ri-upload-cloud-line"></i></div>
                    <h4 class="cs_unid_step_title">Submit Documents</h4>
                    <p class="cs_unid_step_desc">Upload the required verified documents.</p>
                </div>

                <div class="cs_unid_step_arrow"><i class="ri-arrow-right-s-line"></i></div>

                <!-- Step 04 -->
                <div class="cs_unid_step_box">
                    <div class="cs_unid_step_num">04</div>
                    <div class="cs_unid_step_icon"><i class="ri-wallet-3-line"></i></div>
                    <h4 class="cs_unid_step_title">Pay Program Fee</h4>
                    <p class="cs_unid_step_desc">Pay the program fee as per the selected option.</p>
                </div>

                <div class="cs_unid_step_arrow"><i class="ri-arrow-right-s-line"></i></div>

                <!-- Step 05 -->
                <div class="cs_unid_step_box">
                    <div class="cs_unid_step_num">05</div>
                    <div class="cs_unid_step_icon"><i class="ri-user-follow-line"></i></div>
                    <h4 class="cs_unid_step_title">Admission Confirmation</h4>
                    <p class="cs_unid_step_desc">Receive enrollment confirmation from the university.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section 5: Admission Process -->

    <!-- Section 6 & 7: Dual Features: LMS Experience & Online Exams Side-by-Side (#lms, #exams) -->
    <section class="cs_unid_section alt_bg" id="lms">
        <div class="container">
            <div class="cs_unid_dual_feature_grid">
                
                <!-- Card 1: LMS Experience -->
                <div class="cs_unid_dual_card" data-aos="fade-right">
                    <div>
                        <span class="cs_unid_badge">
                            <i class="ri-computer-line"></i> LEARNING EXPERIENCE
                        </span>
                        <h3 class="cs_unid_sec_title cs_fs_24">Advanced Learning Experience</h3>
                        <p class="cs_unid_sec_subtitle mb-3">Access study materials, live classes, recorded lectures, practice tests and quizzes through a well-designed LMS, available anytime, anywhere.</p>

                        <ul class="cs_unid_why_list mb-3">
                            <li class="cs_unid_why_item">
                                <i class="ri-checkbox-circle-fill"></i>
                                <span>Live &amp; recorded interactive classes</span>
                            </li>
                            <li class="cs_unid_why_item">
                                <i class="ri-checkbox-circle-fill"></i>
                                <span>E-books, case studies &amp; study materials</span>
                            </li>
                            <li class="cs_unid_why_item">
                                <i class="ri-checkbox-circle-fill"></i>
                                <span>Practice tests, assessments &amp; quizzes</span>
                            </li>
                            <li class="cs_unid_why_item">
                                <i class="ri-checkbox-circle-fill"></i>
                                <span>Learn at your own pace from mobile or desktop</span>
                            </li>
                        </ul>
                    </div>

                    <div class="cs_unid_dual_media">
                        <img src="assets/img/course/bca.jpg" alt="Online Learning Experience LMS Mockup" loading="lazy">
                    </div>
                </div>

                <!-- Card 2: Online Exams (#exams) -->
                <div class="cs_unid_dual_card" id="exams" data-aos="fade-left">
                    <div>
                        <span class="cs_unid_badge">
                            <i class="ri-shield-keyhole-line"></i> ONLINE EXAMINATION
                        </span>
                        <h3 class="cs_unid_sec_title cs_fs_24">Secure &amp; Convenient Exams</h3>
                        <p class="cs_unid_sec_subtitle mb-3">Examinations are conducted online with remote proctoring, ensuring a secure, flexible and reliable assessment process.</p>

                        <ul class="cs_unid_why_list mb-3">
                            <li class="cs_unid_why_item">
                                <i class="ri-checkbox-circle-fill"></i>
                                <span>Remotely proctored online exams</span>
                            </li>
                            <li class="cs_unid_why_item">
                                <i class="ri-checkbox-circle-fill"></i>
                                <span>Flexible exam time slots on weekends</span>
                            </li>
                            <li class="cs_unid_why_item">
                                <i class="ri-checkbox-circle-fill"></i>
                                <span>Safe, encrypted &amp; secure environment</span>
                            </li>
                            <li class="cs_unid_why_item">
                                <i class="ri-checkbox-circle-fill"></i>
                                <span>Fair &amp; transparent continuous evaluation</span>
                            </li>
                        </ul>
                    </div>

                    <div class="cs_unid_dual_media">
                        <img src="assets/img/course/mca.jpg" alt="Remote Proctoring Online Exams" loading="lazy">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Section 6 & 7: LMS & Online Exams -->

    <!-- Section 8: Placement & Career Support (#placements) -->
    <section class="cs_unid_section" id="placements">
        <div class="container">
            <div data-aos="fade-up">
                <span class="cs_unid_badge">
                    <i class="ri-briefcase-4-line"></i> PLACEMENT &amp; CAREER SUPPORT
                </span>
                <h2 class="cs_unid_sec_title">Career Support for a Brighter Future</h2>
                <p class="cs_unid_sec_subtitle"><?= htmlspecialchars($univ['name']); ?> provides placement assistance and career guidance to help you achieve your professional goals.</p>
            </div>

            <div class="cs_unid_placement_grid mt-4">
                <!-- Pillar 1 -->
                <div class="cs_unid_placement_card" data-aos="fade-up" data-aos-delay="0">
                    <div class="cs_unid_placement_icon">
                        <i class="ri-briefcase-4-line"></i>
                    </div>
                    <h4 class="cs_unid_placement_title">Placement Assistance</h4>
                    <p class="cs_unid_placement_desc">Guidance, virtual recruitment drives, and opportunities to kickstart your career.</p>
                </div>

                <!-- Pillar 2 -->
                <div class="cs_unid_placement_card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cs_unid_placement_icon">
                        <i class="ri-line-chart-line"></i>
                    </div>
                    <h4 class="cs_unid_placement_title">Career Guidance</h4>
                    <p class="cs_unid_placement_desc">Personalised career counselling sessions with industry mentors and experts.</p>
                </div>

                <!-- Pillar 3 -->
                <div class="cs_unid_placement_card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cs_unid_placement_icon">
                        <i class="ri-file-text-line"></i>
                    </div>
                    <h4 class="cs_unid_placement_title">Resume Support</h4>
                    <p class="cs_unid_placement_desc">Professional resume building assistance and interview coaching workshops.</p>
                </div>

                <!-- Pillar 4 -->
                <div class="cs_unid_placement_card" data-aos="fade-up" data-aos-delay="300">
                    <div class="cs_unid_placement_icon">
                        <i class="ri-team-line"></i>
                    </div>
                    <h4 class="cs_unid_placement_title">Industry Connect</h4>
                    <p class="cs_unid_placement_desc">Access to masterclasses, industry insights, and vast corporate networking opportunities.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section 8: Placement Support -->

    <!-- Section 9: Frequently Asked Questions (#faqs) -->
    <section class="cs_unid_section alt_bg" id="faqs">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-4" data-aos="fade-up">
                <div>
                    <span class="cs_unid_badge">
                        <i class="ri-questionnaire-line"></i> FAQ
                    </span>
                    <h2 class="cs_unid_sec_title mb-1">Frequently Asked Questions</h2>
                    <p class="cs_unid_sec_subtitle mb-0">Find answers to common questions about <?= htmlspecialchars($univ['name']); ?>.</p>
                </div>
                <div>
                    <a href="contact.php" class="cs_unid_btn_secondary">
                        <span>Get Appointment</span>
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>

            <div class="cs_unid_faq_grid" data-aos="fade-up">
                <?php foreach ($univ['faqs'] as $index => $faq): ?>
                    <div class="cs_unid_faq_card <?= $index === 0 ? 'active' : ''; ?>">
                        <div class="cs_unid_faq_header">
                            <h4 class="cs_unid_faq_q"><?= htmlspecialchars($faq['q']); ?></h4>
                            <span class="cs_unid_faq_toggle"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_unid_faq_answer">
                            <?= htmlspecialchars($faq['a']); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End Section 9: FAQs -->

    <!-- Section 10: Counsellor Banner (#counselling) -->
    <div class="container" id="counselling">
        <div class="cs_unid_banner" data-aos="fade-up">
            <div class="cs_unid_banner_left">
                <div class="cs_unid_banner_avatar">
                    <i class="ri-customer-service-2-fill"></i>
                </div>
                <div>
                    <h3 class="cs_unid_banner_title">Need Help Choosing the Right Program?</h3>
                    <p class="cs_unid_banner_subtitle">Get free and personalised guidance from our education counsellors.</p>
                </div>
            </div>
            <div>
                <a href="tel:+919315913702" class="cs_unid_btn_primary">
                    <span>Talk to an Expert</span>
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- End Section 10: Counsellor Banner -->

</main>

<!-- In-page Navigation Tabs & Accordion Script -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    // 1. Sticky Nav Smooth Scrolling with Header Offset
    const navLinks = document.querySelectorAll(".cs_unid_nav_list li a");
    const navItems = document.querySelectorAll(".cs_unid_nav_list li");
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
                const stickyNav = document.getElementById("unidStickyNav");
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
        const stickyNav = document.getElementById("unidStickyNav");
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
                const navTabsContainer = document.querySelector(".cs_unid_nav_list");
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
    const faqCards = document.querySelectorAll(".cs_unid_faq_card");
    faqCards.forEach(card => {
        const header = card.querySelector(".cs_unid_faq_header");
        if (header) {
            header.addEventListener("click", function () {
                const isActive = card.classList.contains("active");
                card.classList.toggle("active");
            });
        }
    });
});
</script>

<?php
$content = ob_get_clean();
require 'layout.php';
?>

