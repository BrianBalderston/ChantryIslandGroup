// JavaScript Document
$(document).foundation()

(function() {
	//debugger;
	$('.thumbInfo img').on('click', function(){
		$.ajax({
			url: "includes/ajaxQuery.php",
			data: { images_id : this.id },
			type: "GET"
		})
	
		// don't terminate this function with a semicolon cuz with a semicolon cuz we're going to run another one
		//semicolon cuz we're goign to run another one 
		
		.done(function(data) {
			console.log(data);

			//need to do more validation first, and then render the data
		// no semicolon yet!

			data = JSON.parse(data);
		
		//animate thumbnails
		$('.thumbInfo img').addClass('nonActive'); //jquery is awesome for this
		$('#' + data.images_id).removeClass('nonActive');
		
		renderCarData(data);
	})
		
		.fail(function(ajaxCall, status, error) {
			console.log(status, ", ", error);
			console.dir(ajaxCall);
		}); // semicolon here cuz we're done with this call 

	});

	function renderCarData(car) {
		$('.author').text("Picture Author" + car.images_author);
		$('.bigimage').text("Picture Author" + car.images_author);
		$('.modelName').text(car.images_name);
		$('.priceInfo').text("$" + car.pricing);
		$('.modelDetails').text(car.modelDetails);
	}
})();


/*
// JavaScript Document

(function() {
console.log('fired');
	$('nav li').on('click', function() {
	$.getJSON('includes/getPokemon.php', { critter : this.id }, function(data)
			  {
		console.log(data);
		
		$('.click-header').text(data.pokeName);
		$('.hidden').removeClass('hidden');
		$('.pokemon-large').attr('src', 'images/' + data.pokeImage + '.png');
		$('.content-section p').text(data.pokeDesc);
		$('.habitat-header').text(data.pokeName + " lives here!");
		$('.habitat').attr('src', 'images/' + data.bgImage + '.jpg');
	})
})

})();*/