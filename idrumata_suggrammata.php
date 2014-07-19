<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="scripts/drop_down_log_in.js"></script>
<script src="scripts/lean-slider.js"></script>
<script src="scripts/simple_s.js"></script>
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
            <button id="button_small_2" onclick="myFunction('pl')"><a href="#pl">Πληροφορική και Τηλεπικοινωνίες</a></button>
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
              <button id="button_small_2" onclick="myFunction('fi')"><a href="#fi">Φιλολογία</a></button>
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
            <button id="button_small_2" onclick="myFunction('oik')"><a href="#oik">Οικονομική Επιστήμη</a></button>
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
            <button id="button_small_2" onclick="myFunction('na')"><a href="#na">Ναυτιλιακές Σπουδές</a></button>
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
		<?php include("include_with_php/stadar_bottom_menu_gen.php"); ?>         
        <?php include("include_with_php/downer_footer.php"); ?>      
    </div>
    
    <?php include("include_with_php/copyrights.php"); ?> 
    <!--TELOS KATW MEROS-->
</div>

</body>
</html>