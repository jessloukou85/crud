<?php 
    $title = 'formulaire de modification';
    include "../DB/cnxion.php";
    $extraction = $cnx -> prepare('SELECT * from departement where id_dpt = :num');
        $extraction -> bindValue(':num',$_GET['num_departement'],pdo::PARAM_INT);
        $num = $_GET['num_departement'];
                  $extraction -> execute();
    $departement = $extraction ->fetch();
?>
<?php    include "header.php" ?>
<form class="row g-3" method="POST" action="update_dpt.php">
    <div class="col-md-4">
    
      <input type="hidden" class="form-control" name="num_departement" value="<?= $departement['id_dpt'] ?>">
    </div>
    <div class="col-md-4">
      <label class="form-label">libele</label>
      <input type="text" class="form-control" name="nom_departement" value="<?= $departement['nom_dpt'] ?>">
    </div>
    <div class="col-md-4">
        
      <input type="hidden" class="form-control" name="id_empl" value="<?= $departement['id_empl'] ?>">
    </div>
    <div class="col-12">
    <button class="btn btn-primary" type="submit" name="enregistrer" >enregistrer</button>
  </div>
</form>
<h1 text-align="center"><?php if(isset($msg)){ echo $msg; } ?></h1>
<?php    include "footer.php" ?>