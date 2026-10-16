<?php
/**
 * DuraSetu Sticky Comparison Bar & Comparison State Manager
 * 
 * Manages university selection for comparison (max 3), course context,
 * sticky bottom comparison drawer, and toast alerts.
 */
?>

<!-- Sticky Bottom Comparison Bar -->
<div id="csStickyCompareBar" class="cs_sticky_compare_bar" aria-live="polite">
    <div class="container">
        <div class="cs_compare_bar_inner">
            
            <!-- Left Info & Course Context -->
            <div class="cs_compare_bar_info">
                <div class="cs_compare_bar_title_row">
                    <span class="cs_compare_icon_wrap">
                        <i class="ri-scales-3-line"></i>
                    </span>
                    <div class="cs_compare_title_text">
                        <strong class="cs_compare_heading">Compare Universities</strong>
                        <span id="csCompareCountPill" class="cs_compare_count_pill">0/3 Selected</span>
                    </div>
                </div>

                <div id="csCompareCourseChip" class="cs_compare_course_chip" style="display: none;">
                    <i class="ri-book-open-line"></i>
                    <span id="csCompareCourseName">Online MBA</span>
                    <button type="button" id="csClearCourseContextBtn" class="cs_chip_remove" title="Remove course context" aria-label="Remove course context">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
            </div>

            <!-- Middle: 3 Slots -->
            <div class="cs_compare_slots_container">
                <div class="cs_compare_slot" id="csCompareSlot0" data-slot="0">
                    <div class="cs_slot_placeholder">
                        <i class="ri-add-line"></i>
                        <span>Add University</span>
                    </div>
                </div>
                <div class="cs_compare_slot" id="csCompareSlot1" data-slot="1">
                    <div class="cs_slot_placeholder">
                        <i class="ri-add-line"></i>
                        <span>Add University</span>
                    </div>
                </div>
                <div class="cs_compare_slot" id="csCompareSlot2" data-slot="2">
                    <div class="cs_slot_placeholder">
                        <i class="ri-add-line"></i>
                        <span>Add University</span>
                    </div>
                </div>
            </div>

            <!-- Right Actions -->
            <div class="cs_compare_bar_actions">
                <button type="button" id="csClearAllCompareBtn" class="cs_compare_clear_link">
                    Clear All
                </button>
                <a id="csCompareNowBtn" href="compare.php" class="cs_compare_now_btn disabled" aria-disabled="true">
                    <span>Compare Now</span>
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>

        </div>
    </div>
</div>

<!-- Floating Toast Notification -->
<div id="csCompareToast" class="cs_compare_toast" role="alert" aria-live="assertive">
    <div class="cs_toast_inner">
        <i class="ri-information-fill cs_toast_icon"></i>
        <span id="csCompareToastMsg">You can compare up to 3 universities.</span>
        <button type="button" class="cs_toast_close" onclick="DuraCompare.hideToast()" aria-label="Close message">
            <i class="ri-close-line"></i>
        </button>
    </div>
</div>

<style>
/* ==========================================================================
   University Comparison Bar & Card Action Styles
   Scoped, unobtrusive, fully responsive
   ========================================================================== */

/* Card Selection State */
.cs_uni_card {
    position: relative;
    transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease !important;
}

.cs_uni_card.cs_is_selected {
    border-color: #2563eb !important;
    background: #f8fbff !important;
    box-shadow: 0 10px 25px rgba(37, 99, 235, 0.12) !important;
}

.cs_selected_ribbon {
    position: absolute;
    top: 12px;
    right: 12px;
    background: #2563eb;
    color: #ffffff;
    font-size: 11px;
    font-weight: 700;
    padding: 3px 8px;
    border-radius: 50px;
    display: inline-flex;
    align-items: center;
    gap: 4px;
    z-index: 3;
    box-shadow: 0 2px 6px rgba(37, 99, 235, 0.3);
}

/* Compare Button inside Card */
.cs_compare_btn {
    border: 1px solid #cbd5e1;
    background: #f8fafc;
    color: #334155;
    font-size: 13px;
    font-weight: 600;
    padding: 9px 13px;
    border-radius: 8px;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    white-space: nowrap;
    transition: all 0.2s ease;
}

