<?php 

$id=$_GET['id'];
try {
    $lien = new PDO('mysql:host=127.0.0.1;dbname=fitness;port=8889', "root", "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $r = $lien->prepare("delete from new_users where id =?");
    $r->execute([$id]);
      header("location:login_users.php?e=yes");
    //crud : create, read , update and delete
} catch (\Throwable $e) {
    echo $e->getMessage();
}


?>