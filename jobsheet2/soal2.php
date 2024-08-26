<?php

class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama=$nama;
        $this->nim=$nim;
        $this->jurusan=$jurusan;
    }
    
    public function tampilkanData(){
      
        return "Mahasiswa ".$this->nama." dengan nim ".$this->nim." dari jurusan ".$this->jurusan;
    }
}
$mahasiswa1 = new Mahasiswa("Yovi Tito", "230202024", "JKB");
echo $mahasiswa1->tampilkanData();
?>