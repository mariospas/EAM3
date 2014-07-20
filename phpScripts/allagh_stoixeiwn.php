<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Αλλαγή Στοιχείων</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/foithths.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="../scripts/drop_down_log_in.js"></script>
<script src="../scripts/checkTwoPass.js"></script>
<script src="../scripts/checkFileSize.js"></script>



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
        	ΑΝΑΣΚΟΠΗΣΗ ΣΤΟΙΧΕΙΩΝ ΧΡΗΣΤΗ
        </div>
        
        <div id="anaskophsh">
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
				$user_onoma = $_SESSION[user];
				$sql = "SELECT kwdikos FROM Foithtes WHERE onoma_xrhsth = $user_onoma";
				$results = mysqli_query($con, $sql);
				$row = mysqli_fetch_assoc($results);
				
				$pass_kwd = $row[0];
            	/**/
				
				$sql = "SELECT * FROM Foithtes;";
				$results = mysqli_query($con, $sql); 
				
				while($row = mysqli_fetch_assoc($results))
				{
					extract($row);
					if(strcmp($user_onoma, $onoma_xrhsth) == 0)
					{
						echo "<table style=\"border:none; -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;\">
								<tr>
								<td><div id=\"blue_l\">Φωτογραφία χρήστη:</div></td>
								<td><img height=\"40\" width=\"40\" src=\"$fwtografia\" /></td>
								</tr>
								<tr>
								<td><div id=\"blue_l\">Όνομα:</div></td>
								<td><div id=\"black_l\">$onoma</div></td>
								</tr>
								<tr>
								<td><div id=\"blue_l\">Επίθετο:</div></td>
								<td><div id=\"black_l\">$epitheto</div></td>
								</tr>
								<tr>
								<td><div id=\"blue_l\">Όνομα χρήστη:</div></td>
								<td><div id=\"black_l\">$onoma_xrhsth</div></td>
								</tr>
								<tr>
								<td><div id=\"blue_l\">e-mail:</div></td> 
								<td><div id=\"black_l\">$e_mail</div></td>
								</tr>
								<tr>
								<td><div id=\"blue_l\">Τηλέφωνο:</div></td>
								<td><div id=\"black_l\">$thlefwno</div></td>
								</tr>
								<tr>
								<td><div id=\"blue_l\">Ίδρυμα:</div></td>
								<td><div id=\"black_l\">$idruma</div></td>
								</tr>
								<tr>
								<td><div id=\"blue_l\">Σχολή:</div></td>
								<td><div id=\"black_l\">$tmhma</div></td>
								</tr>
								<tr>
								<td><div id=\"blue_l\">Αριθμός Μητρώου:</div></td>
								<td><div id=\"black_l\">$Arithmoi_mhtrwou_a_m</div></td>
								</tr>
							</table>";
									
					}
				}
            	
				mysqli_close($con);
            ?>
        </div>
        
        <div id="kefalides_selidwn">
        	ΕΠΕΞΕΡΓΑΣΙΑ ΠΡΟΦΙΛ ΧΡΗΣΤΗ
        </div>
        
        <div id="upokefalida" style="text-align:left; margin-left:15px;">
        	Εισάγετε τον κωδικό πρόσβασής σας για λόγους ασφάλειας<br/>
        </div>
        
        <form action="elegxos_kwd.php" method="POST" enctype="multipart/form-data">
        
        	<div id="blue_l"><label>Κωδικός Πρόσβασης</label></div><br/>
            <input style="margin-left:15px;" type="password" id="kwdikos_" name="kwdikos_" required />
            
            <div id="upokefalida" style="text-align:left; margin-left:15px;">
                Συμπληρώστε μόνο τα πεδία που θέλετε να αλλάξετε
            </div>
        
        	<div id="main_form_1" style="height:270px;">
            	<div id="aristerh_anazhthsh">
                	<label>Νέο Όνομα</label>
                    <br/>                    
                    <input type="text" id="n_onoma" name="n_onoma" />
                    <br/>
                    <br/>
                    
                    <label>Νέο Επίθετο</label>
                    <br/>                    
                    <input type="text" id="n_epitheto" name="n_epitheto" />
                    <br/>
                    <br/>
                    
                    <label>Νέο e-mail</label>
                    <br/>                    
                    <input type="text" id="n_e_mail" name="n_e_mail" />
                    <br/>
                    <br/>
                    
                    <label>Νέο Τηλέφωνο</label>
                    <br/>                    
                    <input type="text" id="n_tel" name="n_tel" />
                    <br/>
                    <br/>
                    
                </div>
                
                <div id="deksia_anazhthsh">
                	
                    <label>*Νέος Κωδικός Πρόσβασης</label>
                    <br/>                    
                    <input type="password" id="password" name="password" /></p>
                    <br/>
                    <br/>
                    
                    <label>*Επιβεβαίωση Νέου Κωδικού Πρόσβασης</label>
                    <br/>                    
                    <input type="password" id="passwordconf" name="passwordconf" oninput="check(this)"  /></p>
                    <br/>
                    <br/>
                    
                    <label>Φωτογραφία :</label>
                    <input type="hidden" name="size" value="1048576">
                    <input type="file" name="photo" id="i_file"> </p>
                </div>
            </div>
            
            <div id="upokefalida" style="text-align:left; margin-left:15px; font-size:12px; display:inline-block;">
            (*)Αν συμπληρωθεί το πεδίο "Νέος Κωδικός Πρόσβασης" είναι υποχρεωτική <br/>και η συμπλήρωση του πεδίου "Επιβεβαίωση Νέου Κωδικού Πρόσβασης. 
        </div>
            
            <input style="display:inline-block;" type="submit" id="accept" name="accept" value="Αποδοχή αλλαγών" />
            
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