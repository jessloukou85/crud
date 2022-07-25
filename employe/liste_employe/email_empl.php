<?php
  $title = "liste employé";
    include("../../DB/cnxion.php");
    $req =$cnx->prepare('SELECT * from employe');
          $req->execute();
    $empls = $req->fetchAll();
   // $ids = $empls['email'];
    //var_dump($empls);
?>
<table border="1" align="center">
<thead>
<tr>
    <th scope="col">identifiant</th>
</tr>
</thead>
<tbody>
    <?php foreach ($empls as list($id_empl,$last_name,$first_name,$email,$gender)): ?>
        <tr>
                <th><?php print_r ($email);  ?></th>
        </tr>
    <?php endforeach ?>
</tbody>
</table>