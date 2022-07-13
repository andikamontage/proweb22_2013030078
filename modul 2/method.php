<?php
	class matematika{
		function tambah($a, $b){
			$c=$a + $b;
			return $c;
		}
	}

$math = new matematika();
$bil1 = 7;
$bil2 = 5;
$hasil = $math->tambah ($bil1, $bil2);
echo $hasil;
?>