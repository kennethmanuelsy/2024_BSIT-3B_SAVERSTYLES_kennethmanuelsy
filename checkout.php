<?php
session_start();

// Establish database connection
$con = mysqli_connect("localhost", "root", "12345", "shopping");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Generate current date
$currentDate = date('Y-m-d');

// Insert data into Shopping_Cart_Final
$sql_insert = "INSERT INTO Shopping_Cart_Final (CustomerID, ItemName, Quantity, Price, Total, OrderDate)
               SELECT CustomerID, ItemName, Quantity, Price, Total, '$currentDate'
               FROM Shopping_Cart
               WHERE CustomerID=" . $_SESSION['ID'];

if (mysqli_query($con, $sql_insert)) {
    // Calculate total items sold and total revenue
    $sql_sales = "SELECT SUM(Quantity) AS total_items, SUM(Total) AS total_revenue FROM Shopping_Cart_Final WHERE OrderDate='$currentDate'";
    $result_sales = mysqli_query($con, $sql_sales);
    $row_sales = mysqli_fetch_assoc($result_sales);
    $total_items = $row_sales['total_items'];
    $total_revenue = $row_sales['total_revenue'];

    // Insert sales report into Report table
    $sql_insert_report = "INSERT INTO Report (total_items_sold, total_revenue, order_date) VALUES ('$total_items', '$total_revenue', '$currentDate')";
    if (!mysqli_query($con, $sql_insert_report)) {
        echo "Error: " . $sql_insert_report . "<br>" . mysqli_error($con);
    } else {
        // Delete data from Shopping_Cart
        $sql_delete = "DELETE FROM Shopping_Cart WHERE CustomerID=" . $_SESSION['ID'];
        mysqli_query($con, $sql_delete);

        // Close connection
        mysqli_close($con);

        // Redirect to Cart.php
        echo '<script type="text/javascript">alert("Thank You For Your order");window.location=\'Cart.php\';</script>';
    }
} else {
    echo "Error: " . $sql_insert . "<br>" . mysqli_error($con);
}
?>
