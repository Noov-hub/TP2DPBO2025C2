<?php
require_once 'PetShop.php';

class Aksesoris extends PetShop {
    private $jenis;
    private $bahan;
    private $warna;

    public function __construct($id, $nama_produk, $harga_produk, $stok_produk, $foto_produk, $jenis, $bahan, $warna) {
        parent::__construct($id, $nama_produk, $harga_produk, $stok_produk, $foto_produk);
        $this->jenis = $jenis;
        $this->bahan = $bahan;
        $this->warna = $warna;
    }

    public function get_jenis() {
        return $this->jenis;
    }

    public function get_bahan() {
        return $this->bahan;
    }

    public function get_warna() {
        return $this->warna;
    }
}
?>
