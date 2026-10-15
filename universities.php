<?php
ob_start();
include("include/data.php");
include("include/university-data.php");
?>

<main>
    <!-- Start Page Header -->
    <section class="cs_page_header cs_bg_filed" data-src="assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="cs_page_header_text" data-aos="fade-up">
                <h1 class="cs_page_header_title cs_fs_48 cs_bold">Top Online Universities in India</h1>
                <ul class="cs_breadcrumb cs_mp_0 cs_fs_16">
                    <li><a href="index.php">Home</a></li>
                    <li>Universities</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Header -->

    <!-- Start Universities Grid Section -->
    <section class="cs_section_padding">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="cs_unid_badge">
                    <i class="ri-shield-check-line"></i> UGC-DEB ENTITLED INSTITUTIONS
                </span>
                <h2 class="cs_unid_sec_title">Explore Premier Accredited Universities</h2>
                <p class="cs_unid_sec_subtitle mx-auto" style="max-width: 650px;">
                    Compare India's leading UGC-entitled universities offering recognized online degree programs with flexible learning formats and career support.
                </p>
            </div>

            <div class="row g-4">
                <?php foreach ($all_universities_data as $key => $uni): ?>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="cs_uni_card h-100 d-flex flex-column" style="background:#fff; border:1px solid #e2e8f0; border-radius:14px; padding:22px; box-shadow:0 6px 18px rgba(0,0,0,0.04);">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div style="height:48px; display:flex; align-items:center;">
                                    <img src="<?= htmlspecialchars($uni['logo']); ?>" alt="<?= htmlspecialchars($uni['name']); ?> Logo" style="max-height:45px; max-width:180px; object-fit:contain;">
                                </div>
                                <span class="cs_unid_trust_pill ugc" style="font-size:11px; padding:3px 8px;">
                                    <i class="ri-shield-check-fill"></i> <?= htmlspecialchars($uni['overview']['recognition']); ?>
                                </span>
                            </div>

                            <div style="border-radius:10px; overflow:hidden; margin-bottom:14px;">
                                <img src="<?= htmlspecialchars($uni['campus_img']); ?>" alt="<?= htmlspecialchars($uni['name']); ?>" style="width:100%; height:160px; object-fit:cover;">
                            </div>

                            <h3 style="font-size:20px; font-weight:700; color:#0b1e38; margin-bottom:6px;">
                                <a href="<?= htmlspecialchars($uni['slug']); ?>" style="color:#0b1e38; text-decoration:none;">
                                    <?= htmlspecialchars($uni['name']); ?>
                                </a>
                            </h3>

                            <p style="font-size:15px; color:#64748b; line-height:1.5; margin-bottom:14px; flex-grow:1;">
                                <?= htmlspecialchars(substr($uni['hero_desc'], 0, 115)) . '...'; ?>
                            </p>

                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <span style="background:#eff6ff; color:#2563eb; font-size:11.5px; font-weight:600; padding:3px 9px; border-radius:4px;">
                                    <i class="ri-award-line"></i> <?= htmlspecialchars($uni['overview']['accreditation']); ?>
                                </span>
                                <span style="background:#f8fafc; color:#475569; font-size:11.5px; font-weight:600; padding:3px 9px; border-radius:4px;">
                                    <i class="ri-time-line"></i> <?= htmlspecialchars($uni['overview']['mode']); ?>
                                </span>
                            </div>

                            <a href="<?= htmlspecialchars($uni['slug']); ?>" class="cs_unid_btn_primary w-100 justify-content-center text-center mt-auto" style="padding:10px;">
                                <span>Explore University</span>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Start Need Help Banner -->
    <div class="container mb-5 pb-5">
        <div class="cs_unid_banner" data-aos="fade-up">
            <div class="cs_unid_banner_left">
                <div class="cs_unid_banner_avatar">
                    <i class="ri-customer-service-2-fill"></i>
                </div>
                <div>
                    <h3 class="cs_unid_banner_title">Need Help Choosing the Right University?</h3>
                    <p class="cs_unid_banner_subtitle">Get free, unbiased and personalised guidance from our education counsellors.</p>
                </div>
            </div>
            <div>
                <a href="tel:+919876543210" class="cs_unid_btn_primary">
                    <span>Talk to an Expert</span>
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>
    </div>
</main>

<?php
$content = ob_get_clean();
require 'layout.php';
?>

