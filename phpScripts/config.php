
<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

//echo "prin apo include tis config <br>";
include("login.php");
//echo "anamesa sta include tis config <br>";
include("get_in.php");
//echo "mphka sthn config <br>";
session_start();
if( $_SESSION["logging"]&& $_SESSION["logged"])
{
	print_secure_content();
	
}
else 
{
	if(!$_SESSION["logging"])
	{
		$_SESSION["logging"]=true;
		loginform();
	}
	else if($_SESSION["logging"])
	{
		$number_of_rows=checkpass();
		//echo "$number_of_rows <br>";
		if($number_of_rows==1)
		{
			$_SESSION[user]=$_POST['user_form'];
			$username=$_POST['user_form'];
			
			$con = mysqli_connect("localhost", "root", "134711Kk", "eam3");
			if(!$con)
			{
				die("Connection Failed".mysqli_error());		
			}
			
			mysqli_query($con, 'SET character_set_results=utf8');
			mysqli_query($con, 'SET names=utf8');
			mysqli_query($con, 'SET character_set_client=utf8');
			mysqli_query($con, 'SET character_set_connection=utf8');
			mysqli_query($con, 'SET character_set_results=utf8');
			mysqli_query($con, 'SET collation_connection=utf8_general_ci');
			
			$sql="select fwtografia from Foithtes where onoma_xrhsth='$username'";
			$result=mysqli_query($con, $sql) or die(mysqli_error());
			
			$num=mysqli_num_rows($result);
			//echo "Rows = $num <br>";
			$row = mysqli_fetch_array($result);
			$_SESSION[photog] = $row[0];
			
			
			//echo "$_SESSION[photog] <br>";
			$_SESSION[logged]=true;
			//print"<p>you have loged in successfully</p>";
			print_secure_content();
			echo "<meta http-equiv=\"refresh\" content=\"0;url=../index.php\"/>";
		}
		else if($number_of_rows==0)
		{
			loginform();
			echo "<div id=\"wrong_pass\" style=\"color:red; size:12px; float:left; padding-left:0px; padding-right:0px; margin-left: 450px; margin-top: 7px;\">
					<p>Λάθος κωδικός ή όνομα χρήστη</p>
				</div>
			  ";
		}
	}
}











?>

