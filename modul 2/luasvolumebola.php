<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
</head>
<body>
<h1>Menghitung Luas dan Volume Bola</h1>

<form action="" method="GET">
	<label for="jari">Jari-jari</label>
	<input type="number" name="jari" id="jari">
	<input type="submit" name="submit" value="Tentukan">
</form>

<?php
	$r=0;

	class bola{
	public $pi = 3.14;
	function kuadrat($x){
		$xx = $x * $x;
		return $xx;
	}
	function luas($jari){
		$luas = 4 * $this->pi * $this->kuadrat($jari);
		return $luas;
	}
	function volume($jari){
		$volume = (4/3) * $this->pi * $jari*$jari*$jari;
		return $volume;
	}
}
$bola = new bola();


if(isset($_GET['submit'])){
	$r = $_GET['jari'];
	$luas_bola = $bola->luas($r);
	$volume_bola = $bola->volume($r);

	echo "<br>";
	echo "Luas Bola = ".$luas_bola."<br>";
	echo "Volume Bola = ".$volume_bola;
}
?>

</body>
</html>