<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	require 'koneksi.php';
	createBlog();
}


function createBlog(){
	global $connect;
	
	$idKategori = $_POST['id_kategori'];
	$tanggal = $_POST['tanggal'];
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$status = $_POST['status'];

	$query = "Insert INTO tb_blog(id_kategori,tanggal,judul,isi,status) values ('$idKategori','$tanggal','$judul','$isi','$status');";

	mysqli_query($connect,$query)or die(mysqli_error($connect));
	mysqli_close($connect);
}
?>