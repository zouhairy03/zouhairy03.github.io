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

// Retrieve the order details from the database
if (isset($_POST['order_id'])) {
    $order_id = $_POST['order_id'];
    $sql = "SELECT * FROM orders WHERE id = $order_id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Generate the invoice using the order details
        // Output the invoice as a PDF or HTML file, or display it in the browser
        // For example:
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="invoice.pdf"');
        echo '<h1>Invoice for Order #' . $order_id . '</h1>';
        echo '<p>Name: ' . $row['name'] . '</p>';
        echo '<p>Email: ' . $row['email'] . '</p>';
        echo '<p>Card Number: ' . $row['card_number'] . '</p>';
        echo '<p>Card Type: ' . $row['card_type'] . '</p>';
        echo '<p>Expiration Date: ' . $row['exp_date'] . '</p>';
        echo '<p>CVV: ' . $row['cvv'] . '</p>';
        echo '<p>Total: $10.00</p>';
