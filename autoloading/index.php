<?php 

require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Mahakarya Indonesia", "Agus Lanang", 30000, 100);
$produk2 = new Game("Uncharted", "Black Evil", "Agus Computer", 50000, 50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
