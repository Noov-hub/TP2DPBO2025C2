#include <iostream>
#include <string>
using namespace std;

class PetShop {
    private:
        string id, nama_produk;
        double harga_produk;
        int stok_produk;
    
    public:
        // Konstruktor kosongan
        PetShop() : id(""), nama_produk(""), harga_produk(0.0), stok_produk(0) {}
    
        // Destruktor
        ~PetShop() {
    
        }
    
        void set_id(string id) { this->id = id; }
        void set_nama_produk(string nama) { this->nama_produk = nama; }
        void set_harga_produk(double harga) { this->harga_produk = harga; }
        void set_stok_produk(int stok) { this->stok_produk = stok; }
    
        string get_id() const { return id; }
        string get_nama_produk() const { return nama_produk; }
        double get_harga_produk() const { return harga_produk; }
        int get_stok_produk() const { return stok_produk; }
};