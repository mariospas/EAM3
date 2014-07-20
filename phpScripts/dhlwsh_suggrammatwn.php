<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="../scripts/drop_down_log_in.js"></script>
<script src="../scripts/lean-slider.js"></script>
<script src="../scripts/simple_s.js"></script>
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
        
        <div id="blue_l" style="margin-top:40px;">Τρέχον εξάμηνο:</div><div id="black_l">Εαρινό 2014</div>
        
        <form>
        
        <div id="click_drop" >
        	<div id="drop_biblia">            	
        		<div id="belaki_or_1" onclick="myFunction_1('belaki_or_1', 'belaki_kath_1', 'plhrof_bibliwn_1')"><img height="10" width="10" src="images/belakia/oriz.png" />  2ο εξάμηνο
                </div>
                
                <div id="belaki_kath_1" onclick="myFunction_1('belaki_or_1', 'belaki_kath_1', 'plhrof_bibliwn_1')"><img height="10" width="10" src="images/belakia/kath.png" />  2ο εξάμηνο
                </div>
                
                <div id="plhrof_bibliwn_1">
                
					<?php
                    
						$con = mysqli_connect("localhost", "root", "134711Kk", "eam3");
						header('Content-Type: text/html; charset=UTF-8');
						
						mysqli_query($con, 'SET character_set_results=utf8');
						mysqli_query($con, 'SET names=utf8');
						mysqli_query($con, 'SET character_set_client=utf8');
						mysqli_query($con, 'SET character_set_connection=utf8');
						mysqli_query($con, 'SET character_set_results=utf8');
						mysqli_query($con, 'SET collation_connection=utf8_general_ci');
						
						/**/
						$user_onoma = "jimmakos";
						$pass_kwd = "123";
						/**/
						
						$sql = "SELECT * FROM Mathhmata;";
						$results = mysqli_query($con, $sql); 
						
						while($row = mysqli_fetch_assoc($results))
						{
							extract($row);
							if($eksamhno == 1)
							{  
								echo"<strong>[$kwdikos_mathhmatos]</strong>"." "."<strong>$onoma_mathhmatos</strong>"."<br/>";
								
								$er = "SELECT * FROM Suggrammata_has_Mathhmata WHERE Mathhmata_kwdikos_mathhmatos = '$kwdikos_mathhmatos'";
								
								$res = mysqli_query($con, $er);
								
								while($ora = mysqli_fetch_assoc($res))
								{
									extract($ora);
									
									$more = mysqli_query($con, "SELECT * FROM Suggrammata WHERE '$Suggrammata_ISBN' = ISBN;");
									while($ura = mysqli_fetch_assoc($more))
									{
										extract($ura);
										echo "<div id=\"parousiash_1\">
												 <div id=\"eikona\"><img src=\"$eikona\" />
												 </div>
												 <div id=\"keimeno_sug\">
												 	[$kwdikos_bibliou]
													$titlos
													$tupos_suggrammmatos<br/>
													$suggrafeas
													$etos_ekdoshs
													$ekdoseis
													ISBN[$ISBN]
												 </div>
											  </div>";	
									}
									
								}
							}				
							
						}
						
						mysqli_close($con);
                    
                    ?>
                
                </div>
               
            </div>
        	
        </div>
        
        <div id="click_drop" >
        	
         	 <div id="drop_biblia">            	
        		<div id="belaki_or_2" onclick="myFunction_1('belaki_or_2', 'belaki_kath_2', 'plhrof_bibliwn_2')"><img height="10" width="10" src="images/belakia/oriz.png" />  4ο εξάμηνο
                </div>
                
                <div id="belaki_kath_2" onclick="myFunction_1('belaki_or_2', 'belaki_kath_2', 'plhrof_bibliwn_2')"><img height="10" width="10" src="images/belakia/kath.png" />  4ο εξάμηνο
                </div>
                
                <div id="plhrof_bibliwn_2">
                
                </div>
               
            </div>   
        	            
        </div>
        
        
        
        </form>
        
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