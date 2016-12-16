$( document ).ready(function() {

	$('.arrow').on('click',function(){
		console.log('sd')
		$('.foot').toggleClass('left-0')
		$('#flecha').toggleClass('right')
		$('#flecha').toggleClass('left')
	})

	/*Login validation*/
	$("#login").submit(function(e) {
		e.preventDefault();
	})
})