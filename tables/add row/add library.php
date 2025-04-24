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
                        <h2 class = "dispay-6 text-center"> Add Library </h2>
                    </div>
                    <div class = "card-body mx-auto">
                        <form action="functions/insertLibrary.php" method="POST">
                            Library Name: <br><input type="text" name="LibraryName"><br>
                            Library Address: <br><input type="text" name="LibraryAddress"><br>
                            <div class = "text-right mt-2">
                                <input type="button" value="Cancel" onclick="document.location.href='../libraries.php'"/>
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