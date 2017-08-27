<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
	require '../core/koneksi.php';
	daftarPropinsi($_GET['search']);
}

function daftarPropinsi($search){
	global $connect;

	if ($connect->connect_error) {
	    die("Koneksi Gagal: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM tb_propinsi WHERE nama LIKE '%$search%' AND dalam_negeri=1 ORDER BY nama ASC";
	$result = $connect->query($sql);

	if ($result->num_rows > 0) {
	    $list = array();
	    $key=0;
	    while($row = $result->fetch_assoc()) {
	        $list[$key]['id'] = $row['propinsi_id'];
	        $list[$key]['text'] = $row['nama']; 
	    	$key++;
	    }
	    echo json_encode($list);
	} else {
	    echo "hasil kosong";
	}
	$connect->close();
}

?>