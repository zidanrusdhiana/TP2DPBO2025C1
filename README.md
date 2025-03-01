# TP2DPBO2025C1

## Janji
Saya Mochamad Zidan Rusdhiana dengan NIM 2305464 mengerjakan Tugas Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Penjelasan Atribut dan Methods

### 1. PetShop (Parent Class)
Kelas PetShop adalah kelas dasar yang merepresentasikan produk di toko hewan peliharaan.

#### Atribut:
- `id (int)` → Identitas unik dari setiap produk.
- `nama_produk (String)` → Nama dari produk yang dijual.
- `harga_produk (double)` → Harga produk dalam bentuk desimal.
- `stok_produk (int)` → Jumlah stok produk yang tersedia.
- `foto_produk (String)` → Path gambar dari produk. (untuk PHP)

#### Methods:
- Terdapat method untuk upload foto pada program PHP, yang berfungsi membuat direktori untuk menyimpan file image jika belum ada, dan menyimpan gambar dengan format nama yang ditentukan.

### 2. Aksesoris (Child dari PetShop)
Kelas Aksesoris adalah turunan dari PetShop, yang khusus untuk produk aksesori.

#### Atribut:
- `jenis (String)` → Jenis aksesori.
- `bahan (String)` → Material pembuat aksesori, misalnya "Kain".
- `warna (String)` → Warna aksesori, misalnya "Merah", "Biru", "Hitam", dll.

#### Atribut yang diwarisi dari PetShop:
- `id`
- `nama_produk`
- `harga_produk`
- `stok_produk`
- `foto_produk`

### 3. Baju (Child dari Aksesoris)
Kelas Baju adalah turunan dari Aksesoris, yang lebih spesifik untuk produk pakaian.

#### Atribut:
- `untuk (String)` → Target pemakaian, misalnya "Anjing", "Kucing", atau "Umum".
- `size (String)` → Ukuran pakaian, misalnya "S", "M", "L", "XL".
- `merk (String)` → Merek dari pakaian, misalnya "Adidog", "Nicat", "Dogpreme".

#### Atribut yang diwarisi dari PetShop dan Aksesoris:
- `id`
- `nama_produk`
- `harga_produk`
- `stok_produk`
- `foto_produk`
- `jenis`
- `bahan`
- `warna`

## Alur Program
Saat eksekusi program dijalankan, ditampilkan 5 objek awal dalam bentuk tabel. Lalu user diberi pilihan (y/n) untuk menambah data.
Format input data atau testcase terdapat pada file `input.txt`.

## Diagram
![tp2](https://github.com/user-attachments/assets/d0a8501f-c738-4faa-9963-5bc66213aa1d)

## Dokumentasi Program

### CPP
![image](https://github.com/user-attachments/assets/3a84ca68-553c-4304-b185-b85d14ee8233)

### Java
![image](https://github.com/user-attachments/assets/71f7e079-d994-4835-84c3-21eca0da2d3d)

### Python
![image](https://github.com/user-attachments/assets/42e636ad-2a94-4cbb-82c0-e214128fdb1b)

### PHP
![image](https://github.com/user-attachments/assets/fd7e91ef-6bc2-4c90-850d-58ae1ef899e3)
![image](https://github.com/user-attachments/assets/c5e7b6d7-cb8e-496f-95a6-6df9e992d48d)
