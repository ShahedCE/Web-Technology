
<?php
include "../control/action_reg.php"; //for validation
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration Form</title>
    <link rel="stylesheet" type="text/css" href="../css/registration.css">
</head>
<body>

    <h1 id="center">User Registration Form</h1>
    <div id="center" class="sticky">Please Fill Out All Required Fields</div>

    <form id="form" action="" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>User Information:</legend><br>
            <table>
                <tr>
                    <td><label>Username:</label></td>
                    <td>
                        <input type="text" name="username" id="username">
                        <span style="color: red"><?php echo $usernameError; ?></span>
                    </td>
                </tr>

                <tr>
                    <td><label>Password:</label></td>
                    <td>
                        <input type="password" name="password" id="password">
                        <span style="color: red"><?php echo $passwordError ?? ""; ?></span>
                    </td>
                </tr>

                <tr>
                    <td><label>Email:</label></td>
                    <td>
                        <input type="email" name="email" id="email">
                        <span style="color: red"><?php echo $emailError ?? ""; ?></span>
                    </td>
                </tr>

                <tr>
                    <td><label>Phone Number:</label></td>
                    <td>
                        <input type="text" name="phone" id="phone">
                        <span style="color: red"><?php echo $phoneError ?? ""; ?></span>
                    </td>
                </tr>
                <tr>
                  <td><label for="myfile">Choose file:</label></td>
                 <td>
                 <input type="file" name="myfile" id="myfile">
                       <span style="color: red;"><?php echo $fileErr; ?></span>
                     </td>
                    </tr>


                <tr>
                    <td><label>Gender:</label></td>
                    <td>
                        <select name="gender" id="gender">
                            <option value="" disabled selected>Select your gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                        <span style="color: red"><?php echo $genderError ?? ""; ?></span>
                    </td>
                </tr>
                
                <tr>
                    <td><input class="submit" type="submit" name="submit" value="Register"></td>
                    <td><input class="reset" type="reset" value="Reset"></td>
                </tr>
            </table>
            <br>
              <label>Have account,<label>
               <a href="../view/login.php">Login</a>
        </fieldset>
    </form>

</body>
</html>
