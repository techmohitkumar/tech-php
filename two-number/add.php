<?php
// echo '<pre>';
// print_r($_GET);
// echo '</pre>';

if(isset($_POST['add'])){
    $num1=$_POST['num1'];
    


    $num2=$_POST['num2'];
    
    settype($num2,"integer");
    echo gettype($num2);



    
    // $res=$num1+$num2;
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}
else{
    echo "Hello";
}








?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculater</title>
</head>

<body>
    <form method="post">
        <input type="text" name="num1" value="<?php echo @$num1;?>" placeholder="Enter First Number">
        <input type="text" name="num2" value="<?php echo @$num2;?>" placeholder="Enter Second Number">
        <input type="submit" name="add" value="add">
        <input type="submit" name="sub" value="sub">
    </form>
    <?php echo @$res;?>





</body>

</html>