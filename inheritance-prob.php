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
           $waktuMain,
           $tipe;

    //Constructor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $durasi = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->durasi = $durasi;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    //method
    public function getData(){
        return "$this->penulis, $this->penerbit";
    }

    //method untuk info lengkap
    public function infoLengkap(){
        // Game : Genshin Impact | Mihoyo, HoyoVers (Rp.1000) - 100 Jam.
        $str = "{$this->tipe} : {$this->judul} | {$this->getData()} (Rp. {$this->harga})";
        if ($this->tipe == "Game")
        {
            $str .= " {$this->waktuMain} Jam";
        } else if($this->tipe == "Musik")
        {
            $str .= " {$this->durasi} Menit";
        }

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



//object1
$produk1 = new produk("Genshin Impact", "Mihoyo", "Hoyoverse", 300000, 0, 100, "Game");
//object2
$produk2 = new produk("Rapsodi", "JKT48", "AKB48", 100000, 5, 0, "Musik");

echo $produk1->InfoLengkap();
echo "<br>";
echo $produk2->InfoLengkap();


// Game : Mihoyo, Hoyoverse
// Musik : JKT48, AKB48
// Genshin Impact | Mihoyo, Hoyoverse, (Rp. 300000)

// Game : Genshin Impact | Mihoyo, HoyoVers (Rp.1000) - 100 Jam.
// Musik : Rapsodi | AKB48, JKT48 (Rp.80000) - 5 menit.

