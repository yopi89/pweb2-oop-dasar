<?php

abstract class Person {
    protected $nama;
    protected $alamat;

    public function __construct($nama, $alamat) {
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getAlamat() {
        return $this->alamat;
    }

    abstract public function getRole();
}

class Dosen extends Person {
    private $nidn;

    public function __construct($nama, $alamat, $nidn) {
        parent::__construct($nama, $alamat);
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }

    public function getRole() {
        return "Dosen";
    }
}

class Mahasiswa extends Person {
    private $nim;

    public function __construct($nama, $alamat, $nim) {
        parent::__construct($nama, $alamat);
        $this->nim = $nim;
    }


    public function getNim() {
        return $this->nim;
    }

    public function getRole() {
        return "Mahasiswa";
    }
}

abstract class Jurnal {
    protected $judul;
    protected $penulis;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    abstract public function ajukanJurnal();
}

class JurnalDosen extends Jurnal {
    private $bidangIlmu;

    public function __construct($judul, Dosen $penulis, $bidangIlmu) {
        parent::__construct($judul, $penulis);
        $this->bidangIlmu = $bidangIlmu;
    }

    public function ajukanJurnal() {
        return "Jurnal Dosen '{$this->judul}' oleh {$this->penulis->getNama()} (nidn: {$this->penulis->getNidn()}) " .
               "dalam bidang {$this->bidangIlmu} telah diajukan untuk publikasi.";
    }
}

class JurnalMahasiswa extends Jurnal {
    private $programStudi;

    public function __construct($judul, Mahasiswa $penulis, $programStudi) {
        parent::__construct($judul, $penulis);
        $this->programStudi = $programStudi;
    }

    public function ajukanJurnal() {
        return "Jurnal Mahasiswa '{$this->judul}' oleh {$this->penulis->getNama()} (NIM: {$this->penulis->getNim()}) " .
               "dari Program Studi {$this->programStudi} telah diajukan untuk review.";
    }
}

$dosen = new Dosen("Bu Vika", "jambu", "123");
$mahasiswa = new Mahasiswa("Yovi", "batak", "234");

echo $dosen->getNama() . " adalah seorang " . $dosen->getRole() . "\n";
echo $mahasiswa->getNama() . " adalah seorang " . $mahasiswa->getRole() . "\n";

$jurnalDosen = new JurnalDosen("Blokir situs dalam Pendidikan", $dosen, "Mesin");
echo $jurnalDosen->ajukanJurnal() . "\n";

$jurnalMahasiswa = new JurnalMahasiswa("Analisis Dampak Uang berlebih", $mahasiswa, "TI");
echo $jurnalMahasiswa->ajukanJurnal() . "\n";