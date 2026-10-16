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
            <div class="cs_comparison_status_box mb-5 p-4 rounded-4" style="background:#f8fafc; border:1px solid #e2e8f0;" data-aos="fade-up">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                    <div>
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="badge" style="background:#eff6ff; color:#2563eb; font-size:12px; font-weight:700; padding:6px 12px; border-radius:50px;">
                                <i class="ri-scales-3-line"></i> UNIVERSITY COMPARISON SELECTION
                            </span>
                            <?php if ($selectedCourse): ?>
                                <span class="badge" style="background:#fef3c7; color:#92400e; font-size:12px; font-weight:700; padding:6px 12px; border-radius:50px;">
                                    <i class="ri-book-open-line"></i> Program: <?= htmlspecialchars($selectedCourse['title']); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                        <h2 class="mb-1" style="font-size:26px; font-weight:700; color:#0b1e38;">
                            Comparing <?= count($selectedUnis); ?> of 3 Selected Universities
                        </h2>
                        <p class="text-muted mb-0" style="font-size:14.5px;">
                            Review your selected institutions below. Selection and course context are preserved.
                        </p>
                    </div>

                    <div class="d-flex flex-wrap gap-2">
                        <a href="universities.php<?= $selectedCourse ? '?course=' . urlencode($selectedCourse['id']) : ''; ?>" class="cs_primary_btn" style="padding:10px 20px; font-size:14px; border-radius:8px;">
                            <i class="ri-add-line"></i>
                            <span><?= count($selectedUnis) < 3 ? 'Add Another University' : 'Change Universities'; ?></span>
                        </a>
                        <button type="button" id="clearComparePageBtn" class="btn btn-outline-secondary" style="padding:10px 18px; font-size:14px; border-radius:8px; font-weight:600;">
                            <i class="ri-refresh-line"></i> Reset Selection
                        </button>
                    </div>
                </div>
            </div>

            <!-- Empty Selection Fallback -->
            <?php if (empty($selectedUnis)): ?>
                <div class="text-center py-5 my-4" data-aos="fade-up" id="emptyCompareNotice">
                    <div style="width:80px; height:80px; border-radius:50%; background:#eff6ff; color:#2563eb; display:inline-flex; align-items:center; justify-content:center; font-size:36px; margin-bottom:18px;">
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
                <!-- Selected University Cards Grid -->
                <div class="row g-4 justify-content-center" data-aos="fade-up">
                    <?php foreach ($selectedUnis as $uId => $uni): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="h-100 p-4 rounded-4 d-flex flex-column" style="background:#ffffff; border:2px solid #2563eb; box-shadow:0 10px 25px rgba(37,99,235,0.08); position:relative;">
                                
                                <span style="position:absolute; top:14px; right:14px; background:#eff6ff; color:#2563eb; font-size:11px; font-weight:700; padding:3px 9px; border-radius:50px;">
                                    <i class="ri-checkbox-circle-fill"></i> Selected
                                </span>

                                <div class="mb-3" style="height:50px; display:flex; align-items:center;">
                                    <img src="<?= htmlspecialchars($uni['logo']); ?>" alt="<?= htmlspecialchars($uni['name']); ?> Logo" style="max-height:46px; max-width:180px; object-fit:contain;">
                                </div>

                                <h3 style="font-size:19px; font-weight:700; color:#0b1e38; margin-bottom:6px;">
                                    <?= htmlspecialchars($uni['name']); ?>
                                </h3>

                                <p style="font-size:13.5px; color:#64748b; line-height:1.5; margin-bottom:16px;">
                                    <?= htmlspecialchars(substr($uni['hero_desc'], 0, 110)) . '...'; ?>
                                </p>

                                <div class="p-3 rounded-3 mb-3" style="background:#f8fafc; border:1px solid #e2e8f0; font-size:13px;">
                                    <div class="d-flex justify-content-between py-1 border-bottom">
                                        <span class="text-muted">Type:</span>
                                        <strong class="text-dark"><?= htmlspecialchars($uni['overview']['type'] ?? 'Not Available'); ?></strong>
                                    </div>
                                    <div class="d-flex justify-content-between py-1 border-bottom">
                                        <span class="text-muted">Accreditation:</span>
                                        <strong class="text-primary"><?= htmlspecialchars($uni['overview']['accreditation'] ?? 'Not Available'); ?></strong>
                                    </div>
                                    <div class="d-flex justify-content-between py-1 border-bottom">
                                        <span class="text-muted">Recognition:</span>
                                        <strong class="text-dark"><?= htmlspecialchars($uni['overview']['recognition'] ?? 'UGC-DEB'); ?></strong>
                                    </div>
                                    <?php if ($selectedCourse && isset($uni['course_details'][$selectedCourse['id']])): 
                                        $cd = $uni['course_details'][$selectedCourse['id']];
                                    ?>
                                        <div class="d-flex justify-content-between py-1 border-bottom">
                                            <span class="text-muted"><?= htmlspecialchars($selectedCourse['title']); ?> Fee:</span>
                                            <strong class="text-success"><?= htmlspecialchars($cd['fee'] ?? 'Not Available'); ?></strong>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="mt-auto d-flex gap-2">
                                    <a href="<?= htmlspecialchars($uni['slug']); ?>" class="btn btn-sm btn-outline-primary flex-grow-1" style="font-weight:600; padding:8px 12px; border-radius:6px;">
                                        View Details
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-danger remove-page-uni-btn" data-id="<?= htmlspecialchars($uni['id']); ?>" style="padding:8px 12px; border-radius:6px;" title="Remove this university">
                                        <i class="ri-delete-bin-line"></i> Remove
                                    </button>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Next Step Notice -->
                <div class="mt-5 p-4 rounded-4 text-center" style="background:#eff6ff; border:1px dashed #93c5fd;" data-aos="fade-up">
                    <i class="ri-information-line text-primary" style="font-size:24px;"></i>
                    <h4 class="mt-2 mb-1" style="font-size:17px; font-weight:700; color:#1e3a8a;">
                        University Comparison Flow Confirmed
                    </h4>
                    <p class="text-muted mb-0" style="font-size:14px; max-width:680px; margin:0 auto;">
                        Selection of universities and program context are actively synced with your browser. The detailed side-by-side attribute comparison matrix will be integrated in the next step.
                    </p>
                </div>
            <?php endif; ?>

        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
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
        btn.addEventListener('click', function () {
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
        clearBtn.addEventListener('click', function () {
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

