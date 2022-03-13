<?php
session_start();

?>
<?php
	if(isset($_POST['submit']))
    {

	$_SESSION['add_quantity'] = $_POST['add_quantity'];
	$_SESSION['cost'] = $_POST['cost'];
	}
	
	@ $db = new mysqli('localhost', 'root', '', 'medicine');
	if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
	}
	//echo $total;
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>customer purcahse</title>

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

  <body onload="window.print{};">
    <div class="header-wrapper">
      <div class="site-name">
        <h1>MEDICAL STORE MANAGEMENT SYSTEM</h1>
        <h2>welcome admin ! Login here for enjoying our services</h2>
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
               <li><a href="view_stock_sales.php">SALES</a></li>
               <li><a href="view_stock_details.php">STOCK</a></li>
              <li><a href="view_supplier_details.php">SUPPLIER</a></li>
              <li><a href="update2_stock.php">UPDATE STOCK</a></li>
              <li><a href="date_diff0.php">UPDATE SALES</a></li>
              <li><a href="logout.php">LOGOUT</a></li>
  
            </ul>
          </div><!--/.navbar-collapse -->
        </div>
      </div>
<br><br>
<center><font size="5" color="black">UPDATE SALES ENTRY and MAKE BILL</font></center>
<center>

<form  actioN="stock_sales1.php" method="post">
<table width="800" height="150"  align="center">
<td>&nbsp;</td><td>&nbsp;</td>


<tr>
<td><h1 style="arial;"><font size="2px">Bill No</font></h1></td>
<td><input name="s_id" type="text" style="width:150px" required="required" /></td>
</tr>

<tr>
      <td><h1 style="font-family:Constantia;"><font size="2px">PRODUCT NAME</font></td>

      <td>
      
      <select size="1" class="input" maxlength="50" name="product_name" style="width:150px" required="required">
      <option></option>
  <?php
  @ $db = new mysqli('localhost', 'root', '', 'medicine');
  if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
  }
  $query = "select product_name from stock_sales";
  $result = $db->query($query);
  $num_results = $result->num_rows; 

  ?>

  <?php for ($i=0; $i <$num_results; $i++) { ?></font> 
  <font color="#008000"> <?php $row = $result->fetch_assoc();?> </font>   
  <option><font color="#008000"><?php echo  stripslashes($row['product_name']); ?></font></option>
  <?php 
  } 
  $result->free(); 
  $db->close(); 
  ?>
      </select>
      </td>
    </tr>
     <tr>
    <td align="center">&nbsp;</td>
    </tr>



<tr>
<td><h1 style="arial;"><font size="2px">QUANTITY</font></h1></td>
<td><input type="int" class="input" style="width:150px" maxlength="50" onkeypress="return numericOnly(event,this)"  name="add_quantity"/></td>
</tr>

<tr>
 <td><h1 style="font-family:arial;"><font size="2px">RATE PER ITEM</font></h1></td>
  <td><input type="int" class="input" style="width:150px" maxlength="50" onkeypress="return numericOnly(event,this)"  name="cost"/></td>
  </tr>
  
  <tr>
<td><h1 style="font-family:Constantia;"><font size="2px">DATE</font></h1></td>
<td><input name="date" type="date" style="width:150px" required="required" /></td>

</tr>

<tr>
<td><h1 style="font-family:Constantia;"><font size="2px">CUSTOMER NAME</font></h1></td>
<td><input name="customer_name" type="text" style="width:150px" required="required"/></td>
</tr>



<br>

       <tr>
		   <td></td><td><input type="reset" class="button" style="width:70px;height:30px;" value="Reset" name="reset">
		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" class="button" style="width:70px;height:30px;" value="submit" name="submit">
			</td>
		</tr>



</table>
</form>
</center>

<br><br><br><br>
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
		