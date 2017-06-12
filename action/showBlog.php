<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	require 'koneksi.php';
	showBlog();
}

function showBlog(){
	global $connect;

	$query = "SELECT * FROM tb_blog;";

	$result = mysqli_query($connect,$query);

	$jumlah = mysqli_num_rows($result);
	$data = array();

	if($jumlah > 0 ){
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
	}

	header('Content-Type: application/json');
	echo json_encode(array('blog'=>$data));
	mysqli_close($connect);

}
?>