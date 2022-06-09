<?php include('config.php');
if(!isset($_SESSION['admin']))
{ ?> <script type="text/javascript">window.location.href="adminlog.php"</script>
<?php } ?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE PRODUCT</title>
</head>
<body>
	<button onclick="window.location.href = 'adindex.php';">BACK</button>
<?php $id=$_GET['id'];
 $q=mysqli_query($connection,"SELECT * FROM products WHERE id= '$id'");
 $row=mysqli_fetch_array($q); ?>
<form method="POST" enctype="multipart/form-data">
		<input type="text" name="url" value="<?php echo $row[3] ?>" hidden>
          <table>
		<tr>
			<td>Product Name</td>
		<td><input type="text" name="pname" value="<?php echo $row[1] ?>"></td>
		</tr>
		<tr>
		 <td>
		 	<select name="type">
			<option value ="">--SELECT PRODUCT TYPE--</option>
			<option value ="phone">PHONE</option>
			<option value ="s">HEADPHONE OR SPEAKER</option>
			<option value ="pb">POWERBANK</option>
			</select>
		 </td>
		</tr>
		<tr>
		<td>Image file</td>
		<td><input type="file" name="ifile"></td>
		</tr>	
   		<tr>
   			<td>Product Price</td>
		<td><input type="number" name="price" value="<?php echo $row[4] ?>"></td>
		</tr>
		<tr><td>Product Description</td>
		<td><input type="text" name="desc" value="<?php echo $row[5] ?>"></td>
		</tr>
		<tr><td>Product Screen(if applicable)</td>
		<td><input type="number" name="screen" value=<?php echo $row[6] ?>></td>
		</tr>
		<tr><td>Product RAM(if applicable)</td>
		<td><input type="number" name="ram" value=<?php echo $row[7] ?>></td>
		</tr>
		<tr><td>Product ROM(if applicable)</td>
		<td><input type="number" name="rom" value=<?php echo $row[8] ?>></td>
		</tr>
		<tr><td>Product Battery</td>
		<td><input type="number" name="battery" value="<?php echo $row[9] ?>"></td>
		</tr>
		<tr><td>Product Warrenty</td>
		<td><input type="number" name="warrenty" value="<?php echo $row[10] ?>"></td>
		</tr>
		<tr><td>Product Processor(if applicable)</td>
		<td><input type="text" name="processor" value="<?php echo $row[11] ?>"></td>
		</tr>
		<tr><td>Product Camera(if applicable)</td>
		<td><input type="text" name="cam" value="<?php echo $row[12] ?>"></td>
		</tr>
		<tr><td>Product Quantity</td>
		<td><input type="text" name="qty" value="<?php echo $row[13] ?>"></td>
		</tr>
		<tr>
		<td><input type="submit" name="ok" value="Update"></td>
		</tr>
   	</table>
   	</form>
	<?php 
     if(isset($_POST['ok']))
     { $pname=$_POST['pname'];
 		$pfile=$_POST['type'];
 		$price=$_POST['price'];
 		$desc=$_POST['desc'];
 		$screen=$_POST['screen'];
     	$ram=$_POST['ram'];
     	$rom=$_POST['rom'];
     	$battery=$_POST['battery'];
     	$warrenty=$_POST['warrenty'];
     	$processor=$_POST['processor'];
     	$cam=$_POST['cam'];
     	$qty=$_POST['qty'];
     	$source_path = $_FILES['ifile']['tmp_name'];
          $destination = $_POST['url'];
     	$up = move_uploaded_file($source_path, $destination);
     	if(!$up){
				echo $file_error;
			}
     	$desc=mysqli_real_escape_string($connection,$desc);
     	$i=mysqli_query($connection,"UPDATE products SET pname ='$pname',pfile ='$pfile',ifile ='$destination',price ='$price',descrip ='$desc',screen ='$screen',ram ='$ram',rom ='$rom',battery ='$battery',warrenty ='$warrenty',processor ='$processor',cam ='$cam',qty='$qty' WHERE id='$id'");
     	if($i)
     	{ ?> <script type="text/javascript">alert("Updated Successfully");</script>
     		<script type="text/javascript">window.location.href="delpro.php";</script>
     	<?php }
     	else{
     		echo mysqli_error($connection);
     	}

     }
	?>
<a href="adlogout.php">Logout</a>
</body>
</html>