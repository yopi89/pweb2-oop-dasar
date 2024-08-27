<?php
// Membuat class Dosen dan mendeklarasikan properti publik
class Dosen{
    public $nama;
    public $nip;
    public $matkul;

    // Constructor untuk menginisialisasi atribut nama, nip, dan matkul
    public function __construct($nama, $nip, $matkul){
        $this->nama=$nama;
        $this->nip=$nip;
        $this->matkul=$matkul;
    }
    // Metode untuk menampilkan data dosen
    public function tampilkanDosen(){
        return $this->nama." dengan NIP ".$this->nip." mengajar Mata Kuliah  ".$this->matkul;
    }
}
// Membuat objek Dosen dengan nilai awal untuk atribut nama, nip, dan matkul
$dosen1 = new Dosen("Bu Vika", "123", "RPL");
// Menampilkan data dosen menggunakan metode tampilkanDosen
echo $dosen1->tampilkanDosen();
?>