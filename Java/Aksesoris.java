public class Aksesoris extends PetShop{
    private String jenis;
    private String bahan;
    private String warna;

    public Aksesoris(){
    }

    public Aksesoris(int id, String nama, double harga, int stok, String jenis, String bahan, String warna){
        super(id, nama, harga, stok);
        this.jenis = jenis;
        this.bahan = bahan;
        this.warna = warna;
    }

    public void setJenis(String jenis){
        this.jenis = jenis;
    }

    public void setBahan(String bahan){
        this.bahan = bahan;
    }

    public void setWarna(String warna){
        this.warna = warna;
    }

    public String getJenis(){
        return jenis;
    }

    public String getBahan(){
        return bahan;
    }

    public String getWarna(){
        return warna;
    }

}