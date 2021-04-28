
<?php
require("dbconnect.php"); 


        $sql = "INSERT INTO `User` (`ID`, `FirstName`, `LastName`, `PhoneNumber`, `Address`, `Email`, `Account`, `Password`, `Account_LV`) VALUES (NULL, 'jack', 'chen', '0422335511', 'king st', 'jack@gmIL.COM', 'JACK', '1234', '1');";     
        //check if the execution was successful
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    

//close the database connection
mysqli_close($conn);
?>