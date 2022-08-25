<?php
    include("../DB/cnxion.php");
    var_dump($_POST);
    $msg='';
    $req = $cnx->prepare('UPDATE employe set last_name=:nom, first_name=:prenom, email=:mail, gender=:genre where id_empl=:num limit 1');
    $req->bindValue(':num',$_POST['num_employe'],pdo::PARAM_INT);
    $req->bindValue(':nom',$_POST['last_name'],pdo::PARAM_STR);
    $req->bindValue(':prenom',$_POST['first_name'],pdo::PARAM_STR);
    $req->bindValue(':mail',$_POST['email'],pdo::PARAM_STR);
    $req->bindValue(':genre',$_POST['gender'],pdo::PARAM_STR);
    $updateIsOk = $req->execute();
        if($updateIsOk){
            $msg = "la modification de l'employé a été effectué avec succes ";
        }else{
            $msg = " la modification a echoué";
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>PHP CRUD Application</title>
</head>
<body>
    <nav class="navbar navbar-ligth justify-content-center fs-3 mb-5" style="background-color:aqua;">
        PHP Complete CRUD Application
        <a href="liste.php" class="btn btn-dark">voir liste</a>
    </nav>
    <h1 style="text-align:center ;"><?php  echo $msg; ?></h1>
    <div class="container">
        <div class="text-center mb-4">
            <h3 class="text-muted">Add Users</h3>
            <p class="text-muted">Complete the form below to add a new users </p>
        </div>
    </div>