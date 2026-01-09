<?php
session_start();
include "../model/db.php";

$usernameError = $passwordError = $phoneError = ""; 
$successMessage = "";
$hasError = false;

// Fetch current user data
$conobj = createCon();
$username = $_SESSION['uname']; //let session is already set after login
$userData = mysqli_fetch_assoc(fetchUser($conobj, $username)); // fetch old data

if (isset($_POST["submit"])) {

    // Validate username
    if (empty($_POST["username"])) {
        $usernameError = "Username is required";
        $hasError = true;
    } elseif (!preg_match('/^\w{3,20}$/', $_POST["username"])) {
        $usernameError = "Username must be 3-20 characters and contain only letters, numbers, and underscores.";
        $hasError = true;
    }
    // Validate password
    if (empty($_POST["password"])) {
        $passwordError = "Password is required";
        $hasError = true;
    } elseif (strlen($_POST["password"]) < 6) {
        $passwordError = "Password must be at least 6 characters long";
        $hasError = true;
    }
    // Validate phone
    if (empty($_POST["phone"])) {
        $phoneError = "Phone number is required";
        $hasError = true;
    } elseif (!preg_match("/^[0-9]{10,15}$/", $_POST["phone"])) {
        $phoneError = "Phone must be 10 to 15 digits";
        $hasError = true;
    }

    // If no errors, update the DB
    if (!$hasError) {
        $newUsername = $_POST["username"];
        $newPassword = $_POST["password"];
        $newPhone = $_POST["phone"];

        //update session username
        $_SESSION["uname"] = $newUsername;

        $updateSql = "UPDATE users SET uname='$newUsername', pass='$newPassword', phone='$newPhone' WHERE uname='$username'";
        if (mysqli_query($conobj, $updateSql)) {
            $successMessage = "Profile updated successfully!";
            //Reload user data
            $userData = mysqli_fetch_assoc(fetchUser($conobj, $newUsername));
        } else {
            $usernameError = "Update failed.Try a different username.";
        }
    }
}
?>
