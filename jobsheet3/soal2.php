<?php
class Person{
    protected $nama;

    protected function getNama(){
        return $this->nama;
    }
    public function __construct($name){
        $this->name=$name;
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
        return "Nama Murid : " .$this->name;
    }
}
class Teacher extends Person{
    private $teacherID;
    public function __construct($nama, $studentID){
        parent:: __construct($nama);
        $this->studentID=$studentID;
    }
    public function getNama(){
        return "Nama Guru : " .$this->name;
    }
}

$student1 = new Student('Yovi', '132');
echo $student1->getNama();
$teacher1 = new Teacher('Bu Vika', '321');
echo $teacher1->getNama(); //Menampilkan

?>