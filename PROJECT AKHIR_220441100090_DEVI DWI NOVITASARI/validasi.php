<!DOCTYPE html>
<html>
<head>
	<title>Validasi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><h2>LOGIN</h2></center>
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
				<button type="submit" name="Login">LOGIN</button>
				<button><a href="Register.php">Daftar</button>
			</div>
		</form>
	</div>
</body>
<?php
	include "koneksi.php";
	if (isset($_POST['Login'])) {
		$login = $_POST['user'];
		$email = $_POST['email'];
		$masuk = mysqli_query($conn, "INSERT INTO login (username, email) VALUES ('$login','$email')");
		if ($masuk) {
			header("location:Utama.html");
			exit;
		}
	}
?>
</html>