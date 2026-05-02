<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO</title>
</head>
<body>
    <?php
    include 'koneksi.php';
    $nama_toko = "Warung Digital Unila";

    function hitungTotal($hargabarang){
        global $nama_toko;
        echo "<b>Selamat Datang di $nama_toko</b><br>";
        static $jumlah_transaksi = 0;
        $jumlah_transaksi++;
        echo "<br>Transaksi Ke-$jumlah_transaksi<br>";
        echo "Harga Barang: Rp " . number_format($hargabarang, 0, ',', '.'). "<br><hr>";
    };
    hitungTotal(15000);
    hitungTotal(25000);
    hitungTotal(50000);
    ?>
</body>
</html>