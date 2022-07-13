<?php
include 'koneksi.php';

// Jika tombol Simpan di klik
if(isset($_POST['proses']) && $_POST['proses'] == 'tambah'){
	$id = $_POST['id'];
	$mhs_npm = $_POST['mhs_npm'];
	$mk_kode = $_POST['mk_kode'];
	$sem = $_POST['sem'];
	$ta_id = $_POST['ta_id'];
	$nilai = $_POST['nilai'];

	$simpan = mysqli_query($conn, "INSERT INTO krs (id, mhs_npm, mk_kode, sem, ta_id, nilai) VALUES ('$id', '$mhs_npm', '$mk_kode', '$sem', '$ta_id', '$nilai')" );
	if($simpan){ //jika simpan sukses
		echo "<script>
				alert('Simpan Data Sukses!');
				document.location='krs.php';
			</script>";
	}else{
		echo "<script>
				alert('Simpan Data Gagal!');
				document.location='krs.php';
			</script>";
	}
}

// Pengujian apakah data akan diedit atau disimpan baru
if($_GET['hal'] == "edit"){
	// Data akan diedit
	$edit = mysqli_query($conn, "UPDATE mhs set id='$_POST[id]', mhs_npm='$_POST[mhs_npm]', mk_kode='$_POST[mk_kode]', sem='$_POST[sem]', ta_id='$_POST[ta_id]', nilai='$_POST[nilai]' WHERE id = '$_GET[id]'");
	if($edit){
		echo "<script>
				alert('Simpan Data Sukses!');
				document.location='krs.php';
			</script>";
	}else{
		echo "<script>
				alert('Simpan Data Gagal!');
				document.location='krs.php';
			</script>";
	}
}
if($_GET['hal'] == "hapus"){
		// Persiapan hapus data
		$hapus = mysqli_query($conn, "DELETE FROM krs WHERE id = '$_GET[id]'");
		if($hapus){
			echo "<script>
				alert('Hapus Data Sukses!');
				document.location='krs.php';
			</script>";
		}else{
			echo "<script>
				alert('Hapus Data Gagal!');
				document.location='krs.php';
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