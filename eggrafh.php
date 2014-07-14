<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<script type="text/javascript" src="./scripts/javs.js"></script>
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
        	<form>
            	<p><label for="username">Όνομα :</label>
				<input type="text" size="42" name="username" /></p>
                <br/>
                <p><label for="username">Επίθετο :</label>
				<input type="text" size="42" name="username" /></p>
                <br/>
                 <p><label for="username">Όνομα χρήστη (της επιλογής σας) :</label>
				<input type="text" size="42" name="username" /></p>
                <br/>
                 <p><label for="username">e-mail :</label>
				<input type="text" size="42" name="username" /></p>
                <br/>
                <p><label for="password">Κωδικός πρόσβασης :</label>
				<input type="password" size="42" name="password" /></p>
                <br/>
                <p><label for="password">Επιβεβαίωση κωδικού πρόσβασης :</label>
				<input type="password" size="42" name="password" /></p>
                <br/>
                <p><label for="password">* Τηλέφωνο :</label>
				<input type="text" size="42" name="username" /></p>
                <br/>
                <p><label for="role">Ρόλος στην ιστοσελίδα :</label>
                <br/>
                <select name="role">
                    <option value="None"> </option>
                    <option value="foithths">Φοιτητές</option>
                    <option value="ekdoths">Εκδότες</option>
                    <option value="grammateia">Γραμματεία</option>
                    <option value="diaxeirisths">Διαχειριστές</option>
                </select></p>
            </form>
        </div> 
        
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
                    <input type="text" size="42" name="username" /></p>
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
        
        <div id="form_footer">        
            <div id="sub_button">
            Εγγραφή
            </div>
        </div>
        <br/>
        <p style="font-size:13px; color:#999;">(*) Δεν είναι υποχρεωτική η συμπλήρωση αυτού του πεδίου.</p>
    </div>
	<?php include("downer_footer.php"); ?>
    <?php include("copyrights.php"); ?>
</div>

</body>
</html>