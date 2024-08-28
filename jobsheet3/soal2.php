<?php
// Mendefinisikan kelas Person dengan properti nama yang dilindungi
class Person {
   protected $nama;

   // Constructor untuk menginisialisasi properti nama
   public function __construct($nama){
      $this->nama = $nama;
   }

   // Metode getNama bersifat protected, hanya dapat diakses dalam kelas ini atau kelas turunan
   protected function getNama(){
      return $this->nama;
   }
}

// Kelas Student mewarisi dari kelas Person
class Student extends Person{
   public $studentID;
   
   // Constructor untuk menginisialisasi properti nama dan studentID
   public function __construct($nama, $studentID) {
      // Memanggil constructor dari kelas Person
      parent::__construct($nama);
      $this->studentID = $studentID;
   }
   
   // Metode untuk mendapatkan nilai studentID
   public function getStudentId(){
      return $this->studentID;
   }
   
   // Override metode getNama dari kelas induk
   public function getNama(){
      return "Student: " .  $this->nama;
   }
}

// Kelas Teacher juga mewarisi dari kelas Person
class Teacher extends Person{
   private $teacherID;
  
   // Constructor untuk menginisialisasi properti nama dan teacherID
   public function __construct($nama, $teacherID){
      // Memanggil constructor dari kelas induk Person
      parent::__construct($nama);
      $this->teacherID = $teacherID;
   }

   // Override metode getNama dari kelas induk
   public function getNama(){
      return "Teacher: " . $this->nama;
   }
}

// Membuat objek Student
$user1 = new Student('Yovi', '123');
echo $user1->getNama(); 

// Membuat objek Teacher
$dosen = new Teacher('Bu Vika', '321');
echo "\n";
echo $dosen->getNama();  
?>
