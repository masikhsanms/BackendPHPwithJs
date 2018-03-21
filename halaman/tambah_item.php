<?php 
header("Content-type:application/json");

include '../koneksi.php';

	$nama 		= $_POST['nama'];
	$kategori 	= $_POST['kategori'];

	// $data = array(
	// 	'nama' => $nama,
	// 	'id_kategori' =>$kategori
	// );

	$sql 		= "INSERT INTO tb_item (nama, id_kategori) values ('$nama','$kategori')";
	$result 	= mysqli_query($konek, $sql);

	$sql 		="SELECT * From tb_item order by id desc limit 1";
	$result 	= mysqli_query($konek, $sql);

	$data 		= mysqli_fetch_assoc($result);

echo json_encode($data);


 ?>