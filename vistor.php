<?php
// Connect to the database or open the file for storing visitor data
// Replace the database credentials or file path with your own
$servername = "sql211.epizy.com";
$username = "piz_34196544";
$password = "Md01TL84h5d";
$dbname = "epiz_34196544_cellphone";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for a connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the visitor identifier exists in the database or file
if (isset($_COOKIE['visitor_id'])) {
    $visitorId = $_COOKIE['visitor_id'];
} else {
    // Generate a new visitor identifier
    $visitorId = uniqid();

    // Set the visitor identifier as a cookie
    setcookie('visitor_id', $visitorId, time() + (10 * 365 * 24 * 60 * 60), '/'); // Lifetime of 10 years

    // Store the visitor identifier in the database or file
    $sql = "INSERT INTO visitors (visitor_id) VALUES ('$visitorId')";
    $conn->query($sql);
}

// Query the database or file to get the total visitor count
$sql = "SELECT COUNT(*) AS total_visitors FROM visitors";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$totalVisitors = $row['total_visitors'];

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lifetime Visitor Count</title>
</head>
<body>
    <h1>Welcome to My Website</h1>
    <p>Total lifetime visitors: <?php echo $totalVisitors; ?></p>
</body>
</html>
