<?php
ob_start();
include("include/data.php");
include("include/university-data.php");

// Prepare dynamic offering counts for each course from centralized university data
$course_uni_counts = [];
foreach ($all_courses_data as $c) {
    $cId = strtolower($c['id']);
    $cnt = 0;
    foreach ($all_universities_data as $uni) {
        $uniCourses = array_map('strtolower', $uni['offered_courses'] ?? []);
        if (in_array($cId, $uniCourses)) {
            $cnt++;
        }
    }
    $course_uni_counts[$cId] = $cnt;
}

// Group courses by level as requested: Undergraduate, Integrated, Postgraduate
$pg_courses = dura_get_courses_by_level('Postgraduate');
$ug_courses = dura_get_courses_by_level('Undergraduate');
$int_courses = dura_get_courses_by_level('Integrated');

// Groups array matching client structure
$course_groups = [
    [
        'title' => 'Undergraduate',
        'key' => 'undergraduate',
        'icon' => 'ri-graduation-cap-line',
        'courses' => $ug_courses
    ],
    [
        'title' => 'Integrated',
        'key' => 'integrated',
        'icon' => 'ri-stack-line',
        'courses' => $int_courses
    ],
    [
        'title' => 'Postgraduate',
        'key' => 'postgraduate',
        'icon' => 'ri-book-open-line',
        'courses' => $pg_courses
    ]
];
?>

