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
	echo $target;
	echo "<br>";
	
	//This gets all the other information from the form
	
	$name=$_POST['nameMember'];
	$bandMember=$_POST['bandMember'];
	//$pic=($_FILES['photo']['name']);
	//$about=$_POST['aboutMember'];
	//$bands=$_POST['otherBands'];
		

	if(!$con)
	{
		die("Connection Failed".mysqli_error());		
	}
	//mysql_select_db("dbName") or die(mysql_error()) ;
	
	//mysql_select_db("eam3", $con);
	
	//Writes the information to the database
	
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
		
		echo "<canvas id=\"canvas1\" width=\"400\" height=\"408\" style=\"border: 1px solid black; background:url({$target}); 					background-repeat:no-repeat;\">
				This text is displayed if your browser does not support HTML5 Canvas.
			  </canvas>
			  <input type=\"button\" id=\"cropBTN\" value=\"Crop Image\">
			
			  <canvas id=\"canvasDestination\" width=\"400\" height=\"408\" style=\"border: 1px solid black;\">
				This text is displayed if your browser does not support HTML5 Canvas.
			  </canvas>
			
			  <img src=\"{$target}\" id=\"srcIMG\" width=\"0\" height=\"0\" />
			
			  <div style=\"position: absolute;top: 10px; left: 10px; width: 0px; height: 0px; z-index: 5;\" class=\"mod marchingants2\" id=\"testAnt\">
				<div class=\"inner\">
					<div class=\"hd\"></div>
					<div class=\"bd\"></div>
					<div class=\"ft\"></div>
				</div>
			  </div>
			
			  <div style=\"font-family: Verdana; font-size: 12px;\">
				  <p>Drag Over the Image and Press \"Crop Image\"</p>
				  <p><a href=\"http://simonsarris.com/blog/510-making-and-moving-selectable-shapes-on-an-html5-canvas-updated\">link to tutorial</a></p>
			      <p>By <a href=\"http://www.designscripting.com\">designscripting.com</a></p>
			</div>
		";


	}
	else {
	
		//Gives and error if its not
		echo "Sorry, there was a problem uploading your file.";
	}
	
	mysqli_close($con);
?>

<script src="scripts/cropJavaScript.js"></script>





</body>
</html>