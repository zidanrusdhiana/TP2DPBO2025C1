<?php
include_once 'Baju.php';

session_start();

// Inisialisasi 5 objek awal
if (!isset($_SESSION['listItem']) || empty($_SESSION['listItem'])) {
    $item1 = new Baju();
    $item1->setId(1221);
    $item1->setNama("Baju Kelinci");
    $item1->setHarga(599000);
    $item1->setStok(3);
    $item1->setFotoProduk('images/darcat.jpeg');
    $item1->setJenis("Pakaian");
    $item1->setBahan("Wol");
    $item1->setWarna("Hitam");
    $item1->setUntuk("Kelinci");
    $item1->setSize("M");
    $item1->setMerk("Adibunny");

    $item2 = new Baju();
    $item2->setId(2112);
    $item2->setNama("Baju Kucing");
    $item2->setHarga(99999);
    $item2->setStok(12);
    $item2->setFotoProduk('images/darcat.jpeg');
    $item2->setJenis("Pakaian");
    $item2->setBahan("Katun");
    $item2->setWarna("Biru");
    $item2->setUntuk("Kucing");
    $item2->setSize("XL");
    $item2->setMerk("Nicat");

    $item3 = new Baju();
    $item3->setId(3124);
    $item3->setNama("Topi Anjing");
    $item3->setHarga(32101);
    $item3->setStok(4);
    $item3->setFotoProduk('images/darcat.jpeg');
    $item3->setJenis("Aksesoris");
    $item3->setBahan("Kain");
    $item3->setWarna("Hijau");
    $item3->setUntuk("Anjing");
    $item3->setSize("M");
    $item3->setMerk("Dogpreme");

    $item4 = new Baju();
    $item4->setId(3313);
    $item4->setNama("Topi Kucing");
    $item4->setHarga(16789);
    $item4->setStok(13);
    $item4->setFotoProduk('images/darcat.jpeg');
    $item4->setJenis("Aksesoris");
    $item4->setBahan("Kain");
    $item4->setWarna("Pink");
    $item4->setUntuk("Kucing");
    $item4->setSize("S");
    $item4->setMerk("Catpreme");

    $item5 = new Baju();
    $item5->setId(66);
    $item5->setNama("Sweater Kucing");
    $item5->setHarga(66666);
    $item5->setStok(6);
    $item5->setFotoProduk('images/darcat.jpeg');
    $item5->setJenis("Pakaian");
    $item5->setBahan("Wol");
    $item5->setWarna("Putih");
    $item5->setUntuk("Kucing");
    $item5->setSize("XXL");
    $item5->setMerk("Catify");

    $_SESSION['listItem'] = [$item1, $item2, $item3, $item4, $item5];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $foto_produk = $_FILES['foto_produk'];
    $jenis = $_POST['jenis'];
    $bahan = $_POST['bahan'];
    $warna = $_POST['warna'];
    $untuk = $_POST['untuk'];
    $size = $_POST['size'];
    $merk = $_POST['merk'];

    $baju = new Baju();
    $baju->setId($id);
    $baju->setNama($nama);
    $baju->setHarga($harga);
    $baju->setStok($stok);
    if($foto_produk != null) {
        $baju->uploadGambar($foto_produk);
    }
    $baju->setJenis($jenis);
    $baju->setBahan($bahan);
    $baju->setWarna($warna);
    $baju->setUntuk($untuk);
    $baju->setSize($size);
    $baju->setMerk($merk);

    $_SESSION['listItem'][] = $baju;

    header('Location: index.php');
    exit;
}

// inisialisasi session listItem untuk menyimpan data petshop
if (!isset($_SESSION['listItem'])) {
    $_SESSION['listItem'] = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">PetShop</h1>

        <!-- Tabel Seluruh Data -->
        <h2 class="text-xl font-bold mb-4">Seluruh Data</h2>
        <table class="min-w-full bg-white rounded-md shadow-md mb-6">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nama</th>
                    <th class="py-2 px-4 border-b">Harga</th>
                    <th class="py-2 px-4 border-b">Stok</th>
                    <th class="py-2 px-4 border-b">Jenis</th>
                    <th class="py-2 px-4 border-b">Bahan</th>
                    <th class="py-2 px-4 border-b">Warna</th>
                    <th class="py-2 px-4 border-b">Untuk</th>
                    <th class="py-2 px-4 border-b">Size</th>
                    <th class="py-2 px-4 border-b">Merk</th>
                    <th class="py-2 px-4 border-b">Gambar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['listItem'] as $item): ?>
                    <tr>
                        <td class="py-2 px-4 border-b"><?= $item->getId() ?></td>
                        <td class="py-2 px-4 border-b"><?= $item->getNama() ?></td>
                        <td class="py-2 px-4 border-b"><?= $item->getHarga() ?></td>
                        <td class="py-2 px-4 border-b"><?= $item->getStok() ?></td>
                        <td class="py-2 px-4 border-b"><?= $item->getJenis() ?></td>
                        <td class="py-2 px-4 border-b"><?= $item->getBahan() ?></td>
                        <td class="py-2 px-4 border-b"><?= $item->getWarna() ?></td>
                        <td class="py-2 px-4 border-b"><?= $item->getUntuk() ?></td>
                        <td class="py-2 px-4 border-b"><?= $item->getSize() ?></td>
                        <td class="py-2 px-4 border-b"><?= $item->getMerk() ?></td>
                        <td class="py-2 px-4 border-b"><img src="<?= $item->getFotoProduk() ?>" alt="Gambar Produk" class="w-16 h-16"></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Form Tambah Data -->
        <form action="index.php" method="post" enctype="multipart/form-data" class="bg-white p-4 rounded-md shadow-md">
            <h2 class="text-xl font-bold mb-4">Tambah Data</h2>
            <div class="mb-4">
                <label for="id" class="block text-sm font-medium text-gray-700">ID</label>
                <input type="text" name="id" id="id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                <input type="text" name="harga" id="harga" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="stok" class="block text-sm font-medium text-gray-700">Stok</label>
                <input type="text" name="stok" id="stok" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="foto_produk" class="block text-sm font-medium text-gray-700">Pilih gambar untuk diupload</label>
                <input type="file" name="foto_produk" id="foto_produk" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="jenis" class="block text-sm font-medium text-gray-700">Jenis</label>
                <input type="text" name="jenis" id="jenis" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="bahan" class="block text-sm font-medium text-gray-700">Bahan</label>
                <input type="text" name="bahan" id="bahan" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="warna" class="block text-sm font-medium text-gray-700">Warna</label>
                <input type="text" name="warna" id="warna" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="untuk" class="block text-sm font-medium text-gray-700">Untuk</label>
                <input type="text" name="untuk" id="untuk" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="size" class="block text-sm font-medium text-gray-700">Size</label>
                <input type="text" name="size" id="size" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="mb-4">
                <label for="merk" class="block text-sm font-medium text-gray-700">Merk</label>
                <input type="text" name="merk" id="merk" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Tambah</button>
        </form>
    </div>
</body>
</html>