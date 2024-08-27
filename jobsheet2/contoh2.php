<?php
// Menambahkan Attribut dan Method
class Buku{
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis){
        $this->judul=$judul;
        $this->penulis=$penulis;

    }
    public function tampilkanInfo(){
        return "Buku : $this->judul, ditulis oleh $this->penulis.";
    }

}
$buku1= new Buku("pemrograman PHP", "JOhn Doe");
echo $buku1->tampilkanInfo();
?>