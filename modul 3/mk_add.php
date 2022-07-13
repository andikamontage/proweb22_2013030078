<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Mata Kuliah</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<h1 class="text-center"></h1>
	<h2 class="text-center"></h2>
<div class="card mt-3">
	  <div class="card-header bg-primary text-white">
	    Form Input Mata Kuliah
	  </div>
	  <div class="card-body">
	    <form action="mk_proc.php" method="post">
	    	<div class="form-group">
	    		<label>Kode</label>
	    		<input type="text" name="kode" class="form-control" placeholder="Masukkan kode anda!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Nama</label>
	    		<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama anda!" required>
	    	</div>
	    	<button type="submit" class="btn btn-success" name="proses" value="tambah">Simpan</button>
	    	<button type="reset" class="btn btn-danger" name="reset">Reset</button>
	    </form>
	  </div>
	</div>
</body>
</html>