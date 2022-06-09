<?php include('config.php');
if(!isset($_SESSION['admin']))
{ ?> <script type="text/javascript">window.location.href="adminlog.php"</script>
<?php } ?>

<!DOCTYPE html>
<html>
<head>
	<title>View Orders</title>
</head>
<body>
<table border="2px" padding="3px">
	<thead>
		<th>Customer</th>
		<th>Product</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Date</th>
		<th>Status</th>
	</thead>
	<tbody>
		<?php $q=mysqli_query($connection,"SELECT orders.*,orders.id as OID,products.*,customers.* FROM orders JOIN products JOIN customers WHERE orders.pid = products.id AND customers.id=orders.cusid");
		while($row=mysqli_fetch_array($q)) { ?>
		<tr>
			<td><?php echo $row['Email'] ?></td>
			<td><?php echo $row['pname'] ?></td>
			<td><?php echo $row['price']?></td>
			<td><?php echo $row[3] ?></td>
			<td><?php echo $row[4] ?></td>
			<td>
				<a href="status.php?status=Shipped&id=<?php echo $row['OID']?>"> Shipped </a>
				<a href="status.php?status=Delivered&id=<?php echo $row['OID']?>"> Delivered </a>
			</td>
			
		</tr>
	<?php } ?>
	</tbody>
</table>
<?php 
				if(isset($_GET['status']))
				 {
				 	$id = $_GET['id'];
				 	$status = $_GET['status'];
				$q=mysqli_query($connection,"UPDATE orders SET status='$status' WHERE id='$id'");

				if(!$q)
				{
					?><script type="text/javascript">alert("<?php echo mysqli_error($connection) ?>")</script>
						<?php
				}else{
					?><script type="text/javascript">
						
					window.location.href="status.php"</script>
				<?php
				}		
				}
			
			
			?>
<a href="adlogout.php">Logout</a>
</body>
</html>