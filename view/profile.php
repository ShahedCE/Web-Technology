<?php
include "../control/control_profile.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="../css/myprofile.css">

</head> 
<body>

<h2>Profile Page</h2>
<p class="welcome">Welcome to your profile<p>

<?php 
 echo "Username: ".$data[0][1];
 echo "<br>";
 echo "Id: ".$data[0][0];
 echo "<br>";
 echo "Gender: ".$data[0][2];
 echo "<br>";
 echo "File: ".$data[0][3];
 echo "<br>";
?>

<a class="logout" href="../control/control_logout.php">Logout</a>
<a class="delete" href="../control/control_delete.php">Delete Account</a>
<a class= "update" href="../view/update.php">Edit Profile</a>
<br>
<br>

</body>
</html>