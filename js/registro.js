$( document ).ready(function() {

	$("#save-alumno").submit(function(e) {
		var url = "../php/save-alumno.php"; 
		var codigo="codigo";/** obtener codigo o generar automatico **/
		if(document.getElementById('cod').checked) {
		   codigo="auto" //codigo="ramdon automatico"
		} else {
		   codigo="manual" //codigo="chapar nombre apellido"
		}
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
					$("#body-carnet").html('<img src="../php/barcode.php?text='+codigo+'" alt="testing" width="500" height="100" />')
		       },error: function(XMLHttpRequest, Status, err) { 
			        console.log("Status: " + Status); 
			        console.log("Error: " + err); 
			    }
		     });
		/* Canclear recarga de la pagina al submitear el archivex! */	
		e.preventDefault(); // avoid to execute the actual submit of the form.
	});

	$('#save-code').on('click',function(e){
		

	})
});