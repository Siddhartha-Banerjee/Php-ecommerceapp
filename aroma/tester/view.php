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
		<?php $q=mysqli_query($connection,"SELECT * FROM orders JOIN products JOIN customers WHERE orders.pid = products.id AND customers.id=orders.cusid");
		while($row=mysqli_fetch_array($q)) { ?>
		<tr>
			<td><?php echo $row['Email'] ?></td>
			<td><?php echo $row['pname'] ?></td>
			<td><?php echo $row['price']?></td>
			<td><?php echo $row[3] ?></td>
			<td><?php echo $row[4] ?></td>
			<td><?php echo $row[5]?></td>
			

		</tr>
	<?php } ?>
	</tbody>
</table>
<a href="adlogout.php">Logout</a>
</body>
</html>