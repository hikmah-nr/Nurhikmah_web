<?php
class Produk {
    private $judul, $penulis, $penerbit, $harga;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit ='penerbit', $harga = 0){
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
}
        
    }
class Komik extends Produk{
    public $jmlHalaman;
    public function __construct($judul = 'judul', $penulis ='penulis', $penerbit='penerbit', $harga = 0, $jmlHalaman = 0){

        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman=$jmlHalaman;
    }
    public function getJudul(){
        return $this->judul;
    }

    public function setJudul($judul){
        $this->judul = $judul;
    }

    public function getInfoProduk(){
        $str = "Komik: ". parent::getInfoProduk()."-$this->jmlHalaman Halaman";
        return $str;
    }
}
class Game extends Produk{
    public $waktumain;

    public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $waktuMain = 0){
        //$this->judul =$judul;
        //$this->penulis=$penulis;
        //$this->penerbit=$penerbit;
        //$this->harga=$harga;
        //$this->waktuMain=$waktuMain;
    
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    

    }

    public function getInfoProduk(){
        $str = "Game: ". Parent::getInfoProduk()."- $this->waktuMain Jam";
        return $str;
    }

}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str ="$produk->judul | $produk->penulis, $produk->penerbit, (Rp.$produk->harga) -$produk->waktuMain Jam";
        return $str;
        }

    }
    $produk1 = new Komik("Naruto", "Masashi Nishimoto", "Erlangga", 10000, 150);
    $produk2 = new Game("Uncharted", "Neil", "Pusaka Ilmu", 50000, 50);


$produk1->setJudul("Dragon Ball");
$produk1->judul ="Shinchan";
echo $produk1->getJudul(); 
?>
