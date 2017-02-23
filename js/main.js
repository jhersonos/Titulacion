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
	/***dropdown**/
	$('#search-select')
	  .dropdown()
	;
	/*****/
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
		var url = "/titulacion/php/login.php";
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
			   		window.location.href = '/titulacion/admin/index.html';
			   	}else if (data == 'user') {
			   		// window.location.href = 'http://www.youtube.com';
			   		window.location.href = '/titulacion/user/demo/index.html';
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
		var url = "/titulacion/php/carrera.php";
		$.ajax({
			   type: "POST",
			   url: url,
			   data:formData,
			   contentType: false,
				processData: false,
			   success: function(data)
			   {
			   		// console.log(data)
			   		if (data == "" || data == true) {
			   			alert('registrado correctamente')
			   			$('#form-carrera')[0].reset()
			   		}else if(data==false){
			   			alert('fallo al registrar')
			   		}else{
			   			alert('ocurrio un problema! por favor contacte con soporte')
			   		}
			   },error: function(XMLHttpRequest, Status, err) { 
					console.log("Status: " + Status); 
					console.log("Error: " + err); 
				}
			 });
		e.preventDefault();
	})
	/* Alumno form */
	$("#save-alumno").submit(function(e) {
		var formData = new FormData($('#save-alumno')[0]);
		var url = "/titulacion/php/alumno.php";
		$.ajax({
			type: "POST",
		 	url: url,
			data:formData,
			contentType: false,
			processData: false,
			success: function(data){
		   	// console.log(data)
			   		if (data == "" || data == true) {
			   			alert('registrado correctamente')
			   			$('#save-alumno')[0].reset()
			   		}else if(data==false){
			   			alert('fallo al registrar')
			   		}else{
			   			alert('ocurrio un problema! por favor contacte con soporte')
			   		}
			},error:function(XMLHttpRequest, Status, err){
		   		console.log("Status: " + Status); 
				console.log("Error: " + err); 
			}
		});
		e.preventDefault();
	})
	/********************************************/
	/***************Listener****************/
	$('#form-code').on('submit',function(e){
		var formData = new FormData($('#form-code')[0]);
		var url = '/titulacion/php/asistencia.php'
		$.ajax({
			type:"post",
		 	url: url,
			data:formData,
			contentType: false,
			processData: false,
			success:function(data){
				console.log(data)
			},error:function(XMLHttpRequest, Status, err){
		   		console.log("Status: " + Status); 
				console.log("Error: " + ferr); 
			}
		})
		e.preventDefault();
	});

	
	/***************************************/

	/***reporte form***/
	$("#report").on('submit',function(e){
		var formData = new FormData($('#report')[0]);
		var url = "/titulacion/admin/reporte.php";
		$.ajax({
			type:'post',
			url:url,
			data:formData,
			contentType:false,
			processData:false,
			success:function(data){
				console.log(data)
			},error:function(XMLHttpRequest, Status, err){	
				console.log("status: " + status);
				console.log("error: " + err);
			}
		})
		e.preventDefault();
	});
})  


