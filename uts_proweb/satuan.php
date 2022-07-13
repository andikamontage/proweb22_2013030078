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
<!--     <?php
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }else{
        $action = null;
    };
    ?>
    <h4><?=$action?></h4> -->
    <br>
    <a href="satuan_add.php">TAMBAH</a>
    <br>
    <?php

    $sql = "SELECT*FROM satuan
			 ";
    $res = $conn->query($sql);
    //menampilakn jumlahhasil query
    //$jml_data = $res->num_rows;
    //echo "Ditemukan $jml_data data";
    echo "<table border='1' width='100%'>";
    echo "	<thead>
	<th>NO</th>
	<th>ID</th>
	<th>nama</th>
	<th>keterangan</th>
	<th>aktif</th>
	<th>crt</th>
	<th>crt_date</th>
	<th>upd</th>
	<th>upd_date</th>
    <th>aksi<th>
			</thead>
			<tbody>";
    $i = 0;
    while ($rows = $res->fetch_array(MYSQLI_BOTH)) {
        $i++;
        if ($rows["aktif"] == 1) {
            $status = "aktif";
        } else {
            $status = "tidak aktif";
        }
        echo "<tr>
		<td>" . $i . "</td>
				<td>" . $rows['id'] . "</td>
				<td>" . $rows['nama'] . "</td>
				<td>" . $rows['keterangan'] . "</td>
				<td>" . $status . "</td>
				<td>" . $rows['crt'] . "</td>
				<td>" . $rows['crt_date'] . "</td>
				<td>" . $rows['upd'] . "</td>
				<td>" . $rows['upd_date'] . "</td>
                <td><a href='satuan_edit.php?id=" . $rows['id'] . "'>EDIT</a> | <a href='satuan_proc.php?id=" . $rows['id'] . "'>HAPUS</a></td>
			</tr>";
    }
    echo "	</tbody>
		</table>"
    ?>
</body>

</html>
</body>

</html>