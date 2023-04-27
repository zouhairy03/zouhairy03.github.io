<?php
extract($_POST);
// $np=$_POST['np'];
// $niveau=$_POST['niveau'];
try {
    $lien = new PDO('mysql:host=127.0.0.1;dbname=fitness;port=8889', "root", "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $r = $lien->prepare("insert into new_users(name,email,password) values(?,?,?) ");
    $r->execute([$name,$email,$password]);
      header("location:login_users.php?e=yes");
    //crud : create, read , update and delete
} catch (\Throwable $e) {
    echo $e->getMessage();
}
?>
