<?php
class Person{
    protected $nama;

    protected function getNama(){
        return $this->nama;
    }
    public function __construct($nama){
        $this->nama=$nama;
    }

}
class Student extends Person{
    public $studentID;
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