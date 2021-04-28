
<?php
require("dbconnect.php"); 
    $Account= $_POST ["uname"];
    $Password=$_POST ["psw"];
    $sql = "SELECT *FROM User WHERE Account = '$Account' AND Password = '$Password'";     
//check if the execution was successful
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
    }
} else {
    echo "account or password incorrect";
}
//close the database connection
mysqli_close($conn);
?>

