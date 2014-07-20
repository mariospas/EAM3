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
<link rel="stylesheet" href="../css/lean-slider.css" type="text/css" />
<link rel="stylesheet" href="../css/slider-style.css" type="text/css" />


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
        Περισσότερες Πληροφορίες
        </div> 	
        
        <div id="plhrofories">
        	<button id="button_small_1" onclick="myFunction('foo')">ΟΡΟΙ ΚΑΙ ΠΡΟΫΠΟΘΕΣΕΙΣ</button>
            
            
        	<button id="button_small_1" onclick="myFunction('eggr')">ΟΔΗΓΙΕΣ ΕΓΓΡΑΦΗΣ</button>
            
           
            
            
        	<button id="button_small_1" onclick="myFunction('fa')">ΟΔΗΓΙΕΣ ΑΝΑΖΗΤΗΣΗΣ ΣΥΓΓΡΑΜΜΑΤΩΝ</button>   
            <div style="margin-top:20px;"></div>
            <div id="foo" style="display:none;">Κείμενο με όρους και προϋποθέσεις...<hr/>
            </div>  
            <div id="eggr" style="display:none;">Κείμενο με οδηγίες εγγραφής...<hr/>
            </div>
            <div id="fa" style="display:none;">Κείμενο με οδηγίες αναζήτησης συγγραμμάτων...<hr/>
            </div>
        
        </div>
        
        
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