<main class="cs_universities_main">
    <!-- Start Page Header / Breadcrumb -->
    <section class="cs_page_header cs_bg_filed" data-src="assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="cs_page_header_text" data-aos="fade-up">
                <h1 class="cs_page_header_title cs_fs_48 cs_bold">Compare Online Universities</h1>
                <ul class="cs_breadcrumb cs_mp_0 cs_fs_16">
                    <li><a href="index.php">Home</a></li>
                    <li>Universities</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Header -->

    <!-- Start Universities Listing & Comparison Section -->
    <section class="cs_section_padding cs_uni_listing_section">
        <div class="container">

            <!-- Section Intro Header -->
            <div class="cs_uni_intro_header mb-4" data-aos="fade-up">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                    <div>
                        <span class="cs_unid_badge">
                            <i class="ri-shield-check-line"></i> UGC-DEB ENTITLED INSTITUTIONS
                        </span>
                        <h2 class="cs_unid_sec_title mb-1" style="font-size: 28px;">Explore &amp; Compare Leading Universities</h2>
                        <p class="cs_unid_sec_subtitle mb-0" style="max-width: 720px; font-size: 14.5px;">
                            Filter accredited institutions by degree program or search by university name. Select up to 3 universities to compare fees, accreditations, and mode side by side.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Mobile Filter Toggle Button (< 992px) -->
            <div class="d-lg-none cs_mobile_filter_toggle_wrap" data-aos="fade-up">
                <button type="button" class="btn w-100 d-flex align-items-center justify-content-between cs_mobile_filter_toggle_btn" id="csMobileFilterToggleBtn" aria-expanded="false" aria-controls="uniFilterSidebarCollapse">
                    <span class="d-flex align-items-center gap-2">
                        <i class="ri-equalizer-line"></i>
                        <span class="cs_bold">Filter Courses</span>
                    </span>
                    <span class="cs_mobile_active_chip" id="csMobileFilterBadge">All Programs</span>
                </button>
            </div>

            <!-- Backdrop Overlay for Mobile Left Sidebar Drawer -->
            <div class="cs_filter_sidebar_backdrop d-lg-none" id="csFilterSidebarBackdrop"></div>

            <!-- Two-Column Layout: Left Sticky Sidebar + Right University Grid -->
            <div class="row g-4">

                <!-- LEFT SIDE: Sticky Filter Sidebar (col-lg-4 col-xl-3) -->
                <div class="col-lg-4 col-xl-3 cs_filter_sidebar_col">
                    <div class="cs_filter_sidebar_wrapper" id="uniFilterSidebarCollapse">
                        <aside class="cs_filter_sidebar_card">
                            
                            <!-- Sidebar Header -->
                            <div class="cs_filter_card_header">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="ri-filter-3-line cs_filter_header_icon"></i>
                                    <h3 class="cs_filter_header_title mb-0">Course Filters</h3>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <button type="button" id="csResetFilterSidebarBtn" class="cs_filter_reset_link" title="Reset all course filters">
                                        <i class="ri-refresh-line"></i> Reset
                                    </button>
                                    <button type="button" class="cs_mobile_filter_close_btn d-lg-none" id="csMobileFilterCloseBtn" aria-label="Close filters">
                                        <i class="ri-close-line"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- "All Programs" Quick Option -->
                            <div class="cs_filter_all_row">
                                <label class="cs_filter_item_label cs_is_active" data-course="" data-title="All Programs">
                                    <input type="radio" name="sidebar_course" value="" class="cs_filter_input_radio" checked>
                                    <span class="cs_custom_radio_circle"></span>
                                    <span class="cs_filter_course_name">All Programs</span>
                                    <span class="cs_filter_badge_count"><?= count($all_universities_data); ?></span>
                                </label>
                            </div>

                            <!-- Course Groups Scrollable Container -->
                            <div class="cs_filter_scroll_area">
                                <?php foreach ($course_groups as $group): ?>
                                    <div class="cs_filter_group_block">
                                        <div class="cs_filter_group_title">
                                            <i class="<?= htmlspecialchars($group['icon']); ?>"></i>
                                            <span><?= htmlspecialchars(strtoupper($group['title'])); ?></span>
                                            <span class="cs_group_items_count">(<?= count($group['courses']); ?>)</span>
                                        </div>
                                        <div class="cs_filter_group_items">
                                            <?php foreach ($group['courses'] as $course): 
                                                $cId = strtolower($course['id']);
                                                $uCount = $course_uni_counts[$cId] ?? 0;
                                            ?>
                                                <label class="cs_filter_item_label" data-course="<?= htmlspecialchars($cId); ?>" data-title="<?= htmlspecialchars($course['title']); ?>">
                                                    <input type="radio" name="sidebar_course" value="<?= htmlspecialchars($cId); ?>" class="cs_filter_input_radio">
                                                    <span class="cs_custom_radio_circle"></span>
                                                    <span class="cs_filter_course_name" title="<?= htmlspecialchars($course['title']); ?>">
                                                        <?= htmlspecialchars($course['title']); ?>
                                                    </span>
                                                    <span class="cs_filter_badge_count <?= $uCount === 0 ? 'cs_zero_count' : ''; ?>">
                                                        <?= $uCount; ?>
                                                    </span>
                                                </label>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- Mobile Drawer Apply Footer (< 992px) -->
                            <div class="cs_mobile_filter_footer d-lg-none">
                                <button type="button" class="cs_mobile_filter_apply_btn" id="csMobileFilterApplyBtn">
                                    <span>Show Universities</span>
                                    <i class="ri-arrow-right-line"></i>
                                </button>
                            </div>

                        </aside>
                    </div>
                </div>

                <!-- RIGHT SIDE: Top Search Field + University Cards (col-lg-8 col-xl-9) -->
                <div class="col-lg-8 col-xl-9">
                    
                    <!-- Top Control Bar (Search Field & Dynamic Counter) -->
                    <div class="cs_right_top_bar" data-aos="fade-up">
                        <div class="row align-items-center g-3">
                            
                            <!-- Search Universities Input -->
                            <div class="col-md-7 col-lg-7 col-xl-8">
                                <div class="cs_search_field_box">
                                    <i class="ri-search-line cs_search_field_icon"></i>
                                    <input type="text" id="uniSearchInput" class="form-control cs_search_field_input" placeholder="Search Universities (e.g. Manipal, NMIMS, Amity)..." autocomplete="off" spellcheck="false">
                                    <button type="button" id="csClearSearchBtn" class="cs_search_field_clear d-none" title="Clear search" aria-label="Clear search">
                                        <i class="ri-close-circle-fill"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Results Counter -->
                            <div class="col-md-5 col-lg-5 col-xl-4 text-md-end">
                                <div class="cs_result_summary_text" id="uniResultSummaryText">
                                    Showing <strong id="uniCountNumber"><?= count($all_universities_data); ?></strong> Universities
                                </div>
                            </div>

                        </div>

                        <!-- Active Filter Chips Row -->
                        <div id="csActiveFilterChipsRow" class="cs_active_chips_row mt-2 d-none">
                            <span class="cs_chips_label"><i class="ri-filter-fill"></i> Active:</span>
                            <span id="csActiveCourseChip" class="cs_chip_item d-none">
                                <span id="csActiveCourseLabel">Online MBA</span>
                                <button type="button" class="cs_chip_close" id="csRemoveActiveCourseBtn" title="Remove course filter" aria-label="Remove course filter">&times;</button>
                            </span>
                            <span id="csActiveSearchChip" class="cs_chip_item d-none">
                                <span id="csActiveSearchLabel">Search: "..."</span>
                                <button type="button" class="cs_chip_close" id="csRemoveActiveSearchBtn" title="Clear search text" aria-label="Clear search text">&times;</button>
                            </span>
                            <button type="button" id="csClearAllFiltersBtn" class="cs_clear_all_filters_btn">Clear All</button>
                        </div>
                    </div>

                    <!-- University Cards Grid -->
                    <div class="row g-4" id="uniGrid">
                        <?php foreach ($all_universities_data as $key => $uni): 
                            $naacGrade = strtolower($uni['comparison_data']['naac_grade'] ?? ($uni['overview']['accreditation'] ?? ''));
                            $uniType = strtolower($uni['overview']['type'] ?? '');
                            $keywords = strtolower(($uni['name'] ?? '') . ' ' . ($uni['short_name'] ?? '') . ' ' . ($uni['overview']['type'] ?? '') . ' ' . ($uni['overview']['accreditation'] ?? ''));
                            $offeredCourses = implode(',', array_map('strtolower', $uni['offered_courses'] ?? []));
                        ?>
                            <div class="col-md-6 col-xl-4 uni-card-col" 
                                 data-id="<?= htmlspecialchars($uni['id']); ?>" 
                                 data-name="<?= htmlspecialchars($uni['name']); ?>" 
                                 data-short="<?= htmlspecialchars($uni['short_name'] ?? $uni['name']); ?>" 
                                 data-logo="<?= htmlspecialchars($uni['logo']); ?>" 
                                 data-courses="<?= htmlspecialchars($offeredCourses); ?>" 
                                 data-naac="<?= htmlspecialchars($naacGrade); ?>" 
                                 data-type="<?= htmlspecialchars($uniType); ?>" 
                                 data-keywords="<?= htmlspecialchars($keywords); ?>" 
                                 data-aos="fade-up">
                                
                                <div class="cs_uni_card h-100 d-flex flex-column">
                                    <!-- Top Row: Logo & UGC Badge -->
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="cs_uni_logo_box">
                                            <img src="<?= htmlspecialchars($uni['logo']); ?>" alt="<?= htmlspecialchars($uni['name']); ?> Logo" class="cs_uni_logo_img">
                                        </div>
                                        <span class="cs_unid_trust_pill ugc">
                                            <i class="ri-shield-check-fill"></i> <?= htmlspecialchars($uni['overview']['recognition']); ?>
                                        </span>
                                    </div>

                                    <!-- Campus Image -->
                                    <div class="cs_uni_campus_thumb mb-3">
                                        <img src="<?= htmlspecialchars($uni['campus_img']); ?>" alt="<?= htmlspecialchars($uni['name']); ?>">
                                    </div>

                                    <!-- University Title -->
                                    <h3 class="cs_uni_card_title">
                                        <a href="<?= htmlspecialchars($uni['slug']); ?>">
                                            <?= htmlspecialchars($uni['name']); ?>
                                        </a>
                                    </h3>

                                    <!-- Excerpt Description -->
                                    <p class="cs_uni_card_desc flex-grow-1">
                                        <?= htmlspecialchars(substr($uni['hero_desc'], 0, 110)) . '...'; ?>
                                    </p>

                                    <!-- Accreditations & Mode Badges -->
                                    <div class="d-flex flex-wrap gap-2 mb-3">
                                        <span class="cs_badge_pill_accent">
                                            <i class="ri-award-line"></i> <?= htmlspecialchars($uni['overview']['accreditation']); ?>
                                        </span>
                                        <span class="cs_badge_pill_neutral">
                                            <i class="ri-time-line"></i> <?= htmlspecialchars($uni['overview']['mode']); ?>
                                        </span>
                                    </div>

                                    <!-- Card Action Row: Explore & Add to Compare -->
                                    <div class="mt-auto pt-3 border-top">
                                        <div class="d-flex gap-2 align-items-center">
                                            <a href="<?= htmlspecialchars($uni['slug']); ?>" class="cs_unid_btn_primary flex-grow-1 justify-content-center text-center">
                                                <span>Explore</span>
                                                <i class="ri-arrow-right-line"></i>
                                            </a>
                                            <button type="button" class="cs_compare_btn" 
                                                    data-id="<?= htmlspecialchars($uni['id']); ?>" 
                                                    data-name="<?= htmlspecialchars($uni['name']); ?>" 
                                                    data-short="<?= htmlspecialchars($uni['short_name'] ?? $uni['name']); ?>" 
                                                    data-logo="<?= htmlspecialchars($uni['logo']); ?>" 
                                                    title="Add to Compare">
                                                <i class="ri-scales-3-line"></i>
                                                <span class="cs_compare_btn_text">Compare</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Empty State Fallback -->
                    <div id="noUnisFound" class="text-center py-5 d-none cs_empty_unis_box" data-aos="fade-up">
                        <div class="cs_empty_icon_circle">
                            <i class="ri-search-eye-line"></i>
                        </div>
                        <h3 class="mt-3 mb-2" style="font-size:22px; font-weight:700; color:#0b1e38;">No matching universities found</h3>
                        <p class="text-muted mx-auto mb-4" style="max-width: 480px; font-size:14.5px;" id="noUnisFoundMsg">
                            No universities match your current course filter and search keyword.
                        </p>
                        <button type="button" id="csResetAllEmptyBtn" class="cs_primary_btn" style="padding:10px 24px; border-radius:50px;">
                            <i class="ri-refresh-line"></i>
                            <span>Reset All Filters</span>
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Include Central Comparison Sticky Bar & Drawer -->
    <?php include("include/compare-bar.php"); ?>

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

