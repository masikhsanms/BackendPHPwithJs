<?php 
header("Content-type:application/json");

include '../koneksi.php';
// include 'edit_item.php';
	
	$id 		= $_POST['id'];
	// $id = isset($_POST['id']) ? $_POST['id'] : '';
	$nama 		= $_POST['nama'];
	$kategori 	= $_POST['kategori'];

	//update data
	$sql 	= "UPDATE tb_item SET nama = '$nama', id_kategori = '$kategori' WHERE id ='$id'";
			// print_r($sql);
	$result = mysqli_query($konek, $sql) or die (mysqli_error());

	//menampilkan data json
	$sql	= "SELECT * FROM tb_item WHERE id = '$id'";
	$result = mysqli_query($konek, $sql);

	$data = mysqli_fetch_assoc($result);

echo json_encode($data, JSON_PRETTY_PRINT);


 ?>