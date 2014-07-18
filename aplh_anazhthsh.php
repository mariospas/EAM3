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
        Χρησιμοποιείστε λέξεις κλειδιά, βάζοντας κόμμα (,) και χωρίς κενά μεταξύ τους 
        </div>
        
        <div id="_search_">
            <form action="php_anazhthshs/euresh_suggrammatwn_aplh.php" method="GET">
                <input type="text" id="aplh_anazhthsh" name="aplh_anazhthsh" />
                <br/>
	            <input type="submit" id="sub_search" name="sub_search" value="Αναζήτηση" />
            </form>
            
            <div id="pros_sun">
            <a href="suntheth_anazhthsh.php">Σύνθετη Αναζήτηση</a>
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