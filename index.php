<?php
    require_once('config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    <title>Document</title>
    <title>Home Page</title>
</head>
<body class = "bg-dark">
    <nav class="row justify-content-center">
        <div class="col-auto">
            <table class="table table-responsive">
                <tbody>
                    <tr>
                        <td><a href = 'tables/Libraries.php' class = "btn bg-light"> Library </a></td>
                        <td><a href = 'tables/Books.php' class = "btn bg-light"> Books </a></td>
                        <td><a href = 'tables/Issue Records.php' class = "btn bg-light"> Issue Records </a></td>
                        <td><a href = 'tables/Users.php' class = "btn bg-light"> Users </a></td>
                        <td><a href = 'tables/Library Staff.php' class = "btn bg-light"> Library Staff </a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </nav>
    
</body>
</html>