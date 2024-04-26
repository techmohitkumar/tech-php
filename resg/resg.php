<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <center>
        <input type="text" name="first" value="" placeholder="Enter the first name"><br><br>
        <input type="text" name="last" value="" placeholder="Enter the first name"><br><br>
        <input type="number" name="rol" value="" placeholder="qu id"><br><br>
        <input type="Email" name="email" value="" placeholder="Enter your email"><br><br>
        <input type="password" name="pass" value="" placeholder="Enter your password "><br>
        <br>
        <input type="submit" name="add" value="Register">
        <input type="Reset" value="reset" >
        <br><br>
        
    </form>
    <?php
    extract($_POST);
    error_reporting(0);
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    if(isset($add)){
        echo $first; 
        echo "<br>";
        echo $last; 
        echo "<br>";
        echo $rol;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $pass;




    }
    else
    {
        echo "not found";
    }

    
    
    ?>
</center>
</body>
</html>