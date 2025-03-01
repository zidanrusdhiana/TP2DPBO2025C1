class PetShop:
    def __init__(self, id=None, nama=None, harga=None, stok=None):
        self.id = id
        self.nama = nama
        self.harga = harga
        self.stok = stok

    # setter dan getter

    # setter id
    def set_id(self, id):
        self.id = id

    # setter nama produk
    def set_nama(self, nama):
        self.nama = nama

    # setter stok
    def set_stok(self, stok):
        self.stok = stok

    # setter harga
    def set_harga(self, harga):
        self.harga = harga

    # getter id
    def get_id(self):
        return self.id

    # getter nama produk
    def get_nama(self):
        return self.nama

    # getter stok
    def get_stok(self):
        return self.stok

    # getter harga
    def get_harga(self):
        return self.harga