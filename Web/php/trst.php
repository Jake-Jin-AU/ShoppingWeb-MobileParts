
<?php
    require("dbconnect.php"); 
    // include "dbconnect.php";
        if($connection){
            echo "sss2";
        }
        $sql = "SELECT * FROM User WHERE FirstName LIKE 'leo'";
        if(mysqli_query($connection,$sql)){
            echo "s3";
        }
        
        echo mysqli_error();
        
        /*"INSERT INTO `User` (`ID`, `FirstName`, `LastName`, `PhoneNumber`, `Address`, `Email`, `Account`, `Password`, `Account_LV`) VALUES (NULL, 'jack', 'chen', '0422335511', 'king st', 'jack@gmIL.COM', 'JACK', '1234', '1')";     */
        //check if the execution was successful
       
   
        // echo $results;
        if ($conn->query($sql) === TRUE) {
        // if (mysqli_query($connection,$sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    

    //close the database connection
    mysqli_close($connection);
?>