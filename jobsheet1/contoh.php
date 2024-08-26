<?php
class Buku{
    public $judul;
    public $penuis;

    public function __construct($judul, $penulis){
        $this->judul=$judul;
        $this->penulis=$penulis;

    }
    public function tampilInfo(){
        return "Judul: $this->judul, Penulis: $this->penulis";
    }
}
    $buku1 = New Buku("Pemograman PHP", "Yovi Tito");
    echo $buku1->tampilInfo();
?>