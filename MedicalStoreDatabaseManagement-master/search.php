<html>
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
              <li><a href="search.php">SEARCH</a></li>
              <li><a href="logout.php">LOGOUT</a></li>
  
            </ul>
          </div><!--/.navbar-collapse -->
        </div>
      </div>
      <div class="mini-menu">
            <label>
          <select class="selectnav">
            <option value="#" selected="">Home</option>
            <option value="#">About</option>
            <option value="#">→ Another action</option>
            <option value="#">→ Something else here</option>
            <option value="#">→ Another action</option>
            <option value="#">→ Something else here</option>
            <option value="#">Services</option>
            <option value="#">Work</option>
            <option value="#">Contact</option>
          </select>
          </label>
          </div>
    </div>
<head>
<title>search medicine</title>
<link rel="stylesheet" href="style.css">
<style>
<!--
body,td,th {
	color: green;
}
body {
	background-color: pink;
}
.style11 {font-size: 14px}
-->
			
</style>
</head>
<body bgcolor="#ffe4e1">
<div class="main_wrapper">


<div class="navbar">
<ul id="menu">

			
			</ul>
			</div>
			</div>
<div id="content">
      <br>
        <tr>
		<td>
       <center> 
       <form name="search" id="search" autocomplete="off">
	   
            MEDICINE NAME : 
            <input type="text" name="customer_search" id="customer_search"  class="text_box" size="40" onKeyUp="findmatch();">
            <input class="button" type="submit" value="Search">
         </form> 
       </center> 
        
        <div id="results">			
        </div>
        <div id="final_result">
        
		<br>
        <br>
         <center>
           <tr><td><img border="0" src="images/mmm.jpg" width="1250" height="350"/></td></tr>
         </center>
        </div>
</body>
</html>