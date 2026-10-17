<?php
ob_start();
include("include/data.php");

// Compute dynamic counts from centralized course data
$pg_count = count(dura_get_courses_by_level('Postgraduate'));
$ug_count = count(dura_get_courses_by_level('Undergraduate'));
$int_count = count(dura_get_courses_by_level('Integrated'));
$total_count = count($all_courses_data);
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
    <section class="cs_course_section cs_section_padding">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
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
                        <button type="button" class="cs_course_filter_btn active border-0" data-filter="all">
                            All Programs (<?= $total_count; ?>)
                        </button>
                        <button type="button" class="cs_course_filter_btn border-0" data-filter="postgraduate">
                            Postgraduate (<?= $pg_count; ?>)
                        </button>
                        <button type="button" class="cs_course_filter_btn border-0" data-filter="undergraduate">
                            Undergraduate (<?= $ug_count; ?>)
                        </button>
                        <button type="button" class="cs_course_filter_btn border-0" data-filter="integrated">
                            Integrated (<?= $int_count; ?>)
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 mt-3 mt-lg-0">
                    <!-- Search Input -->
                    <div class="position-relative">
                        <input type="text" id="courseSearchInput" class="form-control" placeholder="Search by course name..." style="border-radius:50px; padding:10px 42px 10px 18px; border:1.5px solid #cbd5e1; font-size:14px; box-shadow:none;">
                        <button type="button" id="clearCourseSearchBtn" class="d-none" style="position:absolute; right:38px; top:50%; transform:translateY(-50%); background:none; border:none; color:#94a3b8; font-size:17px; cursor:pointer; padding:0;" title="Clear search" aria-label="Clear search">
                            <i class="ri-close-circle-fill"></i>
                        </button>
                        <i class="ri-search-line position-absolute" style="right:16px; top:50%; transform:translateY(-50%); color:#94a3b8; font-size:18px; pointer-events:none;"></i>
                    </div>
                </div>
            </div>

            <!-- Dynamic Result Counter & Active Filter Chip -->
            <div id="courseResultBar" class="d-flex align-items-center justify-content-between mb-3 text-muted" style="font-size: 13.5px;">
                <span id="courseCountText">Showing <strong><?= $total_count; ?></strong> Programs</span>
                <span id="courseActiveFilterTag" class="badge d-none" style="background:#eff6ff; color:#2563eb; font-size:12px; font-weight:600; padding:6px 12px; border-radius:50px;">
                    Filtered by: <strong id="courseActiveFilterName">Postgraduate</strong>
                </span>
            </div>

            <div class="row g-4" id="courseGrid">
                <?php if (!empty($all_courses_data)): ?>
                    <?php foreach ($all_courses_data as $course): 
                        $courseUrl = (!empty($course['url']) && $course['url'] !== '#') ? $course['url'] : 'contact.php';
                        $levelClass = strtolower($course['level'] ?? 'postgraduate');
                        $searchKeywords = strtolower(($course['title'] ?? '') . ' ' . ($course['full_name'] ?? '') . ' ' . ($course['category'] ?? '') . ' ' . ($course['level'] ?? ''));
                    ?>
                        <div class="col-lg-4 col-md-6 course-card-col" data-level="<?= htmlspecialchars($levelClass); ?>" data-keywords="<?= htmlspecialchars($searchKeywords); ?>">
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
                <p class="text-muted mx-auto mb-3" style="max-width:480px;">Try adjusting your search keyword or selecting a different category filter.</p>
                <button type="button" id="resetCoursesFilterBtn" class="cs_primary_btn" style="padding:9px 24px; border-radius:50px;">
                    <i class="ri-refresh-line"></i>
                    <span>Reset All Filters</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Custom Scoped Styles for Course Filter System -->
    <style>
    .cs_course_filter_btn {
        cursor: pointer;
        background: #f1f5f9;
        color: #475569;
        font-weight: 600;
        font-size: 13.5px;
        padding: 8px 18px;
        border-radius: 50px;
        border: 1px solid transparent;
        transition: all 0.2s ease;
    }
    .cs_course_filter_btn:hover {
        background: #e2e8f0;
        color: #0b1e38;
    }
    .cs_course_filter_btn.active {
        background: #e0e7ff !important;
        color: #1e3a8a !important;
        font-weight: 700;
        box-shadow: 0 2px 8px rgba(30, 58, 138, 0.12);
    }
    /* Guarantee that filtered cards are always displayed smoothly and never trapped by AOS opacity:0 */
    .course-card-col {
        transition: opacity 0.25s ease, transform 0.25s ease;
    }
    .course-card-col:not(.d-none) {
        display: block !important;
        opacity: 1 !important;
        transform: none !important;
        visibility: visible !important;
    }
    </style>

    <!-- JavaScript Filter System with Instant Visual Updates & AOS Refresh -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('#courseFilterTabs button');
        const searchInput = document.getElementById('courseSearchInput');
        const clearSearchBtn = document.getElementById('clearCourseSearchBtn');
        const cards = document.querySelectorAll('.course-card-col');
        const noResults = document.getElementById('noCoursesFound');
        const countText = document.getElementById('courseCountText');
        const activeFilterTag = document.getElementById('courseActiveFilterTag');
        const activeFilterName = document.getElementById('courseActiveFilterName');
        const resetBtn = document.getElementById('resetCoursesFilterBtn');

        let currentFilter = 'all';

        // Read query parameters if available (e.g. ?filter=postgraduate)
        const urlParams = new URLSearchParams(window.location.search);
        const urlFilter = (urlParams.get('filter') || urlParams.get('level') || urlParams.get('category') || '').trim().toLowerCase();
        if (urlFilter) {
            tabs.forEach(tab => {
                if (tab.getAttribute('data-filter') === urlFilter) {
                    currentFilter = urlFilter;
                }
            });
        }

        function updateTabVisuals() {
            tabs.forEach(t => {
                if (t.getAttribute('data-filter') === currentFilter) {
                    t.classList.add('active');
                } else {
                    t.classList.remove('active');
                }
            });

            if (currentFilter !== 'all') {
                activeFilterTag.classList.remove('d-none');
                activeFilterName.textContent = currentFilter.charAt(0).toUpperCase() + currentFilter.slice(1);
            } else {
                activeFilterTag.classList.add('d-none');
            }
        }

        function applyFilter() {
            const query = (searchInput.value || '').trim().toLowerCase();
            let visibleCount = 0;

            // Toggle clear search button
            if (clearSearchBtn) {
                if (query.length > 0) {
                    clearSearchBtn.classList.remove('d-none');
                } else {
                    clearSearchBtn.classList.add('d-none');
                }
            }

            cards.forEach(card => {
                const level = (card.getAttribute('data-level') || '').toLowerCase();
                const keywords = (card.getAttribute('data-keywords') || '').toLowerCase();

                const matchesFilter = (currentFilter === 'all' || level === currentFilter);
                const matchesSearch = (!query || keywords.includes(query));

                if (matchesFilter && matchesSearch) {
                    card.classList.remove('d-none');
                    card.classList.add('aos-animate');
                    card.style.opacity = '1';
                    card.style.transform = 'none';
                    card.style.visibility = 'visible';
                    visibleCount++;
                } else {
                    card.classList.add('d-none');
                }
            });

            // Update counter
            if (countText) {
                countText.innerHTML = `Showing <strong>${visibleCount}</strong> Programs`;
            }

            // Show or hide empty state
            if (visibleCount === 0) {
                noResults.classList.remove('d-none');
            } else {
                noResults.classList.add('d-none');
            }

            // Refresh AOS
            if (typeof AOS !== 'undefined') {
                AOS.refresh();
            }
        }

        // Tab click listener
        tabs.forEach(tab => {
            tab.addEventListener('click', function () {
                currentFilter = this.getAttribute('data-filter');
                updateTabVisuals();
                applyFilter();
            });
        });

        // Search input listener
        if (searchInput) {
            searchInput.addEventListener('input', applyFilter);
        }

        // Clear search button
        if (clearSearchBtn) {
            clearSearchBtn.addEventListener('click', function () {
                searchInput.value = '';
                searchInput.focus();
                applyFilter();
            });
        }

        // Reset filter button
        if (resetBtn) {
            resetBtn.addEventListener('click', function () {
                currentFilter = 'all';
                if (searchInput) searchInput.value = '';
                updateTabVisuals();
                applyFilter();
            });
        }

        // Initial run
        updateTabVisuals();
        applyFilter();
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
