<?php
include_once 'Aksesoris.php';

class Baju extends Aksesoris {
    private $untuk;
    private $size;
    private $merk;

    public function __construct($id = null, $nama = null, $harga = null, $stok = null, $foto_produk = null, $jenis = null, $bahan = null, $warna = null, $untuk = null, $size = null, $merk = null) {
        parent::__construct($id, $nama, $harga, $stok, $foto_produk, $jenis, $bahan, $warna);
        $this->untuk = $untuk;
        $this->size = $size;
        $this->merk = $merk;
    }

    // setter dan getter

    // setter untuk
    public function setUntuk($untuk) {
        $this->untuk = $untuk;
    }

    // setter size
    public function setSize($size) {
        $this->size = $size;
    }

    // setter merk
    public function setMerk($merk) {
        $this->merk = $merk;
    }

    // getter untuk
    public function getUntuk() {
        return $this->untuk;
    }

    // getter size
    public function getSize() {
        return $this->size;
    }

    // getter merk
    public function getMerk() {
        return $this->merk;
    }
}
?>