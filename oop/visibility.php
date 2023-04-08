<?php
class Produk {
    private $judul, $penulis, $penerbit, $harga;

    public function getJudul(){
        return $this->judul;
    }

    public function setJudul($judul){
        $this->judul = $judul;
    }
}

$produk1 = new Produk();
$produk1->setJudul("Dragon Ball");
$produk1->setJudul("Shinchan");
echo $produk1->getJudul(); // output: Shinchan
?>
