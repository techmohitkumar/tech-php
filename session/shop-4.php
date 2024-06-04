<?php
require_once 'config.php';
if($_SESSION['sid']==""){
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop 4</title>
</head>

<body>
    <hr>
    <a href="./">Home</a>
    <hr>

    <h1>Shop Four : <?php echo $_SESSION['sid'];?></h1>
    <he>

</body>

</html>