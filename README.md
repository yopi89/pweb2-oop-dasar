# OOP Dasar
Repositori ini dibuat untuk memenuhi tugas perkuliahan Praktikum Web 2 yang berisi JobSheet 1 hingga Jobsheet 3.
## Pengertian OOP Dasar
Objek-Oriented Programming (OOP) adalah paradigma pemrograman yang menggunakan “objek” - struktur data yang berisi data, dalam bentuk field, sering kali dikenal sebagai atribut; dan kode, dalam bentuk prosedur, sering kali dikenal sebagai metode.

Inti dari OOP adalah mendesain software dengan membagi masalah menjadi serangkaian objek yang saling berinteraksi. Ini bertentangan dengan pemrograman prosedural, yang fokus pada fungsi/prosedur dalam memproses data.

## Jobsheet 1
#### Class
```php
class Buku{

...

}
```
Class adalah template atau blueprint yang mendefinisikan struktur dan perilaku dari objek. Class mencakup attribut dan metode yang dapat dimiliki.

#### Objek
```php
$buku1 = New Buku();
```
Object mewarisi semua atribut dan metode dari class dan dapat digunakan untuk memanipulasi data atau menjalankan fungsi tertentu.

#### Attribut
```php
class Buku{
    protected $nama;
    public $judul;
    private $penuis;

}
```
Atribut adalah variabel yang terdapat di class yang digunakan untuk menyimpan data.

Jenis-jenis atribut terbagi menjadi public, protected dan private. Public dapat diakses dimana saja. Protected dapat diakses dari dalam class itu sendiri dan dari dalam class turunannya. Sedangkan Private hanya dapat diakses dari dalam class itu sendiri.

### Construct
```php
public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;       
        $this->nim = $nim;         
        $this->jurusan = $jurusan; 
}
```
Constructor adalah metode yang secara otomatis dipanggil ketika sebuah objek dari kelas dibuat. Tujuannya adalah untuk menginisialisasi objek tersebut dengan nilai-nilai awal atau melakukan setup lain yang diperlukan sebelum objek digunakan.

#### Method
```php
public function tampilInfo(){
        return "Judul: $this->judul, Penulis: $this->penulis";
    }
```
Metode adalah fungsi yang digunakan untuk melakukan tindakan pada objek.

