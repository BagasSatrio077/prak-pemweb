<?php
//untuk membuat class DataDiri
class DataDiri {
  //untuk membuat property nama, alamat, dan email
  public $nama;
  public $alamat;
  public $email;

  //untuk membuat constructor untuk menginisialisasi property
  public function __construct($nama, $alamat, $email) {
    $this->nama = $nama;
    $this->alamat = $alamat;
    $this->email = $email;
  }

  //untuk membuat method untuk menampilkan data diri
  public function tampildata() {
    echo "Nama: " . $this->nama . "<br>";
    echo "Alamat: " . $this->alamat . "<br>";
    echo "Email: " . $this->email . "<br>";
  }
}

//untuk membuat objek dari class DataDiri
$data1 = new DataDiri("Bagas Satrio", "Kemiling", "bagas@gmail.com");
$data2 = new DataDiri("Anibas Larisa", "Way Halim", "anibas@gmail.com");

//untuk memanggil method tampildata dari objek
$data1->tampildata();
$data2->tampildata();
?>
