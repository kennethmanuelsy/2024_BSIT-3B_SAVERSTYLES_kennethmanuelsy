<?php
// Establish database connection
$con = mysqli_connect("localhost", "root", "12345", "shopping");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Generate current date
$currentDate = date('Y-m-d');

// Calculate total items sold and total revenue
$sql_sales = "SELECT SUM(Quantity) AS total_items, SUM(Total) AS total_revenue FROM Shopping_Cart";
$result_sales = mysqli_query($con, $sql_sales);
$row_sales = mysqli_fetch_assoc($result_sales);
$total_items = $row_sales['total_items'];
$total_revenue = $row_sales['total_revenue'];

// Insert sales report into Report table
$sql_insert_report = "INSERT INTO Report (total_items_sold, total_revenue, order_date) VALUES ('$total_items', '$total_revenue', '$currentDate')";
if (!mysqli_query($con, $sql_insert_report)) {
    echo "Error: " . $sql_insert_report . "<br>" . mysqli_error($con);
} else {
    echo "Sales report generated and stored in the database.";
}

// Close database connection
mysqli_close($con);
?>
