<!DOCTYPE html>
<html>
<head>
    <title>Display Data</title>
     
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <title>Display Data</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<h1>Customer Details</h1>
    <table>
        <tr>
            <th>Customer ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Gender</th>
        </tr>
        <?php
        // Connect to the database
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "SaloonMoo";

        $conn = mysqli_connect($hostname, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieve and display customer data
        $sql = "SELECT * FROM Customer_Details ORDER BY CustomerId DESC LIMIT 1;";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['CustomerId'] . "</td>";
                echo "<td>" . $row['FirstName'] . "</td>";
                echo "<td>" . $row['LastName'] . "</td>";
                echo "<td>" . $row['PhoneNumber'] . "</td>";
                echo "<td>" . $row['Address'] . "</td>";
                echo "<td>" . $row['Gender'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No customer data available</td></tr>";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </table>
    
    <h1>Product Details</h1>
    <table>
        <tr>
            <th>Product ID</th>
            <th>Brand Name</th>
            <th>Color</th>
            <th>Description</th>
            <th>Customer ID</th>
        </tr>
        <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "SaloonMoo";

        $conn = mysqli_connect($hostname, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM Product_Details ORDER BY ProductId DESC LIMIT 1;";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['ProductId'] . "</td>";
                echo "<td>" . $row['BrandName'] . "</td>";
                echo "<td>" . $row['Color'] . "</td>";
                echo "<td>" . $row['Discription'] . "</td>";
                echo "<td>" . $row['CustomerId'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No product data available</td></tr>";
        }

        mysqli_close($conn);
        ?>
    </table>

    <h1>Selling Details</h1>
    <table>
        <tr>
            <th>Sale ID</th>
            <th>Product Name</th>
            <th>Order Date</th>
            <th>Quantity</th>
            <th>Location</th>
            <th>Customer ID</th>
            <th>Product ID</th>
        </tr>
        <?php
        $conn = mysqli_connect($hostname, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM Selling_Details ORDER BY SaleId DESC LIMIT 1;";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['SaleId'] . "</td>";
                echo "<td>" . $row['ProductName'] . "</td>";
                echo "<td>" . $row['OrderDate'] . "</td>";
                echo "<td>" . $row['Quantity'] . "</td>";
                echo "<td>" . $row['Location'] . "</td>";
                echo "<td>" . $row['CustomerId'] . "</td>";
                echo "<td>" . $row['ProductId'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No selling data available</td></tr>";
        }

        mysqli_close($conn);
        ?>
    </table>

    <h1>Style Details</h1>
    <table>
        <tr>
            <th>Style ID</th>
            <th>Style Name</th>
            <th>Description</th>
            <th>Customer ID</th>
            <th>Product ID</th>
        </tr>
        <?php
        $conn = mysqli_connect($hostname, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM Style_Details ORDER BY StyleId DESC LIMIT 1;";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['StyleId'] . "</td>";
                echo "<td>" . $row['StyleName'] . "</td>";
                echo "<td>" . $row['Discription'] . "</td>";
                echo "<td>" . $row['CustomerId'] . "</td>";
                echo "<td>" . $row['ProductId'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No style data available</td></tr>";
        }

        mysqli_close($conn);
        ?>
    </table>

    <h1>Appointment Details</h1>
    <table>
        <tr>
            <th>Appointment ID</th>
            <th>Appointment Date</th>
            <th>Appointment Time</th>
            <th>Customer ID</th>
            <th>Style ID</th>
        </tr>
        <?php
        $conn = mysqli_connect($hostname, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM Appoinment_Details ORDER BY AppoinmentId DESC LIMIT 1;";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['AppoinmentId'] . "</td>";
                echo "<td>" . $row['AppoinmentDate'] . "</td>";
                echo "<td>" . $row['AppoinmentTime'] . "</td>";
                echo "<td>" . $row['CustomerId'] . "</td>";
                echo "<td>" . $row['StyleId'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No appointment data available</td></tr>";
        }

        mysqli_close($conn);
        ?>
    </table>
</body>
</html>

</body>
</html>
