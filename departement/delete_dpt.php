<?php   
    $msg = '';
        include "../DB/cnxion.php";

    $req = $cnx->prepare('DELETE from departement where id_dpt = :num limit 1');
        $req->bindValue(':num', $_GET['num_departement'],pdo::PARAM_INT);
        $num = $_GET['num_departement'];
    $delete_dpt_is_OK = $req -> execute();
    if ($delete_dpt_is_OK)
        $msg = "supression du departement ".$num." a été effectuée avec bravoure";
    else
        $msg = "l'element ".$num." souhaiter est present encore present dans la liste";
?>
<?php    include "header.php" ?>
<h1 text-align="center"><?php if(isset($msg)){ echo $msg; } ?></h1>
<?php    include "footer.php" ?>