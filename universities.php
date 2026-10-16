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

            <div class="row align-items-center mb-4" data-aos="fade-up">
                <div class="col-lg-8">
                    <!-- Filter Pills -->
                    <div class="d-flex flex-wrap gap-2" id="uniFilterTabs">
                        <button type="button" class="cs_cat_badge_pill active text-dark border-0" data-filter="all" style="cursor:pointer; background:#e0e7ff; color:#1e3a8a !important; font-weight:600; padding:8px 18px; border-radius:50px;">
                            All Universities (<?= count($all_universities_data); ?>)
                        </button>
                        <button type="button" class="cs_cat_badge_pill border-0" data-filter="a++" style="cursor:pointer; background:#f1f5f9; color:#475569; font-weight:600; padding:8px 18px; border-radius:50px;">
                            NAAC A++
                        </button>
                        <button type="button" class="cs_cat_badge_pill border-0" data-filter="a+" style="cursor:pointer; background:#f1f5f9; color:#475569; font-weight:600; padding:8px 18px; border-radius:50px;">
                            NAAC A+
                        </button>
                        <button type="button" class="cs_cat_badge_pill border-0" data-filter="private" style="cursor:pointer; background:#f1f5f9; color:#475569; font-weight:600; padding:8px 18px; border-radius:50px;">
                            Private
                        </button>
                        <button type="button" class="cs_cat_badge_pill border-0" data-filter="deemed" style="cursor:pointer; background:#f1f5f9; color:#475569; font-weight:600; padding:8px 18px; border-radius:50px;">
                            Deemed
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 mt-3 mt-lg-0">
                    <!-- Search Input -->
                    <div class="position-relative">
                        <input type="text" id="uniSearchInput" class="form-control" placeholder="Search university by name..." style="border-radius:50px; padding:10px 42px 10px 18px; border:1px solid #cbd5e1; font-size:14px; box-shadow:none;">
                        <i class="ri-search-line position-absolute" style="right:16px; top:50%; transform:translateY(-50%); color:#94a3b8; font-size:18px;"></i>
                    </div>
                </div>
            </div>

            <div class="row g-4" id="uniGrid">
                <?php foreach ($all_universities_data as $key => $uni): 
                    $naacGrade = strtolower($uni['comparison_data']['naac_grade'] ?? ($uni['overview']['accreditation'] ?? ''));
                    $uniType = strtolower($uni['overview']['type'] ?? '');
                    $keywords = strtolower(($uni['name'] ?? '') . ' ' . ($uni['short_name'] ?? '') . ' ' . ($uni['overview']['type'] ?? '') . ' ' . ($uni['overview']['accreditation'] ?? ''));
                ?>
                    <div class="col-lg-4 col-md-6 uni-card-col" data-naac="<?= htmlspecialchars($naacGrade); ?>" data-type="<?= htmlspecialchars($uniType); ?>" data-keywords="<?= htmlspecialchars($keywords); ?>" data-aos="fade-up">
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

            <!-- Empty Search Fallback -->
            <div id="noUnisFound" class="text-center py-5 d-none">
                <i class="ri-search-eye-line" style="font-size:48px; color:#cbd5e1;"></i>
                <h4 class="mt-3 mb-1" style="color:#0f172a; font-weight:600;">No matching universities found</h4>
                <p class="text-muted">Try clearing your search keyword or switching filters.</p>
            </div>
        </div>
    </section>

    <!-- JavaScript Filter System for Universities -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('#uniFilterTabs button');
        const searchInput = document.getElementById('uniSearchInput');
        const cards = document.querySelectorAll('.uni-card-col');
        const noResults = document.getElementById('noUnisFound');

        let currentFilter = 'all';

        function applyFilter() {
            const query = (searchInput.value || '').trim().toLowerCase();
            let visibleCount = 0;

            cards.forEach(card => {
                const naac = card.getAttribute('data-naac') || '';
                const type = card.getAttribute('data-type') || '';
                const keywords = card.getAttribute('data-keywords') || '';

                let matchesFilter = false;
                if (currentFilter === 'all') {
                    matchesFilter = true;
                } else if (currentFilter === 'a++') {
                    matchesFilter = naac.includes('a++');
                } else if (currentFilter === 'a+') {
                    matchesFilter = naac.includes('a+') && !naac.includes('a++');
                } else if (currentFilter === 'private') {
                    matchesFilter = type.includes('private');
                } else if (currentFilter === 'deemed') {
                    matchesFilter = type.includes('deemed');
                }

                const matchesSearch = (!query || keywords.includes(query));

                if (matchesFilter && matchesSearch) {
                    card.classList.remove('d-none');
                    visibleCount++;
                } else {
                    card.classList.add('d-none');
                }
            });

            if (visibleCount === 0) {
                noResults.classList.remove('d-none');
            } else {
                noResults.classList.add('d-none');
            }
        }

        tabs.forEach(tab => {
            tab.addEventListener('click', function () {
                tabs.forEach(t => {
                    t.style.background = '#f1f5f9';
                    t.style.color = '#475569';
                    t.classList.remove('active');
                });
                this.style.background = '#e0e7ff';
                this.style.color = '#1e3a8a';
                this.classList.add('active');
                currentFilter = this.getAttribute('data-filter');
                applyFilter();
            });
        });

        searchInput.addEventListener('input', applyFilter);
    });
    </script>


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

