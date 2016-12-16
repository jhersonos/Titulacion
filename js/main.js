$( document ).ready(function() {

	$('.arrow').on('click',function(){
		console.log('sd')
		$('.foot').toggleClass('left-0')
		$('#flecha').toggleClass('right')
		$('#flecha').toggleClass('left')
	})

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
			   	}else{
			   		alert('Ingrese datos correctos por favor')
			   	}
			   },error: function(XMLHttpRequest, Status, err) { 
					console.log("Status: " + Status); 
					console.log("Error: " + err); 
				}
			 });
		e.preventDefault();
	})
})