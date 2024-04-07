   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   </head>
   <body>
    <form method="post" action="">
    <input type="number" name="num" placeholder="Enter the value">
    <input type="submit" name="res" value="Result">
    </form>
   </body>
   </html>
  
<?php
if(isset($_POST)){
$num=$_POST['num'];

if($num==1){
    echo "<h1> One</h1>";

}
 else if($num==2){
    echo "<h1>Two</h1>";

}
else if($num==3){
    echo "<h1>Three</h1>";

}
else if($num==4){
    echo "<h1>Four</h1>";

}
else if($num==5){
    echo "<h1>Five</h1>";

}
else if($num==6){
    echo "<h1>Six</h1>";

}
else{
    echo "<h2> not found</h2>";
}
}
?>