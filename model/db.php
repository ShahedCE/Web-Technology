<?php
function createCon()
{
    return mysqli_connect("localhost","root","","webtech");
}

function insertData($conn,$user,$pass,$email,$phone,$gender,$file)
{

    $sql="INSERT INTO users (uname,pass,email,phone,gender,file) VALUES ('$user','$pass','$email','$phone','$gender','$file')";
    return mysqli_query($conn,$sql);
}

function checkLogin($conn,$uname,$pass)
{
    $sql="SELECT * FROM users WHERE uname='$uname' AND pass='$pass'";
    return mysqli_query($conn,$sql);
}

function fetchUser($conn,$uname)
{
    $sql="SELECT * FROM users WHERE uname='$uname'";
    return mysqli_query($conn,$sql);
}
function checkDelete($conn,$uname,$pass){
    $sql="DELETE FROM users WHERE uname='$uname' AND pass='$pass'";
    return mysqli_query($conn,$sql);
}

function closeCon($conn)
{
    return mysqli_close($conn);
}

