<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h2>Login Akun</h2>
	<?php 
		if (isset($_GET['pesan'])) {
			echo "<p style='color:red;''>**** GAGAL LOGIN ****</p>";
		}
	 ?>
	<form method="POST" action="ceklogin.php">
		<label>Username</label><br>
		<input type="text" name="username">
		<br><br>
		<label>Password</label><br>
		<input type="password" name="password">
		<br><br>
		<button type="submit">LOGIN</button>
	</form>
</body>
</html>