<style>
/* ==========================================================================
   University Comparison & Filter Layout Styles
   Scoped, unobtrusive, fully responsive
   ========================================================================== */

/* Left Filter Sidebar Card */
.cs_filter_sidebar_card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.03);
    overflow: hidden;
}

@media (min-width: 992px) {
    .cs_filter_sidebar_col {
        position: relative;
        align-self: stretch;
    }
    .cs_filter_sidebar_wrapper {
        height: 100% !important;
        display: block !important;
        position: static !important;
        transform: none !important;
        visibility: visible !important;
        box-shadow: none !important;
        width: 100% !important;
        max-width: 100% !important;
        background: transparent !important;
    }
    .cs_filter_sidebar_card {
        position: -webkit-sticky;
        position: sticky;
        top: 95px;
        max-height: calc(100vh - 115px);
        display: flex;
        flex-direction: column;
        z-index: 20;
    }
}

.cs_filter_card_header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 16px 18px;
    background: #ffffff;
    border-bottom: 1px solid #edf2f7;
}

.cs_filter_header_icon {
    font-size: 18px;
    color: #2563eb;
}

.cs_filter_header_title {
    font-size: 18px;
    font-weight: 700;
    color: #0b1e38;
}

.cs_filter_reset_link {
    background: transparent;
    border: none;
    color: #64748b;
    font-size: 12.5px;
    font-weight: 600;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 4px;
    padding: 4px 8px;
    border-radius: 6px;
    transition: all 0.2s ease;
}

