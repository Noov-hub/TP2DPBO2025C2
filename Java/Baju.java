class Baju extends Aksesoris {
    private String untuk;
    private String size;
    private String merk;

    public Baju() {
        this.untuk = "";
        this.size = "";
        this.merk = "";
    }

    public void setUntuk(String untuk) {
        this.untuk = untuk;
    }

    public void setSize(String size) {
        this.size = size;
    }

    public void setMerk(String merk) {
        this.merk = merk;
    }

    public String getUntuk() {
        return untuk;
    }

    public String getSize() {
        return size;
    }

    public String getMerk() {
        return merk;
    }

    public void setAll(String id, String nama, double harga, int stok, String jenis, String bahan, String warna, String untuk, String size, String merk) {
        setId(id);
        setNamaProduk(nama);
        setHargaProduk(harga);
        setStokProduk(stok);
        setJenis(jenis);
        setBahan(bahan);
        setWarna(warna);
        setUntuk(untuk);
        setSize(size);
        setMerk(merk);
    }
}
