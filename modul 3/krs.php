<?php
include 'koneksi.php';
include 'menu.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>KRS</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<?php include 'header.php';?>
<br>
<a href="krs_add.php" class="btn btn-primary">Tambah</a>

<div class="card mt-3">
	  <div class="card-header bg-success text-white">
	    Kartu Rencana Studi   
	  </div>
	  <div class="card-body">
	  	<table class="table table-bordered table-striped">
	  		<tr>
	  			<th>no</th>
	  			<th>id</th>
	  			<th>mhs_npm</th>
	  			<th>mk_kode</th>
	  			<th>semester</th>
	  			<th>ta_id</th>
	  			<th>nilai</th>
	  			<th>Aksi</th>
	  		</tr>
	  		<?php 
	  		$no = 1;
	  			$tampil = mysqli_query($conn, "SELECT * FROM krs order by id desc");
	  			while($data = mysqli_fetch_array($tampil)) : ?>
	  		<tr>
	  			<td><?= $no++; ?></td>
	  			<td><?= $data['id'] ?></td>
	  			<td><?= $data['mhs_npm'] ?></td>
	  			<td><?= $data['mk_kode'] ?></td>
	  			<td><?= $data['sem'] ?></td>
	  			<td><?= $data['ta_id'] ?></td>
	  			<td><?= $data['nilai'] ?></td>
	  			<td>
	  				<a href="krs_edit.php?hal=edit&id=<?= $data['id'] ?>" class="btn btn-warning">Edit</a>
	  				<a href="krs_proc.php?hal=hapus&id=<?= $data['id'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger" value="hapus">Hapus</a>
	  			</td>
	  		</tr>
	  	<?php endwhile; ?>
	  </div>
	</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>