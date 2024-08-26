<?php
class Pengguna{
    protected $nama;

    public function __construct(){
    }
  
    public function aksesFitur(){
        return "Akses fitur";
    }
}
class Dosen extends Pengguna{

    public function __construct(){
        
    }
    
    public function aksesFitur(){
        return "<br>Edit Nilai";
    }
}
class Mahasiswa extends Pengguna{
    public function __construct(){
    } 
    public function aksesFitur(){
        return "<br>Lihat Nilai";
    }
}
$akses1= new Pengguna();
$akses2= new Dosen();
$akses3= new Mahasiswa();
echo $akses1->aksesFitur();
echo $akses2->aksesFitur();
echo $akses3->aksesFitur();



?>