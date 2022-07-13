<?php
include 'koneksi.php';

// Jika tombol Simpan di klik
if(isset($_POST['proses']) && $_POST['proses'] == 'tambah'){
	$kode = $_POST['kode'];
	$nama = $_POST['nama'];

	$simpan = mysqli_query($conn, "INSERT INTO mk (kode, nama) VALUES ('$kode', '$nama')" );
	if($simpan){ //jika simpan sukses
		echo "<script>
				alert('Simpan Data Sukses!');
				document.location='mk.php';
			</script>";
	}else{
		echo "<script>
				alert('Simpan Data Gagal!');
				document.location='mk.php';
			</script>";
	}
}

// Pengujian apakah data akan diedit atau disimpan baru
if($_GET['hal'] == "edit"){
	// Data akan diedit
	$edit = mysqli_query($conn, "UPDATE mk set kode='$_POST[kode]', nama='$_POST[nama]' WHERE kode = '$_GET[kode]'");
	if($edit){
		echo "<script>
				alert('Simpan Data Sukses!');
				document.location='mk.php';
			</script>";
	}else{
		echo "<script>
				alert('Simpan Data Gagal!');
				document.location='mk.php';
			</script>";
	}
}
if($_GET['hal'] == "hapus"){
		// Persiapan hapus data
		$hapus = mysqli_query($conn, "DELETE FROM mk WHERE kode = '$_GET[kode]'");
		if($hapus){
			echo "<script>
				alert('Hapus Data Sukses!');
				document.location='mk.php';
			</script>";
		}else{
			echo "<script>
				alert('Hapus Data Gagal!');
				document.location='mk.php';
			</script>";
		}
	}



// if(isset($_POST['proses']) && $_POST['proses'] == 'perbarui'){
// 	$nim = $_POST['nim'];
// 	$nama = $_POST['nama'];
// 	$alamat = $_POST['alamat'];
// 	$prodi = $_POST['prodi'];

// 	$edit = mysqli_query($koneksi, "UPDATE mhs SET nim='$nim',
// 	 nama='$nama', 
// 	 alamat='$alamat', 
// 	 prodi='$prodi' 
// 	 WHERE nama='$_GET[id]'");

// 	if($edit){ //jika edit sukses
// 		echo "<script>
// 				alert('Edit Data Sukses!');
// 				document.location='index.php';
// 			</script>";
// 	}else{
// 		echo "<script>
// 				alert('Edit Data Gagal!');
// 				document.location='index.php';
// 			</script>";
// 	}
// }
?>