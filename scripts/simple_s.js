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

function myFunction_1(name_1, name_2, name_3)
{
	if(document.getElementById(name_1).style.display == "none")
	{
		document.getElementById(name_1).style.display = "block";
		document.getElementById(name_2).style.display = "none";
		document.getElementById(name_3).style.display = "none";		
	}
	else
	{
		document.getElementById(name_1).style.display = "none";
		document.getElementById(name_2).style.display = "block";
		document.getElementById(name_3).style.display = "block"
	}
}