<?php
session_start();

if(!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {

	
	//cek data berhasil ditambahkan atau tidak
	if(tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('Data Berhasil ditambahkan');
				document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "<script>
				alert('Data Gagal ditambahkan');
				document.location.href = 'index.php';
			</script>";
	}

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Item</title>
</head>
<body>
	<h1>Tambah data Item</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="id">id</label>
				<input type="text" name="id" id="id">
			</li>
			<li>
				<label for="barcode">barcode</label>
				<input type="text" name="barcode" id="barcode">
			</li>
			<li>
				<label for="nama">nama</label>
				<input type="text" name="nama" id="nama">
			</li>
			<li>
				<label for="satuan">satuan</label>
				<input type="text" name="satuan" id="satuan">
			</li>
			<li>
				<label for="harga">harga</label>
				<input type="text" name="harga" id="harga">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>
	</form>
</body>
</html>