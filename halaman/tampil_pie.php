<?php 
header("Content-type:application/json");

include '../koneksi.php';

$sql = mysqli_query($konek, 
	   "SELECT SUM(tb_item.stok) as stok, tb_kategori.kategori FROM tb_item INNER JOIN tb_kategori ON tb_kategori.id = tb_item.id_kategori GROUP BY tb_kategori.kategori");

$data = array();


while ($row = mysqli_fetch_assoc($sql))
		{ 
		    // selipkan semua hasil looping data dari database kedalam array
		    $data[] = $row;
		}

// print_r($data);

echo json_encode($data);

 ?>