<?php
require_once 'config.php';
    // fetch : view
    //  1. step 
    $query="SELECT * FROM  `users`";
   $data=mysqli_query($dbCon,$query);

    if(@$_GET['action']=='delete'){
        $id=$_GET['id'];
        $query="DELETE FROM `users` WHERE `id`='$id'";
        mysqli_query($dbCon,$query);
        //  header("location:delete.php");
        }
    
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
            <td><a href="?id=<?php echo $res['id'];?>&action=delete">delete</td>
        </tr>
        <?php
        }



        ?>






    </table>





</body>

</html>