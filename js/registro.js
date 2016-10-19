$( document ).ready(function() {

	$("#save-alumno").submit(function(e) {
		var url = "php/save-alumno.php"; 
		var codigo="codigo";/** obtener codigo o generar automatico **/
		var formData = new FormData($('#save-alumno')[0]);
		$.ajax({
		       type: "POST",
		       url: url,
		       data:formData,
		       contentType: false,
    			processData: false,
		       success: function(data)
		       {
		           console.log(data)
					$(".registro").css('left','6px')
					$(".container-carnet").css("opacity","1")
					$(".container-carnet").css("right","-8px")
					//$(".container-carnet").css("left","10px")
					$("#body-carnet").html('<img src="php/barcode.php?text='+codigo+'" alt="testing" width="500" height="100" />')
		       }
		     });

		e.preventDefault(); // avoid to execute the actual submit of the form.
	});


	$('#form-create-carnet').on('click',function(e){
		var code = $("#codigo").val();
		$.ajax({
				type: "POST",
		      	url: 'php/carnet.php',
		       	data:code,
		       	contentType: false,
    			processData: false,
    			success: function(data)
		       {
		       		//send codigo para crear carnet
		           console.log(data)
					$("#body-carnet").html('<img src="php/barcode.php?text='+codigo+'" alt="testing" width="500" height="100" />')
		       }
		});
		e.eventDefault()
	})


});