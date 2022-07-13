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
	
	<br>
	<?php

	$sql = "SELECT*FROM item_grp
			 ";
	$res = $conn->query($sql);
	echo "<a href='item_grp_add.php'>Tambah data</a>";
	echo "<table border='1' width='100%'>";
	echo "	<thead>
	<th>NO</th>
	<th>ID</th>
	<th>upline</th>
	<th>level</th>
	<th>nama</th>
	<th>keterangan</th>
	<th>aktif</th>
	<th>crt</th>
	<th>crt_date</th>
    <th>upd</th>
    <th>upd_date</th>
    <th>aksi</th>
			</thead>
			<tbody>";
	$i = 0;
	while ($rows = $res->fetch_array(MYSQLI_BOTH)) {
		$i++;
		echo "<tr>
		<td>" . $i . "</td>
				
				<td>" . $rows['id'] . "</td>
				<td>" . $rows['upline'] . "</td>
				<td>" . $rows['level'] . "</td>
				<td>" . $rows['nama'] . "</td>
                <td>" . $rows['keterangan'] . "</td>
                <td>" . $rows['aktif'] . "</td>
				<td>" . $rows['crt'] . "</td>
				<td>" . $rows['crt_date'] . "</td>
				<td>" . $rows['upd'] . "</td>
				<td>" . $rows['upd_date'] . "</td>
                <td><a href='item_grp_edit.php?id=" . $rows['id'] ."'>EDIT</a> | <a href='item_grp_proc.php?id=" . $rows['id'] ."'>HAPUS</a> </td>
			</tr>";
	}
	echo "	</tbody>
		</table>"
	?>
</body>

</html>
</body>
</html>