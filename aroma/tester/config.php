<?php  
//database connection code
 session_start();
 $host='localhost';
 $username='root';
 $password="";
 $dbname='test';
 $connection=mysqli_connect($host,$username,$password,$dbname) or die("Unable to connect MYSQL Server ERROR:".mysqli_error($connection));
 ?>
 <?php
//var_dump($connection);

//session_start();
//$host='localhost';
//$username='id12257767_aroma';
//$password="pXZHI1kzuqLcAAeI16u$";
//$dbname='id12257767_aroma';
//$connection=mysqli_connect($host,$username,$password,$dbname) or die("Unable to connect MYSQL Server ERROR:".mysqli_error($connection));

?>