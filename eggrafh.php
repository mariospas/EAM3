<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="scripts/saveDataAndFill.js"></script>
<script src="scripts/checkTwoPass.js"></script>



		
</head>

<body>

<div id="wrapper">
	<div id="sub_header">
    	<div id="sub_logo">
        	<a href="index.php"><img src="images/logo.png" /></a>
        </div>
    </div>
    
	<div id="all_form">
    	<div id="form_title">
        	Καλώς ήρθατε! Εγγραφείτε εδώ.
        </div>
        
        <div id="main_form">
        	<form method="post" action="update_upload_photo_action.php" enctype="multipart/form-data">
            	<p><label>Όνομα :</label>
				<input type="text" id="onoma" name="onoma" /></p>
                <br/>
                <p><label>Επίθετο :</label>
				<input type="text" id="epitheto" name="epitheto" /></p>
                <br/>
                 <p><label>Όνομα χρήστη (της επιλογής σας) :</label>
				<input type="text" id="onomaxristi" name="onomaxristi" /></p>
                <br/>
                 <p><label>e-mail :</label>
				<input type="text" id="taxudromio" name="taxudromio"  /></p>
                <br/>
                <p><label>Κωδικός πρόσβασης :</label>
				<input type="password" id="password" name="password"  /></p>
                <br/>
                <p><label>Επιβεβαίωση κωδικού πρόσβασης :</label>
				<input type="password" id="passwordconf" name="passwordconf" oninput="check(this)"  /></p>
                <br/>
                <p><label>* Τηλέφωνο :</label>
				<input type="text" id="thl" name="thl"  /></p>
                <br/>
                <p><label>* Φωτογραφία :</label>
                <input type="hidden" name="size" value="350000">
                <input type="file" name="photo"> </p>
                <br/>
                <p><label>Ρόλος στην ιστοσελίδα :</label>
                <br/>
                <select id="rolos" name="role">
                	<option selected="selected" ></option>
                    <option id="foithths" name="foithths" value="foithths">Φοιτητές</option>
                    <option id="ekdoths" name="ekdoths" value="ekdoths">Εκδότες</option>
                    <option id="grammateia" name="grammateia" value="grammateia">Γραμματεία</option>
                    <option id="diaxeirisths" name="diaxeirisths" value="diaxeirisths">Διαχειριστές</option>
                </select></p>
               
               
               <div id="openModal" class="modalDialog">
                    <div>
                        <a href="#close" title="Close" class="close">X</a>
                        <p><label>Ίδρυμα :</label>
                        <br />
                        <select id="idruma" name="idruma"  >
                            <option value="base"> </option>
                            <option value="EKPA">Εθνικό Καποδιστριακό Πανεπιστήμιο Αθηνών</option>
                            <option value="PAPI">Πανεπιστήμιο Πειραιώς</option>
                        </select></p>
                        <br/>
                        <p><label >Τμήμα :</label>
                        <br />
                        <select id="tmhma" name="tmhma">
                            <option value="base">Προηγείται η συμπλήρωση του Ιδρύματος</option>
                            
                        </select></p>
                         
                        
                        <br />
                        
                        <p><label >Αριθμός μητρώου :</label>
                        <input type="text" id="arithmos_mhtroou" name="arithmos_mhtroou" /></p>
                        <br />
                        <p><label >Εξάμηνο :</label>
                        <select id="eksamhno" name="eksamhno">
                            <option value="None"> </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select></p>
                        <input TYPE="submit" name="upload" id="sub_button" title="Add data to the Database" value="Εγγραφή"/>
                    </div>
                </div>
        
        <!--alla divs kai modals gia to kathena ekdothss klp tha uparxoun-->
                
 
 
 
 
                <br />
                <div id="extra_form"></div>   <!-- write the dynamic html code here -->
            </form>
                 
        </div> 
        
        
        
		<script src="scripts/foititesPopMenu.js"></script> <!-- helps to write the dynamic code only for foithtes now -->
            
            
             
            
        <!--part of dynamic code START -->
        	
        <div id="FModel">
            <a class="likable" href="#openModal">Επόμενο</a>
        </div>

        
        
        <!--alla divs kai modals gia to kathena ekdothss klp tha uparxoun-->
       
        <!--part of dynamic code FINISH -->
        
        <!--Keep form data after refresh or redirect -->
        <script type="text/javascript">
		
			rescuefieldvalues(['onoma', 'epitheto', 'onomaxristi', 'taxudromio', 'thl', 'arithmos_mhtroou']);
			
		</script>
        
        <br/>
        <p style="font-size:13px; color:#999;">(*) Δεν είναι υποχρεωτική η συμπλήρωση αυτού του πεδίου.</p>
    </div>
    <div style="margin-top:-140px; background-color:#DBDBDB;">
		<?php include("downer_footer.php"); ?>
    </div>
    <?php include("copyrights.php"); ?>
</div>

</body>
</html>