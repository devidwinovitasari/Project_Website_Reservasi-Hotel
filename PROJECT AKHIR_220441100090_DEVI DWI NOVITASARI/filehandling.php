<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $file_1 = "Tabel.html";
        if (file_exists($file_1)&& is_readable($file_1)){
            $file_2 = fopen ($file_1, 'r');
            $ukuran = filesize($file_1);
            $hasil = fread($file_2, $ukuran);

            echo $hasil;
            fclose($file_2);
        }else{
            echo "file tidak ada";
        }
    ?>
    </body>
    </html>