from Aksesoris import Aksesoris

class Baju(Aksesoris):
    def __init__(self):
        super().__init__()
        self.untuk = ""
        self.size = ""
        self.merk = ""

    def set_untuk(self, untuk):
        self.untuk = untuk

    def set_size(self, size):
        self.size = size

    def set_merk(self, merk):
        self.merk = merk

    def get_untuk(self):
        return self.untuk

    def get_size(self):
        return self.size

    def get_merk(self):
        return self.merk

    def set_all(self, id, nama, harga, stok, jenis, bahan, warna, untuk, size, merk):
        self.set_id(id)
        self.set_nama_produk(nama)
        self.set_harga_produk(harga)
        self.set_stok_produk(stok)
        self.set_jenis(jenis)
        self.set_bahan(bahan)
        self.set_warna(warna)
        self.set_untuk(untuk)
        self.set_size(size)
        self.set_merk(merk)

