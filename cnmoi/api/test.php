<?php
include('../class/clsSinhVien.php');
$sinhVien =  new CNMoi();
$result = $sinhVien->xuatSinhVien("Select * from sinhvien");
echo $result;
?>
