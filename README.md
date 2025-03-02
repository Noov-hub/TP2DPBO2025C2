# TP2DPBO2025C2
# JANJI
Saya Ibnu Fadhilah dengan NIM 2300613 mengerjakan Tugas Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

# Desain diagram dan OOP
![image](https://github.com/user-attachments/assets/dd64dc11-d8cf-47f1-81c4-d0ed060cbdce)



## Struktur Kelas

### 1. `PetShop`
**Atribut:**
- `id` : ID produk
- `nama_produk` : Nama produk
- `harga_produk` : Harga produk
- `stok_produk` : Jumlah stok produk
- `foto_produk` : nama foto produk (khusus PHP)

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

## Alur Program ( C++, Java, PHP, dan Python)
1. Program menyimpan data awal tentang pakaian hewan peliharaan menggunakan objek `Baju`.
2. Data awal tersebut disimpan dalam sebuah struktur data yang sesuai, seperti `vector` (C++), `ArrayList` (Java), `array` (PHP), atau `list` (Python).
3. Program menampilkan data pakaian dalam bentuk tabel dengan format yang rapi.
4. Pengguna diberi pilihan untuk menambahkan data baru.
5. Jika pengguna memilih untuk menambah data:
   - Program meminta input untuk semua atribut produk pakaian.
   - Data yang dimasukkan pengguna akan ditambahkan ke dalam struktur penyimpanan data.
   - Program kembali menampilkan daftar produk setelah pembaruan.
6. Program selesai setelah menampilkan data terbaru.


