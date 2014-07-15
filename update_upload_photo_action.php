<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>


<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	//This is the directory where images will be saved
	$target = "dokupload/";
	$target = $target . basename( $_FILES['photo']['name']);
	echo $target;
	echo "<br>";
	
	//This gets all the other information from the form
	/*
	$name=$_POST['nameMember'];
	$bandMember=$_POST['bandMember'];
	$pic=($_FILES['photo']['name']);
	$about=$_POST['aboutMember'];
	$bands=$_POST['otherBands'];
	
	*/
	// Connects to your Database
	$con = mysql_connect("localhost", "root", "134711Kk");

	if(!$con)
	{
		die("Connection Failed".mysql_error());		
	}
	//mysql_select_db("dbName") or die(mysql_error()) ;
	
	/*
	//Writes the information to the database
	mysql_query("INSERT INTO tableName (nameMember,bandMember,photo,aboutMember,otherBands)
	VALUES ('$name', '$bandMember', '$pic', '$about', '$bands')") ;
	*/
	
	//Writes the photo to the server
	if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
	{
	
		//Tells you if its all ok
		echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory";
	}
	else {
	
		//Gives and error if its not
		echo "Sorry, there was a problem uploading your file.";
	}
?>



<body>
</body>
</html>