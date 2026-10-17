<?php
/**
 * DuraSetu Centralized Course Detail Data
 * 
 * Provides structured course configurations, metadata, syllabi, specialisations,
 * career roles, and FAQs for all course detail pages.
 */

if (!defined('DURA_COURSE_DATA_LOADED')) {
    define('DURA_COURSE_DATA_LOADED', true);

    $all_courses_detail_data = [
        // ==============================================================
        // 1. UNDERGRADUATE COURSES
        // ==============================================================
        'online-bsc' => [
            'id' => 'online-bsc',
            'slug' => 'online-bsc.php',
            'title' => 'Online B.Sc',
            'full_title' => 'Bachelor of Science (Online B.Sc)',
            'program_badge' => 'Undergraduate Degree Program',
            'hero_desc' => 'An Online B.Sc is a 3-year UGC-DEB entitled undergraduate program delivering robust analytical skills, computational foundations, and scientific research methodologies for careers in technology, research, and data sciences.',
            'image' => 'assets/img/course/bca.jpg',
            'pill_top' => 'UGC-DEB Entitled',
            'pill_bottom' => 'Avg. ₹5.5 LPA Package',
            'duration' => '3 Years (6 Semesters)',
            'mode' => '100% Online & Self-Paced',
            'accreditation' => 'UGC-DEB Entitled',
            'eligibility' => '10+2 with Science (PCM/PCB) (Min 45%-50%)',
            'fee_desc' => 'Program fees range from ₹18,000/sem to ₹90,000 Total across accredited universities. Zero-cost EMI plans available starting at ₹3,200/month.',
            'eligibility_desc' => 'Candidates must have passed 10+2 with Physics, Chemistry, and Mathematics (PCM) or Biology (PCB) from any recognized Central or State Board with minimum 45%-50% aggregate marks.',
            'specialisations' => [
                ['title' => 'Computer Science & IT', 'desc' => 'Master programming, software principles, database management and web engineering.', 'icon' => 'ri-computer-line', 'color' => 'blue'],
                ['title' => 'Applied Mathematics', 'desc' => 'Advanced calculus, linear algebra, numerical analysis, and statistical modeling.', 'icon' => 'ri-calculator-line', 'color' => 'orange'],
                ['title' => 'Data Science & Analytics', 'desc' => 'Foundations of big data, Python scripting, probability, and business intelligence.', 'icon' => 'ri-database-2-line', 'color' => 'purple'],
                ['title' => 'Environmental & Life Sciences', 'desc' => 'Ecology, sustainable resource management, bio-analytics, and research design.', 'icon' => 'ri-leaf-line', 'color' => 'green']
            ],
            'syllabus' => [
                ['sem' => 'Semester 1: Core Physical Sciences & Mathematics', 'badge' => 'Core Disciplines', 'subjects' => ['Mechanics & Properties of Matter', 'Differential Calculus & Trigonometry', 'Fundamentals of Chemistry', 'English & Professional Communication', 'Basic Computational Lab']],
                ['sem' => 'Semester 2: Mathematical Physics & Computing', 'badge' => 'Foundational Core', 'subjects' => ['Electricity, Magnetism & Optics', 'Integral Calculus & Differential Equations', 'Computer Programming in C / Python', 'Environmental Studies', 'Computing & Digital Lab']],
                ['sem' => 'Semester 3: Advanced Core & Statistics', 'badge' => 'Specialization Core', 'subjects' => ['Thermal Physics & Thermodynamics', 'Linear Algebra & Vector Analysis', 'Probability & Inferential Statistics', 'Data Structures & Algorithms', 'Statistical Computing Lab']],
                ['sem' => 'Semester 4: Computational Applied Sciences', 'badge' => 'Applied Disciplines', 'subjects' => ['Quantum Mechanics & Solid State Physics', 'Numerical Methods & Optimisation', 'Database Management Systems', 'Scientific Research Methodology', 'Numerical Simulation Lab']],
                ['sem' => 'Semester 5: Discipline Electives & Analytics', 'badge' => 'Major Electives', 'subjects' => ['Advanced Discipline Elective I', 'Data Science & Visualisation Techniques', 'Operations Research', 'Industrial Instrumentation', 'Discipline Project Work I']],
                ['sem' => 'Semester 6: Capstone Project & Applied Domain', 'badge' => 'Project & Viva', 'subjects' => ['Advanced Discipline Elective II', 'Machine Learning Foundations', 'Mathematical Modeling', 'Scientific Ethics & IPR', 'Major Undergraduate Capstone Project']]
            ],
            'careers' => [
                ['title' => 'Data Analyst', 'icon' => 'ri-bar-chart-line', 'color' => 'blue'],
                ['title' => 'Research Assistant', 'icon' => 'ri-microscope-line', 'color' => 'chart'],
                ['title' => 'Software Associate', 'icon' => 'ri-code-line', 'color' => 'orange'],
                ['title' => 'Lab Operations Lead', 'icon' => 'ri-test-tube-line', 'color' => 'yellow'],
                ['title' => 'QA Specialist', 'icon' => 'ri-shield-check-line', 'color' => 'red'],
                ['title' => 'Scientific Consultant', 'icon' => 'ri-briefcase-line', 'color' => 'green']
            ],
            'faqs' => [
                ['q' => 'Is an Online B.Sc degree recognized by employers and universities?', 'a' => 'Yes. As per UGC-DEB notifications, online degrees awarded by entitled institutions hold legal equivalence to regular campus degrees for corporate jobs, public services (UPSC/SSC), and postgraduate admissions.'],
                ['q' => 'How are laboratory and practical experiments conducted online?', 'a' => 'Practicals are facilitated via interactive virtual science labs, cloud simulations, and digital workbench environments with dedicated mentor walkthroughs during weekend sessions.'],
                ['q' => 'Can I pursue an M.Sc or MCA after completing Online B.Sc?', 'a' => 'Yes. Online B.Sc graduates are fully eligible to apply for M.Sc, MCA, MBA, and other postgraduate degree programs across recognized Indian and international universities.'],
                ['q' => 'What are the examination guidelines for Online B.Sc?', 'a' => 'Examinations are conducted 100% online through remotely proctored, secure assessment systems with flexible weekend time slots.']
            ]
        ],

        'online-bajmc' => [
            'id' => 'online-bajmc',
            'slug' => 'online-bajmc.php',
            'title' => 'Online BAJMC',
            'full_title' => 'Bachelor of Arts in Journalism & Mass Communication (Online BAJMC)',
            'program_badge' => 'Undergraduate Degree Program',
            'hero_desc' => 'An Online BAJMC is a dynamic 3-year UGC-DEB entitled degree delivering hands-on expertise in digital journalism, multimedia content creation, public relations, television production, and modern advertising strategy.',
            'image' => 'assets/img/course/bba.jpg',
            'pill_top' => 'UGC-DEB Entitled',
            'pill_bottom' => 'Avg. ₹5.2 LPA Package',
            'duration' => '3 Years (6 Semesters)',
            'mode' => '100% Online & Self-Paced',
            'accreditation' => 'UGC-DEB Entitled',
            'eligibility' => '10+2 in any stream (Min 45%-50%)',
            'fee_desc' => 'Program fees range from ₹20,000/sem to ₹1,20,000 Total across top institutions. Easy monthly installment schemes starting at ₹3,500/month.',
            'eligibility_desc' => 'Candidates must have passed Class 12 (10+2) or equivalent examination in any stream (Arts, Science, or Commerce) from a recognized Central or State Board with minimum 45%-50% aggregate marks.',
            'specialisations' => [
                ['title' => 'Digital Journalism & Reporting', 'desc' => 'News writing, investigative storytelling, mobile journalism, and factual reporting.', 'icon' => 'ri-newspaper-line', 'color' => 'blue'],
                ['title' => 'Public Relations & Corporate Comms', 'desc' => 'Brand reputation management, press releases, corporate crisis communications.', 'icon' => 'ri-megaphone-line', 'color' => 'orange'],
                ['title' => 'Social Media & Content Strategy', 'desc' => 'Viral media campaign planning, search engine optimization, and audience analytics.', 'icon' => 'ri-share-line', 'color' => 'purple'],
                ['title' => 'Audio-Visual Media & Podcasting', 'desc' => 'Video shooting techniques, podcast production, broadcast scriptwriting, and editing.', 'icon' => 'ri-video-line', 'color' => 'green']
            ],
            'syllabus' => [
                ['sem' => 'Semester 1: Foundations of Communication', 'badge' => 'Core Theory', 'subjects' => ['Introduction to Mass Communication', 'History of Indian Media & Press', 'Principles of Print Journalism', 'Language & Creative Writing Skills', 'Basic Photography & Visual Literacy']],
                ['sem' => 'Semester 2: Reporting & Editing Dynamics', 'badge' => 'Practical Writing', 'subjects' => ['News Gathering & Reporting Techniques', 'Editing, Sub-Editing & Layout Design', 'Media Laws & Ethics in India', 'Social Media Fundamentals', 'Newsroom Lab Workshop']],
                ['sem' => 'Semester 3: Broadcast Journalism & AV Media', 'badge' => 'Audio-Visual', 'subjects' => ['Radio Broadcasting & Podcasting', 'Television Production & Anchoring', 'Advertising Principles & Practices', 'Public Relations & Event Management', 'Audio-Video Editing Lab']],
                ['sem' => 'Semester 4: Digital Media & New Technologies', 'badge' => 'Digital Era', 'subjects' => ['Digital Journalism & Web Publishing', 'Corporate Communications Strategy', 'Documentary & Short Film Production', 'Media Research Methodologies', 'Digital Content Creation Lab']],
                ['sem' => 'Semester 5: Advanced Media Electives', 'badge' => 'Elective Modules', 'subjects' => ['Media Management & Entrepreneurship', 'Specialized Reporting (Sports / Business / Politics)', 'Brand Strategy & Campaign Planning', 'Cyber Law & Digital Ethics', 'Media Internship Report']],
                ['sem' => 'Semester 6: Portfolio & Capstone Project', 'badge' => 'Capstone & Viva', 'subjects' => ['Global Media & Cross-Border Perspectives', 'Fact Checking & Misinformation Verification', 'Major Media Production Project', 'Comprehensive Media Viva Voce', 'Professional Digital Portfolio']]
            ],
            'careers' => [
                ['title' => 'Digital Content Strategist', 'icon' => 'ri-article-line', 'color' => 'blue'],
                ['title' => 'News Reporter / Journalist', 'icon' => 'ri-mic-line', 'color' => 'chart'],
                ['title' => 'PR & Corporate Specialist', 'icon' => 'ri-broadcast-line', 'color' => 'orange'],
                ['title' => 'Social Media Manager', 'icon' => 'ri-instagram-line', 'color' => 'yellow'],
                ['title' => 'Video & Podcast Producer', 'icon' => 'ri-video-chat-line', 'color' => 'red'],
                ['title' => 'Advertising Copywriter', 'icon' => 'ri-edit-2-line', 'color' => 'green']
            ],
            'faqs' => [
                ['q' => 'What skills do I learn in Online BAJMC?', 'a' => 'You gain professional skills in news reporting, digital content writing, video journalism, audio podcasting, public relations, brand storytelling, and social media analytics.'],
                ['q' => 'Can I build a media portfolio while studying online?', 'a' => 'Yes. The curriculum includes real-world assignments, multimedia blog publishing, podcast production, and corporate press kit drafting to create a job-ready digital portfolio.'],
                ['q' => 'What career opportunities exist after Online BAJMC?', 'a' => 'Graduates build successful careers across digital newsrooms, news channels, PR agencies, corporate MNC communications, advertising firms, publishing houses, and creative production studios.'],
                ['q' => 'Are degrees from Online BAJMC eligible for Government exams?', 'a' => 'Yes. UGC-DEB entitled degrees are completely accepted for all Union & State civil service exams, public relation officer posts in state ministries, and higher education.']
            ]
        ],

        // ==============================================================
        // 2. INTEGRATED COURSES (5 Years)
        // ==============================================================
        'bca-mca-integrated' => [
            'id' => 'bca-mca-integrated',
            'slug' => 'bca-mca.php',
            'title' => 'BCA+MCA',
            'full_title' => 'Integrated Bachelor & Master of Computer Applications (BCA+MCA)',
            'program_badge' => 'Integrated Dual Degree Program',
            'hero_desc' => 'A continuous 5-year integrated pathway connecting undergraduate software engineering with advanced enterprise computing, cloud architecture, artificial intelligence, and full-stack system design.',
            'image' => 'assets/img/course/mca.jpg',
            'pill_top' => 'UGC & AICTE Entitled',
            'pill_bottom' => 'Dual Degree Credential',
            'duration' => '5 Years (10 Semesters)',
            'mode' => '100% Online & Self-Paced',
            'accreditation' => 'UGC-DEB & AICTE Entitled',
            'eligibility' => '10+2 with Mathematics/Computer (Min 45%-50%)',
            'fee_desc' => 'Consolidated integrated fee structure with semester-wise payment flexibility. Zero-cost EMI options available.',
            'eligibility_desc' => 'Candidates must have passed 10+2 or equivalent examination with Mathematics or Computer Applications from a recognized Central/State educational board with minimum 45%-50% aggregate.',
            'specialisations' => [
                ['title' => 'Full Stack Software Architecture', 'desc' => 'End-to-end web technologies, microservices, cloud deployments, and DevOps pipelines.', 'icon' => 'ri-code-s-slash-line', 'color' => 'blue'],
                ['title' => 'Artificial Intelligence & Data', 'desc' => 'Deep learning architectures, natural language processing, and big data infrastructure.', 'icon' => 'ri-brain-line', 'color' => 'orange'],
                ['title' => 'Cloud Infrastructure & DevOps', 'desc' => 'Designing enterprise cloud solutions across AWS, Azure, and Kubernetes clusters.', 'icon' => 'ri-cloud-line', 'color' => 'purple'],
                ['title' => 'Cyber Security & Network Defense', 'desc' => 'Enterprise cryptographic standards, network defense, ethical penetration testing.', 'icon' => 'ri-shield-keyhole-line', 'color' => 'green']
            ],
            'syllabus' => [
                ['sem' => 'Years 1-2: Computing & Algorithmic Foundations', 'badge' => 'BCA Core', 'subjects' => ['C, C++ & Python Programming', 'Discrete Mathematics & Logic', 'Computer System Architecture', 'Data Structures & Algorithms', 'Relational Database Management Systems']],
                ['sem' => 'Year 3: Web Systems & Software Engineering', 'badge' => 'BCA Completion', 'subjects' => ['Java & Object-Oriented Design', 'Operating Systems & Shell Scripting', 'Full Stack Web Development', 'Software Engineering & Agile', 'BCA Capstone Project']],
                ['sem' => 'Year 4: Advanced Systems & Distributed Cloud', 'badge' => 'MCA Core', 'subjects' => ['Advanced Computer Networks', 'Cloud Architecture & Virtualization', 'Big Data Engineering & Warehousing', 'Machine Learning Foundations', 'Enterprise Software Lab']],
                ['sem' => 'Year 5: AI Electives & Major Dissertation', 'badge' => 'MCA Capstone', 'subjects' => ['Deep Learning & Neural Networks', 'Specialization Elective (Security / Cloud / AI)', 'Software Quality Assurance', 'Major Industry Capstone Project', 'Comprehensive Viva Voce']]
            ],
            'careers' => [
                ['title' => 'Full Stack Architect', 'icon' => 'ri-code-box-line', 'color' => 'blue'],
                ['title' => 'Cloud Solutions Engineer', 'icon' => 'ri-cloud-line', 'color' => 'chart'],
                ['title' => 'AI / ML Engineer', 'icon' => 'ri-cpu-line', 'color' => 'orange'],
                ['title' => 'Technical Project Lead', 'icon' => 'ri-terminal-box-line', 'color' => 'yellow'],
                ['title' => 'Cyber Security Consultant', 'icon' => 'ri-shield-check-line', 'color' => 'red'],
                ['title' => 'Database Administrator', 'icon' => 'ri-database-line', 'color' => 'green']
            ],
            'faqs' => [
                ['q' => 'What is the advantage of an Integrated BCA+MCA program?', 'a' => 'An Integrated BCA+MCA saves you from taking separate entrance tests and admissions after graduation, offering a streamlined, continuous learning journey from coding basics to master-level enterprise engineering.'],
                ['q' => 'Is there an exit option after 3 years?', 'a' => 'Certain universities provide an exit option after successfully completing the first 3 years with a Bachelor of Computer Applications (BCA) degree, subject to university academic regulations.'],
                ['q' => 'How are lab practicals and projects executed online?', 'a' => 'Students access cloud-hosted development environments, code repositories (GitHub), and virtual coding labs with live faculty mentoring during weekend sessions.'],
                ['q' => 'What are the career opportunities after BCA+MCA?', 'a' => 'Graduates are hired into senior software developer, cloud engineer, solutions architect, and technology consultant roles across global IT enterprises and unicorns.']
            ]
        ],

        'bba-mba-integrated' => [
            'id' => 'bba-mba-integrated',
            'slug' => 'bba-mba.php',
            'title' => 'BBA+MBA',
            'full_title' => 'Integrated Bachelor & Master of Business Administration (BBA+MBA)',
            'program_badge' => 'Integrated Dual Degree Program',
            'hero_desc' => 'A comprehensive 5-year integrated management pathway designed to take high-school graduates straight from business administration fundamentals to senior executive leadership and strategic corporate decision-making.',
            'image' => 'assets/img/course/mba.jpg',
            'pill_top' => 'UGC-DEB Entitled',
            'pill_bottom' => 'Dual Degree Management',
            'duration' => '5 Years (10 Semesters)',
            'mode' => '100% Online & Self-Paced',
            'accreditation' => 'UGC-DEB & AICTE Entitled',
            'eligibility' => '10+2 in any stream (Min 50%)',
            'fee_desc' => 'Affordable semester-wise integrated fees with interest-free EMI plans available across partner universities.',
            'eligibility_desc' => 'Class 12 (10+2) passed in any stream (Commerce, Science, Arts) from a recognized Central or State Board with minimum 50% aggregate marks.',
            'specialisations' => [
                ['title' => 'Marketing & Digital Business', 'desc' => 'Strategic brand management, omnichannel marketing, digital analytics, consumer psychology.', 'icon' => 'ri-megaphone-line', 'color' => 'blue'],
                ['title' => 'Finance & Corporate Banking', 'desc' => 'Financial modeling, valuation, portfolio strategy, corporate treasury, capital markets.', 'icon' => 'ri-funds-line', 'color' => 'orange'],
                ['title' => 'HR Management & Analytics', 'desc' => 'Talent acquisition, organizational dynamics, people analytics, leadership development.', 'icon' => 'ri-user-star-line', 'color' => 'purple'],
                ['title' => 'Operations & Supply Chain', 'desc' => 'Logistics management, strategic procurement, enterprise ERP, operational efficiency.', 'icon' => 'ri-truck-line', 'color' => 'green']
            ],
            'syllabus' => [
                ['sem' => 'Years 1-2: Core Business Administration', 'badge' => 'BBA Foundation', 'subjects' => ['Principles of Management & Organization', 'Business Economics & Microfinance', 'Financial Accounting & Costing', 'Business Communication & Etiquette', 'Marketing Management Fundamentals']],
                ['sem' => 'Year 3: Strategic Management & BBA Capstone', 'badge' => 'BBA Advanced', 'subjects' => ['Human Resource Management', 'Business Law & Corporate Compliance', 'Operations & Quantitative Techniques', 'Consumer Behavior & Market Research', 'BBA Capstone Project']],
                ['sem' => 'Year 4: Executive MBA Foundations', 'badge' => 'MBA Core', 'subjects' => ['Advanced Strategic Management', 'Corporate Financial Management', 'Supply Chain & Logistics Strategy', 'Digital Business & Innovation', 'International Business Environment']],
                ['sem' => 'Year 5: Dual Specializations & Dissertation', 'badge' => 'MBA Master Level', 'subjects' => ['Major Specialization Electives (I, II, III)', 'Minor Specialization Electives', 'Business Analytics & Decision Sciences', 'Corporate Leadership & Governance', 'Major Industry Research Dissertation']]
            ],
            'careers' => [
                ['title' => 'Corporate Strategy Lead', 'icon' => 'ri-line-chart-line', 'color' => 'blue'],
                ['title' => 'Senior Marketing Manager', 'icon' => 'ri-advertisement-line', 'color' => 'chart'],
                ['title' => 'Financial Risk Analyst', 'icon' => 'ri-coins-line', 'color' => 'orange'],
                ['title' => 'Business Consultant', 'icon' => 'ri-briefcase-4-line', 'color' => 'yellow'],
                ['title' => 'HR Operations Partner', 'icon' => 'ri-team-line', 'color' => 'red'],
                ['title' => 'Supply Chain Strategist', 'icon' => 'ri-archive-line', 'color' => 'green']
            ],
            'faqs' => [
                ['q' => 'Why choose an Integrated BBA+MBA over separate degrees?', 'a' => 'An Integrated BBA+MBA provides a unified, continuous corporate curriculum, eliminates admission gaps, and allows students to graduate with a master degree ready for leadership roles.'],
                ['q' => 'Who is eligible to apply for Integrated BBA+MBA?', 'a' => 'Students who have cleared 10+2 in any stream (Commerce, Science, Arts) with minimum 50% marks from a recognized board are eligible to apply.'],
                ['q' => 'Are dual specializations available in MBA years?', 'a' => 'Yes, most partner universities allow dual specialization options in Marketing, Finance, HR, Operations, and Business Analytics during the 4th and 5th years.'],
                ['q' => 'What placement support is offered?', 'a' => 'Students receive continuous career coaching, corporate networking masterclasses, resume feedback workshops, and virtual interview drives with Fortune 500 recruiters.']
            ]
        ],

        'bcom-mba-integrated' => [
            'id' => 'bcom-mba-integrated',
            'slug' => 'bcom-mba.php',
            'title' => 'B.Com+MBA',
            'full_title' => 'Integrated Bachelor of Commerce & Master of Business Administration (B.Com+MBA)',
            'program_badge' => 'Integrated Dual Degree Program',
            'hero_desc' => 'A premier 5-year integrated commercial curriculum combining in-depth financial accounting, commercial taxation laws, and auditing with advanced executive management and strategic investment leadership.',
            'image' => 'assets/img/course/mcom.jpg',
            'pill_top' => 'UGC-DEB Entitled',
            'pill_bottom' => 'Commerce & Leadership',
            'duration' => '5 Years (10 Semesters)',
            'mode' => '100% Online & Self-Paced',
            'accreditation' => 'UGC-DEB Entitled',
            'eligibility' => '10+2 with Commerce/Allied (Min 50%)',
            'fee_desc' => 'Transparent fee schedules with semester installments and zero-interest EMI schemes.',
            'eligibility_desc' => '10+2 in Commerce or allied stream with Mathematics/Economics/Accountancy with minimum 50% aggregate from a recognized board.',
            'specialisations' => [
                ['title' => 'Corporate Finance & Investment', 'desc' => 'Equity analysis, corporate valuation, mergers & acquisitions, and investment banking.', 'icon' => 'ri-funds-line', 'color' => 'blue'],
                ['title' => 'FinTech & Banking Operations', 'desc' => 'Digital payment architectures, algorithmic risk analysis, and blockchain finance.', 'icon' => 'ri-bank-card-line', 'color' => 'orange'],
                ['title' => 'International Trade & Taxation', 'desc' => 'GST, cross-border corporate taxation laws, customs tariffs, and global audits.', 'icon' => 'ri-global-line', 'color' => 'purple'],
                ['title' => 'Strategic Auditing & Risk Management', 'desc' => 'Enterprise compliance, financial forensic auditing, and operational risk assessment.', 'icon' => 'ri-file-shield-line', 'color' => 'green']
            ],
            'syllabus' => [
                ['sem' => 'Years 1-2: Advanced Commercial Foundations', 'badge' => 'B.Com Core', 'subjects' => ['Advanced Financial Accounting', 'Business Regulatory Frameworks', 'Corporate & Income Tax Laws', 'Banking & Insurance Dynamics', 'Cost & Management Accounting']],
                ['sem' => 'Year 3: Financial Management & B.Com Capstone', 'badge' => 'B.Com Completion', 'subjects' => ['Company Law & Secretarial Practices', 'Auditing Principles & Standards', 'Financial Markets & Services', 'Business Analytics for Commerce', 'Undergraduate Commerce Project']],
                ['sem' => 'Year 4: MBA Corporate Finance & Strategy', 'badge' => 'MBA Core', 'subjects' => ['Strategic Corporate Leadership', 'Security Analysis & Portfolio Management', 'Advanced Corporate Financial Strategy', 'International Business Dynamics', 'Enterprise Operations Management']],
                ['sem' => 'Year 5: Master Specialization & Dissertation', 'badge' => 'MBA Capstone', 'subjects' => ['Advanced FinTech & Investment Modeling', 'Strategic Mergers & Corporate Valuation', 'Global Treasury & Risk Governance', 'Major Industry Research Project', 'Comprehensive Viva Voce']]
            ],
            'careers' => [
                ['title' => 'Investment Banking Analyst', 'icon' => 'ri-funds-line', 'color' => 'blue'],
                ['title' => 'Corporate Financial Controller', 'icon' => 'ri-bank-line', 'color' => 'chart'],
                ['title' => 'Tax & Audit Consultant', 'icon' => 'ri-file-text-line', 'color' => 'orange'],
                ['title' => 'Treasury Operations Lead', 'icon' => 'ri-wallet-line', 'color' => 'yellow'],
                ['title' => 'Risk & Compliance Manager', 'icon' => 'ri-shield-check-line', 'color' => 'red'],
                ['title' => 'Wealth Portfolio Manager', 'icon' => 'ri-pie-chart-line', 'color' => 'green']
            ],
            'faqs' => [
                ['q' => 'What is the career scope of an Integrated B.Com+MBA?', 'a' => 'Graduates possess dual strengths in deep accounting principles and strategic management, qualifying for lucrative corporate finance, banking, consulting, and CFO track roles.'],
                ['q' => 'Are degrees recognized for corporate and government jobs?', 'a' => 'Yes. Entitled by UGC-DEB, degrees hold complete national equivalence to campus programs for PSU recruitment, corporate positions, and higher doctoral research.'],
                ['q' => 'How flexible is the study schedule?', 'a' => 'Classes are delivered via high-definition recorded lectures and live interactive weekend masterclasses, permitting students to learn at their own pace from desktop or mobile.'],
                ['q' => 'Is financial assistance or EMI available?', 'a' => 'Yes, universities offer flexible semester-wise payment plans as well as zero-cost monthly EMI options through financial partners.']
            ]
        ],

        // ==============================================================
        // 3. POSTGRADUATE COURSES
        // ==============================================================
        'global-mba' => [
            'id' => 'global-mba',
            'slug' => 'global-mba.php',
            'title' => 'Global MBA',
            'full_title' => 'Global Master of Business Administration (Global MBA)',
            'program_badge' => 'Postgraduate Degree Program',
            'hero_desc' => 'An internationally benchmarked 2-year Master of Business Administration program delivering cross-border leadership frameworks, international business law, global supply chain resilience, and multinational market strategies.',
            'image' => 'assets/img/course/mba.jpg',
            'pill_top' => 'Global Immersion',
            'pill_bottom' => 'Avg. ₹12.5 LPA Package',
            'duration' => '2 Years (4 Semesters)',
            'mode' => '100% Online & Global Seminars',
            'accreditation' => 'UGC-DEB & Global Accreditations',
            'eligibility' => 'Graduation in any stream (Min 50%)',
            'fee_desc' => 'Program fees range from ₹1,40,000 to ₹3,50,000 Total depending on international university partnerships. Easy monthly EMI options available.',
            'eligibility_desc' => 'Bachelor’s degree in any discipline with minimum 50% aggregate marks from a recognized university. Professional experience or cross-border business interests are encouraged.',
            'specialisations' => [
                ['title' => 'International Business Strategy', 'desc' => 'Global market entry, multinational alliances, and cross-border trade regulation.', 'icon' => 'ri-global-line', 'color' => 'blue'],
                ['title' => 'Global Supply Chain & Logistics', 'desc' => 'Managing resilient worldwide procurement networks, shipping, and digital supply chains.', 'icon' => 'ri-truck-line', 'color' => 'orange'],
                ['title' => 'International Finance & Forex', 'desc' => 'Global financial markets, forex risk hedging, and international capital structures.', 'icon' => 'ri-exchange-dollar-line', 'color' => 'purple'],
                ['title' => 'Cross-Cultural Leadership', 'desc' => 'Leading multicultural teams, international corporate governance, and talent strategy.', 'icon' => 'ri-team-line', 'color' => 'green']
            ],
            'syllabus' => [
                ['sem' => 'Semester 1: Global Management Foundations', 'badge' => 'Core Modules', 'subjects' => ['Global Economics & Market Dynamics', 'International Financial Reporting Standards (IFRS)', 'Cross-Cultural Organizational Behavior', 'Global Marketing Strategy', 'Quantitative Decision Sciences']],
                ['sem' => 'Semester 2: Cross-Border Enterprise Operations', 'badge' => 'International Core', 'subjects' => ['International Business Law & Trade Policy', 'Global Supply Chain & Operations Management', 'Corporate Financial Strategy & Risk', 'Strategic Information Systems', 'Global Business Simulation Lab']],
                ['sem' => 'Semester 3: Electives & Multinational Strategy', 'badge' => 'Domain Electives', 'subjects' => ['Specialization Elective I (Global Trade / Finance)', 'Specialization Elective II (Cross-Border Marketing)', 'Geopolitics & Enterprise Risk Analysis', 'Innovation & Digital Transformation', 'International Business Case Studies']],
                ['sem' => 'Semester 4: Global Consulting Capstone', 'badge' => 'Capstone & Thesis', 'subjects' => ['Global Corporate Governance & Ethics', 'Multinational Mergers & Acquisitions', 'International Business Capstone Project', 'Global Industry Masterclass Assessment', 'Comprehensive Viva Voce']]
            ],
            'careers' => [
                ['title' => 'Global Business Director', 'icon' => 'ri-global-line', 'color' => 'blue'],
                ['title' => 'International Trade Consultant', 'icon' => 'ri-briefcase-line', 'color' => 'chart'],
                ['title' => 'Global Supply Chain Lead', 'icon' => 'ri-truck-line', 'color' => 'orange'],
                ['title' => 'Forex & Risk Manager', 'icon' => 'ri-funds-line', 'color' => 'yellow'],
                ['title' => 'Multinational Marketing Head', 'icon' => 'ri-megaphone-line', 'color' => 'red'],
                ['title' => 'Cross-Border Operations Head', 'icon' => 'ri-building-line', 'color' => 'green']
            ],
            'faqs' => [
                ['q' => 'How does a Global MBA differ from a standard Online MBA?', 'a' => 'A Global MBA focuses on international case studies, cross-border corporate laws, multinational trade networks, global currency risk management, and features international faculty guest sessions.'],
                ['q' => 'Are Global MBA degrees recognized abroad?', 'a' => 'Yes, UGC-DEB entitled degrees from recognized universities hold complete credibility for multinational employment, overseas corporate transfers, and international work visa credentials.'],
                ['q' => 'Do I need international work experience to apply?', 'a' => 'No. While working professionals benefit greatly from global case analysis, fresh graduates with strong academic credentials and global aspirations are welcome to apply.'],
                ['q' => 'What placement opportunities are available?', 'a' => 'Partner universities connect students with multinational recruitment networks, corporate hiring portals, and global career workshops.']
            ]
        ],

        'one-year-mba' => [
            'id' => 'one-year-mba',
            'slug' => 'one-year-mba.php',
            'title' => '1-Year MBA',
            'full_title' => 'Fast-Track 1-Year Master of Business Administration (1-Year MBA)',
            'program_badge' => 'Postgraduate Degree Program',
            'hero_desc' => 'An intensive, accelerated 1-year MBA program designed specifically for experienced professionals seeking rapid promotions, functional transitions, or senior leadership credentials without prolonged career interruption.',
            'image' => 'assets/img/course/mba.jpg',
            'pill_top' => 'Accelerated Curriculum',
            'pill_bottom' => 'For Working Professionals',
            'duration' => '1 Year (Fast-Track Modules)',
            'mode' => '100% Online & Self-Paced',
            'accreditation' => 'UGC-DEB / Autonomous Entitled',
            'eligibility' => 'Graduation + 2-3 Years Work Exp. (Min 50%)',
            'fee_desc' => 'Fast-track program fees range from ₹80,000 to ₹1,80,000 Total. Monthly zero-interest installment options available.',
            'eligibility_desc' => 'Bachelor’s degree in any discipline with minimum 50% marks from a recognized university, accompanied by 2-3 years of verifiable professional work experience.',
            'specialisations' => [
                ['title' => 'Strategic Management & Leadership', 'desc' => 'High-level business decision-making, corporate governance, and growth hacking.', 'icon' => 'ri-compass-3-line', 'color' => 'blue'],
                ['title' => 'Financial Strategy & Wealth Creation', 'desc' => 'Corporate finance, investment valuation, budgeting, and capital structure optimization.', 'icon' => 'ri-funds-line', 'color' => 'orange'],
                ['title' => 'Digital Marketing & Growth', 'desc' => 'Performance marketing, customer acquisition channels, and brand acceleration.', 'icon' => 'ri-line-chart-line', 'color' => 'purple'],
                ['title' => 'Operations & Digital Transformation', 'desc' => 'Agile operational models, lean process engineering, and technology adoption.', 'icon' => 'ri-settings-4-line', 'color' => 'green']
            ],
            'syllabus' => [
                ['sem' => 'Module 1: Accelerated Core Leadership', 'badge' => 'Months 1-6', 'subjects' => ['Managerial Economics & Decision Modeling', 'Corporate Financial Management', 'Marketing Strategy & Customer Analytics', 'Organizational Leadership & Dynamics', 'Operations & Technology Management']],
                ['sem' => 'Module 2: Strategic Electives & Capstone', 'badge' => 'Months 7-12', 'subjects' => ['Specialization Focus Elective', 'Business Analytics & Data-Driven Strategy', 'Corporate Governance & Ethical Leadership', 'Executive Capstone Industry Project', 'Comprehensive Leadership Defense']]
            ],
            'careers' => [
                ['title' => 'Senior Functional Manager', 'icon' => 'ri-user-star-line', 'color' => 'blue'],
                ['title' => 'Management Consultant', 'icon' => 'ri-briefcase-4-line', 'color' => 'chart'],
                ['title' => 'Director of Operations', 'icon' => 'ri-settings-line', 'color' => 'orange'],
                ['title' => 'Marketing Operations Lead', 'icon' => 'ri-megaphone-line', 'color' => 'yellow'],
                ['title' => 'Corporate Finance Head', 'icon' => 'ri-coins-line', 'color' => 'red'],
                ['title' => 'Strategic Business Partner', 'icon' => 'ri-shake-hands-line', 'color' => 'green']
            ],
            'faqs' => [
                ['q' => 'Is a 1-Year Online MBA recognized for promotions and corporate roles?', 'a' => 'Yes. Accelerated 1-year management programs from accredited institutions are highly valued by corporate recruiters for experienced professionals seeking faster upward mobility.'],
                ['q' => 'Can I complete this degree while continuing my full-time job?', 'a' => 'Absolutely. The program is built specifically for working executives, with pre-recorded asynchronous lectures, weekend live sessions, and self-scheduled assessments.'],
                ['q' => 'What is the minimum work experience required?', 'a' => 'Most universities mandate at least 2 to 3 years of verifiable full-time work experience to ensure all cohort members bring rich peer insights to class discussions.'],
                ['q' => 'Are EMI options available for fee payments?', 'a' => 'Yes, universities provide convenient 6-month, 9-month, and 12-month zero-cost EMI plans via banking and education finance partners.']
            ]
        ],

        'executive-mba' => [
            'id' => 'executive-mba',
            'slug' => 'executive-mba.php',
            'title' => 'Executive MBA',
            'full_title' => 'Executive Master of Business Administration (Executive MBA)',
            'program_badge' => 'Postgraduate Executive Program',
            'hero_desc' => 'A premier executive management program crafted for mid-to-senior level managers, business founders, and corporate leaders aiming to master enterprise strategy, board governance, and disruptive innovation.',
            'image' => 'assets/img/course/mba.jpg',
            'pill_top' => 'Leadership Masterclasses',
            'pill_bottom' => 'Avg. ₹16.0 LPA Package',
            'duration' => '1 to 2 Years (Flexible modules)',
            'mode' => '100% Online & Weekend Masterclasses',
            'accreditation' => 'UGC-DEB & AICTE Entitled',
            'eligibility' => 'Graduation + 3+ Years Work Exp. (Min 50%)',
            'fee_desc' => 'Executive MBA fees range from ₹1,20,000 to ₹4,00,000 Total depending on institution tier. Flexible corporate sponsorship and EMI options available.',
            'eligibility_desc' => 'Bachelor’s degree in any discipline with minimum 50% marks from a recognized university, with a minimum of 3 years of executive, managerial, or entrepreneurial experience.',
            'specialisations' => [
                ['title' => 'Enterprise Strategy & Governance', 'desc' => 'Boardroom decision-making, mergers and acquisitions, business turnarounds.', 'icon' => 'ri-building-line', 'color' => 'blue'],
                ['title' => 'Digital Strategy & AI Transformation', 'desc' => 'Leveraging artificial intelligence, automation, and digital cloud business models.', 'icon' => 'ri-cpu-line', 'color' => 'orange'],
                ['title' => 'Corporate Finance & Value Creation', 'desc' => 'Private equity, venture capital, financial structuring, and shareholder value maximization.', 'icon' => 'ri-funds-line', 'color' => 'purple'],
                ['title' => 'Global Leadership & People Strategy', 'desc' => 'Executive talent orchestration, high-performance team culture, and change management.', 'icon' => 'ri-team-line', 'color' => 'green']
            ],
            'syllabus' => [
                ['sem' => 'Stage 1: Strategic Foundations for Leaders', 'badge' => 'Executive Core', 'subjects' => ['Macroeconomic Policies & Global Business Context', 'Strategic Financial Management & Valuation', 'Marketing Leadership in Digital Ecosystems', 'Executive Decision Analytics', 'High-Performance Organizational Leadership']],
                ['sem' => 'Stage 2: Enterprise Transformation & Capstone', 'badge' => 'Advanced Strategy', 'subjects' => ['Corporate Governance, Ethics & Regulatory Risk', 'Digital Business Models & Innovation Strategies', 'Disruptive Technology & AI for C-Suite', 'Executive Strategic Consulting Capstone Project', 'Board-Level Presentation & Defense']]
            ],
            'careers' => [
                ['title' => 'Chief Executive / Operations Officer', 'icon' => 'ri-vip-crown-line', 'color' => 'blue'],
                ['title' => 'Vice President / Business Head', 'icon' => 'ri-user-star-line', 'color' => 'chart'],
                ['title' => 'General Manager', 'icon' => 'ri-briefcase-4-line', 'color' => 'orange'],
                ['title' => 'Principal Strategy Consultant', 'icon' => 'ri-line-chart-line', 'color' => 'yellow'],
                ['title' => 'Corporate Development Director', 'icon' => 'ri-building-4-line', 'color' => 'red'],
                ['title' => 'Enterprise Business Founder', 'icon' => 'ri-lightbulb-line', 'color' => 'green']
            ],
            'faqs' => [
                ['q' => 'Who should enroll in an Executive MBA?', 'a' => 'An Executive MBA is designed for professionals with 3+ years of experience who want to leap into director, VP, functional head, or CXO roles without quitting their existing job.'],
                ['q' => 'How does the executive timetable fit a busy schedule?', 'a' => 'The program operates on recorded on-demand modules and weekend interactive sessions led by industry veteran mentors, making it fully compatible with demanding work schedules.'],
                ['q' => 'Are corporate sponsorships supported?', 'a' => 'Yes. Many universities provide corporate billing assistance and employee reimbursement paperwork for candidates whose employers sponsor their education.'],
                ['q' => 'What networking opportunities exist?', 'a' => 'Executive MBA cohorts include managers and founders from leading MNCs, offering tremendous peer-to-peer learning, business networking, and career advancement.']
            ]
        ],

        'global-mca' => [
            'id' => 'global-mca',
            'slug' => 'global-mca.php',
            'title' => 'Global MCA',
            'full_title' => 'Global Master of Computer Applications (Global MCA)',
            'program_badge' => 'Postgraduate Degree Program',
            'hero_desc' => 'A globally benchmarked master’s program in computer applications focusing on enterprise cloud computing, generative AI systems, modern microservices architecture, and international tech standards.',
            'image' => 'assets/img/course/mca.jpg',
            'pill_top' => 'Global Tech Curriculum',
            'pill_bottom' => 'Avg. ₹10.5 LPA Package',
            'duration' => '2 Years (4 Semesters)',
            'mode' => '100% Online & Cloud Labs',
            'accreditation' => 'UGC-DEB & AICTE Entitled',
            'eligibility' => 'BCA/B.Sc (IT/CS)/B.Com with Maths (Min 50%)',
            'fee_desc' => 'Program fees range from ₹90,000 to ₹1,80,000 Total. Monthly zero-interest EMI options available.',
            'eligibility_desc' => 'BCA / B.Sc in Computer Science or IT, or any Bachelor’s degree with Mathematics at 10+2 or graduation level with minimum 50% aggregate marks.',
            'specialisations' => [
                ['title' => 'Enterprise Cloud & DevOps', 'desc' => 'Architecting resilient hyperscale systems on AWS, Azure, Google Cloud, and Kubernetes.', 'icon' => 'ri-cloud-line', 'color' => 'blue'],
                ['title' => 'Artificial Intelligence & Large Models', 'desc' => 'Generative AI frameworks, LLM integrations, computer vision, and neural network training.', 'icon' => 'ri-brain-line', 'color' => 'orange'],
                ['title' => 'Distributed Full Stack Architecture', 'desc' => 'Reactive web systems, microservices design, high-concurrency Node.js and Go pipelines.', 'icon' => 'ri-code-s-slash-line', 'color' => 'purple'],
                ['title' => 'Global Cyber Governance & Security', 'desc' => 'International cybersecurity standards, zero-trust architectures, and cloud security compliance.', 'icon' => 'ri-shield-keyhole-line', 'color' => 'green']
            ],
            'syllabus' => [
                ['sem' => 'Semester 1: Advanced Computing Architectures', 'badge' => 'Computing Core', 'subjects' => ['Distributed Algorithms & Complexity', 'Enterprise Object Design (Java / Go)', 'Advanced Cloud Database Systems', 'Global Network Security & Protocols', 'Virtual Cloud Lab I']],
                ['sem' => 'Semester 2: Cloud Native & Microservices', 'badge' => 'Systems Core', 'subjects' => ['Cloud Native Architecture & Kubernetes', 'Modern Full Stack Microservices', 'Big Data Streaming (Kafka & Spark)', 'DevOps Automation Pipelines', 'Cloud Architecture Lab II']],
                ['sem' => 'Semester 3: Artificial Intelligence & Electives', 'badge' => 'AI Specialization', 'subjects' => ['Artificial Intelligence & Deep Learning', 'Domain Elective I (Enterprise Cloud / Cyber Defense)', 'Mobile & Cross-Platform Systems', 'Research Methodologies & Minor Project', 'AI & Machine Learning Lab']],
                ['sem' => 'Semester 4: Global Capstone & Dissertation', 'badge' => 'Capstone & Viva', 'subjects' => ['Enterprise Generative AI Applications', 'Global Tech Compliance & Ethics', 'Major Industry Cloud Capstone Project', 'Comprehensive Technical Viva Voce']]
            ],
            'careers' => [
                ['title' => 'Global Solutions Architect', 'icon' => 'ri-cloud-line', 'color' => 'blue'],
                ['title' => 'Principal AI / ML Engineer', 'icon' => 'ri-cpu-line', 'color' => 'chart'],
                ['title' => 'Enterprise Full Stack Lead', 'icon' => 'ri-code-line', 'color' => 'orange'],
                ['title' => 'DevOps & SRE Manager', 'icon' => 'ri-server-line', 'color' => 'yellow'],
                ['title' => 'Cyber Security Architect', 'icon' => 'ri-shield-check-line', 'color' => 'red'],
                ['title' => 'Technical Consultant', 'icon' => 'ri-terminal-box-line', 'color' => 'green']
            ],
            'faqs' => [
                ['q' => 'What makes Global MCA different from regular MCA?', 'a' => 'Global MCA integrates international cloud certifications, global software architectural standards, distributed enterprise systems, and hands-on generative AI tools aligned with worldwide tech companies.'],
                ['q' => 'Can graduates from non-CS streams apply?', 'a' => 'Yes, graduates from non-CS streams (such as B.Sc, B.Com, or BA) who had Mathematics at 10+2 or graduation level are eligible. Foundation bridge modules ensure seamless transition.'],
                ['q' => 'How are hands-on coding and lab practicals conducted?', 'a' => 'Students work in cloud-hosted browser IDEs, virtual Docker containers, and GitHub environments with real-time automated tests and mentor code reviews.'],
                ['q' => 'What placement opportunities are offered?', 'a' => 'Partner universities connect students with top product firms, IT consulting giants, and high-growth technology startups through virtual placement drives.']
            ]
        ],

        'online-majmc' => [
            'id' => 'online-majmc',
            'slug' => 'online-majmc.php',
            'title' => 'Online MAJMC',
            'full_title' => 'Master of Arts in Journalism & Mass Communication (Online MAJMC)',
            'program_badge' => 'Postgraduate Degree Program',
            'hero_desc' => 'An advanced 2-year master’s degree designed for media professionals and aspiring communicators, mastering digital media strategy, investigative journalism, corporate communications, and broadcast media management.',
            'image' => 'assets/img/course/bba.jpg',
            'pill_top' => 'UGC-DEB Entitled',
            'pill_bottom' => 'Avg. ₹6.8 LPA Package',
            'duration' => '2 Years (4 Semesters)',
            'mode' => '100% Online & Self-Paced',
            'accreditation' => 'UGC-DEB Entitled',
            'eligibility' => 'Bachelor’s Degree in any discipline (Min 50%)',
            'fee_desc' => 'Program fees range from ₹25,000/sem to ₹1,30,000 Total. Monthly installment and EMI schemes available.',
            'eligibility_desc' => 'Bachelor’s degree in any discipline (Arts, Science, Commerce, Mass Media) with minimum 50% aggregate marks from a recognized university.',
            'specialisations' => [
                ['title' => 'Investigative & Digital Media', 'desc' => 'In-depth reporting, data journalism, OSINT techniques, and multimedia publishing.', 'icon' => 'ri-newspaper-line', 'color' => 'blue'],
                ['title' => 'Strategic Corporate Communications', 'desc' => 'Enterprise reputation leadership, stakeholder communication, PR campaigns.', 'icon' => 'ri-megaphone-line', 'color' => 'orange'],
                ['title' => 'Broadcast & Documentary Production', 'desc' => 'Advanced scriptwriting, video direction, audio podcasting, and post-production.', 'icon' => 'ri-video-line', 'color' => 'purple'],
                ['title' => 'Digital Brand Strategy & Advertising', 'desc' => 'Brand narrative development, social media campaigns, and marketing communications.', 'icon' => 'ri-advertisement-line', 'color' => 'green']
            ],
            'syllabus' => [
                ['sem' => 'Semester 1: Advanced Media & Communication Theories', 'badge' => 'Theory Core', 'subjects' => ['Contemporary Communication Theories', 'Global Media Systems & World News', 'Advanced Print & Digital Reporting', 'Media Ethics, Governance & Digital Laws', 'Visual Communication & Design Lab']],
                ['sem' => 'Semester 2: Broadcast Production & Corporate Comms', 'badge' => 'AV & PR', 'subjects' => ['Television & Radio Programming', 'Corporate Communications & Crisis Management', 'Integrated Marketing Communication (IMC)', 'Media Research Methodologies', 'Audio-Visual Production Lab']],
                ['sem' => 'Semester 3: Digital Media Innovations & Electives', 'badge' => 'Elective Modules', 'subjects' => ['Data Journalism & Infographics', 'Specialization Elective (Investigative / Corporate PR)', 'Digital Media Marketing & Analytics', 'Documentary & Multimedia Production', 'Media Internship & Industry Report']],
                ['sem' => 'Semester 4: Master Dissertation & Portfolio', 'badge' => 'Dissertation', 'subjects' => ['Media Management, Monetization & Startups', 'Fact-Checking & Misinformation Countermeasures', 'Master Thesis & Creative Capstone Project', 'Comprehensive Viva Voce']]
            ],
            'careers' => [
                ['title' => 'Chief Media Editor', 'icon' => 'ri-article-line', 'color' => 'blue'],
                ['title' => 'Corporate Communications Director', 'icon' => 'ri-megaphone-line', 'color' => 'chart'],
                ['title' => 'Senior PR Strategist', 'icon' => 'ri-broadcast-line', 'color' => 'orange'],
                ['title' => 'Investigative Journalist', 'icon' => 'ri-newspaper-line', 'color' => 'yellow'],
                ['title' => 'Creative Content Producer', 'icon' => 'ri-video-chat-line', 'color' => 'red'],
                ['title' => 'Media & Brand Consultant', 'icon' => 'ri-lightbulb-line', 'color' => 'green']
            ],
            'faqs' => [
                ['q' => 'Is an Online MAJMC valid for government and corporate jobs?', 'a' => 'Yes. As per UGC-DEB guidelines, online MAJMC degrees hold legal parity with regular on-campus master degrees for government positions, corporate leadership, and doctoral admissions.'],
                ['q' => 'Can working journalists and professionals take this course?', 'a' => 'Yes. The asynchronous lecture delivery, self-scheduled reading materials, and weekend live mentoring are tailored specifically for busy media professionals.'],
                ['q' => 'What career paths open up after completing an Online MAJMC?', 'a' => 'Graduates lead editorial desks, manage corporate communications for top multinational brands, direct public relations agencies, and produce digital broadcast content.'],
                ['q' => 'Does the course cover digital journalism and social media tools?', 'a' => 'Yes, modern data journalism, podcasting, social media campaign design, analytics, and mobile journalism tools are fully integrated into the syllabus.']
            ]
        ],

        'online-msc-mathematics' => [
            'id' => 'online-msc-mathematics',
            'slug' => 'online-msc-mathematics.php',
            'title' => 'Online M.Sc. Mathematics',
            'full_title' => 'Master of Science in Mathematics (Online M.Sc. Mathematics)',
            'program_badge' => 'Postgraduate Degree Program',
            'hero_desc' => 'A rigorous 2-year postgraduate program in advanced mathematical sciences, developing deep mastery in abstract algebra, real analysis, topology, numerical methods, differential equations, and data-centric mathematical modeling.',
            'image' => 'assets/img/course/bca.jpg',
            'pill_top' => 'UGC-DEB Entitled',
            'pill_bottom' => 'Avg. ₹7.2 LPA Package',
            'duration' => '2 Years (4 Semesters)',
            'mode' => '100% Online & Self-Paced',
            'accreditation' => 'UGC-DEB Entitled',
            'eligibility' => 'B.Sc with Mathematics major/core (Min 50%)',
            'fee_desc' => 'Program fees range from ₹22,000/sem to ₹95,000 Total across accredited universities. Convenient monthly installment options available.',
            'eligibility_desc' => 'B.Sc degree with Mathematics as an Honours, Major, or core discipline with minimum 50% aggregate marks from a recognized university.',
            'specialisations' => [
                ['title' => 'Pure Mathematics & Topology', 'desc' => 'Abstract algebraic structures, advanced topology, complex analysis, and measure theory.', 'icon' => 'ri-functions', 'color' => 'blue'],
                ['title' => 'Applied Mathematical Modeling', 'desc' => 'Differential equations, dynamical systems, mechanics, and computational modeling.', 'icon' => 'ri-calculator-line', 'color' => 'orange'],
                ['title' => 'Computational Mathematics & Analytics', 'desc' => 'Numerical analysis, scientific computing in Python/MATLAB, and data algorithms.', 'icon' => 'ri-database-2-line', 'color' => 'purple'],
                ['title' => 'Financial Mathematics & Actuarial', 'desc' => 'Stochastic calculus, probability models, risk analytics, and quantitative finance.', 'icon' => 'ri-funds-line', 'color' => 'green']
            ],
            'syllabus' => [
                ['sem' => 'Semester 1: Foundational Pure Mathematics', 'badge' => 'Pure Core', 'subjects' => ['Advanced Abstract Algebra', 'Real Analysis & Metric Spaces', 'Ordinary Differential Equations', 'Topology & Functional Spaces', 'Mathematical Computational Tools']],
                ['sem' => 'Semester 2: Advanced Analysis & Numerical Methods', 'badge' => 'Advanced Core', 'subjects' => ['Complex Analysis & Residue Calculus', 'Partial Differential Equations', 'Numerical Analysis & Algorithm Design', 'Linear Algebra & Matrix Theory', 'Computer Lab (Python/MATLAB)']],
                ['sem' => 'Semester 3: Optimization & Domain Electives', 'badge' => 'Elective Modules', 'subjects' => ['Functional Analysis & Operator Theory', 'Operations Research & Optimization', 'Probability Theory & Stochastic Processes', 'Specialization Elective (Fluid Dynamics / Financial Math)', 'Research Seminar']],
                ['sem' => 'Semester 4: Applied Mathematics & Dissertation', 'badge' => 'Thesis & Project', 'subjects' => ['Number Theory & Cryptography', 'Mathematical Modeling & Simulation', 'Major Master Research Dissertation', 'Comprehensive Mathematical Viva Voce']]
            ],
            'careers' => [
                ['title' => 'Quantitative Analyst', 'icon' => 'ri-line-chart-line', 'color' => 'blue'],
                ['title' => 'Data Scientist / Modeler', 'icon' => 'ri-database-line', 'color' => 'chart'],
                ['title' => 'Operations Research Specialist', 'icon' => 'ri-settings-4-line', 'color' => 'orange'],
                ['title' => 'Cryptographic Researcher', 'icon' => 'ri-shield-keyhole-line', 'color' => 'yellow'],
                ['title' => 'Risk & Actuarial Analyst', 'icon' => 'ri-file-chart-line', 'color' => 'red'],
                ['title' => 'Senior Mathematics Educator', 'icon' => 'ri-book-read-line', 'color' => 'green']
            ],
            'faqs' => [
                ['q' => 'Can I prepare for CSIR-NET or GATE with an Online M.Sc. Mathematics?', 'a' => 'Yes. The syllabus follows the standard UGC-prescribed curriculum, thoroughly covering pure and applied mathematics topics tested in CSIR-NET, GATE, and doctoral entrance exams.'],
                ['q' => 'Is this degree recognized for higher education (Ph.D.)?', 'a' => 'Yes. Online M.Sc. degrees from UGC-DEB recognized universities are fully accepted for Ph.D. admissions across all central, state, and private universities.'],
                ['q' => 'What programming tools are covered in practical modules?', 'a' => 'Practical computing modules feature hands-on numerical problem solving using modern scientific tools including Python (NumPy, SciPy), MATLAB, and R.'],
                ['q' => 'What are the career opportunities in the corporate sector?', 'a' => 'M.Sc. Mathematics graduates are in high demand for quantitative finance roles in investment banks, data science teams, cryptographic security firms, and actuarial consultancies.']
            ]
        ],

        'online-msc-ms-other' => [
            'id' => 'online-msc-ms-other',
            'slug' => 'online-msc-ms.php',
            'title' => 'Online M.Sc. / MS Degree',
            'full_title' => 'Master of Science / Master of Studies (Specialized Disciplines)',
            'program_badge' => 'Postgraduate Science & Tech Program',
            'hero_desc' => 'Advanced postgraduate programs offering specialized tracks in Applied Data Science, Artificial Intelligence, Computational Statistics, and Applied Science disciplines from premier universities.',
            'image' => 'assets/img/course/mca.jpg',
            'pill_top' => 'Specialized Disciplines',
            'pill_bottom' => 'Avg. ₹9.0 LPA Package',
            'duration' => '2 Years (4 Semesters)',
            'mode' => '100% Online & Virtual Labs',
            'accreditation' => 'UGC-DEB Entitled',
            'eligibility' => 'B.Sc / Bachelor’s in Science or Tech (Min 50%)',
            'fee_desc' => 'Program fees range from ₹30,000/sem to ₹1,70,000 Total. Zero-cost monthly EMI options available.',
            'eligibility_desc' => 'B.Sc degree or Bachelor’s degree in science, computing, statistics, mathematics, or engineering with minimum 50% aggregate marks from a recognized university.',
            'specialisations' => [
                ['title' => 'Data Science & Big Data', 'desc' => 'Machine learning pipelines, predictive modeling, data visualization, and cloud analytics.', 'icon' => 'ri-database-2-line', 'color' => 'blue'],
                ['title' => 'Applied Artificial Intelligence', 'desc' => 'Deep neural networks, natural language processing, computer vision, and AI ethics.', 'icon' => 'ri-brain-line', 'color' => 'orange'],
                ['title' => 'Information Technology & Systems', 'desc' => 'Enterprise architecture, cloud computing, cyber governance, and software engineering.', 'icon' => 'ri-computer-line', 'color' => 'purple'],
                ['title' => 'Applied Statistics & Modeling', 'desc' => 'Statistical inference, stochastic models, biostatistics, and econometric analytics.', 'icon' => 'ri-bar-chart-2-line', 'color' => 'green']
            ],
            'syllabus' => [
                ['sem' => 'Semester 1: Core Computational Foundations', 'badge' => 'Core Sciences', 'subjects' => ['Mathematical Foundations for Science & Tech', 'Advanced Programming in Python / R', 'Data Structures & Algorithms', 'Statistical Foundations & Inference', 'Scientific Computing Lab']],
                ['sem' => 'Semester 2: Advanced Analytics & Modern Systems', 'badge' => 'Analytical Core', 'subjects' => ['Applied Machine Learning Algorithms', 'Big Data Engineering & Distributed Systems', 'Database Systems & Data Warehousing', 'Research Design & Methodology', 'Analytics Laboratory Workshop']],
                ['sem' => 'Semester 3: Discipline Specialization Track', 'badge' => 'Major Electives', 'subjects' => ['Domain Specialization Track I', 'Domain Specialization Track II', 'Cloud Computing & System Deployments', 'Scientific Project Seminar', 'Minor Capstone Project']],
                ['sem' => 'Semester 4: Master Thesis & Capstone Project', 'badge' => 'Master Thesis', 'subjects' => ['Advanced Applied Seminar', 'IPR, Ethics & Research Governance', 'Major Industry Capstone Project', 'Comprehensive Viva Voce']]
            ],
            'careers' => [
                ['title' => 'Senior Data Scientist', 'icon' => 'ri-database-line', 'color' => 'blue'],
                ['title' => 'Machine Learning Engineer', 'icon' => 'ri-cpu-line', 'color' => 'chart'],
                ['title' => 'Scientific Research Analyst', 'icon' => 'ri-microscope-line', 'color' => 'orange'],
                ['title' => 'Business Intelligence Architect', 'icon' => 'ri-line-chart-line', 'color' => 'yellow'],
                ['title' => 'Statistical Consultant', 'icon' => 'ri-file-chart-line', 'color' => 'red'],
                ['title' => 'Technology Project Lead', 'icon' => 'ri-terminal-box-line', 'color' => 'green']
            ],
            'faqs' => [
                ['q' => 'What specializations are available under Online M.Sc. / MS programs?', 'a' => 'Depending on the offering university, popular specializations include Data Science, Applied Artificial Intelligence, Statistics, Information Technology, and Environmental Science.'],
                ['q' => 'Are virtual labs and computing environments provided?', 'a' => 'Yes. Students access browser-based cloud IDEs, GPU-accelerated computing notebooks, and simulated software environments for all technical assignments.'],
                ['q' => 'Is this degree recognized for corporate roles and Ph.D. programs?', 'a' => 'Yes. As UGC-DEB entitled degrees, they hold legal parity with on-campus Master of Science programs for corporate hiring and doctoral research across India and abroad.'],
                ['q' => 'What placement assistance is provided?', 'a' => 'Partner universities offer dedicated placement assistance, virtual recruitment drives with tech giants, interview preparation sessions, and resume-building masterclasses.']
            ]
        ],

        'online-ma-other' => [
            'id' => 'online-ma-other',
            'slug' => 'online-ma.php',
            'title' => 'Online MA',
            'full_title' => 'Master of Arts (Specialized Disciplines)',
            'program_badge' => 'Postgraduate Humanities Program',
            'hero_desc' => 'A versatile 2-year master’s degree delivering in-depth academic rigor, critical analysis, and cultural insights across English Literature, Economics, Psychology, History, and Public Administration.',
            'image' => 'assets/img/course/mcom.jpg',
            'pill_top' => 'UGC-DEB Entitled',
            'pill_bottom' => 'Avg. ₹6.0 LPA Package',
            'duration' => '2 Years (4 Semesters)',
            'mode' => '100% Online & Self-Paced',
            'accreditation' => 'UGC-DEB Entitled',
            'eligibility' => 'Bachelor’s Degree in any stream (Min 45%-50%)',
            'fee_desc' => 'Very affordable fee structure ranging from ₹12,000/sem to ₹60,000 Total. Convenient installment schemes available.',
            'eligibility_desc' => 'Graduation in any discipline (BA, B.Sc, B.Com, BBA, etc.) from a recognized university with minimum 45%-50% aggregate marks.',
            'specialisations' => [
                ['title' => 'English Literature & Linguistics', 'desc' => 'British literature, post-colonial writings, literary theory, and linguistics.', 'icon' => 'ri-book-open-line', 'color' => 'blue'],
                ['title' => 'Economics & Public Policy', 'desc' => 'Macroeconomic theories, econometric models, public finance, and development economics.', 'icon' => 'ri-line-chart-line', 'color' => 'orange'],
                ['title' => 'Psychology & Behavioral Science', 'desc' => 'Cognitive psychology, counseling theories, psychopathology, and organizational behavior.', 'icon' => 'ri-mental-health-line', 'color' => 'purple'],
                ['title' => 'Public Administration & Governance', 'desc' => 'Administrative theories, public policy analysis, bureaucratic systems, and governance.', 'icon' => 'ri-government-line', 'color' => 'green']
            ],
            'syllabus' => [
                ['sem' => 'Semester 1: Foundations of Discipline', 'badge' => 'Discipline Core', 'subjects' => ['Classical Foundations & Texts', 'Research Methodologies in Humanities', 'Historical & Philosophical Contexts', 'Critical Theories & Perspectives', 'Seminar & Scholarly Writing']],
                ['sem' => 'Semester 2: Modern Theories & Analysis', 'badge' => 'Theoretical Core', 'subjects' => ['Advanced Discipline Theories', 'Comparative Studies & World Perspectives', 'Quantitative & Qualitative Research Methods', 'Contemporary Thought & Social Dynamics', 'Critical Essay Workshop']],
                ['sem' => 'Semester 3: Discipline Specialization Electives', 'badge' => 'Specialization', 'subjects' => ['Discipline Major Elective I', 'Discipline Major Elective II', 'Special Topics & Regional Studies', 'Policy & Applied Dimensions', 'Term Paper & Seminar']],
                ['sem' => 'Semester 4: Master Dissertation & Capstone', 'badge' => 'Master Thesis', 'subjects' => ['Advanced Seminal Studies', 'Contemporary Emerging Trends', 'Master Research Dissertation Project', 'Comprehensive Academic Viva Voce']]
            ],
            'careers' => [
                ['title' => 'Public Policy Analyst', 'icon' => 'ri-government-line', 'color' => 'blue'],
                ['title' => 'Corporate Communications Lead', 'icon' => 'ri-megaphone-line', 'color' => 'chart'],
                ['title' => 'Content & Publishing Editor', 'icon' => 'ri-edit-line', 'color' => 'orange'],
                ['title' => 'Behavioral / Counseling Advisor', 'icon' => 'ri-mental-health-line', 'color' => 'yellow'],
                ['title' => 'Research Associate / Think Tank', 'icon' => 'ri-book-open-line', 'color' => 'red'],
                ['title' => 'Academic Educator & Lecturer', 'icon' => 'ri-graduation-cap-line', 'color' => 'green']
            ],
            'faqs' => [
                ['q' => 'Is an Online MA degree recognized for NET, SET, and Ph.D. admissions?', 'a' => 'Yes. As per UGC regulations, online degrees earned from entitled institutions hold complete parity with regular campus degrees, qualifying you for UGC-NET, state civil services, and doctoral programs.'],
                ['q' => 'Can working professionals from other fields pursue an Online MA?', 'a' => 'Yes. Graduates from any discipline (including Engineering, Commerce, or Science) are eligible to enroll and study at their own pace using recorded lectures and digital libraries.'],
                ['q' => 'What specializations can I choose from?', 'a' => 'Partner universities offer diverse MA specializations including English, Economics, Psychology, History, Political Science, Sociology, and Public Administration.'],
                ['q' => 'How are semester exams conducted?', 'a' => 'Exams are conducted online via remotely proctored examinations with flexible weekend time slots, allowing learners to sit for assessments from home.']
            ]
        ]
    ];

    // Key aliases for flexible referencing
    $all_courses_detail_data['bca-mca'] = &$all_courses_detail_data['bca-mca-integrated'];
    $all_courses_detail_data['bba-mba'] = &$all_courses_detail_data['bba-mba-integrated'];
    $all_courses_detail_data['bcom-mba'] = &$all_courses_detail_data['bcom-mba-integrated'];
    $all_courses_detail_data['online-msc-ms'] = &$all_courses_detail_data['online-msc-ms-other'];
    $all_courses_detail_data['online-ma'] = &$all_courses_detail_data['online-ma-other'];

    /**
     * Helper to retrieve full course details by key/id/slug
     */
    function dura_get_course_detail(string $key): ?array {
        global $all_courses_detail_data;
        if (isset($all_courses_detail_data[$key])) {
            return $all_courses_detail_data[$key];
        }
        foreach ($all_courses_detail_data as $id => $data) {
            if ($id === $key || ($data['id'] ?? '') === $key || ($data['slug'] ?? '') === $key) {
                return $data;
            }
        }
        return null;
    }
}
