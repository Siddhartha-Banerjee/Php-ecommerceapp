<?php

$host='localhost';
$username='root';
$password='';
$dbname='test';
$connection=mysqli_connect($host,$username,$password,$dbname) or die("Unable to connect MYSQL Server ERROR:".mysqli_error($connection));
date_default_timezone_set('Asia/Kolkata');
$d=time();
$a= date("Y-m-d H:i:s", $d);
echo $a;
$q=mysqli_query($connection,"INSERT INTO o VALUES('$a')");
if($q)
echo "OK";
else
echo mysqli_error($connection);
?>