<?php 

$id=$_GET['id'];
try {
    $lien = new PDO('mysql:host=127.0.0.1;dbname=fitness;port=8889', "root", "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $r = $lien->prepare("select * from new_users where id =?");
    $r->execute([$id]);
    $etudiant=$r->fetch();
    //   header("location:index.php?e=yes");
    //crud : create, read , update and delete
} catch (\Throwable $e) {
    echo $e->getMessage();
}


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <div class="card" style="width: 18rem;">
  <img src="images.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$etudiant['name']?></h5>
    <p class="card-text">name : <?=$etudiant['name']?></p>
    <p class="card-text">email: <?=$etudiant['email']?></p>
    <p class="card-text">password: <?=$etudiant['password']?></p>

    <a href="#" onclick="history.go(-1)" class="btn btn-primary">back</a>
  </div>
</div>
    </div>
    
</body>
</html>