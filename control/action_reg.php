<?php 
include "../model/db.php";

$usernameError = "";
$passwordError = "";
$emailError = "";
$phoneError = "";
$genderError = "";
$fileErr = "";
$hasError="";

if (isset($_POST["submit"])) {

    // Username validation
    if (empty($_POST["username"])) {
        $usernameError = "Username is required";
        $hasError=true;
    } elseif (!preg_match('/^\w{3,20}$/', $_POST["username"])) {
    $usernameError = "Username must be 3-20 characters and contain only letters, numbers, and underscores.";
    $hasError = true;

    }

    // Password validation
    if (empty($_POST["password"])) {
        $passwordError = "Password is required";
        $hasError=true;
    } elseif (strlen($_POST["password"]) < 6) {
        $passwordError = "Password must be at least 6 characters long";
        $hasError=true;
    }

    // Email validation
    if (empty($_POST["email"])) {
        $emailError = "Email is required";
        $hasError=true;
    } else {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
            $hasError=true;
        }
    }

  
    if (empty($_POST["phone"])) {
        $phoneError = "Phone number is required";
        $hasError=true;
    } elseif (!preg_match("/^[0-9]{10,15}$/", $_POST["phone"])) {
        $phoneError = "Phone must be 10 to 15 digits";
        $hasError=true;
    }
   
     if ($_FILES["myfile"]["name"] == "") {
        $fileErr = "File not uploaded!";
        $hasError=true;
    } else {
        if ($_FILES["myfile"]["size"] > 2097152) {
            $fileErr = "File is too large (max 2MB)";
            $hasError=true;
        } 
        else if (
            $_FILES["myfile"]["type"] != "image/jpeg" &&
            $_FILES["myfile"]["type"] != "image/png" &&
            $_FILES["myfile"]["type"] != "application/pdf"
        ) 
        {
            $fileErr = "Invalid file type (only JPG, PNG, or PDF)";
            $hasError=true;
        }
         else {
            if (move_uploaded_file(
                $_FILES["myfile"]["tmp_name"],
                "../uploads/" . $_POST["username"] . "-" . basename($_FILES["myfile"]["name"])
            ))
            {
                $fileErr = "File uploaded successfully.";
            } else {
                $fileErr = "File upload failed.";
               $hasError=true;
            }
        }
    }
   
    if (empty($_POST["gender"])) {
        $genderError = "Gender is required";
        $hasError=true;
    }
        
   

        if (!$hasError) {
    $conobj = createCon();
    if (insertData($conobj,$_REQUEST["username"], $_REQUEST["password"],$_REQUEST["email"],$_REQUEST["phone"], $_REQUEST["gender"], "../uploads/" . $_REQUEST["username"] . "-" . $_FILES["myfile"]["name"])) {
        header("Location: ../view/login.php");
    } else {
        echo "Failed"; 
    }
}
  }


?>
