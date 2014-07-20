<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="scripts/drop_down_log_in.js"></script>
<script src="scripts/lean-slider.js"></script>
<link rel="stylesheet" href="css/lean-slider.css" type="text/css" />
<link rel="stylesheet" href="css/slider-style.css" type="text/css" />


</head>

<body>	

<div id="wrapper">
	<!--ARXH PANW MEROS-->
	<div id="header_gen">
    
    	<?php include("include_with_php/logo.php"); ?>    	
        
        <?php include("include_with_php/get_in.php"); ?>
        
    </div>
    <!--TELOS PANW MEROS-->
    
    <!--ARXH MESSAIO MEROS-->
    <div id="mid">
    
    	<?php include("include_with_php/gen_menu.php"); ?> 
        
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
				$user_onoma = "jimmakos";
				$pass_kwd = "123";
            	/**/
				
				$sql = "SELECT * FROM Foithtes;";
				$results = mysqli_query($con, $sql); 
				
				while($row = mysqli_fetch_assoc($results))
				{
					extract($row);
					if(strcmp($user_onoma, $onoma_xrhsth) == 0)
					{
						echo "<div id=\"blue_l\">Φωτογραφία χρήστη:</div> <img height=\"40\" width=\"40\" src=\"$fwtografia\" /><br/>
								<div id=\"blue_l\">Όνομα:</div> <div id=\"black_l\">$onoma</div><br/>
								<div id=\"blue_l\">Επίθετο:</div> <div id=\"black_l\">$epitheto</div><br/>
								<div id=\"blue_l\">Όνομα χρήστη:</div> <div id=\"black_l\">$onoma_xrhsth</div><br/>
								<div id=\"blue_l\">e-mail:</div> <div id=\"black_l\">$e_mail</div><br/>
								<div id=\"blue_l\">Τηλέφωνο:</div> <div id=\"black_l\">$thlefwno</div><br/>
								<div id=\"blue_l\">Ίδρυμα:</div> <div id=\"black_l\">$idruma</div><br/>
								<div id=\"blue_l\">Σχολή:</div> <div id=\"black_l\">$tmhma</div><br/>
								<div id=\"blue_l\">Αριθμός Μητρώου:</div> <div id=\"black_l\">$Arithmoi_mhtrwou_a_m</div><br/>";
									
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
        
        <form action="php_anazhthshs/elegxos_kwd.php" method="POST">
        
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
                    <input type="password" id="n_code" name="n_code" />
                    <br/>
                    <br/>
                    
                    <label>*Επιβεβαίωση Νέου Κωδικού Πρόσβασης</label>
                    <br/>                    
                    <input type="password" id="n_code_con" name="n_code_con" />
                    <br/>
                    <br/>
                    
                    <label>Νέα Φωτογραφία</label>
                    <br/>                    
                    <input type="text" id="n_fwto" name="n_fwto" />
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
		<?php include("include_with_php/stadar_bottom_menu_gen.php"); ?>         
        <?php include("include_with_php/downer_footer.php"); ?>      
    </div>
    
    <?php include("include_with_php/copyrights.php"); ?> 
    <!--TELOS KATW MEROS-->
</div>

</body>
</html>