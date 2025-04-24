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
        $query = "SELECT * FROM librarystaff";
        $result = mysqli_query($conn, $query);
    ?>

    <div class = "container">
        <div class = "row mt-3 mb-3">
            <div class = "col">
                <div class = "card">
                    <div class = "card-header">
                        <h2 class = "dispay-6 text-center"> Library Staff </h2>
                    </div>
                    <div class = "card-body">
                        <table class = "table table-bordered text-center">
                            <tr class = "bg-dark text-white">
                                <td>Staff ID</td>
                                <td>Name</td>
                                <td>Role</td>
                                <td>Library ID</td>
                                <td>User ID</td>
                                <td>Issue ID</td>
                            </tr>
                            <tr>
                                <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <td> <?php echo $row['StaffID'] ?></td>
                                        <td> <?php echo $row['Name'] ?></td>                                          
                                        <td> <?php echo $row['Role'] ?></td>
                                        <td> <?php echo $row['LibraryID'] ?></td>                                                                                                           
                                        <td> <?php echo $row['UserID'] ?></td>                                                                                                           
                                        <td> <?php echo $row['IssueID'] ?></td>
                            </tr>
                                <?php        
                                    }
                                ?>
                        </table>

                        <div class = "text-right">
                            <a href = "#" class = "btn bg-dark text-white">Add Staff</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>