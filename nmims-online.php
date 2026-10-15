<?php
ob_start();
include("include/data.php");
include("include/university-data.php");

$univ = $all_universities_data['nmims-online'];
include("include/university-template.php");
?>

