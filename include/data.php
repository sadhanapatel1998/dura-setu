<?php
require_once __DIR__ . '/data-loader.php';

$universities = dura_get_homepage_slider_universities();
$marquee_universities = dura_get_homepage_marquee_universities();



$categories = [
    [
        'title' => 'Online MBA',
        'duration' => '2 Years',
        'category' => 'Business & Management',
        'image' => 'assets/img/category/mba.png',
        'fallback' => 'assets/img/category/cat-1.png',
        'color' => 'yellow',
        'url' => 'online-mba.php',
        'delay' => 0,
        'alt' => 'Online MBA'
    ],

    [
        'title' => 'Online MCA',
        'duration' => '2 Years',
        'category' => 'Computer Applications',
        'image' => 'assets/img/category/mca.png',
        'fallback' => 'assets/img/category/cat-2.png',
        'color' => 'blue',
        'url' => 'online-mca.php',
        'delay' => 100,
        'alt' => 'Online MCA'
    ],

    [
        'title' => 'Online M.Com',
        'duration' => '2 Years',
        'category' => 'Commerce & Finance',
        'image' => 'assets/img/category/mcom.png',
        'fallback' => 'assets/img/category/cat-3.png',
        'color' => 'teal',
        'url' => 'online-mcom.php',
        'delay' => 200,
        'alt' => 'Online M.Com'
    ],

    [
        'title' => 'Online BBA',
        'duration' => '3 Years',
        'category' => 'Business Administration',
        'image' => 'assets/img/category/bba.png',
        'fallback' => 'assets/img/category/cat-4.png',
        'color' => 'purple',
        'url' => 'online-bba.php',
        'delay' => 300,
        'alt' => 'Online BBA'
    ],

    [
        'title' => 'Online BCA',
        'duration' => '3 Years',
        'category' => 'Computer Applications',
        'image' => 'assets/img/category/bca.png',
        'fallback' => 'assets/img/category/cat-5.png',
        'color' => 'skyblue',
        'url' => 'online-bca.php',
        'delay' => 0,
        'alt' => 'Online BCA'
    ],

    [
        'title' => 'Online B.Com',
        'duration' => '3 Years',
        'category' => 'Commerce',
        'image' => 'assets/img/category/bcom.png',
        'fallback' => 'assets/img/category/cat-6.png',
        'color' => 'pink',
        'url' => 'online-bcom.php',
        'delay' => 100,
        'alt' => 'Online B.Com'
    ],

    [
        'title' => 'Online Degrees',
        'duration' => 'UG & PG',
        'category' => 'Programs',
        'image' => 'assets/img/category/degree.png',
        'fallback' => 'assets/img/category/cat-7.png',
        'color' => 'orange',
        'url' => 'courses/online-degrees.php',
        'delay' => 200,
        'alt' => 'Online Degrees'
    ],

    [
        'title' => 'Online Universities',
        'duration' => 'Top UGC-Recognized',
        'category' => 'Options',
        'image' => 'assets/img/category/university.png',
        'fallback' => 'assets/img/category/cat-8.png',
        'color' => 'navy',
        'url' => 'universities.php',
        'delay' => 300,
        'alt' => 'Online Universities'
    ]
];

$popular_courses = dura_get_popular_courses_list(12);



$testimonials = [
    [
        'name' => 'Ananya Sharma',
        'role' => 'Online MBA Student',
        'image' => 'assets/img/user-girl.png',
        'rating' => 5,
        'message' => 'DuraSetu made it much easier to compare universities, fees, and course options. The guidance helped me choose an MBA that suited my career goals.'
    ],
    [
        'name' => 'Rahul Verma',
        'role' => 'Online MCA Student',
        'image' => 'assets/img/user-boy.png',
        'rating' => 5,
        'message' => 'I was confused about which university to choose for my MCA. DuraSetu helped me understand the options and make a more confident decision.'
    ],
    [
        'name' => 'Priya Mehta',
        'role' => 'Online BBA Student',
        'image' => 'assets/img/user-girl.png',
        'rating' => 5,
        'message' => 'The course comparison made my search simple. I could easily understand the duration, fees, and admission requirements before applying.'
    ],
    [
        'name' => 'Aman Singh',
        'role' => 'Online B.Com Student',
        'image' => 'assets/img/user-boy.png',
        'rating' => 5,
        'message' => 'The counselling support was really helpful. I got clear information about the admission process and felt much more confident about my choice.'
    ],
    [
        'name' => 'Neha Kapoor',
        'role' => 'Online BCA Student',
        'image' => 'assets/img/user-girl.png',
        'rating' => 5,
        'message' => 'DuraSetu helped me explore different online universities in one place. It saved me time and made the admission decision much easier.'
    ],
    [
        'name' => 'Vikram Malhotra',
        'role' => 'Online M.Com Student',
        'image' => 'assets/img/user-boy.png',
        'rating' => 5,
        'message' => 'The expert guidance helped me understand which course would be better for my career plans. The entire process felt simple and organised.'
    ]
];

$blogs = [

    [
        'title' => 'How to Choose the Right Online MBA Program',
        'category' => 'Career Guide',
        'image' => 'assets/img/blog/online-mba-guide.jpg',
        'description' => 'Explore important factors like university, fees, specializations, flexibility, and career opportunities before choosing an MBA.',
        'url' => 'blog-details.php?slug=online-mba-guide'
    ],

    [
        'title' => 'Online MCA: Eligibility, Duration & Career Scope',
        'category' => 'Course Guide',
        'image' => 'assets/img/blog/online-mca-guide.jpg',
        'description' => 'Understand eligibility, course structure, learning options, and career opportunities after completing an online MCA.',
        'url' => 'blog-details.php?slug=online-mca-guide'
    ],

    [
        'title' => 'Online Degree vs Regular Degree: What Should You Choose?',
        'category' => 'University Guide',
        'image' => 'assets/img/blog/online-degree-guide.jpg',
        'description' => 'Compare flexibility, learning experience, career planning, and other important factors before selecting your degree.',
        'url' => 'blog-details.php?slug=online-degree-vs-regular-degree'
    ],

    // [
    //     'title' => 'Is Online BBA a Good Choice After 12th?',
    //     'category' => 'Student Guide',
    //     'image' => 'assets/img/blog/online-bba-guide.jpg',
    //     'description' => 'Discover what students should consider when choosing an online BBA and planning their future career.',
    //     'url' => 'blog-details.php?slug=online-bba-after-12th'
    // ],

    // [
    //     'title' => 'Career Opportunities After an Online BCA',
    //     'category' => 'Career Tips',
    //     'image' => 'assets/img/blog/online-bca-guide.jpg',
    //     'description' => 'Learn about possible career paths, skills, and opportunities after completing an online BCA.',
    //     'url' => 'blog-details.php?slug=career-after-online-bca'
    // ],

    // [
    //     'title' => 'Things to Check Before Applying to an Online University',
    //     'category' => 'Admission Guide',
    //     'image' => 'assets/img/blog/online-university-guide.jpg',
    //     'description' => 'Know the important factors to check before selecting an online university and starting your admission journey.',
    //     'url' => 'blog-details.php?slug=online-university-admission-guide'
    // ],

];

?>
