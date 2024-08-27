<?php
// Membuat class Mahasiswa dan mendeklarasikan properti publik
class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

     // Method untuk menampilkan data mahasiswa
    public function tampilkanData(){
 
        return "Mahasiswa ".$this->nama." dengan nim ".$this->nim." dari jurusan ".$this->jurusan;
    }
}
// Membuat objek Mahasiswa dan mengisi properti objek dengan data
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama='Yovi Tito';
$mahasiswa1->nim='230202024';
$mahasiswa1->jurusan='JKB';
// Menampilkan data mahasiswa menggunakan method tampilkanData
echo $mahasiswa1->tampilkanData();
?>