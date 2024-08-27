<?php
// Membuat class Pengguna sebagai kelas dasar
class Pengguna{
     // Properti protected agar dapat diakses oleh kelas turunan
    protected $nama;

    public function __construct(){
    }
  
    // Method untuk mengakses fitur dasar
    public function aksesFitur(){
        return "Akses fitur";
    }
}
// Membuat class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna{

    public function __construct(){
        
    }
    
    // Method untuk mengakses fitur khusus dosen
    public function aksesFitur(){
        return "<br>Edit Nilai";
    }
}
// Membuat class Mahasiswa yang mewarisi class Pengguna
class Mahasiswa extends Pengguna{
    public function __construct(){
    } 
    // Method untuk mengakses fitur khusus mahasiswa
    public function aksesFitur(){
        return "<br>Lihat Nilai";
    }
}
// Membuat objek dari masing-masing kelas
$akses1= new Pengguna();
$akses2= new Dosen();
$akses3= new Mahasiswa();

// Menampilkan akses fitur dari masing-masing objek
echo $akses1->aksesFitur();
echo $akses2->aksesFitur();
echo $akses3->aksesFitur();



?>