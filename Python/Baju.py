from Aksesoris import Aksesoris

class Baju(Aksesoris):
    def __init__(self, id=None, nama=None, harga=None, stok=None, jenis=None, bahan=None, warna=None, untuk=None, size=None, merk=None):
        super().__init__(id, nama, harga, stok, jenis, bahan, warna)
        self.untuk = untuk
        self.size = size
        self.merk = merk

    # setter dan getter

    # setter untuk
    def set_untuk(self, untuk):
        self.untuk = untuk

    # setter size
    def set_size(self, size):
        self.size = size

    # setter merk
    def set_merk(self, merk):
        self.merk = merk

    # getter untuk
    def get_untuk(self):
        return self.untuk

    # getter size
    def get_size(self):
        return self.size

    # getter merk
    def get_merk(self):
        return self.merk