<?php
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
    $sql = mysqli_query($conn, "SELECT * FROM item_grp where id='$id'");
    while ($d = mysqli_fetch_array($sql)) {
    ?>
    <form action="item_grp_proc.php" method="post">
        ID<br>
        <input type="text" name="id" value="<?= $d['id'] ?>"><br>
        upline<br>
        <input type="text" name="upline" value="<?= $d['upline'] ?>"><br>
        level<br>
        <input type="text" name="level_item" value="<?= $d['level'] ?>"><br>
        Nama<br>
        <input type="text" name="nama" value="<?= $d['nama'] ?>"><br>
        keterangan<br>
        <input type="text" name="keterangan" value="<?= $d['keterangan'] ?>">
        Aktif<br>
        <input type="text" name="aktif" value="<?= $d['aktif'] ?>"><br>
        crt<br>
        <input type="text" name="crt" value="<?= $d['crt'] ?>"><br>
        crt_date<br>
        <input type="datetime-local" name="crt_date"
            value="<?php echo date('Y-m-d\TH:i', strtotime($d['crt_date']))?>"><br>
        upd<br>
        <input type="text" name="upd" value="<?= $d['upd'] ?>"><br>
        crt_date<br>
        <input type="datetime-local" name="upd_date"
            value="<?php echo date('Y-m-d\TH:i', strtotime($d['upd_date']))?>"><br>
        <button type="submit" name="proses" value="perbarui"
            onclick="return confirm('Yakin Memperbarui data ini Data Ini?')">
            Simpan</button>
    </form>
    <?php
    }
    ?>
</body>

</html>