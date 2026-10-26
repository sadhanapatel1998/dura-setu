<?php

header('Content-Type: application/xml; charset=utf-8');

$siteUrl = 'https://durasetu.com';

$pages = [

    '/',
    '/about.php',
    '/universities.php',

    // Universities
    '/manipal-university-jaipur.php',
    '/nmims-online.php',
    '/christ-university-online.php',
    '/dayananda-sagar-university-online.php',
    '/dr-dy-patil-vidyapeeth-pune-online.php',
    '/symbiosis-international-online.php',
    '/bharati-vidyapeeth-online.php',
    '/chitkara-university-online.php',
    '/bennett-university-online.php',
    '/noida-international-university-online.php',
    '/upes-online.php',
    '/amity-university-jaipur-online.php',
    '/jain-university-online.php',
    '/lpu-online.php',
    '/vit-online.php',
    '/uttaranchal-university-online.php',
    '/sikkim-manipal-online.php',
    '/sharda-university-online.php',

    // Courses
    '/online-mba.php',
    '/online-mca.php',
    '/online-mcom.php',
    '/online-bba.php',
    '/online-bca.php',
    '/online-bcom.php',
    '/online-bsc.php',
    '/online-bajmc.php',
    '/bca-mca.php',
    '/bba-mba.php',
    '/bcom-mba.php',
    '/global-mba.php',
    '/one-year-mba.php',
    '/executive-mba.php',
    '/global-mca.php',
    '/online-majmc.php',
    '/online-msc-mathematics.php',
    '/online-msc-ms.php',
    '/online-ma.php',

    // Blog & Contact
    '/blogs.php',
    '/contact.php'
];

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

<?php foreach ($pages as $page): ?>

    <url>
        <loc><?= htmlspecialchars($siteUrl . $page, ENT_XML1, 'UTF-8') ?></loc>
        <lastmod><?= date('Y-m-d') ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority><?= $page === '/' ? '1.0' : '0.8' ?></priority>
    </url>

<?php endforeach; ?>

</urlset>