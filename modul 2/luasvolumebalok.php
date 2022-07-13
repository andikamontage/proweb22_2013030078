<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1</title>
</head>
<body>
<h1>Menghitung Luas dan Volume Balok</h1>

<form action="" method="GET" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Panjang</td>
			<td>:</td>
			<td><input type="number" name="panjang" required></td>
		</tr>
		<tr>
			<td>Lebar</td>
			<td>:</td>
			<td><input type="number" name="lebar" required></td>
		</tr>
		<tr>
			<td>Tinggi</td>
			<td>:</td>
			<td><input type="number" name="tinggi" required></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="Hasil" value="Tentukan"></td>
		</tr>
	</table>
</form>
	
	<?php
	$p = 0;
	$l = 0;
	$t = 0;

	class balok{
		function luas($p, $l, $t){
			$luas = 2*($p*$l + $p*$t + $l*$t);
			return $luas;
		}
		function volume($p, $l, $t){
			$volume = $p * $l * $t;
			return $volume;
		}
	}

	$bal = new balok();

	if(isset($_GET['Hasil'])){
		$p = $_GET['panjang'];
		$l = $_GET['lebar'];
		$t = $_GET['tinggi'];
	

	$volume_balok = $bal->volume($p, $l, $t);
	$luas_balok  = $bal->luas($p, $l, $t);

	echo "<br>";
	echo "Luas Balok = ".$luas_balok."<br>";
	echo "Volume Balok = ".$volume_balok;
	}
	?>
	
</body>
</html>
