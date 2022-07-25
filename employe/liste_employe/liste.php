<?php
  $title = "liste employé";
    include("../../DB/cnxion.php");
    $req =$cnx->prepare('SELECT * from employe');
          $req->execute();
    $empls = $req->fetchAll();
?>
    <?php include "../../pages/header.php" ?>
   <div class="container">
        <a href="index.php" class="btn btn-dark"> Add New</a>
        <h3 class="text-muted">
  Fancy display heading
  <small class="text-muted">With faded secondary text</small>
</h3>
<ul class="list-unstyled">
  <li>This is a list.</li>
  <li>It appears completely unstyled.</li>
  <li>Structurally, it's still a list.</li>
  <li>However, this style only applies to immediate child elements.</li>
  <li>Nested lists:
    <ul>
      <li>are unaffected by this style</li>
      <li>will still show a bullet</li>
      <li>and have appropriate left margin</li>
    </ul>
  </li>
  <li>This may still come in handy in some situations.</li>
</ul>
<ul class="list-inline">
  <li class="list-inline-item">This is a list item.</li>
  <li class="list-inline-item">And another one.</li>
  <li class="list-inline-item">But they're displayed inline.</li>
</ul>
        <table class="table table-bordered border-success table-sm table-hover text-center table-striped  table-active table-warning" border='1' align='center'>
  <thead class="table-dark">
    <tr>
      <th scope="col">id_empl</th>
      <th scope="col">Last_name</th>
      <th scope="col">First_name</th>
      <th scope="col">email</th>
      <th scope="col">gender</th>
      <th colspan="2">action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($empls as $empl):?>
      <tr>
        <th><?php echo $empl['id_empl'] ?></th>
        <td><?php echo $empl['last_name'] ?></td>
        <td><?php echo $empl['first_name'] ?></td>
        <td><?php echo $empl['email'] ?></td>
        <td><?php echo $empl['gender'] ?></td>
        <td>
          <button class="btn btn-info" type="submit"><a href="upd_form.php?num_employe=<?= $empl['id_empl'] ?>">update</a></button>
        </td>
        <td>
          <button class="btn btn-danger" type="submit"><a href="delete.php?num_employe=<?= $empl['id_empl'] ?>">delete</a></button>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>
<?php include "../../pages/footer.php" ?>
<td>
  <button class="btn btn-danger" type="submit"><a href="id_empl.php">afficher les identtifiants</a></button>
  <button class="btn btn-danger" type="submit"><a href="nom_empl.php">afficher les noms</a></button>
  <button class="btn btn-danger" type="submit"><a href="pren_empl.php">afficher les prenoms</a></button>
  <button class="btn btn-danger" type="submit"><a href="email_empl.php">afficher les adresse mail</a></button>
  <button class="btn btn-danger" type="submit"><a href="genre_empl.php">afficher le genre</a></button>
</td>