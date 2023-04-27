<?php 
extract($_POST);

try {
    $lien = new PDO('mysql:host=127.0.0.1;dbname=fitness;port=8889', "root", "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $r = $lien->prepare("update new_users set name=?,email=?, password=? where id=?");
    $r->execute([$name,$email,$password,$id]);
     header("location:login_users.php?e=yes");
    //crud : create, read , update and delete
} catch (\Throwable $e) {
    echo $e->getMessage();
}

?>