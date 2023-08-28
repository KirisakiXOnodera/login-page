<?php
    include("db.php");

    $username = "Patricks";
    $password = "clarinet123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

    try {
        mysqli_query($conn, $sql);
        echo "Success";
    }
    catch(mysqli_sql_exception){
        echo "Error: no connection";
    }


    mysqli_close($conn);
?>
