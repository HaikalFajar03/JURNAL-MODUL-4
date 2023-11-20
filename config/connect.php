<!-- File ini berisi koneksi dengan database MySQL -->
<?php 
// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$con = mysqli_connect('localhost:3306', 'root', '','modul4');
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if ($con->connect_error) {
    die("<script>alert('Connection failed: )</script>" . $con->connect_error);
  }
  echo "<script>alert('Connected successfully')</script>";
// 

?>