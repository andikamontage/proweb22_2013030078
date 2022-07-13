<?php
include 'con_db.php';
if (isset($_POST['proses']) && $_POST['proses'] == 'SIMPAN') {
    $id = $_POST['id'];
    $upline = $_POST['upline'];
    $levvel = $_POST['level'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $aktif= $_POST['status'];
    $crt = $_POST['crt'];
    $crt_date = $_POST['crt_date'];
    $upd = $_POST['upd'];
    $upd_date = $_POST['upd_date'];

    $sql = "INSERT INTO item_grp
			(id,upline,level,nama,keterangan,aktif,crt,crt_date,upd,upd_date)
			VALUES 
			('$id','$upline','$levvel','$nama','$keterangan','$aktif','$crt','$crt_date','$upd','$upd_date')";
    if ($conn->query($sql)){
        header("Location: item_grp.php?action=berhasil");
    }
    else{
        header("Location: item_grp.php?action=gagal");
    }
}
//menghapus data
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM item_grp
			WHERE id='$id'";
    if ($conn->query($sql))
        header("Location: item_grp.php");
    else
        header("Location: item_grp.php");
}

//update
if (isset($_POST['proses']) && $_POST['proses'] == 'perbarui') {
    // var_dump($_POST);
    $id = $_POST['id'];
    $upline = $_POST['upline'];
    $levvel = $_POST['level_item'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $aktif= $_POST['aktif'];
    $crt = $_POST['crt'];
    $crt_date = $_POST['crt_date'];
    $upd = $_POST['upd'];
    $upd_date = $_POST['upd_date'];

    $sql = "UPDATE item_grp SET upline='$upline',nama='$nama',keterangan='$keterangan',
			aktif='$aktif',crt_date='$crt_date',upd_date='$upd_date',level='$levvel'
			WHERE id='$id'";
    mysqli_query($conn,$sql);
    if ($conn->query($sql)){
        header("Location: item_grp.php?action=berhasil");
    }
    else{
        header("Location: item_grp.php?action=gagal");
    }
}
