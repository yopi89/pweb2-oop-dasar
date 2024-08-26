<?php
abstract class Pengguna{
    protected $nama;

    public function __construct(){
    }
  
    abstract public function aksesFitur(): string;
}
class Dosen extends Pengguna{

    public function __construct(){
        
    }
    
    public function aksesFitur(): string{
        return "<br>Edit Nilai";
    }
}
class Mahasiswa extends Pengguna{
    public function __construct(){
    } 
    public function aksesFitur(): string{
        return "<br>Lihat Nilai";
    }
}

$akses2= new Dosen();
$akses3= new Mahasiswa();

echo $akses2->aksesFitur();
echo $akses3->aksesFitur();



?>