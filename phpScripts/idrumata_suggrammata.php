<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
    
    	<?php 
			include("config2.php");
		?>
        
        <?php 
			if(isset($_SESSION[user]))
			{
				include("foithths/include_with_php/logo.php"); 
			}
			else if(!isset($_SESSION[user]))
			{
				echo "<div id=\"logo\">
						<a href=\"../index.php\"><img src=\"../images/logo.png\" /></a>
					  </div>
					 ";
			}
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
			 if(isset($_SESSION[user]))
			{
				include("foithths/include_with_php/gen_menu.php"); 
			}
			else
			{
				echo "<div id=\"gen_menu\">
						<div id=\"button_small\" class=\"blue\">
						<a href=\"../index.php\"><h4><strong>Αρχική Σελίδα</strong></h4></a>
						</div>
						
						<div id=\"button_small\" class=\"blue\">
						<a href=\"idrumata_suggrammata.php\"><h4><strong>Συγγράμματα Σχολών</strong></h4></a> 
						</div>
						
						<div id=\"button_small\" class=\"blue\">
						<a href=\"aplh_anazhthsh.php\"><h4><strong>Αναζήτηση Συγγραμμάτων</strong></h4></a> 
						</div>
						
						<div id=\"button_small\" class=\"blue\">
						<a href=\"#\"><h4><strong>Επικοινωνία</strong></h4></a>
						</div>
						
						<div id=\"button_small\" class=\"blue\">
						<a href=\"#\"><h4><strong>FAQ</strong></h4></a>
						</div>
					</div>
					";
			}
			
			if(isset($_SESSION[user]))
			{
				include("foithths/include_with_php/gen_menu_foit.php"); 
			}
		?>
        
        <div id="kefalides_selidwn">
        ΕΠΙΛΕΞΤΕ ΙΔΡΥΜΑ
        <br/> 
        <br/>               
        </div>        
        
        <div id="id_sug">
        <button id="button_small_2" onclick="myFunction('eth')">Εθνικό Καποδιστριακό Πανεπιστήμιο Αθηνών</button>
        </div>        
        
        <div id="eth" style="display:none;">
            <div id="kefalides_selidwn">
            ΕΠΙΛΕΞΤΕ ΣΧΟΛΗ (ΙΔΡΥΜΑ: ΕΘΙΝΚΟ ΚΑΠΟΔΙΣΤΡΙΑΚΟ ΠΑΝΕΠΙΣΤΗΜΙΟ ΑΘΗΝΩΝ)
            <br/> 
	        <br/>
            </div>
            
            <div id="id_sug">
            <a href="#pl"><button id="button_small_2" onclick="myFunction('pl')">Πληροφορική και Τηλεπικοινωνίες</button></a>
            </div>
            
            <div id="pl"  style="display:none;">
                <div id="kefalides_selidwn">
                ΣΥΓΓΡΑΜΜΑΤΑ (ΕΚΠΑ: ΠΛΗΡΟΦΟΡΙΚΗ ΚΑΙ ΤΗΛΕΠΙΚΟΙΝΩΝΙΕΣ)
                <br/> 
		        <br/>
                </div>
                <?php
                    $con = mysqli_connect("localhost", "root", "134711Kk", "eam3");
                    header('Content-Type: text/html; charset=UTF-8');
                    
                    mysqli_query($con, 'SET character_set_results=utf8');
                    mysqli_query($con, 'SET names=utf8');
                    mysqli_query($con, 'SET character_set_client=utf8');
                    mysqli_query($con, 'SET character_set_connection=utf8');
                    mysqli_query($con, 'SET character_set_results=utf8');
                    mysqli_query($con, 'SET collation_connection=utf8_general_ci');
                    
                    $sql = "SELECT * FROM Suggrammata;";
                    $results = mysqli_query($con, $sql);
                    
                    while($row = mysqli_fetch_assoc($results))
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
                    
                    mysqli_close($con);			
                ?>
       	   </div>
       
       
           <div id="id_sug">
              <a href="#fi"><button id="button_small_2" onclick="myFunction('fi')">Φιλολογία</button></a>
           </div>
           
           <div id="fi"  style="display:none;">
                <div id="kefalides_selidwn">
                ΣΥΓΓΡΑΜΜΑΤΑ (ΕΚΠΑ: ΦΙΛΟΛΟΓΙΑ)
                <br/> 
        		<br/>
                </div>
                Παρουσίαση διαθέσιμων συγγραμμάτων
           </div>
           
       </div>
       
       <div id="diaxwr"></div>
       
       <div id="id_sug">
          <button id="button_small_2" onclick="myFunction('pe')">Πανεπιστήμιο Πειραιώς</button>
       </div>
       
        <div id="pe" style="display:none;">
            <div id="kefalides_selidwn">
           		 ΕΠΙΛΕΞΤΕ ΣΧΟΛΗ (ΙΔΡΥΜΑ: ΠΑΝΕΠΙΣΤΗΜΙΟ ΠΕΙΡΑΙΩΣ)
                 <br/> 
        		 <br/>
            </div>
            
            <div id="id_sug">
            <a href="#oik"><button id="button_small_2" onclick="myFunction('oik')">Οικονομική Επιστήμη</button></a>
            </div>
            
            <div id="oik"  style="display:none;">
                <div id="kefalides_selidwn">
                ΣΥΓΓΡΑΜΜΑΤΑ (ΠΑΠΕΙ: ΟΙΚΟΝΟΜΙΚΗ ΕΠΙΣΤΗΜΗ)
                <br/> 
		        <br/>
                </div>
                Παρουσίαση διαθέσιμων συγγραμμάτων
            </div>
            
            <div id="id_sug">
            <a href="#na"><button id="button_small_2" onclick="myFunction('na')">Ναυτιλιακές Σπουδές</button></a>
            </div>
            
            <div id="na"  style="display:none;">
                <div id="kefalides_selidwn">
                ΣΥΓΓΡΑΜΜΑΤΑ (ΠΑΠΕΙ: ΝΑΥΤΙΛΙΑΚΕΣ ΣΠΟΥΔΕΣ)
                <br/> 
		        <br/>
                </div>
                Παρουσίαση διαθέσιμων συγγραμμάτων
           </div>
       
         </div>        
    </div>
    
    <!--TELOS MESSAIO MEROS-->
    
    <!--ARXH KATW MEROS-->
    <div id="footer">    	
		 <?php 
	  
		  if(!isset($_SESSION[user]))
		  {		  
			echo "<div id=\"upper_bottom\">  
					<div id=\"bot_left\">
						<a href=\"../index.php\"><img width=\"48\" height=\"47\" src=\"../images/footer/eudoxus-mikro-logo.png\" /></a>
						<a href=\"../index.php\"><p><br/><strong>Αρχική Σελίδα</strong></p></a>
						<a href=\"idrumata_suggrammata.php\"><p><strong>Συγγράμματα Σχολών</strong></p></a>
						<a href=\"aplh_anazhthsh.php\"><p><strong>Αναζήτηση Συγγραμμάτων</strong></p></a>
						<a href=\"#\"><p><strong>Επικοινωνία</strong></p></a>
						<a href=\"#\"><p><strong>Συχνές Ερωτήσεις</strong></p></a>
					</div>
					
					<div id=\"bot_center\">
						<a href=\"../../../eggrafh.php\"><p style=\"color:#CD5A00;\"><br/><strong>Εγγραφή</strong></p></a>
						<a href=\"../../../index.php\"><p style=\"color:black;\"><strong>Σύνδεση</strong></p></a>
					</div>
					
					<div id=\"bot_right\">
						<a href=\"https://twitter.com/eudoxusgr\"><img width=\"43\" height=\"42\" src=\"../images/footer/twit.png\" /></a>
					</div>
				</div>
				"; 
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