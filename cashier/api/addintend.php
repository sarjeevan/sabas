<?php
include '../../common/db.config.php';

$req = file_get_contents("php://input");
$obj = json_decode($req, true); //here it will convert it into php object by giving true it will converted into assoc array
#var_dump($obj);
$response = new stdClass();

$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "INSERT INTO `intend` (`branch`,`created_date`,`created_by`) 
VALUES ('$obj[branch]','$obj[created_date]','$obj[created_by]')";
if (mysqli_query($conn, $sql)) {
    $response->result= "Success";
   

    $last_id = mysqli_insert_id($conn);
} else {
   
    $response->result= "Error in inserting intend table";
  

}
$a = count($obj['items']);

$indentid = $last_id;

for ($i = 0; $i < $a; $i++) {
    $b = json_encode($obj['items'][$i]);
    $v = json_decode($b);
    $productId = $v->productId;
    $quantity = (int) $v->quantity;


    $sql1 = "INSERT INTO `intend_items` (`intend_id`,`product_id`,`product_quantity`) 
        VALUES ('$indentid','$productId','$quantity')";
    if (mysqli_query($conn, $sql1)) {
        $response->result= "Success";
     

    } else {
        $response->result= "Error in inserting intend_items table";
        
    }

}


echo json_encode($response);
mysqli_close($conn);


?>