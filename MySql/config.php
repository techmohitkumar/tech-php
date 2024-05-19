<?php
// create database connection
// type 1 : 

// host-name  : localhost
// user-name : root
// user-password :
// database-name : project-name
// mysqli_connect("localhost","root","","student.com");


// type 2
// $DBhost="localhost";
// $DBuser="root";
// $DBpass="";
// $DBname="student.com";
// mysqli_connect($DBhost,$DBuser,$DBpass,$DBname);

// type 3 Constant
// define("DBHOST","localhost");
// define("DBUSER","root");
// define("DBPASS","");
// define("DBNAME","student.com");
// mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);


//  type 4 Framework

// $dbInfo=array("localhost","root","","student.com");
// mysqli_connect($dbInfo[0],$dbInfo[1],$dbInfo[2],$dbInfo[3]);

// type 5 

$dbInfo=array("host"=>"localhost","user"=>"root","pass"=>"","dbname"=>"student.com");

$dbCon=mysqli_connect($dbInfo["host"],$dbInfo["user"],$dbInfo["pass"],$dbInfo["dbname"]);















?>