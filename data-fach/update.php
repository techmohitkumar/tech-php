<?php
require_once 'config.php'; 
    $query="SELECT * FROM  `users`";
    $data=mysqli_query($dbCon,$query);


    if(isset($_POST['update'])){
        extract($_POST);
        $query="UPDATE `users` SET `name`='$name',`email`='$email',`mobile`='$mobile',`course`='$course' WHERE `id`='$hid'";
        mysqli_query($dbCon,$query);
        header("location:update.php");
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

    <?php

    if(@$_GET['action']=='edit'){

        $id=$_GET['id'];

        $query="SELECT * FROM  `users` WHERE `id`=$id";
        $data=mysqli_query($dbCon,$query);
        $res=mysqli_fetch_array($data);
        // print_r($res);




        ?>
    <center>
        <form method="post">
            <input type="hidden" name="hid" value="<?php echo $res['id']?>">
            <p><input type="text" placeholder="Enter Name" value="<?php echo $res['name']?>" name="name" /></p>
            <p><input type="email" placeholder="Enter Email" value="<?php echo $res['email']?>" name="email" /></p>
            <p><input type="text" placeholder="Enter Mobile" name="mobile" value="<?php echo $res['mobile']?>" /></p>
            <p><input type="text" placeholder="Enter Course" name="course" value="<?php echo $res['course']?>" /></p>
            <input type="submit" value="update" name="update">
        </form>
    </center>

    <?php
    }
    else{
        ?>
    <table border="1" width="90%">
        <?php
        while($res=mysqli_fetch_array($data)){
            ?>
        <tr>
            <td><?php echo $res['id'];?></td>
            <td><?php echo $res['name'];?></td>
            <td><?php echo $res['email'];?></td>
            <td><?php echo $res['mobile'];?></td>
            <td><?php echo $res['course'];?></td>
            <td><a href="?id=<?php echo $res['id'];?>&action=edit">Edit </td>
        </tr>
        <?php
        }
        ?>
    </table>


    <?php

    }


   
    ?>












</body>

</html>