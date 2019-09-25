<?php 
 
require_once 'php_action/db_connect.php';
 
if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM mahasiswa WHERE id = {$id}";
    $result = $connect->query($sql);
 
    $data = $result->fetch_assoc();
 
    $connect->close();
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
 
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
 
        table tr th {
            padding-top: 20px;
        }
    </style>
 
</head>
<body>
 
<fieldset>
    <legend>Edit Mahasiswa</legend>
 
    <form action="php_action/update.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" placeholder="nama" value="<?php echo $data['nama'] ?>" /></td>
            </tr>     
            <tr>
                <th>Username</th>
                <td><input type="text" name="username" placeholder="username" value="<?php echo $data['username'] ?>" /></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="text" name="password" placeholder="password" value="<?php echo $data['password'] ?>" /></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text" name="email" placeholder="email" value="<?php echo $data['email'] ?>" /></td>
            </tr>
            <tr>
                <input type="hidden" name="id" value="<?php echo $data['id']?>" />
                <td><button type="submit">Simpan</button></td>
                <td><a href="index.php"><button type="button">Kembali</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>
 
<?php
}
?>