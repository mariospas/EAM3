<?php
	
	$con = mysql_connect("127.0.0.1", "root", "23122312abcdef12");

	if(!$con)
	{
		die("Connection Failed".mysql_error());		
	}
	
	//Connection succeed
	
	echo "You are online" . "<br/>";
	mysql_select_db("test_log_in", $con);
	
	$sql = "SELECT * FROM test_log_in.Phoithtes;";

	$result = mysql_query($sql);		
	
	$id = $_POST['onoma'];
	$psw = $_POST['password'];
	
	$found = 0;
	
	while( $row = mysql_fetch_array($result) )
	{			
		extract($row);
		
		if(strcmp($id, $idPhoithtes) == 0)	
		{
			if(strcmp($psw, $password) == 0)
			{
				echo "Welcome Mr." . " " . "$idPhoithtes";
				$found = 1;
				break;
			}			
		}
	}
	
	if($found == 0)
	{
		"<h2>ERROR</h2>";
		echo "Wrong id or password.";
	}
	
	mysql_close($con);		
?>
