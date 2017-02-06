$(document).ready(function(){
	$("#form-code").on("submit",function(){
		
		var code = $("#code-alumno").val()

		$.ajax({
			type:"POST",
			url	:"",
			data:code
		}).done(function(){

		});

	})

});