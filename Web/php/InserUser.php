
<?php
require("dbconnect.php"); 

    $FirseName = $_POST ["firstName"];
    $LastName = $_POST ["lastName"];
    $PhoneNumber = $_POST ["phoneNumber"];
    $Address= $_POST ["address"];
    $EMail=$_POST ["email"];
    $Account= $_POST ["account"];
    $Password=$_POST ["psw"];
    $sql ="SELECT *FROM `User` WHERE `Account` LIKE '$Account'";
    $result = $conn->query($sql);
    $sql ="SELECT *FROM `User` WHERE `Email` LIKE '$EMail'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
        echo "Account is used " . $row["Account"]. "<br>";
            
        }
    }else if($result2->num_rows > 0){
        while($row = $result->fetch_assoc()) {
        echo "Email is used" . $row["Email"]. "<br>";
        }
    }else{
        $sql = "INSERT INTO User(ID,FirstName, LastName, PhoneNumber, Address, Email, Account, Password, Account_LV) VALUES (NULL,'$FirseName', '$LastName', '$PhoneNumber', '$Address', '$EMail', '$Account', '$Password', '1')";     
        //check if the execution was successful
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: https://6564test1.000webhostapp.com/");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            header("Location: https://6564test1.000webhostapp.com/");
        }
    }






    

//close the database connection
mysqli_close($conn);
?>
