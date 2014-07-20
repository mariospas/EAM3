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
        // Connects to your Database
        $con = mysqli_connect("localhost", "root", "134711Kk", "eam3");
        header('Content-Type: text/html; charset=UTF-8');
		
		mysqli_query($con, 'SET character_set_results=utf8');
		mysqli_query($con, 'SET names=utf8');
		mysqli_query($con, 'SET character_set_client=utf8');
	    mysqli_query($con, 'SET character_set_connection=utf8');
		mysqli_query($con, 'SET character_set_results=utf8');
		mysqli_query($con, 'SET collation_connection=utf8_general_ci');
        
        //mysqli_query('SET NAMES utf8');
        
       // mysqli_query('SET CHARACTER SET cp1250');
        
        //error_reporting(E_ALL);
        //ini_set('display_errors', 1);
        
        //Diabazw thn eisodo
        
        $all_string = $_GET['aplh_anazhthsh'];
        
        if($all_string == NULL)
		{
			echo"<div id=\"kefalides_selidwn\">
			<meta http-equiv=\"refresh\" content=\"3;url=aplh_anazhthsh.php\"/>
			Δεν έγινε εισαγωγή στην φόρμα. Επιστροφή στην <a href=\"aplh_anazhthsh.php\">Αναζήτηση</a>
			</div>";
			exit();	
		}
        
        //echo "$all_string"."<br/>";
        
        $tok = strtok($all_string, " ,;");
        
        //Diabazw apo thn bash
        
        $sql = "SELECT * FROM Suggrammata";
        $results = mysqli_query($con, $sql);
        
        $data = array();
		$array = array();
        
        while ($row = mysqli_fetch_assoc($results))
        {
            $data[] = $row;
			extract($row);
			$array[$ISBN] = 0;
        }
        /*
        foreach($data as $row)
        {
            extract($row);
        }
        */
        //Psaxnw gai tautish
        
        $telos = 0;
        
        while($tok !== false)
        {
            //echo "$tok"."<br/>";
            $exist = 0;
            foreach($data as $row)
            {
				$exist = 0;
                extract($row);
                
                if(is_numeric($tok))
                {	
                    //echo "$arithmos_ekdosh" . " " . "$arithmos_tomou" . " " . "$etos_ekdoshs" . "<br/>";
                    
                    if( ($arithmos_ekdoshs == (int)$tok) || ($arithmos_tomou == (int)$tok)  || ($etos_ekdoshs == (int)$tok) || ((int)$kwdikos_bibliou == (int)$tok))
                    {
						//echo "1 $tok"."<br/>";
                        //echo "aaaaaaaa"."<br/>";
                        if($array[$ISBN] != 1)
                        {
                            $array[$ISBN] = 1;
                            //echo "$eikona"."<br/>";
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
                            $telos++;							
                        }
                    }
                }
                
                else
                {
					if( (strcmp($ISBN,$tok) == 0) || (strcmp($titlos,$tok) == 0) || (strcmp($titlos_tomou,$tok) == 0) || (strcmp($upotitlos,$tok) == 0) ||  (strcmp($tupos_suggrammatos,$tok) == 0) || (strcmp($diatheths_ekdoths,$tok) == 0) || (strcmp($ekdoseis,$tok) == 0) )
					{
						//echo "2 $tok"."<br/>";						
						if($array[$ISBN] != 1)
						{
							$telos++;
							$exist = 1;
							$array[$ISBN] = 1;
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
					
					echo "AAAAAAAAAAAAAAAAAAAAAAA"."<br/>";
					
					if($exist !== 1)
					{
						$sug = strtok($suggrafeas, " ,;");
						echo "BBBBBBBBBBBBBBBBBBB"."<br/>";
						while($sug !== false)
						{
							//echo "3 $sug"."<br/>";
							if(strcmp($sug,$tok) == 0)
							{
								if($array[$ISBN] !== 1)
								{
									$exist = 1;
									$telos++;
									$array[$ISBN] = 1;
									
									//echo "TITLOS" . "$titlos" . "<br/>";	
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
							//if($exist == 1) break;
							$sug = strtok(" ,;");
						}						
					}
					
					if(exist !== 1)
					{
						$key = strtok($lekseis_kleidia, " ;,");
						echo "CCCCCCCCCCCCCCCCCC"."<br/>";
						while($key !== false)
						{	
							//echo "4 $key"."<br/>";					
							if(strcmp($key, $tok) == 0)
							{																
								if($array[$ISBN] !== 1)
								{
									$telos++;
									$exist = 1;
									$array[$ISBN] = 1;
									//echo "TITLOS" . "$titlos" . "<br/>";	
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
							//if($exist == 1) break;
							$key = strtok(" ;,");
						}						                      
                    }                   
                }		
            }	
            $tok = strtok(" ,;");
        }
        
        if($telos == 0)
		{
			echo"<div id=\"kefalides_selidwn\">
			<meta http-equiv=\"refresh\" content=\"3;url=aplh_anazhthsh.php\"/>
			<a href=\"../aplh_anazhthsh.php\">Δεν βρέθηκαν Συγγράμματα</a>
			</div>";
			exit();	
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