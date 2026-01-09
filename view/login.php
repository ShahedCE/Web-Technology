<?php
include "../control/control_login.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="../css/registration.css"> 
</head> 

<body>
     <h1 id="center">User Login Form</h1>
    <div id="center" class="sticky">Please Give The Valid Information to Login</div>
    <br>


<form id="myForm" action=""  method="post">
<label for="uname">User name:</label>
<input type="text" id="uname" name="uname"><span>
<br><br>
<label for="password">Password:</label>
<input type="password" id="password" name="password"><span>
<br><br>
<input type="submit" class="submit" name="Submit" value="Submit">
<td><input class="reset" type="reset" value="Reset"></td>
<br>
<br>
<label>Dont't have account, go to<label>
<a href="../view/registration.php">Registeration</a>

 


</body>
</html>