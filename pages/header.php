<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title><?php if(isset($title)){ echo $title; }else{echo "nouvelle pages";} ?></title>
</head>
<body>
    <nav class="navbar navbar-ligth justify-content fs-6 mb-2">
        <ul>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../departement/departement.php">Departement</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../employe/employe.php">employés</a>
            </li>
        </ul>
        PHP Complete CRUD Application
    </nav>
    
