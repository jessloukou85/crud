<?php
    $cnx = new pdo ('mysql:host=localhost;dbname=service','root','');
        if($cnx){
           $msg ;//="connected successfully";
        }else{
          //  echo"connected error!";
        }
?>