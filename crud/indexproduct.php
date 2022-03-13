<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM product ORDER BY productno DESC");
?>

<html>
<head>
<title>Homepage</title>
</head>

<body>
<a href="addproduct.php">Add New Product</a><br/><br/>

 <table width='80%' border=1>

 <tr>
<th>productno</th> <th>Price</th> <th>PCategory</th> <th>Manufacture Date</th> <th>Expiry Date</th> <th>Product Name</th><th>Brand</th>
</tr>
<?php
while($user_data = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>".$user_data['productno']."</td>";
echo "<td>".$user_data['Price']."</td>";
echo "<td>".$user_data['PCategory']."</td>";
echo "<td>".$user_data['DOM']."</td>";
echo "<td>".$user_data['DOE']."</td>";
echo "<td>".$user_data['proname']."</td>";
echo "<td>".$user_data['brand']."</td>";

 echo "<td><a href='editproduct.php?id=$user_data[productno]'>Edit</a> | <a href='deleteproduct.php?id=$user_data[productno]'>Delete</a></td></tr>";
}
?>
</table>
</body>
</html>