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
//CAPTCHA Matching code
session_start();
if(isset($_POST['verify'])){
    if ($_SESSION["code"] == $_POST["captcha"]) {
        echo $_POST['name'];
    } else {
        header("Location: http://localhost/php/index.php");
    }
}

?>

</body>
</html>