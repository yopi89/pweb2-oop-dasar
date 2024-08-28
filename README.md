# OOP Dasar

## Pengertian OOP Dasar
Objek-Oriented Programming (OOP) adalah paradigma pemrograman yang menggunakan “objek” - struktur data yang berisi data, dalam bentuk field, sering kali dikenal sebagai atribut; dan kode, dalam bentuk prosedur, sering kali dikenal sebagai metode.

Inti dari OOP adalah mendesain software dengan membagi masalah menjadi serangkaian objek yang saling berinteraksi. Ini bertentangan dengan pemrograman prosedural, yang fokus pada fungsi/prosedur dalam memproses data.

#### Class
```php
class Buku{

}
```
Class adalah template atau blueprint yang mendefinisikan struktur dan perilaku dari objek. Class mencakup attribut dan metode yang dapat dimiliki.

#### Objek
```php
$buku1 = New Buku
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

#### Method
```php
public function tampilInfo(){
        return "Judul: $this->judul, Penulis: $this->penulis";
    }
```
Metode adalah fungsi yang digunakan untuk melakukan tindakan pada objek.

