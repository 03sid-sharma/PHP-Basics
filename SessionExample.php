<?php
    session_start();
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
    <ul>
        <li><a href="documents.php">HOME</a></li>
        <li><a href="Form.php">LogIn</a></li>
    </ul>

<?php
    $_SESSION['username'] = "Sid101";
    echo $_SESSION['username'];

    if(!isset($_SESSION['username']))
        echo "You're not logged in!";
    else
        echo "You're logged in!";
?>
</body>
</html>