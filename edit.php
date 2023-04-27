<?php 

$id=$_GET['id'];
try {
    $lien = new PDO('mysql:host=127.0.0.1;dbname=fitness;port=8889', "root", "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $r = $lien->prepare("select * from new_users where id =?");
    $r->execute([$id]);
    $etudiant=$r->fetch();
    extract($etudiant);
    //   header("location:login_users.php?e=yes");
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
    <title>Edition </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>




    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="update.php" method="post">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <div class="mb-3">
                        <label for="np" class="form-label">Name</label>
                        <input value="<?=$name?>" required type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="niveau" class="form-label">email</label>
                        <input  value="<?=$email?>" required type="text"  name="email" class="form-control">
                    </div>
                    <div class="mb-3">
      <label for="disabledSelect" class="form-label">password</label>
      <input value="<?=$password?>" required type="password" name="password" class="form-control">

    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Valid</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>