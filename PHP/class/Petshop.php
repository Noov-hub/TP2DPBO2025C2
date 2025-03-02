<?php
class PetShop {
    private $id;
    private $nama_produk;
    private $harga_produk;
    private $stok_produk;
    private $foto_produk;

    public function __construct($id, $nama_produk, $harga_produk, $stok_produk, $foto_produk) {
        $this->id = $id;
        $this->nama_produk = $nama_produk;
        $this->harga_produk = $harga_produk;
        $this->stok_produk = $stok_produk;
        $this->foto_produk = $foto_produk;
    }

    public function get_id() {
        return $this->id;
    }

    public function get_nama_produk() {
        return $this->nama_produk;
    }

    public function get_harga_produk() {
        return $this->harga_produk;
    }

    public function get_stok_produk() {
        return $this->stok_produk;
    }

    public function get_foto_produk() {
        return $this->foto_produk;
    }
}
?>