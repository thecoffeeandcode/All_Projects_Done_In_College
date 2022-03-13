<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Product details</title>

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
              <li><a href="logout.php">LOGOUT</a></li>
    
            </ul>
          </div><!--/.navbar-collapse -->
        </div>
      </div>
<br><br>
<!----- ######################################menu######################################################### -->


<center>
<fieldset>
  <center><b>LIST  OF  STOCKS</b></center>



<?php
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "medicine");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    
    // search in all table columns
    // using concat mysql function

    $query ="SELECT * FROM stock_details WHERE product_name LIKE '%$valueToSearch%' or supplier_name  LIKE '%$valueToSearch%' " ;
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `stock_details`";
    $search_result = filterTable($query);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="search2.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>id</th>
                    <th>batch_no</th>
                    <th>add_quantity</th>
                    <th>avail_quantity</th>
                    <th>cost</th>
                    <th>selling_price</th>
                    <th>date</th>
                    <th>expire_date</th>
                    <th>expire_date</th>
                    <th>product_name</th>
                    <th>supplier_name</th>
                    
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['batch_no'];?></td>
                    <td><?php echo $row['add_quantity'];?></td>
                    <td><?php echo $row['avail_quantity'];?></td>
                    <td><?php echo $row['cost'];?></td>
                    <td><?php echo $row['selling_price'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['expire_date'];?></td>
                    <td><?php echo $row['expire_date'];?></td>
                    <td><?php echo $row['product_name'];?></td>
                    <td><?php echo $row['supplier_name'];?></td>


                  
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>