## Full Coding Jobsheet 1
#### 1. Membuat Class dan Object
```php
<?php
// Membuat class Mahasiswa dan mendeklarasikan properti publik
class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

     // Method untuk menampilkan data mahasiswa
    public function tampilkanData(){
 
        return "Mahasiswa ".$this->nama." dengan nim ".$this->nim." dari jurusan ".$this->jurusan;
    }
}

// Membuat objek Mahasiswa dan mengisi properti objek dengan data
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama='Yovi Tito';
$mahasiswa1->nim='230202024';
$mahasiswa1->jurusan='JKB';
// Menampilkan data mahasiswa menggunakan method tampilkanData
echo $mahasiswa1->tampilkanData();
?>

```
#### Output :
```bash
Mahasiswa Yovi Tito dengan nim 230202024 dari jurusan JKB

```
#### 2. Implementasi Constructor
```php
<?php
// Membuat class Mahasiswa dan mendeklarasikan properti publik
class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi properti saat objek dibuat
    public function __construct($nama, $nim, $jurusan){
        // Mengisi properti dengan nilai yang diberikan saat objek dibuat
        $this->nama=$nama;
        $this->nim=$nim;
        $this->jurusan=$jurusan;
    }
    
     // Method untuk menampilkan data mahasiswa
    public function tampilkanData(){
      
        return "Mahasiswa ".$this->nama." dengan nim ".$this->nim." dari jurusan ".$this->jurusan;
    }
}
// Membuat objek Mahasiswa dengan data yang diberikan
$mahasiswa1 = new Mahasiswa("Yovi Tito", "230202024", "JKB");
// Menampilkan data mahasiswa menggunakan method tampilkanData
echo $mahasiswa1->tampilkanData();
?>

```
#### Output :
```bash
Mahasiswa Yovi Tito dengan nim 230202024 dari jurusan JKB

```
#### 3. Membuat Metode Tambahan
```php
<?php
// Membuat class Mahasiswa dan mendeklarasikan properti publik
class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi atribut nama, nim, dan jurusan
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    
    // Method untuk menampilkan data mahasiswa
    public function tampilkanData(){
        return "Mahasiswa " . $this->nama . ", dengan nim " . $this->nim . " dari jurusan " . $this->jurusan;
    }
    
    // Method untuk mengupdate jurusan mahasiswa
    public function updateJurusan($jurusanBaru){
        $this->jurusan = $jurusanBaru;
    }
}

// Membuat objek Mahasiswa dengan nilai awal untuk atribut nama, nim, dan jurusan
$mahasiswa1 = new Mahasiswa("Yovi Tito", "230202024", "JKB");

// Menampilkan data sebelum jurusan diubah
echo $mahasiswa1->tampilkanData() . "<br>";

// Mengubah jurusan menggunakan Method updateJurusan
$mahasiswa1->updateJurusan("TI");

// Menampilkan data setelah jurusan diubah
echo $mahasiswa1->tampilkanData();
?>

```
#### Output :
```bash
Mahasiswa Yovi Tito, dengan nim 230202024 dari jurusan JKB
Mahasiswa Yovi Tito, dengan nim 230202024 dari jurusan TI
```
#### 4. Penggunaan Atribut dan Metode
```php
<?php
// Membuat class Mahasiswa dan mendeklarasikan properti publik
class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi atribut nama, nim, dan jurusan
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    
    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData(){
        return "Mahasiswa " . $this->nama . ", dengan nim " . $this->nim . " dari jurusan " . $this->jurusan;
    }
    // Metode untuk mengupdate jurusan mahasiswa
    public function updateJurusan($jurusanBaru){
        $this->jurusan = $jurusanBaru;
    }
    
    // Metode setter untuk mengubah nim mahasiswa
    public function setNim($nimBaru){
        $this->nim = $nimBaru;
    }

}

// Membuat objek Mahasiswa dengan nilai awal untuk atribut nama, nim, dan jurusan
$mahasiswa1 = new Mahasiswa("Yovi Tito", "230202024", "JKB");

// Menampilkan data sebelum jurusan diubah
echo $mahasiswa1->tampilkanData() . "<br>";

// Mengubah jurusan menggunakan metode updateJurusan
$mahasiswa1->updateJurusan("MESIN");

// Menampilkan data setelah jurusan diubah
echo $mahasiswa1->tampilkanData() . "<br>";

// Mengubah nim menggunakan metode setNim
$mahasiswa1->setNim("230202999");

// Menampilkan data setelah nim diubah
echo $mahasiswa1->tampilkanData();
?>
```
#### Output :
```bash
Mahasiswa Yovi Tito, dengan nim 230202024 dari jurusan JKB
Mahasiswa Yovi Tito, dengan nim 230202024 dari jurusan MESIN
Mahasiswa Yovi Tito, dengan nim 230202999 dari jurusan MESIN

```
#### 5. Tugas
```php
<?php
// Membuat class Dosen dan mendeklarasikan properti publik
class Dosen{
    public $nama;
    public $nip;
    public $matkul;

    // Constructor untuk menginisialisasi atribut nama, nip, dan matkul
    public function __construct($nama, $nip, $matkul){
        $this->nama=$nama;
        $this->nip=$nip;
        $this->matkul=$matkul;
    }
    // Metode untuk menampilkan data dosen
    public function tampilkanDosen(){
        return $this->nama." dengan NIP ".$this->nip." mengajar Mata Kuliah  ".$this->matkul;
    }
}
// Membuat objek Dosen dengan nilai awal untuk atribut nama, nip, dan matkul
$dosen1 = new Dosen("Bu Vika", "123", "RPL");
// Menampilkan data dosen menggunakan metode tampilkanDosen
echo $dosen1->tampilkanDosen();
?>
```
#### Output :
```bash
Bu Vika dengan NIP 123 mengajar Mata Kuliah RPL

```

## Jobsheet 2 dan 3
### Encapsulation
```php
class Animal{
    protected $name;

  public function getName(){
        return $this->name;
    }
}
```
Encapsulation adalah konsep pengamanan data di dalam objek dengan membatasi akses ke atribut dan metode menggunakan visibility sehingga data hanya dapat dimanipulasi melalui metode tertentu.

