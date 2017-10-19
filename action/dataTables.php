<?php
$table = 'authors';
$primaryKey = 'id';

$columns = array(
    array( 'db' => 'first_name','dt' => 0 ),
    array( 'db' => 'last_name','dt' => 1 ),
    array( 'db' => 'email','dt' => 2 ),
    array( 'db' => 'birthdate', 'dt' => 3 ),
    array( 'db' => 'id', 'dt' => 4 ),
);
 
$sql_details = array(
    'user' => 'root',
    'pass' => 'agusbiji',
    'db'   => 'blog',
    'host' => 'localhost'
);
require('ssp.class.php');

echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);