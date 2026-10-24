<?php
ob_start();
include("include/data.php");

// Centralized data set for top accredited BBA universities
$bba_universities = dura_get_course_universities_list('online-bba', [
    [
        'name' => 'Manipal University Jaipur Online',
        'logo' => 'assets/img/university/manipal-logo-jaipur.png',
        'alt' => 'Manipal University Jaipur Online',
        'badge' => 'UGC-DEB',
        'accreditation' => 'NAAC A+',
        'duration' => '3 Years',
        'fee' => '₹1,26,000 Total',
        'emi' => '₹3,500/mo',
        'url' => 'manipal-university-jaipur.php'
    ],
    [
        'name' => 'NMIMS Online University',
        'logo' => 'assets/img/university/nmims-logo.png',
        'alt' => 'NMIMS Online University',
        'badge' => 'UGC-DEB',
        'accreditation' => 'NAAC A+',
        'duration' => '3 Years',
        'fee' => '₹1,44,000 Total',
        'emi' => '₹4,000/mo',
        'url' => 'nmims-online.php'
    ]
]);

?>

<main>
    <!-- Start Page Header -->
    <section class="cs_page_header cs_bg_filed" data-src="assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="cs_page_header_text" data-aos="fade-up">
                <h1 class="cs_page_header_title cs_fs_48 cs_bold">Online BBA Degree</h1>
                <ul class="cs_breadcrumb cs_mp_0 cs_fs_16">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="courses.php">Programs</a></li>
                    <li>Online BBA</li>
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
                        <i class="ri-graduation-cap-line"></i> Undergraduate Degree Program
                    </span>
                    <h1 class="cs_mba_section_title">
                        Bachelor of Business Administration (Online BBA)
                    </h1>
                    <p class="cs_mba_section_subtitle mb-0">
                        An Online BBA is a 3-year UGC-DEB entitled professional undergraduate degree designed to develop versatile corporate leaders, marketing strategists, and innovative entrepreneurs right after Class 12.
                    </p>

                    <div class="cs_mba_metrics_grid">
                        <div class="cs_mba_metric_item">
                            <div class="cs_mba_metric_icon">
                                <i class="ri-time-line"></i>
                            </div>
                            <div class="cs_mba_metric_info">
                                <h4>Duration</h4>
                                <p>3 Years (6 Semesters)</p>
                            </div>
                        </div>

                        <div class="cs_mba_metric_item">
                            <div class="cs_mba_metric_icon">
                                <i class="ri-computer-line"></i>
                            </div>
                            <div class="cs_mba_metric_info">
                                <h4>Learning Mode</h4>
                                <p>100% Online &amp; Self-Paced</p>
                            </div>
                        </div>

                        <div class="cs_mba_metric_item">
                            <div class="cs_mba_metric_icon">
                                <i class="ri-award-line"></i>
                            </div>
                            <div class="cs_mba_metric_info">
                                <h4>Accreditation</h4>
                                <p>UGC-DEB, NAAC A+, AIU</p>
                            </div>
                        </div>

                        <div class="cs_mba_metric_item">
                            <div class="cs_mba_metric_icon">
                                <i class="ri-user-star-line"></i>
                            </div>
                            <div class="cs_mba_metric_info">
                                <h4>Eligibility</h4>
                                <p>10+2 Any Stream (Min 50%)</p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-3 align-items-center">
                        <a href="tel:919315913702" class="cs_primary_btn">
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
                        <img src="assets/img/course/bba.jpg" alt="Online BBA Degree Program" class="cs_mba_hero_img" width="600" height="400" loading="eager">
                        <div class="cs_mba_hero_pill cs_top_pill">
                            <i class="ri-verified-badge-fill text-primary"></i>
                            <span>UGC-Entitled Degree</span>
                        </div>
                        <div class="cs_mba_hero_pill cs_bottom_pill">
                            <i class="ri-line-chart-fill"></i>
                            <span>Direct Pathway to MBA</span>
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
                <h2 class="cs_mba_section_title">Top Universities Offering Online BBA</h2>
                <p class="cs_mba_section_subtitle mx-auto">
                    Compare and enroll in India's leading UGC-entitled universities offering future-ready online BBA degrees.
                </p>
            </div>

            <div class="cs_uni_grid">
                <?php foreach ($bba_universities as $uni): ?>
                    <div class="cs_uni_card" data-aos="fade-up">
                        <div class="cs_uni_card_top">
                            <div class="cs_uni_logo_box">
                                <img src="<?= htmlspecialchars($uni['logo']); ?>" alt="<?= htmlspecialchars($uni['alt']); ?>" loading="lazy">
                            </div>
                            <span class="cs_uni_badge_top">
                                <i class="ri-shield-check-fill"></i> <?= htmlspecialchars($uni['badge']); ?>
                            </span>
                        </div>
                        
                        <h3 class="cs_uni_name"><a href="<?= htmlspecialchars($uni['url'] ?? 'universities.php'); ?>" style="color:inherit; text-decoration:none;"><?= htmlspecialchars($uni['name']); ?></a></h3>
                        
                        <div class="cs_uni_meta">
                            <span class="cs_uni_meta_pill"><i class="ri-award-line"></i> <?= htmlspecialchars($uni['accreditation']); ?></span>
                            <span class="cs_uni_meta_pill"><i class="ri-time-line"></i> <?= htmlspecialchars($uni['duration']); ?></span>
                            <span class="cs_uni_meta_pill"><i class="ri-global-line"></i> Online Mode</span>
                        </div>

                        <div class="cs_uni_fee_row">
                            <div class="cs_uni_fee_text">
                                <small>Starting Fees</small>
                                <strong><?= htmlspecialchars($uni['fee']); ?></strong>
                            </div>
                            <a href="#counselling" class="cs_uni_btn">
                                <span>Enquire</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End Universities Section -->

    <!-- Start Popular BBA Specialisations (Exact Reference Layout) -->
    <section class="cs_spec_section" id="specialisations">
        <div class="container">
            <div data-aos="fade-up">
                <span class="cs_mba_badge">
                    <i class="ri-graduation-cap-line"></i> CHOOSE YOUR CAREER TRACK
                </span>
                <h2 class="cs_mba_section_title">Popular BBA Specialisations</h2>
            </div>

            <div class="cs_spec_grid mt-4">
                <!-- Card 1: Marketing & Sales -->
                <div class="cs_spec_card" data-aos="fade-up" data-aos-delay="0">
                    <div class="cs_spec_card_top">
                        <div class="cs_spec_icon cs_spec_orange">
                            <i class="ri-megaphone-fill"></i>
                        </div>
                        <span class="cs_spec_arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </span>
                    </div>
                    <h3 class="cs_spec_title">Marketing Management</h3>
                    <p class="cs_spec_desc">Master consumer behavior, brand management, digital sales, and market research.</p>
                </div>

                <!-- Card 2: Finance & Banking -->
                <div class="cs_spec_card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cs_spec_card_top">
                        <div class="cs_spec_icon cs_spec_blue">
                            <i class="ri-bank-line"></i>
                        </div>
                        <span class="cs_spec_arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </span>
                    </div>
                    <h3 class="cs_spec_title">Finance &amp; Banking</h3>
                    <p class="cs_spec_desc">Learn financial planning, corporate accounts, investment basics, and wealth advisory.</p>
                </div>

                <!-- Card 3: Human Resource Management -->
                <div class="cs_spec_card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cs_spec_card_top">
                        <div class="cs_spec_icon cs_spec_purple">
                            <i class="ri-group-fill"></i>
                        </div>
                        <span class="cs_spec_arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </span>
                    </div>
                    <h3 class="cs_spec_title">Human Resource (HR)</h3>
                    <p class="cs_spec_desc">Build skills in corporate talent acquisition, employee relations, and leadership.</p>
                </div>

                <!-- Card 4: Digital Business & E-Commerce -->
                <div class="cs_spec_card" data-aos="fade-up" data-aos-delay="300">
                    <div class="cs_spec_card_top">
                        <div class="cs_spec_icon cs_spec_green">
                            <i class="ri-shopping-cart-2-line"></i>
                        </div>
                        <span class="cs_spec_arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </span>
                    </div>
                    <h3 class="cs_spec_title">Digital Business &amp; E-Com</h3>
                    <p class="cs_spec_desc">Understand global e-commerce supply chains, digital marketing, and startup strategies.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Popular BBA Specialisations -->

    <!-- Start Fees & Eligibility Cards (Exact Reference Layout) -->
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
                        <h3 class="cs_highlight_title">Understand Online BBA Fees</h3>
                        <p class="cs_highlight_desc">
                            Total course fees range from ₹96,000 to ₹1,44,000. Take advantage of flexible semester installment plans and zero-interest EMI options starting from ₹2,670/month.
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
                            Candidates who have successfully completed 10+2 (Higher Secondary) in any stream (Commerce, Science, or Arts) with a minimum of 45-50% marks from a recognized state or central board.
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

    <!-- Start Admission Process ("How to Get Started?") (Exact Reference Layout) -->
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
                        <p class="cs_admission_step_desc">Explore online BBA universities and courses.</p>
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
    <section class="cs_section_padding" id="syllabus">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="cs_mba_badge">
                    <i class="ri-book-open-line"></i> CURRICULUM &amp; MODULES
                </span>
                <h2 class="cs_mba_section_title">Online BBA Syllabus Overview</h2>
                <p class="cs_mba_section_subtitle mx-auto">
                    A balanced 6-semester undergraduate syllabus that bridges solid business theory with practical management applications.
                </p>
            </div>

            <div class="cs_syllabus_grid" data-aos="fade-up">
                <!-- Semester 1 -->
                <div class="cs_syllabus_card active">
                    <div class="cs_syllabus_head">
                        <h4>Semester 1: Business Fundamentals</h4>
                        <span>5 Core Subjects</span>
                    </div>
                    <div class="cs_syllabus_body">
                        <ul class="cs_syllabus_list">
                            <li><i class="ri-checkbox-circle-fill"></i> Principles &amp; Practices of Management</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Business Communication &amp; Executive Writing</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Business Mathematics &amp; Statistics</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Financial Accounting Essentials</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Computer Fundamentals &amp; Office Automation</li>
                        </ul>
                    </div>
                </div>

                <!-- Semester 2 -->
                <div class="cs_syllabus_card active">
                    <div class="cs_syllabus_head">
                        <h4>Semester 2: Economics &amp; Marketing Essentials</h4>
                        <span>5 Core Subjects</span>
                    </div>
                    <div class="cs_syllabus_body">
                        <ul class="cs_syllabus_list">
                            <li><i class="ri-checkbox-circle-fill"></i> Managerial Economics &amp; Price Theory</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Organisational Behaviour &amp; Team Dynamics</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Principles of Marketing Management</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Business Law &amp; Commercial Regulations</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Environmental Studies &amp; Sustainability</li>
                        </ul>
                    </div>
                </div>

                <!-- Semester 3 -->
                <div class="cs_syllabus_card active">
                    <div class="cs_syllabus_head">
                        <h4>Semester 3: Financial &amp; HR Management</h4>
                        <span>5 Core Subjects</span>
                    </div>
                    <div class="cs_syllabus_body">
                        <ul class="cs_syllabus_list">
                            <li><i class="ri-checkbox-circle-fill"></i> Cost &amp; Management Accounting</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Human Resource Management Fundamentals</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Management Information Systems (MIS)</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Production &amp; Operations Management</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Business Research Methodology</li>
                        </ul>
                    </div>
                </div>

                <!-- Semester 4 -->
                <div class="cs_syllabus_card active">
                    <div class="cs_syllabus_head">
                        <h4>Semester 4: Strategic &amp; Market Insights</h4>
                        <span>Core + Elective 1</span>
                    </div>
                    <div class="cs_syllabus_body">
                        <ul class="cs_syllabus_list">
                            <li><i class="ri-checkbox-circle-fill"></i> Corporate Financial Management</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Consumer Behaviour &amp; Market Dynamics</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Macroeconomics &amp; Public Policy</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Logistics &amp; Supply Chain Management</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Specialisation Elective Course I</li>
                        </ul>
                    </div>
                </div>

                <!-- Semester 5 -->
                <div class="cs_syllabus_card active">
                    <div class="cs_syllabus_head">
                        <h4>Semester 5: Entrepreneurship &amp; Digital Strategies</h4>
                        <span>Core + Elective 2 + Internship</span>
                    </div>
                    <div class="cs_syllabus_body">
                        <ul class="cs_syllabus_list">
                            <li><i class="ri-checkbox-circle-fill"></i> Strategic Business Management</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Entrepreneurship &amp; New Venture Creation</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Digital Marketing &amp; E-Commerce</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Specialisation Elective Course II</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Industry Summer Internship &amp; Report</li>
                        </ul>
                    </div>
                </div>

                <!-- Semester 6 -->
                <div class="cs_syllabus_card active">
                    <div class="cs_syllabus_head">
                        <h4>Semester 6: Global Business &amp; Capstone Project</h4>
                        <span>Core + Elective 3 + Project</span>
                    </div>
                    <div class="cs_syllabus_body">
                        <ul class="cs_syllabus_list">
                            <li><i class="ri-checkbox-circle-fill"></i> International Business Management</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Business Ethics &amp; Corporate Governance</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Project Management &amp; Analytics</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Specialisation Elective Course III</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Comprehensive BBA Project &amp; Viva Voce</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Syllabus Section -->

    <!-- Start Career Scope Section (Exact Reference Layout) -->
    <section class="cs_career_scope_section" id="career">
        <div class="container">
            <div class="cs_career_grid_wrap">
                <!-- Left text column -->
                <div data-aos="fade-right">
                    <span class="cs_mba_badge">
                        <i class="ri-graduation-cap-line"></i> CAREER SCOPE
                    </span>
                    <h2 class="cs_mba_section_title">
                        Career Opportunities After Online BBA
                    </h2>
                    <p class="cs_mba_section_subtitle">
                        An Online BBA opens lucrative entry-level corporate opportunities across top brands, MNCs, BFSI, and digital commerce companies.
                    </p>
                    <a href="#counselling" class="cs_career_btn">
                        <span>Explore BBA Careers</span>
                        <span class="cs_career_btn_circle">
                            <i class="ri-arrow-right-s-line"></i>
                        </span>
                    </a>
                </div>

                <!-- Right pills grid (3x2 grid matching image) -->
                <div class="cs_career_pills_grid" data-aos="fade-left">
                    <!-- Pill 1 -->
                    <div class="cs_career_pill">
                        <div class="cs_career_pill_icon cs_cp_blue">
                            <i class="ri-briefcase-4-line"></i>
                        </div>
                        <span class="cs_career_pill_text">Business Development</span>
                    </div>

                    <!-- Pill 2 -->
                    <div class="cs_career_pill">
                        <div class="cs_career_pill_icon cs_cp_orange">
                            <i class="ri-megaphone-line"></i>
                        </div>
                        <span class="cs_career_pill_text">Digital Marketing</span>
                    </div>

                    <!-- Pill 3 -->
                    <div class="cs_career_pill">
                        <div class="cs_career_pill_icon cs_cp_yellow">
                            <i class="ri-team-line"></i>
                        </div>
                        <span class="cs_career_pill_text">HR Operations</span>
                    </div>

                    <!-- Pill 4 -->
                    <div class="cs_career_pill">
                        <div class="cs_career_pill_icon cs_cp_chart">
                            <i class="ri-bar-chart-line"></i>
                        </div>
                        <span class="cs_career_pill_text">Financial Analyst</span>
                    </div>

                    <!-- Pill 5 -->
                    <div class="cs_career_pill">
                        <div class="cs_career_pill_icon cs_cp_red">
                            <i class="ri-truck-line"></i>
                        </div>
                        <span class="cs_career_pill_text">Operations Executive</span>
                    </div>

                    <!-- Pill 6 -->
                    <div class="cs_career_pill">
                        <div class="cs_career_pill_icon cs_cp_green">
                            <i class="ri-lightbulb-line"></i>
                        </div>
                        <span class="cs_career_pill_text">Startup Founder</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Career Scope Section -->

    <!-- Start Frequently Asked Questions (Exact Reference Layout) -->
    <section class="cs_mba_faq_section" id="faqs">
        <div class="container">
            <div class="cs_faq_head_row" data-aos="fade-up">
                <div>
                    <span class="cs_mba_badge">
                        <i class="ri-questionnaire-line"></i> FAQ
                    </span>
                    <h2 class="cs_mba_section_title mb-2">Frequently Asked Questions</h2>
                    <p class="cs_mba_section_subtitle mb-0">
                        Find answers to common questions about Online BBA programs, eligibility, fees and university recognition.
                    </p>
                </div>
            </div>

            <!-- 2x2 Accordion Grid -->
            <div class="cs_faq_2col_grid mt-4" data-aos="fade-up">
                <!-- Column 1 -->
                <div>
                    <!-- FAQ 1 -->
                    <div class="cs_faq_accordion_item active">
                        <div class="cs_faq_accordion_head">
                            <h4 class="cs_faq_question">Is an Online BBA degree valid for government jobs?</h4>
                            <span class="cs_faq_toggle_icon"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_faq_accordion_body">
                            Yes. All UGC-DEB approved Online BBA degrees have equal statutory validity to on-campus degrees. You are completely eligible for UPSC, SSC, Banking (IBPS/SBI), Railways, and state government competitive examinations.
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="cs_faq_accordion_item">
                        <div class="cs_faq_accordion_head">
                            <h4 class="cs_faq_question">Can I apply for an on-campus MBA or CAT after Online BBA?</h4>
                            <span class="cs_faq_toggle_icon"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_faq_accordion_body">
                            Absolutely. An Online BBA graduate is fully eligible to take national MBA entrance exams like CAT, XAT, MAT, CMAT, and apply for admissions to top IIMs, IITs, and prestigious global universities.
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div>
                    <!-- FAQ 3 -->
                    <div class="cs_faq_accordion_item">
                        <div class="cs_faq_accordion_head">
                            <h4 class="cs_faq_question">How are exams conducted for Online BBA?</h4>
                            <span class="cs_faq_toggle_icon"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_faq_accordion_body">
                            Examinations are held online via AI-proctored web platforms. Students can comfortably take semester exams from their home using a personal laptop or desktop equipped with a webcam and microphone.
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="cs_faq_accordion_item">
                        <div class="cs_faq_accordion_head">
                            <h4 class="cs_faq_question">Can students work or prepare for exams alongside Online BBA?</h4>
                            <span class="cs_faq_toggle_icon"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_faq_accordion_body">
                            Yes, the 100% online flexible schedule is ideally structured for students who wish to do internships, take on full-time entry jobs, or prepare simultaneously for competitive exams like CA Foundation, UPSC, or Banking.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Frequently Asked Questions -->

    <!-- Start Need Help Choosing Banner (Exact Reference Layout) -->
    <div class="container" id="counselling">
        <div class="cs_need_help_banner" data-aos="fade-up">
            <div class="cs_need_help_left">
                <div class="cs_need_help_avatar">
                    <i class="ri-customer-service-2-fill"></i>
                </div>
                <div>
                    <h3 class="cs_need_help_title">Need Help Choosing the Right Online BBA?</h3>
                    <p class="cs_need_help_subtitle">Get free and personalised guidance from our education counsellors.</p>
                </div>
            </div>
            <div>
                <a href="tel:+919315913702" class="cs_need_help_btn">
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

<?php
$content = ob_get_clean();
require 'layout.php';
?>