### Inheritance (Pewarisan)
```php
class Animal{
    ...
}

class Cat extends Animal{
    ...
}

class Dog extends Animal{
    ...
}
```
Pewarisan adalah mekanisme di mana sebuah kelas baru dapat mewarisi sifat-sifat (atribut dan metode) dari kelas yang sudah ada. Kelas yang diwarisi disebut superclass atau parent class, sedangkan kelas yang mewarisi disebut subclass atau child class. Ini memungkinkan pengembangan kode yang lebih efisien karena subclass dapat menggunakan kembali kode dari superclass.

### Polymorphism
```php
class Animal{
    public function sound(){
        return "sound of animal";
    }
}

class Cat extends Animal{
    public function sound(){
        return "Meow";
    }
}

class Dog extends Animal{
    public function sound(){
        return "Woof";
    }
}
```
Polimorfisme memungkinkan objek dari berbagai kelas untuk diperlakukan sebagai objek dari kelas yang sama melalui antarmuka yang sama. Ini bisa dilakukan melalui overloading (metode yang sama dengan parameter berbeda) atau overriding (mengubah perilaku metode dari superclass di subclass).

### Abstraction
```php
abstract class Animal{
    abstract public function sound();
}

class Cat extends Animal{
    public function sound(){
        return "Meow";
    }
}

class Dog extends Animal{
    public function sound(){
        return "Woof";
    }
}
```
Abstraksi adalah konsep untuk menyederhanakan representasi dari objek dengan hanya menampilkan atribut dan metode yang relevan dan menyembunyikan detail yang tidak perlu. Abstraksi dilakukan dengan menggunakan kelas abstrak, yang mendefinisikan metode umum tanpa memberikan implementasi konkret.

