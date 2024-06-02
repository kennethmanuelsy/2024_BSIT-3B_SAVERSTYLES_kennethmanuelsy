<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_shop = "localhost";
$database_shop = "shopping";
$username_shop = "root";
$password_shop = "12345"; 
$shop = mysqli_connect($hostname_shop, $username_shop, $password_shop, $database_shop);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
