<?php
    $password = "dom123";

    $hash = password_hash($password, PASSWORD_DEFAULT);


    if(password_verify("dom123", $hash)){
        echo "login successful";
    }else{
        echo "login failed";
    }
?>
