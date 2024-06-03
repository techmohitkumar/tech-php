<?php
require_once 'config.php';
if(isset($_POST['go'])){
    extract($_POST);
    $_SESSION['sid']=$upass;
    echo $_SESSION['sid'];
    header("location:index.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">
        <input type="text" name="upass" placeholder="Enter Your Name" />
        <input type="submit" name="go" value="create pass" />
        <form>



</body>

</html>