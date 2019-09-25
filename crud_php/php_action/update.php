<?php 
 
require_once 'db_connect.php';
 
if($_POST) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
 
    $id = $_POST['id'];
 
    $sql = "UPDATE mahasiswa SET nama = '$nama', username = '$username', password = '$password', email = '$email' WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Berhasil Diubah</p>";
        echo "<a href='../edit.php?id=".$id."'><button type='button'>Kembali</button></a>";
        echo "<a href='../index.php'><button type='button'>Beranda</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}
 
?>