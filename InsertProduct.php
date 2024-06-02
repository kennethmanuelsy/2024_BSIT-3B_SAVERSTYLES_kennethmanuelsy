<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Saverstyles</title>
</head>

<body>
<?php

	$cmbCategory=$_GET['CategoryId'];
	$txtName=$_POST['txtName'];
	$txtDesc=$_POST['txtDesc'];
	$txtSize=$_POST['txtSize'];
	$txtPrice=$_POST['txtPrice'];
	$txtDiscount=$_POST['txtDiscount'];
	$txtFinal=$_POST['txtFinal'];
	
	$path1 = $_FILES["txtFile"]["name"];
	move_uploaded_file($_FILES["txtFile"]["tmp_name"],"../Products/"  .$_FILES["txtFile"]["name"]);
	
	$con = mysqli_connect ("localhost","root", "12345", "shopping");
	
	$sql = "insert into Item (CategoryId,ItemName,Description,Size,Image,Price,Discount,Total) values(".$cmbCategory.",'".$txtName."','".$txtDesc."','".$txtSize."','".$path1."',".$txtPrice.",".$txtDiscount.",".$txtFinal.")";
	
	mysqli_query ($con, $sql);

	mysqli_close ($con);
	header("location:Products.php?CategoryId=".$cmbCategory."")

?>
</body>
</html>
