// membuat class PetShop
public class PetShop{
    // variabel yang digunakan
    private int id;
    private String nama;
    private double harga;
    private int stok;

    // constructor
    public PetShop(){
    }

    public PetShop(int id, String nama, double harga, int stok){
        this.id = id;
        this.nama = nama;
        this.harga = harga;
        this.stok = stok;
    }

    // setter dan getter

    // setter id
    public void setId(int id){
        this.id = id;
    }

    // setter nama produk
    public void setNama(String nama){
        this.nama = nama;
    }

    // setter stok
    public void setStok(int stok){
        this.stok = stok;
    }

    // setter harga
    public void setHarga(double harga){
        this.harga = harga;
    }

    // getter id
    public int getId(){
        return id;
    }

    // getter nama produk
    public String getNama(){
        return nama;
    }

    // getter stok
    public int getStok(){
        return stok;
    }

    // getter harga
    public double getHarga(){
        return harga;
    }

}