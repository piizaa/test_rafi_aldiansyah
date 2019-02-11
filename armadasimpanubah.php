<?php 
	include 'koneksi.php';

	$id = $_POST['id'];
	$kode = $_POST['kode'];

	mysqli_query($koneksi,"UPDATE armada set kode='$kode' where id='$id'");
	header("location:index.php");

 ?>