.cs_filter_reset_link:hover {
    color: #2563eb;
    background: #eff6ff;
}

.cs_filter_all_row {
    padding: 10px 14px;
    border-bottom: 1px solid #edf2f7;
    background: #fafbfc;
}

.cs_filter_scroll_area {
    padding: 12px 14px 20px 14px;
    overflow-y: auto;
    flex-grow: 1;
}

/* Custom scrollbar for sidebar */
.cs_filter_scroll_area::-webkit-scrollbar {
    width: 6px;
}
.cs_filter_scroll_area::-webkit-scrollbar-track {
    background: #f1f5f9;
    border-radius: 10px;
}
.cs_filter_scroll_area::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 10px;
}
.cs_filter_scroll_area::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
}

.cs_filter_group_block {
    margin-bottom: 18px;
}

.cs_filter_group_block:last-child {
    margin-bottom: 0;
}

.cs_filter_group_title {
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.08em;
      color: #ff8313;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 6px;
}

.cs_filter_group_title i {
    font-size: 13px;
    color: #f98d01;
}
.cs_group_items_count {
    font-size: 10.5px;
    color: #003987;
    font-weight: 600;
}

/* Filter Item Label (Radio) */
.cs_filter_item_label {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 7px 10px;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.15s ease, color 0.15s ease;
    margin-bottom: 2px;
    user-select: none;
    font-size: 13.5px;
    color: #334155;
    position: relative;
}

.cs_filter_item_label:hover {
    background: #f1f5f9;
    color: #0b1e38;
}

.cs_filter_item_label.cs_is_active {
    background: #eff6ff !important;
    color: #1e40af !important;
    font-weight: 600;
}

.cs_filter_input_radio {
    position: absolute;
    opacity: 0;
    pointer-events: none;
}

.cs_custom_radio_circle {
    width: 14px;
    height: 14px;
    border-radius: 50%;
    border: 1.5px solid #cbd5e1;
    margin-right: 8px;
    flex-shrink: 0;
    position: relative;
    transition: all 0.2s ease;
}

.cs_filter_item_label.cs_is_active .cs_custom_radio_circle {
    border-color: #2563eb;
    background: #2563eb;
    box-shadow: inset 0 0 0 3px #ffffff;
}

.cs_filter_course_name {
    flex-grow: 1;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    padding-right: 6px;
    font-weight: 600;
}

.cs_filter_badge_count {
    font-size: 12px;
    font-weight: 700;
    padding: 2px 7px;
    border-radius: 50px;
    background: #f1f5f9;
    color: #64748b;
    flex-shrink: 0;
}

.cs_filter_badge_count.cs_zero_count {
    color: #cbd5e1;
    background: #f8fafc;
}

.cs_filter_item_label.cs_is_active .cs_filter_badge_count {
    background: #2563eb;
    color: #ffffff;
}

/* Mobile Filter Button & Sticky Wrapper (< 992px) */
.cs_mobile_filter_toggle_wrap {
    position: -webkit-sticky;
    position: sticky;
    top: 75px;
    z-index: 80;
    background: #f8fafc;
    padding: 6px 0;
    margin-bottom: 14px;
}

.cs_mobile_filter_toggle_btn {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    color: #0b1e38;
    padding: 10px 16px;
    border-radius: 10px;
    font-size: 14.5px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.03);
}

.cs_mobile_filter_toggle_btn:hover,
.cs_mobile_filter_toggle_btn:focus {
    background: #f8fafc;
    border-color: #cbd5e1;
    color: #0b1e38;
}

.cs_mobile_active_chip {
    font-size: 12px;
    font-weight: 600;
    background: #eff6ff;
    color: #2563eb;
    padding: 3px 10px;
    border-radius: 50px;
}

