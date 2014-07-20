<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Δήλωση Συγγραμμάτων</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/foithths.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="../scripts/drop_down_log_in.js"></script>
<script src="../scripts/simple_s.js"></script>



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
        
        <div id="blue_l" style="margin-top:40px;">Τρέχον εξάμηνο:</div><div id="black_l">Εαρινό 2014</div>
        
        <form action="oristikh_upobolh.php" method="GET">
        
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
						
						$counter = "aa";
						$library = array();
						
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
										/***********************************/
										
										$ulo = mysqli_query($con, "SELECT * FROM Bibliopwleia_has_Suggrammata WHERE Suggrammata_ISBN = '$ISBN';");
										
										while($rara = mysqli_fetch_assoc($ulo))
										{
											extract($rara);										
											$ulu = mysqli_query($con, "SELECT * FROM Bibliopwleia WHERE idBibliopwleia = '$Bibliopwleia_idBibliopwleia';");
										}										
										/***********************************/
																				
										echo "<div id=\"parousiash_1\">
												<div id=\"teleies\"><input type=\"radio\" name=\"bib_1\" id=\"bib_1\" value=\"$kwdikos_bibliou\"></div><div id=\"eikona\"><img src=\"$eikona\" />
												 </div>
												 <div id=\"keimeno_sug\">
												 	[$kwdikos_bibliou]
													$titlos
													$tupos_suggrammmatos<br/>
													$suggrafeas
													$etos_ekdoshs
													$ekdoseis
													ISBN[$ISBN]
													
													<div id=\"more_info\" onclick=\"myFunction('$counter')\">ΟΔΗΓΙΕΣ ΠΑΡΑΛΑΒΗΣ</div>";
													
													while($arr = mysqli_fetch_assoc($ulu))
													{
														extract($arr);
														echo"<div id=\"$counter\" style=\"display:none;\">
																<div id=\"more_more\">
																	<table>
																	<tr>
																	<td>Διεύθυνση</td>
																	<td>$dieuthunsh</td>
																	</tr>
																	<tr>
																	<td>Ταχυδρομικός Κώδικας</td>
																	<td>$t_k</td>
																	</tr>
																	<tr>
																	<td>Email</td>
																	<td>$e_mail</td>
																	</tr>
																	<tr>
																	<td>Fax</td>
																	<td>$fax</td>
																	</tr>
																	<tr>
																	<td>Σταθερό Τηλέφωνο</td>
																	<td>$thlefwno</td>
																	</tr>
																	<tr>
																	<td>Ώρες Λειτουργίας</td>
																	<td>$wres_meres_leitourgias</td>
																	</tr>
																	<tr>
																	<td>Σημείο στο χάρτη</td>
																	<td><a href=\"$xarths\">Πατήστε εδώ</a></td>
																	</tr>
																	</table>
																	
																</div>
															</div>";
													}
													
											echo"</div>
											  </div>";
											  
										$counter = $counter."a";
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
						
						$library = array();
						
						while($row = mysqli_fetch_assoc($results))
						{
							extract($row);
							if($eksamhno == 6)
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
										/***********************************/
										
										$ulo = mysqli_query($con, "SELECT * FROM Bibliopwleia_has_Suggrammata WHERE Suggrammata_ISBN = '$ISBN';");
										
										while($rara = mysqli_fetch_assoc($ulo))
										{
											extract($rara);										
											$ulu = mysqli_query($con, "SELECT * FROM Bibliopwleia WHERE idBibliopwleia = '$Bibliopwleia_idBibliopwleia';");
										}										
										/***********************************/
																				
										echo "<div id=\"parousiash_1\">
												<div id=\"teleies\"><input type=\"radio\" name=\"bib_2\" id=\"bib_2\" value=\"$kwdikos_bibliou\"></div><div id=\"eikona\"><img src=\"$eikona\" />
												 </div>
												 <div id=\"keimeno_sug\">
												 	[$kwdikos_bibliou]
													$titlos
													$tupos_suggrammmatos<br/>
													$suggrafeas
													$etos_ekdoshs
													$ekdoseis
													ISBN[$ISBN]
													
													<div id=\"more_info\" onclick=\"myFunction('$counter')\">ΟΔΗΓΙΕΣ ΠΑΡΑΛΑΒΗΣ</div>";
													
													while($arr = mysqli_fetch_assoc($ulu))
													{
														extract($arr);
														echo"<div id=\"$counter\" style=\"display:none;\">
																<div id=\"more_more\">
																	<table>
																	<tr>
																	<td>Διεύθυνση</td>
																	<td>$dieuthunsh</td>
																	</tr>
																	<tr>
																	<td>Ταχυδρομικός Κώδικας</td>
																	<td>$t_k</td>
																	</tr>
																	<tr>
																	<td>Email</td>
																	<td>$e_mail</td>
																	</tr>
																	<tr>
																	<td>Fax</td>
																	<td>$fax</td>
																	</tr>
																	<tr>
																	<td>Σταθερό Τηλέφωνο</td>
																	<td>$thlefwno</td>
																	</tr>
																	<tr>
																	<td>Ώρες Λειτουργίας</td>
																	<td>$wres_meres_leitourgias</td>
																	</tr>
																	<tr>
																	<td>Σημείο στο χάρτη</td>
																	<td><a href=\"$xarths\">Πατήστε εδώ</a></td>
																	</tr>
																	</table>
																	
																</div>
															</div>";
													}
													
											echo"</div>
											  </div>";
											  
										$counter = $counter."a";
									}
								}
							}
						}
						
						mysqli_close($con);
                    
                    ?>
                
                </div>
               
            </div>   
        	            
        </div>
        
        <input style="margin-left:650px;" type="submit" id="sub_dhlwsh" name="sub_dhlwsh" value="Τελική Υποβολή" />
        
        </form>
        
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