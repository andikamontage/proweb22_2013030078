<?php
	class matematika{
		public $pi = 3.14;
		function tambah($a, $b){
			$c = $a + $b;
			return $c;
		}
		function kuadrat($x){
			$xx =  $x * $x;
			return $xx;
		}
		function keliling_lingkaran($r){
			$kel = 2 * $this->pi * $r;
			return $kel;
		}
		function luas_lingkaran($r){
			$luas = $this->pi * $this->kuadrat($r);
			return $luas;
		}
	}
	$math = new matematika();

	$jari = 10;
	$kel_lingkaran = $math->keliling_lingkaran($jari);
	$luas_lingkaran = $math->luas_lingkaran($jari);

	echo "Menghitung Keliling dan luas Lingkaran<br>";
	echo "Jari-jari = ".$jari."<br>";
	echo "Keliling Lingkaran = ".$kel_lingkaran."<br>";
	echo "Luas Lingkaran = ".$luas_lingkaran."<br>";
?>