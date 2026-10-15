<?php
ob_start();
include("include/data.php");
include("include/university-data.php");

$univ = $all_universities_data['sharda-university-online'];
include("include/university-template.php");
?>

