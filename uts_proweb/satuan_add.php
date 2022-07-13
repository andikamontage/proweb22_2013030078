<?php
include 'con_db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data satuan</title>
</head>

<body>
    <form action="satuan_proc.php" method="post">
        ID:<br>
        <input type="text" name="id"><br>
        Nama:<br>
        <input type="text" name="nama"><br>
        keterangan:<br>
        <input type="text" name="keterangan"><br>
        aktif<br>
        <select name="aktif">
            <option value="1">aktif</option>
            <option value="0">tidak aktif</option>
        </select>
        <br>
        <input type="hidden" name="crt">
        crt_date<br>
        <input type="datetime-local" name="crt_date"><br>
        upd<br>
        <input type="text" name="upd"><br>
        upd_date<br>
        <input type="datetime-local" name="upd_date">

        <input type="submit" name="proses" value="SIMPAN">
    </form>
</body>

</html>