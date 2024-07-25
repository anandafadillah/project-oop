<?php

//Jual Produk
//Musik
//Manga

class produk{
    //property
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    //Constructor
    public function __construct($judul = "Fortune cookies", $penulis = "JOT", $penerbit = "JKT48", $harga = 300000){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    //method
    public function getData(){
        return "$this->penulis, $this->penerbit";
    }
}

//object type
class cetakInfoProduk{
    //method
    public function cetak( produk $produk ){
        $str = "{$produk->judul} | {$produk->getData()}, (Rp. {$produk->harga})";
        return $str;
    }
}



//object1
$produk1 = new produk("Genshin Impact", "Mihoyo", "Hoyoverse", 300000);
//object2
$produk2 = new produk("Rapsodi", "JKT48", "AKB48", 100000);

//untuk cetak object
echo "Game : " . $produk1->getData();
echo "<br>";
echo "Musik : " . $produk2->getData();
echo "<br>";

//untuk cetak informasi lengkap object
$infoproduk1 = new cetakInfoProduk();
echo "Game : " .$infoproduk1->cetak($produk1);

