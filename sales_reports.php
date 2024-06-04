<?php
session_start();

// Establish database connection
$con = mysqli_connect("localhost", "root", "12345", "shopping");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// SQL query to retrieve daily sales report
$sql = "SELECT order_date, SUM(total_revenue) AS daily_revenue FROM Report GROUP BY order_date";

$result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Saverstyles</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
        .style10 {color: #FFFFFF}
        .style3 {font-weight: bold}
    </style>
</head>
<body>
<div id="wrapper">
  
  <?php include "Header.php"; ?>
  
  <div id="content">
    <h2><span style="color:#003300"> Sales Report</span></h2>
    <table width="100%" border="1" bordercolor="#003300">
      <tr>
        <td bgcolor="#4B692D" class="style10 style3"><strong>Date</strong></td>
        <td bgcolor="#4B692D" class="style10 style3"><strong>Daily Revenue</strong></td>
      </tr>
      <?php
while($row = mysqli_fetch_array($result))
{
    $order_date = $row['order_date'];
    $daily_revenue = $row['daily_revenue'];

?>
      <tr>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $order_date;?></strong></div></td>
        <td class="style3"><div align="left" class="style9 style5"><strong><?php echo $daily_revenue;?></strong></div></td>
      </tr>
      <?php
}

$records = mysqli_num_rows($result);
?>
      <?php

mysqli_close($con);
?>
    </table>
    <p align="justify">&nbsp;</p>
    <table width="100%" border="0" cellspacing="3" cellpadding="3">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><p><img src="img/Jeans.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
        <td><p><img src="img/asd.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
        <td><p><img src="img/images.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
      </tr>
      <tr>
        <td height="26" bgcolor="#BCE0A8"><div align="center" class="style9">Jeans</div></td>
        <td bgcolor="#BCE0A8"><div align="center" class="style9">Bleasures</div></td>
        <td bgcolor="#BCE0A8"><div align="center" class="style9">T-Shirts</div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </div>
 <?php include "Right.php"; ?>
  <div style="clear:both;"></div>
   <?php include "Footer.php"; ?>
</div>
</body>
</html>
