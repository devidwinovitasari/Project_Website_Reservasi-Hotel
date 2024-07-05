<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><h2>REGISTER</h2></center>
	<div class="login">
		<form action="" method="POST">
			<div>
				<label>Username:</label>
				<input type="text" name="user" id="login" required />
			</div>
			<div>
				<label>Email:</label>
				<input type="email" name="email" id="email" required />
			</div>
            <div>
				<label>Password:</label>
				<input type="password" name="password" id="password" required />
			</div><br>
            <div>
				<label>Ulangi Password:</label>
				<input type="password" name="ulangipassword" id="ulangipassword" required />
			</div><br>
			<div>
				<button type="submit" name="daftar">Daftar</button>
			</div>
		</form>
	</div>
</body>
<?php
	include "koneksi.php";
	if (isset($_POST['daftar'])) {
		$login = $_POST['user'];
		$email = $_POST['email'];
        $password = $_POST['password'];
		$ulangipassword = $_POST['ulangipassword'];
		$masuk = mysqli_query($conn, "INSERT INTO register (username, email, password, ulangi_password) VALUES ('$login','$email', '$password', '$ulangipassword')");
		if ($masuk) {
			header("location:validasi.php");
			exit;
		}
	}
?>
</html>