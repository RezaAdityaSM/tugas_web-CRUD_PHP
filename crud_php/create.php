<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
 
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
    <legend>Tambah Mahasiswa</legend>
 
    <form action="php_action/create.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" placeholder="nama" /></td>
            </tr>     
            <tr>
                <th>Username</th>
                <td><input type="text" name="username" placeholder="username" /></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="text" name="password" placeholder="password" /></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text" name="email" placeholder="email" /></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
                <td><a href="index.php"><button type="button">Kembali</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>