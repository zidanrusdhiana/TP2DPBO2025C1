<?php

class PetShop {
    private $id;
    private $nama;
    private $harga;
    private $stok;
    private $foto_produk;

    public function __construct($id = null, $nama = null, $harga = null, $stok = null, $foto_produk = null) {
        $this->id = $id;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->foto_produk = $foto_produk;
    }

    // setter dan getter

    // setter id
    public function setId($id) {
        $this->id = $id;
    }

    // setter nama produk
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // setter stok
    public function setStok($stok) {
        $this->stok = $stok;
    }

    // setter harga
    public function setHarga($harga) {
        $this->harga = $harga;
    }

    // setter foto produk
    public function setFotoProduk($foto_produk) {
        $this->foto_produk = $foto_produk;
    }

    // getter id
    public function getId() {
        return $this->id;
    }

    // getter nama produk
    public function getNama() {
        return $this->nama;
    }

    // getter stok
    public function getStok() {
        return $this->stok;
    }

    // getter harga
    public function getHarga() {
        return $this->harga;
    }

    // getter foto produk
    public function getFotoProduk() {
        return $this->foto_produk;
    }

    // method untuk upload gambar
    public function uploadGambar($file) {
        $target_dir = "images/";
        
        // buat direktori untuk menyimpan file image
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        
        // buat nama file gambar
        $unique_name = $target_dir . time() . '_' . basename($file["name"]);
        if (move_uploaded_file($file["tmp_name"], $unique_name)) {
            $this->setFotoProduk($unique_name);
        }
            
    }
}
?>