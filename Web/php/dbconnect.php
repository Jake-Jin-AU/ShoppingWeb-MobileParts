<?php
$servername = "localhost";
$username = "id16687315_6564";
$password = "AIT6564student@";
$database = "id16687315_cjdb";
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

$conn =mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("connection error : ".mysqli_connect_error());
}else{
    echo "mysqli connect!    ";
}

?>

