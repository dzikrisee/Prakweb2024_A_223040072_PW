<?php

//Jualan produk
//komik
//game

class produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

//$produk1 = new produk("naruto");
//$produk1->judul = "Naruto";
//var_dump($produk1);
//
//$produk2 = new produk();
//$produk2->judul = "uncharted";
//$produk2->tambahProperty = "Hahahhaa";
//var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "One Piece";
$produk3->penulis = "Eiichiro Oda";
$produk3->penerbit = "Shueisha";
$produk3->harga = 50000;


$produk4 = new produk();
$produk4->judul = "The Witcher 3: Wild Hunt";
$produk4->penulis = "CD Projekt Red";
$produk4->penerbit = "CD Projekt";
$produk4->harga = 250000;

echo "<br>";
echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
