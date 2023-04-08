<?php 

class Produk{
    public $judul,
    $penulis,
    $penerbit,
    $harga;
    
    public function __construct($judul ='judul', $penulis = 'penulis', $penerbit='penerbit', $harga=0){
        //echo "hello";
        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
    
}

public function getLabel(){
    return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    //return $this->judul .','.$this->penulis;

}

public function getInfoProduk(){
    $str ="$this->judul | $this->penulis, $this->penerbit (Rp.$this->harga,-)";
    return $str;
    }
}

class Komik extends Produk{
    public $jmlHalaman;

    public function __construct($judul = 'judul', $penulis ='penulis', $penerbit='penerbit', $harga = 0, $jmlHalaman = 0){
        // $this->judul=$judul;
       // $this->penulis=$penulis;
       // $this->penerbit=$penerbit;
       // $this->harga=$harga;
       //$this->jmlHalaman=$jmlHalaman;

        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman=$jmlHalaman;
    }
}

public function getInfoProduk(){
    $str = "Komik: " .parent::getInfoProduk()."
}
?>