<?php
/**
 * DuraSetu Central Data Loader
 * 
 * Provides centralized access to universities and courses from JSON datasets
 * with full backward-compatibility for existing PHP pages, templates, and layouts.
 */

if (!defined('DURA_DATA_LOADED')) {
    define('DURA_DATA_LOADED', true);

    // Global in-memory cache
    $GLOBALS['dura_universities_cache'] = null;
    $GLOBALS['dura_courses_cache'] = null;
    $GLOBALS['dura_comparison_cache'] = null;

    /**
     * Load all comparison data from JSON
     * @return array
     */
    function dura_get_all_comparison_data(): array {
        if ($GLOBALS['dura_comparison_cache'] !== null) {
            return $GLOBALS['dura_comparison_cache'];
        }

        $jsonFile = __DIR__ . '/../data/comparison.json';
        if (file_exists($jsonFile)) {
            $raw = file_get_contents($jsonFile);
            $data = json_decode($raw, true);
            if (is_array($data)) {
                $GLOBALS['dura_comparison_cache'] = $data;
                return $data;
            }
        }

        $GLOBALS['dura_comparison_cache'] = [];
        return [];
    }

    /**
     * Get comparison data for a specific university
     * @param string $id
     * @return array|null
     */
    function dura_get_comparison_data(string $id): ?array {
        $allComp = dura_get_all_comparison_data();
        if (isset($allComp[$id])) {
            return $allComp[$id];
        }
        $uni = dura_get_university($id);
        return $uni['comparison_data'] ?? null;
    }

    /**
     * Load all universities data from JSON
     * @return array
     */
    function dura_get_all_universities(): array {
        if ($GLOBALS['dura_universities_cache'] !== null) {
            return $GLOBALS['dura_universities_cache'];
        }

        $jsonFile = __DIR__ . '/../data/universities.json';
        if (file_exists($jsonFile)) {
            $raw = file_get_contents($jsonFile);
            $data = json_decode($raw, true);
            if (is_array($data)) {
                // Seamlessly merge extended comparison data from comparison.json
                $compAll = dura_get_all_comparison_data();
                if (!empty($compAll)) {
                    foreach ($data as $uId => &$uVal) {
                        if (isset($compAll[$uId])) {
                            $uVal['comparison_data'] = array_merge($uVal['comparison_data'] ?? [], $compAll[$uId]);
                        }
                    }
                    unset($uVal);
                }
                $GLOBALS['dura_universities_cache'] = $data;
                return $data;
            }
        }

        $GLOBALS['dura_universities_cache'] = [];
        return [];
    }

    /**
     * Get a specific university by its unique ID/slug
     * @param string $id
     * @return array|null
     */
    function dura_get_university(string $id): ?array {
        $all = dura_get_all_universities();
        return $all[$id] ?? null;
    }

    /**
     * Load all courses data from JSON
     * @return array
     */
    function dura_get_all_courses(): array {
        if ($GLOBALS['dura_courses_cache'] !== null) {
            return $GLOBALS['dura_courses_cache'];
        }

        $jsonFile = __DIR__ . '/../data/courses.json';
        if (file_exists($jsonFile)) {
            $raw = file_get_contents($jsonFile);
            $data = json_decode($raw, true);
            if (is_array($data)) {
                $GLOBALS['dura_courses_cache'] = $data;
                return $data;
            }
        }

        $GLOBALS['dura_courses_cache'] = [];
        return [];
    }

    /**
     * Get a specific course by its unique ID/slug
     * @param string $id
     * @return array|null
     */
    function dura_get_course(string $id): ?array {
        $courses = dura_get_all_courses();
        foreach ($courses as $c) {
            if (isset($c['id']) && $c['id'] === $id) {
                return $c;
            }
        }
        return null;
    }

    /**
     * Filter courses by level (Undergraduate, Postgraduate, Integrated)
     * @param string $level
     * @return array
     */
    function dura_get_courses_by_level(string $level): array {
        $courses = dura_get_all_courses();
        $filtered = [];
        foreach ($courses as $c) {
            if (isset($c['level']) && strcasecmp($c['level'], $level) === 0) {
                $filtered[] = $c;
            }
        }
        return $filtered;
    }

    /**
     * Get all universities that offer a given course
     * @param string $course_id
     * @return array
     */
    function dura_get_universities_for_course(string $course_id): array {
        $course = dura_get_course($course_id);
        $result = [];
        if (!empty($course['offering_universities'])) {
            foreach ($course['offering_universities'] as $uId) {
                $u = dura_get_university($uId);
                if ($u) {
                    $result[$uId] = $u;
                }
            }
        }
        return $result;
    }

    /**
     * Get all courses offered by a specific university
     * @param string $university_id
     * @return array
     */
    function dura_get_courses_for_university(string $university_id): array {
        $uni = dura_get_university($university_id);
        if (!$uni || empty($uni['offered_courses'])) {
            return [];
        }
        $result = [];
        foreach ($uni['offered_courses'] as $cId) {
            $c = dura_get_course($cId);
            if ($c) {
                $result[] = $c;
            }
        }
        return $result;
    }

    /**
     * Comparison Engine Helper
     * Compares universities across all academic, accreditation, placement, and cost parameters
     * based on client benchmark comparison data.
     * @param array $university_ids
     * @return array
     */
    function dura_compare_universities(array $university_ids): array {
        $compared = [];
        $compAll = dura_get_all_comparison_data();
        foreach ($university_ids as $id) {
            $uni = dura_get_university($id);
            if ($uni) {
                $comp = $compAll[$id] ?? ($uni['comparison_data'] ?? []);
                $compared[$id] = [
                    'id' => $uni['id'],
                    'name' => $uni['name'],
                    'short_name' => $uni['short_name'] ?? $uni['name'],
                    'slug' => $uni['slug'] ?? 'universities.php',
                    'logo' => $uni['logo'],
                    'campus_img' => $uni['campus_img'] ?? '',
                    'hero_desc' => $uni['hero_desc'] ?? '',
                    'type' => $uni['overview']['type'] ?? 'Not Available',
                    'recognition' => $uni['overview']['recognition'] ?? 'UGC-DEB',
                    'accreditation' => $uni['overview']['accreditation'] ?? 'Not Available',
                    'semester_fee' => $comp['semester_fee'] ?? 'Not Available',
                    'total_two_year_fee' => $comp['total_two_year_fee'] ?? ($comp['avg_fee_range'] ?? 'Not Available'),
                    'approvals' => $comp['approvals'] ?? ($uni['overview']['recognition'] ?? 'Not Available'),
                    'credit_points' => $comp['credit_points'] ?? 'Not Available',
                    'eligibility' => $comp['eligibility'] ?? 'Not Available',
                    'top_recruiters' => $comp['top_recruiters'] ?? 'Not Available',
                    'duration' => $comp['duration'] ?? '2 Years',
                    'education_mode' => $comp['education_mode'] ?? ($uni['overview']['mode'] ?? 'Online'),
                    'elearning_facility' => $comp['elearning_facility'] ?? 'Yes',
                    'alumni_status' => $comp['alumni_status'] ?? 'Not Available',
                    'online_classes' => $comp['online_classes'] ?? 'Yes',
                    'placement_assistance' => $comp['placement_assistance'] ?? 'Yes',
                    'industry_ready_curriculum' => $comp['industry_ready_curriculum'] ?? 'Yes',
                    'satisfied_students' => $comp['satisfied_students'] ?? 'Not Available',
                    'pros' => $comp['pros'] ?? 'Not Available',
                    'naac_grade' => $comp['naac_grade'] ?? ($uni['overview']['accreditation'] ?? 'Not Available'),
                    'naac_score' => $comp['naac_score'] ?? 'Not Available',
                    'nirf_ranking' => $comp['nirf_ranking'] ?? ($uni['rank'] ?? 'Not Available'),
                    'wes_approval' => $comp['wes_approval'] ?? 'Not Available',
                    'established_year' => $comp['established_year'] ?? ($uni['since'] ?? 'Not Available'),
                    'emi_available' => $comp['emi_available'] ?? 'Not Available',
                    'students_visited' => $comp['students_visited'] ?? 'Not Available',
                    'ugc_entitled' => $comp['ugc_entitled'] ?? 'Yes',
                    'avg_fee_range' => $comp['avg_fee_range'] ?? 'Not Available',
                    'exam_mode' => $comp['exam_mode'] ?? 'Not Available',
                    'learning_mode' => $comp['learning_mode'] ?? 'Not Available',
                    'course_details' => $uni['course_details'] ?? [],
                    'offered_courses' => $uni['offered_courses'] ?? []
                ];
            }
        }
        return $compared;
    }

    /**
     * Search and Filter Universities
     * @param string $keyword
     * @param array $filters (e.g. ['naac' => 'A+', 'type' => 'Private'])
     * @return array
     */
    function dura_search_universities(string $keyword = '', array $filters = []): array {
        $all = dura_get_all_universities();
        $keyword = trim(strtolower($keyword));

        $filtered = array_filter($all, function ($uni) use ($keyword, $filters) {
            if ($keyword !== '') {
                $matchName = strpos(strtolower($uni['name'] ?? ''), $keyword) !== false;
                $matchShort = strpos(strtolower($uni['short_name'] ?? ''), $keyword) !== false;
                $matchDesc = strpos(strtolower($uni['hero_desc'] ?? ''), $keyword) !== false;
                if (!$matchName && !$matchShort && !$matchDesc) {
                    return false;
                }
            }

            if (!empty($filters['naac'])) {
                $grade = $uni['comparison_data']['naac_grade'] ?? '';
                if (stripos($grade, $filters['naac']) === false) {
                    return false;
                }
            }

            if (!empty($filters['type'])) {
                $type = $uni['overview']['type'] ?? '';
                if (stripos($type, $filters['type']) === false) {
                    return false;
                }
            }

            return true;
        });

        return $filtered;
    }

    /**
     * Get structured list of universities offering a specific course
     * Formatted for direct consumption by course detail pages
     * @param string $course_id
     * @param array $default_fallback
     * @return array
     */
    function dura_get_course_universities_list(string $course_id, array $default_fallback = []): array {
        $universities = dura_get_universities_for_course($course_id);
        if (empty($universities)) {
            return $default_fallback;
        }

        $list = [];
        $course = dura_get_course($course_id);
        $courseDuration = $course['duration'] ?? '2 Years';

        foreach ($universities as $uId => $uni) {
            $cd = $uni['course_details'][$course_id] ?? null;
            $fee = $cd['fee'] ?? ($uni['comparison_data']['avg_fee_range'] ?? 'Fees On Request');
            $duration = $cd['duration'] ?? $courseDuration;
            $emi = $cd['emi'] ?? ($uni['comparison_data']['emi_available'] ?? 'EMI Available');
            $badge = $uni['overview']['recognition'] ?? 'UGC-DEB';
            $accred = $uni['overview']['accreditation'] ?? 'NAAC Accredited';

            $list[] = [
                'id' => $uni['id'],
                'name' => $uni['name'],
                'logo' => $uni['logo'],
                'alt' => $uni['name'],
                'badge' => $badge,
                'accreditation' => $accred,
                'duration' => $duration,
                'fee' => $fee,
                'emi' => $emi,
                'url' => $uni['slug']
            ];
        }

        return !empty($list) ? $list : $default_fallback;
    }

    /**
     * Get universities formatted for homepage slider cards
     * @return array
     */
    function dura_get_homepage_slider_universities(): array {
        $all = dura_get_all_universities();
        $themes = ['yellow', 'blue', 'teal', 'purple', 'orange'];
        $slider = [];
        $index = 0;

        foreach ($all as $id => $uni) {
            // Build 3-4 course abbreviation pills
            $courseTags = [];
            if (!empty($uni['offered_courses'])) {
                foreach (array_slice($uni['offered_courses'], 0, 4) as $cId) {
                    $c = dura_get_course($cId);
                    if ($c) {
                        $short = preg_replace('/^(Online\s+|Global\s+|1-Year\s+|Executive\s+)/i', '', $c['title']);
                        $courseTags[] = $short;
                    }
                }
            }
            if (empty($courseTags)) {
                $courseTags = ['Online Programs', 'Degree'];
            }

            $accred = $uni['overview']['recognition'] ?? 'UGC-DEB';
            if (!empty($uni['overview']['accreditation']) && $uni['overview']['accreditation'] !== 'Not Available') {
                $accred .= ' | ' . $uni['overview']['accreditation'];
            }

            $slider[] = [
                'id' => $uni['id'],
                'name' => $uni['name'],
                'accreditation' => $accred,
                'image' => $uni['campus_img'] ?? 'assets/img/course-img-1.jpg',
                'fallback_image' => 'assets/img/course-img-1.jpg',
                'logo' => $uni['logo'] ?? 'assets/img/icons/graduation-cap.svg',
                'fallback_logo' => 'assets/img/icons/graduation-cap.svg',
                'alt' => $uni['name'],
                'tag_theme' => $themes[$index % count($themes)],
                'courses' => $courseTags,
                'url' => $uni['slug'] ?? 'universities.php'
            ];
            $index++;
        }

        return $slider;
    }

    /**
     * Get universities formatted for marquee partner banner
     * @return array
     */
    function dura_get_homepage_marquee_universities(): array {
        $all = dura_get_all_universities();
        $marquee = [];
        foreach ($all as $id => $uni) {
            $marquee[] = [
                'name' => $uni['name'],
                'logo' => $uni['logo'],
                'alt' => $uni['name']
            ];
        }
        return $marquee;
    }

    /**
     * Get popular courses list for homepage and overview sections
     * @param int $limit
     * @return array
     */
    function dura_get_popular_courses_list(int $limit = 6): array {
        $courses = dura_get_all_courses();
        $popular = [];
        foreach ($courses as $c) {
            if (!empty($c['popular'])) {
                $popular[] = [
                    'id' => $c['id'],
                    'title' => $c['title'],
                    'subtitle' => $c['full_name'] ?? $c['title'],
                    'desc' => $c['desc'] ?? '',
                    'duration' => $c['duration'] ?? '2 Years',
                    'mode' => $c['mode'] ?? 'Online',
                    'icon' => $c['icon'] ?? 'ri-graduation-cap-line',
                    'image' => $c['image'] ?? 'assets/img/course-img-1.jpg',
                    'fallback_image' => $c['fallback_image'] ?? 'assets/img/course-img-1.jpg',
                    'level' => $c['level'] ?? 'Postgraduate',
                    'url' => $c['url'] ?? 'courses.php'
                ];
            }
        }
        return $limit > 0 ? array_slice($popular, 0, $limit) : $popular;
    }

    /**
     * Search and Filter Courses
     * @param string $keyword
     * @param string $level
     * @return array
     */
    function dura_search_courses(string $keyword = '', string $level = ''): array {
        $all = dura_get_all_courses();
        $keyword = trim(strtolower($keyword));
        $level = trim(strtolower($level));

        return array_filter($all, function ($c) use ($keyword, $level) {
            if ($level !== '' && $level !== 'all') {
                if (strtolower($c['level'] ?? '') !== $level) {
                    return false;
                }
            }

            if ($keyword !== '') {
                $matchTitle = strpos(strtolower($c['title'] ?? ''), $keyword) !== false;
                $matchFullName = strpos(strtolower($c['full_name'] ?? ''), $keyword) !== false;
                $matchCategory = strpos(strtolower($c['category'] ?? ''), $keyword) !== false;
                $matchDesc = strpos(strtolower($c['desc'] ?? ''), $keyword) !== false;
                if (!$matchTitle && !$matchFullName && !$matchCategory && !$matchDesc) {
                    return false;
                }
            }

            return true;
        });
    }
}

// Global variable assignment for seamless backward compatibility
$all_universities_data = dura_get_all_universities();
$all_courses_data = dura_get_all_courses();

