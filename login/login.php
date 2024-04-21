<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

if(@$_POST['login']=='login'){
    extract($_POST);
    if($uemail=="" && $pass==""){
        $msg="please fill the detail";

    }
    else if($uemail==""){
         $msg="plesae fill the email id";
    } 
    else if($pass==""){
        $msg="plesae fill the password";
    }
    else{
        $msg="Welcome";
    }
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
        <center>
        <h2>LOGIN PAGE</h2>
        <p> <input type="email" name="uemail" placeholder="Enter your email"></p>
        <p><input type="password" name="pass" placeholder="Enter your password"></p>
       <p> <input type="submit" name="login" value="login"></p>
        </center>
    </form>
     <?php echo @$msg; ?>
</body>
</html>