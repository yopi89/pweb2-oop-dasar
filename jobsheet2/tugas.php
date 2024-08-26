<?php
class Dosen{
    public $nama;
    public $nip;
    public $matkul;

    public function __construct($nama, $nip, $matkul){
        $this->nama=$nama;
        $this->nip=$nip;
        $this->matkul=$matkul;
    }
    public function tampilkanDosen(){
        return $this->nama." dengan NIP ".$this->nip." mengajar Mata Kuliah  ".$this->matkul;
    }
}
$dosen1 = new Dosen("Bu Vika", "123", "RPL");
echo $dosen1->tampilkanDosen();
?>