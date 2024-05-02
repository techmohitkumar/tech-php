<?php
function title($data,$tag)
{
    echo "<h$tag>{$data}</h$tag>";
}

title("Welcome to heading",1);
title("Welcome to heading",2);
title("Welcome to heading",3);
title("Welcome to heading",4);
title("Welcome to heading",5);

//  image , anchor , table(row,col)
function alink($url,$linkname)
{
    echo "<a href='$url'>$linkname</a>";
}

alink("https://codewithpunit.com","My Website");
alink("https://codewithpunit.com","My Website 1");



?>