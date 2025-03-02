#include <iostream>
#include <string>
#include <vector>
#include "Aksesoris.cpp"
using namespace std;

class Baju : public Aksesoris {
    private:
        string untuk, size, merk;
    
    public:
        // Konstruktor kosongan
        Baju() : untuk(""), size(""), merk("") {}
    
        // Destruktor
        ~Baju() {
        }
    
        void set_untuk(string untuk) { this->untuk = untuk; }
        void set_size(string size) { this->size = size; }
        void set_merk(string merk) { this->merk = merk; }
    
        string get_untuk() const { return untuk; }
        string get_size() const { return size; }
        string get_merk() const { return merk; }
    
        // Metode setAll untuk mengatur semua atribut sekaligus
        void setAll(string id, string nama, double harga, int stok, string jenis, string bahan, string warna, string untuk, string size, string merk) {
            set_id(id);
            set_nama_produk(nama);
            set_harga_produk(harga);
            set_stok_produk(stok);
            set_jenis(jenis);
            set_bahan(bahan);
            set_warna(warna);
            set_untuk(untuk);
            set_size(size);
            set_merk(merk);
        }
    };