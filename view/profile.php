<?php
include "../control/control_profile.php";

?>

<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="../css/profile.css">

</head> 
<body>

<h2>Profile Page</h2>
Hii <?php echo $_SESSION["uname"]; ?>

<?php 
echo "<br>";
 echo "Id: ".$data[0][0];
 echo "<br>";
 echo "Username: ".$data[0][1];
 echo "<br>";
 echo "Gender: ".$data[0][2];
 echo "<br>";
 echo "File: ".$data[0][3];
 echo "<br>";
?>


<a href="../control/logout.php">Logout</a>
<br>

</body>
</html>