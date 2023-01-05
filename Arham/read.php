<?php
 include "conn.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <a href="index.php">Add New Record</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php
        $q=mysqli_query($conn,"SELECT * FROM `tbl_insert`");
        foreach($q as $data)
        {
            echo '<tr>
           <td> '.$data['id'].'</td>
           <td> '.$data['name'].'</td>
           <td> '.$data['email'].'</td>
           <td> 
           <a  href="read.php?id='.$data['id'].'" class="btn btn-danger">Delete</a>
           |
           <a  href="update.php?id='.$data['id'].'" class="btn btn-success">Edit</a>
           </td>                          
           
            </tr>';
        }
        
        ?>

    </table>
    
</body>
</html>
<?php

if(isset($_GET['id']))
{
    $del=$_GET['id'];
    mysqli_query($conn, "DELETE FROM `tbl_insert` WHERE `id`=$del");
    echo "<script>window.location.href='read.php';</script>";
}



?>