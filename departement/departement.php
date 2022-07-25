<?php
    $title = "departement";
    include "../DB/cnxion.php";
    $msg = "";
    if(isset($_POST['enregistrer'])){
        $no_dept =(string)htmlspecialchars($_POST['nom_departement']);

        $req =$cnx->prepare('INSERT into departement values (null,?,null)');
        $resIsOK = $req->execute([$no_dept]);
            if($resIsOK)
                $msg = "je departement est bien enregistré ";
            else
                $msg = "l'insertion du departement à echoué";
    }
?>
<?php    include "../pages/header.php" ?>
<form class="row g-3" method="POST" action="">
  <div class="col-md-4">
    <label class="form-label">libele</label>
    <input type="text" class="form-control" name="nom_departement">
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="enregistrer" >enregistrer</button>
  </div>
</form>
<h1 text-align="center"><?php if(isset($msg)){ echo $msg; } ?></h1>
<?php    include "../pages/footer.php" ?>