<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Φοιτητές Αρχική Σελίδα</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/foithths.css">
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
        
        <div id="banner">
        
            <div class="slider-wrapper">
                <div id="slider">
                    <div class="slide1">
                        <img src="foithths/images/banner_arxiki_selida/1.jpg" alt="" />
                    </div>
                    <div class="slide2">
                        <img src="foithths/images/banner_arxiki_selida/2.jpg" alt="" />
                    </div>
                </div>
                <div id="slider-direction-nav"></div>
                <div id="slider-control-nav"></div>
            </div>
            
            <script type="text/javascript">
            $(document).ready(function() {
                var slider = $('#slider').leanSlider({
                    directionNav: '#slider-direction-nav',
                    controlNav: '#slider-control-nav'
                });
            });
            </script> 
        </div>   
        
        <div id="info">        	
            <p style="margin-left:55px; font-size:18px; color:black;"><strong>ΕΝΗΜΕΡΩΣΕΙΣ</strong></p>
            <br />
            <p style="margin-left:55px; font-size:14px; color:black;"><strong>05/03/2014</strong></p>

            <p style="margin-left:55px; font-size:14px; color:black;">Η δήλωση συγγραμμάτων για το εαρινό εξάμηνο έχει ξεκινήσει! </p>
            <br />
            <br />
            <p style="margin-left:55px; font-size:14px; color:black;"><strong>05/03/2014</strong></p>

            <p style="margin-left:55px; font-size:14px; color:black;">Η δήλωση συγγραμμάτων για το εαρινό εξάμηνο έχει ξεκινήσει! </p>
            <br />
            <div id="button_spe" style="text-align:center;">
            <a href="manual.php"><h2><strong>Οδηγίες για ΔΗΛΩΣΗ</strong></h2></a>
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