## Full Coding Jobsheet 2
#### 1. Membuat Class dan Object
```php
<?php
// Membuat class (blueprint) mahasiswa
class Mahasiswa{
    // Mendeklarasikan properti private nama, nim dan jurusan
    private $nama;
    private $nim;
    private $jurusan;

    // Constructor untuk menginisialisasi properti ketika objek dibuat
    public function __construct($nama, $nim, $jurusan){
        // Mengisi properti dengan nilai yang diberikan saat objek dibuat
        $this->nama = $nama;       
        $this->nim = $nim;         
        $this->jurusan = $jurusan; 
    }

    // Method untuk menampilkan data mahasiswa (nama, nim dan jurusan)
    public function tampilkanData(){
        echo "Nama : " .$this->nama. "<br>";
        echo "NIM : " .$this->nim. "<br>";
        echo "Jurusan : " .$this->jurusan. "<br>";
    }
}

// Membuat objek Mahasiswa dan mengisi data
$mahasiswa1 = new Mahasiswa("Yovi Tito", "230202024", "JKB");
// Memanggil method untuk menampilkan data mahasiswa
$mahasiswa1->tampilkanData();
?>

```
#### Output :
```bash
Nama : Yovi Tito
NIM : 230202024
Jurusan : JKB

```
#### 2. Encapsulation
```php
<?php
// Membuat class(blueprint) Mahasiswa
class Mahasiswa{
    // Deklarasi properti private nama, nim dan jurusan
    private $nama;
    private $nim;
    private $jurusan;

    // Method untuk mengatur nilai properti nama, nim dan jurusan
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function setNim($nim){
        $this->nim = $nim;
    }
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }

    // Method untuk mendapatkan nilai properti nama, nim dan jurusan
    public function getNama(){
        return $this->nama;
    }
    public function getNim(){
        return $this->nim;
    }
    public function getJurusan(){
        return $this->jurusan;
    }

    // Method untuk menampilkan data mahasiswa
    public function tampilkanData(){
        return "Nama = " .$this->nama. "\nNim = " .$this->nim. "\nJurusan = " .$this->jurusan;
    }
}

// Membuat objek Mahasiswa dan mengisi properti objek dengan data menggunakan method setter
$mahasiswa1 = new Mahasiswa();

$mahasiswa1->setNama('Yovi Tito');
$mahasiswa1->setNim('230202024');
$mahasiswa1->setJurusan('JKB');

// Menampilkan data mahasiswa dengan method tampilkanData
echo $mahasiswa1->tampilkanData();
?>

```
#### Output :
```bash
Nama = Yovi Tito
Nim = 230202024
Jurusan = JKB

```
#### 3. Inheritance
```php
<?php
// Membuat class Pengguna sebagai kelas dasar
class Pengguna{
    // Properti protected dapat diakses oleh kelas turunan
    protected $nama;

    // Constructor untuk menginisialisasi properti nama saat objek dibuat
    public function __construct($nama){
        $this->nama=$nama;
    }
    // Method untuk mengatur nilai properti nama
    public function setNama($nama){
        return $this->nama=$nama;
    }
    // Method untuk mendapatkan nilai properti nama
    public function getNama(){
        return $this->nama;
    }
}
// Membuat class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna{
    // Properti private untuk mata kuliah
    private $matkul;

    // Constructor untuk menginisialisasi properti nama dan matkul saat objek Dosen dibuat
    public function __construct($nama, $matkul){
        // Memanggil constructor dari class Pengguna
        parent:: __construct($nama);
        $this->matkul=$matkul;
    }
    // Method untuk menampilkan data dosen
    public function getDosen(){
        return "Nama = " . $this->getNama() . "\nMata Kuliah = " . $this->matkul;
    }
}
// Membuat objek Dosen dan menampilkan menggunakan method getDosen
$dosen1 = new Dosen('Bu Vika',' RPL');
echo $dosen1->getDosen();
?>

```
#### Output :
```bash
Nama = Bu Vika
Mata Kuliah = RPL

```
#### 4. Polymorphism
```php
<?php
// Membuat class Pengguna sebagai kelas dasar
class Pengguna{
     // Properti protected agar dapat diakses oleh kelas turunan
    protected $nama;

    public function __construct(){
    }
  
    // Method untuk mengakses fitur dasar
    public function aksesFitur(){
        return "Akses fitur";
    }
}
// Membuat class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna{

    public function __construct(){
        
    }
    
    // Method untuk mengakses fitur khusus dosen
    public function aksesFitur(){
        return "<br>Edit Nilai";
    }
}
// Membuat class Mahasiswa yang mewarisi class Pengguna
class Mahasiswa extends Pengguna{
    public function __construct(){
    } 
    // Method untuk mengakses fitur khusus mahasiswa
    public function aksesFitur(){
        return "<br>Lihat Nilai";
    }
}
// Membuat objek dari masing-masing kelas
$akses1= new Pengguna();
$akses2= new Dosen();
$akses3= new Mahasiswa();

// Menampilkan akses fitur dari masing-masing objek
echo $akses1->aksesFitur();
echo $akses2->aksesFitur();
echo $akses3->aksesFitur();
?>

```
#### Output :
```bash
Akses fitur
Edit Nilai
Lihat Nilai

```
#### 5. Abstraction
```php
<?php
// Kelas Abstrak tidak dapat dipakai secara langsunag tapi harus di wariskan untuk penggunaannya
// Membuat kelas abstrak Pengguna
abstract class Pengguna{
    // Properti protected agar dapat diakses oleh kelas turunan
    protected $nama;

    public function __construct(){
    }
  
    // Deklarasi method abstrak untuk akses fitur, yang harus diinisialisasi oleh kelas turunan
    abstract public function aksesFitur(): string;
}
// Membuat kelas Dosen yang mewarisi kelas Pengguna
class Dosen extends Pengguna{

    public function __construct(){
        
    }
     // Menginisisalisasi method aksesFitur untuk dosen
    public function aksesFitur(): string{
        return "<br>Edit Nilai";
    }
}
// Membuat kelas Mahasiswa yang mewarisi kelas Pengguna
class Mahasiswa extends Pengguna{
    public function __construct(){
    } 
     // Menginisisalisasi method aksesFitur untuk mahasiswa
    public function aksesFitur(): string{
        return "<br>Lihat Nilai";
    }
}
// Membuat objek dari kelas Dosen dan Mahasiswa
$akses2= new Dosen();
$akses3= new Mahasiswa();
// Menampilkan akses fitur dari masing-masing objek
echo $akses2->aksesFitur();
echo $akses3->aksesFitur();

?>
```
#### Output :
```bash
Edit Nilai
Lihat Nilai

```

