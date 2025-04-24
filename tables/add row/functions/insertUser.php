<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "librarydb";
    $conn = "";

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    if(!$conn) {
        die("Error Connecting To Database");
    }

    $userName = $_REQUEST["UserName"];
    $userType = $_REQUEST["UserType"];
    $userEmail = $_REQUEST["UserEmail"];

    $sql = "INSERT INTO users (Name, UserType, ContactEmail)
    VALUES ('$userName', '$userType', '$userEmail')";

if(empty($userName) || empty($userType) || empty($userEmail)) {
    echo "<script>alert('One or more fields are empty.'); window.location.href='../Add User.php';</script>";
} else if(mysqli_query($conn, $sql)){
    header("location:../../Users.php");    
} else {
    echo "ERROR: Something went wrong $sql. " 
    . mysqli_error($conn);
}
?>