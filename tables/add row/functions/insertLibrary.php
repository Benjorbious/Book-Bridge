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

    $libraryName = $_REQUEST["LibraryName"];
    $libraryAddress = $_REQUEST["LibraryAddress"];

    $sql = "INSERT INTO library (Name, Address)
    VALUES ('$libraryName', '$libraryAddress')";

if(empty($libraryName) || empty($libraryAddress)) {
    echo "<script>alert('One or more fields are empty.'); window.location.href='../add library.php';</script>";
} else if(mysqli_query($conn, $sql)){
    header("location:../../libraries.php");    
} else {
    echo "ERROR: Something went wrong $sql. " 
    . mysqli_error($conn);
}
?>