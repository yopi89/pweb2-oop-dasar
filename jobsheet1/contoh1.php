<?php
// Definisi Kelas
class Mobil{
    // Atribut atau properity
    public $merk;
    public $warna;

// constructor
public function __construct($merk, $warna){
    $this->merk=$merk;
    $this->warna=$warna;
}
//Method atau function
public function deskripsi(){
    return "Mobil ini adalah $this->merk berwarna $this->warna.";
}
}
// Instansiasi Objek
$mobil = new Mobil("Toyota", "Hitam");
echo $mobil->deskripsi();
?>