<!--
Author : Aguzrybudy
Created : Selasa, 19-April-2016
Title : Crud Menggunakan Modal Bootsrap
-->
<?php
	include "koneksi.php";
	$id=$_POST['id'];
	$salary = $_POST['salary'];
	$modal=mysql_query("UPDATE salary SET salary = '$salary' WHERE id = '$id'");
	header('location:index.php');
?>