$(document).ready(function(){
	var closeX = $('.CloseX');
	var closeX2 = $('.CloseX2');
	closeX2.hide();
	closeX.hide();
	$('.CloseX').on('click', function(){
		$('.AdPlayer300x250').hide();
		$('.AdPlayer468x60').hide();
	});
	$('.CloseX2').on('click', function(){
		$('.AdPlayer468x60').hide();
	});
	// setInterval(function() {
 //    	$('.AdPlayer300x250').show();
	// }, 1000 * 60 * 5);
	
	// setInterval(function() {
 //    	$('.AdPlayer468x60').show();
	// }, 1000 * 60 * 5);
	
	(function(){
	var counter = 30;
	setInterval(function() {
		counter--;
		if (counter <= 20) {
			closeX.show();
		}
		if (counter >= 0) {
			span = document.getElementById("count");
			span.innerHTML = counter;
		}
		if (counter === 0) {
			$('.AdPlayer468x60').hide();
			$('.AdPlayer300x250').hide();
			clearInterval(counter);
		}
	}, 1000);

	})();


});
