<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>admin index</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/component.css">
    <link rel="stylesheet" href="css/custom-styles.css">
    <link rel="stylesheet" href="css/font-awesome.css">
	
     
	 <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/font-awesome-ie7.css">

      <script src="js/jquery.mobilemenu.js"></script>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script>
    $(document).ready(function(){
        $('.menu').mobileMenu();
    });
  </script>
 
  </head>

  <body>
    <div class="header-wrapper">
      <div class="site-name">
        <h1>MEDICAL STORE MANAGEMENT SYSTEM</h1>
        <h2>welcome admin !</h2>
      </div>
    </div>
    <div class="menu">
      <div class="navbar">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fw-icon-th-list"></i>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index1.php">Home</a></li>
              <li><a href="view_supplier_details.php">VIEW SUPPLIER DETAILS</a></li>
              <li><a href="view_stock_details.php">VIEW STOCK DETAILS</a></li>
              <li><a href="view_stock_sales.php">VIEW SALES DETAILS</a></li>
              <li><a href="stock_sales.php">MAKE BILL</a></li>
              <li><a href="search2.php">SEARCH</a></li>
              <li><a href="logout.php">LOGOUT</a></li>
	
            </ul>
          </div><!--/.navbar-collapse -->
        </div>
      </div>
 
  <body>


	
	<?php
	
	


		$db = mysqli_connect('localhost','root','','medicine');

		$sql = "SELECT max(s_id) as s_id from stock_sales";
		$run = mysqli_query($db,$sql);
		$result = mysqli_fetch_assoc($run);
		$s_id_max = $result["s_id"];

		$sql2= "SELECT * from stock_sales where s_id = '$s_id_max'";
		$run2 = mysqli_query($db,$sql2);
		$row = mysqli_fetch_assoc($run2);

		
		$product_name=$row['product_name'];
		$add_quantity=$row['add_quantity'];
		$cost=$row['cost'];
		$customer_name=$row['customer_name'];
		//$cus_contact_no=stripslashes($row['cus_contact_no']);	
		$subtotal=$row['subtotal'];


	?>


	<?php

	
	echo '<center><img src="images/green_icon.png" width="80" height="80"></center>'; echo '<br/>';
	echo '<center><font face="aparajita" size="4" color="black"> MEDICINE STOCK CENTERE</font></center>'; echo '<br/>';
	echo '<center><font face="aparajita" size="5" color="black">CUSTOMER PURCHASE BILL</font></center>'; echo '<br/>';

	
	echo '<center>';
	echo '<table>';
	
	echo '<tr><td><font face="aparajita" size="4" color="#111111">Bill number</font></td>';
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;'; echo $s_id_max; echo '</font></td></tr>';
	
	echo '<tr><td><font face="aparajita" size="4" color="#111111">Name of the Purchase product</font></td>';
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;'; echo $product_name; echo '</font></td></tr>';
	 
	
	echo '<tr><td><font face="aparajita" size="4" color="#111111">Quantity</font></td>'; 
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;';	echo $add_quantity; echo '</font></td></tr>';
	
	echo '<tr><td><font face="aparajita" size="4" color="#111111">Rate per Item</font></td>';
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;'; echo $cost; echo '</font></td></tr>';
	
	echo '<tr><td><font face="aparajita" size="4" color="#111111">Name of customer</font></td>';
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;'; echo $customer_name; echo '</font></td></tr>';
	
	
	
	/*echo '<tr><td><font face="aparajita" size="4" color="#111111">Contact no of customer</font></td>';
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;'; echo $cus_contact_no; echo '</font></td></tr>';*/
	
	
	echo '<tr><td><font face="aparajita" size="4" color="#111111">Total MRP</font></td>';
	echo '<td><font face="aparajita" size="4" color="#111111">:&nbsp;&nbsp;&nbsp;'; echo $subtotal; echo '</font></td></tr>';
	
	
	echo '</table></center>';
	

	echo '<br/><br/><br/><br/><br/><font face="aparajita" size="4" color="#111111">
	<center>N.B.: PLEASE KEEP THE RECEIPT....................</center></font><br>';
	echo '<center><a href="print4.php" target="content">PRINT THE RECEIPT</a></center>';
	?>
	
</body>
      <div class="copy-rights">
      <div class="container">
        <div class="row">
  
          </div>
        </div>
      </div>
      </div>

      


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    
    
  </body>
</html>
