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

	
	
	(function(){
	var counter = 30;
	setInterval(function() {
		counter--;
		if (counter <= 25) {
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

	function adBlockDetected() {
		$('.AdPlayer468x60').hide();
		$('.AdPlayer300x250').hide();
	}
	if(typeof fuckAdBlock === 'undefined') {
	    adBlockDetected();
	} else {
	    fuckAdBlock.onDetected(adBlockDetected);
	    fuckAdBlock.onNotDetected(adBlockNotDetected);
	    fuckAdBlock.on(true, adBlockDetected);
	    fuckAdBlock.on(false, adBlockNotDetected);
	    fuckAdBlock.on(true, adBlockDetected).onNotDetected(adBlockNotDetected);
	}

	fuckAdBlock.setOption('checkOnLoad', false);
	fuckAdBlock.setOption({
	    debug: true,
	    checkOnLoad: false,
	    resetOnEnd: false
	});

});
