#include <iostream>
#include <string>
#include <vector>
#include "Petshop.cpp"
using namespace std;

class Aksesoris : public PetShop {
    private:
        string jenis, bahan, warna;
    
    public:
        // Konstruktor kosongan
        Aksesoris() : jenis(""), bahan(""), warna("") {}
    
        // Destruktor
        ~Aksesoris() {
    
        }
    
        void set_jenis(string jenis) { this->jenis = jenis; }
        void set_bahan(string bahan) { this->bahan = bahan; }
        void set_warna(string warna) { this->warna = warna; }
    
        string get_jenis() const { return jenis; }
        string get_bahan() const { return bahan; }
        string get_warna() const { return warna; }
    };
    