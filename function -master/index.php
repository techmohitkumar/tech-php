<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="head">
        <a href="./">Master App</a>
    </div>
    <div class="nav">
        <ul>
            <li><a href="./?p=home">Home</a></li>
            <li><a href="./?p=page1">page 1</a></li>
            <li><a href="./?p=page2">page 2</a></li>
            <li><a href="./?p=page3">page 3</a></li>
            <li><a href="./?p=page4">page 4</a></li>
        </ul>
    </div>
    <div class="mid">
        <?php
     @$page=$_GET['p'];
     switch($page){
        case 'home':
            echo ' <img src="./image/course-1.jpg" alt="fghjk">';
            break;
        case 'page1':
            require_once 'page-1.php';
            break;
        case 'page2':
            require_once 'page-2.php';
            break;
        case 'page3':
            require_once 'page-3.php';
            break;
        default :
        echo '<img src="./image/course-1.jpg" alt="">';
     }
    ?>
    </div>
    <div class="footer">
        <h4>Copyright &copy; 2024</h4>
    </div>

</body>

</html>