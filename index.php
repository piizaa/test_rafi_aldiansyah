<?php 
	session_start();
	include 'koneksi.php';
	if ($_SESSION['login']=='') {
		header("location:login.php?pesan=gagal");
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Index Master Data</title>
	<style type="text/css">
		li{
			list-style: none;
		}
	</style>
</head>
<body>
	
	<div style="width: 100%;background-color: #ccc;align-content: center;padding-top: 10px;padding-bottom: 10px;">
		<center>
			<h2>Data Master</h2>	
		</center>
	</div>
	<div style="width: 100%;align-content: center;padding-top: 10px;padding-bottom: 10px;">
		<div style="width: 20%;background-color: #aaa;float: left;font-size: 20px;height: 100%">
			<ul>
				<li><a href="index.php">Data</a> </li>
				<li><a href="tambaharmada.php">Tambah Armada</a> </li>
				<li><a href="tambahjenisarmada.php">Tambah Jenis Armada</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>

		</div>
		<div style="background-color: #ccc;float: left;width: 80%;padding-bottom: 10px;height: 100%">
			<h2 style="margin-left: 10px;">Data Armada</h2><br>

			<table border="1" style="margin-left: 10px;border:1px solid black;border-collapse: collapse;width: 70%">
				<tr>
					<td>Nama</td>
					<td>Merk</td>
					<td>Kode</td>
					<td>Action</td>
				</tr>
				<?php 
				$query = mysqli_query($koneksi,'SELECT * from armada join jenisarmada on jenisarmada.id=armada.jenis_armada_id');
				while ($data = mysqli_fetch_array($query)) {
					
				 ?>
				<tr>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['merk']; ?></td>
					<td><?php echo $data['kode']; ?></td>
					<td>
						<a href="hapusarmada.php?id=<?php echo $data['id']; ?>">HAPUS</a><br>
						<a href="jenisarmadaubah.php?id=<?php echo $data['id']; ?>">EDIT</a><br>
						<a href="armadaubah.php?id=<?php echo $data[0]; ?>">EDIT KODE</a>
					</td>
				</tr>
			<?php } ?>
			</table>
		</div>
	</div>

	
</body>
</html>