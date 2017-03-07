<!DOCTYPE html>
<html>
<head>
	<title>Channel allcast</title>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
	<script type="text/javascript" src="/../js/PlayerAds.js"></script>
	<style type="text/css">
		.playerContainer{
			position: absolute;
			top: 0;
			left: 0
		}
		.AdPlayer300x250 {
			position: inherit;
			top: {{ ((int)$request->width)-200}};
			left: {{$request->heigth}};
			z-index: 100;
			color: #fffff !important;
		}
		.hidden{
			display: none !important;
    		visibility: hidden !important;

		}
	</style>
</head>
<body>
	<div class="playerContainer">
		<div id="player"></div>
		<script>
			var player = new Clappr.Player({
			source: "http://193.124.178.193:1935/allcast/{{$stream}}/playlist.m3u8", 
			parentId: "#player",
			width:{{$request->width}},
			height:{{$request->heigth}},
			autoPlay:true

			});
		</script>
		<div class="AdPlayer300x250 hidden" >
			<img src="http://landtransportguru.net/web/wp-content/uploads/2016/02/Ad-MediumRectangle-300x250.jpg">
		</div>
	</div>
	
	
</body>
</html>

	
	