/* Mobile Filter Drawer to Left Side (< 992px) */
@media (max-width: 991px) {
    .cs_filter_sidebar_wrapper {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        bottom: 0 !important;
        width: 320px !important;
        max-width: 86vw !important;
        height: 100vh !important;
        height: 100dvh !important;
        background: #ffffff !important;
        z-index: 1050 !important;
        transform: translateX(-100%) !important;
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
        box-shadow: 6px 0 25px rgba(0, 0, 0, 0.18) !important;
        display: flex !important;
        flex-direction: column !important;
        visibility: hidden !important;
        overflow: hidden !important;
        padding: 0 !important;
        margin: 0 !important;
    }

    .cs_filter_sidebar_wrapper.cs_drawer_open {
        transform: translateX(0) !important;
        visibility: visible !important;
    }

    .cs_filter_sidebar_card {
        display: flex !important;
        flex-direction: column !important;
        height: 100% !important;
        border: none !important;
        border-radius: 0 !important;
        box-shadow: none !important;
        overflow: hidden !important;
    }

    .cs_filter_scroll_area {
        flex: 1 1 auto !important;
        overflow-y: auto !important;
        -webkit-overflow-scrolling: touch !important;
        padding-bottom: 24px !important;
    }

    /* Mobile Backdrop Overlay */
    .cs_filter_sidebar_backdrop {
        position: fixed;
        inset: 0;
        background: rgba(11, 30, 56, 0.5);
        backdrop-filter: blur(2px);
        -webkit-backdrop-filter: blur(2px);
        z-index: 1045;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .cs_filter_sidebar_backdrop.active {
        opacity: 1;
        visibility: visible;
    }

    /* Mobile Close Button */
    .cs_mobile_filter_close_btn {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: #f1f5f9;
        border: none;
        color: #0b1e38;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .cs_mobile_filter_close_btn:hover {
        background: #fee2e2;
        color: #ef4444;
    }

    /* Mobile Drawer Apply Footer */
    .cs_mobile_filter_footer {
        padding: 12px 16px;
        background: #ffffff;
        border-top: 1px solid #e2e8f0;
        box-shadow: 0 -4px 14px rgba(0, 0, 0, 0.05);
    }

    .cs_mobile_filter_apply_btn {
        width: 100%;
        background: #002671;
        color: #ffffff;
        border: none;
        padding: 12px 20px;
        border-radius: 8px;
        font-size: 14.5px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: background 0.2s ease;
    }

    .cs_mobile_filter_apply_btn:hover {
        background: #ff7900;
        color: #ffffff;
    }
}

/* Right Top Bar & Search Box */
.cs_right_top_bar {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 16px 20px;
    margin-bottom: 24px;
    box-shadow: 0 4px 18px rgba(0,0,0,0.03);
}

.cs_search_field_box {
    position: relative;
    width: 100%;
}

.cs_search_field_icon {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 18px;
    color: #94a3b8;
    pointer-events: none;
}

.cs_search_field_input {
    border-radius: 50px !important;
    padding: 10px 42px 10px 44px !important;
    border: 1.5px solid #cbd5e1 !important;
    font-size: 14px !important;
    color: #0b1e38 !important;
    background: #fafbfc !important;
    box-shadow: none !important;
    transition: all 0.2s ease !important;
}

.cs_search_field_input:focus {
    background: #ffffff !important;
    border-color: #2563eb !important;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.12) !important;
}

.cs_search_field_clear {
    position: absolute;
    right: 14px;
    top: 50%;
    transform: translateY(-50%);
    background: transparent;
    border: none;
    color: #94a3b8;
    font-size: 18px;
    padding: 0;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.cs_search_field_clear:hover {
    color: #ef4444;
}

.cs_result_summary_text {
    font-size: 14px;
    color: #64748b;
    font-weight: 500;
}

.cs_result_summary_text strong {
    color: #0b1e38;
    font-weight: 700;
}

/* Active Chips */
.cs_active_chips_row {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 8px;
    padding-top: 10px;
    border-top: 1px dashed #e2e8f0;
}

.cs_chips_label {
    font-size: 14px;
    font-weight: 600;
    color: #64748b;
    display: inline-flex;
    align-items: center;
    gap: 4px;
}

.cs_chip_item {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #eff6ff;
    color: #1e40af;
    font-size: 14px;
    font-weight: 600;
    padding: 4px 10px;
    border-radius: 50px;
    border: 1px solid #dbeafe;
}

.cs_chip_close {
    background: transparent;
    border: none;
    color: #3b82f6;
    font-size: 15px;
    line-height: 1;
    padding: 0;
    cursor: pointer;
}

.cs_chip_close:hover {
    color: #1d4ed8;
}

.cs_clear_all_filters_btn {
    background: transparent;
    border: none;
    color: #ef4444;
    font-size: 14px;
    font-weight: 600;
    padding: 4px 8px;
    cursor: pointer;
}

.cs_clear_all_filters_btn:hover {
    text-decoration: underline;
}

/* University Cards Styling in Grid */
.uni-card-col {
    transition: opacity 0.25s ease, transform 0.25s ease;
}

.uni-card-col:not(.d-none) {
    display: block !important;
    opacity: 1 !important;
    transform: none !important;
    visibility: visible !important;
}

.cs_uni_card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 22px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
    position: relative;
    transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
}

.cs_uni_card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.07);
    border-color: #cbd5e1;
}

