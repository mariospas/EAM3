// JavaScript Document

//foithtes pop menu


$("#rolos").change(function () 
{
  var str = "";
  var id="";
  $("#rolos option:selected").each(function () {
		str += $(this).text() + " ";
		id = $(this).attr('id');
		$("#extra_form").html(id+"<br>");
		if( id === "foithths" )
		{
			var html = $("#extra_form1").append($(this).clone()).html();
			$("#extra_form").html(html);
		}
		else $("#extra_form").html("FALSE<br>");
		//$("#"+id).hide();
	  });
  var tx=$("#extra_form").html();
  var button="";
  $("#extra_form").html(tx+" "+str);
})
.trigger('change');