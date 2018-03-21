<?php 
header("Content-type:application/json");

include '../koneksi.php';
// include 'edit_item.php';
	
	$id 		= $_POST['id'];
	// $id = isset($_POST['id']) ? $_POST['id'] : '';
	$username 		= $_POST['username'];
	$password 		= md5($_POST['password']);

	//update data
	$sql 	= "UPDATE tb_user SET username = '$username', password = md5('$password') WHERE id ='$id'";
			// print_r($sql);
	$result = mysqli_query($konek, $sql) or die (mysqli_error());

	//menampilkan data json
	$sql	= "SELECT * FROM tb_user WHERE id = '$id'";
	$result = mysqli_query($konek, $sql);

	$data = mysqli_fetch_assoc($result);

echo json_encode($data, JSON_PRETTY_PRINT);


 ?>