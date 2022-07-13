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
    <form action="item_proc.php" method="POST">
        ID:<br>
        <input type="text" name="id"><br>
        item_grp_id:<br>
        <select name="item_grp_id">
            <?php
            $sql = "SELECT * FROM item_grp";
            $res = $conn->query($sql);
            while ($rows = $res->fetch_array(MYSQLI_BOTH)) {
                echo "<option value='" . $rows['id'] . "'>" . $rows['nama'] . "</option>";
            }
            ?>
        </select><br>
        barcode:<br>
        <input type="text" name="barcode"><br>
        Nama:<br>
        <input type="text" name="nama"><br>
        satuan_id:<br>
        <select name="satuan_id">
            <?php
            $sql = "SELECT * FROM satuan";
            $res = $conn->query($sql);
            while ($rows = $res->fetch_array(MYSQLI_BOTH)) {
                echo "<option value='" . $rows['id'] . "'>" . $rows['nama'] . "</option>";
            }
            ?>
        </select><br>
        hpp:<br>
        <input type="text" name="hpp"><br>
        aktif<br>
        <select name="aktif">
            <option value="1">aktif</option>
            <option value="0">tidak aktif</option>
        </select>
        <br>
        crt_date<br>
        <input type="datetime-local" name="crt_date"> <br>
        upd_date<br>
        <input type="datetime-local" name="upd_date">
        <input type="hidden" name="crt">
        <input type="hidden" name="upd">
        <br>
        Harga <br>
        <input type="text" name="harga">
        <button type="submit" name="proses" value="SIMPAN">Simpan</button>
    </form>
</body>

</html>