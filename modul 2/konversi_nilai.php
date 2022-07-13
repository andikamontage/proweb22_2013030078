<!DOCTYPE html>
<html>
<head>
	<title>Konversi Nilai Mata Kuliah</title>
</head>
<body>
<h2>Konversi Nilai Mata Kuliah ke nilai huruf</h2>

<form action="" method="GET">
	<p>&nbspNilai Angka
	<input type="number" name="nilai">
	<input type="submit" name="btn" value="Konversi">
</form>

 <?php
	class konversi{
	function nilai($angka){
		if ($angka >= 90 and $angka <=100){
			$nilai = "A";
		}
		else if ($angka >= 85){
			$nilai = "B+";
		}
		else if ($angka >= 80){
			$nilai = "B";
		}
		else if ($angka >= 75){
			$nilai = "B-";
		}
		else if ($angka >= 70){
			$nilai = "C+";
		}
		else if ($angka >= 65){
			$nilai = "C";
		}
		else if ($angka >= 60){
			$nilai = "C-";
		}
		else if ($angka >= 50){
			$nilai = "D";
		}
		else if ($angka >= 0 and $angka < 50){
			$nilai = "E";
		}
		return $nilai;
		}
	}
	$konvers = new konversi();

	if(isset ($_GET['btn'])){
	//$a = $_GET['nilai'];
	$nilai = $konvers->nilai($_GET['nilai']);
	echo "&nbsp;"."Nilai Huruf ";?>
	
	<input type="text" value="<?= $nilai ?>">
<?php } ?>
</body>
</html>