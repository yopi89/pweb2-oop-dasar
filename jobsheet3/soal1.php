<?php

// Mendefinisikan kelas Person dengan properti nama yang dilindungi (protected)
// Properti ini hanya dapat diakses dari dalam kelas itu sendiri atau dari kelas turunan.
class Person {
   protected $nama;

   // Fungsi getNama bersifat protected, sehingga hanya bisa diakses dari dalam kelas ini atau dari kelas yang mewarisi kelas ini.
   // Fungsi ini mengembalikan nilai dari properti nama.
   protected function getNama(){
      return $this->nama;
   }

}

// Mendefinisikan kelas Student yang mewarisi kelas Person.
// Kelas ini menambahkan properti studentID yang bersifat publik.
class Student extends Person{
   public $studentID;

   // Fungsi getStudentId bersifat publik, sehingga bisa diakses dari luar kelas.
   // Fungsi ini mengembalikan nilai dari properti studentID.
   public function getStudentId(){
      return $this->studentID;
   }
}

// Membuat objek baru dari kelas Student.
$person = new Student();

// Mengatur nilai properti studentID dari objek person.
$person->studentID = '123';

// Menampilkan nilai studentID dengan memanggil fungsi getStudentId dari objek person.
echo $person->getStudentId();

?>
