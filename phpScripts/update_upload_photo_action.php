<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Εγγραφή</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="../scripts/checkFileSize.js"></script>
<style>

#cropBTN
{
	color:#F4080C;
	font-size:24px;
	background-color:#C8E90C;
}

</style>

</head>

<body onLoad="init()">

<div id="wrapper">
	<!--ARXH PANW MEROS-->
	<div id="header_gen">
    
    	<?php include("../include_with_php/logo.php"); ?>    	
        
        <?php include("config.php"); ?>
        
    </div>
    
    <!--TELOS PANW MEROS-->
    
    <!--ARXH MESSAIO MEROS-->
<div id="mid">
		<?php include("../include_with_php/gen_menu.php"); ?>
		<?php
        
            //error_reporting(E_ALL);
            //ini_set('display_errors', 1);
        
            // Connects to your Database
            $con = mysqli_connect("localhost", "root", "134711Kk", "eam3");
            if(!$con)
            {
                die("Connection Failed".mysqli_error());		
            }
            
            
            //This is the directory where images will be saved
            $target = "foithths/dokupload/xrhstes/";
            $target = $target . basename( $_FILES['photo']['name']);
            //echo $target;
            //echo "<br>";
            
            //This gets all the other information from the form
            
            $name = $_POST['onoma'];
            $epitheto = $_POST['epitheto'];     //bandMember
            $pic = ($_FILES['photo']['name']);
            if(empty($pic))
            {
                $target = "foithths/dokupload/xrhstes/default.jpg";
            }
            $role = ($_POST['role']);
            $username = ($_POST['onomaxristi']);
            $email = ($_POST['taxudromio']);
            $password = $_POST['password'];
            $thl = ($_POST['thl']);
            $idrima = ($_POST['idruma']);
            $tmhma = ($_POST['tmhma']); 
            $aritmos_mhtroo = ($_POST['arithmos_mhtroou']);
            $eksamhno = ($_POST['eksamhno']);
            
            
            $ext = substr($pic, strrpos($pic, '.') + 1);
            echo "<br>";
            
            
            if (  ($ext != "jpg")  &&  ($ext != "jpeg")  &&  ($ext != "png") && ($ext != NULL)  )
            {
                echo "<div id=\"kefalides_selidwn\">Δεχόμαστε μόνο αρχεία με κατάληξη .jpg , .jpeg και .png .Παρακαλούμε προσπαθήστε ξανά!</div>";
                return;
            }
        
                     
            mysqli_query($con, 'SET character_set_results=utf8');
            mysqli_query($con, 'SET names=utf8');
            mysqli_query($con, 'SET character_set_client=utf8');
            mysqli_query($con, 'SET character_set_connection=utf8');
            mysqli_query($con, 'SET character_set_results=utf8');
            mysqli_query($con, 'SET collation_connection=utf8_general_ci');
            
            $erotima_username = mysqli_query($con, "SELECT onoma_xrhsth FROM Foithtes WHERE onoma_xrhsth = '$username'");
            $username_check = mysqli_fetch_assoc($erotima_username);
            
            if(!strcmp($username,$username_check))
            {
                echo "<div id=\"kefalides_selidwn\">Αυτό το Όνομα Χρήστη υπάρχει ήδη <br><br>
						<p style=\"size:15; font-weight:normal;\">Αυτόματη μετάβαση στην Εγγραφή ή πατήστε <a href=\"eggrafh.php\">εδώ</a></p>
						</div>";
				echo "<meta http-equiv=\"refresh\" content=\"5;url=eggrafh.php\"/>";
                return;
            }
            
            $erotima_email = mysqli_query($con, "SELECT e_mail FROM Foithtes WHERE e_mail = '$email'");
            $email_check = mysqli_fetch_assoc($erotima_email);
            
            if(!strcmp($email,$email_check))
            {
                echo "<div id=\"kefalides_selidwn\">Αυτό το e-mail χρησιμοποιείται ήδη 
						<br><br>
						<p style=\"size:15; font-weight:normal;\">Αυτόματη μετάβαση στην Εγγραφή ή πατήστε <a href=\"eggrafh.php\">εδώ</a></p>
						<br></div>";
				echo "<meta http-equiv=\"refresh\" content=\"5;url=eggrafh.php\"/>";
                return;
            }
            
            $erotima_a_m = mysqli_query($con, "SELECT Arithmoi_mhtrwou FROM Foithtes WHERE Arithmoi_mhtrwou = '$aritmos_mhtroo'");
            $a_m_check = mysqli_fetch_assoc($erotima_a_m);
            
            if(!strcmp($aritmos_mhtroo,$a_m_check))
            {
                echo "<div id=\"kefalides_selidwn\">Αυτός ο Αριθμός Μητρώου έχει ήδη δηλωθεί<br>
					 <br><br>
						<p style=\"size:15; font-weight:normal;\">Αυτόματη μετάβαση στην Εγγραφή ή πατήστε <a href=\"eggrafh.php\">εδώ</a></p>
					</div>";
				echo "<meta http-equiv=\"refresh\" content=\"5;url=eggrafh.php\"/>";
                return;
            }
            
            
                
            
            
            //$sql = "SELECT * FROM Grammateia";
            $sql = 	"INSERT INTO Foithtes(onoma,epitheto,onoma_xrhsth,e_mail,kwdikos,thlefwno,fwtografia,idruma,tmhma,eksamhno,Arithmoi_mhtrwou_a_m)
        VALUES('$name','$epitheto','$username','$email','$password','$thl','$target','$idrima','$tmhma','$eksamhno','$aritmos_mhtroo')";
            $results = mysqli_query($con, $sql);
            if($results) echo "<div id=\"kefalides_selidwn\">Η εγγραφή ολοκληρώθηκε με επιτυχία  <br></div>
								<meta http-equiv=\"refresh\" content=\"5;url=index.php\"/>
								";
            else 
			{
				echo "<div id=\"kefalides_selidwn\">Ο Αριθμός Μητρώου που δηλώσατε δεν αντιστοιχεί στο Ίδρυμα και στην σχολή που διαλέξατε.Βεβαιωθήτε ότι ό αριθμός σας είναι σωστός και προσπαθήστε ξανά! <br>
				 <br><br>
						<p style=\"size:15; font-weight:normal;\">Αυτόματη μετάβαση στην Εγγραφή ή πατήστε <a href=\"eggrafh.php\">εδώ</a></p>
				</div>";
				echo "<meta http-equiv=\"refresh\" content=\"5;url=eggrafh.php\"/>";
				return;
			}
            
            
            
            
            
            //Writes the photo to the server
            if(empty($pic))
            {
                echo "<br>";
                
                echo "<div id=\"kefalides_selidwn\">
							<canvas id=\"canvas1\" width=\"50\" height=\"50\" style=\"background:url({$target}); background-repeat:no-repeat; background-size:50px 50px; -webkit-border-radius: 50px; -moz-border-radius: 50px; border-radius: 50px;\">
							This text is displayed if your browser does not support HTML5 Canvas.
						  </canvas>
					</div>
                ";
            }
            else
            {
            
                if( (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) && !empty($pic))
                {
                    echo "<br>";
                    
                    echo "<div id=\"kefalides_selidwn\">
							<canvas id=\"canvas1\" width=\"50\" height=\"50\" style=\"background:url({$target}); background-repeat:no-repeat; background-size:50px 50px; -webkit-border-radius: 50px; -moz-border-radius: 50px; border-radius: 50px;\">
									This text is displayed if your browser does not support HTML5 Canvas.
								  </canvas>
							</div>
                    ";
            
            
                }
                else {
                
                    //Gives and error if its not
                    echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\"/>
					<div id=\"kefalides_selidwn\">Συγγνώμη η εικόνα σας δεν μπόρεσε να ανέβει. Προσπαθήστε ξανά!</div>";
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
	






</body>
</html>