<?php include('config.php');
if(!isset($_SESSION['admin']))
{ ?> <script type="text/javascript">window.location.href="adminlog.php"</script>
<?php } ?>
<!DOCTYPE html>
<html>
<head>
  <title>Aroma Shop - Cart</title>
	</head>
<body>
  <!--================ Start Header Menu Area =================-->
    
	<!--================ End Header Menu Area =================-->
  
  <!-- ================ start banner area ================= -->	
				
	
	<!-- ================ end banner area ================= -->
  
  <!--================Login Box Area =================-->
			<?php $id=$_SESSION['admin']['id']; ?>
      			<h3>Change Password</h3>
						<form  method="POST" >
							<table>
                <tr>
								<td><input type="Password" name="op" placeholder="Old Password" required></td>
							
							<td><input type="Password"name="np" placeholder="New Password" required></td>
							
							
								<td><input type="Password" name="cnp" placeholder="Confirm New Password" required></td>
							
							
							
								<td><button type="submit" value="change" name="ok">Change Password</button></td>
							</tr>
            </table>
						</form>
	<!--================End Login Box Area =================-->
<?php 
if(isset($_POST['ok'])){
$o=$_POST['op'];
$n=$_POST['np'];
$cp=$_POST['cnp'];
$q1=mysqli_query($connection,"SELECT * FROM adminlog WHERE id ='$id'");
$row=mysqli_fetch_array($q1);
if($row[2]==$o)
{
	if ($n==$cp)
	{
	  $q1=mysqli_query($connection,"UPDATE adminlog SET pass='$n' WHERE id ='$id'");
	  if($q1)
	  { ?>
	  		<script type="text/javascript">alert("Password Changed successfully!!");</script>
	  		<script type="text/javascript">window.location.href="adindex.php"</script>
	 <?php }
	 else {
	 	echo mysqli_error($connection);
	 	}	
	}
	else
	{?>
	  		<script type="text/javascript">alert("New Passwords did not match!!");</script>
	  		<script type="text/javascript">window.location.href="cpassadm.php"</script>
	<?php }
}
else
{?>
	  		<script type="text/javascript">alert("Old Password did not match!!");</script>
	  		<script type="text/javascript">window.location.href="cpassadm.php"</script>
	<?php

}
}
?>
</body>
</html>