## Full Coding Jobsheet 3
#### 1. Inheritance
```php
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

```
#### Output :
```bash
123

```
#### 2. Polymorphism
```php
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

```
#### Output :
```bash
Student: Yovi
Teacher: Bu Vika

```
#### 3. Encapsulation
```php
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

```
#### Output :
```bash
Id : 321
Id : 321

```
#### 4. Abstraction
```php
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

```
#### Output :
```bash
Online Course: PHP Platform: Udemy
Offline Course: JavaScript Tempat: Kampus

```
#### 4. Tugas
```php
<?php
// mendefinisikan class abstrak person
abstract class Person {
    protected $nama;
    // constructor untuk menginisialisasi properti nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Implementasi metode getNama dari kelas person
    public function getNama() {
        return $this->nama;
    }

    // mendefinisikan metode abstrak getRole
    abstract public function getRole();
}
// mendefinisikan class Dosen yang mewarisi kelas Person
class Dosen extends Person {
    private $nidn;

    // constructor untuk menginisialisasi properti nidn
    public function __construct($nama, $nidn) {
        parent::__construct($nama);
        $this->nidn = $nidn;
    }

    // Implementasi metode getNidn dari kelas dosen
    public function getNidn() {
        return $this->nidn;
    }
    // implementasi metode setNidn dari kelas dosen
    public function setNidn($nidn){
        $this->nidn = $nidn;
    }
    // Implementasi metode getRole dari kelas dosen
    public function getRole() {
        return "Dosen : " .$this->nama;
    }
}
// mendefinisikan class Mahasiswa yang mewarisi kelas Person
class Mahasiswa extends Person {
    private $nim;

    // constructor untuk menginisialisasi properti nim
    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }
    // Implementasi metode getNim dari kelas mahasiswa
    public function getNim() {
        return $this->nim;
    }
    // Implementasi metode setNim dari kelas mahasiswa
    public function setNim($nim){
        $this->nim = $nim;
    }
    // Implementasi metode getRole dari kelas mahasiswa
    public function getRole() {
        return "Mahasiswa : " .$this->nama;
    }
}
// mendefinisikan kelas abstrak Jurnal
abstract class Jurnal {
    protected $judul;
    // constructor untuk menginisialisasi properti judul
    public function __construct($judul) {
        $this->judul = $judul;
    }
    // mendefinisikan metode abstrak ajukan
    abstract public function ajukan();
}

// mendefinisikan kelas JurnalDosen yang mewarisi kelas Jurnal
class JurnalDosen extends Jurnal {

    // Implementasi metode ajukan dari kelas JurnalDosen
    public function ajukan(){
        return "Jurnal Dosen : " .$this->judul. "diajukan";
    }

}

// mendefinisikan kelas JurnalMahasiswa yang mewarisi kelas Jurnal
class JurnalMahasiswa extends Jurnal {
    // Implementasi metode ajukan dari kelas JurnalMahasiswa
    public function ajukan() {
        return "Jurnal Mahasiswa : " .$this->judul. "diajukan";
     }
}
// membuat objek dosen dan mahasiswa
$dosen = new Dosen("Bu Vika", "1234");
$mahasiswa = new Mahasiswa("Yovi", "321");
// memanggil method getRole dan getNidn
echo $dosen->getRole() . " dengan NIDN: " . $dosen->getNidn() . "<br>";
echo $mahasiswa->getRole() . " dengan NIM: " . $mahasiswa->getNim() . "<br>";
// membuat objek jurnalDosen dan jurnalMahasiswa
$jurnalDosen = new JurnalDosen("Penelitian JS");
$jurnalMahasiswa = new JurnalMahasiswa("Proyek PHP");
// memanggil method ajukan
echo $jurnalDosen->ajukan() . "<br>";
echo $jurnalMahasiswa->ajukan() . "<br>";

?>
```
#### Output :
```bash
Dosen : Bu Vika dengan NIDN: 1234
Mahasiswa : Yovi dengan NIM: 321
Jurnal Dosen : Penelitian JSdiajukan
Jurnal Mahasiswa : Proyek PHPdiajukan

```














