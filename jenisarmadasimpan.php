<?php 
	include 'koneksi.php';

	$nama = $_POST['nama'];
	$merk = $_POST['merk'];

	mysqli_query($koneksi,"INSERT into jenisarmada value('','$nama','$merk')");
	header("location:index.php");

 ?>