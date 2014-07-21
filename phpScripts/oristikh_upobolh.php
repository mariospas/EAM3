<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Οριστική Υποβολή</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/foithths.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="../scripts/drop_down_log_in.js"></script>

</head>
<body>

<div id="wrapper">
	<!--ARXH PANW MEROS-->
	<div id="header_gen">
    
    	<?php include("foithths/include_with_php/logo.php"); ?>    	
        
        <?php 
			include("config.php");
		?>
        
        <?php
			if(isset($_SESSION[user]))
			{
				echo "<div id=\"logo_foit\">
						<img src=\"images/foitites.png\" width=\"207\" height=\"70\" wid />
					</div>"; 
			}
		?>
        
    </div>
    <!--TELOS PANW MEROS-->
    
    <!--ARXH MESSAIO MEROS-->
    <div id="mid">
    
    	<?php
			 include("foithths/include_with_php/gen_menu.php"); 
			
			if(isset($_SESSION[user]))
			{
				include("foithths/include_with_php/gen_menu_foit.php"); 
			}
		?>
        
        <?php
		
		$con = mysqli_connect("localhost", "root", "134711Kk", "eam3");
		
		mysqli_query($con, 'SET character_set_results=utf8');
		mysqli_query($con, 'SET names=utf8');
		mysqli_query($con, 'SET character_set_client=utf8');
	    mysqli_query($con, 'SET character_set_connection=utf8');
		mysqli_query($con, 'SET character_set_results=utf8');
		mysqli_query($con, 'SET collation_connection=utf8_general_ci');
		
		/**********/
		$user_onoma = $_SESSION[user];		
		/*********/
		
		$telos = 0;
		$here_1 = $_GET['bib_1'];
		$here_2 = $_GET['bib_2'];
		
		if(!empty($here_1))
		{
			$telos = 1;
			$sql_1 = "SELECT * FROM Suggrammata WHERE kwdikos_bibliou='$here_1';";	
			$result_1 = mysqli_query($con, $sql_1);		
		}
		
		if(!empty($here_2))
		{
			$telos = 1;
			$sql_2 = "SELECT * FROM Suggrammata WHERE kwdikos_bibliou='$here_2';";
			$result_2 = mysqli_query($con, $sql_2);	
		}
		
		if($telos == 0)
		{
			echo "<div id=\"kefalides_selidwn\" style=\"font-weight:normal;\">
				   <meta http-equiv=\"refresh\" content=\"3;url=dhlwsh_suggrammatwn.php\"/>
				  Δεν επιλέξατε κανένα σύγγραμμα
				   </div>";	
			return(0);
		}
		
		$sql_3 = "SELECT * FROM Foithtes WHERE onoma_xrhsth='$user_onoma';";
		$result_3 = mysqli_query($con, $sql_3);
		
		$array = array();
		
		while($row_3 = mysqli_fetch_assoc($result_3))
		{
			$array[] = $row_3;
		}
		
		while($row_1 = mysqli_fetch_assoc($result_1))
		{
			extract($row_1);
			foreach($array as $data)
			{
				extract($data);
				
				$sql_4 = "INSERT INTO `eam3`.`Foithtes_has_Suggrammata`
						(`Suggrammata_ISBN`,
						`Suggrammata_kwdikos_bibliou`,
						`Foithtes_onoma_xrhsth`,
						`Foithtes_Arithmoi_mhtrwou_a_m`,
						`eidos`,
						`hmeromhnia_paralabhs`,
						`hmeromhnia_paradoshs`)
						VALUES
						('$ISBN',
						'$kwdikos_bibliou',
						'$onoma_xrhsth',
						'$Arithmoi_mhtrwou_a_m',
						0,
						NULL,
						'0000-00-01');";
						
				$result_4 = mysqli_query($con, $sql_4);					
			}				
		}
		
		while($row_2 = mysqli_fetch_assoc($result_2))
		{
			extract($row_2);
			foreach($array as $data)
			{
				extract($data);
				
				$sql_4 = "INSERT INTO `eam3`.`Foithtes_has_Suggrammata`
						(`Suggrammata_ISBN`,
						`Suggrammata_kwdikos_bibliou`,
						`Foithtes_onoma_xrhsth`,
						`Foithtes_Arithmoi_mhtrwou_a_m`,
						`eidos`,
						`hmeromhnia_paralabhs`,
						`hmeromhnia_paradoshs`)
						VALUES
						('$ISBN',
						'$kwdikos_bibliou',
						'$onoma_xrhsth',
						'$Arithmoi_mhtrwou_a_m',
						0,
						NULL,
						'0000-00-02');";
						
				$result_4 = mysqli_query($con, $sql_4);				
			}				
		}
		
		echo "<div id=\"kefalides_selidwn\" style=\"font-weight:normal;\">
			  Η δήλωση έγινε με επιτυχία
			   </div>";
		
		mysqli_close($con);
		
		?>
        
    </div>
    
    <!--TELOS MESSAIO MEROS-->
    
    <!--ARXH KATW MEROS-->
    <div id="footer">    	
		<?php 
	  
		  if(!isset($_SESSION[user]))
		  {		  
			include("foithths/include_with_php/stadar_bottom_menu_gen.php"); 
		  }
		  else if(isset($_SESSION[user]))
		  {
			include("foithths/include_with_php/stadar_bottom_menu_foithths.php");
		  }
		  
		  include("foithths/include_with_php/downer_footer.php");
		  
		 ?>      
	</div>
		
		<?php include("foithths/include_with_php/copyrights.php"); ?> 
    <!--TELOS KATW MEROS-->

</div>
 
</body>
</html>
        
        