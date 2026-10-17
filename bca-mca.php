<?php
ob_start();
include("include/data.php");
include_once("include/course-data.php");

$course = dura_get_course_detail('bca-mca-integrated');
include("include/course-template.php");

$content = ob_get_clean();
require 'layout.php';
?>