.cs_compare_btn:hover {
    background: #e2e8f0;
    color: #0f172a;
    border-color: #94a3b8;
}

.cs_compare_btn.cs_btn_selected {
    background: #2563eb !important;
    color: #ffffff !important;
    border-color: #2563eb !important;
    box-shadow: 0 2px 8px rgba(37, 99, 235, 0.25);
}

.cs_compare_btn.cs_btn_selected:hover {
    background: #1d4ed8 !important;
    border-color: #1d4ed8 !important;
}

/* Sticky Bottom Compare Bar */
.cs_sticky_compare_bar {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background: #ffffff;
    border-top: 1px solid #e2e8f0;
    box-shadow: 0 -8px 24px rgba(15, 23, 42, 0.12);
    z-index: 1040;
    transform: translateY(110%);
    opacity: 0;
    visibility: hidden;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.3s ease, visibility 0.3s;
    padding: 12px 0;
}

.cs_sticky_compare_bar.cs_bar_visible {
    transform: translateY(0);
    opacity: 1;
    visibility: visible;
}

.cs_compare_bar_inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
}

/* Bar Left Info */
.cs_compare_bar_info {
    display: flex;
    flex-direction: column;
    gap: 4px;
    min-width: 175px;
}

.cs_compare_bar_title_row {
    display: flex;
    align-items: center;
    gap: 8px;
}

.cs_compare_icon_wrap {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    background: #eff6ff;
    color: #2563eb;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
}

.cs_compare_title_text {
    display: flex;
    flex-direction: column;
}

.cs_compare_heading {
    font-size: 14px;
    font-weight: 700;
    color: #0f172a;
    line-height: 1.2;
}

.cs_compare_count_pill {
    font-size: 11.5px;
    font-weight: 600;
    color: #2563eb;
}

.cs_compare_course_chip {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: #f1f5f9;
    color: #0f172a;
    font-size: 11.5px;
    font-weight: 600;
    padding: 2px 8px;
    border-radius: 4px;
    border: 1px solid #e2e8f0;
    max-width: 180px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.cs_compare_course_chip i {
    color: #2563eb;
    font-size: 13px;
}

.cs_chip_remove {
    background: transparent;
    border: none;
    color: #64748b;
    padding: 0;
    margin-left: 2px;
    cursor: pointer;
    font-size: 13px;
    display: inline-flex;
    align-items: center;
}

.cs_chip_remove:hover {
    color: #ef4444;
}

/* Slots */
.cs_compare_slots_container {
    display: flex;
    align-items: center;
    gap: 12px;
    flex: 1;
    max-width: 600px;
}

.cs_compare_slot {
    flex: 1;
    min-width: 120px;
    height: 52px;
    border-radius: 10px;
    background: #f8fafc;
    border: 1px dashed #cbd5e1;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 6px 10px;
    position: relative;
    transition: all 0.2s ease;
}

.cs_compare_slot.filled {
    border-style: solid;
    border-color: #bfdbfe;
    background: #eff6ff;
}

.cs_slot_placeholder {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 12px;
    color: #94a3b8;
    font-weight: 500;
}

.cs_slot_placeholder i {
    font-size: 14px;
}

.cs_slot_content {
    display: flex;
    align-items: center;
    gap: 8px;
    width: 100%;
}

.cs_slot_logo {
    width: 32px;
    height: 32px;
    object-fit: contain;
    background: #ffffff;
    border-radius: 6px;
    padding: 2px;
    border: 1px solid #e2e8f0;
    flex-shrink: 0;
}

.cs_slot_title {
    font-size: 12px;
    font-weight: 600;
    color: #0f172a;
    line-height: 1.2;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    flex-grow: 1;
}

.cs_slot_remove {
    background: #ffffff;
    border: 1px solid #cbd5e1;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #64748b;
    font-size: 12px;
    cursor: pointer;
    flex-shrink: 0;
    padding: 0;
    transition: all 0.15s;
}

.cs_slot_remove:hover {
    background: #fee2e2;
    border-color: #fca5a5;
    color: #dc2626;
}

/* Actions */
.cs_compare_bar_actions {
    display: flex;
    align-items: center;
    gap: 12px;
}

.cs_compare_clear_link {
    background: transparent;
    border: none;
    color: #64748b;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    text-decoration: underline;
    padding: 6px;
    transition: color 0.15s;
    white-space: nowrap;
}

.cs_compare_clear_link:hover {
    color: #ef4444;
}

.cs_compare_now_btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #2563eb;
    color: #ffffff !important;
    padding: 10px 22px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.2s ease;
    white-space: nowrap;
    box-shadow: 0 4px 14px rgba(37, 99, 235, 0.28);
}