.cs_uni_logo_box {
    height: 46px;
    display: flex;
    align-items: center;
}

.cs_uni_logo_img {
    max-height: 42px;
    max-width: 160px;
    object-fit: contain;
}

.cs_uni_campus_thumb {
    border-radius: 10px;
    overflow: hidden;
    height: 155px;
}

.cs_uni_campus_thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.cs_uni_card:hover .cs_uni_campus_thumb img {
    transform: scale(1.04);
}

.cs_uni_card_title {
    font-size: 18.5px;
    font-weight: 700;
    color: #0b1e38;
    margin-bottom: 6px;
    line-height: 1.35;
}

.cs_uni_card_title a {
    color: #0b1e38;
    text-decoration: none;
    transition: color 0.2s ease;
}

.cs_uni_card_title a:hover {
    color: #2563eb;
}

.cs_uni_card_desc {
    font-size: 14px;
    color: #64748b;
    line-height: 1.5;
    margin-bottom: 12px;
}

.cs_badge_pill_accent {
    background: #eff6ff;
    color: #2563eb;
    font-size: 12px;
    font-weight: 600;
    padding: 3px 9px;
    border-radius: 4px;
    display: inline-flex;
    align-items: center;
    gap: 4px;
}

.cs_badge_pill_neutral {
    background: #ddf7e8;
    color: #16a34a;
    font-size: 13px;
    font-weight: 500;
    padding: 3px 9px;
    border-radius: 4px;
    display: inline-flex;
    align-items: center;
    gap: 4px;
}

/* Empty State Box */
.cs_empty_unis_box {
    background: #ffffff;
    border: 1px dashed #cbd5e1;
    border-radius: 16px;
    padding: 50px 20px;
}

.cs_empty_icon_circle {
    width: 72px;
    height: 72px;
    border-radius: 50%;
    background: #eff6ff;
    color: #2563eb;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 34px;
}
</style>

