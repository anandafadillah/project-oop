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
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    //method
    public function getData(){
        return "$this->penulis, $this->penerbit";
    }

    //method untuk info lengkap
    public function getInfoProduk(){
        // Game : Genshin Impact | Mihoyo, HoyoVers (Rp.1000) - 100 Jam.
        $data = "{$this->judul} | {$this->getData()} (Rp. {$this->harga})";

        return $data;
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
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk(){
        $data = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Halaman.";

        return $data;
    }
}

//Child Class untuk tipe Musik
class Musik extends produk{
    public $durasi;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $durasi = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->durasi = $durasi;
    }

    public function getInfoProduk(){
        $data = "Musik : " . parent::getInfoProduk() . " ~ {$this->durasi} Menit.";
        return $data;
    }
}



//object1
$produk1 = new Game("Genshin Impact", "Mihoyo", "Hoyoverse", 300000, 100);
//object2
$produk2 = new Musik("Rapsodi", "JKT48", "AKB48", 100000, 5);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

