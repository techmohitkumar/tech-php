<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Example</title>
</head>

<body>
    <?php
        // echo $data;
        // Warning: Undefined variable $data 
        $data="Hello";
        $data="Hello123";
        echo $data;

        
        hello();

        // define the function
        function hello(){
            echo "<h1>This is A Function</h1>";
        }
        // Fatal error: Cannot redeclare hello() (previously declared
        // function hello(){
        //     echo "<h1>This is A Function With Same Name</h1>";
        // }

        // call the function
        hello();
        hello();
        hello();
        hello();

        
    









?>







</body>

</html>