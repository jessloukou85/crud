<?php
    include('../DB/cnxion.php');
    var_dump($_GET);
    $num = $_GET['num_employe'];
    $req = $cnx->prepare('DELETE  employe where id_empl = :num limit 1');
    $req->bindValue(':num', $_GET['num_employe'],pdo::PARAM_INT );
    $res= $req->execute();
    if($res){
        $msg ="l'emplpoyé numero ".$num." a été supprimé ";
    }else{
        $msg =" erreur de suppression de l'employé numéro ".$num."";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php if(isset($msg)){ echo $msg; }?></p>
</body>
</html>