<?php
error_reporting(0);
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $berapa = $_POST['berapa'];
        $tgl = $_POST['tgl'];
        $harga = intval($harga);
        $jumlah = intval($jumlah);
        $berapa = intval($berapa);
        $harga_total = $harga * $jumlah * $berapa;
        switch ($jumlah) {
            case $jumlah>=2 && $jumlah<3:
                $diskon = 5/100 * $harga_total;
                $bonus = "Handuk";
                $total_bayar = $harga_total - $diskon;
            break;
            case $jumlah>=3 && $jumlah<5:
                $diskon = 8/100 * $harga_total;
                $bonus = "Handuk + Peralatan Mandi";
                $total_bayar = $harga_total - $diskon;
            break; 
            case $jumlah>=5:
                $diskon = 10/100 * $harga_total;
                $bonus = "Handuk + Selimut + Peralatan Mandi";
                $total_bayar = $harga_total - $diskon;
            break; 
            default:
                $diskon = 1/100 * $harga_total;
                $bonus = "Tidak mendapatkan Bonus";
                $total_bayar = $harga_total - $diskon;
            break;
            }
    }
    elseif (isset($_POST['reset'])) {
        $nama = "";
        $tgl = "";
        $harga = "";
        $jumlah = "";
        $harga_total = "";
        $diskon = "";
        $total_bayar = "";
        $bonus = "";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Hotel Devi</title>
<style>
    body {
        background-image: url(img/blue.jpg);
        background-size: cover;
    }
    .container{
        margin: 50px auto;
        width: max-content;
        background-color: cyan;
        box-shadow: 0px 0px 15px 15px #000000;
    }
    .container h2{
        background-color:blue;
        box-shadow: 0px 0px 5px 5px #000000;
    }
    .besar button{
        width:8rem;
        height:2rem;
        border-radius:10ch;
        box-shadow: 0px 0px 5px 5px #000000;
    }
    button:hover{
        background-color:blue;
    }
    a{
        text-decoration: none;
        color: black;
    }
</style>
</head>
<body>
    <div class="container">
    <table cellpadding="5"><caption><h2>Form Pemesanan Kamar</h2></caption>
        <form action="" method="post">
            <tr>
                <td>Nama Tipe</td>
                <td>:</td>
                <td>
                    <select name="nama" id="nama"onchange="price()" required>
                        <option hidden >Silahkan pilih Tipe Kamar</option>
                        <option value="150000" <?php if($nama==150000){echo("selected");} ?>>Standard Room</option>
                        <option value="300000" <?php if($nama==300000){echo("selected");} ?>>Single Room</option>
                        <option value="500000" <?php if($nama==500000){echo("selected");} ?>>Double Room</option>
                        <option value="800000" <?php if($nama==800000){echo("selected");} ?>>Family Room</option>
                        <option value="10000000" <?php if($nama==10000000){echo("selected");} ?>>Presidential Suite</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tanggal Pemesanan</td>
                <td>:</td>
                <td><input type="date" name="tgl" value="<?= $tgl; ?>" required></td>
            </tr>
            <tr>
                <td>Harga Per malam dan Per unit</td>
                <td>:</td>
                <td>Rp. <input type="text" name="harga" id="harga"size="16" value="<?=$harga; ?>" readonly></td>
            </tr>
            <tr>
                <td>Jumlah Kamar Yang Dipesan</td>
                <td>:</td>
                <td class="ukuran1"><input type="number" min="1" name="jumlah" value="<?= $jumlah; ?>" required> Unit</td>
            </tr>
            <tr>
                <td>Berapa Malam</td>
                <td>:</td>
                <td class="ukuran1"><input type="number" min="1" name="berapa" value="<?= $berapa; ?>" required> Malam</td>
            </tr>
            <tr>
                <td class="besar">
                    <button type="submit" name="submit"><i><b>Pesan</b></i></button>
                    <button type="submit" name="reset"><i><b>Reset</b></i></button>
                </td>
            </tr>
        </form>
    <form action="" method="POST">
    <tr>
                <td>Tanggal Pemesanan</td>
                <td>:</td>
                <td><input type="date" id="tgl_pesan" name="tgl" value="<?= $tgl; ?>" required></td>
            </tr>
            <tr>
                <td>Harga Total</td>
                <td>:</td>
                <td>Rp. <input type="text" id="harga_total" name="total" size="16"value="<?= $harga_total; ?>" readonly></td>
            </tr>
            <tr>
                <td>Diskon</td>
                <td>:</td>
                <td>Rp. <input type="text" id="diskon" name="diskon" size="16"value="<?= $diskon; ?>" readonly></td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td>:</td>
                <td>Rp. <input type="text" id="jumlah" name="totalbayar"size="16" value="<?= $total_bayar; ?>" readonly></td>
            </tr>
            <tr>
                <td>Bonus</td>
                <td>:</td>
                <td>
                <textarea name="bonus" id="bonus" cols="50" rows="1" readonly><?= $bonus; ?></textarea></td>
            </tr>
            <td class="besar">
                    <button type="submit" name="ada"><i><b>Oke</b></i></button>
                    <button><a href="Bayar.php">Bayar</button>
                    <button><a href="Utama.html">Back</button>
            </td>
    </form>
    </table>
    </div>
    <?php
	include "koneksi.php";
	if (isset($_POST['ada'])) {
		$tgl_pesan = $_POST['tgl'];
		$harga_total = $_POST['total'];
		$diskon = $_POST['diskon'];
		$jumlah = $_POST['totalbayar'];
		$bonus = $_POST['bonus'];
		$masuk = mysqli_query($conn, "INSERT INTO pesanan (tgl_pesan, harga_total, diskon, total_bayar, bonus) VALUES ('$tgl_pesan','$harga_total','$diskon','$jumlah','$bonus')");
	}
?>
<script type="text/javascript">
    function price() {
        var tes = document.getElementById("nama").value;document.getElementById("harga").value = tes;
    }
</script>

</body>
</html>