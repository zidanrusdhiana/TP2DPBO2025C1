#include "PetShop.cpp"

class Aksesoris : public PetShop{
private:
    string jenis;
    string bahan;
    string warna;

public:
    // Constructor
    Aksesoris() : PetShop(){ 
    }

    Aksesoris(int id, string nama, double harga, int stok, string jenis, string bahan, string warna) : PetShop(id, nama, harga, stok){
        this->jenis = jenis;
        this->bahan = bahan;
        this->warna = warna;
    }

    // Setter dan Getter

    // Setter jenis
    void setJenis(string jenis){
        this->jenis = jenis;
    }

    // Setter bahan
    void setBahan(string bahan){
        this->bahan = bahan;
    }

    // Setter warna
    void setWarna(string warna){
        this->warna = warna;
    }

    // Getter jenis
    string getJenis(){
        return jenis;
    }

    // Getter bahan
    string getBahan(){
        return bahan;
    }

    // Getter warna
    string getWarna(){
        return warna;
    }

    ~Aksesoris(){
    }
};