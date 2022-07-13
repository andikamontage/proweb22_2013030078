<?php
include 'koneksi.php';
include 'menu.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>ta</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<?php include 'header.php';?>
<br>
<a href="ta_add.php" class="btn btn-primary">Tambah</a>

<div class="card mt-3">
	  <div class="card-header bg-success text-white">
	    Tahun Akademik    
	  </div>
	  <div class="card-body">
	  	<table class="table table-bordered table-striped">
	  		<tr>
	  			<th>No.</th>
	  			<th>Id</th>
	  			<th>Nama</th>
	  			<th>Aksi</th>
	  		</tr>
	  		<?php 
	  		$no = 1;
	  			$tampil = mysqli_query($conn, "SELECT * FROM ta order by id desc");
	  			while($data = mysqli_fetch_array($tampil)) : ?>
	  		<tr>
	  			<td><?= $no++; ?></td>
	  			<td><?= $data['id'] ?></td>
	  			<td><?= $data['nama'] ?></td>
	  			<td>
	  				<a href="ta_edit.php?hal=edit&id=<?= $data['id'] ?>" class="btn btn-warning">Edit</a>
	  				<a href="ta_proc.php?hal=hapus&id=<?= $data['id'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger" value="hapus">Hapus</a>
	  			</td>
	  		</tr>
	  	<?php endwhile; ?>
	  </div>
	</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>