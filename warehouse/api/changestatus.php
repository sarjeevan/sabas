<?php
include '../../common/db.config.php';
$date=date("Y-m-d");
$req = file_get_contents("php://input");
$obj = json_decode($req, true); //here it will convert it into php object by giving true it will converted into assoc array
#var_dump($obj);


$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "UPDATE `intend` SET `status` = '$obj[status]',`process_date` =now(),`processed_by` = '$obj[user_id]'  WHERE `intend`.`ID` = $obj[id];";

if (mysqli_query($conn, $sql)) {
    echo "status changed";
   
} else {
   
    echo "error in status changing";

}




mysqli_close($conn);


?>