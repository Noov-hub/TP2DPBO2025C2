import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;


public class Main {
    public static void tampilkanData(List<Baju> daftarBaju) {
        if (daftarBaju.isEmpty()) {
            System.out.println("Tidak ada data tersedia.");
            return;
        }

        // Menentukan panjang maksimum untuk setiap kolom
        int[] panjangMaks = {2, 4, 5, 4, 5, 5, 5, 5, 4, 4}; // Panjang header

        for (Baju baju : daftarBaju) {
            panjangMaks[0] = Math.max(panjangMaks[0], baju.getId().length());
            panjangMaks[1] = Math.max(panjangMaks[1], baju.getNamaProduk().length());
            panjangMaks[2] = Math.max(panjangMaks[2], String.valueOf(baju.getHargaProduk()).length());
            panjangMaks[3] = Math.max(panjangMaks[3], String.valueOf(baju.getStokProduk()).length());
            panjangMaks[4] = Math.max(panjangMaks[4], baju.getJenis().length());
            panjangMaks[5] = Math.max(panjangMaks[5], baju.getBahan().length());
            panjangMaks[6] = Math.max(panjangMaks[6], baju.getWarna().length());
            panjangMaks[7] = Math.max(panjangMaks[7], baju.getUntuk().length());
            panjangMaks[8] = Math.max(panjangMaks[8], baju.getSize().length());
            panjangMaks[9] = Math.max(panjangMaks[9], baju.getMerk().length());
        }

        // Menampilkan garis horizontal
        cetakGaris(panjangMaks);

        // Menampilkan header
        System.out.printf("| %-" + panjangMaks[0] + "s | %-" + panjangMaks[1] + "s | %-" + panjangMaks[2] + "s | %-" + panjangMaks[3] + "s | %-" + panjangMaks[4] + "s | %-" + panjangMaks[5] + "s | %-" + panjangMaks[6] + "s | %-" + panjangMaks[7] + "s | %-" + panjangMaks[8] + "s | %-" + panjangMaks[9] + "s |%n",
                "ID", "Nama", "Harga", "Stok", "Jenis", "Bahan", "Warna", "Untuk", "Size", "Merk");
        cetakGaris(panjangMaks);

        // Menampilkan data
        for (Baju baju : daftarBaju) {
            System.out.printf("| %-" + panjangMaks[0] + "s | %-" + panjangMaks[1] + "s | %-" + panjangMaks[2] + "s | %-" + panjangMaks[3] + "s | %-" + panjangMaks[4] + "s | %-" + panjangMaks[5] + "s | %-" + panjangMaks[6] + "s | %-" + panjangMaks[7] + "s | %-" + panjangMaks[8] + "s | %-" + panjangMaks[9] + "s |%n",
                    baju.getId(), baju.getNamaProduk(), baju.getHargaProduk(), baju.getStokProduk(), baju.getJenis(), baju.getBahan(), baju.getWarna(), baju.getUntuk(), baju.getSize(), baju.getMerk());
        }
        cetakGaris(panjangMaks);
    }

    private static void cetakGaris(int[] panjangMaks) {
        System.out.print("+");
        for (int panjang : panjangMaks) {
            System.out.print("-".repeat(panjang + 2) + "+");
        }
        System.out.println();
    }

    public static void tambahData(List<Baju> daftarBaju) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Masukkan jumlah data baru yang ingin ditambahkan: ");
        int jumlahData = scanner.nextInt();
        scanner.nextLine(); // Membersihkan newline setelah nextInt()
    
        for (int i = 0; i < jumlahData; ++i) {
            System.out.print("Masukkan data ke-" + (i + 1) + " (ID Nama Harga Stok Jenis Bahan Warna Untuk Size Merk): ");
            String input = scanner.nextLine(); // Baca seluruh baris input
    
            // Pisahkan input berdasarkan spasi
            String[] data = input.split(" ");
    
            // Pastikan input memiliki jumlah data yang tepat
            if (data.length != 10) {
                System.out.println("Input tidak valid. Pastikan Anda memasukkan 10 nilai.");
                i--; // Ulangi iterasi ini
                continue;
            }
    
            // Parsing data
            String id = data[0];
            String nama = data[1];
            double harga = Double.parseDouble(data[2]);
            int stok = Integer.parseInt(data[3]);
            String jenis = data[4];
            String bahan = data[5];
            String warna = data[6];
            String untuk = data[7];
            String size = data[8];
            String merk = data[9];
    
            // Buat objek Baju dan tambahkan ke daftar
            Baju bajuBaru = new Baju();
            bajuBaru.setAll(id, nama, harga, stok, jenis, bahan, warna, untuk, size, merk);
            daftarBaju.add(bajuBaru);
        }
    }

    public static void main(String[] args) {
        List<Baju> daftarBaju = new ArrayList<>();

        // Inisialisasi data hardcode menggunakan setAll
        Baju baju1 = new Baju();
        baju1.setAll("a01", "Patpat", 12000, 3, "Bodywear", "Katun", "Pink", "Kucing", "M", "elCatto");

        Baju baju2 = new Baju();
        baju2.setAll("a02", "Furcoat", 15000, 5, "Jaket", "Wol", "Hitam", "Anjing", "L", "FurryPaws");

        Baju baju3 = new Baju();
        baju3.setAll("a03", "Raincoat", 18000, 2, "Jas Hujan", "PVC", "Kuning", "Kucing", "S", "RainPet");

        Baju baju4 = new Baju();
        baju4.setAll("a04", "Sweater", 13000, 4, "Pakaian", "Rajut", "Merah", "Anjing", "XL", "Woofywear");

        Baju baju5 = new Baju();
        baju5.setAll("a05", "T-Shirt", 11000, 6, "Kaos", "Katun", "Biru", "Kucing", "M", "MeowStyle");

        daftarBaju.add(baju1);
        daftarBaju.add(baju2);
        daftarBaju.add(baju3);
        daftarBaju.add(baju4);
        daftarBaju.add(baju5);

        tampilkanData(daftarBaju);

        Scanner scanner = new Scanner(System.in);

            tambahData(daftarBaju);
            tampilkanData(daftarBaju);

        scanner.close();
    }
}