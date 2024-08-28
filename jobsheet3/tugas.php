<?php
// mendefinisikan class abstrak person
abstract class Person {
    protected $nama;
    // constructor untuk menginisialisasi properti nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Implementasi metode getNama dari kelas person
    public function getNama() {
        return $this->nama;
    }

    // mendefinisikan metode abstrak getRole
    abstract public function getRole();
}
// mendefinisikan class Dosen yang mewarisi kelas Person
class Dosen extends Person {
    private $nidn;

    // constructor untuk menginisialisasi properti nidn
    public function __construct($nama, $nidn) {
        parent::__construct($nama);
        $this->nidn = $nidn;
    }

    // Implementasi metode getNidn dari kelas dosen
    public function getNidn() {
        return $this->nidn;
    }
    // implementasi metode setNidn dari kelas dosen
    public function setNidn($nidn){
        $this->nidn = $nidn;
    }
    // Implementasi metode getRole dari kelas dosen
    public function getRole() {
        return "Dosen : " .$this->nama;
    }
}
// mendefinisikan class Mahasiswa yang mewarisi kelas Person
class Mahasiswa extends Person {
    private $nim;

    // constructor untuk menginisialisasi properti nim
    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }
    // Implementasi metode getNim dari kelas mahasiswa
    public function getNim() {
        return $this->nim;
    }
    // Implementasi metode setNim dari kelas mahasiswa
    public function setNim($nim){
        $this->nim = $nim;
    }
    // Implementasi metode getRole dari kelas mahasiswa
    public function getRole() {
        return "Mahasiswa : " .$this->nama;
    }
}
// mendefinisikan kelas abstrak Jurnal
abstract class Jurnal {
    protected $judul;
    // constructor untuk menginisialisasi properti judul
    public function __construct($judul) {
        $this->judul = $judul;
    }
    // mendefinisikan metode abstrak ajukan
    abstract public function ajukan();
}

// mendefinisikan kelas JurnalDosen yang mewarisi kelas Jurnal
class JurnalDosen extends Jurnal {

    // Implementasi metode ajukan dari kelas JurnalDosen
    public function ajukan(){
        return "Jurnal Dosen : " .$this->judul. "diajukan";
    }

}

// mendefinisikan kelas JurnalMahasiswa yang mewarisi kelas Jurnal
class JurnalMahasiswa extends Jurnal {
    // Implementasi metode ajukan dari kelas JurnalMahasiswa
    public function ajukan() {
        return "Jurnal Mahasiswa : " .$this->judul. "diajukan";
     }
}
// membuat objek dosen dan mahasiswa
$dosen = new Dosen("Bu Vika", "1234");
$mahasiswa = new Mahasiswa("Yovi", "321");
// memanggil method getRole dan getNidn
echo $dosen->getRole() . " dengan NIDN: " . $dosen->getNidn() . "<br>";
echo $mahasiswa->getRole() . " dengan NIM: " . $mahasiswa->getNim() . "<br>";
// membuat objek jurnalDosen dan jurnalMahasiswa
$jurnalDosen = new JurnalDosen("Penelitian JS");
$jurnalMahasiswa = new JurnalMahasiswa("Proyek PHP");
// memanggil method ajukan
echo $jurnalDosen->ajukan() . "<br>";
echo $jurnalMahasiswa->ajukan() . "<br>";

?>