import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class Main {

    public static void printTable(List<Baju> listItem) {
        int idWidth = 2;
        int namaWidth = 4;
        int hargaWidth = 5;
        int stokWidth = 4;
        int jenisWidth = 5;
        int bahanWidth = 5;
        int warnaWidth = 5;
        int untukWidth = 5;
        int sizeWidth = 4;
        int merkWidth = 4;

        for (Baju item : listItem) {
            idWidth = Math.max(idWidth, String.valueOf(item.getId()).length());
            namaWidth = Math.max(namaWidth, item.getNama().length());
            hargaWidth = Math.max(hargaWidth, String.format("%.2f", item.getHarga()).length());
            stokWidth = Math.max(stokWidth, String.valueOf(item.getStok()).length());
            jenisWidth = Math.max(jenisWidth, item.getJenis().length());
            bahanWidth = Math.max(bahanWidth, item.getBahan().length());
            warnaWidth = Math.max(warnaWidth, item.getWarna().length());
            untukWidth = Math.max(untukWidth, item.getUntuk().length());
            sizeWidth = Math.max(sizeWidth, item.getSize().length());
            merkWidth = Math.max(merkWidth, item.getMerk().length());
        }

        System.out.println("+-" + "-".repeat(idWidth) + "-+-"
                + "-".repeat(namaWidth) + "-+-"
                + "-".repeat(hargaWidth) + "-+-"
                + "-".repeat(stokWidth) + "-+-"
                + "-".repeat(jenisWidth) + "-+-"
                + "-".repeat(bahanWidth) + "-+-"
                + "-".repeat(warnaWidth) + "-+-"
                + "-".repeat(untukWidth) + "-+-"
                + "-".repeat(sizeWidth) + "-+-"
                + "-".repeat(merkWidth) + "-+");

        System.out.printf("| %-" + idWidth + "s | %-" + namaWidth + "s | %-" + hargaWidth + "s | %-" + stokWidth + "s | %-" + jenisWidth + "s | %-" + bahanWidth + "s | %-" + warnaWidth + "s | %-" + untukWidth + "s | %-" + sizeWidth + "s | %-" + merkWidth + "s |\n",
                "ID", "Nama", "Harga", "Stok", "Jenis", "Bahan", "Warna", "Untuk", "Size", "Merk");

        System.out.println("+-" + "-".repeat(idWidth) + "-+-"
                + "-".repeat(namaWidth) + "-+-"
                + "-".repeat(hargaWidth) + "-+-"
                + "-".repeat(stokWidth) + "-+-"
                + "-".repeat(jenisWidth) + "-+-"
                + "-".repeat(bahanWidth) + "-+-"
                + "-".repeat(warnaWidth) + "-+-"
                + "-".repeat(untukWidth) + "-+-"
                + "-".repeat(sizeWidth) + "-+-"
                + "-".repeat(merkWidth) + "-+");

        for (Baju item : listItem) {
            System.out.printf("| %-" + idWidth + "d | %-" + namaWidth + "s | %-" + hargaWidth + ".2f | %-" + stokWidth + "d | %-" + jenisWidth + "s | %-" + bahanWidth + "s | %-" + warnaWidth + "s | %-" + untukWidth + "s | %-" + sizeWidth + "s | %-" + merkWidth + "s |\n",
                    item.getId(), item.getNama(), item.getHarga(), item.getStok(), item.getJenis(), item.getBahan(), item.getWarna(), item.getUntuk(), item.getSize(), item.getMerk());
        }

        System.out.println("+-" + "-".repeat(idWidth) + "-+-"
                + "-".repeat(namaWidth) + "-+-"
                + "-".repeat(hargaWidth) + "-+-"
                + "-".repeat(stokWidth) + "-+-"
                + "-".repeat(jenisWidth) + "-+-"
                + "-".repeat(bahanWidth) + "-+-"
                + "-".repeat(warnaWidth) + "-+-"
                + "-".repeat(untukWidth) + "-+-"
                + "-".repeat(sizeWidth) + "-+-"
                + "-".repeat(merkWidth) + "-+");
    }

    public static void main(String[] args) {
        Baju item1 = new Baju(112, "Baju Anjing", 500000, 3, "Pakaian", "Katun", "Merah", "Anjing", "M", "Adidog");
        Baju item2 = new Baju(2112, "Baju Kucing", 49999, 12, "Pakaian", "Katun", "Biru", "Kucing", "XL", "Nicat");
        Baju item3 = new Baju(312, "Pita Anjing", 32000, 4, "Aksesoris", "Kain", "Merah", "Anjing", "M", "Dogpreme");
        Baju item4 = new Baju(1311, "Pita Kucing", 20000, 13, "Aksesoris", "Kain", "Pink", "Kucing", "S", "Catpreme");
        Baju item5 = new Baju(555, "Sweater Kucing", 60000, 2, "Pakaian", "Wol", "Putih", "Kucing", "L", "Catify");

        List<Baju> listItem = new ArrayList<>();
        listItem.add(item1);
        listItem.add(item2);
        listItem.add(item3);
        listItem.add(item4);
        listItem.add(item5);

        System.out.println("Data Awal:");
        printTable(listItem);

        System.out.print("\nTambah data baru? (y/n): ");

        Scanner scanner = new Scanner(System.in);
        char choice = scanner.next().charAt(0);

        while(choice == 'y'){
            
            System.out.println("Masukkan data baru:");
            int n = scanner.nextInt();
            scanner.nextLine(); // Mengabaikan karakter newline setelah input n

            for (int i = 0; i < n; i++) {
                String input = scanner.nextLine();

                // Memproses input
                Scanner ss = new Scanner(input);
                int id = ss.nextInt();
                String nama = ss.findInLine("\"([^\"]*)\"").replace("\"", "");
                double harga = ss.nextDouble();
                int stok = ss.nextInt();
                String jenis = ss.findInLine("\"([^\"]*)\"").replace("\"", "");
                String bahan = ss.findInLine("\"([^\"]*)\"").replace("\"", "");
                String warna = ss.findInLine("\"([^\"]*)\"").replace("\"", "");
                String untuk = ss.findInLine("\"([^\"]*)\"").replace("\"", "");
                String size = ss.findInLine("\"([^\"]*)\"").replace("\"", "");
                String merk = ss.findInLine("\"([^\"]*)\"").replace("\"", "");

                Baju item = new Baju(id, nama, harga, stok, jenis, bahan, warna, untuk, size, merk);
                listItem.add(item);
            }

            printTable(listItem);

            System.out.print("\nTambah data baru? (y/n): ");
            choice = scanner.next().charAt(0);
        }

        System.out.println("Sayonara!");

        scanner.close();
    }

}