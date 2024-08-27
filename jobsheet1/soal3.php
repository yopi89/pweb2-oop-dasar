<?php
// Membuat class Pengguna sebagai kelas dasar
class Pengguna{
    // Properti protected dapat diakses oleh kelas turunan
    protected $nama;

    // Constructor untuk menginisialisasi properti nama saat objek dibuat
    public function __construct($nama){
        $this->nama=$nama;
    }
    // Method untuk mengatur nilai properti nama
    public function setNama($nama){
        return $this->nama=$nama;
    }
    // Method untuk mendapatkan nilai properti nama
    public function getNama(){
        return $this->nama;
    }
}
// Membuat class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna{
    // Properti private untuk mata kuliah
    private $matkul;

    // Constructor untuk menginisialisasi properti nama dan matkul saat objek Dosen dibuat
    public function __construct($nama, $matkul){
        // Memanggil constructor dari class Pengguna
        parent:: __construct($nama);
        $this->matkul=$matkul;
    }
    // Method untuk menampilkan data dosen
    public function getDosen(){
        return "Nama = " . $this->getNama() . "\nMata Kuliah = " . $this->matkul;
    }
}
// Membuat objek Dosen dan menampilkan menggunakan method getDosen
$dosen1 = new Dosen('Bu Vika',' RPL');
echo $dosen1->getDosen();

?>