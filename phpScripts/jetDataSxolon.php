<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	$con = mysqli_connect("localhost", "root", "134711Kk", "eam3");
	if(!$con)
	{
		die("Connection Failed".mysqli_error());		
	}
	
	$idrima = mysql_real_escape_string($_POST['idruma']);
	
	if ( $idrima == 'EKPA' )
	{
		echo "TRUE<br>";	
	}
	
	
	//$query = "SELECT * FROM dd_vals WHERE category='$choice'";
	
	//$result = mysql_query($query);
		
	//while ($row = mysql_fetch_array($result)) {
   //		echo "<option>" . $row{'dd_val'} . "</option>";
	//}
?>