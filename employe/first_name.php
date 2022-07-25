<?php
    include ("../DB/cnxion.php");
    var_dump($_GET);
    $req = $cnx->prepare('SELECT * from employe');
    $res = $req->execute();
    $employe = $req->fetchAll();
    $name = array_column($employe,'last_name');
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
    <a href="last_name.php">les noms</a>
    <a href="email.php">les adresse mail</a>
    <table>
        <thead>
            <tr>
                <th>last_name</th>
            </tr>
        </thead>
        <tbody>
           <?php foreach ($name as $item): ?>
            <tr>
                <td><?php  print_r($name) ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>