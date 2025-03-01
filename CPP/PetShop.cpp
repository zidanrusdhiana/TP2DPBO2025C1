#include <bits/stdc++.h>

using namespace std;

class PetShop{
private:
    int id;
    string nama;
    double harga;
    int stok;

public:
    // Constructor
    PetShop(){
    }

    PetShop(int id, string nama, double harga, int stok){
        this->id = id;
        this->nama = nama;
        this->harga = harga;
        this->stok = stok;
    }

    // Setter dan Getter

    // Setter id
    void setId(int id){
        this->id = id;
    }

    // Setter nama produk
    void setNama(string nama){
        this->nama = nama;
    }

    // Setter stok
    void setStok(int stok){
        this->stok = stok;
    }

    // Setter harga
    void setHarga(double harga){
        this->harga = harga;
    }

    // Getter id
    int getId(){
        return id;
    }

    // Getter nama produk
    string getNama(){
        return nama;
    }

    // Getter stok
    int getStok(){
        return stok;
    }

    // Getter harga
    double getHarga(){
        return harga;
    }

    ~PetShop(){
    }
};