<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['Submit']))
{   
    $id = $_POST['id'];
    
	    $productno=$_POST['productno'];
        $PCategory=$_POST['PCategory'];
        $proname=$_POST['proname'];
        $brand=$_POST['brand'];
        $Price=$_POST['Price'];
	    $DOM=$_POST['DOM'];
	    $DOE=$_POST['DOE'];

	// update user data
	$result = mysqli_query($mysqli,"UPDATE Product SET productno='$productno',brand='$brand',PCategory='$PCategory',DOM='$DOM',DOE='$DOE',Price='$Price',proname='$proname' WHERE productno=$id");
    
   header("Location: indexproduct.php");
	// Redirect to homepage to display updated user in list
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
// Fetch user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM Product WHERE productno=$id");

while($user_data = mysqli_fetch_array($result))
{
	$productno = $user_data['productno'];
	$brand = $user_data['brand'];
	$proname = $user_data['proname'];
	$DOM = $user_data['DOM'];
	$DOE = $user_data['DOE'];
	$PCategory = $user_data['PCategory'];
    $Price = $user_data['Price'];
}
?>
<html>
<head>
	<title>Edit Product Data</title>
</head>

<body>
	<a href="indexproduct.php">Home</a>
	<br/><br/>

	<form name="update_user" method="post" action="editproduct.php">
		<table border="0">
			<tr>
				<td>Product No.</td>
				<td><input type="int" name="productno" value=<?php echo $productno;?>></td>
			</tr>
			<tr>
				<td>Brand</td>
				<td><input type="varchar" name="brand" value=<?php echo $brand;?>></td>
			</tr>
			<tr>
				<td>PCategory</td>
				<td><input type="text" name="PCategory" value=<?php echo $PCategory;?>></td>
			</tr>
			<tr>
				<td>DOM</td>
				<td><input type="date" name="DOM" value=<?php echo $DOM;?>></td>
			</tr>
			<tr>
				<td>DOE</td>
				<td><input type="date" name="DOE" value=<?php echo $DOE;?>></td>
			</tr>
			<tr>
				<td>Product Name</td>
				<td><input type="text" name="proname" value=<?php echo $proname;?>></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="int" name="Price" value=<?php echo $Price;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="Submit" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>