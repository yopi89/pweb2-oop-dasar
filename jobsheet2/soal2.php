<?php
// Membuat class Mahasiswa dan mendeklarasikan properti publik
class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi properti saat objek dibuat
    public function __construct($nama, $nim, $jurusan){
        // Mengisi properti dengan nilai yang diberikan saat objek dibuat
        $this->nama=$nama;
        $this->nim=$nim;
        $this->jurusan=$jurusan;
    }
     // Method untuk menampilkan data mahasiswa
    public function tampilkanData(){
      
        return "Mahasiswa ".$this->nama." dengan nim ".$this->nim." dari jurusan ".$this->jurusan;
    }
}
// Membuat objek Mahasiswa dengan data yang diberikan
$mahasiswa1 = new Mahasiswa("Yovi Tito", "230202024", "JKB");
// Menampilkan data mahasiswa menggunakan method tampilkanData
echo $mahasiswa1->tampilkanData();
?>