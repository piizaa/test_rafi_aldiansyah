<?php 
	include 'koneksi.php';

	$jenis_armada_id = $_POST['jenis_armada_id'];
	$kode = $_POST['kode'];

	mysqli_query($koneksi,"INSERT into armada value('','$jenis_armada_id','$kode')");
	header("location:index.php");

 ?>