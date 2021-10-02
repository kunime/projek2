<?php
include("koneksi.php");
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=hasil-export.xls");
include 'data.php';
?>