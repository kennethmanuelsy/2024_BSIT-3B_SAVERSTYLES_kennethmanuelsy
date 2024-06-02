<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Saverstyles</title>
</head>

<body>
<?php
session_start();
$UserName=$_POST['txtUserName'];
$Password=$_POST['txtPassword'];
$UserType=$_POST['rdType'];
if($UserType=="Admin")
{
    $con = mysqli_connect("localhost","root", "12345", "shopping");
    $sql = "select * from Admin where UserName='".$UserName."' and Password='".$Password."'";
    $result = mysqli_query($con, $sql);
    $records = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    if ($records==0)
    {
        echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
    }
    else
    {
        header("location:Admin/index.php");
    } 
    mysqli_close($con);
}
else if($UserType=="Customer")
{
    $con = mysqli_connect("localhost","root", "12345", "shopping");
    $sql = "select * from Customer_Registration where UserName='".$UserName."' and Password='".$Password."' ";
    $result = mysqli_query($con, $sql);
    $records = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    if ($records==0)
    {
        echo '<script type="text/javascript">alert("Wrong Username or Password");window.location=\'index.php\';</script>';
    }
    else
    {
        $_SESSION['ID']=$row['CustomerId'];
        $_SESSION['Name']=$row['CustomerName'];
        header("location:Customer/index.php");
    } 
    mysqli_close($con);
}
?>
</body>
</html>
