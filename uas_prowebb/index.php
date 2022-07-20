<?php
session_start();

if(!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';
$item = query("SELECT * FROM item ORDER BY id ASC");

// tombol cari di tekan
if(isset($_POST['cari'])) {
	$item = cari($_POST["keyword"]);
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<a href="logout.php">Logout</a>

<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah Data</a>
<br><br>
	
<form action="" method="POST">
	<input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off">
	<button type="submit" name="cari">Cari!</button>
	
</form><div id="printableArea">

<br>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>id</th>
		<th>barcode</th>
		<th>nama</th>
		<th>satuan</th>
		<th>harga</th>
		<th>aksi</th>
	</tr>
	<?php $no=1; ?>
	<?php foreach ( $item as $itm ) : ?>
	<tr>
		<td><?=$no++;?></td>
		<td><?= $itm['id']; ?></td>
		<td><?= $itm['barcode']; ?></td>
		<td><?= $itm['nama']; ?></td>
		<td><?= $itm['satuan']; ?></td>
		<td><?= $itm['harga']; ?></td>
		<td>
			<a href="ubah.php?id=<?= $itm["id"] ;?>">Edit</a>
			<a href="hapus.php?id=<?= $itm["id"]; ?>" onclick="return confirm('yakin >');">Hapus</a>
			<a href="print.php?id=<?= $itm["id"] ;?>" value="print" name="print">Print</a>
			
		</td>
	</tr>
	<?php endforeach; ?>
</table>
</div>
</body>
</html>

