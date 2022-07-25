<?php
        $title = 'modification';
        include "../DB/cnxion.php";
        $update_dpt = $cnx -> prepare('UPDATE departement set nom_dpt =:nom where id_dpt =:num limit 1');
                      $update_dpt ->bindValue(':num',$_POST['num_departement'],pdo::PARAM_INT);
                      $update_dpt ->bindValue(':nom',$_POST['nom_departement'],pdo::PARAM_STR);
        $update_dpt_is_OK = $update_dpt -> execute();
        $num = $_POST['num_departement'];
        if($update_dpt_is_OK)
            $msg ="le departement ".$num." a ete modifié ";
        else
            $msg = "la modification a echoué";
?>
<?php    include "header.php" ?>
<h1 text-align="center"><?php if(isset($msg)){ echo $msg; } ?></h1>
<?php    include "footer.php" ?>