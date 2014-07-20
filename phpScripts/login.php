<?php
//echo "mphka sthn login <br>";
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

function checkpass()
{
	//echo "mphka sthn checkpass <br>";
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
	
	//echo "trying to check the pass <br>";
	
	$username = ($_POST['user_form']);
	//echo "$username";
	$password = $_POST['pass'];
	//echo "$password";
	$data;
	
	$sql="select * from Foithtes where onoma_xrhsth='$username' and kwdikos='$password'";
	$result=mysqli_query($con, $sql) or die(mysqli_error());
	mysqli_close($con);
	$num = mysqli_num_rows($result);
	return $num;
}



function print_secure_content()
{
	//echo "mphka sthn secure content <br>";
	//print("<b><h3>hi mr.$_SESSION[user]</h3>");
	//print "<br><h2>only a logged in user can see this</h2><br><a href=\"phpScripts/logout.php\">Logout</a><br>";
	//echo "$_SESSION[photog]";
	echo "<nav>
			  <ul>                   
				<li id=\"signup\">
				  
				  <div>
						<canvas id=\"canvas1\" width=\"50\" height=\"50\" style=\"background:url({$_SESSION[photog]}); background-repeat:no-repeat; background-size:50px 50px; -webkit-border-radius: 50px; -moz-border-radius: 50px; border-radius: 50px;\">
						This text is displayed if your browser does not support HTML5 Canvas.
						</canvas>
				  </div>
				  
				  
				</li>
				 <li id=\"login\">
				  <a id=\"login-trigger\" href=\"#\">
					<h3>$_SESSION[user] </h3>
				  </a>
				  <div id=\"login-content\">
					
					  <ul>
						<li>Ανασκόπηση στοιχείων και Επεξεργασία προφίλ χρήστη</li>
						<li>Ιστορικό χρήσης</li>
						<li><a href=\"phpScripts/logout.php\">Αποσύνδεση</a></li>
					  </ul> 
					
				  </div>                     
				</li>
			  </ul>
		</nav>
	  ";
}











?>