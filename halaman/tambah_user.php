<?php 
header("Content-type:application/json");

include '../koneksi.php';

	$username 		= $_POST['username'];
	$password 		= md5($_POST['password']);

	// $data = array(
	// 	'nama' => $nama,
	// 	'id_kategori' =>$kategori
	// );

$cek_username	= mysqli_num_rows(mysqli_query($konek, "SELECT username FROM tb_user WHERE username='$username'"));

	// Kalau username sudah ada yang pakai
	if ($cek_username > 0)
		{
		  	echo "Username sudah ada yang pakai. Ulangi lagi";
		}
	// Kalau username valid, inputkan data ke tabel users
	else
		{
		  mysqli_query($konek, "INSERT INTO tb_user (username, password) VALUES ('$username',md5('$password'))");
		}

	$sql 		="SELECT * From tb_user order by id desc limit 1";
	$result 	= mysqli_query($konek, $sql);

	$data 		= mysqli_fetch_assoc($result);

echo json_encode($data);


 ?>