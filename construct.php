<?php

//Jual Produk
//Musik
//Manga

class index{
    //property
    public $judul = "Fortune cookies",
           $penulis = "JOT",
           $penerbit = "JKT48",
           $harga = 300000;
    //Constructor
    public function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    //method
    public function getData(){
        return "$this->judul, $this->penerbit";
    }
}

$produk1 = new index("Genshin Impact", "Mihoyo", "Hoyoverse", 300000);

$produk2 = new index("Rapsodi", "JKT48", "AKB48", 100000);

echo "Game : " . $produk1->getData();
echo "<br>";
echo "Musik : " . $produk2->getData();
