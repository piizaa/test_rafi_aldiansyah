<?php 
	include 'koneksi.php';

	$id = $_GET['id'];
	mysqli_query($koneksi,"DELETE from armada where jenis_armada_id='$id'");
	mysqli_query($koneksi,"DELETE from jenisarmada where id='$id'");
	header("location:index.php");
	
 ?>