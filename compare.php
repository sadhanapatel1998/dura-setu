<?php
ob_start();
include("include/data.php");

// Read university IDs and optional course from URL parameters
$rawUnis = trim($_GET['unis'] ?? '');
$uniIds = array_filter(array_map('trim', explode(',', $rawUnis)));
$courseId = trim($_GET['course'] ?? '');

$selectedUnis = [];
foreach ($uniIds as $id) {
    $uni = dura_get_university($id);
    if ($uni) {
        $selectedUnis[$id] = $uni;
    }
}

$selectedCourse = null;
if (!empty($courseId)) {
    $selectedCourse = dura_get_course($courseId);
}

$comparedUnis = !empty($selectedUnis) ? dura_compare_universities(array_keys($selectedUnis)) : [];

if (!function_exists('dura_render_compare_cell')) {
    function dura_render_compare_cell($val, $type = 'text', bool $isMobile = false)
    {
        if ($val === null || $val === '' || $val === 'Not Available' || $val === 'NA' || $val === 'N/A') {
            return '<span class="text-muted fst-italic" style="font-size:13.5px;">Not Available</span>';
        }
        switch ($type) {
            case 'currency':
                $cleaned = trim((string)$val);
                if (preg_match('/^₹?\s*([0-9,]+)/', $cleaned, $matches)) {
                    $rawDigits = str_replace(',', '', $matches[1]);
                    return '<strong style="color:#059669; font-size:15px;">₹' . number_format((int)$rawDigits) . '</strong>';
                }
                return '<strong style="color:#059669; font-size:15px;">' . htmlspecialchars($cleaned) . '</strong>';
            case 'boolean':
                $bVal = strtolower(trim((string)$val));
                if ($bVal === 'yes' || strpos($bVal, 'yes') !== false) {
                    return '<span class="badge" style="background:#dcfce7; color:#166534; font-size:13px; font-weight:700; padding:5px 12px; border-radius:50px;"><i class="ri-checkbox-circle-line me-1"></i>Yes</span>';
                }
                if ($bVal === 'no') {
                    return '<span class="badge" style="background:#fee2e2; color:#991b1b; font-size:13px; font-weight:700; padding:5px 12px; border-radius:50px;"><i class="ri-close-circle-line me-1"></i>No</span>';
                }
                return '<span class="badge" style="background:#f1f5f9; color:#475569; font-size:13px; font-weight:700; padding:5px 12px; border-radius:50px;">' . htmlspecialchars($val) . '</span>';
            case 'satisfaction':
                $num = (float)$val;
                if ($num > 0) {
                    $pct = ($num <= 1) ? round($num * 100) : round($num);
                    return '<div class="d-inline-flex flex-column align-items-center w-100" style="max-width:140px; margin:0 auto;">
                                <div class="d-flex justify-content-between w-100 mb-1" style="font-size:13px; font-weight:700; color:#1e293b;">
                                    <span class="cs_satisfaction_label"' . ($isMobile ? ' style="margin-right:8px;"' : '') . '>Satisfaction</span>
                                    <span style="color:#2563eb;">' . $pct . '%</span>
                                </div>
                                <div class="w-100" style="height:7px; background:#e2e8f0; border-radius:4px; overflow:hidden;">
                                    <div style="height:100%; width:' . $pct . '%; background:#2563eb; border-radius:4px;"></div>
                                </div>
                            </div>';
                }
                return '<strong class="text-dark" style="font-size:14px;">' . htmlspecialchars((string)$val) . '</strong>';
            case 'grade':
                return '<span class="badge" style="background:#eff6ff; color:#1d4ed8; border:1px solid #bfdbfe; font-size:13.5px; font-weight:700; padding:6px 12px; border-radius:6px;"><i class="ri-award-fill me-1 text-warning"></i>NAAC ' . htmlspecialchars($val) . '</span>';
            case 'recruiters':
            case 'pills':
                $items = array_filter(array_map('trim', preg_split('/[|,]/', (string)$val)));
                if (!empty($items)) {
                    $out = '<div class="d-flex flex-wrap gap-1 justify-content-center">';
                    foreach ($items as $item) {
                        $out .= '<span class="badge" style="background:#f8fafc; color:#334155; border:1px solid #e2e8f0; font-size:12px; font-weight:600; padding:4px 9px; border-radius:4px; line-height:1.4;">' . htmlspecialchars($item) . '</span>';
                    }
                    $out .= '</div>';
                    return $out;
                }
                return htmlspecialchars((string)$val);

            default:
                return htmlspecialchars((string)$val);
        }
    }
}
if (!function_exists('dura_render_mobile_param_card')) {
    function dura_render_mobile_param_card(array $comparedUnis, string $title, string $sub, string $field, string $type = 'text', bool $isBlock = false): void
    {
?>
<div class="cs_mobile_param_card mb-3 p-3 rounded-3"
    style="background:#ffffff; border:1px solid #e2e8f0; box-shadow:0 2px 6px rgba(11,30,56,0.03);">
    <div class="d-flex align-items-center justify-content-between mb-2 pb-2 border-bottom">
        <span style="font-size:15px; font-weight:700; color:#0b1e38;">
            <?= htmlspecialchars($title); ?>
        </span>
        <?php if ($sub): ?>
        <span class="text-muted" style="font-size:12.5px; font-weight:500;"><?= htmlspecialchars($sub); ?></span>
        <?php endif; ?>
    </div>
    <div class="cs_mobile_param_list">
        <?php foreach ($comparedUnis as $cUni):
                    $val = $cUni[$field] ?? 'Not Available';
                    $rendered = dura_render_compare_cell($val, $type, true);
                ?>
        <?php if ($isBlock): ?>
        <div class="py-2 border-bottom border-light">
            <div class="d-flex align-items-center gap-2 mb-1">
                <img src="<?= htmlspecialchars($cUni['logo']); ?>" alt="Logo"
                    style="height:22px; max-width:65px; object-fit:contain; border-radius:3px; background:#f8fafc; border:1px solid #e2e8f0; padding:2px;">
                <strong style="font-size:14.5px; font-weight:700; color:#0b1e38;">
                    <?= htmlspecialchars($cUni['short_name'] ?? $cUni['name']); ?>
                </strong>
            </div>
            <div class="ps-1 mt-1" style="font-size:14px; line-height:1.5; color:#334155;">
                <?= $rendered; ?>
            </div>
        </div>
        <?php else: ?>
        <div class="d-flex align-items-center justify-content-between py-2 border-bottom border-light">
            <div class="d-flex align-items-center gap-2" style="max-width:52%;">
                <img src="<?= htmlspecialchars($cUni['logo']); ?>" alt="Logo"
                    style="height:22px; max-width:65px; object-fit:contain; border-radius:3px; background:#f8fafc; border:1px solid #e2e8f0; padding:2px;">
                <span style="font-size:14px; font-weight:700; color:#0b1e38; line-height:1.25;">
                    <?= htmlspecialchars($cUni['short_name'] ?? $cUni['name']); ?>
                </span>
            </div>
            <div class="text-end" style="max-width:48%; font-size:14px; color:#334155;">
                <?= $rendered; ?>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
<?php
    }
}
?>
<main>
    <!-- Start Page Header -->
    <section class="cs_page_header cs_bg_filed" data-src="assets/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="cs_page_header_text" data-aos="fade-up">
                <h1 class="cs_page_header_title cs_fs_48 cs_bold">Compare Online Universities</h1>
                <ul class="cs_breadcrumb cs_mp_0 cs_fs_16">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="universities.php">Universities</a></li>
                    <li>Comparison Selection</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Header -->

    <!-- Start Comparison Selection Review Section -->
    <section class="cs_section_padding">
        <div class="container">

            <!-- Comparison Context Header -->
            <div class="cs_comparison_status_box mb-5 p-4 rounded-4"
                style="background:#f8fafc; border:1px solid #e2e8f0;" data-aos="fade-up">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                    <div>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="badge"
                                style="background:#eff6ff; color:#2563eb; font-size:12px; font-weight:700; padding:6px 12px; border-radius:50px;">
                                <i class="ri-scales-3-line"></i> UNIVERSITY COMPARISON SELECTION
                            </span>
                        </div>
                        <h2 class="mb-1" style="font-size:26px; font-weight:700; color:#0b1e38;">
                            Comparing <?= count($selectedUnis); ?> of 3 Selected Universities
                        </h2>
                        <p class="text-muted mb-0" style="font-size:14.5px;">
                            Review your selected institutions below. Selection and course context are preserved.
                        </p>
                    </div>

                    <div class="d-flex flex-wrap gap-2">
                        <a href="universities.php<?= $selectedCourse ? '?course=' . urlencode($selectedCourse['id']) : ''; ?>"
                            class="cs_primary_btn" style="padding:10px 20px; font-size:14px; border-radius:8px;">
                            <span><?= count($selectedUnis) < 3 ? 'Add Another University' : 'Change Universities'; ?></span>
                        </a>
                        <button type="button" id="clearComparePageBtn" class="btn btn-outline-secondary"
                            style="padding:10px 18px; font-size:14px; border-radius:8px; font-weight:600;">
                            <i class="ri-refresh-line"></i> Reset
                        </button>
                    </div>
                </div>
            </div>

            <!-- Empty Selection Fallback -->
            <?php if (empty($selectedUnis)): ?>
            <div class="text-center py-5 my-4" data-aos="fade-up" id="emptyCompareNotice">
                <div
                    style="width:80px; height:80px; border-radius:50%; background:#eff6ff; color:#2563eb; display:inline-flex; align-items:center; justify-content:center; font-size:36px; margin-bottom:18px;">
                    <i class="ri-scales-3-line"></i>
                </div>
                <h3 style="font-size:24px; font-weight:700; color:#0b1e38;">No Universities Selected For Comparison</h3>
                <p class="text-muted mx-auto" style="max-width:540px; font-size:15px; margin-bottom:24px;">
                    Please select 2 or 3 universities from our accredited directory to compare them side by side.
                </p>
                <a href="universities.php" class="cs_primary_btn" style="padding:12px 28px; border-radius:50px;">
                    <span>Browse Universities &amp; Compare</span>
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
            <?php else: ?>
            <style>
            .cs_compare_matrix_box {
                background: #ffffff;
                border: 1px solid #e2e8f0;
                border-radius: 16px;
                overflow: hidden;
                box-shadow: 0 10px 30px rgba(11, 30, 56, 0.04);
            }

            .cs_compare_table th,
            .cs_compare_table td {
                padding: 14px 18px;
                vertical-align: middle;
                border-color: #e2e8f0;
            }

            .cs_compare_category_row {
                background: #f8fafc !important;
                border-top: 2px solid #cbd5e1;
                border-bottom: 2px solid #cbd5e1;
            }

            .cs_compare_category_title {
                font-size: 13.5px;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 0.6px;
                color: #0b1e38;
                margin: 0;
                display: flex;
                align-items: center;
                gap: 8px;
            }

            .cs_compare_attr_col {
                width: 25%;
                min-width: 210px;
                background: #fafbfd;
                font-weight: 600;
                color: #334155;
                font-size: 13.5px;
                border-right: 1px solid #e2e8f0;
            }

            .cs_compare_val_col {
                text-align: center;
                font-size: 13.5px;
                color: #1e293b;
                background: #ffffff;
                border-right: 1px solid #e2e8f0;
            }

            .cs_compare_table tbody tr:hover td {
                background-color: #fcfdfe;
            }

            .cs_compare_table tbody tr:hover .cs_compare_attr_col {
                background-color: #f1f5f9;
            }

            .cs_compare_sticky_header {
                position: sticky;
                top: 0;
                z-index: 5;
                background: #ffffff;
            }

            /* Responsive display control: desktop vs mobile */
            @media (max-width: 767.98px) {

                .cs_compare_desktop_cards,
                .cs_compare_matrix_box {
                    display: none !important;
                }

                .cs_compare_mobile_matrix {
                    display: block !important;
                }

                .cs_mobile_param_card {
                    border-radius: 12px !important;
                    border: 1px solid #e2e8f0 !important;
                }

                .cs_mobile_param_card:hover {
                    box-shadow: 0 4px 14px rgba(11, 30, 56, 0.06) !important;
                }

                .cs_mobile_param_list>div:last-child {
                    border-bottom: none !important;
                }

                /* satisfaction mobile label gap */
                .cs_mobile_param_card .cs_satisfaction_label {
                    margin-right: 8px !important;

                }
            }

            @media (min-width: 768px) {
                .cs_compare_desktop_cards {
                    display: flex !important;
                }

                .cs_compare_matrix_box {
                    display: block !important;
                }

                .cs_compare_mobile_matrix {
                    display: none !important;
                }
            }
            </style>

            <div class="mt-5" data-aos="fade-up">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                    <div>
                        <span class="badge"
                            style="background:#eff6ff; color:#2563eb; font-size:12px; font-weight:700; padding:6px 12px; border-radius:50px;">
                            <i class="ri-table-line"></i> OFFICIAL BENCHMARK MATRIX
                        </span>
                        <h3 style="font-size:24px; font-weight:700; color:#0b1e38; margin:8px 0 4px 0;">
                            Detailed Side-by-Side Parameter Comparison
                        </h3>
                        <p class="text-muted mb-0" style="font-size:14.5px;">
                            Compare fees, approvals, NAAC metrics, eligibility, placement records, and learning delivery
                            models.
                        </p>
                    </div>
                    <div class="d-flex align-items-center gap-2 d-none">
                        <button type="button" class="btn btn-outline-secondary btn-sm" onclick="window.print()"
                            style="padding:8px 16px; border-radius:6px; font-weight:600;">
                            <i class="ri-printer-line me-1"></i> Print / Save PDF
                        </button>
                    </div>
                </div>

                <!-- Desktop & Tablet Table Comparison View (>= 768px) -->
                <div class="cs_compare_matrix_box d-none d-md-block">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 cs_compare_table" style="min-width: 820px;">
                            <!-- Table Head: Institution Profiles -->
                            <thead>
                                <tr class="cs_compare_sticky_header">
                                    <th class="cs_compare_attr_col"
                                        style="vertical-align: bottom; background:#f8fafc; border-bottom: 2px solid #cbd5e1;">
                                        <span class="text-muted text-uppercase"
                                            style="font-size: 11px; letter-spacing: 0.8px; font-weight:700;">Evaluation
                                            Criteria</span>
                                        <h4
                                            style="font-size: 17px; font-weight: 700; color: #0b1e38; margin: 4px 0 0 0;">
                                            Parameters</h4>
                                    </th>
                                    <?php foreach ($comparedUnis as $uId => $cUni): ?>
                                    <th class="cs_compare_val_col"
                                        style="vertical-align: top; padding: 20px 16px; border-bottom: 2px solid #cbd5e1;">
                                        <div class="d-flex flex-column align-items-center">
                                            <div
                                                style="height: 50px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px;">
                                                <img src="<?= htmlspecialchars($cUni['logo']); ?>"
                                                    alt="<?= htmlspecialchars($cUni['name']); ?> Logo"
                                                    style="max-height: 46px; max-width: 170px; object-fit: contain;">
                                            </div>
                                            <h5
                                                style="font-size: 16px; font-weight: 700; color: #0b1e38; margin-bottom: 6px; line-height: 1.3;">
                                                <?= htmlspecialchars($cUni['short_name'] ?? $cUni['name']); ?>
                                            </h5>
                                            <span class="text-muted mb-3" style="font-size: 12.5px;">
                                                <?= htmlspecialchars($cUni['type']); ?>
                                            </span>
                                            <a href="<?= htmlspecialchars($cUni['slug']); ?>"
                                                class="btn btn-sm btn-outline-primary w-100"
                                                style="font-size: 12.5px; font-weight: 600; padding: 6px 12px; border-radius: 6px;">
                                                View Full Profile <i class="ri-arrow-right-line ms-1"></i>
                                            </a>
                                        </div>
                                    </th>
                                    <?php endforeach; ?>
                                </tr>
                            </thead>

                            <tbody>
                                <!-- SECTION 1: FEE STRUCTURE & AFFORDABILITY -->
                                <tr class="cs_compare_category_row">
                                    <td colspan="<?= count($comparedUnis) + 1; ?>">
                                        <div class="cs_compare_category_title">
                                            <i class="ri-money-rupee-circle-line text-primary"
                                                style="font-size:18px;"></i>
                                            <span>1. Fee Structure &amp; Affordability</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">
                                        Semester Fee (INR)
                                        <div class="text-muted fw-normal" style="font-size:11.5px;">Per semester tuition
                                            installment</div>
                                    </td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <?= dura_render_compare_cell($cUni['semester_fee'], 'currency'); ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">
                                        Total 2-Year Program Fee
                                        <div class="text-muted fw-normal" style="font-size:11.5px;">Standard 2-year
                                            total tuition</div>
                                    </td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <?= dura_render_compare_cell($cUni['total_two_year_fee'], 'currency'); ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <?php if ($selectedCourse): ?>
                                <tr style="background:#fefce8;">
                                    <td class="cs_compare_attr_col" style="background:#fef9c3;">
                                        <span class="badge"
                                            style="background:#fef08a; color:#854d0e; font-size:10.5px; padding:2px 6px; border-radius:4px; margin-bottom:4px; display:inline-block;">Selected
                                            Program</span>
                                        <div><?= htmlspecialchars($selectedCourse['title']); ?> Fee</div>
                                    </td>
                                    <?php foreach ($comparedUnis as $cUni):
                                                $cDetails = $cUni['course_details'][$selectedCourse['id']] ?? null;
                                                $cFee = $cDetails['fee'] ?? 'Not Available';
                                            ?>
                                    <td class="cs_compare_val_col" style="background:#fefce8;">
                                        <strong style="color:#b45309; font-size:14.5px;">
                                            <?= htmlspecialchars($cFee); ?>
                                        </strong>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <?php endif; ?>
                                <tr>
                                    <td class="cs_compare_attr_col">EMI Facility Available</td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <?= dura_render_compare_cell($cUni['emi_available'], 'boolean'); ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">Average Fee Range</td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <?= dura_render_compare_cell($cUni['avg_fee_range'], 'text'); ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>

                                <!-- SECTION 2: ACCREDITATIONS & RECOGNITIONS -->
                                <tr class="cs_compare_category_row">
                                    <td colspan="<?= count($comparedUnis) + 1; ?>">
                                        <div class="cs_compare_category_title">
                                            <i class="ri-shield-check-line text-primary" style="font-size:18px;"></i>
                                            <span>2. Accreditations, Rankings &amp; Approvals</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">
                                        NAAC Grade
                                        <div class="text-muted fw-normal" style="font-size:11.5px;">National Assessment
                                            &amp; Accreditation</div>
                                    </td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <?= dura_render_compare_cell($cUni['naac_grade'], 'grade'); ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">NAAC Cumulative Score</td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <strong class="text-dark"><?= htmlspecialchars($cUni['naac_score']); ?></strong>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">
                                        NIRF Ranking
                                        <div class="text-muted fw-normal" style="font-size:11.5px;">Ministry of
                                            Education, Govt. of India</div>
                                    </td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <?= dura_render_compare_cell($cUni['nirf_ranking'], 'text'); ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">Approvals &amp; Recognitions</td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <?= dura_render_compare_cell($cUni['approvals'], 'pills'); ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">
                                        WES (International) Approval
                                        <div class="text-muted fw-normal" style="font-size:11.5px;">For global
                                            credential evaluation &amp; migration</div>
                                    </td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <?= dura_render_compare_cell($cUni['wes_approval'], 'boolean'); ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">UGC-DEB Entitled</td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <?= dura_render_compare_cell($cUni['ugc_entitled'], 'boolean'); ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>

                                <!-- SECTION 3: ACADEMICS & ELIGIBILITY -->
                                <tr class="cs_compare_category_row">
                                    <td colspan="<?= count($comparedUnis) + 1; ?>">
                                        <div class="cs_compare_category_title">
                                            <i class="ri-book-open-line text-primary" style="font-size:18px;"></i>
                                            <span>3. Academics, Eligibility &amp; Pedagogy</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">Eligibility Criteria</td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col" style="font-size:13px; line-height:1.45;">
                                        <?= dura_render_compare_cell($cUni['eligibility'], 'text'); ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">Total Credit Points</td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <span class="badge"
                                            style="background:#eff6ff; color:#1e40af; font-size:13px; font-weight:700; padding:4px 10px; border-radius:6px;">
                                            <?= htmlspecialchars($cUni['credit_points']); ?> Credits
                                        </span>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">Standard Duration</td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <strong class="text-dark"><?= htmlspecialchars($cUni['duration']); ?></strong>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">Education Mode</td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <span class="badge"
                                            style="background:#f0fdf4; color:#15803d; border:1px solid #bbf7d0; font-size:12px; font-weight:600; padding:4px 10px; border-radius:50px;">
                                            <i
                                                class="ri-wifi-line me-1"></i><?= htmlspecialchars($cUni['education_mode']); ?>
                                        </span>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">Online Live / Recorded Classes</td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <?= dura_render_compare_cell($cUni['online_classes'], 'boolean'); ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">E-Learning Facility / LMS</td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <?= dura_render_compare_cell($cUni['elearning_facility'], 'boolean'); ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">Industry Ready Curriculum</td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <?= dura_render_compare_cell($cUni['industry_ready_curriculum'], 'boolean'); ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>

                                <!-- SECTION 4: PLACEMENTS & CAREER SUPPORT -->
                                <tr class="cs_compare_category_row">
                                    <td colspan="<?= count($comparedUnis) + 1; ?>">
                                        <div class="cs_compare_category_title">
                                            <i class="ri-briefcase-line text-primary" style="font-size:18px;"></i>
                                            <span>4. Placements &amp; Career Support</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">Placement Assistance</td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <?= dura_render_compare_cell($cUni['placement_assistance'], 'boolean'); ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">
                                        Top Recruiting Partners
                                        <div class="text-muted fw-normal" style="font-size:11.5px;">Corporate hiring
                                            network</div>
                                    </td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <?= dura_render_compare_cell($cUni['top_recruiters'], 'recruiters'); ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">Alumni Status / Network</td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <?= dura_render_compare_cell($cUni['alumni_status'], 'text'); ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>

                                <!-- SECTION 5: UNIVERSITY STANDING & INSIGHTS -->
                                <tr class="cs_compare_category_row">
                                    <td colspan="<?= count($comparedUnis) + 1; ?>">
                                        <div class="cs_compare_category_title">
                                            <i class="ri-building-line text-primary" style="font-size:18px;"></i>
                                            <span>5. University Standing &amp; Student Insights</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">Key Highlights / Distinct Pros</td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col"
                                        style="font-size:13px; line-height:1.45; text-align:left;">
                                        <div class="p-2 rounded-3"
                                            style="background:#f8fafc; border:1px solid #e2e8f0;">
                                            <i class="ri-star-line text-warning me-1"></i>
                                            <?= dura_render_compare_cell($cUni['pros'], 'text'); ?>
                                        </div>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">Student Satisfaction Score</td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <?= dura_render_compare_cell($cUni['satisfied_students'], 'satisfaction'); ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">
                                        Monthly Student Visitors
                                        <div class="text-muted fw-normal" style="font-size:11.5px;">Portal web
                                            engagement</div>
                                    </td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <strong
                                            class="text-dark"><?= htmlspecialchars($cUni['students_visited']); ?></strong>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">Year of Establishment</td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <span class="badge"
                                            style="background:#f1f5f9; color:#334155; font-size:13px; font-weight:700; padding:4px 10px; border-radius:4px;">
                                            <?= htmlspecialchars($cUni['established_year']); ?>
                                        </span>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>
                                <tr>
                                    <td class="cs_compare_attr_col">Institution Category</td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col">
                                        <?= htmlspecialchars($cUni['type']); ?>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>

                                <!-- ACTION ROW: EXPLORE / APPLY -->
                                <tr style="background:#f8fafc; border-top:2px solid #cbd5e1;">
                                    <td class="cs_compare_attr_col" style="background:#f8fafc; vertical-align:middle;">
                                        <strong style="color:#0b1e38; font-size:14px;">Explore Further</strong>
                                        <div class="text-muted fw-normal" style="font-size:12px;">Visit university page
                                        </div>
                                    </td>
                                    <?php foreach ($comparedUnis as $cUni): ?>
                                    <td class="cs_compare_val_col" style="padding:16px;">
                                        <a href="<?= htmlspecialchars($cUni['slug']); ?>" class="btn btn-primary w-100"
                                            style="background:#2563eb; border:none; padding:9px 16px; font-size:13.5px; font-weight:600; border-radius:6px;">
                                            Explore <?= htmlspecialchars($cUni['short_name'] ?? $cUni['name']); ?>
                                            <i class="ri-arrow-right-line ms-1"></i>
                                        </a>
                                    </td>
                                    <?php endforeach; ?>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Mobile-Friendly Vertical Comparison Layout (< 768px) Inspired by College Vidya UX -->
                <div class="cs_compare_mobile_matrix d-block d-md-none">

                    <!-- Mobile Pinned Selected Universities Top Strip -->
                    <div class="cs_mobile_compare_top_bar mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="badge"
                                style="background:#eff6ff; color:#2563eb; font-size:12.5px; font-weight:700; padding:6px 12px; border-radius:50px;">
                                <i class="ri-scales-3-line"></i> <?= count($comparedUnis); ?> Universities Selected
                            </span>
                            <span class="text-muted" style="font-size:12.5px; font-weight:500;">Side-by-side attributes
                                below</span>
                        </div>

                        <div
                            style="display:grid; grid-template-columns: repeat(<?= count($comparedUnis); ?>, 1fr); gap:10px;">
                            <?php foreach ($comparedUnis as $cUni): ?>
                            <div class="p-2 rounded-3 text-center d-flex flex-column justify-content-between"
                                style="background:#ffffff; border:1.5px solid #2563eb; box-shadow:0 3px 10px rgba(37,99,235,0.06); position:relative;">
                                <button type="button" class="btn btn-sm text-danger remove-page-uni-btn p-0"
                                    data-id="<?= htmlspecialchars($cUni['id']); ?>"
                                    style="position:absolute; top:4px; right:6px; font-size:14px; line-height:1;"
                                    title="Remove university">
                                    <i class="ri-close-circle-fill"></i>
                                </button>
                                <div
                                    style="height:38px; display:flex; align-items:center; justify-content:center; margin-bottom:6px; margin-top:6px;">
                                    <img src="<?= htmlspecialchars($cUni['logo']); ?>"
                                        alt="<?= htmlspecialchars($cUni['name']); ?>"
                                        style="max-height:32px; max-width:92%; object-fit:contain;">
                                </div>
                                <div
                                    style="font-size:13.5px; font-weight:700; color:#0b1e38; line-height:1.25; margin-bottom:6px; min-height:34px; overflow:hidden; text-overflow:ellipsis; display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical;">
                                    <?= htmlspecialchars($cUni['short_name'] ?? $cUni['name']); ?>
                                </div>
                                <a href="<?= htmlspecialchars($cUni['slug']); ?>"
                                    class="btn btn-sm btn-outline-primary py-1 px-1 w-100"
                                    style="font-size:12px; font-weight:600; border-radius:4px; line-height:1.4;">
                                    Profile <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- CATEGORY 1: FEE STRUCTURE & AFFORDABILITY -->
                    <div class="cs_mobile_category_banner mb-3 p-3 rounded-3"
                        style="background:#f1f5f9; border-left:4px solid #2563eb;">
                        <h4
                            style="font-size:14.5px; font-weight:700; text-transform:uppercase; letter-spacing:0.5px; color:#0b1e38; margin:0; display:flex; align-items:center; gap:8px;">
                            <i class="ri-money-rupee-circle-line text-primary" style="font-size:18px;"></i>
                            <span>1. Fee Structure &amp; Affordability</span>
                        </h4>
                    </div>

                    <?php dura_render_mobile_param_card($comparedUnis, 'Semester Fee (INR)', 'Per semester tuition', 'semester_fee', 'currency'); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'Total 2-Year Program Fee', 'Standard total tuition', 'total_two_year_fee', 'currency'); ?>

                    <?php if ($selectedCourse): ?>
                    <div class="cs_mobile_param_card mb-3 p-3 rounded-3"
                        style="background:#fefce8; border:1.5px solid #fef08a; box-shadow:0 2px 8px rgba(180,83,9,0.05);">
                        <div class="d-flex align-items-center justify-content-between mb-2 pb-2 border-bottom"
                            style="border-color:#fef08a !important;">
                            <span style="font-size:14.5px; font-weight:700; color:#854d0e;">
                                <i class="ri-book-open-line me-1"></i>
                                <?= htmlspecialchars($selectedCourse['title']); ?> Fee
                            </span>
                            <span class="badge"
                                style="background:#fef08a; color:#854d0e; font-size:11.5px; font-weight:700; padding:4px 8px; border-radius:4px;">Selected
                                Program</span>
                        </div>
                        <div class="cs_mobile_param_list">
                            <?php foreach ($comparedUnis as $cUni):
                                        $cDetails = $cUni['course_details'][$selectedCourse['id']] ?? null;
                                        $cFee = $cDetails['fee'] ?? 'Not Available';
                                    ?>
                            <div
                                class="d-flex align-items-center justify-content-between py-2 border-bottom border-light">
                                <div class="d-flex align-items-center gap-2" style="max-width:52%;">
                                    <img src="<?= htmlspecialchars($cUni['logo']); ?>" alt="Logo"
                                        style="height:22px; max-width:65px; object-fit:contain; border-radius:3px; background:#ffffff; border:1px solid #e2e8f0; padding:2px;">
                                    <span style="font-size:14px; font-weight:700; color:#1e293b; line-height:1.25;">
                                        <?= htmlspecialchars($cUni['short_name'] ?? $cUni['name']); ?>
                                    </span>
                                </div>
                                <div class="text-end" style="max-width:48%;">
                                    <strong
                                        style="color:#b45309; font-size:15px;"><?= htmlspecialchars($cFee); ?></strong>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php dura_render_mobile_param_card($comparedUnis, 'EMI Facility Available', '', 'emi_available', 'boolean'); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'Average Fee Range', '', 'avg_fee_range', 'text'); ?>

                    <!-- CATEGORY 2: ACCREDITATIONS & RECOGNITIONS -->
                    <div class="cs_mobile_category_banner mt-4 mb-3 p-3 rounded-3"
                        style="background:#f1f5f9; border-left:4px solid #2563eb;">
                        <h4
                            style="font-size:14.5px; font-weight:700; text-transform:uppercase; letter-spacing:0.5px; color:#0b1e38; margin:0; display:flex; align-items:center; gap:8px;">
                            <i class="ri-shield-check-line text-primary" style="font-size:18px;"></i>
                            <span>2. Accreditations &amp; Recognitions</span>
                        </h4>
                    </div>

                    <?php dura_render_mobile_param_card($comparedUnis, 'NAAC Grade', 'Accreditation', 'naac_grade', 'grade'); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'NAAC Cumulative Score', '', 'naac_score', 'text'); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'NIRF Ranking', 'Govt of India', 'nirf_ranking', 'text'); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'Approvals & Recognitions', 'Regulatory bodies', 'approvals', 'pills', true); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'WES (International) Approval', 'Global evaluation', 'wes_approval', 'boolean'); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'UGC-DEB Entitled', '', 'ugc_entitled', 'boolean'); ?>

                    <!-- CATEGORY 3: ACADEMICS & ELIGIBILITY -->
                    <div class="cs_mobile_category_banner mt-4 mb-3 p-3 rounded-3"
                        style="background:#f1f5f9; border-left:4px solid #2563eb;">
                        <h4
                            style="font-size:14.5px; font-weight:700; text-transform:uppercase; letter-spacing:0.5px; color:#0b1e38; margin:0; display:flex; align-items:center; gap:8px;">
                            <i class="ri-book-open-line text-primary" style="font-size:18px;"></i>
                            <span>3. Academics &amp; Pedagogy</span>
                        </h4>
                    </div>

                    <?php dura_render_mobile_param_card($comparedUnis, 'Eligibility Criteria', '', 'eligibility', 'text', true); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'Total Credit Points', '', 'credit_points', 'text'); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'Standard Duration', '', 'duration', 'text'); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'Education Mode', '', 'education_mode', 'text'); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'Online Live / Recorded Classes', '', 'online_classes', 'boolean'); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'E-Learning Facility / LMS', '', 'elearning_facility', 'boolean'); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'Industry Ready Curriculum', '', 'industry_ready_curriculum', 'boolean'); ?>

                    <!-- CATEGORY 4: PLACEMENTS & CAREER SUPPORT -->
                    <div class="cs_mobile_category_banner mt-4 mb-3 p-3 rounded-3"
                        style="background:#f1f5f9; border-left:4px solid #2563eb;">
                        <h4
                            style="font-size:14.5px; font-weight:700; text-transform:uppercase; letter-spacing:0.5px; color:#0b1e38; margin:0; display:flex; align-items:center; gap:8px;">
                            <i class="ri-briefcase-line text-primary" style="font-size:18px;"></i>
                            <span>4. Placements &amp; Career Support</span>
                        </h4>
                    </div>

                    <?php dura_render_mobile_param_card($comparedUnis, 'Placement Assistance', '', 'placement_assistance', 'boolean'); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'Top Recruiting Partners', 'Hiring network', 'top_recruiters', 'recruiters', true); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'Alumni Status / Network', '', 'alumni_status', 'text'); ?>

                    <!-- CATEGORY 5: UNIVERSITY STANDING & INSIGHTS -->
                    <div class="cs_mobile_category_banner mt-4 mb-3 p-3 rounded-3"
                        style="background:#f1f5f9; border-left:4px solid #2563eb;">
                        <h4
                            style="font-size:14.5px; font-weight:700; text-transform:uppercase; letter-spacing:0.5px; color:#0b1e38; margin:0; display:flex; align-items:center; gap:8px;">
                            <i class="ri-building-line text-primary" style="font-size:18px;"></i>
                            <span>5. Standing &amp; Student Insights</span>
                        </h4>
                    </div>

                    <?php dura_render_mobile_param_card($comparedUnis, 'Key Highlights / Distinct Pros', '', 'pros', 'text', true); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'Student Satisfaction Score', '', 'satisfied_students', 'satisfaction'); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'Monthly Student Visitors', '', 'students_visited', 'text'); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'Year of Establishment', '', 'established_year', 'text'); ?>
                    <?php dura_render_mobile_param_card($comparedUnis, 'Institution Category', '', 'type', 'text'); ?>

                    <!-- Mobile Action Buttons -->
                    <div class="cs_mobile_actions mt-4 p-3 rounded-3"
                        style="background:#ffffff; border:1px solid #e2e8f0; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
                        <h5
                            style="font-size:14.5px; font-weight:700; color:#0b1e38; margin-bottom:12px; text-align:center;">
                            Explore Universities Profiles
                        </h5>
                        <div class="d-flex flex-column gap-2">
                            <?php foreach ($comparedUnis as $cUni): ?>
                            <a href="<?= htmlspecialchars($cUni['slug']); ?>"
                                class="btn btn-primary d-flex align-items-center justify-content-between py-2 px-3 rounded-3"
                                style="background:#2563eb; border:none; font-size:14px; font-weight:600;">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="<?= htmlspecialchars($cUni['logo']); ?>" alt="Logo"
                                        style="height:22px; max-width:65px; object-fit:contain; background:#ffffff; border-radius:3px; padding:2px;">
                                    <span>Explore <?= htmlspecialchars($cUni['short_name'] ?? $cUni['name']); ?></span>
                                </div>
                                <i class="ri-arrow-right-line"></i>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- End Mobile-Friendly Vertical Comparison Layout -->
            </div>

            <!-- Guidance & Free Consultation Callout -->
            <div class="cs_comparison_counseling_box mt-5 p-4 p-md-5 rounded-4 text-white"
                style="background: linear-gradient(135deg, #0b1e38 0%, #1e3a8a 100%); position:relative; overflow:hidden;"
                data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <span class="badge mb-2"
                            style="background:rgba(255,255,255,0.15); color:#fef08a; font-size:12px; font-weight:700; padding:6px 14px; border-radius:50px; letter-spacing:0.5px;">
                            <i class="ri-customer-service-2-line me-1"></i> FREE UNBIASED COUNSELLING
                        </span>
                        <h3 class="text-white mb-2" style="font-size:26px; font-weight:700;">
                            Still Confused About Which University Fits You Best?
                        </h3>
                        <p class="text-white-50 mb-0" style="font-size:15px; max-width:680px; line-height:1.6;">
                            Our senior academic counsellors provide 1-on-1 personalized guidance on program approvals,
                            fee installment plans, scholarship eligibility, and placement tracks at zero cost.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="contact.php" class="btn"
                            style="background:#f59e0b; color:#0b1e38; font-weight:700; font-size:15px; padding:12px 28px; border-radius:8px; box-shadow:0 8px 20px rgba(245,158,11,0.3); transition:all 0.3s ease;">
                            <i class="ri-phone-line me-1"></i> Talk to a Counsellor
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Detailed Side-by-Side Comparison Matrix -->
            <?php endif; ?>

        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Check if URL has no unis, but localStorage has some -> auto-redirect with params
    const urlParams = new URLSearchParams(window.location.search);
    const hasParamUnis = urlParams.get('unis');

    if (!hasParamUnis) {
        try {
            const rawStored = localStorage.getItem('durasetu_compare_unis');
            const storedUnis = rawStored ? JSON.parse(rawStored) : [];
            const rawCourse = localStorage.getItem('durasetu_compare_course');
            const storedCourse = rawCourse ? JSON.parse(rawCourse) : null;

            if (storedUnis && storedUnis.length >= 2) {
                const ids = storedUnis.map(u => encodeURIComponent(u.id)).join(',');
                let redirectUrl = `compare.php?unis=${ids}`;
                if (storedCourse && storedCourse.id) {
                    redirectUrl += `&course=${encodeURIComponent(storedCourse.id)}`;
                }
                window.location.replace(redirectUrl);
                return;
            }
        } catch (e) {
            console.error('Storage check failed', e);
        }
    }

    // Handle removing university from compare page
    document.querySelectorAll('.remove-page-uni-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            if (!id) return;

            try {
                const rawStored = localStorage.getItem('durasetu_compare_unis');
                let storedUnis = rawStored ? JSON.parse(rawStored) : [];
                storedUnis = storedUnis.filter(u => u.id !== id);
                localStorage.setItem('durasetu_compare_unis', JSON.stringify(storedUnis));

                // Re-calculate URL
                const rawCourse = localStorage.getItem('durasetu_compare_course');
                const storedCourse = rawCourse ? JSON.parse(rawCourse) : null;

                if (storedUnis.length > 0) {
                    const ids = storedUnis.map(u => encodeURIComponent(u.id)).join(',');
                    let targetUrl = `compare.php?unis=${ids}`;
                    if (storedCourse && storedCourse.id) {
                        targetUrl += `&course=${encodeURIComponent(storedCourse.id)}`;
                    }
                    window.location.href = targetUrl;
                } else {
                    window.location.href = 'universities.php';
                }
            } catch (e) {
                console.error(e);
            }
        });
    });

    // Reset selection button
    const clearBtn = document.getElementById('clearComparePageBtn');
    if (clearBtn) {
        clearBtn.addEventListener('click', function() {
            localStorage.removeItem('durasetu_compare_unis');
            window.location.href = 'universities.php';
        });
    }
});
</script>

<?php
$content = ob_get_clean();
require 'layout.php';
?>