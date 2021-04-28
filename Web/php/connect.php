<?php
session_start();
require("dbconnect.php"); 

$Account = $_POST["uname"];
//$Account = "user";
$Password =$_POST["psw"];
//$Password ="123";
$sql = "SELECT *FROM User WHERE Account = '$Account' AND Password = '$Password'";     
$result = $conn->query( $sql );
if ( $result->num_rows > 0 ) {
    while( $row = $result->fetch_assoc() ) {   
            $_SESSION["ID"]= $row["ID"];
            $_SESSION["username"] =$row["FirstName"];
            echo '<meta http-equiv=REFRESH CONTENT=1;url=https://6564test1.000webhostapp.com/>'; 
    }
}else{
        
        echo "erro";
         echo '<meta http-equiv=REFRESH CONTENT=1;url=https://6564test1.000webhostapp.com/>'; 
    }
//close the database connection
mysqli_close( $conn );

?>