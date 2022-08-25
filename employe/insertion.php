<?php
    include("../DB/cnxion.php");
        $msg='';
    if (isset($_POST['last_name'],$_POST['first_name'],$_POST['email'],$_POST['gender'])){
        $no = (string)htmlspecialchars($_POST['last_name']);
        $pr = (string)htmlspecialchars($_POST['first_name']);
        $ml = (string)htmlspecialchars($_POST['email']);
        $gr = (string)htmlspecialchars($_POST['gender']);
        
          if (!empty($no)and !empty($pr)and !empty($ml)and !empty($gr)){
             $mel = $cnx->prepare('SELECT * from employe where email = ?');
                    $mel->execute([$ml]);
             $melExist = $mel->rowCount();
            
             if($melExist){
                $msg = " ce mail existe dejà dans la base de donnée ";
             }else{
                $req = $cnx->prepare('INSERT into employe values (null,?,?,?,?)');
                $insertisok = $req->execute([$no,$pr,$ml,$gr]);
                  if($insertisok){
                    $msg ="l'employé a ete enregistré avec succes dans la base de donnée ";
                  }else{
                    $msg = "une erreur s'est produite lors de l'insertion veuillez reessayer svp";
                  }
             }
          }else{
                $msg = " merci de bien vouloir rempli tous les champs ";
          }
    }
?>
    <?php    include "../pages/header.php" ?>
    <h1 text-align="center"><?php if(isset($msg)){ echo $msg; } ?></h1>
    <div class="container">
        <div class="text-center mb-4">
            <h3 class="text-muted">Add Users</h3>
            <p class="text-muted">Complete the form below to add a new users </p>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px ;">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">last_name:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="entrez votre nom" required>
                </div>
                <div class="col">
                    <label class="form-label">first_name:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="entrez votre prenom" required>
                </div>
            </div>
                <div class="col mb-3">
                <label class="form-label">email:</label>
                    <input type="email" class="form-control" name="email" placeholder="example@gmail.com" required>
                </div>
                <div class="form-group mb-3">
                    <label>gender:</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="homme"  value="homme">
                    <label for="homme" class="form-input-label" required>homme</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="femme"  value="femme">
                    <label for="femme" class="form-input-label" required>femme</label>
                </div>
                <div>
                    <button class="btn btn-primary"style="width:10vw" type="submit" name="enregistrer">enregistrer</button>
                    <a href="EMPLOYES/index.php" class="btn btn-danger"style="width:10vw">annuler</a>
                    <a href="../employe/liste_employe/liste.php" class="btn btn-primary"style="width:19vw">voir la liste des employés</a>
                </div>
        </form>
    </div>
    <?php    include "../pages/footer.php" ?>
