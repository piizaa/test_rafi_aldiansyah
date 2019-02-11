<?php 
	include 'koneksi.php';
	session_start();
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$data = mysqli_query($koneksi,"SELECT * from user where username='$username' AND password='$password'");

	$cek = mysqli_num_rows($data);
	if ($cek > 0) {
		$_SESSION['login'] = '1';
		header("location:index.php");
	}else{
		header("location:login.php?pesan=gagal");
	}


 ?>