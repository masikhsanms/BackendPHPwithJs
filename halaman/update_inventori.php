<?php 
header("Content-type:application/json");

include '../koneksi.php';
// include 'edit_item.php';
	
	$id 		= $_POST['id'];
	// $id = isset($_POST['id']) ? $_POST['id'] : '';
	$stok 		= $_POST['stok'];
	// $kategori 	= $_POST['kategori'];

	//update data
	$sql 	= "UPDATE tb_item SET stok = '$stok' WHERE id ='$id'";
			// print_r($sql);
	$result = mysqli_query($konek, $sql) or die (mysqli_error());

	//menampilkan data json
	$sql	= "SELECT * FROM tb_item WHERE id = '$id'";
	$result = mysqli_query($konek, $sql);

	$data = mysqli_fetch_assoc($result);

echo json_encode($data, JSON_PRETTY_PRINT);


 ?>