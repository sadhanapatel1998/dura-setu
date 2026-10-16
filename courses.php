<?php
ob_start();
include("include/data.php");
?>

<main>
    <!-- Start Page Header -->
    <section class="cs_page_header cs_bg_filed" data-src="assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="cs_page_header_text" data-aos="fade-up">
                <h1 class="cs_page_header_title cs_fs_48 cs_bold">Explore All Online Programs</h1>
                <ul class="cs_breadcrumb cs_mp_0 cs_fs_16">
                    <li><a href="index.php">Home</a></li>
                    <li>Courses</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Header -->

    <!-- Start Courses Directory Section -->
    <section class="cs_course_section cs_section_padding" data-aos="fade-up">
        <div class="container">
            <div class="text-center mb-5">
                <span class="cs_mba_badge">
                    <i class="ri-graduation-cap-line"></i> UGC-DEB ENTITLED DEGREES
                </span>
                <h2 class="cs_mba_section_title">Browse Undergraduate &amp; Postgraduate Degrees</h2>
                <p class="cs_mba_section_subtitle mx-auto">
                    Choose from government-approved online degrees with flexible learning, accredited university partners, and comprehensive career assistance.
                </p>
            </div>

            <div class="row align-items-center mb-4" data-aos="fade-up">
                <div class="col-lg-8">
                    <!-- Filter Pills -->
                    <div class="d-flex flex-wrap gap-2" id="courseFilterTabs">
                        <button type="button" class="cs_cat_badge_pill active text-dark border-0" data-filter="all" style="cursor:pointer; background:#e0e7ff; color:#1e3a8a !important; font-weight:600; padding:8px 18px; border-radius:50px;">
                            All Programs (<?= count($all_courses_data); ?>)
                        </button>
                        <button type="button" class="cs_cat_badge_pill border-0" data-filter="postgraduate" style="cursor:pointer; background:#f1f5f9; color:#475569; font-weight:600; padding:8px 18px; border-radius:50px;">
                            Postgraduate (11)
                        </button>
                        <button type="button" class="cs_cat_badge_pill border-0" data-filter="undergraduate" style="cursor:pointer; background:#f1f5f9; color:#475569; font-weight:600; padding:8px 18px; border-radius:50px;">
                            Undergraduate (5)
                        </button>
                        <button type="button" class="cs_cat_badge_pill border-0" data-filter="integrated" style="cursor:pointer; background:#f1f5f9; color:#475569; font-weight:600; padding:8px 18px; border-radius:50px;">
                            Integrated (3)
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 mt-3 mt-lg-0">
                    <!-- Search Input -->
                    <div class="position-relative">
                        <input type="text" id="courseSearchInput" class="form-control" placeholder="Search by course name..." style="border-radius:50px; padding:10px 42px 10px 18px; border:1px solid #cbd5e1; font-size:14px; box-shadow:none;">
                        <i class="ri-search-line position-absolute" style="right:16px; top:50%; transform:translateY(-50%); color:#94a3b8; font-size:18px;"></i>
                    </div>
                </div>
            </div>

            <div class="row g-4" id="courseGrid">
                <?php if (!empty($all_courses_data)): ?>
                    <?php foreach ($all_courses_data as $course): 
                        $courseUrl = (!empty($course['url']) && $course['url'] !== '#') ? $course['url'] : 'contact.php';
                        $levelClass = strtolower($course['level'] ?? 'postgraduate');
                        $searchKeywords = strtolower(($course['title'] ?? '') . ' ' . ($course['full_name'] ?? '') . ' ' . ($course['category'] ?? ''));
                    ?>
                        <div class="col-lg-4 col-md-6 course-card-col" data-level="<?= htmlspecialchars($levelClass); ?>" data-keywords="<?= htmlspecialchars($searchKeywords); ?>" data-aos="fade-up">
                            <div class="cs_pop_card h-100 d-flex flex-column">
                                <div class="cs_pop_thumb_wrap">
                                    <img src="<?php echo htmlspecialchars($course['image'] ?? 'assets/img/course-img-1.jpg'); ?>"
                                        onerror="this.onerror=null; this.src='<?php echo htmlspecialchars($course['fallback_image'] ?? 'assets/img/course-img-1.jpg'); ?>';"
                                        alt="<?php echo htmlspecialchars($course['title']); ?>"
                                        class="cs_pop_thumb_img" width="600" height="400">
                                    <div class="cs_pop_corner_slope"></div>
                                    <div class="cs_pop_icon_badge">
                                        <i class="<?php echo htmlspecialchars($course['icon'] ?? 'ri-graduation-cap-line'); ?>"></i>
                                    </div>
                                </div>

                                <div class="cs_pop_card_body d-flex flex-column flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <span style="font-size:11.5px; font-weight:700; text-transform:uppercase; color:#2563eb; letter-spacing:0.5px;">
                                            <?= htmlspecialchars($course['level'] ?? 'Degree'); ?>
                                        </span>
                                        <?php if (!empty($course['offering_universities'])): ?>
                                            <span style="font-size:11px; background:#f1f5f9; color:#475569; padding:2px 7px; border-radius:4px; font-weight:600;">
                                                <?= count($course['offering_universities']); ?> Universities
                                            </span>
                                        <?php endif; ?>
                                    </div>

                                    <h3 class="cs_pop_card_title">
                                        <a href="<?php echo htmlspecialchars($courseUrl); ?>">
                                            <?php echo htmlspecialchars($course['title']); ?>
                                        </a>
                                    </h3>
                                    <h4 class="cs_pop_card_sub"><?php echo htmlspecialchars($course['full_name'] ?? $course['title']); ?></h4>
                                    <p class="cs_pop_card_desc flex-grow-1"><?php echo htmlspecialchars($course['desc'] ?? ''); ?></p>

                                    <div class="cs_pop_meta_row">
                                        <div class="cs_pop_meta_item">
                                            <span class="cs_pop_meta_icon"><i class="ri-calendar-line"></i></span>
                                            <div class="cs_pop_meta_text">
                                                <strong><?php echo htmlspecialchars($course['duration'] ?? '2 Years'); ?></strong>
                                                <span>Duration</span>
                                            </div>
                                        </div>
                                        <div class="cs_pop_meta_item">
                                            <span class="cs_pop_meta_icon"><i class="ri-computer-line"></i></span>
                                            <div class="cs_pop_meta_text">
                                                <strong><?php echo htmlspecialchars($course['mode'] ?? 'Online'); ?></strong>
                                                <span>Mode</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cs_pop_btn_wrap mt-3">
                                        <a href="<?php echo htmlspecialchars($courseUrl); ?>" class="cs_pop_view_btn w-100 text-center">
                                            <span>Explore Program</span>
                                            <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <!-- Empty search fallback -->
            <div id="noCoursesFound" class="text-center py-5 d-none">
                <i class="ri-file-search-line" style="font-size:48px; color:#cbd5e1;"></i>
                <h4 class="mt-3 mb-1" style="color:#0f172a; font-weight:600;">No matching courses found</h4>
                <p class="text-muted">Try adjusting your search keyword or selecting a different category filter.</p>
            </div>
        </div>
    </section>

    <!-- JavaScript Filter System -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('#courseFilterTabs button');
        const searchInput = document.getElementById('courseSearchInput');
        const cards = document.querySelectorAll('.course-card-col');
        const noResults = document.getElementById('noCoursesFound');

        let currentFilter = 'all';

        function applyFilter() {
            const query = (searchInput.value || '').trim().toLowerCase();
            let visibleCount = 0;

            cards.forEach(card => {
                const level = card.getAttribute('data-level') || '';
                const keywords = card.getAttribute('data-keywords') || '';

                const matchesFilter = (currentFilter === 'all' || level === currentFilter);
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
        <div class="cs_need_help_banner" data-aos="fade-up">
            <div class="cs_need_help_left">
                <div class="cs_need_help_avatar">
                    <i class="ri-customer-service-2-fill"></i>
                </div>
                <div>
                    <h3 class="cs_need_help_title">Not Sure Which Course Fits Your Career?</h3>
                    <p class="cs_need_help_subtitle">Connect with our senior academic counsellors for a free 1-on-1 profile evaluation.</p>
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
</main>

<?php
$content = ob_get_clean();
require 'layout.php';
?>