.cs_compare_now_btn:hover:not(.disabled) {
    background: #1d4ed8;
    transform: translateY(-1px);
    box-shadow: 0 6px 18px rgba(37, 99, 235, 0.35);
}

.cs_compare_now_btn.disabled {
    background: #cbd5e1;
    color: #64748b !important;
    cursor: not-allowed;
    box-shadow: none;
    opacity: 0.8;
}

/* Toast Alert */
.cs_compare_toast {
    position: fixed;
    top: 24px;
    right: 24px;
    z-index: 1099;
    transform: translateY(-30px);
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.cs_compare_toast.show {
    transform: translateY(0);
    opacity: 1;
    visibility: visible;
}

.cs_toast_inner {
    background: #0f172a;
    color: #ffffff;
    padding: 12px 18px;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 13.5px;
    font-weight: 500;
}

.cs_toast_icon {
    color: #f59e0b;
    font-size: 18px;
}

.cs_toast_close {
    background: transparent;
    border: none;
    color: #94a3b8;
    cursor: pointer;
    padding: 0;
    font-size: 16px;
    margin-left: 6px;
    display: flex;
    align-items: center;
}

.cs_toast_close:hover {
    color: #ffffff;
}

/* Responsive Rules */
@media (max-width: 991px) {
    .cs_compare_bar_inner {
        flex-wrap: wrap;
        gap: 10px;
    }
    .cs_compare_slots_container {
        order: 3;
        width: 100%;
        max-width: 100%;
    }
    .cs_compare_slot {
        height: 46px;
        min-width: 80px;
        padding: 4px 6px;
    }
    .cs_slot_logo {
        width: 26px;
        height: 26px;
    }
    .cs_slot_title {
        font-size: 11px;
    }
}

@media (max-width: 575px) {
    .cs_sticky_compare_bar {
        padding: 8px 0 12px;
    }
    .cs_compare_bar_info {
        min-width: auto;
    }
    .cs_compare_heading {
        font-size: 13px;
    }
    .cs_compare_now_btn {
        padding: 8px 16px;
        font-size: 13px;
    }
    .cs_slot_placeholder span {
        display: none;
    }
    .cs_slot_placeholder i {
        font-size: 18px;
    }
}
</style>

<script>
/**
 * DuraCompare - Central Comparison State Manager
 */
const DuraCompare = (function () {
    const STORAGE_KEY_UNIS = 'durasetu_compare_unis';
    const STORAGE_KEY_COURSE = 'durasetu_compare_course';
    const MAX_SELECTION = 3;

    let toastTimer = null;

    function getStoredUnis() {
        try {
            const raw = localStorage.getItem(STORAGE_KEY_UNIS);
            return raw ? JSON.parse(raw) : [];
        } catch (e) {
            console.error('Error reading compare unis from storage', e);
            return [];
        }
    }

    function saveStoredUnis(unis) {
        try {
            localStorage.setItem(STORAGE_KEY_UNIS, JSON.stringify(unis));
        } catch (e) {
            console.error('Error saving compare unis to storage', e);
        }
    }

    function getStoredCourse() {
        try {
            const raw = localStorage.getItem(STORAGE_KEY_COURSE);
            return raw ? JSON.parse(raw) : null;
        } catch (e) {
            return null;
        }
    }

    function saveStoredCourse(courseObj) {
        try {
            if (courseObj) {
                localStorage.setItem(STORAGE_KEY_COURSE, JSON.stringify(courseObj));
            } else {
                localStorage.removeItem(STORAGE_KEY_COURSE);
            }
        } catch (e) {
            console.error('Error saving compare course to storage', e);
        }
    }

    function showToast(msg) {
        const toast = document.getElementById('csCompareToast');
        const msgEl = document.getElementById('csCompareToastMsg');
        if (!toast || !msgEl) return;

        msgEl.textContent = msg;
        toast.classList.add('show');

        if (toastTimer) clearTimeout(toastTimer);
        toastTimer = setTimeout(() => {
            toast.classList.remove('show');
        }, 3200);
    }

    function hideToast() {
        const toast = document.getElementById('csCompareToast');
        if (toast) toast.classList.remove('show');
    }

    function toggleUni(uniData) {
        const unis = getStoredUnis();
        const existingIdx = unis.findIndex(u => u.id === uniData.id);

        if (existingIdx > -1) {
            // Already selected -> Remove
            unis.splice(existingIdx, 1);
            saveStoredUnis(unis);
            renderUI();
            return false; // unselected
        } else {
            // Check maximum limit
            if (unis.length >= MAX_SELECTION) {
                showToast("You can compare up to 3 universities.");
                return null; // reached limit
            }

            unis.push({
                id: uniData.id,
                name: uniData.name,
                short_name: uniData.short_name || uniData.name,
                logo: uniData.logo
            });
            saveStoredUnis(unis);
            renderUI();
            return true; // selected
        }
    }

    function removeUni(id) {
        let unis = getStoredUnis();
        unis = unis.filter(u => u.id !== id);
        saveStoredUnis(unis);
        renderUI();
    }

    function clearAll() {
        saveStoredUnis([]);
        renderUI();
    }

    function setCourseContext(courseId, courseName) {
        if (!courseId) {
            saveStoredCourse(null);
        } else {
            saveStoredCourse({ id: courseId, title: courseName || courseId });
        }
        renderUI();
    }

    function clearCourseContext() {
        saveStoredCourse(null);
        // Also reset dropdown if on universities page
        const select = document.getElementById('courseFilterSelect');
        if (select) {
            select.value = '';
            // Trigger change event to refresh grid filter
            select.dispatchEvent(new Event('change'));
        }
        renderUI();
    }

    function renderUI() {
        const unis = getStoredUnis();
        const course = getStoredCourse();
        const count = unis.length;

        // 1. Update Sticky Bar Visibility
        const bar = document.getElementById('csStickyCompareBar');
        const countPill = document.getElementById('csCompareCountPill');
        const compareBtn = document.getElementById('csCompareNowBtn');

        if (bar) {
            if (count > 0) {
                bar.classList.add('cs_bar_visible');
                document.body.style.paddingBottom = '85px';
            } else {
                bar.classList.remove('cs_bar_visible');
                document.body.style.paddingBottom = '0px';
            }
        }

        if (countPill) {
            countPill.textContent = `${count}/${MAX_SELECTION} Selected`;
        }

        // 2. Update Course Chip
        const courseChip = document.getElementById('csCompareCourseChip');
        const courseNameSpan = document.getElementById('csCompareCourseName');
        if (courseChip && courseNameSpan) {
            if (course && course.id) {
                courseNameSpan.textContent = course.title || course.id;
                courseChip.style.display = 'inline-flex';
            } else {
                courseChip.style.display = 'none';
            }
        }

        // 3. Render 3 Slots
        for (let i = 0; i < MAX_SELECTION; i++) {
            const slotEl = document.getElementById('csCompareSlot' + i);
            if (!slotEl) continue;

            const u = unis[i];
            if (u) {
                slotEl.className = 'cs_compare_slot filled';
                slotEl.innerHTML = `
                    <div class="cs_slot_content">
                        <img src="${escapeHtml(u.logo)}" alt="${escapeHtml(u.name)}" class="cs_slot_logo" onerror="this.src='assets/img/icons/graduation-cap.svg'">
                        <span class="cs_slot_title" title="${escapeHtml(u.name)}">${escapeHtml(u.short_name || u.name)}</span>
                        <button type="button" class="cs_slot_remove" onclick="DuraCompare.removeUni('${escapeHtml(u.id)}')" aria-label="Remove ${escapeHtml(u.name)}">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>
                `;
            } else {
                slotEl.className = 'cs_compare_slot';
                slotEl.innerHTML = `
                    <div class="cs_slot_placeholder">
                        <i class="ri-add-line"></i>
                        <span>Add University</span>
                    </div>
                `;
            }
        }

        // 4. Update "Compare Now" button
        if (compareBtn) {
            if (count >= 2) {
                compareBtn.classList.remove('disabled');
                compareBtn.removeAttribute('aria-disabled');
                
                const ids = unis.map(u => encodeURIComponent(u.id)).join(',');
                let targetUrl = `compare.php?unis=${ids}`;
                if (course && course.id) {
                    targetUrl += `&course=${encodeURIComponent(course.id)}`;
                }
                compareBtn.setAttribute('href', targetUrl);
                compareBtn.innerHTML = `<span>Compare Now (${count})</span> <i class="ri-arrow-right-line"></i>`;
            } else {
                compareBtn.classList.add('disabled');
                compareBtn.setAttribute('aria-disabled', 'true');
                compareBtn.setAttribute('href', 'javascript:void(0)');
                compareBtn.innerHTML = `<span>Compare Now</span> <i class="ri-arrow-right-line"></i>`;
            }
        }

        // 5. Sync Card DOM states on the listing page
        syncCardVisuals(unis);

        // 6. Sync Quick Indicator if present
        const indicatorCount = document.getElementById('indicatorCount');
        if (indicatorCount) {
            indicatorCount.textContent = `${count} / ${MAX_SELECTION}`;
        }
    }

    function syncCardVisuals(unis) {
        const selectedIds = new Set((unis || getStoredUnis()).map(u => u.id));

        document.querySelectorAll('.uni-card-col').forEach(col => {
            const id = col.getAttribute('data-id');
            const card = col.querySelector('.cs_uni_card');
            const btn = col.querySelector('.cs_compare_btn');

            if (!card || !btn) return;

            // Existing ribbon check
            let ribbon = card.querySelector('.cs_selected_ribbon');

            if (selectedIds.has(id)) {
                card.classList.add('cs_is_selected');
                btn.classList.add('cs_btn_selected');
                btn.innerHTML = `<i class="ri-checkbox-circle-fill"></i> <span class="cs_compare_btn_text">Added to Compare</span>`;

                if (!ribbon) {
                    ribbon = document.createElement('span');
                    ribbon.className = 'cs_selected_ribbon';
                    ribbon.innerHTML = `<i class="ri-checkbox-circle-fill"></i> Selected`;
                    card.appendChild(ribbon);
                }
            } else {
                card.classList.remove('cs_is_selected');
                btn.classList.remove('cs_btn_selected');
                btn.innerHTML = `<i class="ri-scales-3-line"></i> <span class="cs_compare_btn_text">Compare</span>`;

                if (ribbon) {
                    ribbon.remove();
                }
            }
        });
    }

    function escapeHtml(str) {
        if (!str) return '';
        return String(str)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#039;');
    }

    function init() {
        // Clear all button click
        const clearBtn = document.getElementById('csClearAllCompareBtn');
        if (clearBtn) {
            clearBtn.addEventListener('click', clearAll);
        }

        // Clear course chip button
        const clearCourseBtn = document.getElementById('csClearCourseContextBtn');
        if (clearCourseBtn) {
            clearCourseBtn.addEventListener('click', clearCourseContext);
        }

        // Compare Now click guard when disabled
        const compareBtn = document.getElementById('csCompareNowBtn');
        if (compareBtn) {
            compareBtn.addEventListener('click', function (e) {
                if (this.classList.contains('disabled')) {
                    e.preventDefault();
                    showToast("Please select at least 2 universities to compare.");
                }
            });
        }

        // Initial render
        renderUI();
    }

    // Auto initialize on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    return {
        toggleUni: toggleUni,
        removeUni: removeUni,
        clearAll: clearAll,
        setCourseContext: setCourseContext,
        clearCourseContext: clearCourseContext,
        showToast: showToast,
        hideToast: hideToast,
        getStoredUnis: getStoredUnis,
        getStoredCourse: getStoredCourse,
        renderUI: renderUI
    };
})();
</script>

