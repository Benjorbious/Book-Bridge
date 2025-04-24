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
?>



        <!-- include("database.php");

        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){ 
            while($row = mysqli_fetch_assoc($result)){
                echo $row["UserID"]       . " ";
                echo $row["Name"]         . " ";
                echo $row["UserType"]     . " ";
                echo $row["ContactEmail"] . " ";
                echo $row["IssueID"]      . " ";
                echo "<br>";
            }
        }
 
        mysqli_close($conn); -->