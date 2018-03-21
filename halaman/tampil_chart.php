<?php 
header("Content-type:application/json");

include '../koneksi.php';

$sql = mysqli_query($konek, 
	   "SELECT stok, nama FROM tb_item ORDER BY stok DESC LIMIT 5");

$data = array();


while ($row = mysqli_fetch_assoc($sql))
		{ 
		    // selipkan semua hasil looping data dari database kedalam array
		    $data[] = $row;
		}

// print_r($data);

echo json_encode($data);

 ?>