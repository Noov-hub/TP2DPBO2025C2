from Petshop import Petshop

class Aksesoris(Petshop):
    def __init__(self):
        super().__init__()
        self.jenis = ""
        self.bahan = ""
        self.warna = ""

    def set_jenis(self, jenis):
        self.jenis = jenis

    def set_bahan(self, bahan):
        self.bahan = bahan

    def set_warna(self, warna):
        self.warna = warna

    def get_jenis(self):
        return self.jenis

    def get_bahan(self):
        return self.bahan

    def get_warna(self):
        return self.warna
