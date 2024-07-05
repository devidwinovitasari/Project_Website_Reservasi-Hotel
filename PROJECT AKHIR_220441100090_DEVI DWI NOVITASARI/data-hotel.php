<!DOCTYPE html>
<html>
<head>
	<title>Validasi</title>
    <style>
    body {
        background-image: url(img/blue.jpg);
        background-size: cover;
    }
    a{
        text-decoration: none;
    }
    </style>
</head>
<body>
<center><h3>DATA REGISTER</h3>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID_Register</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Ulangi Password</th>
    </tr>

    <?php
    include "koneksi.php";
    $no = 1;
    $ambildata = mysqli_query($conn, "SELECT * FROM register");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_register]</td>
            <td>$tampil[username]</td>
            <td>$tampil[email]</td>
            <td>$tampil[password]</td>
            <td>$tampil[ulangi_password]</td>
        </tr>";
        $no++;
    }
    ?>
</table><br><br>
<h3>DATA LOGIN</h3>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID_Login</th>
        <th>Username</th>
        <th>Email</th>
    </tr>
    <?php
    include "koneksi.php";
    $no = 1;
    $ambildata = mysqli_query($conn, "SELECT * FROM login");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_login]</td>
            <td>$tampil[username]</td>
            <td>$tampil[email]</td>
        </tr>";
        $no++;
    }
    ?>
</table><br><br>
<h3>DATA DAFTAR</h3>
<table border="1">
    <tr>
        <th>No.</th>
        <th>ID Daftar</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>Umur</th>
        <th>Jenis Kelamin</th>
        <th>No. HP</th>
        <th>Email</th>
        <th>Alamat</th>
    </tr>

    <?php
    include "koneksi.php";
    $no = 1;
    $ambildata = mysqli_query($conn, "SELECT * FROM daftar");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_daftar]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[nik]</td>
            <td>$tampil[umur]</td>
            <td>$tampil[jenis_kelamin]</td>
            <td>$tampil[no_hp]</td>
            <td>$tampil[email]</td>
            <td>$tampil[alamat]</td>
        </tr>";
        $no++;
    }
    ?>
</table><br><br>
<h3>DATA PESAN</h3>
<table border="1">
    <tr>
        <th>No.</th>
        <th>ID Pesan</th>
        <th>Tanggal Pemesanan</th>
        <th>Harga Total</th>
        <th>Diskon</th>
        <th>Total Bayar</th>
        <th>Bonus</th>
    </tr>

    <?php
    include "koneksi.php";
    $no = 1;
    $ambildata = mysqli_query($conn, "SELECT * FROM pesanan");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_pesan]</td>
            <td>$tampil[tgl_pesan]</td>
            <td>$tampil[harga_total]</td>
            <td>$tampil[diskon]</td>
            <td>$tampil[total_bayar]</td>
            <td>$tampil[bonus]</td>
        </tr>";
        $no++;
    }
    ?>
</table><br><br>
<h3>DATA PEMBAYARAN</h3>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID_Bayar</th>
        <th>Nama</th>
        <th>Nomor Rekening</th>
        <th>Metode Pembayaran</th>
        <th>Nomor Rekening Tujuan</th>
        <th>Nominal Pembayaran</th>
    </tr>

    <?php
    include "koneksi.php";
    $no = 1;
    $ambildata = mysqli_query($conn, "SELECT * FROM bayar");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[id_bayar]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[no_rek]</td>
            <td>$tampil[metode_pembayaran]</td>
            <td>$tampil[no_rek_tujuan]</td>
            <td>$tampil[nominal]</td>
        </tr>";
        $no++;
    }
    ?>
</table><br><br>
<button><a href="Admin.html">Back</button>
</center>
</body>