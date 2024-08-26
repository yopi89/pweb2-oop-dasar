<?php
 class Mahasiswa{
    private $nama;
    private $nim;
    private $jurusan;

    public function setNama($nama){
        $this->nama = $nama;
    }
    public function setNim($nim){
        $this->nim = $nim;
    }
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }

    public function getNama(){
        return $this->nama;
    }
    public function getNim(){
        return $this->nim;
    }public function getJurusan(){
        return $this->jurusan;
    }

    public function tampilkanData(){
    return "Nama = " .$this->nama. "\nNim = " .$this->nim. "\nJurusan = " .$this->jurusan ;
    }

 }
 $mahasiswa1 = new Mahasiswa();
 $mahasiswa1->setNama('Yovi Tito');
 $mahasiswa1->setNim('230202024');
 $mahasiswa1->setJurusan('JKB');
 echo $mahasiswa1->tampilkanData();
?>