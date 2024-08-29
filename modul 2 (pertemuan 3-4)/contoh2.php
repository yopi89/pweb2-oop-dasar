<?php
class Buku{
    private $judul;
    private $penuis;

    public function __construct($judul, $penulis){
        $this->judul=$judul;
        $this->penulis=$penulis;

    }
    public function getJudul(){
        return $this->judul;
    }
    public function setJudul($judul){
        return $this->judul=$judul;
    }
    
}
    $buku1 = New Buku("Pemograman PHP", "Yovi Tito");
    echo $buku1->getJudul(); // Output: Pemrograman PHP
?>