<?php 
	include 'koneksi.php';

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$merk = $_POST['merk'];

	mysqli_query($koneksi,"UPDATE jenisarmada set nama='$nama', merk='$merk' where id='$id'");
	header("location:index.php");

 ?>