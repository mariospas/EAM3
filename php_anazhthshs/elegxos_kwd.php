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
            
            $kwdikos = $_POST['kwdikos_'];
			$eksodos = 0;
            
            if(strcmp($kwdikos, $pass_kwd) !== 0)
            {
                echo "<div id=\"kefalides_selidwn\">Λάθος κωδικός πρόσβασης</div>";
                $eksodos = 1;	
            }
            
			if($eksodos == 0)
			{
				$onoma_ = $_POST['n_onoma'];
				$epitheto_ = $_POST['n_epitheto'];
				$e_mail_ = $_POST['n_e_mail'];
				$tel_ = $_POST['n_tel'];
				$kwd_pros_ = $_POST['n_code'];
				$epib_kwd_ = $_POST['n_code_con'];
				$fwto_ = $_POST['n_fwto'];
				
				$sfalma = array();
				
				if(!empty($onoma_))
				{		
					$sql = "UPDATE `eam3`.`Foithtes`
					SET
					`onoma` = '$onoma_'
					WHERE `onoma_xrhsth` = '$user_onoma';";
					
					$results = mysqli_query($con, $sql) or $sfalma[] = "Νέο Όνομα";
				}
				
				if(!empty($epitheto_))
				{
					$sql = "UPDATE `eam3`.`Foithtes`
					SET
					`epitheto` = '$epitheto_'
					WHERE `onoma_xrhsth` = '$user_onoma';";
					
					$results = mysqli_query($con, $sql) or $sfalma[] = "Νέο Επίθετο";
				}
				
				if(!empty($e_mail_))
				{
					$sql = "UPDATE `eam3`.`Foithtes`
					SET
					`e_mail` = '$e_mail_'
					WHERE `onoma_xrhsth` = '$user_onoma';";
					
					$results = mysqli_query($con, $sql) or $sfalma[] = "Νέο e-mail";
				}
				
				if(!empty($tel_))
				{
					$sql = "UPDATE `eam3`.`Foithtes`
					SET
					`thlefwno` = '$tel_'
					WHERE `onoma_xrhsth` = '$user_onoma';"; 
					
					$results = mysqli_query($con, $sql) or $sfalma[] = "Νέο Τηλέφωνο";
				}
				
				if(!empty($kwd_pros_))
				{
					if(empty($epib_kwd_))
					{
						echo "<div id=\"kefalides_selidwn\">ΣΦΑΛΜΑ!!!: Πρέπει να συμπληρώσετε και το πεδίο Επιβεβαίωση Νέου Κωδικού Πρόσβασης</div>"."<br/>";
						$eksodos = 2;		
					}
					else
					{
						if(strcmp($kwd_pros_, $epib_kwd_) !== 0)
						{
							echo "<div id=\"kefalides_selidwn\">ΣΦΑΛΜΑ!!!: Διαφορετικές τιμές στον Νέο Κωδικό Πρόσβασης και στην Επιβεβαίωση Νέου Κωδικού Πρόσβασης. Το πεδίο Επιβεβαίωση Νέου Κωδικού Πρόσβασης θα πρέπει να έχει την ίδια τιμή με το πρώτο.</div>"."<br/>";	
							$eksodos = 2;
						}
						
						$sql = "UPDATE `eam3`.`Foithtes` SET `kwdikos` = '$kwd_pros_' WHERE `onoma_xrhsth` ='$user_onoma';";
						
						$results = mysqli_query($con, $sql) or $sfalma[] = "Νέος Κωδικός Πρόσβασης";
					}	
				}
				
				if(!empty($fwto_))
				{
				}
				
				
				if((empty($sfalma)) && ($eksodos !== 2))
				{
					echo"<div id=\"kefalides_selidwn\">
							Οι αλλαγές έγιναν με επιτυχία!
							</div>";
				}
				
				else
				{
					foreach($sfalma as $row)
					echo"<div id=\"kefalides_selidwn\">
							Σφάλμα στην αλλαγή του πεδίου: \"$row\"
							</div>";	
				}
			}
            
            mysqli_close($con);
            
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