<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="../scripts/drop_down_log_in.js"></script>
<script src="../scripts/lean-slider.js"></script>
<link rel="stylesheet" href="../css/lean-slider.css" type="text/css" />
<link rel="stylesheet" href="../css/slider-style.css" type="text/css" />
</head>
<body>

<div id="wrapper">
	<!--ARXH PANW MEROS-->
	<div id="header_gen">
    
    	<?php include("../include_with_php/logo.php"); ?>    	
        
        <?php include("../include_with_php/get_in.php"); ?>
        
    </div>
    <!--TELOS PANW MEROS-->
    
    <!--ARXH MESSAIO MEROS-->
    <div id="mid">
    
    	<?php include("../include_with_php/gen_menu.php"); ?>
        
        <div id="kefalides_selidwn">
        Αποτελέσματα Αναζήτησης
        </div>
        
        <?php
		
		// Connects to your Database
        $con = mysqli_connect("localhost", "root", "134711Kk", "eam3");
        header('Content-Type: text/html; charset=UTF-8');
        
        mysqli_query('SET NAMES utf8');
        
        mysqli_query('SET CHARACTER SET cp1250');
        
        //error_reporting(E_ALL);
        //ini_set('display_errors', 1);
        
        //Diabazw ta koutia
		
		if(
		($ISBN_ = $_GET['isbn'] == NULL) && (
		$kwdikos_bibliou_ = $_GET['kwdikos_bibliou'] == NULL) && (
		$titlos_ = $_GET['titlos'] == NULL) && (
		$suggrafeas_ = $_GET['suggrafeas'] == NULL) && (
		$titlos_tomou_ = $_GET['titlos_tomou'] == NULL) && (
		$upotitlos_ = $_GET['upotitlos'] == NULL) && (
		$arithmos_ekdoshs_ = $_GET['arithmos_ekdoshs'] == NULL) && (
		$tupos_ = $_GET['tupos'] == NULL) && (
		$arithmos_tomou_ = $_GET['arithmos_tomou'] == NULL) && (
		$diatheths_ekdoths_ = $_GET['diatheths'] == NULL) && (
		$etos_ekdoshs_ = $_GET['etos_ekdoshs'] == NULL) && (
		$lekseis_kleidai_ = $_GET['lekseis_kleidia'] == NULL) && (
		$ekdoseis_ = $_GET['ekdoseis'] == NULL))
		{
			echo"<div id=\"kefalides_selidwn\">
			<a href=\"../suntheth_anazhthsh.php\">Δεν έγινε εισαγωγή στην φόρμα.</a>
			</div>";
			exit();
		}
		
		echo "$kwdikos_bibliou_";
		echo "$ISBN_";
		//Elegxei an mpei primary key
		$pk = 0;
		//Elegxei an brethhkan apotelesmata kai posa
		$telos = 0;
		
		$sql = "SELECT * FROM Suggrammata";
        $results = mysqli_query($con, $sql);
        
        $data = array();
		//Krataei olh th grammh gia ektupwsh sto telos
		$keeper = array();
		//Krataei ta biblia pou exoun hdh brethei
		$array = array();
        
        while ($row = mysqli_fetch_assoc($results))
        {
            $data[] = $row;
        }
		
		if($ISBN_ !== NULL)
		{
			$pk = 1;
			
			foreach($data as $row)
            {
                extract($row);
				if(strcmp($ISBN_, $ISBN) == 0)
				{
					$keeper[] = $row;
					$array[$ISBN] = 1;
					$telos++;
					break;
				}
			}
		}
		
		if($kwdikos_bibliou_ !== NULL)
		{
			foreach($data as $row)
			{
				extract($row);
				if(strcmp($kwdikos_bibliou_, $kwdikos_bibliou) == 0)
				{
					//An exei mpei to ISBN tsekarw an einai to idio suggramma
					if($pk == 1)
					{
						if(strcmp($ISBN, $ISBN_) != 0)
						{
							echo"<div id=\"kefalides_selidwn\">
								<a href=\"../suntheth_anazhthsh.php\">Διαφορετικά πρωτεύοντα στοιχεία.</a>
								</div>";
								exit();
						}
					}
					
					//An den exei mpei ISBN sunexizw
					else
					{
						$pk=1;
						$keeper[] = $row;
						$array[$ISBN] = 1;
						$telos = 1;
						break;
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
			echo"<div id=\"kefalides_selidwn\">
			<a href=\"../suntheth_anazhthsh.php\">Δεν βρέθηκαν Συγγράμματα</a>
			</div>";
			exit();	
		}	
				
		?>
        
    </div>
    
    <!--TELOS MESSAIO MEROS-->
    
    <!--ARXH KATW MEROS-->
    <div id="footer">    	
		<?php include("../include_with_php/stadar_bottom_menu_gen.php"); ?>         
        <?php include("../include_with_php/downer_footer.php"); ?>      
    </div>
    
    <?php include("../include_with_php/copyrights.php"); ?> 
    <!--TELOS KATW MEROS-->

</div>
 
</body>
</html>