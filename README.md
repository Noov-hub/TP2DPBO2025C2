# TP2DPBO2025C2
# JANJI
Saya Ibnu Fadhilah dengan NIM 2300613 mengerjakan Tugas Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

# Desain
## Struktur Kelas

### 1. `PetShop`
**Atribut:**
- `id` : ID produk
- `nama_produk` : Nama produk
- `harga_produk` : Harga produk
- `stok_produk` : Jumlah stok produk

**Metode:**
- Setter dan getter untuk masing-masing atribut.

### 2. `Aksesoris` (Turunan dari `PetShop`)
**Atribut:**
- `jenis` : Jenis aksesoris
- `bahan` : Bahan aksesoris
- `warna` : Warna aksesoris

**Metode:**
- Setter dan getter untuk masing-masing atribut.

### 3. `Baju` (Turunan dari `Aksesoris`)
**Atribut:**
- `untuk` : Target pengguna pakaian (Kucing/Anjing)
- `size` : Ukuran pakaian
- `merk` : Merk pakaian

**Metode:**
- Setter dan getter untuk masing-masing atribut.
- `setAll()` : Mengatur semua atribut sekaligus.

## Alur Program (Umum untuk C++, Java, PHP, dan Python)
1. Program menyimpan data awal tentang pakaian hewan peliharaan menggunakan objek `Baju`.
2. Data awal tersebut disimpan dalam sebuah struktur data yang sesuai, seperti `vector` (C++), `ArrayList` (Java), `array` (PHP), atau `list` (Python).
3. Program menampilkan data pakaian dalam bentuk tabel dengan format yang rapi.
4. Pengguna diberi pilihan untuk menambahkan data baru.
5. Jika pengguna memilih untuk menambah data:
   - Program meminta input untuk semua atribut produk pakaian.
   - Data yang dimasukkan pengguna akan ditambahkan ke dalam struktur penyimpanan data.
   - Program kembali menampilkan daftar produk setelah pembaruan.
6. Program selesai setelah menampilkan data terbaru.

## Contoh Tampilan Output
```
+----+--------+-------+------+--------+-------+-------+------+----+----------+
| ID | Nama   | Harga | Stok | Jenis  | Bahan | Warna | Untuk | Size | Merk    |
+----+--------+-------+------+--------+-------+-------+------+----+----------+
| a01| Patpat | 12000 | 3    | Bodywear | Katun | Pink | Kucing | M  | elCatto |
| a02| Furcoat| 15000 | 5    | Jaket | Wol | Hitam | Anjing | L  | FurryPaws|
+----+--------+-------+------+--------+-------+-------+------+----+----------+
```

## Teknologi yang Digunakan
- **C++** dengan STL `vector` dan `iomanip` untuk tampilan tabel.
- **Java** dengan `ArrayList` dan `printf` untuk format tabel.
- **PHP** dengan `array` dan `echo` untuk tampilan tabel.
- **Python** dengan `list` dan `tabulate` untuk tampilan tabel.

## Cara Menjalankan Program
### C++
1. Pastikan memiliki compiler C++ (misalnya g++).
2. Simpan file dengan ekstensi `.cpp`.
3. Compile dan jalankan menggunakan perintah berikut di terminal:
   ```
   g++ -o petshop petshop.cpp
   ./petshop
   ```

### Java
1. Simpan file dengan ekstensi `.java`.
2. Compile dan jalankan menggunakan perintah berikut:
   ```
   javac PetShop.java
   java PetShop
   ```

### PHP
1. Simpan file dengan ekstensi `.php`.
2. Jalankan menggunakan perintah:
   ```
   php petshop.php
   ```

### Python
1. Simpan file dengan ekstensi `.py`.
2. Jalankan menggunakan perintah:
   ```
   python petshop.py
   ```

## Lisensi
Program ini bersifat open-source dan bebas digunakan untuk keperluan pendidikan atau pengembangan lebih lanjut.



# Desain OOP
Program terdiri dari satu class, yaitu "Petshop"dengan desain sebagai berikut:

Class "Petshop"
Class ini merepresentasikan sebuah produk di petshop dengan atribut sebagai berikut:

- ID (Private)
- namaProduk (Private)
- kategori (Private)
- harga (Private)

Class "Petshop" juga terdiri dari beberapa method:

- Constructor: Menginisialisasi atribut dengan nilai default kosong atau nol.
- setData: Mengubah nilai atribut dari objek (ID, namaProduk, kategori, harga).
- reset: Mengembalikan nilai atribut ke default (kosong atau nol).
- Getter Methods: (getID(), getNamaProduk(), getKategori(), getHarga()) untuk mengambil nilai atribut.

# Alur

## Inisialisasi dan Penyimpanan Data
   Java: Menggunakan ArrayList untuk menyimpan daftar produk.
  Python: Menggunakan list (data_petshop) untuk menyimpan produk dalam bentuk objek Petshop.
  PHP: Menggunakan session ($_SESSION['data_petshop']) untuk menyimpan produk selama sesi aktif.

## Menampilkan Menu dan Interaksi Pengguna
  Pada Java (Console-Based), Python (Console-Based), dan PHP (Web-Based), program menampilkan menu dengan pilihan:

  - 1 | Show
  - 2 | Add
  - 3 | Change
  - 4 | Delete
  - 5 | Search
  - 0 | Exit
  
  Java & Python: Menggunakan scanner/input untuk menerima pilihan dari pengguna.
  PHP: Menggunakan form HTML dan button submit untuk menangani input pengguna.
 Operasi CRUD (Create, Read, Update, Delete)
  ### Menampilkan Data Produk (Show)
    Java & Python: Menampilkan daftar produk dalam format teks dengan iterasi melalui list.
    PHP: Menampilkan data dalam bentuk tabel HTML, termasuk gambar produk.
 ### Menambahkan Produk Baru (Add)
    Pengguna memasukkan:
    ID Produk (harus unik)
    Nama Produk
    Kategori Produk
    Harga Produk
    *(PHP saja) Gambar Produk
    Jika ID sudah ada → tampilkan pesan kesalahan.
    Data produk disimpan ke dalam list (Java/Python) atau session (PHP).
 ### Mengubah Data Produk (Change)
    Pengguna memasukkan ID produk yang ingin diubah.
    Jika produk ditemukan → pengguna memasukkan data baru:
    Nama, Kategori, Harga, Gambar (PHP).
    Data diperbarui dalam list/session.
    Jika produk tidak ditemukan → tampilkan pesan kesalahan.
 ### Menghapus Produk (Delete)
    Pengguna memasukkan ID produk yang ingin dihapus.
    Jika ditemukan → produk dihapus dari list/session.
    PHP saja: Jika ada gambar terkait, file gambar juga dihapus.
### Mencari Produk (Search)
    Pengguna memasukkan ID produk yang ingin dicari.
    Jika ditemukan → tampilkan informasi produk.
    Jika tidak ditemukan → tampilkan pesan kesalahan.
## Menjalankan Program
  Java & Python:
    Program berjalan dalam loop while/do-while, meminta input hingga pengguna memilih 0 | Exit.
    Program menutup scanner/input saat keluar untuk mencegah kebocoran memori.
  PHP:
    Menggunakan form submission untuk menangani permintaan pengguna.
    Menampilkan data dalam bentuk tabel dinamis yang diperbarui secara langsung setelah perubahan.



