<?php
// Database connection information
$hostname = "localhost";
$username = "root";
$password = "";
$database = "SaloonMoo"; // Name of the database

// Establish a database connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Customer_Details
$customerId = $_POST["CustomerId"];
$firstName = $_POST["FirstName"];
$lastName = $_POST["LastName"];
$PhoneNumber = $_POST["PhoneNumber"];
$address = $_POST["Address"];
$gender = $_POST["Gender"];

// Prepare the Customer_Details query
$sql = "INSERT INTO Customer_Details (CustomerId, FirstName, LastName, PhoneNumber, Address, Gender) 
        VALUES (?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ississ", $customerId, $firstName, $lastName, $PhoneNumber, $address, $gender);
    if (mysqli_stmt_execute($stmt)) {
        echo "Customer data inserted successfully. ";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Error: " . mysqli_error($conn);
}

// Product_Details
$productId = $_POST["ProductId"];
$brandName = isset($_POST["BrandName"]) ? implode(", ", $_POST["BrandName"]) : "";
$color = $_POST["Colour"];
$productDescription = $_POST["Discription"];

// Prepare the Product_Details query
$sql = "INSERT INTO Product_Details (ProductId, BrandName, Color, Discription, CustomerId) 
        VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "isssi", $productId, $brandName, $color, $productDescription, $customerId);
    if (mysqli_stmt_execute($stmt)) {
        echo "Product data inserted successfully. ";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Error: " . mysqli_error($conn);
}

// Selling_Details
$saleId = $_POST["SaleId"];
$productName = $_POST["Pname"];
$orderDate = $_POST["OrderDate"];
$quantity = $_POST["Quentity"];
$location = $_POST["Location"];

// Prepare the Selling_Details query
$sql = "INSERT INTO Selling_Details (SaleId, ProductName, OrderDate, Quantity, Location, CustomerId, ProductId) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "issisii", $saleId, $productName, $orderDate, $quantity, $location, $customerId, $productId);
    if (mysqli_stmt_execute($stmt)) {
        echo "Selling data inserted successfully. ";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Error: " . mysqli_error($conn);
}

// Style_Details
$styleId = $_POST["StyleId"];
$styleName = $_POST["StyleName"];
$styleDescription = $_POST["Discription"];

// Prepare the Style_Details query
$sql = "INSERT INTO Style_Details (StyleId, StyleName, Discription, CustomerId, ProductId) 
        VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "issii", $styleId, $styleName, $styleDescription, $customerId, $productId);
    if (mysqli_stmt_execute($stmt)) {
        echo "Style data inserted successfully. ";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Error: " . mysqli_error($conn);
}

// Appoinment_Details
$appoinmentId = $_POST["AppoinmentId"];
$appoinmentDate = $_POST["AppoinmentDate"];
$appoinmentTime = $_POST["AppoinmentTime"];

// Prepare the Appoinment_Details query
$sql = "INSERT INTO Appoinment_Details (AppoinmentId, AppoinmentDate, AppoinmentTime, CustomerId, StyleId) 
        VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "issii", $appoinmentId, $appoinmentDate, $appoinmentTime, $customerId, $styleId);
    if (mysqli_stmt_execute($stmt)) {
        echo "Appointment data inserted successfully. ";
        header("Location:display_data.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
