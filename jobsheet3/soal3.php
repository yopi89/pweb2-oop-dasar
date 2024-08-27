<?php
class Person{
    private $nama;

    public function getNama(){
        return $this->nama;
    }
    public function __construct($nama){
        $this->nam=$nama;
    }
    public function setNama(){
        return $this->nama=$nama;
        
    }

}
class Student extends Person{
    private $studentID;
    public function __construct($nama, $studentID){
        parent:: __construct($nama);
        $this->studentID=$studentID;
    }

    public function getStudentID() {
        return $this->studentID;
    }
    public function getNama(){
        return "Nama Murid : " .$this->nama;
    }
    public function setStudentId($studentID){
        return $this->studentID=$studentID;
    }
}
class Teacher extends Person{
    private $teacherID;
    public function __construct($nama, $studentID){
        parent:: __construct($nama);
        $this->studentID=$studentID;
    }
    public function getNama(){
        return "Nama Guru : " .$this->nama;
    }
    
}

$student1 = new Student('Yovi', '132');
echo $student1->getNama();
$teacher1 = new Teacher('Bu Vika', '321');
echo $teacher1->getNama(); //Menampilkan

?>