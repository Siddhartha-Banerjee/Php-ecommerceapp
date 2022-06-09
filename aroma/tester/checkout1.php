<?php include('config.php');
if(!isset($_SESSION['web12']))
{ ?> <script type="text/javascript">window.location.href="login1.php"</script>
 <?php
} 
  if(isset($_POST['ok']))
  { $id=$_SESSION['web12']['id'];
    $b=$_POST['baddress'];
    $s=$_POST['saddress'];
    $a=mysqli_query($connection,"UPDATE customers SET Billing='$b',Shipping='$s' WHERE id='$id'");
    if($a)
    { 
      $c=mysqli_query($connection,"SELECT * FROM cart$id"); 
     while($row=mysqli_fetch_array($c))
     {   
      date_default_timezone_set('Asia/Kolkata');
      $d=time();
      $a= date("Y-m-d H:i:s", $d);
      $o1=mysqli_query($connection,"INSERT INTO order1 VALUES(0,'$id','$row[1]','$row[6]','$a')");
      $o=mysqli_query($connection,"INSERT INTO orders VALUES(0,'$id','$row[1]','$row[6]','$a','Placed')");
     }
    }
    $d1=mysqli_query($connection,"DELETE FROM cart$id");
    $c=$_GET['m'];
    $sum=$_GET['a'];
    if($c==1)
    { ?><script type="text/javascript">window.location.href="CardPayment/index.php?m=<?php echo $c ?>&&a=<?php echo $sum ?>";</script>
  <?php 
    }
  else
  {
    ?><script type="text/javascript">window.location.href="confirmation.php?m=<?php echo $c ?>&&a=<?php echo $sum ?>";</script>
  <?php
  }
}
?>