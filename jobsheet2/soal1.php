<?php
// Membuat class (blueprint) mahasiswa
class Mahasiswa{
    // Mendeklarasikan properti private nama, nim dan jurusan
    private $nama;
    private $nim;
    private $jurusan;

    // Constructor untuk menginisialisasi properti ketika objek dibuat
    public function __construct($nama, $nim, $jurusan){
        // Mengisi properti dengan nilai yang diberikan saat objek dibuat
        $this->nama = $nama;       
        $this->nim = $nim;         
        $this->jurusan = $jurusan; 
    }

    // Method untuk menampilkan data mahasiswa (nama, nim dan jurusan)
    public function tampilkanData(){
        echo "Nama : " .$this->nama. "<br>";
        echo "NIM : " .$this->nim. "<br>";
        echo "Jurusan : " .$this->jurusan. "<br>";
    }
}

// Membuat objek Mahasiswa dan mengisi data
$mahasiswa1 = new Mahasiswa("Yovi Tito", "230202024", "JKB");
// Memanggil method untuk menampilkan data mahasiswa
$mahasiswa1->tampilkanData();
?>
