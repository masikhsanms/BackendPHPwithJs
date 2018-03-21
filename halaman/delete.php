<?php 
header("Content-type:application/json");

include '../koneksi.php';

// $id = $_POST['id'];

$sql = "DELETE FROM tb_item WHERE id ='" . $_POST['id'] . "'";
$result = mysqli_query($konek, $sql);

echo json_encode([$_POST['id']], JSON_PRETTY_PRINT);



 ?>