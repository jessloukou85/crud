<?php
    $cnx = new pdo ('mysql:host=localhost;dbname=service','root','bostam');
        if($cnx){
           $msg ;//="connected successfully";
        }else{
          //  echo"connected error!";
        }
?>