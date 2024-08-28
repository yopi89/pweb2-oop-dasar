<?php
class Person {
   protected $nama;

   // Constructor untuk menginisialisasi properti nama
   public function __construct($nama){
      $this->nama = $nama;
   }
   
   // Metode protected getNama untuk mengembalikan nilai nama
   protected function getNama(){
      return $this->nama;
   }
}

class Student extends Person {
   private $studentID;
   
   // Constructor untuk menginisialisasi properti nama dan studentID
   public function __construct($nama, $studentID) {
      parent::__construct($nama);
      $this->studentID = $studentID;
   }
   
   // Metode untuk mendapatkan nilai studentID
   public function getStudentId(){
      return $this->studentID;
   }

   // Metode untuk mengatur nilai studentID
   public function setStudentId($id){
      $this->studentID = $id;
   }
   
   // Override metode getNama untuk menambahkan nama
   public function getNama(){
      return "Student : " .  $this->nama;
   }
}

class Teacher extends Person {
   private $teacherID;
  
   // Constructor untuk menginisialisasi properti nama dan teacherID
   public function __construct($nama, $teacherID){
      parent::__construct($nama);
      $this->teacherID = $teacherID;
   }

   // Override metode getNama untuk menambahkan nama
   public function getNama(){
      return "Teacher : " . $this->nama;
   }
}

// Membuat objek 
$user1 = new Student('Yovi', '321');
echo "Id : " . $user1->getStudentId(); 

$user1->setStudentId('321');
echo "\nId : " . $user1->getStudentId();
?>
