<?php
include 'con_db.php';
// menambahkan data
if (isset($_POST['proses']) && $_POST['proses'] == 'SIMPAN') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $aktif = $_POST['aktif'];
    $crt = $_POST['crt'];
    $crt_date = $_POST['crt_date'];
    $upd = $_POST['upd'];
    $upd_date = $_POST['upd_date'];


    $sql = "INSERT INTO satuan
			(id,nama,keterangan,aktif,crt,crt_date,upd,upd_date)
			VALUES 
			('$id','$nama','$keterangan','$aktif','$crt','$crt_date','$upd','$upd_date')";
    $crud = mysqli_query($conn,$sql);
    if (!$crud)
        header("Location: satuan.php?action=gagal");
    else
        header("Location: satuan.php?action=berhasil");
}
// var_dump($_POST); 

if (isset($_POST['proses']) && $_POST['proses'] == 'perbarui') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $aktif = $_POST['aktif'];
    $crt = $_POST['crt'];
    $crt_date = $_POST['crt_date'];
    $upd = $_POST['upd'];
    $upd_date = $_POST['upd_date'];
    $sql = mysqli_query($conn,"UPDATE satuan 
    SET nama='$nama',keterangan='$keterangan',
    aktif='$aktif',upd_date='$upd_date'
    WHERE id='$id'");
    // $sql = "UPDATE satuan 
	// 		SET nama='$nama',keterangan='$keterangan',
	// 		aktif='$aktif',upd_date='$upd_date'
	// 		WHERE id='$id'";
    if (!$sql){
        header("Location: satuan.php?action=gagal"); 
    }else{
        header("Location: satuan.php?action=berhasil");
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM satuan
			WHERE id='$id'";
    $crud = mysqli_query($conn,$sql);
    var_dump($crud);
    if (!$crud)
        header("Location: satuan.php?action=gagal"); 
    else
        header("Location: satuan.php?action=berhasil");
}

