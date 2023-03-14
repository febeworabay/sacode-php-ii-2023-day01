<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Profile</title>

    <!-- Style CSS -->
    <style>
        body {
            background-color: #fab1a0;
        }
    </style>


</head>
<body>

    <!-- Heading dengan tag HTML -->
    <h1>Profile Page</h1>

    <!-- Paragraph dengan syntax PHP -->
    <?php

        // menampilkan string ke layar (single line comment)     
        echo "<p>Hello PHP</p>";

        /*
        Syntax PHP bisa dijalankan
        hanya didalam dokumen
        dengan extention *.php 
        (multiple lines comment)
        */

        # membuat variable PHP

        #penjumlahan
        $angka1 = 10;
        $angka2 = 5;

        $jumlah = $angka1 + $angka2;
        // echo $jumlah;

        # pengurangan
        $pengurangan = $angka1 - $angka2;
        // echo $pengurangan;

    ?>

    <h3>Hasil Penjumlahan</h3>
    <p>
        <?php echo $jumlah; ?>
    </p>

    <h3>Hasil Pengurangan</h3>
    <p>
        <?php echo $pengurangan; ?>
    </p>

</body>
</html>