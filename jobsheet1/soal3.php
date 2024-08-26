<?php
class Pengguna{
    protected $nama;

    public function __construct($nama){
        $this->nama=$nama;
    }
    public function setNama($nama){
        return $this->nama=$nama;
    }
    public function getNama(){
        return $this->nama;
    }
}
class Dosen extends Pengguna{
    private $matkul;

    public function __construct($nama, $matkul){
        parent:: __construct($nama);
        $this->matkul=$matkul;
    }
    public function getDosen(){
        return "Nama = " . $this->getNama() . "\nMata Kuliah = " . $this->matkul;
    }
}
$dosen1 = new Dosen('Bu Vika',' RPL');
echo $dosen1->getDosen();

?>