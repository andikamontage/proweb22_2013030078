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
	$id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM krs WHERE id='$id'");
    while ($data = mysqli_fetch_array($sql)) {
?>
<div class="container">
	<h1 class="text-center"></h1>
	<h2 class="text-center"></h2>

<!-- Awal Card Form -->
	<div class="card mt-3">
	  <div class="card-header bg-primary text-white">
	    Form Edit Kartu Rencana Studi
	  </div>
	  <div class="card-body">
	    <form action="krs_proc.php?hal=edit&id=<?= $data['id'] ?>" method="post">
	    	<div class="form-group">
	    		<label>id</label>
	    		<input type="text" name="id" value="<?= $data['id'] ?>" class="form-control" placeholder="Masukkan id anda!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>mhs_npm</label>
	    		<input type="text" name="mhs_npm" value="<?= $data['mhs_npm'] ?>" class="form-control" placeholder="Masukkan mhs_npm anda!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>mk_kode</label>
	    		<input type="text" name="mk_kode" value="<?= $data['mk_kode'] ?>" class="form-control" placeholder="Masukkan mk_kode anda!" required>
	    	<div class="form-group">
	    		<label>semester</label>
	    		<input type="text" name="sem" value="<?= $data['sem'] ?>" class="form-control" placeholder="Masukkan semester anda!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>ta_id</label>
	    		<input type="text" name="ta_id" value="<?= $data['ta_id'] ?>" class="form-control" placeholder="Masukkan ta_id anda!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>nilai</label>
	    		<input type="text" name="nilai" value="<?= $data['nilai'] ?>" class="form-control" placeholder="Masukkan nilai anda!" required>
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