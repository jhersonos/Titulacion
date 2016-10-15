$( document ).ready(function() {

	$("#save-alumno").submit(function(e) {
		var url = "php/save-alumno.php"; 

		$.ajax({
		       type: "POST",
		       url: url,
		       success: function(data)
		       {
		           console.log("exito")
					$(".registro").css('left','6px')
					$(".container-carnet").css("opacity","1")
		       }
		     });

		e.preventDefault(); // avoid to execute the actual submit of the form.
	});
});