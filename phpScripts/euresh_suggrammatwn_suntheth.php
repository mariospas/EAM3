<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
        
        <div id="kefalides_selidwn">
        Αποτελέσματα Αναζήτησης
        </div>
        
        <?php
		
		$con = mysqli_connect("localhost", "root", "134711Kk", "eam3");
		
		mysqli_query($con, 'SET character_set_results=utf8');
		mysqli_query($con, 'SET names=utf8');
		mysqli_query($con, 'SET character_set_client=utf8');
	    mysqli_query($con, 'SET character_set_connection=utf8');
		mysqli_query($con, 'SET character_set_results=utf8');
		mysqli_query($con, 'SET collation_connection=utf8_general_ci');
		
		//Elegxei an brethhkan apotelesmata
		$telos = 0;
		
		$data = array();
		$array = array();
		$keeper = array();
		
		$sql = "SELECT * FROM Suggrammata";
		$results = mysqli_query($con, $sql);
		
		while($row = mysqli_fetch_assoc($results))
		{
			$data[] = $row;
			extract($row);
			$array[$ISBN] = 0;
		}
				
		$Titlos = $_GET['titlos'];
		$Suggrafeas = $_GET['suggrafeas'];
		$Titlos_tomou = $_GET['titlos_tomou'];
		$Isbn = $_GET['isbn'];
		$Ypotitlos = $_GET['upotitlos'];
		$Arithmos_ekdoshs = $_GET['arithmos_ekdoshs'];
		$Tupos = $_GET['tupos'];
		$Arithmos_tomou = $_GET['arithmos_tomou'];
		$Diatheths = $_GET['diatheths'];
		$Kwdikos_bibliou = $_GET['kwdikos_bibliou'];
		$Etos_ekdoshs = $_GET['etos_ekdoshs'];
		$Lekseis_kleidia = $_GET['lekseis_kleidia'];
		$Ekdoseis = $_GET['ekdoseis'];
		
		if(!empty($Titlos))
		{
			foreach($data as $row)
			{
				extract($row);
				if(strcmp($Titlos, $titlos) == 0)
				{
					if($array[$ISBN] == 0)
					{
						$keeper[] = $row;
						$array[$ISBN] = 1;
						$telos++;	
					}
				}
			}
		}
		
		if(!empty($Suggrafeas))
		{
			foreach($data as $row)
			{
				extract($row);
				$tok = strtok($suggrafeas, " ,;");
				while($tok !== false)
				{
					if(strcmp($Suggrafeas, $tok) == 0)
					{
						if($array[$ISBN] == 0)
						{
							$keeper[] = $row;
							$array[$ISBN] = 1;
							$telos++;	
						}
					}
					$tok = strtok(" ,;");
				}
			}
		}
		
		if(!empty($Titlos_tomou))
		{
			foreach($data as $row)
			{
				extract($row);
				if(strcmp($Titlos_tomou, $titlos_tomou) == 0)
				{
					if($array[$ISBN] == 0)
					{
						$keeper[] = $row;
						$array[$ISBN] = 1;
						$telos++;	
					}
				}
			}
		}
		
		if(!empty($Isbn))
		{
			foreach($data as $row)
			{
				extract($row);
				if(strcmp($Isbn, $ISBN) == 0)
				{
					if($array[$ISBN] == 0)
					{
						$keeper[] = $row;
						$array[$ISBN] = 1;
						$telos++;	
					}
				}
			}	
		}
		
		if(!empty($Ypotitlos))
		{
			foreach($data as $row)
			{
				extract($row);
				if(strcmp($Ypotitlos, $upotitlos) == 0)
				{
					if($array[$ISBN] == 0)
					{
						$keeper[] = $row;
						$array[$ISBN] = 1;
						$telos++;	
					}
				}
			}
		}
		
		if(!empty($Arithmos_ekdoshs))
		{
			foreach($data as $row)
			{
				extract($row);
				if($Arithmos_ekdoshs == $arithmos_ekdoshs)
				{
					if($array[$ISBN] == 0)
					{
						$keeper[] = $row;
						$array[$ISBN] = 1;
						$telos++;	
					}
				}
			}
		}
		
		if(!empty($Tupos))
		{
			foreach($data as $row)
			{
				extract($row);
				if(strcmp($Tupos, $tupos) == 0)
				{
					if($array[$ISBN] == 0)
					{
						$keeper[] = $row;
						$array[$ISBN] = 1;
						$telos++;	
					}
				}
			}	
		}
		
		if(!empty($Arithmos_tomou))
		{
			foreach($data as $row)
			{
				extract($row);
				if($Arithmos_tomou == $arithmos_tomou)
				{
					if($array[$ISBN] == 0)
					{
						$keeper[] = $row;
						$array[$ISBN] = 1;
						$telos++;	
					}
				}
			}
		}
		
		if(!empty($Diatheths))
		{
			foreach($data as $row)
			{
				extract($row);
				if(strcmp($Diatheths, $diatheths) == 0)
				{
					if($array[$ISBN] == 0)
					{
						$keeper[] = $row;
						$array[$ISBN] = 1;
						$telos++;	
					}
				}
			}	
		}
		
		if(!empty($Kwdikos_bibliou))
		{
			foreach($data as $row)
			{
				extract($row);
				if(strcmp($Kwdikos_bibliou, $kwdikos_bibliou) == 0)
				{
					if($array[$ISBN] == 0)
					{
						$keeper[] = $row;
						$array[$ISBN] = 1;
						$telos++;	
					}
				}
			}	
		}		
		
		if(!empty($Etos_ekdoshs))
		{
			foreach($data as $row)
			{
				extract($row);
				if($Etos_ekdoshs == $etos_ekdoshs)
				{
					if($array[$ISBN] == 0)
					{
						$keeper[] = $row;
						$array[$ISBN] = 1;
						$telos++;	
					}
				}
			}
		}
		
		if(!empty($Lekseis_kleidia))
		{
			foreach($data as $row)
			{
				extract($row);
				$tok = strtok($lekseis_kleidia, " ,;");
				while($tok !== false)
				{
					if(strcmp($Lekseis_kleidia, $tok) == 0)
					{
						if($array[$ISBN] == 0)
						{
							$keeper[] = $row;
							$array[$ISBN] = 1;
							$telos++;	
						}
					}
					$tok = strtok(" ,;");
				}
			}
		}
		
		if(!empty($Ekdoseis))
		{
			foreach($data as $row)
			{
				extract($row);
				if(strcmp($Ekdoseis, $ekdoseis) == 0)
				{
					if($array[$ISBN] == 0)
					{
						$keeper[] = $row;
						$array[$ISBN] = 1;
						$telos++;	
					}
				}
			}	
		}
		
		if($telos !== 0)
		{
			foreach($keeper as $row)
			{
				extract($row);
				
				echo "<div id=\"parousiash\">
						<div id=\"eikona\">
							<img src = \"$eikona\" />
						</div>
						<div id=\"keimeno_sug\">
							$titlos<br/>
							Κωδικός Βιβλίου στον Εύδοξο: $kwdikos_bibliou<br/>
							Έκδοση: $arithmos_ekdoshs/$etos_ekdoshs<br/>
							Συγγραφέας: $suggrafeas<br/>
							ISBN: $ISBN<br/>
							Τύπος: $tupos_suggrammatos<br/>
							Διαθέτης/Εκδότης: $diatheths_ekdoths<br/>										
						</div>
					</div>";	
			}
		}
		
		else
		{
			echo "<div id=\"kefalides_selidwn\" style=\"font-weight:normal;\">
			<meta http-equiv=\"refresh\" content=\"3;url=suntheth_anazhthsh.php\"/>
			Δεν βρέθηκαν αποτελέσματα
			</div>";
		}
			
		
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