<?php 

class Produk{
    //property
    public $judul = "judul", 
            $penulis = "penulis", 
            $penerbit = "penerbit", 
            $harga = 0;
    // method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    } 

}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Naruto";
// $produk2->tambahPropety = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Mahakarya indonesia";
$produk3->penerbit = "Agus Lanang";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Black Evil";
$produk4->penerbit = "Agus Computer";
$produk4->harga = 50000;

echo "Komik : " . $produk3->getLabel();
echo "<hr>";
echo "Game : " . $produk4->getLabel();






