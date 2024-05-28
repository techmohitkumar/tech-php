
<?php
require_once 'config.php';
if(isset($_POST['submit'])){
    extract($_POST);

    $query="INSERT INTO `userdata` (`id`, `first`,`last`, `email`,  `mobile`, `course`,`password`) VALUES (NULL, '$first','$last', '$email', '$mobile', '$course','$password')";
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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php require_once 'head.php';?>
<div class="dfg">
    <center>
   <img src="./image/crud.jpg" alt="bener">
   </center>
   </div>
<div class="box">
<div class="box1">
    <img src="./image/benner1.png" alt="" >
</div>
<div class="box2">
    <form method="post">
    <input type="text" placeholder=" Fast Name" name="first" required>
    <input type="text" placeholder=" Last Name" name="last" required>
    <input type="email" placeholder=" Enter Email" name="email" required>
    <input type="text" placeholder=" Enter Mobile" name="mobile" required>
    <input type="text" placeholder=" Enter course" name="course" required>
    <input type="password" placeholder=" Enter password" name="password" required>
    <input type="submit" value="submit" name="submit" >
    </form>
</div>
</div>
<?php require_once 'footer.php';?>
</body>
</html>
