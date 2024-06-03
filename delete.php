<?php
$sno=$_GET['sno'];
$showAlert = false;
$showError = false;

$server = "localhost";
$username = "root";
$password = "";
$database = "resort";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}
$sql = "DELETE FROM `booking` WHERE `booking`.`sno` = '$sno'";
$result = mysqli_query($conn, $sql);
if ($result){
    
   echo "deletion done";
   
}
else{
   
   echo"error occur";
}

?>