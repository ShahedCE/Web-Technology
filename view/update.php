<?php
include "../control/control_update.php";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update User Information</title>
    <link rel="stylesheet" type="text/css" href="../css/registration.css">
</head>
<body>

    <h1 id="center">Update User Information</h1>
    <div id="center" class="sticky">Update your Username, Password, and Phone Number</div>

    <form id="form"  method="POST">
        <fieldset>
            <legend>Update Information:</legend><br>
            <table>
                <tr>
                    <td><label for="username">New Username:</label></td>
                    <td>
                        <input type="text" name="username" id="username">
                        <span style="color: red"><?php echo $usernameError ; ?></span>
                    </td>
                </tr>

                <tr>
                    <td><label for="password">New Password:</label></td>
                    <td>
                        <input type="password" name="password" id="password" >
                        <span style="color: red"><?php echo $passwordError ?></span>
                    </td>
                </tr>

                <tr>
                    <td><label for="phone">New Phone Number:</label></td>
                    <td>
                        <input type="text" name="phone" id="phone">
                        <span style="color: red"><?php echo $phoneError; ?></span>
                    </td>
                </tr>
                <tr><p style="color: green"><?php echo $successMessage  ?></p><tr>


                <tr>
                    <td><input class="submit" type="submit" name="submit" value="Update"></td>
                    <td><input class="reset" type="reset" value="Reset"></td>
                </tr>
            </table>
             <a href="../view/profile.php">Go Back</a>

        </fieldset>
    </form>

</body>
</html>
