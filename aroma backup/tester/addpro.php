<?php include('config.php');
if(!isset($_SESSION['admin']))
{ ?> <script type="text/javascript">window.location.href="adminlog.php"</script>
<?php } ?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD PRODUCT</title>
</head>
<body>
     <button onclick="window.location.href = 'adindex.php';">BACK</button>
<form method="POST" enctype="multipart/form-data">
		<table>
		<tr>
			<td>Product Name</td>
		<td><input type="text" name="pname" placeholder="PRODUCT NAME"></td>
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
		<td><input type="number" name="price" placeholder="PRICE"></td>
		</tr>
		<tr><td>Product Description</td>
		<td><input type="text" name="desc" placeholder="DESCRIPTION"></td>
		</tr>
		<tr><td>Product Screen(if applicable)</td>
		<td><input type="number" name="screen" value=0></td>
		</tr>
		<tr><td>Product RAM(if applicable)</td>
		<td><input type="number" name="ram" value=0></td>
		</tr>
		<tr><td>Product ROM(if applicable)</td>
		<td><input type="number" name="rom" value=0></td>
		</tr>
		<tr><td>Product Battery</td>
		<td><input type="number" name="battery" placeholder="BATTERY"></td>
		</tr>
		<tr><td>Product Warrenty</td>
		<td><input type="number" name="warrenty" placeholder="WARRENTY"></td>
		</tr>
		<tr><td>Product Processor(if applicable)</td>
		<td><input type="text" name="processor" placeholder="PROCESSOR(IF APPLICABLE)" value="na"></td>
		</tr>
		<tr><td>Product Camera(if applicable)</td>
		<td><input type="text" name="cam" placeholder="CAMERA(IF APPLICABLE)" value="na"></td>
		</tr>
          <tr><td>Product Quantity</td>
          <td><input type="number" name="qty" placeholder="Quantity" value=0></td>
          </tr>
		<tr>
		<td><input type="submit" name="ok"></td>
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
     	$type = $_FILES['ifile']['type'];
     	if($pfile=="phone")
     	{$q=mysqli_query($connection,"SELECT * FROM products WHERE pfile='$pfile'");
     	$count=mysqli_num_rows($q);
     	$count=$count+1;
     	}
     	if($pfile=="s")
     	{$q=mysqli_query($connection,"SELECT * FROM products WHERE pfile='$pfile'");
     	$count=mysqli_num_rows($q);
     	$count=$count+1;
     	}
     	if($pfile=="pb")
     	{$q=mysqli_query($connection,"SELECT * FROM products WHERE pfile='$pfile'");
     	$count=mysqli_num_rows($q);
     	$count=$count+1;
     	}
     	switch($type)
     	{
     		case 'image/jpg':$type=".jpg";
     						 break;
     		case 'image/JPG':$type=".jpg";
     						 break;
     		case 'image/png':$type=".png";
     						 break;
     		case 'image/PNG':$type=".png";
     						 break;
     		case 'image/jpeg':$type=".jpeg";
     						 break;
     		case 'image/JPEG':$type=".jpeg";
     						 break;
     		case 'image/gif':$type=".gif";
     						 break;
     		case 'image/GIF':$type=".gif";
     						 break;
     		case 'image/jfif':$type=".jfif";
     						 break;
     		case 'image/JFIF':$type=".jfif";
     						 break;

     	}
     	if($pfile=="phone")
     		{$destination = "img/phone/p".$count.$type;}
     		if($pfile=="s")
     		{$destination = "img/speaker/s".$count.$type;}
     		if($pfile=="pb")
     		{$destination = "img/pb/p".$count.$type;}
     	$up = move_uploaded_file($source_path, $destination);
     	if(!$up){
				echo $file_error;
			}
     	$desc=mysqli_real_escape_string($connection,$desc);
     	$i=mysqli_query($connection,"INSERT INTO products (CustomerName, ContactName, Address, City, PostalCode, Country)VALUES(0,'$pname','$pfile','$destination','$price','$desc','$screen','$ram','$rom','$battery','$warrenty','$processor','$cam','$qty')");
     	if($i)
     	{
     		echo "DATA INSERTED SUCCESSFULLY";
     	}
     	else{
     		echo mysqli_error($connection);
     	}

     }
	?>
<a href="adlogout.php">Logout</a>
</body>
</html>