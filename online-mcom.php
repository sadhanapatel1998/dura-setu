<?php
ob_start();
include("include/data.php");

// Centralized data set for top accredited M.Com universities
$mcom_universities = dura_get_course_universities_list('online-mcom', [
    [
        'name' => 'Manipal University Jaipur Online',
        'logo' => 'assets/img/university/manipal-logo-jaipur.png',
        'alt' => 'Manipal University Jaipur Online',
        'badge' => 'UGC-DEB',
        'accreditation' => 'NAAC A+',
        'duration' => '2 Years',
        'fee' => '₹1,00,000 Total',
        'emi' => '₹4,170/mo',
        'url' => 'manipal-university-jaipur.php'
    ],
    [
        'name' => 'NMIMS Online University',
        'logo' => 'assets/img/university/nmims-logo.png',
        'alt' => 'NMIMS Online University',
        'badge' => 'UGC-DEB',
        'accreditation' => 'NAAC A+',
        'duration' => '2 Years',
        'fee' => '₹1,20,000 Total',
        'emi' => '₹5,000/mo',
        'url' => 'nmims-online.php'
    ]
]);

?>

<main>
    <!-- Start Page Header -->
    <section class="cs_page_header cs_bg_filed" data-src="assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="cs_page_header_text" data-aos="fade-up">
                <h1 class="cs_page_header_title cs_fs_48 cs_bold">Online M.Com Degree</h1>
                <ul class="cs_breadcrumb cs_mp_0 cs_fs_16">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="courses.php">Programs</a></li>
                    <li>Online M.Com</li>
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
                        <i class="ri-graduation-cap-line"></i> Postgraduate Degree Program
                    </span>
                    <h1 class="cs_mba_section_title">
                        Master of Commerce (Online M.Com)
                    </h1>
                    <p class="cs_mba_section_subtitle mb-0">
                        An Online M.Com is a 2-year UGC-DEB recognized postgraduate degree designed for finance enthusiasts, accountants, and working professionals. Master advanced corporate accounting, taxation, auditing, and financial risk strategies without relocating.
                    </p>

                    <div class="cs_mba_metrics_grid">
                        <div class="cs_mba_metric_item">
                            <div class="cs_mba_metric_icon">
                                <i class="ri-time-line"></i>
                            </div>
                            <div class="cs_mba_metric_info">
                                <h4>Duration</h4>
                                <p>2 Years (4 Semesters)</p>
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
                                <p>B.Com / BBA / Allied (Min 50%)</p>
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
                        <img src="assets/img/course/mcom.jpg" alt="Online M.Com Degree Program" class="cs_mba_hero_img" width="600" height="400" loading="eager">
                        <div class="cs_mba_hero_pill cs_top_pill">
                            <i class="ri-verified-badge-fill text-primary"></i>
                            <span>UGC-DEB Entitled Degree</span>
                        </div>
                        <div class="cs_mba_hero_pill cs_bottom_pill">
                            <i class="ri-line-chart-fill"></i>
                            <span>Ideal for CA / CS / CFA Aspirants</span>
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
                <h2 class="cs_mba_section_title">Top Universities Offering Online M.Com</h2>
                <p class="cs_mba_section_subtitle mx-auto">
                    Compare and choose from India's foremost UGC-entitled universities offering recognized online M.Com degrees with flexible study hours.
                </p>
            </div>

            <div class="cs_uni_grid">
                <?php foreach ($mcom_universities as $uni): ?>
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

    <!-- Start Popular M.Com Specialisations (Exact Reference Layout) -->
    <section class="cs_spec_section" id="specialisations">
        <div class="container">
            <div data-aos="fade-up">
                <span class="cs_mba_badge">
                    <i class="ri-graduation-cap-line"></i> CHOOSE YOUR FIELD
                </span>
                <h2 class="cs_mba_section_title">Popular M.Com Specialisations</h2>
            </div>

            <div class="cs_spec_grid mt-4">
                <!-- Card 1: Accounting & Auditing -->
                <div class="cs_spec_card" data-aos="fade-up" data-aos-delay="0">
                    <div class="cs_spec_card_top">
                        <div class="cs_spec_icon cs_spec_blue">
                            <i class="ri-calculator-line"></i>
                        </div>
                        <span class="cs_spec_arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </span>
                    </div>
                    <h3 class="cs_spec_title">Accounting &amp; Auditing</h3>
                    <p class="cs_spec_desc">Deepen your expertise in corporate accounts, IFRS standards, and internal auditing systems.</p>
                </div>

                <!-- Card 2: Financial Markets & Investment -->
                <div class="cs_spec_card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cs_spec_card_top">
                        <div class="cs_spec_icon cs_spec_orange">
                            <i class="ri-line-chart-line"></i>
                        </div>
                        <span class="cs_spec_arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </span>
                    </div>
                    <h3 class="cs_spec_title">Financial Markets</h3>
                    <p class="cs_spec_desc">Analyze securities, portfolio investment strategies, risk management, and capital markets.</p>
                </div>

                <!-- Card 3: Direct & Indirect Taxation -->
                <div class="cs_spec_card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cs_spec_card_top">
                        <div class="cs_spec_icon cs_spec_purple">
                            <i class="ri-file-paper-2-line"></i>
                        </div>
                        <span class="cs_spec_arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </span>
                    </div>
                    <h3 class="cs_spec_title">Taxation &amp; GST</h3>
                    <p class="cs_spec_desc">Master direct tax, corporate taxation planning, GST filing, and international trade laws.</p>
                </div>

                <!-- Card 4: Banking & Insurance -->
                <div class="cs_spec_card" data-aos="fade-up" data-aos-delay="300">
                    <div class="cs_spec_card_top">
                        <div class="cs_spec_icon cs_spec_green">
                            <i class="ri-bank-line"></i>
                        </div>
                        <span class="cs_spec_arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </span>
                    </div>
                    <h3 class="cs_spec_title">Banking &amp; Insurance</h3>
                    <p class="cs_spec_desc">Learn commercial banking laws, treasury operations, credit risk, and modern FinTech models.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Popular M.Com Specialisations -->

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
                        <h3 class="cs_highlight_title">Understand Online M.Com Fees</h3>
                        <p class="cs_highlight_desc">
                            Total program fees range from ₹18,600 to ₹1,20,000 depending on the institution. Easy semester installments and zero-interest EMI schemes are available starting at ₹775/month.
                        </p>
                        <a href="#universities" class="cs_highlight_link">
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
                            Graduates with a B.Com, BBA, B.Com (Hons), or equivalent bachelor's degree in commerce and finance with at least 50% aggregate marks from a recognized university.
                        </p>
                        <a href="#counselling" class="cs_highlight_link">
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
                        <p class="cs_admission_step_desc">Explore online M.Com universities and courses.</p>
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
                <h2 class="cs_mba_section_title">Online M.Com Syllabus Overview</h2>
                <p class="cs_mba_section_subtitle mx-auto">
                    A thorough 4-semester curriculum designed to build advanced competencies in accounting, commercial laws, taxation, and corporate finance.
                </p>
            </div>

            <div class="cs_syllabus_grid" data-aos="fade-up">
                <!-- Semester 1 -->
                <div class="cs_syllabus_card active">
                    <div class="cs_syllabus_head">
                        <h4>Semester 1: Commerce Foundations &amp; Accounting</h4>
                        <span>5 Core Subjects</span>
                    </div>
                    <div class="cs_syllabus_body">
                        <ul class="cs_syllabus_list">
                            <li><i class="ri-checkbox-circle-fill"></i> Advanced Financial Accounting &amp; IFRS</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Managerial Economics &amp; Business Policy</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Corporate Financial Management</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Business Environment &amp; Global Trade</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Quantitative Methods &amp; Business Statistics</li>
                        </ul>
                    </div>
                </div>

                <!-- Semester 2 -->
                <div class="cs_syllabus_card active">
                    <div class="cs_syllabus_head">
                        <h4>Semester 2: Corporate Taxation &amp; Cost Control</h4>
                        <span>5 Core Subjects</span>
                    </div>
                    <div class="cs_syllabus_body">
                        <ul class="cs_syllabus_list">
                            <li><i class="ri-checkbox-circle-fill"></i> Corporate Tax Planning &amp; Management</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Advanced Cost &amp; Management Accounting</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Marketing Concepts &amp; Digital Commerce</li>
                            <li><i class="ri-checkbox-circle-fill"></i> International Business &amp; Logistics</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Financial Institutions &amp; Banking Operations</li>
                        </ul>
                    </div>
                </div>

                <!-- Semester 3 -->
                <div class="cs_syllabus_card active">
                    <div class="cs_syllabus_head">
                        <h4>Semester 3: Auditing &amp; Electives</h4>
                        <span>Electives + Research Project</span>
                    </div>
                    <div class="cs_syllabus_body">
                        <ul class="cs_syllabus_list">
                            <li><i class="ri-checkbox-circle-fill"></i> Advanced Auditing Practices &amp; Standards</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Security Analysis &amp; Portfolio Management</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Specialisation Elective I (Taxation / Banking)</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Research Methodology in Commerce</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Internship / Practical Industry Project</li>
                        </ul>
                    </div>
                </div>

                <!-- Semester 4 -->
                <div class="cs_syllabus_card active">
                    <div class="cs_syllabus_head">
                        <h4>Semester 4: Strategic Finance &amp; Master's Thesis</h4>
                        <span>Advanced Elective + Dissertation</span>
                    </div>
                    <div class="cs_syllabus_body">
                        <ul class="cs_syllabus_list">
                            <li><i class="ri-checkbox-circle-fill"></i> Strategic Financial Decision Making</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Banking Laws &amp; Credit Risk Mitigation</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Specialisation Elective II</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Corporate Governance &amp; Professional Ethics</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Final Master's Project &amp; Comprehensive Viva</li>
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
                        Career Opportunities After Online M.Com
                    </h2>
                    <p class="cs_mba_section_subtitle">
                        An Online M.Com prepares you for lucrative accounting, tax advisory, auditing, and corporate finance leadership roles.
                    </p>
                    <a href="#counselling" class="cs_career_btn">
                        <span>Explore Finance Careers</span>
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
                            <i class="ri-calculator-line"></i>
                        </div>
                        <span class="cs_career_pill_text">Senior Accountant</span>
                    </div>

                    <!-- Pill 2 -->
                    <div class="cs_career_pill">
                        <div class="cs_career_pill_icon cs_cp_chart">
                            <i class="ri-line-chart-line"></i>
                        </div>
                        <span class="cs_career_pill_text">Financial Analyst</span>
                    </div>

                    <!-- Pill 3 -->
                    <div class="cs_career_pill">
                        <div class="cs_career_pill_icon cs_cp_orange">
                            <i class="ri-file-text-line"></i>
                        </div>
                        <span class="cs_career_pill_text">Tax Consultant</span>
                    </div>

                    <!-- Pill 4 -->
                    <div class="cs_career_pill">
                        <div class="cs_career_pill_icon cs_cp_yellow">
                            <i class="ri-shield-check-line"></i>
                        </div>
                        <span class="cs_career_pill_text">Corporate Auditor</span>
                    </div>

                    <!-- Pill 5 -->
                    <div class="cs_career_pill">
                        <div class="cs_career_pill_icon cs_cp_red">
                            <i class="ri-funds-line"></i>
                        </div>
                        <span class="cs_career_pill_text">Investment Associate</span>
                    </div>

                    <!-- Pill 6 -->
                    <div class="cs_career_pill">
                        <div class="cs_career_pill_icon cs_cp_green">
                            <i class="ri-bank-line"></i>
                        </div>
                        <span class="cs_career_pill_text">Banking Manager</span>
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
                        Find answers to common questions about Online M.Com programs, eligibility, UGC-NET validity and career growth.
                    </p>
                </div>
                <div>
                    <a href="#counselling" class="cs_faq_view_all">
                        View All FAQs <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>

            <!-- 2x2 Accordion Grid -->
            <div class="cs_faq_2col_grid mt-4" data-aos="fade-up">
                <!-- Column 1 -->
                <div>
                    <!-- FAQ 1 -->
                    <div class="cs_faq_accordion_item active">
                        <div class="cs_faq_accordion_head">
                            <h4 class="cs_faq_question">Is an Online M.Com valid for UGC-NET and Lectureship?</h4>
                            <span class="cs_faq_toggle_icon"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_faq_accordion_body">
                            Yes. Online M.Com degrees from UGC-DEB recognized universities are fully recognized by the NTA for appearing in the UGC-NET exam, qualifying for Junior Research Fellowship (JRF), and applying for Assistant Professor positions.
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="cs_faq_accordion_item">
                        <div class="cs_faq_accordion_head">
                            <h4 class="cs_faq_question">Does an Online M.Com complement CA, CS, or CMA?</h4>
                            <span class="cs_faq_toggle_icon"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_faq_accordion_body">
                            Yes, highly so! Since the syllabus for Online M.Com substantially overlaps with CA Inter/Final, CS Executive/Professional, and CMA subjects, students can pursue their professional certifications while simultaneously securing a recognized master's degree.
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div>
                    <!-- FAQ 3 -->
                    <div class="cs_faq_accordion_item">
                        <div class="cs_faq_accordion_head">
                            <h4 class="cs_faq_question">How flexible is the examination schedule?</h4>
                            <span class="cs_faq_toggle_icon"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_faq_accordion_body">
                            Partner universities offer slot-based, AI-proctored online examinations on weekends. You can select your preferred morning, afternoon, or evening time slot that aligns best with your professional calendar.
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="cs_faq_accordion_item">
                        <div class="cs_faq_accordion_head">
                            <h4 class="cs_faq_question">What are the starting salaries after completing Online M.Com?</h4>
                            <span class="cs_faq_toggle_icon"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_faq_accordion_body">
                            Fresh M.Com graduates typically secure starting salaries between ₹4 LPA and ₹8 LPA in corporate accounting, financial planning, auditing firms, and private banks, with accelerated increments upon acquiring niche taxation credentials.
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
                    <h3 class="cs_need_help_title">Need Help Choosing the Right Online M.Com?</h3>
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

