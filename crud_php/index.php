<?php require_once 'php_action/db_connect.php'; ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD</title>
 
    <style type="text/css">
        .managemahasiswa {
            width: 50%;
            margin: auto;
        }
 
        table {
            width: 100%;
            margin-top: 20px;
        }
 
    </style>
 
</head>
<body>
 
<div class="managemahasiswa">
    <a href="create.php"><button type="button">Tambah Mahasiswa</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM mahasiswa";
            $result = $connect->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['nama']."</td>
                        <td>".$row['username']."</td>
                        <td>".$row['password']."</td>
                        <td>".$row['email']."</td>
                        <td>
                            <a href='edit.php?id=".$row['id']."'><button type='button'>Ubah</button></a>
                            <a href='remove.php?id=".$row['id']."'><button type='button'>Hapus</button></a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>Tidak Ada Data</center></td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
 
</body>
</html>