<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Saverstyles</title>
</head>
<body>
<?php
	$Name=$_POST['txtName'];
	$Desc=$_POST['txtDesc'];
	$path1 = $_FILES["txtFile"]["name"];
	move_uploaded_file($_FILES["txtFile"]["tmp_name"],"../Products/"  .$_FILES["txtFile"]["name"]);
	
	$con = mysqli_connect("localhost","root", "12345", "shopping");
	
	$sql = "INSERT INTO Category (CategoryName, Description, Image) VALUES ('".$Name."','".$Desc."','".$path1."')";

	mysqli_query($con, $sql);

	mysqli_close($con);
	echo '<script type="text/javascript">alert("Category Inserted Successfully");window.location=\'Category.php\';</script>';
?>
</body>
</html>
