$(document).ready(function(){

	$('.CloseX').on('click', function(){
		$('.AdPlayer300x250').hide();
	});
	$('.CloseX2').on('click', function(){
		$('.AdPlayer468x60').hide();
	});
	setInterval(function() {
    	$('.AdPlayer300x250').show();
	}, 1000 * 60 * 5);
	
	setInterval(function() {
    	$('.AdPlayer468x60').show();
	}, 1000 * 60 * 5);
});
