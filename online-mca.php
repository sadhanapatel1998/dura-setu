<?php
ob_start();
include("include/data.php");

// Centralized data set for top accredited MCA universities
$mca_universities = dura_get_course_universities_list('online-mca', [
    [
        'name' => 'Manipal University Jaipur Online',
        'logo' => 'assets/img/university/manipal-logo-jaipur.png',
        'alt' => 'Manipal University Jaipur Online',
        'badge' => 'UGC-DEB',
        'accreditation' => 'NAAC A+',
        'duration' => '2 Years',
        'fee' => '₹1,50,000 Total',
        'emi' => '₹6,250/mo',
        'url' => 'manipal-university-jaipur.php'
    ],
    [
        'name' => 'NMIMS Online University',
        'logo' => 'assets/img/university/nmims-logo.png',
        'alt' => 'NMIMS Online University',
        'badge' => 'UGC-DEB',
        'accreditation' => 'NAAC A+',
        'duration' => '2 Years',
        'fee' => '₹1,60,000 Total',
        'emi' => '₹6,670/mo',
        'url' => 'nmims-online.php'
    ]
]);

?>

<main>
    <!-- Start Page Header -->
    <section class="cs_page_header cs_bg_filed" data-src="assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="cs_page_header_text" data-aos="fade-up">
                <h1 class="cs_page_header_title cs_fs_48 cs_bold">Online MCA Degree</h1>
                <ul class="cs_breadcrumb cs_mp_0 cs_fs_16">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="courses.php">Programs</a></li>
                    <li>Online MCA</li>
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
                        Master of Computer Applications (Online MCA)
                    </h1>
                    <p class="cs_mba_section_subtitle mb-0">
                        An Online MCA is a 2-year UGC-DEB and AICTE entitled postgraduate program designed to build high-calibre software engineers, data architects, and IT leaders. Gain hands-on mastery in modern tech stacks, cloud systems, and AI without disrupting your career.
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
                                <p>UGC-DEB, AICTE, NAAC</p>
                            </div>
                        </div>

                        <div class="cs_mba_metric_item">
                            <div class="cs_mba_metric_icon">
                                <i class="ri-user-star-line"></i>
                            </div>
                            <div class="cs_mba_metric_info">
                                <h4>Eligibility</h4>
                                <p>Graduation with Maths (Min 50%)</p>
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
                        <img src="assets/img/course/mca.jpg" alt="Online MCA Degree Program" class="cs_mba_hero_img" width="600" height="400" loading="eager">
                        <div class="cs_mba_hero_pill cs_top_pill">
                            <i class="ri-verified-badge-fill text-primary"></i>
                            <span>UGC &amp; AICTE Entitled</span>
                        </div>
                        <div class="cs_mba_hero_pill cs_bottom_pill">
                            <i class="ri-line-chart-fill"></i>
                            <span>Avg. ₹8.5 LPA Package</span>
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
                <h2 class="cs_mba_section_title">Top Universities Offering Online MCA</h2>
                <p class="cs_mba_section_subtitle mx-auto">
                    Compare and choose from India's premier UGC-entitled and AICTE-approved universities offering globally valued online MCA degrees.
                </p>
            </div>

            <div class="cs_uni_grid">
                <?php foreach ($mca_universities as $uni): ?>
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

    <!-- Start Popular MCA Specialisations (Exact Reference Layout) -->
    <section class="cs_spec_section" id="specialisations">
        <div class="container">
            <div data-aos="fade-up">
                <span class="cs_mba_badge">
                    <i class="ri-graduation-cap-line"></i> CHOOSE YOUR DOMAIN
                </span>
                <h2 class="cs_mba_section_title">Popular MCA Specialisations</h2>
            </div>

            <div class="cs_spec_grid mt-4">
                <!-- Card 1: Data Science & AI -->
                <div class="cs_spec_card" data-aos="fade-up" data-aos-delay="0">
                    <div class="cs_spec_card_top">
                        <div class="cs_spec_icon cs_spec_blue">
                            <i class="ri-brain-line"></i>
                        </div>
                        <span class="cs_spec_arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </span>
                    </div>
                    <h3 class="cs_spec_title">Data Science &amp; AI</h3>
                    <p class="cs_spec_desc">Master machine learning algorithms, deep learning and big data pipelines.</p>
                </div>

                <!-- Card 2: Cloud Computing & DevOps -->
                <div class="cs_spec_card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cs_spec_card_top">
                        <div class="cs_spec_icon cs_spec_orange">
                            <i class="ri-cloud-line"></i>
                        </div>
                        <span class="cs_spec_arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </span>
                    </div>
                    <h3 class="cs_spec_title">Cloud &amp; DevOps</h3>
                    <p class="cs_spec_desc">Architect resilient distributed systems on AWS, Azure, and Kubernetes.</p>
                </div>

                <!-- Card 3: Cyber Security -->
                <div class="cs_spec_card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cs_spec_card_top">
                        <div class="cs_spec_icon cs_spec_purple">
                            <i class="ri-shield-keyhole-line"></i>
                        </div>
                        <span class="cs_spec_arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </span>
                    </div>
                    <h3 class="cs_spec_title">Cyber Security</h3>
                    <p class="cs_spec_desc">Protect enterprise infrastructure with cryptography, ethical hacking and defense.</p>
                </div>

                <!-- Card 4: Full Stack Development -->
                <div class="cs_spec_card" data-aos="fade-up" data-aos-delay="300">
                    <div class="cs_spec_card_top">
                        <div class="cs_spec_icon cs_spec_green">
                            <i class="ri-code-s-slash-line"></i>
                        </div>
                        <span class="cs_spec_arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </span>
                    </div>
                    <h3 class="cs_spec_title">Full Stack Development</h3>
                    <p class="cs_spec_desc">Build end-to-end scalable web applications using modern MERN &amp; microservices.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Popular MCA Specialisations -->

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
                        <h3 class="cs_highlight_title">Understand Online MCA Fees</h3>
                        <p class="cs_highlight_desc">
                            Program fees range from ₹68,000 to ₹1,65,000 across top institutions. Benefit from interest-free monthly EMI plans starting at ₹4,999/month.
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
                            Graduates with BCA, B.Sc (IT/CS), or any bachelor's degree with Mathematics at 10+2 or graduation level (min 50% marks). Bridge courses available for non-CS students.
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
                        <p class="cs_admission_step_desc">Explore online MCA universities and courses.</p>
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
                <h2 class="cs_mba_section_title">Online MCA Syllabus Overview</h2>
                <p class="cs_mba_section_subtitle mx-auto">
                    A rigorous 4-semester curriculum balancing deep software engineering fundamentals with high-demand advanced computing electives.
                </p>
            </div>

            <div class="cs_syllabus_grid" data-aos="fade-up">
                <!-- Semester 1 -->
                <div class="cs_syllabus_card active">
                    <div class="cs_syllabus_head">
                        <h4>Semester 1: Core Computing Foundations</h4>
                        <span>5 Core Subjects</span>
                    </div>
                    <div class="cs_syllabus_body">
                        <ul class="cs_syllabus_list">
                            <li><i class="ri-checkbox-circle-fill"></i> Advanced Data Structures &amp; Algorithms</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Object-Oriented Software Design (Java &amp; Python)</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Relational Database Management Systems (RDBMS)</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Advanced Computer Networks &amp; Protocols</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Discrete Mathematical Structures for CS</li>
                        </ul>
                    </div>
                </div>

                <!-- Semester 2 -->
                <div class="cs_syllabus_card active">
                    <div class="cs_syllabus_head">
                        <h4>Semester 2: Modern Systems &amp; Web Tech</h4>
                        <span>5 Core Subjects</span>
                    </div>
                    <div class="cs_syllabus_body">
                        <ul class="cs_syllabus_list">
                            <li><i class="ri-checkbox-circle-fill"></i> Operating Systems &amp; Virtualization Internals</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Cloud Computing Architecture &amp; Services</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Web Technologies &amp; RESTful Microservices</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Big Data Analytics &amp; Data Warehousing</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Agile Software Engineering &amp; DevOps Pipelines</li>
                        </ul>
                    </div>
                </div>

                <!-- Semester 3 -->
                <div class="cs_syllabus_card active">
                    <div class="cs_syllabus_head">
                        <h4>Semester 3: AI &amp; Domain Electives</h4>
                        <span>Electives + Capstone Mini Project</span>
                    </div>
                    <div class="cs_syllabus_body">
                        <ul class="cs_syllabus_list">
                            <li><i class="ri-checkbox-circle-fill"></i> Artificial Intelligence &amp; Machine Learning</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Cyber Security &amp; Cryptographic Standards</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Domain Elective I (Data Science / Cloud / Full Stack)</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Mobile Application Engineering (Flutter/React Native)</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Research Methodology &amp; Minor Software Project</li>
                        </ul>
                    </div>
                </div>

                <!-- Semester 4 -->
                <div class="cs_syllabus_card active">
                    <div class="cs_syllabus_head">
                        <h4>Semester 4: Advanced Systems &amp; Industry Project</h4>
                        <span>Advanced Elective + Major Dissertation</span>
                    </div>
                    <div class="cs_syllabus_body">
                        <ul class="cs_syllabus_list">
                            <li><i class="ri-checkbox-circle-fill"></i> Deep Learning &amp; Natural Language Processing</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Domain Elective II (Enterprise Cloud Architecture)</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Software Quality Assurance &amp; Automated Testing</li>
                            <li><i class="ri-checkbox-circle-fill"></i> IT Ethics, Privacy Laws &amp; Cyber Governance</li>
                            <li><i class="ri-checkbox-circle-fill"></i> Major Industry Capstone Project &amp; Viva Voce</li>
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
                        Career Opportunities After Online MCA
                    </h2>
                    <p class="cs_mba_section_subtitle">
                        An Online MCA opens high-growth pathways across Fortune 500 tech firms, consulting conglomerates, and innovative startups worldwide.
                    </p>
                    <a href="#counselling" class="cs_career_btn">
                        <span>Explore Tech Careers</span>
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
                            <i class="ri-code-line"></i>
                        </div>
                        <span class="cs_career_pill_text">Software Engineering</span>
                    </div>

                    <!-- Pill 2 -->
                    <div class="cs_career_pill">
                        <div class="cs_career_pill_icon cs_cp_chart">
                            <i class="ri-bar-chart-line"></i>
                        </div>
                        <span class="cs_career_pill_text">Data Science &amp; AI</span>
                    </div>

                    <!-- Pill 3 -->
                    <div class="cs_career_pill">
                        <div class="cs_career_pill_icon cs_cp_orange">
                            <i class="ri-cloud-line"></i>
                        </div>
                        <span class="cs_career_pill_text">Cloud Architecture</span>
                    </div>

                    <!-- Pill 4 -->
                    <div class="cs_career_pill">
                        <div class="cs_career_pill_icon cs_cp_yellow">
                            <i class="ri-shield-check-line"></i>
                        </div>
                        <span class="cs_career_pill_text">Cyber Security</span>
                    </div>

                    <!-- Pill 5 -->
                    <div class="cs_career_pill">
                        <div class="cs_career_pill_icon cs_cp_red">
                            <i class="ri-layout-masonry-line"></i>
                        </div>
                        <span class="cs_career_pill_text">Full Stack Dev</span>
                    </div>

                    <!-- Pill 6 -->
                    <div class="cs_career_pill">
                        <div class="cs_career_pill_icon cs_cp_green">
                            <i class="ri-server-line"></i>
                        </div>
                        <span class="cs_career_pill_text">DevOps Engineering</span>
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
                        Find answers to common questions about Online MCA programs, eligibility, labs and job placements.
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
                            <h4 class="cs_faq_question">Is an Online MCA degree equivalent to regular MCA?</h4>
                            <span class="cs_faq_toggle_icon"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_faq_accordion_body">
                            Yes. Under the University Grants Commission (UGC) regulations, online degrees earned from recognized institutions hold complete parity with on-campus programs for government jobs, corporate recruitments, and doctoral studies.
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="cs_faq_accordion_item">
                        <div class="cs_faq_accordion_head">
                            <h4 class="cs_faq_question">Can non-computer science graduates apply?</h4>
                            <span class="cs_faq_toggle_icon"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_faq_accordion_body">
                            Yes. Graduates in B.Sc, B.Com, or BA with Mathematics at 10+2 or graduation level are eligible. Universities conduct foundation bridge modules in programming to bring everyone up to speed smoothly.
                        </div>
                    </div>
                </div>

                <!-- Column 2 -->
                <div>
                    <!-- FAQ 3 -->
                    <div class="cs_faq_accordion_item">
                        <div class="cs_faq_accordion_head">
                            <h4 class="cs_faq_question">How are practical coding labs conducted online?</h4>
                            <span class="cs_faq_toggle_icon"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_faq_accordion_body">
                            Practical sessions are conducted using browser-based cloud labs, Docker containers, and GitHub integration. Students receive real-time code reviews from mentors during interactive weekend lab webinars.
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="cs_faq_accordion_item">
                        <div class="cs_faq_accordion_head">
                            <h4 class="cs_faq_question">What placement support is provided for Online MCA?</h4>
                            <span class="cs_faq_toggle_icon"><i class="ri-add-line"></i></span>
                        </div>
                        <div class="cs_faq_accordion_body">
                            Partner universities provide comprehensive placement assistance, including virtual hiring drives with 300+ tech recruiters, mock technical interviews, resume building, and LinkedIn profile optimization.
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
                    <h3 class="cs_need_help_title">Need Help Choosing the Right Online MCA?</h3>
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

<?php
$content = ob_get_clean();
require 'layout.php';
?>

