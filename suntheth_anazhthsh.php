<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="./css/style.css">
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
        Αναζήτηση Συγγραμμάτων
        </div>
        
        <div id="upokefalida">
        Συμπληρώστε τα χαρακτηριστικά που γνωρίζετε στα κατάλληλα πεδία
        </div>        
        
            <form action="php_anazhthshs/euresh_suggrammatwn_suntheth.php" method="GET">
            <div id="main_form_1">
            	<div id="aristerh_anazhthsh">
                    <label>Τίτλος</label>
                    <br/>                    
                    <input type="text" id="titlos" name="titlos" />
                    <br/>
                    <br/>
                    <label>Συγγραφέας</label>
                    <br/>
                    <input type="text" id="suggrafeas" name="suggrafeas" />
                    <br/>
                    <br/>
                    <label>Τίτλος τόμου</label>
                    <br/>
                    <input type="text" id="titlos_tomou" name="titlos_tomou" />
                    <br/>
                    <br/>
                    <label>ISBN</label>
                    <br/>
                    <input type="text" id="isbn" name="isbn" />
                    <br/>
                    <br/>
                    <label>Υπότιτλος</label>
                    <br/>
                    <input type="text" id="upotitlos" name="upotitlos" />
                    <br/>
                    <br/>
                    <label>Αριθμός έκδοσης</label>
                    <br/>
                    <input type="text" id="arithmos_ekdoshs" name="arithmos_ekdoshs" />
                    <br/>
                    <br/>
                    <label>Τύπος</label>
                    <br/>
                    <select id="tupos" name="tupos">
                	<option selected="selected" ></option>
                    <option id="suggramma" name="suggramma" value="suggramma">Σύγγραμμα</option>
                    <option id="el_suggramma" name="el_suggramma" value="el_suggramma">Ηλεκτρονικό Σύγγραμμα</option>
                    <option id="el_biblio" name="el_biblio" value="el_biblio">Ηλεκτρονικό Βιβλίο</option>
                    <option id="shmeiwseis" name="shmeiwseis" value="shmeiwseis">Δωρεάν Ηλεκτρονικό Βοήθημα/Σημειώσεις</option>
                </select>
                </div>
                
                <div id="deksia_anazhthsh">
                    <label>Αριθμός τόμου</label>
                    <br/>
                    <input type="text" id="arithmos_tomou" name="arithmos_tomou" />
                    <br/>
                    <br/>
                    <label>Διαθέτης ( Εκδότης )</label>
                    <br/>
                    <input type="text" id="diatheths" name="diatheths" />
                    <br/>
                    <br/>
                    <label>Κωδικός βιβλίου</label>
                    <br/>
                    <input type="text" id="kwdikos_bibliou" name="kwdikos_bibliou" />
                    <br/>
                    <br/>
                    <label>Έτος έκδοσης</label>
                    <br/>
                    <input type="text" id="etos_ekdoshs" name="etos_ekdoshs" />
                    <br/>
                    <br/>
                    <label>Λέξεις Κλειδιά</label>
                    <br/>
                    <input type="text" id="lekseis_kleidia" name="lekseis_kleidia" />
                    <br/>
                    <br/>
                    <label>Εκδόσεις</label>
                    <br/>
                    <input type="text" id="ekdoseis" name="ekdoseis" />
                    <br/>
                    
                </div>
            </div>
            <div id="_search_">
                <input type="submit" id="sub_search" name="sub_search" value="Αναζήτηση" />
                </form>
                
                <div id="pros_sun">
                <a href="aplh_anazhthsh.php">Απλή Αναζήτηση</a>
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