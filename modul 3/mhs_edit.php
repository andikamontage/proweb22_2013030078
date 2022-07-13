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
<?php
	$npm = $_GET['npm'];
    $sql = mysqli_query($conn, "SELECT * FROM mhs WHERE npm='$npm'");
    while ($data = mysqli_fetch_array($sql)) {
?>
<div class="container">
	<h1 class="text-center"></h1>
	<h2 class="text-center"></h2>

<!-- Awal Card Form -->
	<div class="card mt-3">
	  <div class="card-header bg-primary text-white">
	    Form Input Data Mahasiswa
	  </div>
	  <div class="card-body">
	    <form action="mhs_proc.php?hal=edit&npm=<?= $data['npm'] ?>" method="post">
	    	<div class="form-group">
	    		<label>NPM</label>
	    		<input type="text" name="npm" value="<?= $data['npm'] ?>" class="form-control" placeholder="Masukkan NPM anda!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Nama</label>
	    		<input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" placeholder="Masukkan Nama anda!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Alamat</label>
	    		<textarea class="form-control" name="alamat" placeholder="Masukkan Alamat anda disini!"><?= $data['alamat'] ?></textarea>
	    	</div>
	    	<div class="form-group">

	    	</div>
	    	<button type="submit" class="btn btn-success" name="proses" value="perbarui">Perbarui</button>
	    	<button type="reset" class="btn btn-danger" name="reset">Reset</button>
	    </form>
	    <?php
    } ?>
	  </div>
	</div>
</div>
</body>
</html>