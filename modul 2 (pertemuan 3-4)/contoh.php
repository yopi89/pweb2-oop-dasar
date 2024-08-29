<?php
// Definisi Class
class Buku{
    //Atribut atau properity
    public $judul;
    public $penuis;

    // Constructor
    public function __construct($judul, $penulis){
        $this->judul=$judul;
        $this->penulis=$penulis;

    }
    // Method atau Function
    public function tampilInfo(){
        return "Judul: $this->judul, Penulis: $this->penulis";
    }
}
    // Instansiasi Objek
    $buku1 = New Buku("Pemograman PHP", "Yovi Tito");
    echo $buku1->tampilInfo();
?>