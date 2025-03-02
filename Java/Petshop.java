class PetShop {
    private String id;
    private String namaProduk;
    private double hargaProduk;
    private int stokProduk;

    public PetShop() {
        this.id = "";
        this.namaProduk = "";
        this.hargaProduk = 0.0;
        this.stokProduk = 0;
    }

    public void setId(String id) {
        this.id = id;
    }

    public void setNamaProduk(String namaProduk) {
        this.namaProduk = namaProduk;
    }

    public void setHargaProduk(double hargaProduk) {
        this.hargaProduk = hargaProduk;
    }

    public void setStokProduk(int stokProduk) {
        this.stokProduk = stokProduk;
    }

    public String getId() {
        return id;
    }

    public String getNamaProduk() {
        return namaProduk;
    }

    public double getHargaProduk() {
        return hargaProduk;
    }

    public int getStokProduk() {
        return stokProduk;
    }
}