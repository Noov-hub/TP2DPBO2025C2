#include <iostream>
#include <string>
#include <vector>
#include <iomanip> // Untuk setw
#include "Baju.cpp"
using namespace std;


void tampilkanData(const vector<Baju>& daftarBaju) {
    if (daftarBaju.empty()) {
        cout << "Tidak ada data tersedia." << endl;
        return;
    }

    // Menentukan panjang maksimum untuk setiap kolom
    vector<int> panjangMaks = {2, 4, 5, 4, 5, 5, 5, 5, 4, 4}; // Panjang header

    for (const auto &baju : daftarBaju) {
        panjangMaks[0] = max(panjangMaks[0], (int)baju.get_id().length());
        panjangMaks[1] = max(panjangMaks[1], (int)baju.get_nama_produk().length());
        panjangMaks[2] = max(panjangMaks[2], (int)to_string(baju.get_harga_produk()).length());
        panjangMaks[3] = max(panjangMaks[3], (int)to_string(baju.get_stok_produk()).length());
        panjangMaks[4] = max(panjangMaks[4], (int)baju.get_jenis().length());
        panjangMaks[5] = max(panjangMaks[5], (int)baju.get_bahan().length());
        panjangMaks[6] = max(panjangMaks[6], (int)baju.get_warna().length());
        panjangMaks[7] = max(panjangMaks[7], (int)baju.get_untuk().length());
        panjangMaks[8] = max(panjangMaks[8], (int)baju.get_size().length());
        panjangMaks[9] = max(panjangMaks[9], (int)baju.get_merk().length());
    }

    // Menghitung total panjang garis horizontal
    int totalPanjang = 11; // 11 karakter untuk garis vertikal dan spasi
    for (int panjang : panjangMaks) {
        totalPanjang += panjang + 3; // +3 untuk spasi dan garis vertikal
    }

    // Menampilkan garis horizontal
    auto cetakGaris = [&]() {
        cout << "+";
        for (int panjang : panjangMaks) {
            cout << string(panjang + 2, '-') << "+";
        }
        cout << endl;
    };

    // Menampilkan header
    cetakGaris();
    cout << "| " << left << setw(panjangMaks[0]) << "ID"
         << " | " << setw(panjangMaks[1]) << "Nama"
         << " | " << setw(panjangMaks[2]) << "Harga"
         << " | " << setw(panjangMaks[3]) << "Stok"
         << " | " << setw(panjangMaks[4]) << "Jenis"
         << " | " << setw(panjangMaks[5]) << "Bahan"
         << " | " << setw(panjangMaks[6]) << "Warna"
         << " | " << setw(panjangMaks[7]) << "Untuk"
         << " | " << setw(panjangMaks[8]) << "Size"
         << " | " << setw(panjangMaks[9]) << "Merk"
         << " |" << endl;
    cetakGaris();

    // Menampilkan data
    for (const auto &baju : daftarBaju) {
        cout << "| " << left << setw(panjangMaks[0]) << baju.get_id()
             << " | " << setw(panjangMaks[1]) << baju.get_nama_produk()
             << " | " << setw(panjangMaks[2]) << baju.get_harga_produk()
             << " | " << setw(panjangMaks[3]) << baju.get_stok_produk()
             << " | " << setw(panjangMaks[4]) << baju.get_jenis()
             << " | " << setw(panjangMaks[5]) << baju.get_bahan()
             << " | " << setw(panjangMaks[6]) << baju.get_warna()
             << " | " << setw(panjangMaks[7]) << baju.get_untuk()
             << " | " << setw(panjangMaks[8]) << baju.get_size()
             << " | " << setw(panjangMaks[9]) << baju.get_merk()
             << " |" << endl;
    }
    cetakGaris();
}

void tambahData(vector<Baju>& daftarBaju) {
    int jumlahData;
    cout << "Masukkan jumlah data baru yang ingin ditambahkan: ";
    cin >> jumlahData;

    for (int i = 0; i < jumlahData; ++i) {
        Baju bajuBaru;
        string id, nama, jenis, bahan, warna, untuk, size, merk;
        double harga;
        int stok;

        cout << "Masukkan data ke-" << i + 1 << endl;
        cin >> id >> nama >> harga >> stok >> jenis >> bahan >> warna >> untuk >> size >> merk;

        bajuBaru.setAll(id, nama, harga, stok, jenis, bahan, warna, untuk, size, merk);
        daftarBaju.push_back(bajuBaru);
    }
}

int main() {
    vector<Baju> daftarBaju;

    // Inisialisasi data hardcode menggunakan setAll
    Baju baju1, baju2, baju3, baju4, baju5;
    baju1.setAll("a01", "Patpat", 12000, 3, "Bodywear", "Katun", "Pink", "Kucing", "M", "elCatto");
    baju2.setAll("a02", "Furcoat", 15000, 5, "Jaket", "Wol", "Hitam", "Anjing", "L", "FurryPaws");
    baju3.setAll("a03", "Raincoat", 18000, 2, "Jas Hujan", "PVC", "Kuning", "Kucing", "S", "RainPet");
    baju4.setAll("a04", "Sweater", 13000, 4, "Pakaian", "Rajut", "Merah", "Anjing", "XL", "Woofywear");
    baju5.setAll("a05", "T-Shirt", 11000, 6, "Kaos", "Katun", "Biru", "Kucing", "M", "MeowStyle");

    daftarBaju.push_back(baju1);
    daftarBaju.push_back(baju2);
    daftarBaju.push_back(baju3);
    daftarBaju.push_back(baju4);
    daftarBaju.push_back(baju5);

    tampilkanData(daftarBaju);

    char pilihan;
    cout << "Apakah Anda ingin menambahkan data baru? (y/n): ";
    cin >> pilihan;

    if (pilihan == 'y' || pilihan == 'Y') {
        tambahData(daftarBaju);
        tampilkanData(daftarBaju);
    }

    return 0;
}