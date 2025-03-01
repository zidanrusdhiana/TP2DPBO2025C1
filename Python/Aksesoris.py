from PetShop import PetShop

class Aksesoris(PetShop):
    def __init__(self, id=None, nama=None, harga=None, stok=None, jenis=None, bahan=None, warna=None):
        super().__init__(id, nama, harga, stok)
        self.jenis = jenis
        self.bahan = bahan
        self.warna = warna

    # setter dan getter

    # setter jenis
    def set_jenis(self, jenis):
        self.jenis = jenis

    # setter bahan
    def set_bahan(self, bahan):
        self.bahan = bahan

    # setter warna
    def set_warna(self, warna):
        self.warna = warna

    # getter jenis
    def get_jenis(self):
        return self.jenis

    # getter bahan
    def get_bahan(self):
        return self.bahan

    # getter warna
    def get_warna(self):
        return self.warna