<?php
include "con_db.php";
include "nav.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>item</title>
</head>

<body>
    <a href="item_add.php">tambah data</a>
    <br>
    <?php

	$sql = "SELECT*FROM item
			 ";
	$res = $conn->query($sql);
	//menampilakn jumlahhasil query
	//$jml_data = $res->num_rows;
	//echo "Ditemukan $jml_data data";
	echo "<table border='1' width='100%'>";
	echo "	<thead>
	<th>NO</th>
	<th>ID</th>
	<th>item_grp_id</th>
	<th>barcode</th>
	<th>nama</th>
	<th>satuan_id</th>
	<th>hpp</th>
	<th>aktif </th>
	<th>crt </th>
	<th>crt_date</th>
	<th>upd</th>
	<th>upd_date</th>
	<th>aksi</th>
	<th>harga</harga>
			</thead>
			<tbody>";
	$i = 0;
	while ($rows = $res->fetch_array(MYSQLI_BOTH)) {
		$i++;
		echo "<tr>
		<td>" . $i . "</td>
				<td>" . $rows['id'] . "</td>
				<td>" . $rows['item_grp_id'] . "</td>
				<td>" . $rows['barcode'] . "</td>
				<td>" . $rows['nama'] . "</td>
				<td>" . $rows['satuan_id'] . "</td>
				<td>" . $rows['hpp'] . "</td>
				<td>" . $rows['aktif'] . "</td>
				<td>" . $rows['crt'] . "</td>
				<td>" . $rows['crt_date'] . "</td>
				<td>" . $rows['upd'] . "</td>
				<td>" . $rows['upd_date'] . "</td>
				<td><a href='item_edit.php?id=". $rows['id'] . "'>EDIT</a> | <a href='item_proc.php?id=" . $rows['id'] . "'>HAPUS</a></td>
				<td>" . $rows['harga'] . "</td>
			</tr>";
	}
	echo "	</tbody>
		</table>"
	?>
</body>

</html>