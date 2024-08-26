<?php
class Person{
    protected $nama;

    protected function getNama(){
        return $this->nama;
    }

}
class Student extends Person{
    public $studentID;

    public function getStudentID() {
        return $this->studentID;
    }
}
$student1 = new Student();
$student1->studentID="12345";
echo $student1->getStudentID();

?>