<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 
$item = $_POST["item"];
$produk = $_POST["produk"];
$area = $_POST["area"];
$lokasi = $_POST["lokasi"];
$stok = $_POST["stok"];
$harga = $_POST["harga"];
$type = $_POST["type"];
$category = $_POST["category"];

//Query input menginput data kedalam tabel barang
$sql = "insert into db_db(item,produk,area,lokasi,stok,harga,type,category) values
		('$item','$produk','$area','$lokasi','$stok','$harga','$type','$category')";

//Mengeksekusi/menjalankan query diatas	
$hasil = mysqli_query($kon, $sql);

//Kondisi apakah berhasil atau tidak
if ($hasil) {
    echo "Berhasil insert data";
    exit;
} else {
    echo "Gagal insert data";
    exit;
}

?>