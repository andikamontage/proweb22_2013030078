<?php 
$conn = mysqli_connect('localhost','root','','uas_proweb');

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $conn;
	// ambil data dari tiap elemen dalam form
	$id = htmlspecialchars($data["id"]);
	$barcode = htmlspecialchars($data["barcode"]);
	$nama = htmlspecialchars($data["nama"]);
	$satuan = htmlspecialchars($data["satuan"]);
	$harga = htmlspecialchars($data["harga"]);
	
	// upload gambar
	// $gambar = upload();
	// if(!$gambar) {
	// 	return false;
	// }

	// query insert data
	$query = "INSERT INTO item VALUES ('$id','$barcode','$nama','$satuan','$harga')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload(){
	$barcodeFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if($error === 4) {
		echo "<script>
				alert('Pilih gambar terlebih dahulu!');
			</script>";
		return false;
	}
	// cek apakah yang diupload adalah gambar
	$ekstensiGambarvalid = ['jpg','png','jpeg'];
	$ekstensiGambar = explode(".",$barcodeFile);
	//$ekstensiGambar = $ekstensiGambar[1];
	//$ekstensiGambar = end($ekstensiGambar);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if(!in_array($ekstensiGambar, $ekstensiGambarvalid)){
		echo "<script>
				alert('Yang anda upload bukan gambar');
			</script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if($ukuranFile > 5000000) {
		echo "<script>
				alert('ukuran gambar terlalu besar');
			</script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate barcode gambar baru
	$barcodeFileBaru = uniqid();
	$barcodeFileBaru .= '.';
	$barcodeFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $barcodeFileBaru);

	return $barcodeFileBaru;

}


function hapus($id){
	global $conn;
	$hapus = "DELETE FROM item WHERE id=$id";
	mysqli_query($conn, $hapus);

	return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;
	$id = $data["id"];
	$barcode = htmlspecialchars($data["barcode"]);
	$nama = htmlspecialchars($data["nama"]);
	$satuan = htmlspecialchars($data["satuan"]);
	$harga = htmlspecialchars($data["harga"]);

	$ubah = "UPDATE item SET 
				barcode='$barcode',
				nama='$nama',
				satuan='$satuan',
				harga='$harga'
				WHERE id=$id";
	mysqli_query($conn, $ubah);

	return mysqli_affected_rows($conn);
}

function cari($keyword){
	$query = "SELECT * FROM item WHERE 
			id LIKE '%$keyword%' OR 
			barcode LIKE '%$keyword%' OR
			nama LIKE '%$keyword%' OR
			satuan LIKE '%$keyword%' OR
			harga LIKE '%$keyword%'
			";
	return query($query);
}

function registrasi($data){
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username='$username'");
	if(mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('Username sudah terdaftar!');
			</script>";
		return false;
	}

	// cek konfirmasi password
	if($password !== $password2 ) {
		echo "<script>
				alert('konfirmasi password tidak sesuai');
			</script>";
		return false;
	}

	// enkripsi password
	// $password = md5($password);
	$password = password_hash($password, PASSWORD_DEFAULT);


	// tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$password')");

	return mysqli_affected_rows($conn);

}

 ?>