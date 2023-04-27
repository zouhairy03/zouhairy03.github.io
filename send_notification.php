<?php
require_once('PHPMailer.php');
require_once('SMTP.php');
require_once('Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Retrieve the order details from the database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "fitness";
$port = 8889;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$order_id = $_POST['order_id'];

$sql = "SELECT * FROM orders WHERE id = $order_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Send the notification email using PHPMailer
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    $mail->Username = 'zouhairyoussef881@gmail.com'; // Replace with your Gmail email address
    $mail->Password = 'ascvmnjvkiislkir'; // Replace with your Gmail password

    $mail->setFrom('zouhairyoussef881@gmail.com', 'Your Name');
    $mail->addAddress($row['email']);
    $mail->Subject = 'Order Notification';
    $mail->Body = 'Thank you for shopping with Fitness Club! Your order is being processed and will be shipped soon. If you have any questions or concerns, please don\'t hesitate to reach out to our customer support team.';

    if ($mail->send()) {
        echo 'Notification sent to client.';
    } else {
        echo 'Error sending notification: ' . $mail->ErrorInfo;
    }

} else {
    echo "No order found.";
}

$conn->close();
?>
