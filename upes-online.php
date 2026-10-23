<?php
ob_start();
include("include/data.php");
include("include/university-data.php");

$univ = $all_universities_data['upes-online'];
include("include/university-template.php");
?>

