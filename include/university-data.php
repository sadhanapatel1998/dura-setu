<?php
// Centralized data loader bridging JSON datasets with legacy array compatibility
require_once __DIR__ . '/data-loader.php';

// If JSON loaded successfully, $all_universities_data is already populated.
// If for any reason JSON loading yielded empty, fallback to legacy definition below:
if (empty($all_universities_data)) {
    $all_universities_data = [
        'manipal-jaipur' => [
            'slug' => 'manipal-university-jaipur.php',
            'name' => 'Manipal University Jaipur Online',
            'short_name' => 'Manipal University Jaipur',
            'logo' => 'assets/img/university/manipal-logo-jaipur.png',
            'campus_img' => 'assets/img/university/jaipur-manipal-campus.jpg',
            'subtitle' => 'Online Degree Programs for Career-Focused Learners',
            'hero_desc' => 'Manipal University Jaipur (MUJ) offers UGC-entitled online degree programs with a flexible learning format, industry-relevant curriculum and a strong academic legacy.',
            'since' => '2021',
            'learners' => '50,000+',
            'rank' => 'Top Ranked Private University',
            'overview' => [
                'type' => 'Private University',
                'recognition' => 'UGC-DEB',
                'accreditation' => 'NAAC A+',
                'mode' => 'Online',
                'since' => '2021',
                'group' => 'Manipal Group'
            ],
            'trust_badges' => [
                ['label' => 'UGC Entitled', 'type' => 'ugc', 'icon' => 'ri-checkbox-circle-fill'],
                ['label' => 'NAAC A+', 'type' => 'naac', 'icon' => 'ri-award-fill'],
                ['label' => 'Part of Manipal Group', 'type' => 'group', 'icon' => 'ri-community-fill']
            ],
            'about_p1' => 'Manipal University Jaipur (MUJ) is a leading private university and a part of the renowned Manipal Group. It offers UGC-entitled online degree programs designed for learners who seek flexibility without compromising on quality.',
            'about_p2' => 'With a strong academic legacy, industry-aligned curriculum and technology-enabled learning, MUJ Online is a popular choice for students and working professionals across India.',
            'why_points' => [
                'UGC-entitled online degree programs',
                'NAAC A+ accredited university',
                'Part of the prestigious Manipal Group',
                'Flexible learning for working professionals',
                'Industry-relevant curriculum',
                'Remotely proctored online examinations',
                'Placement assistance and career support'
            ],
            'courses' => [
                ['name' => 'Online BBA', 'duration' => '3 Years', 'fee' => '₹1,35,000', 'theme' => 'bba', 'icon' => 'ri-graduation-cap-line', 'url' => 'online-bba.php'],
                ['name' => 'Online BCA', 'duration' => '3 Years', 'fee' => '₹1,35,000', 'theme' => 'bca', 'icon' => 'ri-computer-line', 'url' => 'online-bca.php'],
                ['name' => 'Online MBA', 'duration' => '2 Years', 'fee' => '₹1,75,000', 'theme' => 'mba', 'icon' => 'ri-bar-chart-line', 'url' => 'online-mba.php'],
                ['name' => 'Online MCA', 'duration' => '2 Years', 'fee' => '₹1,58,000', 'theme' => 'mca', 'icon' => 'ri-group-line', 'url' => 'online-mca.php']
            ],
            'approvals' => [
                ['title' => 'UGC Entitled', 'type' => 'ugc', 'icon' => 'ri-verified-badge-fill', 'desc' => 'Programs are entitled by the University Grants Commission (UGC).'],
                ['title' => 'NAAC A+', 'type' => 'naac', 'icon' => 'ri-award-fill', 'desc' => 'Accredited with NAAC A+ grade for high academic standards and infrastructure.'],
                ['title' => 'Part of Manipal Group', 'type' => 'group', 'icon' => 'ri-building-line', 'desc' => 'A part of the prestigious Manipal Group with 70+ years of educational legacy.']
            ],
            'fee_structure' => [
                ['program' => 'Online BBA', 'duration' => '3 Years', 'total' => '₹1,35,000', 'emi' => 'Starting from ₹5,625/month'],
                ['program' => 'Online BCA', 'duration' => '3 Years', 'total' => '₹1,35,000', 'emi' => 'Starting from ₹5,625/month'],
                ['program' => 'Online MBA', 'duration' => '2 Years', 'total' => '₹1,75,000', 'emi' => 'Starting from ₹7,292/month'],
                ['program' => 'Online MCA', 'duration' => '2 Years', 'total' => '₹1,58,000', 'emi' => 'Starting from ₹6,583/month']
            ],
            'faqs' => [
                ['q' => 'Is Manipal University Jaipur Online UGC entitled?', 'a' => 'Yes, Manipal University Jaipur is entitled by the UGC-DEB to offer online undergraduate and postgraduate degree programs that hold equal legal status to on-campus degrees.'],
                ['q' => 'Are online degrees from MUJ valid?', 'a' => 'Yes, online degrees awarded by MUJ are completely valid for government employment, higher education in India and abroad, and corporate placements.'],
                ['q' => 'What is the duration of online programs?', 'a' => 'Postgraduate degrees (MBA, MCA) have a 2-year duration (4 semesters). Undergraduate degrees (BBA, BCA) have a 3-year duration (6 semesters).'],
                ['q' => 'What is the admission process?', 'a' => 'The admission process is 100% online. Submit your online application, upload educational documents, pay the program fee, and receive instant admission confirmation.']
            ]
        ],

        'nmims-online' => [
            'slug' => 'nmims-online.php',
            'name' => 'NMIMS Online University',
            'short_name' => 'NMIMS Online',
            'logo' => 'assets/img/university/nmims-logo.png',
            'campus_img' => 'assets/img/university/nmims-campus.jpg',
            'subtitle' => 'Executive Management & Professional Online Degrees',
            'hero_desc' => 'SVKM’s NMIMS Centre for Distance and Online Education is recognized among India’s top institutions for flexible management and technology degrees tailored for ambitious professionals.',
            'since' => '1994',
            'learners' => '1,20,000+',
            'rank' => 'Category-I Autonomy by UGC',
            'overview' => [
                'type' => 'Deemed-to-be University',
                'recognition' => 'UGC-DEB',
                'accreditation' => 'NAAC A+ (3.59 CGPA)',
                'mode' => 'Online',
                'since' => '1994',
                'group' => 'SVKM Group'
            ],
            'trust_badges' => [
                ['label' => 'UGC-DEB Entitled', 'type' => 'ugc', 'icon' => 'ri-checkbox-circle-fill'],
                ['label' => 'NAAC A+ Accredited', 'type' => 'naac', 'icon' => 'ri-award-fill'],
                ['label' => 'Autonomy Category I', 'type' => 'group', 'icon' => 'ri-community-fill']
            ],
            'about_p1' => 'SVKM’s NMIMS is a premium benchmark in management and higher education in India. Its online division provides corporate-tailored degree programs built with input from Fortune 500 industry executives.',
            'about_p2' => 'With advanced cloud LMS portals, digital libraries, interactive case studies, and live mentoring, NMIMS Online equips students for senior corporate and managerial roles.',
            'why_points' => [
                'Category-I University Autonomy by UGC',
                'NAAC A+ accredited with top CGPA score',
                'Industry-aligned syllabus updated quarterly',
                'Flexible weekend lectures & live recordings',
                'Dedicated student support and placement portal',
                '100% online proctored examinations',
                'Strong alumni network of 1,20,000+ professionals'
            ],
            'courses' => [
                ['name' => 'Online MBA', 'duration' => '2 Years', 'fee' => '₹1,68,000', 'theme' => 'mba', 'icon' => 'ri-bar-chart-line', 'url' => 'online-mba.php'],
                ['name' => 'Online MCA', 'duration' => '2 Years', 'fee' => '₹1,60,000', 'theme' => 'mca', 'icon' => 'ri-group-line', 'url' => 'online-mca.php'],
                ['name' => 'Online BBA', 'duration' => '3 Years', 'fee' => '₹1,44,000', 'theme' => 'bba', 'icon' => 'ri-graduation-cap-line', 'url' => 'online-bba.php'],
                ['name' => 'Online B.Com', 'duration' => '3 Years', 'fee' => '₹1,15,000', 'theme' => 'bcom', 'icon' => 'ri-bank-line', 'url' => 'online-bcom.php']
            ],
            'approvals' => [
                ['title' => 'UGC-DEB Entitled', 'type' => 'ugc', 'icon' => 'ri-verified-badge-fill', 'desc' => 'Accredited by the Distance Education Bureau, UGC for online degrees.'],
                ['title' => 'NAAC A+ Accredited', 'type' => 'naac', 'icon' => 'ri-award-fill', 'desc' => 'Conferred NAAC A+ rating with Grade 3.59 CGPA.'],
                ['title' => 'Category-I University', 'type' => 'group', 'icon' => 'ri-building-line', 'desc' => 'Granted autonomous Category-I status by the Ministry of Education.']
            ],
            'fee_structure' => [
                ['program' => 'Online MBA', 'duration' => '2 Years', 'total' => '₹1,68,000', 'emi' => 'Starting from ₹7,000/month'],
                ['program' => 'Online MCA', 'duration' => '2 Years', 'total' => '₹1,60,000', 'emi' => 'Starting from ₹6,670/month'],
                ['program' => 'Online BBA', 'duration' => '3 Years', 'total' => '₹1,44,000', 'emi' => 'Starting from ₹4,000/month'],
                ['program' => 'Online B.Com', 'duration' => '3 Years', 'total' => '₹1,15,000', 'emi' => 'Starting from ₹3,190/month']
            ],
            'faqs' => [
                ['q' => 'Is NMIMS Online MBA equivalent to executive MBA?', 'a' => 'Yes, NMIMS Online MBA is UGC-entitled and carries the prestigious NMIMS brand legacy, making it highly recognized across domestic and international corporations.'],
                ['q' => 'What learning support is available at NMIMS Online?', 'a' => 'Students receive access to the NMIMS student portal, 24/7 digital courseware, live interactive webinar lectures, session recordings, and student care counselors.'],
                ['q' => 'Can working professionals take examinations on weekends?', 'a' => 'Yes, NMIMS Online provides flexible exam slot bookings where students can choose convenient morning, afternoon, or evening weekend slots.'],
                ['q' => 'What are the career support services provided?', 'a' => 'NMIMS Online provides corporate job portals, resume enhancement, career coaching sessions, and recruitment opportunities with top partner companies.']
            ]
        ],

        'ignou-online' => [
            'slug' => 'ignou-online.php',
            'name' => 'IGNOU Online University',
            'short_name' => 'IGNOU Online',
            'logo' => 'assets/img/university/ignou-logo.png',
            'campus_img' => 'assets/img/university/ignou-campus.jpg',
            'subtitle' => 'National Open University of India | Central University',
            'hero_desc' => 'Indira Gandhi National Open University (IGNOU) is the world’s largest university, offering central government-recognized degrees with maximum flexibility and nation-wide credibility.',
            'since' => '1985',
            'learners' => '30,00,000+',
            'rank' => 'Central Govt University (NAAC A++)',
            'overview' => [
                'type' => 'Central University',
                'recognition' => 'UGC-DEB / AICTE',
                'accreditation' => 'NAAC A++ (Highest)',
                'mode' => 'Online & Distance',
                'since' => '1985',
                'group' => 'Govt. of India'
            ],
            'trust_badges' => [
                ['label' => 'Central Govt University', 'type' => 'ugc', 'icon' => 'ri-checkbox-circle-fill'],
                ['label' => 'NAAC A++ (Grade 1)', 'type' => 'naac', 'icon' => 'ri-award-fill'],
                ['label' => 'Global Recognition', 'type' => 'group', 'icon' => 'ri-community-fill']
            ],
            'about_p1' => 'Established by an Act of Parliament in 1985, IGNOU has continuously pioneered distance and digital education in India. It is renowned for rigorous academic standards, affordable fee structures, and nationwide acceptance.',
            'about_p2' => 'IGNOU degrees are accepted across all union and state government exams (UPSC, SSC, Banking), foreign university admissions, and major multinational enterprises.',
            'why_points' => [
                'Central University established by Act of Parliament',
                'Highest NAAC A++ accreditation grade',
                'Most affordable and cost-effective tuition fees',
                'Comprehensive digital study repository (eGyanKosh)',
                'Accepted for all Union and State public service exams',
                'Wide regional network with nationwide study support centers',
                'Flexible completion windows for busy students'
            ],
            'courses' => [
                ['name' => 'Online MBA', 'duration' => '2 Years', 'fee' => '₹62,000', 'theme' => 'mba', 'icon' => 'ri-bar-chart-line', 'url' => 'online-mba.php'],
                ['name' => 'Online MCA', 'duration' => '2 Years', 'fee' => '₹68,000', 'theme' => 'mca', 'icon' => 'ri-group-line', 'url' => 'online-mca.php'],
                ['name' => 'Online BCA', 'duration' => '3 Years', 'fee' => '₹46,200', 'theme' => 'bca', 'icon' => 'ri-computer-line', 'url' => 'online-bca.php'],
                ['name' => 'Online B.Com', 'duration' => '3 Years', 'fee' => '₹16,500', 'theme' => 'bcom', 'icon' => 'ri-bank-line', 'url' => 'online-bcom.php']
            ],
            'approvals' => [
                ['title' => 'Central University', 'type' => 'ugc', 'icon' => 'ri-verified-badge-fill', 'desc' => 'Established under the Ministry of Education, Government of India.'],
                ['title' => 'NAAC A++ Grade', 'type' => 'naac', 'icon' => 'ri-award-fill', 'desc' => 'Highest rating of excellence in Indian university accreditation.'],
                ['title' => 'AICTE & Commonwealth', 'type' => 'group', 'icon' => 'ri-building-line', 'desc' => 'Recognized by AICTE and the Commonwealth of Learning worldwide.']
            ],
            'fee_structure' => [
                ['program' => 'Online MBA', 'duration' => '2 Years', 'total' => '₹62,000', 'emi' => '₹2,580/month (Flexible)'],
                ['program' => 'Online MCA', 'duration' => '2 Years', 'total' => '₹68,000', 'emi' => '₹2,830/month (Flexible)'],
                ['program' => 'Online BCA', 'duration' => '3 Years', 'total' => '₹46,200', 'emi' => '₹1,925/month (Flexible)'],
                ['program' => 'Online B.Com', 'duration' => '3 Years', 'total' => '₹16,500', 'emi' => '₹690/month (Flexible)']
            ],
            'faqs' => [
                ['q' => 'Is an IGNOU degree valid for government examinations?', 'a' => 'Yes, 100%. Being a Central University, IGNOU degrees are fully recognized for UPSC Civil Services, SSC, State PSCs, Banking, Defense, and higher studies.'],
                ['q' => 'How are study materials provided to online students?', 'a' => 'Students access digital e-books via eGyanKosh, IGNOU e-Content App, and receive optional printed physical course modules sent to their address.'],
                ['q' => 'Is there any upper age limit for IGNOU online admissions?', 'a' => 'No, there is no age bar for admission to any of the degree programs offered by IGNOU.'],
                ['q' => 'What is the examination cycle?', 'a' => 'IGNOU conducts term-end examinations twice a year (in June and December) across thousands of designated examination centers nationwide and online.']
            ]
        ],

        'jain-university-online' => [
            'slug' => 'jain-university-online.php',
            'name' => 'Jain University Online',
            'short_name' => 'Jain University',
            'logo' => 'assets/img/university/jain-logo.png',
            'campus_img' => 'assets/img/university/jain-campus.jpg',
            'subtitle' => 'Future-Ready Online Programs in Tech, Business & Analytics',
            'hero_desc' => 'JAIN (Deemed-to-be-University), Bangalore offers cutting-edge online degree programs with global certifications, specialized tech electives, and live mentorship.',
            'since' => '1990',
            'learners' => '75,000+',
            'rank' => 'NAAC A++ | NIRF Top 70',
            'overview' => [
                'type' => 'Deemed-to-be University',
                'recognition' => 'UGC-DEB / AICTE',
                'accreditation' => 'NAAC A++ (3.71 CGPA)',
                'mode' => 'Online',
                'since' => '1990',
                'group' => 'JGI Group'
            ],
            'trust_badges' => [
                ['label' => 'UGC-DEB Entitled', 'type' => 'ugc', 'icon' => 'ri-checkbox-circle-fill'],
                ['label' => 'NAAC A++ Rated', 'type' => 'naac', 'icon' => 'ri-award-fill'],
                ['label' => 'Bengaluru Tech Ecosystem', 'type' => 'group', 'icon' => 'ri-community-fill']
            ],
            'about_p1' => 'JAIN University is a distinguished Bangalore-based educational powerhouse known for innovation, entrepreneurship, and top-tier technical and managerial education.',
            'about_p2' => 'Its online learning initiative, JAIN Online, delivers interactive digital degrees with dual certifications from top international professional bodies such as ACCA, CIMA, and Google.',
            'why_points' => [
                'NAAC A++ accreditation with top 3.71 CGPA score',
                'Integrated international certifications (ACCA, CIMA, IoA)',
                'Modern curriculum updated to match Silicon Valley standards',
                '2,000+ top hiring partners with robust placement drives',
                'AI-driven personalized Learning Management System',
                'Hands-on capstone projects and live coding environments',
                'Weekend live masterclasses with industry CXOs'
            ],
            'courses' => [
                ['name' => 'Online MBA', 'duration' => '2 Years', 'fee' => '₹1,40,000', 'theme' => 'mba', 'icon' => 'ri-bar-chart-line', 'url' => 'online-mba.php'],
                ['name' => 'Online MCA', 'duration' => '2 Years', 'fee' => '₹1,45,000', 'theme' => 'mca', 'icon' => 'ri-group-line', 'url' => 'online-mca.php'],
                ['name' => 'Online BBA', 'duration' => '3 Years', 'fee' => '₹1,35,000', 'theme' => 'bba', 'icon' => 'ri-graduation-cap-line', 'url' => 'online-bba.php'],
                ['name' => 'Online BCA', 'duration' => '3 Years', 'fee' => '₹1,35,000', 'theme' => 'bca', 'icon' => 'ri-computer-line', 'url' => 'online-bca.php']
            ],
            'approvals' => [
                ['title' => 'UGC Entitled', 'type' => 'ugc', 'icon' => 'ri-verified-badge-fill', 'desc' => 'Entitled to offer complete degree programs in full online mode.'],
                ['title' => 'NAAC A++', 'type' => 'naac', 'icon' => 'ri-award-fill', 'desc' => 'Accredited with highest NAAC A++ grade for academic excellence.'],
                ['title' => 'AICTE & Global Bodies', 'type' => 'group', 'icon' => 'ri-building-line', 'desc' => 'Approved by AICTE and affiliated with international certification bodies.']
            ],
            'fee_structure' => [
                ['program' => 'Online MBA', 'duration' => '2 Years', 'total' => '₹1,40,000', 'emi' => 'Starting from ₹5,830/month'],
                ['program' => 'Online MCA', 'duration' => '2 Years', 'total' => '₹1,45,000', 'emi' => 'Starting from ₹6,040/month'],
                ['program' => 'Online BBA', 'duration' => '3 Years', 'total' => '₹1,35,000', 'emi' => 'Starting from ₹3,750/month'],
                ['program' => 'Online BCA', 'duration' => '3 Years', 'total' => '₹1,35,000', 'emi' => 'Starting from ₹3,750/month']
            ],
            'faqs' => [
                ['q' => 'What specialisations are offered in JAIN Online MBA?', 'a' => 'JAIN Online offers 30+ electives including Data Science, Digital Marketing, Fintech, Logistics & Supply Chain, Healthcare, and HRM.'],
                ['q' => 'Does JAIN Online offer international certifications?', 'a' => 'Yes, select programs offer embedded credentials with ACCA (UK), CIMA, and the Institute of Analytics (IoA).'],
                ['q' => 'How are examinations conducted?', 'a' => 'Semester examinations are conducted completely online via AI-monitored proctoring with flexible weekend slots.'],
                ['q' => 'What placement support does JAIN Online provide?', 'a' => 'JAIN has tie-ups with 2,000+ corporate recruiters like Amazon, Infosys, Deloitte, Cognizant, and EY with dedicated job portal access.']
            ]
        ],

        'lpu-online' => [
            'slug' => 'lpu-online.php',
            'name' => 'Online Lovely Professional University',
            'short_name' => 'LPU Online',
            'logo' => 'assets/img/university/lpu-logo.png',
            'campus_img' => 'assets/img/university/lpu-campus.jpg',
            'subtitle' => 'NIRF Top 30 Ranked University with Tech-Driven Learning',
            'hero_desc' => 'LPU Online delivers affordable, UGC-DEB entitled degrees backed by state-of-the-art LMS, live classes, career enhancement masterclasses, and extensive placement drives.',
            'since' => '2005',
            'learners' => '1,00,000+',
            'rank' => 'NIRF Top 30 | NAAC A++',
            'overview' => [
                'type' => 'Private University',
                'recognition' => 'UGC-DEB / AICTE',
                'accreditation' => 'NAAC A++ (Highest)',
                'mode' => 'Online',
                'since' => '2005',
                'group' => 'Lovely Group'
            ],
            'trust_badges' => [
                ['label' => 'UGC-DEB Recognized', 'type' => 'ugc', 'icon' => 'ri-checkbox-circle-fill'],
                ['label' => 'NAAC A++ Grade', 'type' => 'naac', 'icon' => 'ri-award-fill'],
                ['label' => 'NIRF Top 30 Ranked', 'type' => 'group', 'icon' => 'ri-community-fill']
            ],
            'about_p1' => 'Lovely Professional University (LPU) is one of India’s most expansive universities, known for pioneering educational infrastructure, top global rankings, and exemplary placements.',
            'about_p2' => 'LPU Online provides the exact same syllabus, faculty expertise, and academic rigor as its campus programs through its proprietary LPU e-Connect learning platform.',
            'why_points' => [
                'Ranked among NIRF Top 30 Universities in India',
                'Accredited with prestigious NAAC A++ Grade',
                'Award-winning LPU e-Connect mobile and desktop LMS',
                'Extensive placement support with 500+ recruitment partners',
                'Budget-friendly fee structure with zero-cost EMI plans',
                'Live interaction sessions with top corporate leaders',
                'Flexible, AI-proctored online examinations from home'
            ],
            'courses' => [
                ['name' => 'Online MBA', 'duration' => '2 Years', 'fee' => '₹1,32,000', 'theme' => 'mba', 'icon' => 'ri-bar-chart-line', 'url' => 'online-mba.php'],
                ['name' => 'Online MCA', 'duration' => '2 Years', 'fee' => '₹1,32,000', 'theme' => 'mca', 'icon' => 'ri-group-line', 'url' => 'online-mca.php'],
                ['name' => 'Online BBA', 'duration' => '3 Years', 'fee' => '₹1,15,000', 'theme' => 'bba', 'icon' => 'ri-graduation-cap-line', 'url' => 'online-bba.php'],
                ['name' => 'Online BCA', 'duration' => '3 Years', 'fee' => '₹1,15,000', 'theme' => 'bca', 'icon' => 'ri-computer-line', 'url' => 'online-bca.php']
            ],
            'approvals' => [
                ['title' => 'UGC-DEB Entitled', 'type' => 'ugc', 'icon' => 'ri-verified-badge-fill', 'desc' => 'Fully entitled by University Grants Commission - DEB.'],
                ['title' => 'NAAC A++ Accredited', 'type' => 'naac', 'icon' => 'ri-award-fill', 'desc' => 'Certified with NAAC A++ for superlative academic infrastructure.'],
                ['title' => 'NIRF Top 30', 'type' => 'group', 'icon' => 'ri-building-line', 'desc' => 'Ranked 27th across India in overall NIRF university rankings.']
            ],
            'fee_structure' => [
                ['program' => 'Online MBA', 'duration' => '2 Years', 'total' => '₹1,32,000', 'emi' => 'Starting from ₹5,500/month'],
                ['program' => 'Online MCA', 'duration' => '2 Years', 'total' => '₹1,32,000', 'emi' => 'Starting from ₹5,500/month'],
                ['program' => 'Online BBA', 'duration' => '3 Years', 'total' => '₹1,15,000', 'emi' => 'Starting from ₹3,200/month'],
                ['program' => 'Online BCA', 'duration' => '3 Years', 'total' => '₹1,15,000', 'emi' => 'Starting from ₹3,200/month']
            ],
            'faqs' => [
                ['q' => 'What is LPU e-Connect?', 'a' => 'LPU e-Connect is an intuitive learning portal and mobile app offering recorded lectures, live sessions, assignments, and exam schedules 24/7.'],
                ['q' => 'Does LPU Online degree mention the word "Online"?', 'a' => 'As per UGC regulations, the degree certificate mentions the program nomenclature and mode of delivery while maintaining full legal equivalence with regular degrees.'],
                ['q' => 'What are the examination guidelines?', 'a' => 'Examinations are conducted online in an AI-proctored environment. Students take their tests from their home laptop with webcam enabled.'],
                ['q' => 'How does LPU support placements?', 'a' => 'LPU organizes dedicated virtual job fairs, mock interviews, and skill enhancement workshops with leading recruiters.']
            ]
        ],

        'vit-online' => [
            'slug' => 'vit-online.php',
            'name' => 'VIT Online University',
            'short_name' => 'VIT Online',
            'logo' => 'assets/img/university/vit-logo.png',
            'campus_img' => 'assets/img/university/vit-campus.jpg',
            'subtitle' => 'India’s Top-Ranked Technical & Management Institution',
            'hero_desc' => 'Vellore Institute of Technology (VIT) Online brings premier engineering and managerial pedagogy directly to your device with globally recognized degrees.',
            'since' => '1984',
            'learners' => '60,000+',
            'rank' => 'NIRF Rank 8 | NAAC A++',
            'overview' => [
                'type' => 'Institution of Eminence',
                'recognition' => 'UGC-DEB / AICTE',
                'accreditation' => 'NAAC A++ (3.66 CGPA)',
                'mode' => 'Online',
                'since' => '1984',
                'group' => 'VIT Group'
            ],
            'trust_badges' => [
                ['label' => 'Institution of Eminence', 'type' => 'ugc', 'icon' => 'ri-checkbox-circle-fill'],
                ['label' => 'NAAC A++ Grade', 'type' => 'naac', 'icon' => 'ri-award-fill'],
                ['label' => 'NIRF Top 10 University', 'type' => 'group', 'icon' => 'ri-community-fill']
            ],
            'about_p1' => 'Vellore Institute of Technology (VIT) is celebrated as one of India’s foremost centers of higher education, ranked 8th in India by the NIRF University rankings.',
            'about_p2' => 'VIT Online delivers rigorous Master’s and Bachelor’s programs with world-class faculty, cutting-edge software curriculums, and strong industry linkages.',
            'why_points' => [
                'Designated as an Institution of Eminence (IoE) by Govt. of India',
                'Ranked #8 across Indian universities in NIRF rankings',
                'NAAC A++ grade with highest academic standing',
                'Taught by renowned research professors and industry specialists',
                'Robust coding labs and simulated cloud software environments',
                '100% online examinations with flexible weekend scheduling',
                'High-prestige brand value on resumes globally'
            ],
            'courses' => [
                ['name' => 'Online MBA', 'duration' => '2 Years', 'fee' => '₹1,55,000', 'theme' => 'mba', 'icon' => 'ri-bar-chart-line', 'url' => 'online-mba.php'],
                ['name' => 'Online MCA', 'duration' => '2 Years', 'fee' => '₹1,55,000', 'theme' => 'mca', 'icon' => 'ri-group-line', 'url' => 'online-mca.php'],
                ['name' => 'Online BCA', 'duration' => '3 Years', 'fee' => '₹1,40,000', 'theme' => 'bca', 'icon' => 'ri-computer-line', 'url' => 'online-bca.php'],
                ['name' => 'Online BBA', 'duration' => '3 Years', 'fee' => '₹1,30,000', 'theme' => 'bba', 'icon' => 'ri-graduation-cap-line', 'url' => 'online-bba.php']
            ],
            'approvals' => [
                ['title' => 'UGC-DEB Entitled', 'type' => 'ugc', 'icon' => 'ri-verified-badge-fill', 'desc' => 'Entitled for delivery of online degree programs.'],
                ['title' => 'NAAC A++ Rating', 'type' => 'naac', 'icon' => 'ri-award-fill', 'desc' => 'Highest grade accreditation for institutional excellence.'],
                ['title' => 'Institution of Eminence', 'type' => 'group', 'icon' => 'ri-building-line', 'desc' => 'Awarded IoE status by the Ministry of Education.']
            ],
            'fee_structure' => [
                ['program' => 'Online MBA', 'duration' => '2 Years', 'total' => '₹1,55,000', 'emi' => 'Starting from ₹6,450/month'],
                ['program' => 'Online MCA', 'duration' => '2 Years', 'total' => '₹1,55,000', 'emi' => 'Starting from ₹6,450/month'],
                ['program' => 'Online BCA', 'duration' => '3 Years', 'total' => '₹1,40,000', 'emi' => 'Starting from ₹3,880/month'],
                ['program' => 'Online BBA', 'duration' => '3 Years', 'total' => '₹1,30,000', 'emi' => 'Starting from ₹3,610/month']
            ],
            'faqs' => [
                ['q' => 'Is VIT Online suitable for working professionals?', 'a' => 'Yes, VIT Online features asynchronous video lectures, weekend live discussion sessions, and digital self-assessment tests designed for working executives.'],
                ['q' => 'What are the technical requirements for online classes?', 'a' => 'A basic laptop or desktop with 4GB RAM, a working webcam, and a steady internet connection of at least 2 Mbps.'],
                ['q' => 'How are project assignments evaluated?', 'a' => 'Projects and assignments are submitted via the VIT Online LMS and graded by subject matter experts with constructive feedback.'],
                ['q' => 'Are VIT Online graduates eligible for PhD programs?', 'a' => 'Yes, UGC-DEB recognized master’s degrees from VIT make you completely eligible to apply for PhD entrance examinations.']
            ]
        ],

        'uttaranchal-university-online' => [
            'slug' => 'uttaranchal-university-online.php',
            'name' => 'Uttaranchal University Online',
            'short_name' => 'Uttaranchal University',
            'logo' => 'assets/img/university/uttaranchal-logo.png',
            'campus_img' => 'assets/img/university/uttaranchal-campus.jpg',
            'subtitle' => 'NAAC A+ Accredited Online University from Dehradun',
            'hero_desc' => 'Uttaranchal University offers high-value, accessible online degree courses designed to empower learners with practical business acumen and technical proficiency.',
            'since' => '2013',
            'learners' => '35,000+',
            'rank' => 'NAAC A+ Accredited',
            'overview' => [
                'type' => 'State Private University',
                'recognition' => 'UGC-DEB',
                'accreditation' => 'NAAC A+',
                'mode' => 'Online',
                'since' => '2013',
                'group' => 'Sushila Devi Society'
            ],
            'trust_badges' => [
                ['label' => 'UGC-DEB Entitled', 'type' => 'ugc', 'icon' => 'ri-checkbox-circle-fill'],
                ['label' => 'NAAC A+ Certified', 'type' => 'naac', 'icon' => 'ri-award-fill'],
                ['label' => 'Affordable Excellence', 'type' => 'group', 'icon' => 'ri-community-fill']
            ],
            'about_p1' => 'Located in picturesque Dehradun, Uttaranchal University is celebrated for its commitment to inclusive education, state-of-the-art academic curricula, and strong faculty mentorship.',
            'about_p2' => 'Uttaranchal University Online opens the door to high-quality education at budget-friendly fees, supported by modern digital portals, live lectures, and dedicated placement assistance.',
            'why_points' => [
                'UGC-DEB recognized degree valid nationwide',
                'NAAC A+ accreditation status',
                'Most cost-effective fees in the private university segment',
                'Zero-interest monthly installment plans',
                'Live doubt-solving sessions with university professors',
                'AI-proctored online exams with high flexibility',
                'Comprehensive career counselling and CV enhancement'
            ],
            'courses' => [
                ['name' => 'Online MBA', 'duration' => '2 Years', 'fee' => '₹1,20,000', 'theme' => 'mba', 'icon' => 'ri-bar-chart-line', 'url' => 'online-mba.php'],
                ['name' => 'Online MCA', 'duration' => '2 Years', 'fee' => '₹1,20,000', 'theme' => 'mca', 'icon' => 'ri-group-line', 'url' => 'online-mca.php'],
                ['name' => 'Online BBA', 'duration' => '3 Years', 'fee' => '₹96,000', 'theme' => 'bba', 'icon' => 'ri-graduation-cap-line', 'url' => 'online-bba.php'],
                ['name' => 'Online BCA', 'duration' => '3 Years', 'fee' => '₹96,000', 'theme' => 'bca', 'icon' => 'ri-computer-line', 'url' => 'online-bca.php']
            ],
            'approvals' => [
                ['title' => 'UGC Entitled', 'type' => 'ugc', 'icon' => 'ri-verified-badge-fill', 'desc' => 'Entitled to offer online degrees by the University Grants Commission.'],
                ['title' => 'NAAC A+ Grade', 'type' => 'naac', 'icon' => 'ri-award-fill', 'desc' => 'Accredited with NAAC A+ for overall institutional standard.'],
                ['title' => 'AIU Member', 'type' => 'group', 'icon' => 'ri-building-line', 'desc' => 'Member of Association of Indian Universities.']
            ],
            'fee_structure' => [
                ['program' => 'Online MBA', 'duration' => '2 Years', 'total' => '₹1,20,000', 'emi' => 'Starting from ₹5,000/month'],
                ['program' => 'Online MCA', 'duration' => '2 Years', 'total' => '₹1,20,000', 'emi' => 'Starting from ₹5,000/month'],
                ['program' => 'Online BBA', 'duration' => '3 Years', 'total' => '₹96,000', 'emi' => 'Starting from ₹2,670/month'],
                ['program' => 'Online BCA', 'duration' => '3 Years', 'total' => '₹96,000', 'emi' => 'Starting from ₹2,670/month']
            ],
            'faqs' => [
                ['q' => 'Is Uttaranchal University Online recognized by UGC?', 'a' => 'Yes, all online degree programs are entitled by the UGC Distance Education Bureau (DEB).'],
                ['q' => 'What is the fee payment structure?', 'a' => 'Students can pay fees per semester or choose no-cost monthly EMI options.'],
                ['q' => 'Can working individuals manage course hours?', 'a' => 'Yes, recorded lectures can be watched anytime 24/7, and interactive live webinars are scheduled on weekends.'],
                ['q' => 'What kind of support is offered for placements?', 'a' => 'The university provides career counselling, interview preparation workshops, and job board openings from partner employers.']
            ]
        ],

        'sikkim-manipal-online' => [
            'slug' => 'sikkim-manipal-online.php',
            'name' => 'Sikkim Manipal University Online',
            'short_name' => 'Sikkim Manipal University',
            'logo' => 'assets/img/university/sikkim-manipal-logo.png',
            'campus_img' => 'assets/img/university/sikkim-manipal-campus.jpg',
            'subtitle' => '25+ Years of Pioneer Distance & Online Higher Education',
            'hero_desc' => 'Sikkim Manipal University (SMU) has educated over 5 lakh graduates across India with career-focused management and information technology programs.',
            'since' => '1995',
            'learners' => '5,00,000+',
            'rank' => 'NAAC A+ | 25+ Years Legacy',
            'overview' => [
                'type' => 'State Private University',
                'recognition' => 'UGC-DEB',
                'accreditation' => 'NAAC A+',
                'mode' => 'Online',
                'since' => '1995',
                'group' => 'Manipal Group'
            ],
            'trust_badges' => [
                ['label' => 'UGC-DEB Entitled', 'type' => 'ugc', 'icon' => 'ri-checkbox-circle-fill'],
                ['label' => 'NAAC A+ Certified', 'type' => 'naac', 'icon' => 'ri-award-fill'],
                ['label' => '25+ Years Legacy', 'type' => 'group', 'icon' => 'ri-community-fill']
            ],
            'about_p1' => 'Sikkim Manipal University is a premier public-private partnership between the Government of Sikkim and the Manipal Education and Medical Group.',
            'about_p2' => 'With more than two and a half decades of excellence in distance learning, SMU Online features a proven track record of alumni success across the country.',
            'why_points' => [
                '25+ years of distinguished leadership in distance education',
                'NAAC A+ accredited institution',
                'Part of the renowned Manipal Education Group',
                'Highly affordable fee with zero-interest EMI schemes',
                'Well-structured digital courseware and video lessons',
                'Online proctored exams with multiple weekend time slots',
                'Active alumni community of 5,00,000+ professionals'
            ],
            'courses' => [
                ['name' => 'Online MBA', 'duration' => '2 Years', 'fee' => '₹1,10,000', 'theme' => 'mba', 'icon' => 'ri-bar-chart-line', 'url' => 'online-mba.php'],
                ['name' => 'Online MCA', 'duration' => '2 Years', 'fee' => '₹1,10,000', 'theme' => 'mca', 'icon' => 'ri-group-line', 'url' => 'online-mca.php'],
                ['name' => 'Online BBA', 'duration' => '3 Years', 'fee' => '₹1,10,000', 'theme' => 'bba', 'icon' => 'ri-graduation-cap-line', 'url' => 'online-bba.php'],
                ['name' => 'Online BCA', 'duration' => '3 Years', 'fee' => '₹1,10,000', 'theme' => 'bca', 'icon' => 'ri-computer-line', 'url' => 'online-bca.php']
            ],
            'approvals' => [
                ['title' => 'UGC-DEB Entitled', 'type' => 'ugc', 'icon' => 'ri-verified-badge-fill', 'desc' => 'Entitled by UGC-DEB for award of online degrees.'],
                ['title' => 'NAAC A+ Grade', 'type' => 'naac', 'icon' => 'ri-award-fill', 'desc' => 'Accredited with NAAC A+ for academic excellence.'],
                ['title' => 'Govt. of Sikkim Partnership', 'type' => 'group', 'icon' => 'ri-building-line', 'desc' => 'Pioneering partnership with the State Government of Sikkim.']
            ],
            'fee_structure' => [
                ['program' => 'Online MBA', 'duration' => '2 Years', 'total' => '₹1,10,000', 'emi' => 'Starting from ₹4,580/month'],
                ['program' => 'Online MCA', 'duration' => '2 Years', 'total' => '₹1,10,000', 'emi' => 'Starting from ₹4,580/month'],
                ['program' => 'Online BBA', 'duration' => '3 Years', 'total' => '₹1,10,000', 'emi' => 'Starting from ₹3,050/month'],
                ['program' => 'Online BCA', 'duration' => '3 Years', 'total' => '₹1,10,000', 'emi' => 'Starting from ₹3,050/month']
            ],
            'faqs' => [
                ['q' => 'Is SMU Online different from Manipal University Jaipur?', 'a' => 'Yes, Sikkim Manipal University (Gangtok) and Manipal University Jaipur are both distinguished institutions under the Manipal Group with independent UGC entitlements.'],
                ['q' => 'Can international students apply for SMU Online?', 'a' => 'Yes, international students and NRI candidates are eligible to apply through the online international admissions portal.'],
                ['q' => 'How are internal assessments conducted?', 'a' => 'Continuous evaluations include online quizzes, case study submissions, and continuous module assignments submitted via the LMS.'],
                ['q' => 'Are degrees recognized for government examinations?', 'a' => 'Yes, SMU degrees are completely eligible for UPSC, SSC, Banking, and all state government jobs.']
            ]
        ],

        'sharda-university-online' => [
            'slug' => 'sharda-university-online.php',
            'name' => 'Sharda University Online',
            'short_name' => 'Sharda University',
            'logo' => 'assets/img/university/sharda-logo.png',
            'campus_img' => 'assets/img/university/sharda-campus.jpg',
            'subtitle' => 'The World is Here, Where Are You? | Global Online Degrees',
            'hero_desc' => 'Sharda University Online offers UGC-entitled degrees with international faculty insights, multi-disciplinary course modules, and career incubation support.',
            'since' => '2009',
            'learners' => '40,000+',
            'rank' => 'NAAC A+ Accredited',
            'overview' => [
                'type' => 'State Private University',
                'recognition' => 'UGC-DEB',
                'accreditation' => 'NAAC A+',
                'mode' => 'Online',
                'since' => '2009',
                'group' => 'Sharda Group'
            ],
            'trust_badges' => [
                ['label' => 'UGC-DEB Entitled', 'type' => 'ugc', 'icon' => 'ri-checkbox-circle-fill'],
                ['label' => 'NAAC A+ Certified', 'type' => 'naac', 'icon' => 'ri-award-fill'],
                ['label' => 'Global Community', 'type' => 'group', 'icon' => 'ri-community-fill']
            ],
            'about_p1' => 'Located in the Greater Noida knowledge hub, Sharda University is celebrated for its multicultural student community, state-of-the-art facilities, and international tie-ups.',
            'about_p2' => 'Sharda University Online brings globally aligned curricula, interactive digital pedagogy, and corporate career readiness straight to learners across the globe.',
            'why_points' => [
                'UGC-DEB entitled programs with full degree recognition',
                'Accredited with NAAC A+ grade for educational rigor',
                'Diverse global faculty bringing real-world industry case studies',
                'Flexible digital LMS accessible on mobile and web',
                'Budget-friendly per-semester fee structures',
                'Convenient AI-proctored online exams on weekends',
                'Dedicated career placement cell with resume building'
            ],
            'courses' => [
                ['name' => 'Online MBA', 'duration' => '2 Years', 'fee' => '₹1,25,000', 'theme' => 'mba', 'icon' => 'ri-bar-chart-line', 'url' => 'online-mba.php'],
                ['name' => 'Online MCA', 'duration' => '2 Years', 'fee' => '₹1,25,000', 'theme' => 'mca', 'icon' => 'ri-group-line', 'url' => 'online-mca.php'],
                ['name' => 'Online BBA', 'duration' => '3 Years', 'fee' => '₹1,05,000', 'theme' => 'bba', 'icon' => 'ri-graduation-cap-line', 'url' => 'online-bba.php'],
                ['name' => 'Online BCA', 'duration' => '3 Years', 'fee' => '₹1,05,000', 'theme' => 'bca', 'icon' => 'ri-computer-line', 'url' => 'online-bca.php']
            ],
            'approvals' => [
                ['title' => 'UGC Entitled', 'type' => 'ugc', 'icon' => 'ri-verified-badge-fill', 'desc' => 'Recognized by UGC-DEB for online degree offerings.'],
                ['title' => 'NAAC A+', 'type' => 'naac', 'icon' => 'ri-award-fill', 'desc' => 'Certified with NAAC A+ accreditation status.'],
                ['title' => 'AIU & BCI', 'type' => 'group', 'icon' => 'ri-building-line', 'desc' => 'Member of Association of Indian Universities.']
            ],
            'fee_structure' => [
                ['program' => 'Online MBA', 'duration' => '2 Years', 'total' => '₹1,25,000', 'emi' => 'Starting from ₹5,200/month'],
                ['program' => 'Online MCA', 'duration' => '2 Years', 'total' => '₹1,25,000', 'emi' => 'Starting from ₹5,200/month'],
                ['program' => 'Online BBA', 'duration' => '3 Years', 'total' => '₹1,05,000', 'emi' => 'Starting from ₹2,920/month'],
                ['program' => 'Online BCA', 'duration' => '3 Years', 'total' => '₹1,05,000', 'emi' => 'Starting from ₹2,920/month']
            ],
            'faqs' => [
                ['q' => 'What is the eligibility for Sharda Online MBA?', 'a' => 'Graduates in any discipline with at least 50% marks from a recognized university are eligible to apply.'],
                ['q' => 'Can students attend live weekend lectures?', 'a' => 'Yes, live interactive sessions are held on weekends with recordings available 24/7 on the LMS.'],
                ['q' => 'How does Sharda University conduct exams?', 'a' => 'Examinations are 100% online through an AI-proctored portal with webcam and screen monitoring.'],
                ['q' => 'Does the university offer placement assistance?', 'a' => 'Yes, Sharda has an active corporate placement cell connecting students with recruiters in IT, BFSI, and FMCG sectors.']
            ]
        ]
    ];
}
