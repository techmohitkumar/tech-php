<?php
require_once 'config.php';

if(isset($_POST['insert'])){
    extract($_POST);

    $query="INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `course`) VALUES (NULL, 'User', 'user@techunitbook.com', '54321', '9632587300', 'Java')";
    
    mysqli_query($dbCon,$query);
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





        <input type="submit" value="insert" name="insert">
    </form>




</body>

</html>