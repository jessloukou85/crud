<?php 
    include "../DB/cnxion.php";
    $req = $cnx->prepare('SELECT * from departement order by nom_dpt');
    $res = $req-> execute();
    $deprt = $req->fetchAll();
?>
<?php    include "../pages/header.php" ?>
<div class="container">
    <table class="table table-bordered border-success table-sm table-hover text-center table-striped  table-active table-warning">
        <thead class="table-dark">
            <tr>
                <th scope="col">identifiant du departemant</th>
                <th scope="col">Nom du departement</th>
                <th scope="col">identifiant de l'employe</th>
                <th colspan="2">action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($deprt as $deprt):?>
                <tr>
                    <th><?php echo $deprt['id_dpt'] ?></th>
                    <td><?php echo $deprt['nom_dpt'] ?></td>
                    <td><?php echo $deprt['id_empl'] ?></td>
                    
                    <td>
                        <button class="btn btn-info" type="submit"><a href="upd_form_dpt.php?num_departement=<?= $deprt['id_dpt'] ?>">update</a></button>
                    </td>
                    <td>
                        <button class="btn btn-danger" type="submit"><a href="delete_dpt.php?num_departement=<?= $deprt['id_dpt'] ?>">delete</a></button>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
        <?php    include "../pages/footer.php" ?>