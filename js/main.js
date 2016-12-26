$( document ).ready(function() {
	/************Semantic***************/
	$('.newitem')
	  .popup({
	  	className:{
	  		position:'right'
	  	},
	    on    : 'hover'
	  })
	;
	$('.arrow').on('click',function(){
		// console.log('sd')
		$('.foot').toggleClass('left-0')
		$('#flecha').toggleClass('right')
		$('#flecha').toggleClass('left')
	})
	/*********************************/
	/*Login validation*/
	$("#login").submit(function(e) {
		var formData = new FormData($('#login')[0]);
		var url = "/Titulacion/php/login.php";
		$.ajax({
			   type: "POST",
			   url: url,
			   data:formData,
			   contentType: false,
				processData: false,
			   success: function(data)
			   {
			   	console.log("enviado correctamente " + data)
			   	if (data == 'admin') {
			   		window.location.href = '/Titulacion/admin/index.html';
			   	}else if (data == 'user') {
			   		window.location.href = 'http://www.youtube.com';
			   	}else if(data == 'error'){
			   		$('#err').removeClass('none');
			   		$('#err').addClass('show');
			   	}
			   },error: function(XMLHttpRequest, Status, err) { 
					console.log("Status: " + Status); 
					console.log("Error: " + err); 
				}
			 });
		e.preventDefault();
	})
	/********************************************/
	/*carrera form*/
	$("#form-carrera").submit(function(e) {
		var formData = new FormData($('#form-carrera')[0]);
		var url = "/Titulacion/php/carrera.php";
		$.ajax({
			   type: "POST",
			   url: url,
			   data:formData,
			   contentType: false,
				processData: false,
			   success: function(data)
			   {
			   	console.log(data)
			   },error: function(XMLHttpRequest, Status, err) { 
					console.log("Status: " + Status); 
					console.log("Error: " + err); 
				}
			 });
		e.preventDefault();
	})
	/********************************************/
	/***************Listener****************/
	$('.newitem').on('click',function(){
		var id = this.id;
		console.log(id)
		if (id=="carrera-box") {
			$('#contenedor-box').load('partials/carrera.html')	
		}else if(id=="alumno-box"){
			$('#contenedor-box').load('partials/alumnos.html')	
		}else if(id="reporte-box"){
			//alert()
		}
		
	})
	/***************************************/
})