<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="css/cropCSS.css" type="text/css" />
<style>

#cropBTN
{
	color:#F4080C;
	font-size:24px;
	background-color:#C8E90C;
}

</style>

</head>

<body onLoad="init()">


<?php

	// Connects to your Database
	$con = mysqli_connect("localhost", "root", "134711Kk", "eam3");
	
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	//This is the directory where images will be saved
	$target = "dokupload/";
	$target = $target . basename( $_FILES['photo']['name']);
	//echo $target;
	//echo "<br>";
	
	//This gets all the other information from the form
	
	$name = $_POST['onoma'];
	$epitheto = $_POST['epitheto'];     //bandMember
	$pic = ($_FILES['photo']['name']);
	$role = ($_POST['role']);
	$username = ($_POST['onomaxristi']);
	$email = ($_POST['taxudromio']);
	$password = $_POST['password'];
	$thl = ($_POST['thl']);
	$idrima = ($_POST['idruma']);
	$tmhma = ($_POST['tmhma']); 
	$aritmos_mhtroo = ($_POST['arithmos_mhtroou']);
	$eksamhno = ($_POST['eksamhno']);
	
	
	$ext = substr($pic, strrpos($pic, '.') + 1);
	echo "{$ext}";
	echo "<br>";
	
	
	if ( !  ($ext == "jpg")  or  ($ext == "jpeg")  or  ($ext == "png")   )
	{
		echo "Δεχόμαστε μόνο αρχεία με κατάληξη .jpg , .jpeg και .png .Παρακαλούμε προσπαθήστε ξανά!";
		return;
	}

	
	echo "<br>";
	
	echo "Pic = "."$pic";
	echo "<br>";
	echo $name;
	echo "<br>";
	echo $epitheto;
	echo "<br>";
	echo $username;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $password;
	echo "<br>";
	echo $thl;
	echo "<br>";
	echo $role;
	echo "<br>";
	echo $idrima;
	echo "<br>";
	echo $tmhma;
	echo "<br>";
	echo $aritmos_mhtroo;
	echo "<br>";
	echo $eksamhno;
	echo "<br>";



	
	//$about=$_POST['aboutMember'];
	//$bands=$_POST['otherBands'];
		

	if(!$con)
	{
		die("Connection Failed".mysqli_error());		
	}
	//mysql_select_db("dbName") or die(mysql_error()) ;
	
	//mysql_select_db("eam3", $con);
	
	//Writes the information to the database
	
	/*
	echo "$name" . " " . "$bandMember" . "<br/>";
	
	$sql = 	"INSERT INTO Grammateia(id, idruma, tmhma) VALUES ('4', '$name', '$bandMember');";
				
	 $some = mysqli_query($con,$sql);
	 if (!$some) 
	 {
			echo "Yparxei" . "<br/>";
	 }

    $request = mysqli_query($con,"SELECT * FROM eam3.Grammateia");

    while ($row = mysqli_fetch_array($request))
    {   
        extract($row);
        echo "$id" . " " . "$idruma" . " " . "$tmhma" . "<br/>";
    }

	
	
	//Writes the photo to the server
	if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
	{
	
		//Tells you if its all ok
		echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory";
		echo "<br>";
		echo $target;
		echo "<br>";
		//echo "<img id=\"html5\" src=\"{$target}\" />";
		echo "<br>";
		echo "<br>";
		
		echo "<canvas id=\"canvas1\" width=\"50\" height=\"50\" style=\"background:url({$target}); background-repeat:no-repeat; background-size:50px 50px; -webkit-border-radius: 50px; -moz-border-radius: 50px; border-radius: 50px;\">
				This text is displayed if your browser does not support HTML5 Canvas.
			  </canvas>
			  <input type=\"button\" id=\"cropBTN\" value=\"Crop Image\">
			
			  <form method=\"post\" action=\"update_upload_photo_action.php\" enctype=\"multipart/form-data\">
				 <p>
				   Αλλάξτε την φωτογραφία και προτιμότερο είναι να διλέξετε μια τετράγωνη εικόνα (π.χ 500x500)
				 </p>
				 <input type=\"hidden\" name=\"size\" value=\"3500000\">
				 <input type=\"file\" name=\"photo\"> 
				 <input TYPE=\"submit\" name=\"upload\" title=\"Add data to the Database\" value=\"Upload New Photo\"/>
			  </form>
		";



	}
	else {
	
		//Gives and error if its not
		echo "Sorry, there was a problem uploading your file.";
	}
	*/
	
	mysqli_close($con);
?>

<script src="scripts/cropJavaScript.js"></script>





</body>
</html>