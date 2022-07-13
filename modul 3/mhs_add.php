<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<h1 class="text-center"></h1>
	<h2 class="text-center"></h2>
<div class="card mt-3">
	  <div class="card-header bg-primary text-white">
	    Form Input Data Mahasiswa
	  </div>
	  <div class="card-body">
	    <form action="mhs_proc.php" method="post">
	    	<div class="form-group">
	    		<label>NPM</label>
	    		<input type="text" name="npm" class="form-control" placeholder="Masukkan NPM anda!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Nama</label>
	    		<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama anda!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Alamat</label>
	    		<textarea class="form-control" name="alamat" placeholder="Masukkan Alamat anda disini!"></textarea>
	    	</div>
	    	<button type="submit" class="btn btn-success" name="proses" value="tambah">Simpan</button>
	    	<button type="reset" class="btn btn-danger" name="reset">Reset</button>
	    </form>
	  </div>
	</div>
</body>
</html>