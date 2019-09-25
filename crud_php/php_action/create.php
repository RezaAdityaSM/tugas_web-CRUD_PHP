<?php 
 
require_once 'db_connect.php';
 
if($_POST) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
 
    $sql = "INSERT INTO mahasiswa (nama, username, password, email) VALUES ('$nama', '$username', '$password', '$email')";
    if($connect->query($sql) === TRUE) {
        echo "<p>Data Berhasil Ditambah</p>";
        echo "<a href='../create.php'><button type='button'>Kembali</button></a>";
        echo "<a href='../index.php'><button type='button'>Beranda</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
 
?>