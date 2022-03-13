<?php
mysql_connect("localhost","root","","password") or die("could not connect");
mysql_select_db("medicine") or die("Could not find db!");
$utput ='';

if(isset($_POST['search'])){
 	$searching = $_POST['search'];
 	$searching = preg_replace("#[0-9a-z]#i","",searching);

 	$query = mysql_query("SELECT * FROM stock_details WHERE product name Like '%$searching%'") or die ("Could not search");
 	$count = mysql_num_rows($query);
 	if($count==0){
 		$output = 'There is no search result!';}
 	else {
 		while($row = mysql_fetch_array($query)){
 			$fname = $row['product_name'];
 			$id= $row [ 'id'];
 			$output .= '<div>'.$fname.''.$id.'</div>' ;
 		}
 	}

}
?>
