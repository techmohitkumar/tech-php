<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return The Data</title>
</head>

<body>

    <?php
    // retuen the single data
    function add($a,$b){
        $res=$a+$b;
        return($res);
        echo "Hiii";
    }
    $data=add(100,200);
    echo $data + 500;

    $data1=add($data,1000);
    echo $data1;

    echo '<hr>';
    // retuen the multiple  data
    function calc($a,$b){
        $res1=$a+$b;
        $res2=$a-$b;
        $res3=$a*$b;
        $res4=$a/$b;
        
        // return($res1);
        // return($res2);
        // return($res3);
        // return($res4);

        // return($res1,$res2,$res3,$res4);

        return([$res1,$res2,$res3,$res4]);
    }
    $arr=calc(20,10);
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    
    

    

    
    
    
    
    ?>





</body>

</html>