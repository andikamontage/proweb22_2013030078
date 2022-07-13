<?php
error_reporting(0);
include "con_db.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>satuan - Detil</title>
</head>

<body>

    <h2>Detil Data satuan</h2>

    <br>
    <?php
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM item where id='$id'");
    while ($d = mysqli_fetch_array($sql)) {
    ?>
    <form action="item_proc.php" method="post">
        ID:<br>
        <input type="text" name="id" value="<?= $d['id']?>"><br>
        item_grp_id:<br>
        <select name=" item_grp_id" value="<?= $d['item_grp_id']?>">
            <?php
            $sql = "SELECT * FROM item_grp";
            $res = $conn->query($sql);
            while ($rows = $res->fetch_array(MYSQLI_BOTH)) { ?>
            <option value="<?= $rows['id']?>" <?php if ($rows['id'] == $d['item_grp_id']) {
                echo "selected";
            } ?>><?= $rows['nama']?></option>
            <?php } ?>
        </select><br>
        barcode:<br>
        <input type=" text" name="barcode" value="<?= $d['barcode']?>"><br>
        Nama:<br>
        <input type="text" name="nama" value="<?= $d['nama']?>"><br>
        satuan_id:<br>
        <select name="satuan_id" value="<?= $d['satuan_id']?>">
            <?php
            $sql = "SELECT * FROM satuan";
            $res = $conn->query($sql);
            while ($rows = $res->fetch_array(MYSQLI_BOTH)) { ?>
            <option value="<?= $rows['id']?>" <?php if ($rows['id'] == $d['satuan_id']) {
                echo "selected";
            } ?>><?= $rows['nama']?></option>
            <?php } ?>
        </select><br>
        hpp:<br>
        <input type="text" name="hpp" value="<?= $d['hpp']?>"><br>
        aktif<br>
        <select name="aktif" value="<?= $d['aktif']?>">
            <option value="1">aktif</option>
            <option value="0">tidak aktif</option>
        </select>
        <br>
        crt_date<br>
        <input type="datetime-local" name="crt_date"
            value="<?php echo date('Y-m-d\TH:i', strtotime($d['crt_date'])); ?>"><br>
        upd_date<br>
        <input type="datetime-local" name="upd_date"
            value="<?php echo date('Y-m-d\TH:i', strtotime($d['upd_date'])); ?>">
        <input type="hidden" name="crt">
        <input type="hidden" name="upd">
        <button type="submit" name="proses" value="perbarui"
            onclick="return confirm('Yakin Memperbarui data ini Data Ini?')">Simpan</button>
    </form>
    <?php
    }
    ?>
</body>

</html>