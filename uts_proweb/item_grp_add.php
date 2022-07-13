<?php
include 'con_db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data item grup</title>
</head>

<body>
    <form action="item_grp_proc.php" method="POST">
        ID:<br>
        <input type="text" name="id"><br>
        upline:<br>
        <input type="text" name="upline"><br>
        level:<br>
        <input type="text" name="level"><br>
        Nama:<br>
        <input type="text" name="nama"><br>
        keterangan:<br>
        <input type="text" name="keterangan"><br>
        aktif<br>
        <select name="status">
            <option value="1">aktif</option>
            <option value="0">tidak aktif</option>
        </select>
        <br>
        crt_date<br>
        <input type="datetime-local" name="crt"><br>
        upd_date<br>
        <input type="datetime-local" name="upd">
        <button type="submit" name="proses" value="SIMPAN">Simpan</button>
    </form>
</body>

</html>