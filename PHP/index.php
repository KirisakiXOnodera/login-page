<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Enter a country</label>
        <input type="text" name="country">
        <input type="submit" >
    </form>
</body>
</html>

<?php

    $capitals = array("USA"=>"Washington D.C.", 
                    "Japan"=>"Tokyo", 
                    "South Korea"=>"Seoul", 
                    "Philippines"=>"Manila", 
                    "France"=>"Paris");


    $capital = $capitals[$_POST["country"]];

    echo $capital;
?>