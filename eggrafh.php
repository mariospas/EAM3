<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<script type="text/javascript" src="./scripts/javs.js"></script>
<script src="scripts/saveDataAndFill.js"></script>
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
				<input type="password" id="kodikos" name="kodikos"  /></p>
                <br/>
                <p><label>Επιβεβαίωση κωδικού πρόσβασης :</label>
				<input type="password" id="epib_kodikos" name="epib_kodikos"  /></p>
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
                    <option id="None" name="None" value="None"> </option>
                    <option id="foithths" name="foithths" value="foithths">Φοιτητές</option>
                    <option id="ekdoths" name="ekdoths" value="ekdoths">Εκδότες</option>
                    <option id="grammateia" name="grammateia" value="grammateia">Γραμματεία</option>
                    <option id="diaxeirisths" name="diaxeirisths" value="diaxeirisths">Διαχειριστές</option>
                </select></p>
            </form>
        </div> 
       
       <script>
	   
	   $('#rolos').on('keyup', function () {
			if ($(this).val() == $('#foithths').val()) {
				$('#extra_form').css('display', 'block');
			} else $('#message').html('not matching').css('color', 'red');
		});
		
		</script>
		
        
        <div id="extra_form">
            <div id="main_form">
            	<form>
                	<p><label for="idruma">Ίδρυμα :</label>
                    <select name="idruma">
                        <option value="None"> </option>
                        <option value="APTH">Αριστοτέλειο Πανεπιστήμιο Θεσ/νίκης</option>
                        <option value="EKPA">Εθνικό Καποδιστριακό Πανεπιστήμιο Αθηνών</option>
                    </select></p>
                    <br/>
                    <p><label for="tmhma">Τμήμα<p style="font-size:10px;">(Προηγείται συμπλήρωση του Ιδρύματος) :</p></label>
                    <select name="tmhma">
                        <option value="None"> </option>
                        <option value="DI">Πληροφορικής και Τηλεπικοινωνιών</option>
                        <option value="FIL">Φιλολογίας</option>
                    </select></p>
                    <br/>
                    <p><label for="username">Αριθμός μητρώου :</label>
                    <input type="text" name="username" /></p>
                    <br/>
                    <p><label for="tmhma">Εξάμηνο :</label>
                    <select name="tmhma">
                        <option value="None"> </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select></p>
                </form>
            </div>       
        </div>
        
        <script type="text/javascript">
		
			rescuefieldvalues(['onoma', 'epitheto', 'onomaxristi', 'taxudromio', 'thl', 'rolos']);
		
		</script>
        
        <div id="form_footer">        
            <div id="sub_button">
            Εγγραφή
            </div>
        </div>
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