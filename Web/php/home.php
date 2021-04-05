<?php if(isset($_SESSION["username"]) != null){//檢查Session是否登入 ?>
  <p>Log In, <a href="logout.php">Log out</a></p>
 <?php }else{ header("Location: login.php"); } //跳轉登入 ?>