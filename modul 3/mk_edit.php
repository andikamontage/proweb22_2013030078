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
	$kode = $_GET['kode'];
    $sql = mysqli_query($conn, "SELECT * FROM mk WHERE kode='$kode'");
    while ($data = mysqli_fetch_array($sql)) {
?>
<div class="container">
	<h1 class="text-center"></h1>
	<h2 class="text-center"></h2>

<!-- Awal Card Form -->
	<div class="card mt-3">
	  <div class="card-header bg-primary text-white">
	    Form Input Mata Kuliah
	  </div>
	  <div class="card-body">
	    <form action="mk_proc.php?hal=edit&kode=<?= $data['kode'] ?>" method="post">
	    	<div class="form-group">
	    		<label>kode</label>
	    		<input type="text" name="kode" value="<?= $data['kode'] ?>" class="form-control" placeholder="Masukkan NPM anda!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Nama</label>
	    		<input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" placeholder="Masukkan Nama anda!" required>
	    	</div>
	    	<div class="form-group">
	    	</div>
	    	<button type="submit" class="btn btn-success" name="proses" value="edit">Perbarui</button>
	    	<button type="reset" class="btn btn-danger" name="reset">Reset</button>
	    </form>
	    <?php
    } ?>
	  </div>
	</div>
</div>
</body>
</html>