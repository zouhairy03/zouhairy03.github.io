
<!-- // include_once "../auth_db/User.class.php";
// include_once "../auth_db/Absence.class.php"; -->
<?php



session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Add your own authentication logic here
    if($username == 'zouhairyoussef881@gmail.com' && $password == 'zouhair123') {
        $_SESSION['authenticated'] = true;
    } else {
        $_SESSION['authenticated'] = false;
        header('Location: index.php');
        exit();
    }
}

// Check if the user is authenticated before allowing access to the dashboard
if(!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header('Location: index.php');
    exit();
}
$referer = $_SERVER['HTTP_REFERER'];
if(empty($referer) || strpos($referer, 'index.php') === false) {
    header('Location: all_infos.php');
    exit();
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>

    <div class="container text-center">
  <div class="row">
            <div class="col-md-4 bg-success text-white  border p-5">
               
        <h1 style="text-align:center ;font-size:3rem;"><a href="login_users.php" style="color:white;text-decoration:none;">The Conformations of  sign up</a></h1>
            </div>
            <div class="col-md-4 bg-danger text-white  border p-5">
            <h1 style="text-align:center ;font-size:3rem;"><a href="sb_all.php" style="color:white;text-decoration:none;">The Attendance of trainers </a></h1>

            </div>
            <div class="col-md-4 bg-warning text-white  border p-5">
            <h1 style="text-align:center ;font-size:3rem;"><a href="reply.php" style="color:white;text-decoration:none;">REPLY OF SHOPPING </a></h1>

            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 bg-danger text-white  border p-5">
              
            </div>
            <div class="col-md-4 bg-warning text-white  border p-5">
              
            </div>
            <div class="col-md-4 bg-info text-white  border p-5">
               

            </div>
        </div>
    </div>
    
</body>
</html>