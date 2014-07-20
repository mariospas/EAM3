<?php
//echo "mphka sthn get_in <br>";
function loginform()
{


	echo "<div id=\"get_in\">
		
			<nav>
			  <ul>                   
				<li id=\"signup\">
				  <a href=\"\"><h3>Εγγραφή</h3></a>
				</li>
				 <li id=\"login\">
				  <a id=\"login-trigger\" href=\"#\">
					<h3>Σύνδεση </h3>
				  </a>
				  <div id=\"login-content\">
					<form method=\"post\">
					  <div id=\"inputs\">
						 <input id=\"user_form\" name=\"user_form\" size=\"30\" type=\"text\" placeholder=\"Username ή e-mail\" required/> 
					  </div>
					  <div id=\"inputs\">
						<input id=\"pass\" name=\"pass\" size=\"30\" type=\"password\" placeholder=\"Κωδικός\" required/>   
					  </div>
					  <div id=\"actions\">
						<input type=\"submit\" id=\"submit\" value=\"Είσοδος\">
						<label><input type=\"checkbox\" checked=\"checked\"> Να παραμείνω συνδεδεμένος</label>
						<a href=\"#\"><label>Ξεχάσατε τον κωδικό σας;</label></a>
					  </div>
					</form>
				  </div>                     
				</li>
			  </ul>
			</nav>
				 
		</div>";
}

?>