<?php
include '../../common/db.config.php';

$req = file_get_contents("php://input");
$obj = json_decode($req, true); //here it will convert it into php object by giving true it will converted into assoc array
#var_dump($obj);
$response = new stdClass();

$a = count($obj['items']);

$conn = mysqli_connect($servername, $username, $password, $dbname);

for ($i = 0; $i < $a; $i++) {
    $b = json_encode($obj['items'][$i]);
    $v = json_decode($b);
    $productId = $v->productId;
    $quantity = (int) $v->quantity;
    $indent_id =  $obj['intend_id'];
    
   $sql1 = "SELECT * FROM `intend_items` WHERE product_id=$productId AND intend_id=$indent_id";
   $result=mysqli_query($conn, $sql1);

   if (mysqli_num_rows($result) > 0) {
        //$response->result= "Success";
        
     $sql2="UPDATE `intend_items` SET product_quantity='$quantity' WHERE product_id= $productId";
     if(mysqli_query($conn, $sql2)){
        $response->result= "Success";
     }else{
        $response->result= "Error in inserting intend_items table";
     }

    } else {
        //$response->result= "Error in inserting intend_items table";
        $sql3="INSERT INTO `intend_items` (`intend_id`,`product_id`,`product_quantity`) 
        VALUES ('$indent_id','$productId','$quantity')";
        if(mysqli_query($conn, $sql3)){
            $response->result= "Success";
         }else{
            $response->result= "Error in inserting intend_items table";
         }
    }

}


echo json_encode($response);
mysqli_close($conn);


?>