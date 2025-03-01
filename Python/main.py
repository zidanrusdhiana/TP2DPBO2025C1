from Baju import Baju
import re

def print_table(list_item):
    id_width = 2
    nama_width = 4
    harga_width = 5
    stok_width = 4
    jenis_width = 5
    bahan_width = 5
    warna_width = 5
    untuk_width = 5
    size_width = 4
    merk_width = 4

    for item in list_item:
        id_width = max(id_width, len(str(item.id)))
        nama_width = max(nama_width, len(item.nama))
        harga_width = max(harga_width, len(f"{item.harga:.2f}"))
        stok_width = max(stok_width, len(str(item.stok)))
        jenis_width = max(jenis_width, len(item.jenis))
        bahan_width = max(bahan_width, len(item.bahan))
        warna_width = max(warna_width, len(item.warna))
        untuk_width = max(untuk_width, len(item.untuk))
        size_width = max(size_width, len(item.size))
        merk_width = max(merk_width, len(item.merk))

    print("+-" + "-" * id_width + "-+-"
          + "-" * nama_width + "-+-"
          + "-" * harga_width + "-+-"
          + "-" * stok_width + "-+-"
          + "-" * jenis_width + "-+-"
          + "-" * bahan_width + "-+-"
          + "-" * warna_width + "-+-"
          + "-" * untuk_width + "-+-"
          + "-" * size_width + "-+-"
          + "-" * merk_width + "-+")

    print(f"| {'ID':<{id_width}} | {'Nama':<{nama_width}} | {'Harga':<{harga_width}} | {'Stok':<{stok_width}} | {'Jenis':<{jenis_width}} | {'Bahan':<{bahan_width}} | {'Warna':<{warna_width}} | {'Untuk':<{untuk_width}} | {'Size':<{size_width}} | {'Merk':<{merk_width}} |")

    print("+-" + "-" * id_width + "-+-"
          + "-" * nama_width + "-+-"
          + "-" * harga_width + "-+-"
          + "-" * stok_width + "-+-"
          + "-" * jenis_width + "-+-"
          + "-" * bahan_width + "-+-"
          + "-" * warna_width + "-+-"
          + "-" * untuk_width + "-+-"
          + "-" * size_width + "-+-"
          + "-" * merk_width + "-+")

    for item in list_item:
        print(f"| {item.id:<{id_width}} | {item.nama:<{nama_width}} | {item.harga:<{harga_width}.2f} | {item.stok:<{stok_width}} | {item.jenis:<{jenis_width}} | {item.bahan:<{bahan_width}} | {item.warna:<{warna_width}} | {item.untuk:<{untuk_width}} | {item.size:<{size_width}} | {item.merk:<{merk_width}} |")

    print("+-" + "-" * id_width + "-+-"
          + "-" * nama_width + "-+-"
          + "-" * harga_width + "-+-"
          + "-" * stok_width + "-+-"
          + "-" * jenis_width + "-+-"
          + "-" * bahan_width + "-+-"
          + "-" * warna_width + "-+-"
          + "-" * untuk_width + "-+-"
          + "-" * size_width + "-+-"
          + "-" * merk_width + "-+")

def main():
    item1 = Baju(1221, "Baju Kelinci", 599000, 3, "Pakaian", "Wol", "Hitam", "Kelinci", "M", "Adibunny")
    item2 = Baju(2112, "Baju Kucing", 99999, 12, "Pakaian", "Katun", "Biru", "Kucing", "XL", "Nicat")
    item3 = Baju(3124, "Topi Anjing", 32101, 4, "Aksesoris", "Kain", "Hijau", "Anjing", "M", "Dogpreme")
    item4 = Baju(3313, "Topi Kucing", 16789, 13, "Aksesoris", "Kain", "Pink", "Kucing", "S", "Catpreme")
    item5 = Baju(66, "Sweater Kucing", 66666, 6, "Pakaian", "Wol", "Putih", "Kucing", "XXL", "Catify")

    list_item = [item1, item2, item3, item4, item5]

    print("Data Awal:")
    print_table(list_item)

    print("\nTambah data baru? (y/n): ", end="")
    choice = input().strip().lower()

    while choice == 'y':
        n = int(input("Masukkan jumlah data: "))

        for _ in range(n):
            id, nama, harga, stok, jenis, bahan, warna, untuk, size, merk = input().split()

            id = int(id)
            harga = float(harga)
            stok = int(stok)

            item = Baju(id, nama, harga, stok, jenis, bahan, warna, untuk, size, merk)
            list_item.append(item)

        print_table(list_item)

        print("\nTambah data baru? (y/n): ", end="")
        choice = input().strip().lower()

    print("Have a good day! ^^")

if __name__ == "__main__":
    main()