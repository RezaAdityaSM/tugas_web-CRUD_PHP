<?php 
 
require_once 'db_connect.php';
 
if($_POST) {
    $id = $_POST['id'];
 
    $sql = "DELETE FROM mahasiswa WHERE id = '$id'";
    if($connect->query($sql) === TRUE) {
        echo "<p>Berhasil Dihapus!!</p>";
        echo "<a href='../index.php'><button type='button'>Kembali</button></a>";
    } else {
        echo "Gagal Dihapus : " . $connect->error;
    }
 
    $connect->close();
}
 
?>