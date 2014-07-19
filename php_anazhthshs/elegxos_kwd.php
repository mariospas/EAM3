<?php
	$con = mysqli_connect("localhost", "root", "134711Kk", "eam3");
	header('Content-Type: text/html; charset=UTF-8');
	
	mysqli_query($con, 'SET character_set_results=utf8');
	mysqli_query($con, 'SET names=utf8');
	mysqli_query($con, 'SET character_set_client=utf8');
	mysqli_query($con, 'SET character_set_connection=utf8');
	mysqli_query($con, 'SET character_set_results=utf8');
	mysqli_query($con, 'SET collation_connection=utf8_general_ci');
	
	$sql = "SELECT * FROM Suggrammata;";
	$results = mysqli_query($con, $sql);
	
	/**/
	$user_onoma = "jimmakos";
	$pass_kwd = "123";
	/**/
	
	$kwdikos = $_POST['kwdikos_'];
	
	echo"$pass_kwd" . " " . "$kwdikos" ."<br/>";
	
	if(strcmp($kwdikos, $pass_kwd) !== 0)
	{
		echo "Λάθος κωδικός πρόσβασης";
		exit();	
	}
	
	$onoma = $_POST['n_onoma'];
	$epitheto = $_POST['n_epitheto'];
	$e_mail = $_POST['n_e_mail'];
	$tel = $_POST['n_tel'];
	$kwd_pros = $_POST['n_code'];
	$epib_kwd = $_POST['n_code_con'];
	$fwto = $_POST['n_fwto'];
	
	if(!empty($onoma))
	{
		echo "$onoma"."<br/>";
		$sql = "UPDATE Foithtes SET `onoma`='$onoma' WHERE `onoma_xrhsth`='jimmakos';";
		$do = mysqli_query($sql);
		
	}
	
	if(!empty($epitheto))
	{
		
	}
	
	if(!empty($e_mail))
	{
		
	}
	
	if(!empty($tel))
	{
		
	}
	
	if(!empty($kwd_pros))
	{
		if(!empty($epib_kwd))
		{
			
		}		
	}
	
	if(!empty($fwto))
	{
		
	}
	
	
	mysqli_close($con);
	
?>