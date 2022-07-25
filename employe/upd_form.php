<?php
    include("../DB/cnxion.php");
    $msg="";
    $req = $cnx->prepare('SELECT * from employe where id_empl = :num');
    $req->bindValue(':num',$_GET['num_employe'],pdo::PARAM_INT);
    $req->execute();
    $employe = $req->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>UPDATE form</title>
</head>
<body>
    <nav class="navbar navbar-ligth justify-content-center fs-3 mb-5" style="background-color:aqua;">
        PHP Complete CRUD Application
        <a href="index.php" class="btn btn-dark">voir liste</a>
    </nav>
    <h1 style="text-align:center;"class="alert alert-success"><?php echo $msg; ?></h1>
    <div class="container">
        <div class="text-center mb-4">
            <h3 class="text-muted">Add Users</h3>
            <p class="text-muted">Complete the form below to add a new users </p>
        </div>
    </div>
<div class="container d-flex justify-content-center">
        <form action="update.php" method="post" style="width:50vw; min-width:300px ;">
            <div class="row mb-4">
                <div class="col">
                    <input type="hidden" class="form-control" name="num_employe" placeholder="entrez votre nom" value="<?= $employe['id_empl']; ?>">
                </div>
                <div class="col">
                    <label class="form-label">last_name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="entrez votre nom" value="<?= $employe['last_name']; ?>" required>
                </div>
                <br>
                <div class="col">
                    <label class="form-label" style="width:10vw">first_name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="entrez votre prenom" value="<?= $employe['first_name']; ?>" required>
                </div>
            </div>
                <div class="col mb-3">
                <label class="form-label">email:</label>
                    <input type="email" class="form-control" name="email" placeholder="example@gmail.com" value="<?= $employe['email']; ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label>gender:</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="homme"  value="homme" value="<?= $employe['gender']; ?>" required>
                    <label for="homme" class="form-input-label">homme</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="femme"  value="femme" value="<?= $employe['gender']; ?>" required>
                    <label for="femme" class="form-input-label">femme</label>
                </div>
                <div>
                    <button class="btn btn-primary"style="width:20vw" type="submit" name="enregistrer">enregistrer les modifications</button>
                    <a href="index.php" class="btn btn-danger"style="width:10vw">annuler</a>
                    <a href="liste.php" class="btn btn-primary"style="width:19vw">voir la liste des employés</a>
                </div>
        </form>
    </div>
</body>
</html>