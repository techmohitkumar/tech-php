<?php
require_once 'config.php';
if(isset($_POST['insert'])){
    extract($_POST);

    $query="INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `course`) VALUES (NULL, '$name', '$email', '$password', '$mobile', '$course')";
    mysqli_query($dbCon,$query);
    
    // redirect the page
    header("location:view.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Record</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require_once 'head.php';?>
    <center>
        <form method="post">
            <p><input type="text" placeholder="Enter Name" name="name" /></p>
            <p><input type="email" placeholder="Enter Email" name="email" /></p>
            <p><input type="password" placeholder="Enter Password" name="password" /></p>
            <p><input type="text" placeholder="Enter Mobile" name="mobile" /></p>
            <p><input type="text" placeholder="Enter Course" name="course" /></p>
            <input type="submit" value="insert" name="insert">
        </form>
    </center>




</body>

</html>