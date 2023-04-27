

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
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "fitness";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query the database for attendance status
$present_users = array();
$absent_users = array();
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if (isset($_POST['attendance'][$row["id"]])) {
            if ($_POST['attendance'][$row["id"]] === 'present') {
                $present_users[] = $row;
            } else {
                $absent_users[] = $row;
            }
        } else {
            $absent_users[] = $row;
        }
    }
}

// Output the attendance table
echo '<h1 class="text-center" >Attendance Report</h1>';

echo '<h2 class="text-center bg-success text-light">Present trainers</h2>';
if (count($present_users) > 0) {
    echo '<table class="table table-striped">';
    echo "<thead><tr><th>ID</th><th>Username</th><th>Email</th><th>Date of training</th><th>Preferred Time</th><th>Preferred Sport</th><th>Registration Time</th></tr></thead>";
    echo "<tbody>";
    foreach ($present_users as $user) {
        echo "<tr><td>".$user["id"]."</td><td>".$user["username"]."</td><td>".$user["email"]."</td><td>".$user["date"]."</td><td>".$user["time"]."</td><td>".$user["sport"]."</td><td>".$user["registration_time"]."</td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<p>No users were present.</p>";
}

echo '<h2 class="text-center bg-danger text-light">absent trainers</h2>';
if (count($absent_users) > 0) {
    echo '<table class="table table-striped">';
    echo "<thead><tr><th>ID</th><th>Username</th><th>Email</th><th>Date of training</th><th>Preferred Time</th><th>Preferred Sport</th><th>Registration Time</th></tr></thead>";
    echo "<tbody>";
    foreach ($absent_users as $user) {
        echo "<tr><td>".$user["id"]."</td><td>".$user["username"]."</td><td>".$user["email"]."</td><td>".$user["date"]."</td><td>".$user["time"]."</td><td>".$user["sport"]."</td><td>".$user["registration_time"]."</td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<p>No users were absent.</p>";
}

mysqli_close($conn);
?>



</body>
</html>