<?php
session_start();

if(!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data item berdasarkan id nya
$mhs = query("SELECT * FROM item WHERE id=$id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {
	
	//cek data berhasil ditambahkan atau tidak
	if(ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('Data Berhasil di ubah');
				document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "<script>
				alert('Data Gagal di ubah');
				document.location.href = 'index.php';
			</script>";
	}

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Item</title>
</head>
<body>
	<h1>Edit data Item</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $mhs["id"] ;?>">
		<ul>
			<li>
				<label for="barcode">barcode</label>
				<input type="text" name="barcode" value="<?= $mhs['barcode'];?>" id="barcode">
			</li>
			<li>
				<label for="nama">nama</label>
				<input type="text" name="nama" value="<?= $mhs['nama'] ;?>" id="nama">
			</li>
			<li>
				<label for="satuan">satuan</label>
				<input type="text" name="satuan" value="<?= $mhs['satuan'] ;?>" id="satuan">
			</li>
			<li>
				<label for="harga">harga</label>
				<input type="text" name="harga" value="<?= $mhs['harga'] ;?>" id="harga">
			</li>
			<li>
				<button type="submit" name="submit">Perbaharui Data!</button>
			</li>
		</ul>
	</form>
</body>
</html>