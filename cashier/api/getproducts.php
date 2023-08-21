<?php

include '../../common/db.config.php';


$data=array();
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM products";

$result = mysqli_query($conn, $sql);
//var_dump($result);
$count = mysqli_num_rows($result);
if ($count > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
          $data[]=$row;
    }
}
     echo json_encode($data);













?>