<?php require_once('Connections/shop.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Saverstyles</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <style type="text/css">
        <!--
        .style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
        .style10 {
            color: #FFFFFF;
            font-weight: bold;
        }
        -->
    </style>
</head>
<body>
<div id="wrapper">

  <?php include "Header.php"; ?>

  <div id="content">
    <h2><span style="color:#003300"> Products</span></h2>

    <!-- Search Bar -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
      <input type="text" name="query" placeholder="Search items by name or description">
      <button type="submit">Search</button>
    </form>

    <table width="100%" border="1" cellpadding="2" cellspacing="2">
      <tr>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">ItemName</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Description</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Size</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Image</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Price</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Discount</span></td>
        <td bordercolor="#669933" bgcolor="#669933"><span class="style10">Total</span></td>
      </tr>

      <?php
        // Check if a search query is provided
        if(isset($_GET['query'])) {
          // Sanitize the search query
          $search_query = mysqli_real_escape_string($shop, $_GET['query']);
          // Construct the SQL query for searching
          $search_query = "SELECT ItemName, `Description`, `Size`, Image, Price, Discount, Total FROM item WHERE ItemName LIKE '%$search_query%' OR `Description` LIKE '%$search_query%'";
          $search_result = mysqli_query($shop, $search_query) or die(mysqli_error($shop));
          $total_search_rows = mysqli_num_rows($search_result);

          if($total_search_rows > 0) {
            // Display search results
            while($row_search = mysqli_fetch_assoc($search_result)) {
      ?>
              <tr>
                <td><?php echo $row_search['ItemName']; ?></td>
                <td><?php echo $row_search['Description']; ?></td>
                <td><?php echo $row_search['Size']; ?></td>
                <td><img src="Products/<?php echo $row_search['Image']; ?>" height="125px" width="125px"/></td>
                <td><?php echo $row_search['Price']; ?></td>
                <td><?php echo $row_search['Discount']; ?></td>
                <td><?php echo $row_search['Total']; ?></td>
              </tr>
      <?php
            }
          } else {
            echo "<tr><td colspan='7'>No items found.</td></tr>";
          }

          mysqli_free_result($search_result);
        } else {
          // Display all products if no search query is provided
          $query_Recordset2 = "SELECT ItemName, `Description`, `Size`, Image, Price, Discount, Total FROM item";
          $Recordset2 = mysqli_query($shop, $query_Recordset2) or die(mysqli_error());
          
          if(mysqli_num_rows($Recordset2) > 0) {
            while($row_Recordset2 = mysqli_fetch_assoc($Recordset2)) {
      ?>
              <tr>
                <td><?php echo $row_Recordset2['ItemName']; ?></td>
                <td><?php echo $row_Recordset2['Description']; ?></td>
                <td><?php echo $row_Recordset2['Size']; ?></td>
                <td><img src="Products/<?php echo $row_Recordset2['Image']; ?>" height="125px" width="125px"/></td>
                <td><?php echo $row_Recordset2['Price']; ?></td>
                <td><?php echo $row_Recordset2['Discount']; ?></td>
                <td><?php echo $row_Recordset2['Total']; ?></td>
              </tr>
      <?php
            }
          } else {
            echo "<tr><td colspan='7'>No Data</td></tr>";
          }

          mysqli_free_result($Recordset2);
        }
      ?>

    </table>
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
