<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>KRS</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="text-center"></h1>
	<h2 class="text-center"></h2>

<!-- Awal Card Form -->
	<div class="card mt-3">
	  <div class="card-header bg-primary text-white">
	    Form Input Kartu Rencana Studi
	  </div>
	  <div class="card-body">
	    <form action="krs_proc.php" method="post">
	    	<div class="form-group">
	    		<label>id</label>
	    		<input type="text" name="id" class="form-control" placeholder="Masukkan NIM anda!">
	    	</div>
	    	<div class="form-group">
	    		<label>mhs_npm</label>
	    		<br>
	    		<select name="mhs_npm">
	    			<?php
	    			$sql = "SELECT * FROM mhs";
	    			$res = $conn->query($sql);
	    			while ($rows = $res->fetch_array(MYSQLI_BOTH)){
	    				echo "<option value='" . $rows['npm'] . "'>" . $rows['nama'] . "</option>";
	    			}
	    			?>
	    		</select>
	    		<!-- <input type="text" name="nama" class="form-control" placeholder="Masukkan mhs_npm anda!" required> -->
	    	</div>
	    	<div class="form-group">
	    		<label>mk_kode</label>
	    		<br>
	    		<select name="mk_kode">
	    			<?php
	    			$sql = "SELECT * FROM mk";
	    			$res = $conn->query($sql);
	    			while ($rows = $res->fetch_array(MYSQLI_BOTH)){
	    				echo "<option value='" . $rows['kode'] . "'>" . $rows['nama'] . "</option>";
	    			}
	    			?>
	    		</select>
	    	</div>
	    	<div class="form-group">
	    		<label>semester</label>
	    		<br>
	    		<select name="aktif">
	            <option value="$data['sem']">GENAP</option>
	            <option value="$data['sem']">GANJIL</option>
        		</select>
	    	</div>
	    	<div class="form-group">
	    		<label>ta_id</label>
	    		<br>
	    		<select name="ta_id">
	    			<?php
	    			$sql = "SELECT * FROM ta";
	    			$res = $conn->query($sql);
	    			while ($rows = $res->fetch_array(MYSQLI_BOTH)){
	    				echo "<option value='" . $rows['id'] . "'>" . $rows['nama'] . "</option>";
	    			}
	    			?>
	    		</select>
	    	</div>
	    	<div class="form-group">
	    		<label>nilai</label>
	    		<input type="text" name="nilai" class="form-control" placeholder="Masukkan nilai anda!" required>
	    	</div>
	  
	    	<button type="submit" class="btn btn-success" name="proses" value="tambah">Simpan</button>
	    	<button type="reset" class="btn btn-danger" name="reset">Reset</button>
	    </form>
	  </div>
	</div>
</div>	

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>