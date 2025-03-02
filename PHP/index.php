<?php

// Load class definitions before starting the session
require_once 'class/PetShop.php';
require_once 'class/Aksesoris.php';
require_once 'class/Baju.php';

// Start the session
session_start();

// Fungsi untuk membersihkan nama file
function bersihkanNamaFile($nama) {
    // Hapus karakter khusus dan ganti spasi dengan underscore
    $nama = preg_replace('/[^A-Za-z0-9_.]/', '', $nama); // Hapus karakter khusus
    $nama = str_replace(' ', '_', $nama); // Ganti spasi dengan underscore
    return $nama;
}

// Inisialisasi session jika belum ada
if (!isset($_SESSION['daftar_baju'])) {
    $_SESSION['daftar_baju'] = [];

    // Tambahkan 5 data hardcode
    $dataHardcode = [
        new Baju("a01", "Patpat", 12000, 3, "patpat.jpg", "Bodywear", "Katun", "Pink", "Kucing", "M", "elCatto"),
        new Baju("a02", "Furcoat", 15000, 5, "furcoat.jpg", "Jaket", "Wol", "Hitam", "Anjing", "L", "FurryPaws"),
        new Baju("a03", "Raincoat", 18000, 2, "raincoat.jpg", "Jas Hujan", "PVC", "Kuning", "Kucing", "S", "RainPet"),
        new Baju("a04", "Sweater", 13000, 4, "sweater.jpg", "Pakaian", "Rajut", "Merah", "Anjing", "XL", "Woofywear"),
        new Baju("a05", "T-Shirt", 11000, 6, "tshirt.jpg", "Kaos", "Katun", "Biru", "Kucing", "M", "MeowStyle"),
    ];

    // Simpan data hardcode ke session
    foreach ($dataHardcode as $baju) {
        $_SESSION['daftar_baju'][] = $baju;
    }
}

// Debugging: Tampilkan isi session
echo "<pre>";
print_r($_SESSION['daftar_baju']);
echo "</pre>";

// Proses tambah data jika form dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $id = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $stok_produk = $_POST['stok_produk'];
    $jenis = $_POST['jenis'];
    $bahan = $_POST['bahan'];
    $warna = $_POST['warna'];
    $untuk = $_POST['untuk'];
    $size = $_POST['size'];
    $merk = $_POST['merk'];

    // Proses upload file
    $foto_produk = $_FILES['foto_produk'];
    $nama_produk_bersih = bersihkanNamaFile($nama_produk); // Bersihkan nama produk
    $ekstensi = pathinfo($foto_produk['name'], PATHINFO_EXTENSION); // Ambil ekstensi file
    $nama_file = $nama_produk_bersih . '.' . $ekstensi; // Gabungkan nama produk dengan ekstensi
    $target_file = 'img/' . $nama_file;

    if (move_uploaded_file($foto_produk['tmp_name'], $target_file)) {
        // Buat objek Baju baru
        $bajuBaru = new Baju($id, $nama_produk, $harga_produk, $stok_produk, $nama_file, $jenis, $bahan, $warna, $untuk, $size, $merk);

        // Tambahkan ke session
        $_SESSION['daftar_baju'][] = $bajuBaru;

        // Redirect ke halaman utama untuk menghindari resubmit form
        header('Location: index.php');
        exit;
    } else {
        echo "Gagal mengupload file.";
    }
}

$daftarBaju = $_SESSION['daftar_baju'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .add-button {
            margin-bottom: 20px;
        }
        img {
            max-width: 100px;
            height: auto;
        }
        form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Daftar Produk</h1>

    <!-- Form Tambah Data -->
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <h2>Tambah Data Produk</h2>
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required>

        <label for="nama_produk">Nama Produk:</label>
        <input type="text" id="nama_produk" name="nama_produk" required>

        <label for="harga_produk">Harga:</label>
        <input type="number" id="harga_produk" name="harga_produk" required>

        <label for="stok_produk">Stok:</label>
        <input type="number" id="stok_produk" name="stok_produk" required>

        <label for="foto_produk">Foto Produk:</label>
        <input type="file" id="foto_produk" name="foto_produk" accept="image/*" required>

        <label for="jenis">Jenis:</label>
        <input type="text" id="jenis" name="jenis" required>

        <label for="bahan">Bahan:</label>
        <input type="text" id="bahan" name="bahan" required>

        <label for="warna">Warna:</label>
        <input type="text" id="warna" name="warna" required>

        <label for="untuk">Untuk:</label>
        <input type="text" id="untuk" name="untuk" required>

        <label for="size">Size:</label>
        <input type="text" id="size" name="size" required>

        <label for="merk">Merk:</label>
        <input type="text" id="merk" name="merk" required>

        <button type="submit">Simpan</button>
    </form>

    <!-- Tabel Daftar Produk -->
    <h2>Daftar Produk</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Foto Produk</th>
                <th>Jenis</th>
                <th>Bahan</th>
                <th>Warna</th>
                <th>Untuk</th>
                <th>Size</th>
                <th>Merk</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($daftarBaju)): ?>
                <?php foreach ($daftarBaju as $baju): ?>
                    <tr>
                        <td><?= htmlspecialchars($baju->get_id()); ?></td>
                        <td><?= htmlspecialchars($baju->get_nama_produk()); ?></td>
                        <td><?= htmlspecialchars($baju->get_harga_produk()); ?></td>
                        <td><?= htmlspecialchars($baju->get_stok_produk()); ?></td>
                        <td>
                            <?php if ($baju->get_foto_produk()): ?>
                                <img src="img/<?= htmlspecialchars($baju->get_foto_produk()); ?>" alt="Foto Produk">
                            <?php else: ?>
                                Tidak ada foto
                            <?php endif; ?>
                        </td>
                        <td><?= htmlspecialchars($baju->get_jenis()); ?></td>
                        <td><?= htmlspecialchars($baju->get_bahan()); ?></td>
                        <td><?= htmlspecialchars($baju->get_warna()); ?></td>
                        <td><?= htmlspecialchars($baju->get_untuk()); ?></td>
                        <td><?= htmlspecialchars($baju->get_size()); ?></td>
                        <td><?= htmlspecialchars($baju->get_merk()); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="11" style="text-align: center;">Tidak ada data tersedia.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>