<html>
<head>
	<title>Add Product</title>
</head>

<body>
	<a href="indexproduct.php">Go to Home</a>
	<br/><br/>

	<form action="addproduct.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Productno</td>
				<td><input type="text" name="productno"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="Price"></td>
			</tr>
			<tr>
				<td>PCategory</td>
				<td><input type="text" name="PCategory"></td>
			</tr>
			<tr>
				<td>D.O.M.</td>
				<td><input type="date" name="DOM"></td>
			</tr>
			<tr>
				<td>D.O.E.</td>
				<td><input type="date" name="DOE"></td>
			</tr>
			<tr>
				<td>Product name</td>
				<td><input type="text" name="proname"></td>
			</tr>
			<tr>
				<td>Brand</td>
				<td><input type="text" name="brand"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$productno = $_POST['productno'];
		$Price = $_POST['Price'];
		$PCategory = $_POST['PCategory'];
		$DOM = $_POST['DOM'];
		$DOE = $_POST['DOE'];
		$proname = $_POST['proname'];
		$brand = $_POST['brand'];

		// include database connection file
		include_once("config.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO product(productno,Price,PCategory,DOM,DOE,proname,brand) VALUES('$productno','$Price','$PCategory','$DOM','$DOE','$proname','$brand')");

		// Show message when user added
		echo "Product added successfully. <a href='indexproduct.php'>View Product</a>";
	}
	?>
</body>
</html>