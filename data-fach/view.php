<?php
require_once 'config.php';
    // fetch : view
    //  1. step 
    $query="SELECT * FROM  `users`";
    // 2. step
    $data=mysqli_query($dbCon,$query);
    //  3. step

    // $res=mysqli_fetch_array($data);
    // echo "<pre>";
    // print_r($res);
    // echo "<pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Record</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require_once 'head.php';?>

    <table border="1" width="90%">
        <?php
        while($res=mysqli_fetch_array($data)){
            // echo "<pre>";
            // print_r($res);
            // echo "<pre>";
            ?>
        <tr>
            <td><?php echo $res['id'];?></td>
            <td><?php echo $res['name'];?></td>
            <td><?php echo $res['email'];?></td>
            <td><?php echo $res['mobile'];?></td>
            <td><?php echo $res['course'];?></td>
        </tr>
        <?php
        }



        ?>






    </table>





</body>

</html>