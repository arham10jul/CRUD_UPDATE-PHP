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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>

    <a href="read.php">Back to List</a>

    <form method="post">
    <label >Name</label>
    <input type="text" name="txtname">
    <br>
    <label >Email</label>
    <input type="text" name="txtemail">
    <br>
    <input type="Submit" name="btnAdd">

    </form>
    
</body>
</html>
<?php

if(isset($_POST["btnAdd"]))
{
    $name=$_POST["txtname"];
    $email=$_POST["txtemail"];
    $q=mysqli_query($conn,"INSERT INTO `tbl_insert`(`id`, `name`, `email`) VALUES ('','$name','$email')");

    if($q>0)
    {
    echo '<script>swal("Good job!", "", "success");</script>';
    }
    else
    {
        echo '<script>swal("Good job!", "", "Error");</script>';
    }


}
?>