<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ιστορικό</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/foithths.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="../scripts/drop_down_log_in.js"></script>
<style type="text/css">
tr td
{
	border:1px solid black;	
}
</style>
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
		
		echo"<table id=\"haha\"><tr><td>Συγγράμματα</td><td>Μαθήματα</td><td>Παραληφθέντα</td></tr>";
		
		$sql_1 = "SELECT * FROM Foithtes_has_Suggrammata WHERE Foithtes_onoma_xrhsth='$user_onoma';";
		
		$result_1 = mysqli_query($con, $sql_1);
		
		while($row = mysqli_fetch_assoc($result_1))
		{
			extract($row);
			
			$sql_100 = "SELECT * FROM Suggrammata WHERE ISBN='$Suggrammata_ISBN';";
			
			$result_100 = mysqli_query($con, $sql_100);
			
			while($lala = mysqli_fetch_assoc($result_100))
			{
				extract($lala);
			
				echo"<tr>
					<td><img src=\"$eikona\" />
						
					<div id=\"keimeno_sug\">
						[$kwdikos_bibliou]<br/>
						$titlos<br/>
						$tupos_suggrammmatos<br/>
						$suggrafeas<br/>
						$etos_ekdoshs<br/>
						$ekdoseis<br/>
						ISBN[$ISBN]	<br/>
					</div>
					</td>";
			}
			if($hmeromhnia_paradoshs == "0000-00-01")
			{
				$sql_10 = "SELECT * FROM Mathhmata WHERE kwdikos_mathhmatos = 151;";
				$result_10 = mysqli_query($con, $sql_10);
				while($row_10 = mysqli_fetch_assoc($result_10))
				{
					extract($row_10);
					echo"<td>
						<div id=\"keimeno_sug\">
							[$kwdikos_mathhmatos]<br/>
							$onoma_mathhmatos<br/>
							Εξάμηνο: $eksamhno<br/>
						</div>
						</td>
						
						<td>
						<img style=\"margin-left:30px;\" height=\"20\" width=\"20\" src=\"./images/belakia/box.png\" />
						</td>
						</tr>
						";	
				}
			}
			
			else if($hmeromhnia_paradoshs == "0000-00-02")
			{
				$sql_10 = "SELECT * FROM Mathhmata WHERE kwdikos_mathhmatos = 234;";
				$result_10 = mysqli_query($con, $sql_10);
				while($row_10 = mysqli_fetch_assoc($result_10))
				{
					extract($row_10);
					echo"<td>
						<div id=\"keimeno_sug\">
							[$kwdikos_mathhmatos]<br/>
							$onoma_mathhmatos<br/>
							Εξάμηνο: $eksamhno<br/>
						</div>
						</td>
						
						<td>
						<img style=\"margin-left:30px;\" height=\"20\" width=\"20\" src=\"./images/belakia/box.png\" />
						</td>
						</tr>
						";	
				}
			}
		}
		echo"</table>";
		
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