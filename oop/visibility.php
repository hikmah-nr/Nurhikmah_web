<?php 

class Produk {
    private $judul, 
    $penulis, 
    $penerbit, 
    $harga;

    public function __construct($judul='judul', $penulis='penulis', $penerbit='penerbit', $harga=0){
        //echo "hello";
        $this ->judul = $judul;
        $this ->penulis = $penulis;
        $this ->penerbit = $penerbit;
        $this ->harga = $harga;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setJudul($judul){
        $this->judul = $judul;
    }

    public function getLabel(){
        return "$this->judul, $this->penulis, $this->harga";
        //return $this->judul. ',' . $this->penulis;
    }
    public function getInfoProduk(){
        $str = "$this->judul | $this->penulis, $this->penerbit (Rp.$this->harga,-)";
        return $str;
    }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct ($judul='judul', $penulis='penulis', $penerbit='penerbit', $harga=0, $jmlHalaman = 0){
        parent ::__construct($judul, $penulis, $penerbit, $harga);
        $this ->jmlHalaman=$jmlHalaman;
    }
    public function getInfoProduk(){
        $str = "Komik : " . parent::getInfoProduk() . "- $this->jmlHalaman Halaman";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;
    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $waktuMain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain=$waktuMain;
    }
    public function getInfoProduk(){
        $str = "Game :" . parent::getInfoProduk() . " - $this->waktuMain Jam";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk){
        $str = "$produk->judul | $produk->penulis, $produk->penerbit (Rp.$produk->harga) - $produk->waktuMain Jam";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Nishimoto", "Erlangga", 250000, 150);
$produk2 = new Game("Uncharted", "Neil", "Pusaka Ilmu", 500000, 50);
$produk3 = new Produk("Doraemon", "Nishimoto", "Erlangga", 500000);
$produk4 = new Produk();

echo $produk1 -> getInfoProduk();
echo "<br>";
echo $produk2 -> getInfoProduk();
echo "<br>";
echo $produk3 -> getInfoProduk();
echo "<br>";

$produk1->setJudul("Dragon Ball");
$produk1->judul = "Shinchan";

echo $produk1->getJudul();

//echo
//$infoproduk = new CetakInfoProduk();
//echo $infoproduk->cetak($produk1);
?>