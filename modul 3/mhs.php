<?php
include 'koneksi.php';
include 'menu.php';
if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
}
else
	$nama = '';
?>

<!DOCTYPE html>
<html>
<head>
	<title>mhs</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<?php include 'header.php';?>
<br>		

<a href="mhs_add.php" class="btn btn-primary">Tambah</a>

<div class="card mt-3">
	  <div class="card-header bg-success text-white">
	    Daftar Mahasiswa    
	  </div>
	  <div class="card-body">
	  	<table class="table table-bordered table-striped">
	  		<tr>
	  			<th>No.</th>
	  			<th>NIM</th>
	  			<th>Nama</th>
	  			<th>Alamat</th>
	  			<th>Aksi</th>
	  		</tr>
	  		<?php 
	  		$no = 1;
	  			$tampil = mysqli_query($conn, "SELECT * FROM mhs order by npm desc");
	  			while($data = mysqli_fetch_array($tampil)) : ?>
	  		<tr>
	  			<td><?= $no++; ?></td>
	  			<td><?= $data['npm'] ?></td>
	  			<td><?= $data['nama'] ?></td>
	  			<td><?= $data['alamat'] ?></td>
	  			<td>
	  				<a href="mhs_edit.php?hal=edit&npm=<?= $data['npm'] ?>" class="btn btn-warning">Edit</a>
	  				<a href="mhs_proc.php?hal=hapus&npm=<?= $data['npm'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger" value="hapus">Hapus</a>
	  			</td>
	  		</tr>
	  	<?php endwhile; ?>
	  </div>
	</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>