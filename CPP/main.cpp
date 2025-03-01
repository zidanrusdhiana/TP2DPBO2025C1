#include "Baju.cpp"

using namespace std;

void printTable(list<Baju>& listItem) {
    // Menentukan lebar kolom berdasarkan kata terpanjang
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

    for (auto& item : listItem) {
        idWidth = max(idWidth, (int)to_string(item.getId()).length());
        namaWidth = max(namaWidth, (int)item.getNama().length());
        hargaWidth = max(hargaWidth, (int)to_string((int)item.getHarga()).length() + 3);
        stokWidth = max(stokWidth, (int)to_string(item.getStok()).length());
        jenisWidth = max(jenisWidth, (int)item.getJenis().length());
        bahanWidth = max(bahanWidth, (int)item.getBahan().length());
        warnaWidth = max(warnaWidth, (int)item.getWarna().length());
        untukWidth = max(untukWidth, (int)item.getUntuk().length());
        sizeWidth = max(sizeWidth, (int)item.getSize().length());
        merkWidth = max(merkWidth, (int)item.getMerk().length());
    }

    // Mencetak garis pemisah
    cout << "+-" << string(idWidth, '-') << "-+-"
        << string(namaWidth, '-') << "-+-"
        << string(hargaWidth, '-') << "-+-"
        << string(stokWidth, '-') << "-+-"
        << string(jenisWidth, '-') << "-+-"
        << string(bahanWidth, '-') << "-+-"
        << string(warnaWidth, '-') << "-+-"
        << string(untukWidth, '-') << "-+-"
        << string(sizeWidth, '-') << "-+-"
        << string(merkWidth, '-') << "-+" << endl;

    // Mencetak header tabel
    cout << left << "| " << setw(idWidth) << "ID" << " | "
         << left << setw(namaWidth) << "Nama" << " | "
         << left << setw(hargaWidth) << "Harga" << " | "
         << left << setw(stokWidth) << "Stok" << " | "
         << left << setw(jenisWidth) << "Jenis" << " | "
         << left << setw(bahanWidth) << "Bahan" << " | "
         << left << setw(warnaWidth) << "Warna" << " | "
         << left << setw(untukWidth) << "Untuk" << " | "
         << left << setw(sizeWidth) << "Size" << " | "
         << left << setw(merkWidth) << "Merk" << " |" << endl;
         
    // Mencetak garis pemisah
    cout << "+-" << string(idWidth, '-') << "-+-"
        << string(namaWidth, '-') << "-+-"
        << string(hargaWidth, '-') << "-+-"
        << string(stokWidth, '-') << "-+-"
        << string(jenisWidth, '-') << "-+-"
        << string(bahanWidth, '-') << "-+-"
        << string(warnaWidth, '-') << "-+-"
        << string(untukWidth, '-') << "-+-"
        << string(sizeWidth, '-') << "-+-"
        << string(merkWidth, '-') << "-+" << endl;

    // Mencetak data
    for (auto& item : listItem) {
        cout << left << "| " << setw(idWidth) << item.getId() << " | "
             << left << setw(namaWidth) << item.getNama() << " | "
             << left << setw(hargaWidth) << fixed << setprecision(2) << item.getHarga() << " | "
             << left << setw(stokWidth) << item.getStok() << " | "
             << left << setw(jenisWidth) << item.getJenis() << " | "
             << left << setw(bahanWidth) << item.getBahan() << " | "
             << left << setw(warnaWidth) << item.getWarna() << " | "
             << left << setw(untukWidth) << item.getUntuk() << " | "
             << left << setw(sizeWidth) << item.getSize() << " | "
             << left << setw(merkWidth) << item.getMerk() << " |" << endl;
    }

    // Mencetak garis pemisah
    cout << "+-" << string(idWidth, '-') << "-+-"
         << string(namaWidth, '-') << "-+-"
         << string(hargaWidth, '-') << "-+-"
         << string(stokWidth, '-') << "-+-"
         << string(jenisWidth, '-') << "-+-"
         << string(bahanWidth, '-') << "-+-"
         << string(warnaWidth, '-') << "-+-"
         << string(untukWidth, '-') << "-+-"
         << string(sizeWidth, '-') << "-+-"
         << string(merkWidth, '-') << "-+" << endl;
}

int main() {
    Baju item1(111, "Baju Anjing", 500000, 3, "Pakaian", "Katun", "Merah", "Anjing", "M", "Adidog");
    Baju item2(2112, "Baju Kucing", 49999, 12, "Pakaian", "Katun", "Biru", "Kucing", "XL", "Nicat");
    Baju item3(312, "Syal Anjing", 32000, 4, "Aksesoris", "Kain", "Hijau", "Anjing", "M", "Dogpreme");
    Baju item4(1331, "Syal Kucing", 20000, 13, "Aksesoris", "Kain", "Pink", "Kucing", "S", "Catpreme");
    Baju item5(6515, "Sweater Kucing", 60000, 2, "Pakaian", "Wol", "Putih", "Kucing", "L", "Catify");

    list<Baju> listItem;
    listItem.push_back(item1);
    listItem.push_back(item2);
    listItem.push_back(item3);
    listItem.push_back(item4);
    listItem.push_back(item5);
    
    cout << "Data Awal:" << endl;
    printTable(listItem);

    int n = 0, i;
    string nama, jenis, bahan, warna, untuk, size, merk;
    double harga;
    int id, stok;
    char add;
    
    do{
        cout << "Tambahkan data? (y/n): ";
        cin >> add;
        cin.ignore(); // Mengabaikan karakter newline setelah input add

        if(add == 'y'){
            cin >> n;
            cin.ignore(); // Mengabaikan karakter newline setelah input n
        
            for(i = 0; i < n; i++){
                Baju item;
                string input;
                getline(cin, input);
        
                // Memproses input
                stringstream ss(input);
                ss >> id;
                ss.ignore(); // Mengabaikan spasi setelah id
        
                // Membaca nama yang diapit tanda kutip
                getline(ss, nama, '\"');
                getline(ss, nama, '\"');
        
                ss >> harga >> stok;
        
                // Membaca jenis yang diapit tanda kutip
                getline(ss, jenis, '\"');
                getline(ss, jenis, '\"');
        
                // Membaca bahan yang diapit tanda kutip
                getline(ss, bahan, '\"');
                getline(ss, bahan, '\"');
        
                // Membaca warna yang diapit tanda kutip
                getline(ss, warna, '\"');
                getline(ss, warna, '\"');
        
                // Membaca untuk yang diapit tanda kutip
                getline(ss, untuk, '\"');
                getline(ss, untuk, '\"');
        
                // Membaca size yang diapit tanda kutip
                getline(ss, size, '\"');
                getline(ss, size, '\"');
        
                // Membaca merk yang diapit tanda kutip
                getline(ss, merk, '\"');
                getline(ss, merk, '\"');
        
                item.setId(id);
                item.setNama(nama);
                item.setHarga(harga);
                item.setStok(stok);
                item.setJenis(jenis);
                item.setBahan(bahan);
                item.setWarna(warna);
                item.setUntuk(untuk);
                item.setSize(size);
                item.setMerk(merk);
        
                listItem.push_back(item);
            }
        
            printTable(listItem);
        }
        
    } while(add == 'y');

    cout << "See ya..." << endl;

    return 0;
}