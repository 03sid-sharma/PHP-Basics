<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="GET">
        <input type="text" name="person">
        <button type="submit">SUBMIT</button>
    </form>
    <?php
        // $name=$_GET['person'];
        // echo $name." is a good boi!";

        // echo str_replace("Manu","Jason","Hello Manu");

        // $names=array("Daniel","Michael","Jason");
        // echo $names['1'];

        $x = 5;
        function smh(){
            $y = 10;
            echo $GLOBALS['x'];
        }
        smh();
    ?>
</body>
</html>