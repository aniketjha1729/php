<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_POST['preview'])){
            echo "hello";
        }
        else{
            header("Location: http://localhost/php/index.php");
        }
    ?>
</body>
</html>