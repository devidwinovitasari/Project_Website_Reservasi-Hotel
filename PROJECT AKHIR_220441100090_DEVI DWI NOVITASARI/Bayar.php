<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body><style>
    body{
        background-image: url(img/blue.jpg);
        background-size: cover;
    }
    a{
        text-decoration: none;
        color: black;
    }
    .b, .c, .d {
        background-color: aqua;
    }
</style> 

<?php
error_reporting(0);
$name = $norek = $bayar = $nrt = $nominal = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["nama"]);
    $norek = test_input($_POST["norek"]);
    $bayar = test_input($_POST["bayar"]);
    $nrt = test_input($_POST["nrt"]);
    $nominal = test_input($_POST["nominal"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<div class="b"><fieldset>
        <legend>No. Rekening The Langham Hotel, Jakarta</legend>
        <table cellspacing="10" border="0">
            <tr><td><a>BNI      :  017-868-9052</a></td></tr>
            <tr><td><a>BRI      :  0001-01-011822-53-4</a></td></tr>
            <tr><td><a>BTN      :  00461-01-50-002930-0</a></td></tr>
            <tr><td><a>BCA      :  686-079-0054</a></td></tr>
            <tr><td><a>MANDIRI  :  0700-000-899-992</a></td></tr>
            <tr><td><a>DANAMON  :  003621762362</a></td></tr>
        </table>
    </fieldset></div><br>
<div class="c">
<fieldset>
<legend>SILAHKAN LAKUKAN PEMBAYARAN</legend>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Nama : <input type="text" name="nama">
    <br><br>
    No. Rekening : <input type="number" name="norek">
    <br><br>
    Metode Pembayaran :
    <select input name="bayar">
        <option></option>
        <option>BNI</option>
        <option>BRI</option>
        <option>BTN</option>
        <option>BCA</option>
        <option>MANDIRI</option>
        <option>DANAMON</option>
    </select>
    <br><br>
    No. Rekening Tujuan : <input type="number" name="nrt">
    <br><br>
    Nominal Transfer : <input type="number" name="nominal">
    <br><br>
    <button  name="submit"><i><b>Transfer</b></i></button>
    <button  name="reset"><i><b>Reset</b></i></button>
    <button> <a href="Utama.html">Back</a></button>
</form></fieldset></div><br>
<div class="d">
<fieldset>
    <legend>FORMULIR PEMBAYARAN</legend>
        <a>Nama Anda : <?php echo $name; echo "<br>";?><a><br>
        <a>No. Rekening Anda : <?php echo $norek; echo "<br>";?><a><br>
        <a>Metode Pembayaran Yang Anda Pilih : <?php echo $bayar; echo "<br>";?><a><br>
        <a>No. Rekening Tujuan : <?php echo $nrt; echo "<br>";?><a><br>
        <a>Nominal Pembayaran : <?php echo $nominal; echo "<br>";?><a><br>
</div>
<?php
	include "koneksi.php";
	if (isset($_POST['submit'])) {
		$name = $_POST['nama'];
		$norek = $_POST['norek'];
		$bayar = $_POST['bayar'];
		$nrt = $_POST['nrt'];
        $nominal = $_POST['nominal'];
		$masuk = mysqli_query($conn, "INSERT INTO bayar (nama, no_rek, metode_pembayaran, no_rek_tujuan, nominal) VALUES ('$name','$norek','$bayar','$nrt', '$nominal')");
	}
?>
</body>
</html>