class Aksesoris extends PetShop {
    private String jenis;
    private String bahan;
    private String warna;

    public Aksesoris() {
        this.jenis = "";
        this.bahan = "";
        this.warna = "";
    }

    public void setJenis(String jenis) {
        this.jenis = jenis;
    }

    public void setBahan(String bahan) {
        this.bahan = bahan;
    }

    public void setWarna(String warna) {
        this.warna = warna;
    }

    public String getJenis() {
        return jenis;
    }

    public String getBahan() {
        return bahan;
    }

    public String getWarna() {
        return warna;
    }
}
