<!--
Author : Aguzrybudy
Created : Selasa, 19-April-2016
Title : Crud Menggunakan Modal Bootsrap
-->
<?php
include "koneksi.php";
$salary = $_POST['salary'];
mysql_query("INSERT INTO salary VALUES ('','$salary')");
header('location:index.php');
?>