from Baju import Baju


def tampilkan_data(daftar_baju):
    if not daftar_baju:
        print("Tidak ada data tersedia.")
        return

    # Menentukan panjang maksimum untuk setiap kolom
    panjang_maks = [2, 4, 5, 4, 5, 5, 5, 5, 4, 4]  # Panjang header

    for baju in daftar_baju:
        panjang_maks[0] = max(panjang_maks[0], len(baju.get_id()))
        panjang_maks[1] = max(panjang_maks[1], len(baju.get_nama_produk()))
        panjang_maks[2] = max(panjang_maks[2], len(str(baju.get_harga_produk())))
        panjang_maks[3] = max(panjang_maks[3], len(str(baju.get_stok_produk())))
        panjang_maks[4] = max(panjang_maks[4], len(baju.get_jenis()))
        panjang_maks[5] = max(panjang_maks[5], len(baju.get_bahan()))
        panjang_maks[6] = max(panjang_maks[6], len(baju.get_warna()))
        panjang_maks[7] = max(panjang_maks[7], len(baju.get_untuk()))
        panjang_maks[8] = max(panjang_maks[8], len(baju.get_size()))
        panjang_maks[9] = max(panjang_maks[9], len(baju.get_merk()))

    # Menampilkan garis horizontal
    def cetak_garis():
        print("+", end="")
        for panjang in panjang_maks:
            print("-" * (panjang + 2) + "+", end="")
        print()

    # Menampilkan header
    cetak_garis()
    print(f"| {'ID':<{panjang_maks[0]}} | {'Nama':<{panjang_maks[1]}} | {'Harga':<{panjang_maks[2]}} | {'Stok':<{panjang_maks[3]}} | {'Jenis':<{panjang_maks[4]}} | {'Bahan':<{panjang_maks[5]}} | {'Warna':<{panjang_maks[6]}} | {'Untuk':<{panjang_maks[7]}} | {'Size':<{panjang_maks[8]}} | {'Merk':<{panjang_maks[9]}} |")
    cetak_garis()

    # Menampilkan data
    for baju in daftar_baju:
        print(f"| {baju.get_id():<{panjang_maks[0]}} | {baju.get_nama_produk():<{panjang_maks[1]}} | {baju.get_harga_produk():<{panjang_maks[2]}} | {baju.get_stok_produk():<{panjang_maks[3]}} | {baju.get_jenis():<{panjang_maks[4]}} | {baju.get_bahan():<{panjang_maks[5]}} | {baju.get_warna():<{panjang_maks[6]}} | {baju.get_untuk():<{panjang_maks[7]}} | {baju.get_size():<{panjang_maks[8]}} | {baju.get_merk():<{panjang_maks[9]}} |")
    cetak_garis()


def tambah_data(daftar_baju):
    jumlah_data = int(input("Masukkan jumlah data baru yang ingin ditambahkan: "))

    for i in range(jumlah_data):
        baju_baru = Baju()
        print(f"Masukkan data ke-{i + 1}")
        baju_baru.set_all(
            # input("ID: "),
            # input("Nama: "),
            # float(input("Harga: ")),
            # int(input("Stok: ")),
            # input("Jenis: "),
            # input("Bahan: "),
            # input("Warna: "),
            # input("Untuk: "),
            # input("Size: "),
            # input("Merk: ")
            input("ID: "),
            input("Nama: "),
            float(input("Harga: ")),
            int(input("Stok: ")),
            input("Jenis: "),
            input("Bahan: "),
            input("Warna: "),
            input("Untuk: "),
            input("Size: "),
            input("Merk: ")
        )
        daftar_baju.append(baju_baru)


def main():
    daftar_baju = []

    # Inisialisasi data hardcode menggunakan set_all
    baju1 = Baju()
    baju1.set_all("a01", "Patpat", 12000, 3, "Bodywear", "Katun", "Pink", "Kucing", "M", "elCatto")

    baju2 = Baju()
    baju2.set_all("a02", "Furcoat", 15000, 5, "Jaket", "Wol", "Hitam", "Anjing", "L", "FurryPaws")

    baju3 = Baju()
    baju3.set_all("a03", "Raincoat", 18000, 2, "Jas Hujan", "PVC", "Kuning", "Kucing", "S", "RainPet")

    baju4 = Baju()
    baju4.set_all("a04", "Sweater", 13000, 4, "Pakaian", "Rajut", "Merah", "Anjing", "XL", "Woofywear")

    baju5 = Baju()
    baju5.set_all("a05", "T-Shirt", 11000, 6, "Kaos", "Katun", "Biru", "Kucing", "M", "MeowStyle")

    daftar_baju.extend([baju1, baju2, baju3, baju4, baju5])

    tampilkan_data(daftar_baju)

    pilihan = input("Apakah Anda ingin menambahkan data baru? (y/n): ")

    if pilihan.lower() == 'y':
        tambah_data(daftar_baju)
        tampilkan_data(daftar_baju)


if __name__ == "__main__":
    main()