<?php
    require_once('../config/database.php');
    include('Navbar.php')    
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
        $query = "SELECT * FROM books";
        $result = mysqli_query($conn, $query);
    ?>

    <div class = "container">
        <div class = "row mt-3 mb-3">
            <div class = "col">
                <div class = "card">
                    <div class = "card-header">
                        <h2 class = "dispay-6 text-center"> Book Table </h2>
                    </div>
                    <div class = "card-body">
                        <table class = "table table-bordered text-center">
                            <tr class = "bg-dark text-white">
                                <td>Book Code</td>
                                <td>ISBN</td>
                                <td>Title</td>
                                <td>Author</td>
                                <td>Rack Location</td>
                                <td>Publication Date</td>
                                <td>Library ID</td>
                            </tr>
                            <tr>
                                <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <td> <?php echo $row['BookCode'] ?></td>
                                        <td> <?php echo $row['ISBN'] ?></td>                                          
                                        <td> <?php echo $row['Title'] ?></td>
                                        <td> <?php echo $row['Author'] ?></td>                                                                                                           
                                        <td> <?php echo $row['RackLocation'] ?></td>                                                                                                           
                                        <td> <?php echo $row['PublicationDate'] ?></td>
                                        <td> <?php echo $row['LibraryID'] ?></td>                                                                                                                                                                                                                                                                                                                                 
                            </tr>
                                <?php        
                                    }
                                ?>
                        </table>

                        <div class = "text-right">
                            <a href = "#" class = "btn bg-dark text-white">Add Book</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>