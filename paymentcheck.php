<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load the PHPMailer Autoload file
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

// Get the form data
$name = $_POST['name'];
$card_number = $_POST['card_number'];
$card_type = $_POST['card_type'];
$exp_date = $_POST['exp_date'];
$cvv = (int)$_POST['cvv'];
$email = $_POST['email'];

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

// Insert the form data into the database
$sql = "INSERT INTO orders (name, email,card_number, card_type, exp_date, cvv)
        VALUES ('$name', $email,'$card_number', '$card_type', '$exp_date', '$cvv')";

if ($conn->query($sql) === TRUE) {
    // Send email to the user
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->Username = 'zouhairyoussef881@gmail.com';
    $mail->Password = 'ascvmnjvkiislkir';
    $mail->setFrom('zouhairyoussef881@gmail.com', 'Your Name');
    $mail->addAddress($email, $name);
    $mail->Subject = 'Order Confirmation';
    $mail->Body = "Dear $name,\n\nThank you for shopping with us. Your payment details are:\n\nCard Type: $card_type\nCard Number: $card_number\nExpiration Date: $exp_date\nCVV: $cvv\n\nPlease wait until the delivery date specified by the admin to receive your items.\n\nBest regards,\nYour Name";
    $mail->send();

    // Send email to the admin
    $adminEmail = 'zouhairyoussef881@gmail.com';
    $adminName = 'Zouhair Youssef';
    $mail->ClearAddresses();
    $mail->addAddress($adminEmail, $adminName);
    $mail->Subject = 'New Order';
    $mail->Body = "Dear $adminName,\n\nA new order has been placed with the following payment details:\n\nCard Type: $card_type\nCard Number: $card_number\nExpiration Date: $exp_date\nCVV: $cvv\n\nPlease process the order and arrange for the delivery of the items.\n\nBest regards,\nYour Name";
    $mail->send();

    echo "Data inserted successfully!";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

// Close the database connection
$conn->close();
?>