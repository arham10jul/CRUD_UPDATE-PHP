<?php
include "conn.php";
if(isset($_GET["id"]))
{
    $sel=$_GET["id"];
    $q=mysqli_query($conn, "SELECT `id`, `name`, `email` FROM `tbl_insert` WHERE `id`=$sel");
    $m=mysqli_fetch_array($q);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label >Name</label>
    <input type="text" name="txtname" value="<?php echo $m[1] ?>" required>
    <br>
    <label >Email</label>
    <input type="text" name="txtemail" value="<?php echo $m[2] ?>" required>
    <br>
    <input type="Submit" name="btnAdd">

    </form>
    
</body>
</html>
<?php
if(isset($_POST["btnAdd"]))
{
    $a=$_GET['id'];
    $name=$_POST["txtname"];
    $email=$_POST["txtemail"];
    $q=mysqli_query($conn, "UPDATE `tbl_insert` SET `name`='$name',`email`='$email' WHERE `id`=$a");
    if($q>0)
    {
        echo '<script>window.location.href="read.php"</script>';
    }
}


?>