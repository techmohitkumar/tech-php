<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // passing the single argument
    function say_hello($uName){
        echo "<h1>My Name Is: {$uName} </h1>";
    }
    say_hello("Ducat");
    say_hello("Amit");
    say_hello("Rohit");
    say_hello("Vishal");


    //  passing the multiplu argument

    function add($a,$b){
        echo '<hr>';
        echo $a+$b;
        echo '<hr>';
    }

    add(20,10);
    add(200,150);
    add(200,600);



?>

</body>

</html>