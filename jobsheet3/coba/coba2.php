<?php
    // 1. Implementasi Kelas Person sebagai Induk dari Dosen dan Mahasiswa
    class Person {
        protected $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

        public function getRole() {
            return "This is a person.";
        }
    }

    // 2. Implementasi Kelas Dosen dan Mahasiswa dengan Konsep Inheritance
    class Dosen extends Person {
        private $nidn;

        public function __construct($name, $nidn) {
            parent::__construct($name);
            $this->nidn = $nidn;
        }

        public function getNIDN() {
            return $this->nidn;
        }

        public function setNIDN($nidn) {
            $this->nidn = $nidn;
        }

        public function getRole() {
            return "Dosen: " . $this->name;
        }
    }

    class Mahasiswa extends Person {
        private $nim;

        public function __construct($name, $nim) {
            parent::__construct($name);
            $this->nim = $nim;
        }

        public function getNIM() {
            return $this->nim;
        }

        public function setNIM($nim) {
            $this->nim = $nim;
        }

        public function getRole() {
            return "Mahasiswa: " . $this->name;
        }
    }

    // 3. Implementasi Polymorphism dengan Metode getRole
    // (Sudah diimplementasikan di kelas Dosen dan Mahasiswa di atas)

    // 4. Implementasi Encapsulation dengan Setter dan Getter
    // (Sudah diimplementasikan di kelas Dosen dan Mahasiswa di atas)

    // 5. Implementasi Kelas Abstrak Jurnal dan Konsep Abstraction
    abstract class Jurnal {
        protected $judul;

        public function __construct($judul) {
            $this->judul = $judul;
        }

        abstract public function submit();
    }

    class JurnalDosen extends Jurnal {
        public function submit() {
            return "Jurnal Dosen dengan judul '" . $this->judul . "' telah disubmit.";
        }
    }

    class JurnalMahasiswa extends Jurnal {
        public function submit() {
            return "Jurnal Mahasiswa dengan judul '" . $this->judul . "' telah disubmit.";
        }
    }

    // Contoh Penggunaan
    $dosen = new Dosen("Dr. Bandi", "123456789");
    $mahasiswa = new Mahasiswa("Andi", "987654321");

    echo $dosen->getRole() . " dengan NIDN: " . $dosen->getNIDN() . "<br>";
    echo $mahasiswa->getRole() . " dengan NIM: " . $mahasiswa->getNIM() . "<br>";

    $jurnalDosen = new JurnalDosen("Penelitian AI");
    $jurnalMahasiswa = new JurnalMahasiswa("Proyek PHP");

    echo $jurnalDosen->submit() . "<br>";
    echo $jurnalMahasiswa->submit() . "<br>";
?>