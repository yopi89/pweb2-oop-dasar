<?php

// Membuat class Mahasiswa dan mendeklarasikan properti publik
class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi atribut nama, nim, dan jurusan
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    
    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData(){
        return "Mahasiswa " . $this->nama . ", dengan nim " . $this->nim . " dari jurusan " . $this->jurusan;
    }
    
    // Metode untuk mengupdate jurusan mahasiswa
    public function updateJurusan($jurusanBaru){
        $this->jurusan = $jurusanBaru;
    }
    
    // Metode setter untuk mengubah nim mahasiswa
    public function setNim($nimBaru){
        $this->nim = $nimBaru;
    }
}

// Membuat objek Mahasiswa dengan nilai awal untuk atribut nama, nim, dan jurusan
$mahasiswa1 = new Mahasiswa("Yovi Tito", "230202024", "JKB");

// Menampilkan data sebelum jurusan diubah
echo $mahasiswa1->tampilkanData() . "<br>";

// Mengubah jurusan menggunakan metode updateJurusan
$mahasiswa1->updateJurusan("MESIN");

// Menampilkan data setelah jurusan diubah
echo $mahasiswa1->tampilkanData() . "<br>";

// Mengubah nim menggunakan metode setNim
$mahasiswa1->setNim("230202999");

// Menampilkan data setelah nim diubah
echo $mahasiswa1->tampilkanData();
?>
