<?php 
header("Content-type:application/json");

include '../koneksi.php';
// include 'item.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';

// $id 		= $_GET['edit-id'];
$sql 	= "SELECT * FROM tb_user WHERE id='$id'";

// print_r($sql);

$result = mysqli_query($konek, $sql);

$data	= mysqli_fetch_assoc($result);

echo json_encode($data, JSON_PRETTY_PRINT);

// echo json_encode($data);
 ?>