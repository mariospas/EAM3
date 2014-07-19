
window.location.href = 



<?php




$sql = 	"INSERT INTO Foithtes(onoma,epitheto,onoma_xrhsth,e_mail,kwdikos,thlefwno,fwtografia,idruma,tmhma,eksamhno,Arithmoi_mhtrwou_a_m)
VALUES('$name','$epitheto','$username','$email','$password','$thl','$target','$idrima','$tmhma','$eksamhno','$aritmos_mhtroo')";
    $results = mysqli_query($con, $sql);
 	if($results) echo "Petuxe <br>";
	else echo "Apetuxe <br>";
	
	
	$data = array();
	$array = array();
	
	while ($row = mysqli_fetch_assoc($results))
	{
		$data = $row['id'];
		echo "$data";
		echo "<br>";
		extract($row);
	}





?>