<?php
include_once 'PetShop.php';

class Aksesoris extends PetShop {
    private $jenis;
    private $bahan;
    private $warna;

    public function __construct($id = null, $nama = null, $harga = null, $stok = null, $foto_produk = null, $jenis = null, $bahan = null, $warna = null) {
        parent::__construct($id, $nama, $harga, $stok, $foto_produk);
        $this->jenis = $jenis;
        $this->bahan = $bahan;
        $this->warna = $warna;
    }

    // setter dan getter

    // setter jenis
    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }

    // setter bahan
    public function setBahan($bahan) {
        $this->bahan = $bahan;
    }

    // setter warna
    public function setWarna($warna) {
        $this->warna = $warna;
    }

    // getter jenis
    public function getJenis() {
        return $this->jenis;
    }

    // getter bahan
    public function getBahan() {
        return $this->bahan;
    }

    // getter warna
    public function getWarna() {
        return $this->warna;
    }
}
?>