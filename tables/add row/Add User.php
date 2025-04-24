<?php
    require_once('../../config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    <title>Document</title>
</head>
<body class = "bg-dark">
    
    <?php
        $query = "SELECT * FROM library";
        $result = mysqli_query($conn, $query);
    ?>

    <div class = "container">
        <div class = "row mt-3 mb-3">
            <div class = "col">
                <div class = "card">
                    <div class = "card-header">
                        <h2 class = "dispay-6 text-center"> Add User </h2>
                    </div>
                    <div class = "card-body mx-auto">
                        <form action="functions/insertUser.php" method="POST">
                            User Name: <br><input type="text" name="UserName"><br>
                            User Type: <br><input type="text" name="UserType"><br>
                            User Email: <br><input type="text" name="UserEmail"><br>
                            <div class = "text-right mt-2">
                                <input type="button" value="Cancel" onclick="document.location.href='../Users.php'"/>
                                <input type="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>