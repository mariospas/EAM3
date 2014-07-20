<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="../../scripts/drop_down_log_in.js"></script>
<script src="../../scripts/lean-slider.js"></script>
<link rel="stylesheet" href="../../css/lean-slider.css" type="text/css" />
<link rel="stylesheet" href="../../css/slider-style.css" type="text/css" />


</head>

<body>	

<div id="wrapper">
	<!--ARXH PANW MEROS-->
	<div id="header_gen">
    
    	<?php include("include_with_php/logo.php"); ?>    	
        
        <?php 
			include("../config.php");
		?>
        
    </div>
    <!--TELOS PANW MEROS-->
    
    <!--ARXH MESSAIO MEROS-->
  <div id="mid">
    
    	<?php include("include_with_php/gen_menu.php"); ?> 
        
        
        <div id="button_small" class="portokali">
        <a href="#"><h4><strong>Αρχική Σελίδα</strong></h4></a>
        </div>
        
        <div id="button_small" class="portokali">
        <a href="#"><h4><strong>Συγγράμματα Σχολών</strong></h4></a> 
        </div>
        
        <div id="button_small" class="portokali">
        <a href="#"><h4><strong>Αναζήτηση Συγγραμμάτων</strong></h4></a> 
        </div>
        
        <div id="button_small" class="portokali">
        <a href="#"><h4><strong>Επικοινωνία</strong></h4></a>
        </div>
        
        <div id="button_small" class="portokali">
        <a href="#"><h4><strong>FAQ</strong></h4></a>
        </div>
     	
        
        <div id="banner">
        
            <div class="slider-wrapper">
                <div id="slider">
                    <div class="slide1">
                        <img src="images/banner_arxiki_selida/1.jpg" alt="" />
                    </div>
                    <div class="slide2">
                        <img src="images/banner_arxiki_selida/2.jpg" alt="" />
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
            <p style="margin-left:55px; color:black;"><strong>ΗΛΕΚΤΡΟΝΙΚΗ ΥΠΗΡΕΣΙΑ ΟΛΟΚΛΗΡΩΜΕΝΗΣ ΔΙΑΧΕΙΡΙΣΗΣ ΣΥΓΓΡΑΜΜΑΤΩΝ</strong><br/>
Πρόκειται για μία πρωτοποριακή υπηρεσία για την άμεση και ολοκληρωμένη παροχή των Συγγραμμάτων<br/> των φοιτητών των Πανεπιστημίων και των ΤΕΙ της επικράτειας.<br/>
Η διαδικασία είναι πλήρως αυτοματοποιημένη και προσφέρει:  <br/>
&nbsp;&nbsp;&nbsp;&nbsp;(α) Πλήρη ενημέρωση στους φοιτητές για τα παρεχόμενα Συγγράμματα σε κάθε μάθημα<br/>
&nbsp;&nbsp;&nbsp;&nbsp;(β) Δυνατότητα άμεσης παραλαβής των Συγγραμμάτων και<br/>
&nbsp;&nbsp;&nbsp;&nbsp;(γ) Αποτελεσματικούς μηχανισμούς για την ταχεία αποζημίωση των Εκδοτώνκαι για την αποτροπή<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;της καταχρηστικής εκμετάλλευσης των δημόσιων πόρων</p>
            <div id="button_spe">
            <a href="#"><h2><strong>Περισσότερες Πληροφορίες</strong></h2></a>
            </div>
        </div>
        
        <div id="video">
        	<embed width="642" height="345"
src="http://www.youtube.com/v/XGSy3_Czz8k"
type="application/x-shockwave-flash">
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