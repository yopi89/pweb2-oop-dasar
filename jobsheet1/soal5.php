<?php
// Membuat kelas abstrak Pengguna
abstract class Pengguna{
    // Properti protected agar dapat diakses oleh kelas turunan
    protected $nama;

    public function __construct(){
    }
  
    // Deklarasi method abstrak untuk akses fitur, yang harus diinisialisasi oleh kelas turunan
    abstract public function aksesFitur(): string;
}
// Membuat kelas Dosen yang mewarisi kelas Pengguna
class Dosen extends Pengguna{

    public function __construct(){
        
    }
     // Menginisisalisasi method aksesFitur untuk dosen
    public function aksesFitur(): string{
        return "<br>Edit Nilai";
    }
}
// Membuat kelas Mahasiswa yang mewarisi kelas Pengguna
class Mahasiswa extends Pengguna{
    public function __construct(){
    } 
     // Menginisisalisasi method aksesFitur untuk mahasiswa
    public function aksesFitur(): string{
        return "<br>Lihat Nilai";
    }
}
// Membuat objek dari kelas Dosen dan Mahasiswa
$akses2= new Dosen();
$akses3= new Mahasiswa();
// Menampilkan akses fitur dari masing-masing objek
echo $akses2->aksesFitur();
echo $akses3->aksesFitur();

?>