<?php
include "../model/db.php";
?>
<?php
session_start();

$conobj=createCon();

 $result= checkDelete($conobj,$_SESSION["uname"],$_SESSION["password"]);
 session_destroy();
  
 header("Location: ../view/registration.php");
 ?>