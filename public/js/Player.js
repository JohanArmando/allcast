window.onload = function() {
    var player = document.getElementById("PlayAllCast");
    player.innerHTML = '<iframe class="embed-responsive-item" scrolling="no" src="http://allcast.local/player/'+ id +'/'+ width +'/'+ height +'" width="'+ width +'" height="'+ height +'" frmaeborder=0 ></iframe>';
}