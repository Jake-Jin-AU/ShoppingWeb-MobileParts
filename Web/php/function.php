<?php


function checkAccound($Account){
    $sql ="SELECT *FROM `User` WHERE `Account` LIKE '$Account'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        return 1;
    }
    } else {
        return 0;
    }
}
function checkEmail($EMail){
    $sql ="SELECT *FROM `User` WHERE `Email` LIKE '$EMail'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        return 2;
    }
    } else {
        return 0;
    }
}
function update($FirseName,$LastName,$PhoneNumber,$Address,$EMail,$Account,$Password){
    $sql = "INSERT INTO `User`(`FirstName`, `LastName`, `PhoneNumber`, `Address`, `Email`, `Account`, `Password`) VALUES ('$FirseName', '$LastName', '$PhoneNumber', '$Address', '$EMail', '$Account', '$Password')"; 
   //check if the execution was successful
    if ($conn->query($sql) === TRUE) {
    $massage= "New record created successfully";
    } else {
    $massage= "Error: " . $sql . "<br>" . $conn->error;
    } 
}



?>