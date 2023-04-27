<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <?php

// Create a connection to the database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "fitness";
$port = 8889;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the orders from the database
$sql = "SELECT * FROM orders";
// Retrieve the orders from the database
$sql = "SELECT id, name, email, card_number, card_type, exp_date, cvv FROM orders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-striped'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Card Number</th><th>Card Type</th><th>Expiration Date</th><th>CVV</th><th>Reply Date</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["card_number"] . "</td><td>" . $row["card_type"] . "</td><td>" . $row["exp_date"] . "</td><td>" . $row["cvv"] . "</td><td><form action='send_notification.php' method='post'><input type='hidden' name='order_id' value='" . $row["id"] . "'><input type='date'  name='reply_date_" . $row["id"] . "'><input type='submit' value='Reply'>";

    }
    echo "</table>";
} else {
    echo "No orders found.";
}


// Close the database connection
$conn->close();

?>

</body>
</html>
