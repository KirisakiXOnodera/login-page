<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">username:</label> <br>
        <input type="text" name="username"> <br>
        <label for="">password:</label> <br>
        <input type="password" name="password"> <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
    if(!empty($_POST['password']) && !empty($_POST['username'])){
        
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];

        header("Location: home.php");
    }
    else{
        echo "Missing username or password <br>";
    }
?>
