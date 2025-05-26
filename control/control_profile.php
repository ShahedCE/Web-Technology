<?php
include "../model/db.php";
session_start();

 $conobj=createCon();

 $result=fetchUser($conobj,$_SESSION["uname"]);
 if(mysqli_num_rows($result) > 0)
 {
  $n=0;
  while($row = $result->fetch_assoc())
  {
   $data[$n]=array( $row["Id"], $row["uname"],$row["gender"],'<img src="'. $row["file"] .'">');
   $n++;
  }
 }
 else
 {
  echo "No User Found";
 }


?>