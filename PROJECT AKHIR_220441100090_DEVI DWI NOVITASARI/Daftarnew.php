<!DOCTYPE html>
<html>
<head>
	<title>Validasi</title>
	<link rel="stylesheet" type="text/css" href="Daftarnew.css">
</head>
<body>
	<center><h2>Masukkan Data Anda!</h2></center>
	<div class="login">
		<form action="" method="POST">
			<div>
				<label>Nama:</label>
				<input type="text" name="nama" id="nama" required/>
			</div>
			<br>
			<div>
				<label>NIK:</label>
				<input type="number" name="nik" id="nik" required/>
			</div>
			<br>
			<div>
				<label>Umur:</label>
				<input type="number" name="umur" id="umur" required/>
			</div>
			<br>
			<div>
				<label>Jenis Kelamin:</label>
				<input type="text" name="jkl" id="jkl" required/>
			</div>
			<br>
			<div>
				<label>No. HP:</label>
				<input type="number" name="nohp" id="nohp" required/>
			</div>
			<br>
			<div>
				<label>Email:</label>
				<input type="email" name="email" id="email" required/>
			</div>
			<div>
				<label>Alamat:</label>
				<textarea cols="40" rows="5" name="alamat" id="alamat" required></textarea>
			</div>
			<div class="tombol"><center>
				<button type="submit" name="daftar">Pesan</button>
                <button><a href="Utama.html">Back</a></button>
			</center>
			</div>
		</form>
	</div>
</body>
<?php
	include "koneksi.php";
	if (isset($_POST['daftar'])) {
		$nama = $_POST['nama'];
		$nik = $_POST['nik'];
		$umur = $_POST['umur'];
		$jk = $_POST['jkl'];
		$no = $_POST['nohp'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
		$masuk = mysqli_query($conn, "INSERT INTO daftar (nama, nik, umur, jenis_kelamin, no_hp, email, alamat) VALUES ('$nama','$nik','$umur','$jk','$no','$email','$alamat')");
		if ($masuk) {
			header("location:Pesan.php");
			exit;
		}
	}
?>
</html>