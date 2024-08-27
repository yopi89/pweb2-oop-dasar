<?php
// Membuat class(blueprint) Mahasiswa
class Mahasiswa{
    // Deklarasi properti private nama, nim dan jurusan
    private $nama;
    private $nim;
    private $jurusan;

    // Method untuk mengatur nilai properti nama, nim dan jurusan
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function setNim($nim){
        $this->nim = $nim;
    }
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }

    // Method untuk mendapatkan nilai properti nama, nim dan jurusan
    public function getNama(){
        return $this->nama;
    }
    public function getNim(){
        return $this->nim;
    }
    public function getJurusan(){
        return $this->jurusan;
    }

    // Method untuk menampilkan data mahasiswa
    public function tampilkanData(){
        return "Nama = " .$this->nama. "\nNim = " .$this->nim. "\nJurusan = " .$this->jurusan;
    }
}

// Membuat objek Mahasiswa dan mengisi properti objek dengan data menggunakan method setter
$mahasiswa1 = new Mahasiswa();

$mahasiswa1->setNama('Yovi Tito');
$mahasiswa1->setNim('230202024');
$mahasiswa1->setJurusan('JKB');

// Menampilkan data mahasiswa dengan method tampilkanData
echo $mahasiswa1->tampilkanData();
?>
