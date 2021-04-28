<?php
include "db.php";
$pid = $_POST["P_ID"];
//select products based on specific product id
$sql="SELECT * FROM Product WHERE P_ID ='$pid'";
$results= mysqli_query($conn,$sql);

 while($row = mysqli_fetch_array($results)){
   $prod_id = $row["//select products based on specific product id
   "];
   $Brand = $row["Brand"];
   $Model = $row["Model"];
   $P_Name = $row["P_Name"];
   $P_Price = $row["P_Price"];
   $Description = $row["Description"];
   $Image = $row["Image"];
  echo "

  <div class='col-md-10'>
                <div class='panel panel-default'>
                  <div class='panel-heading'>$Description</div>
                    <div class='panel-body' style=' height: auto; overflow: hidden;'><img class='img-responsive' src='Images/$Image'/></div>
                     <div class='panel-heading'>$$P_Price 
                      <button style='float:right;' class='btn btn-info btn-xs'>Add To Cart</button>
                    </div>
                </div>    
        </div>
        ";
 }

?>