#include "Aksesoris.cpp"

class Baju : public Aksesoris{
private:
    string untuk;
    string size;
    string merk;
public:
    Baju() : Aksesoris(){
    }

    Baju(int id, string nama, double harga, int stok, string jenis, string bahan, string warna, string untuk, string size, string merk) : Aksesoris(id, nama, harga, stok, jenis, bahan, warna){
        this->untuk = untuk;
        this->size = size;
        this->merk = merk;
    }

    // Setter dan Getter

    // Setter untuk
    void setUntuk(string untuk){
        this->untuk = untuk;
    }

    // Setter size
    void setSize(string size){
        this->size = size;
    }

    // Setter merk
    void setMerk(string merk){
        this->merk = merk;
    }

    // Getter untuk
    string getUntuk(){
        return untuk;
    }

    // Getter size
    string getSize(){
        return size;
    }

    // Getter merk
    string getMerk(){
        return merk;
    }

    ~Baju(){
    }

};
