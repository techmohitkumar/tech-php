<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Warning: Undefined variable $a
    //  function add(){
        // setting default value
        function add($a,$b=0){
        echo '<hr>';
        echo $a+$b;
        echo '<hr>';
    }
    // Fatal error: Uncaught ArgumentCountError: Too few arguments to function add(), 0 passed 
    // add();
    // Fatal error: Uncaught ArgumentCountError: Too few arguments to function add(), 1 passed
    // add(10);
    add(20)

    

    
    
    
    
    ?>

</body>

</html>