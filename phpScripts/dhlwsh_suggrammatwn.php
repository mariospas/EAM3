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
        
        	<div id="belaki_or_1" onclick="myFunction('belaki_or_1', 'belaki_kath_1', 'plhrof_bibliwn_1')">
            	<img height="10" width="10" src="../images/belakia/oriz.png" />
                <div id="drop_biblia">2ο εξάμηνο</div>
            </div>
            
            <div id="belaki_kath_1">
            	<img height="10" width="10" src="../images/belakia/kath.png" />
                <div id="drop_biblia">2ο εξάμηνο</div>
            </div>
            
            <div id="plhrof_bibliwn_1">
            
            </div>
            
        </div>
        
        <div id="drop_biblia" onclick="myFunction_2('belaki_or_2', 'belaki_kath_2', 'plhrof_bibliwn_2')">
        
            <div id="belaki_or_2">
            	<img height="10" width="10" src="../images/belakia/oriz.png" />
            </div>
            
            <div id="belaki_kath_2">
            	<img height="10" width="10" src="../images/belakia/kath.png" />
            </div>
            
            <div id="plhrof_bibliwn_2">
            
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