<?php
include "../model/db.php";
?>

<?php
session_start();
setcookie("registeredUser", $_POST["username"], time() + (86400 * 30)); // Set cookie
if(isset($_POST["Submit"]))
{
 $conobj=createCon();

 $result=checkLogin($conobj,$_POST["uname"],$_POST["password"]);
 if(mysqli_num_rows($result) > 0)
 {
  $_SESSION["uname"]=$_POST["uname"];
  header("Location: ../view/profile.php");
 }
 else
 {
  echo "No User Found";
 }
  }
?>