<!-- JavaScript Filter & Search Handler for Universities Page -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const courseLabels = document.querySelectorAll('.cs_filter_item_label');
    const searchInput = document.getElementById('uniSearchInput');
    const clearSearchBtn = document.getElementById('csClearSearchBtn');
    const countNumber = document.getElementById('uniCountNumber');
    const cards = document.querySelectorAll('.uni-card-col');
    const noResults = document.getElementById('noUnisFound');
    const noResultsMsg = document.getElementById('noUnisFoundMsg');

    // Active chips elements
    const activeChipsRow = document.getElementById('csActiveFilterChipsRow');
    const activeCourseChip = document.getElementById('csActiveCourseChip');
    const activeCourseLabel = document.getElementById('csActiveCourseLabel');
    const removeCourseBtn = document.getElementById('csRemoveActiveCourseBtn');
    const activeSearchChip = document.getElementById('csActiveSearchChip');
    const activeSearchLabel = document.getElementById('csActiveSearchLabel');
    const removeSearchBtn = document.getElementById('csRemoveActiveSearchBtn');
    const clearAllChipsBtn = document.getElementById('csClearAllFiltersBtn');
    const resetSidebarBtn = document.getElementById('csResetFilterSidebarBtn');
    const resetEmptyBtn = document.getElementById('csResetAllEmptyBtn');
    const mobileFilterBadge = document.getElementById('csMobileFilterBadge');

    let currentCourse = '';
    let currentCourseTitle = '';

    // Check if course or search parameter was passed via URL (e.g. ?course=online-mba&search=manipal)
    const urlParams = new URLSearchParams(window.location.search);
    const urlCourse = (urlParams.get('course') || '').trim().toLowerCase();
    const urlSearch = (urlParams.get('search') || '').trim();

    if (urlCourse) {
        currentCourse = urlCourse;
        // Find matching label to extract title
        courseLabels.forEach(lbl => {
            if (lbl.getAttribute('data-course') === urlCourse) {
                currentCourseTitle = lbl.getAttribute('data-title') || urlCourse;
            }
        });
        if (!currentCourseTitle) {
            currentCourseTitle = urlCourse.replace(/-/g, ' ').toUpperCase();
        }
        if (typeof DuraCompare !== 'undefined') {
            DuraCompare.setCourseContext(currentCourse, currentCourseTitle);
        }
    } else if (typeof DuraCompare !== 'undefined') {
        // Restore existing course context from DuraCompare if previously set
        const storedCourse = DuraCompare.getStoredCourse();
        if (storedCourse && storedCourse.id) {
            currentCourse = storedCourse.id.toLowerCase();
            currentCourseTitle = storedCourse.title || storedCourse.id;
        }
    }

    if (urlSearch && searchInput) {
        searchInput.value = urlSearch;
    }

    // Update Sidebar Radio visuals to match currentCourse
    function updateSidebarVisuals() {
        courseLabels.forEach(lbl => {
            const cId = (lbl.getAttribute('data-course') || '').toLowerCase();
            const radio = lbl.querySelector('input[type="radio"]');
            if (cId === currentCourse) {
                lbl.classList.add('cs_is_active');
                if (radio) radio.checked = true;
            } else {
                lbl.classList.remove('cs_is_active');
                if (radio) radio.checked = false;
            }
        });

        if (mobileFilterBadge) {
            mobileFilterBadge.textContent = currentCourseTitle || 'All Programs';
        }
    }

    // Apply combined filters: Course Selection + Search Keyword
    function applyFilters() {
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
            const cardCourses = (card.getAttribute('data-courses') || '').split(',').map(s => s.trim().toLowerCase());
            const cardKeywords = (card.getAttribute('data-keywords') || '').toLowerCase();
            const cardName = (card.getAttribute('data-name') || '').toLowerCase();
            const cardShort = (card.getAttribute('data-short') || '').toLowerCase();

            // 1. Course Filter Check
            let matchesCourse = true;
            if (currentCourse !== '') {
                matchesCourse = cardCourses.includes(currentCourse);
            }

            // 2. Search Keyword Check
            let matchesSearch = true;
            if (query !== '') {
                matchesSearch = cardName.includes(query) || cardShort.includes(query) || cardKeywords.includes(query);
            }

            if (matchesCourse && matchesSearch) {
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

        // Update result counts
        if (countNumber) {
            countNumber.textContent = visibleCount;
        }

        // Empty state visibility & message
        if (visibleCount === 0) {
            noResults.classList.remove('d-none');
            if (currentCourse && query) {
                noResultsMsg.textContent = `No universities offering ${currentCourseTitle} match your search term "${searchInput.value}".`;
            } else if (currentCourse) {
                noResultsMsg.textContent = `Currently, no universities in our active directory have confirmed offerings for ${currentCourseTitle}.`;
            } else if (query) {
                noResultsMsg.textContent = `No universities match "${searchInput.value}". Please try another keyword.`;
            } else {
                noResultsMsg.textContent = `No matching universities found.`;
            }
        } else {
            noResults.classList.add('d-none');
        }

        // Refresh AOS animations
        if (typeof AOS !== 'undefined') {
            AOS.refresh();
        }

        // Update Active Chips UI
        updateActiveChips(query);
    }

    function updateActiveChips(query) {
        let hasActiveFilter = false;

        if (currentCourse !== '') {
            hasActiveFilter = true;
            activeCourseLabel.textContent = currentCourseTitle || currentCourse;
            activeCourseChip.classList.remove('d-none');
        } else {
            activeCourseChip.classList.add('d-none');
        }

        if (query !== '') {
            hasActiveFilter = true;
            activeSearchLabel.textContent = `Search: "${searchInput.value}"`;
            activeSearchChip.classList.remove('d-none');
        } else {
            activeSearchChip.classList.add('d-none');
        }

        if (hasActiveFilter) {
            activeChipsRow.classList.remove('d-none');
        } else {
            activeChipsRow.classList.add('d-none');
        }
    }

    function resetFilters() {
        currentCourse = '';
        currentCourseTitle = '';
        if (searchInput) {
            searchInput.value = '';
        }
        if (typeof DuraCompare !== 'undefined') {
            DuraCompare.clearCourseContext();
        }
        updateSidebarVisuals();
        applyFilters();
        if (window.innerWidth < 992) {
            closeMobileFilter();
        }
    }

    // Mobile Filter Drawer to Left Side Handlers (< 992px)
    const mobileFilterToggleBtn = document.querySelector('.cs_mobile_filter_toggle_btn');
    const uniFilterCollapse = document.getElementById('uniFilterSidebarCollapse');
    const mobileFilterBackdrop = document.getElementById('csFilterSidebarBackdrop');
    const mobileFilterCloseBtn = document.getElementById('csMobileFilterCloseBtn');
    const mobileFilterApplyBtn = document.getElementById('csMobileFilterApplyBtn');

    function openMobileFilter() {
        if (!uniFilterCollapse || window.innerWidth >= 992) return;
        uniFilterCollapse.classList.add('cs_drawer_open');
        if (mobileFilterBackdrop) {
            mobileFilterBackdrop.classList.add('active');
        }
        document.body.style.overflow = 'hidden';
        if (mobileFilterToggleBtn) {
            mobileFilterToggleBtn.setAttribute('aria-expanded', 'true');
        }
    }

    function closeMobileFilter() {
        if (!uniFilterCollapse) return;
        uniFilterCollapse.classList.remove('cs_drawer_open');
        if (mobileFilterBackdrop) {
            mobileFilterBackdrop.classList.remove('active');
        }
        document.body.style.removeProperty('overflow');
        if (mobileFilterToggleBtn) {
            mobileFilterToggleBtn.setAttribute('aria-expanded', 'false');
        }
    }

    function toggleMobileFilter() {
        if (!uniFilterCollapse || window.innerWidth >= 992) return;
        if (uniFilterCollapse.classList.contains('cs_drawer_open')) {
            closeMobileFilter();
        } else {
            openMobileFilter();
        }
    }

    if (mobileFilterToggleBtn) {
        mobileFilterToggleBtn.addEventListener('click', function (e) {
            e.preventDefault();
            toggleMobileFilter();
        });
    }

    if (mobileFilterCloseBtn) {
        mobileFilterCloseBtn.addEventListener('click', function (e) {
            e.preventDefault();
            closeMobileFilter();
        });
    }

    if (mobileFilterBackdrop) {
        mobileFilterBackdrop.addEventListener('click', function (e) {
            e.preventDefault();
            closeMobileFilter();
        });
    }

    if (mobileFilterApplyBtn) {
        mobileFilterApplyBtn.addEventListener('click', function (e) {
            e.preventDefault();
            closeMobileFilter();
            const targetScroll = document.querySelector('.cs_right_top_bar') || document.getElementById('uniGrid');
            if (targetScroll) {
                targetScroll.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    }

    // Window Resize Guard: Reset styles when resizing to desktop
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 992) {
            closeMobileFilter();
        }
    });

    // Sidebar Course Item Click Listeners
    courseLabels.forEach(lbl => {
        lbl.addEventListener('click', function (e) {
            if (e.target.tagName && e.target.tagName.toLowerCase() === 'input') return;

            const targetCourse = (this.getAttribute('data-course') || '').toLowerCase();
            const targetTitle = this.getAttribute('data-title') || '';

            currentCourse = targetCourse;
            currentCourseTitle = targetTitle;

            if (currentCourse !== '') {
                if (typeof DuraCompare !== 'undefined') {
                    DuraCompare.setCourseContext(currentCourse, currentCourseTitle);
                }
            } else {
                if (typeof DuraCompare !== 'undefined') {
                    DuraCompare.clearCourseContext();
                }
            }

            updateSidebarVisuals();
            applyFilters();

            // Mobile view handling: close filter collapse & scroll to results
            if (window.innerWidth < 992) {
                closeMobileFilter();
                const targetScroll = document.querySelector('.cs_right_top_bar') || document.getElementById('uniGrid');
                if (targetScroll) {
                    targetScroll.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }
        });
    });

    // Search Input Listener
    if (searchInput) {
        searchInput.addEventListener('input', applyFilters);
    }

    // Clear Search Button
    if (clearSearchBtn) {
        clearSearchBtn.addEventListener('click', function () {
            searchInput.value = '';
            searchInput.focus();
            applyFilters();
        });
    }

    // Remove Active Course Chip
    if (removeCourseBtn) {
        removeCourseBtn.addEventListener('click', function () {
            currentCourse = '';
            currentCourseTitle = '';
            if (typeof DuraCompare !== 'undefined') {
                DuraCompare.clearCourseContext();
            }
            updateSidebarVisuals();
            applyFilters();
            if (window.innerWidth < 992) {
                closeMobileFilter();
            }
        });
    }

    // Remove Active Search Chip
    if (removeSearchBtn) {
        removeSearchBtn.addEventListener('click', function () {
            searchInput.value = '';
            applyFilters();
        });
    }

    // Clear All Filters Buttons
    if (clearAllChipsBtn) clearAllChipsBtn.addEventListener('click', resetFilters);
    if (resetSidebarBtn) resetSidebarBtn.addEventListener('click', resetFilters);
    if (resetEmptyBtn) resetEmptyBtn.addEventListener('click', resetFilters);

    // Card "Add to Compare" button delegation
    const uniGrid = document.getElementById('uniGrid');
    if (uniGrid) {
        uniGrid.addEventListener('click', function (e) {
            const btn = e.target.closest('.cs_compare_btn');
            if (!btn) return;

            e.preventDefault();
            const cardCol = btn.closest('.uni-card-col');
            const coursesAttr = cardCol ? cardCol.getAttribute('data-courses') || '' : '';
            const cardCourses = coursesAttr.split(',').map(s => s.trim().toLowerCase()).filter(Boolean);

            const uniData = {
                id: btn.getAttribute('data-id'),
                name: btn.getAttribute('data-name'),
                short_name: btn.getAttribute('data-short'),
                logo: btn.getAttribute('data-logo'),
                courses: cardCourses
            };

            if (typeof DuraCompare !== 'undefined') {
                DuraCompare.toggleUni(uniData);
            }
        });
    }

    // Initial setup
    updateSidebarVisuals();
    applyFilters();

    // Sync visuals with comparison storage
    if (typeof DuraCompare !== 'undefined') {
        DuraCompare.renderUI();
    }
});
</script>

<?php
$content = ob_get_clean();
require 'layout.php';
?>
