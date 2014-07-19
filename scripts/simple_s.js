// JavaScript Document

function myFunction(name)
{
	if(document.getElementById(name).style.display == "none")
	{
		document.getElementById(name).style.display = "block";		
	}
	else
	{
		document.getElementById(name).style.display = "none";
	}
}