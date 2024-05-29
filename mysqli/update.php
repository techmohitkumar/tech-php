<?php 
require_once 'config.php';
 $query="SELECT * FROM  `userdata`";
 $data=mysqli_query($dbCon,$query);

 if(isset($_POST['update'])){
    extract($_POST);
    // $query="UPDATE `usersdeta` SET `first`='$first',`last`='$last',`email`='$email',`mobile`='$mobile',`course`='$course',`password`='$password' WHERE `id`='$hid'";
    $query="UPDATE `userdata` SET `id`='[value-1]',`first`='[value-2]',`last`='[value-3]',`email`='[value-4]',`mobile`='[value-5]',`course`='[value-6]',`password`='[value-7]' WHERE 1
    // ";
      mysqli_query($dbCon,$query);
        header("location:update.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php require_once 'head.php';?>

<?php


    if(@$_GET['action']=='Edit'){

        $id=$_GET['id'];

        $query="SELECT * FROM  `userdata` WHERE `id`=$id";
        $data=mysqli_query($dbCon,$query);
        $res=mysqli_fetch_array($data);
        // print_r($res);
   ?>

   <center>
    <div class="box5">
    <form method="post">
    <input type="hidden" name="hid" value="<?php echo $res['id']?>">
    <input type="text" placeholder=" Fast Name" name="first" value="<?php echo $res['first']?>"/>
    <input type="text" placeholder=" Last Name" name="last"  value="<?php echo $res['last']?>"/>
    <input type="email" placeholder=" Enter Email" name="email"  value="<?php echo $res['email']?>"/>
    <input type="text" placeholder=" Enter Mobile" name="mobile"  value="<?php echo $res['mobile']?>"/>
    <input type="text" placeholder=" Enter course" name="course"  value="<?php echo $res['course']?>"/>
    <input type="password" placeholder=" Enter password" name="password"  value="<?php echo $res['password']?>"/>
    <input type="submit" value="update" name="update" >


    </form>
    </div>
   </center>

<?php
  }
else{
?>
  <table border="1" width="90%">
    <?php
    while($res=mysqli_fetch_array($data)){
    // echo "<pre>";
    // print_r($res);
    // echo "</pre>";   
      ?>
      <tr>
        <td><?php echo $res['id'];?></td>
        <td><?php echo $res['first'];?></td>
        <td><?php echo $res['last'];?></td>
        <td><?php echo $res['email'];?></td>
        <td><?php echo $res['mobile'];?></td>
        <td><?php echo $res['course'];?></td>
        <td><?php echo $res['password'];?></td>
        <td> <a href="?id=<?php echo $res['id'];?>&action=Edit">Edit</a></td>

      </tr>
     <?php
    }
    ?>

  </table>


<?php
}
?>




<?php require_once 'footer.php';?>  
</body>
</html>
