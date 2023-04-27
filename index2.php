<?php



session_start();

// Default language is English


// extract($_POST);
// $np=$_POST['np'];
// $niveau=$_POST['niveau'];
try {
    $lien = new PDO('mysql:host=127.0.0.1;dbname=fitness;port=8889', "root", "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $r = $lien->prepare("select*from users  ");
    $r->execute([]);
    $etudiants=$r->fetchAll();
    //   header("location:index.php?e=yes");
    //crud : create, read , update and delete
} catch (\Throwable $e) {
    echo $e->getMessage();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
                                                     
</head>
<body>
    <h1 style="text-align:center;font-family:sans-serif;font=size:3rem">The confirmations of Sing up </h1>
    <br>
    <div class="container">
        <table class="table table-striped">
            <thead>
               <tr>
               <th>#</th>
                <th>name</th>
                                <th>email</th>

                <th>password</th>
                <th>actions</th>

               </tr>
            </thead>
            <tbody>
                <?php foreach ($etudiants as $c => $e) {?>
                 
               
                
           
<tr>
                <td><?=$e['id']?></td>
                <td><?=$e['name']?></td>
                <td><?=$e['email']?></td>
                <td><?=$e['password']?></td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
  <a href="delete.php?id=<?=$e['id']?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
  <a href="edit.php?id=<?=$e['id']?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i></a>
  <!-- <a href="show.php?id=<?=$e['id']?>" class="btn btn-success">S</a> -->
</div>



                </td>
                </tr>
                <?php }?>
</tbody>
        </table>
    </div>
</body>
</html>