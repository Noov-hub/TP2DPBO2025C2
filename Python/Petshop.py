class Petshop:
    def __init__(self):
        self.id = ""
        self.nama_produk = ""
        self.harga_produk = 0.0
        self.stok_produk = 0

    def set_id(self, id):
        self.id = id

    def set_nama_produk(self, nama_produk):
        self.nama_produk = nama_produk

    def set_harga_produk(self, harga_produk):
        self.harga_produk = harga_produk

    def set_stok_produk(self, stok_produk):
        self.stok_produk = stok_produk

    def get_id(self):
        return self.id

    def get_nama_produk(self):
        return self.nama_produk

    def get_harga_produk(self):
        return self.harga_produk

    def get_stok_produk(self):
        return self.stok_produk
