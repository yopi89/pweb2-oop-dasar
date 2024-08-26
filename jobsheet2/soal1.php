<?php

class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

    public function tampilkanData(){
 
        return "Mahasiswa ".$this->nama." dengan nim ".$this->nim." dari jurusan ".$this->jurusan;
    }
}
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama='Yovi Tito';
$mahasiswa1->nim='230202024';
$mahasiswa1->jurusan='JKB';
echo $mahasiswa1->tampilkanData();
?>