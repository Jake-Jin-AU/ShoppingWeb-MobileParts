<?php 
session_start(); 
$_SESSION["username"]=null; 
 echo 'Log Out'; 
header(“Location: http://localhost/WEb/Web”);
 echo '<meta http-equiv=REFRESH CONTENT=1;url=http://localhost/WEb/Web>'; 
?>