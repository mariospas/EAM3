// JavaScript Document

//foithtes pop menu


$("#rolos").change(function () 
{
 // var str = "";
  var id="";
  $("#rolos option:selected").each(function () {
		//str += $(this).text() + " ";
		id = $(this).attr('id');
		$("#extra_form").html(id+"<br>");
		if( id === "foithths" )
		{
			var html = $("#FModel").append($(this).clone()).html();
			$("#extra_form").html(html);
		}
		else $("#extra_form").html("FALSE<br>");
		//$("#"+id).hide();
	  });
  var tx=$("#extra_form").html();
  //var button="";
  //$("#extra_form").html(tx+" "+str);
})
.trigger('change');



	$(function() {
			
		$("#idruma").change(function() {
		
			var $dropdown = $(this);
		
			$.getJSON("jsondata/data.json", function(data) {
			
				var key = $dropdown.val();
				var vals = [];
									
				switch(key) {
					case 'Εθνικό Καποδιστριακό Πανεπιστήμιο Αθηνών':
						vals = data.EKPA.split(",");
						break;
					case 'Πανεπιστήμιο Πειραιώς':
						vals = data.PAPI.split(",");
						break;
					case 'base':
						vals = ['Please choose from above'];
				}
				
				var $jsontwo = $("#tmhma");
				$jsontwo.empty();
				$.each(vals, function(index, value) {
					$jsontwo.append('<option value="' + value +'">' + value + '</option>');
				});
		
			});
		});

	});
	

	
