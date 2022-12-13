
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST["email"];
    $passwd=$_POST["password"];
    $remember_me=$_POST["rememberme"];
    $home="index.php"; 
    header('Location: '.$home);

}


?>