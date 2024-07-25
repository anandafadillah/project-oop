<?php

//Jual Produk
//Musik
//Manga

class produk{
    //property
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $durasi,
           $waktuMain;


    //Constructor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $durasi = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->durasi = $durasi;
        $this->waktuMain = $waktuMain;

    }

    //method
    public function getData(){
        return "$this->penulis, $this->penerbit";
    }

    //method untuk info lengkap
    public function infoLengkap(){
        // Game : Genshin Impact | Mihoyo, HoyoVers (Rp.1000) - 100 Jam.
        $str = "{$this->judul} | {$this->getData()} (Rp. {$this->harga})";

        return $str;
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

// Child Class untuk Tipe Game
class Game extends produk{
    public function getInfoProduk(){
        $data = "Game : {$this->judul} | {$this->getData()} (Rp. {$this->harga}) - {$this->waktuMain} Halaman.";

        return $data;
    }
}

//Child Class untuk tipe Musik
class Musik extends produk{
    public function getInfoProduk(){
        $data = "Musik : {$this->judul} | {$this->getData()} (Rp. {$this->harga}) ~ {$this->durasi} Menit.";

        return $data;
    }
}



//object1
$produk1 = new Game("Genshin Impact", "Mihoyo", "Hoyoverse", 300000, 0, 100);
//object2
$produk2 = new Musik("Rapsodi", "JKT48", "AKB48", 100000, 5, 0);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

