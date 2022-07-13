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
	    Form Input Tahun Akademik
	  </div>
	  <div class="card-body">
	    <form action="ta_proc.php" method="post">
	    	<div class="form-group">
	    		<label>id</label>
	    		<input type="text" name="id" class="form-control" placeholder="Masukkan id anda!" required>
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