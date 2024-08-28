<?php

// Mendefinisikan kelas abstrak Course
abstract class Course {
    // Mendefinisikan metode abstrak getCourseDetails
    abstract public function getCourseDetails();
}

// Mendefinisikan kelas OnlineCourse yang mewarisi kelas Course
class OnlineCourse extends Course {
    private $nama_course;
    private $platform;    

    // Constructor untuk menginisialisasi nama_course dan platform
    public function __construct($nama_course, $platform) {
        $this->nama_course = $nama_course;
        $this->platform = $platform;
    }

    // Implementasi metode getCourseDetails dari kelas Course
    public function getCourseDetails() {
        return "Online Course: " . $this->nama_course . " Platform: " . $this->platform . "<br>";
    }
}

// Mendefinisikan kelas OfflineCourse yang juga mewarisi kelas Course
class OfflineCourse extends Course {
    private $nama_course; 
    private $tempat;      

    // Constructor untuk menginisialisasi nama_course dan tempat
    public function __construct($nama_course, $tempat) {
        $this->nama_course = $nama_course;
        $this->tempat = $tempat;
    }

    // Implementasi metode getCourseDetails dari kelas Course
    public function getCourseDetails() {
        return "Offline Course: " . $this->nama_course . " Tempat: " . $this->tempat;
    }
}

// Membuat objek OnlineCourse dan memanggil getCourseDetails
$online = new OnlineCourse('PHP', 'Udemy');
$data_online = $online->getCourseDetails();
echo $data_online; 

// Membuat objek OfflineCourse dan memanggil getCourseDetails
$offline = new OfflineCourse('JavaScript', 'Kampus');
$data_offline = $offline->getCourseDetails();
echo $data_offline; 
?>
