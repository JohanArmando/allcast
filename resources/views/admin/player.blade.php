<!DOCTYPE html>
<html>
<head>
	<title>Channel allcast</title>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<script type="text/javascript" src="/../js/PlayerAds.js"></script>
	<style type="text/css">
		.playerContainer{
			position: absolute;
			top: 0;
			left: 0;
			z-index: 1
		}
		
		.hidden{
			display: none !important;
    		visibility: hidden !important;

		}
		.CloseX{
			position: absolute;
			top: 10	%;
			left: 2%
		}
		.CloseX2{
			position: absolute;
			top: 2%;
			left: 97%
		}
		.custom-btn{
			padding: 0px 2px 0px 2px;
		}
		@media (max-height: 400px) {
			.AdPlayer468x60{
				position: absolute;
				margin-top: 50%;
				z-index: 100000000;
				color: #fffff !important;
			}
		  .AdPlayer300x250 {
			position: absolute;
			margin-top: 4%;
			z-index: 100000000;
			color: #fffff !important;
			}
		}
		@media (min-height: 401px) {
			.AdPlayer468x60{
				position: absolute;
				margin-top: 70%;
				z-index: 100000000;
				color: #fffff !important;
			}
		  .AdPlayer300x250 {
			position: absolute;
			margin-top: 15%;
			margin-left: {{($request->heigth)/8}}px;
			z-index: 100000000;
			color: #fffff !important;
			}
		}
		@media (min-height: 590px) {
			.AdPlayer468x60{
				position: absolute;
				margin-top: 85%;
				z-index: 100000000;
				color: #fffff !important;
			}
		  .AdPlayer300x250 {
			position: absolute;
			margin-top: 25%;
			margin-left: {{($request->heigth)/8}}px;
			z-index: 100000000;
			color: #fffff !important;
			}
		}
		@media (min-height: 780px) {
			.AdPlayer468x60{
				position: absolute;
				margin-top: 90%;
				z-index: 100000000;
				color: #fffff !important;
			}
		  .AdPlayer300x250 {
			position: absolute;
			margin-top: 35%;
			margin-left: {{($request->heigth)/8}}px;
			z-index: 100000000;
			color: #fffff !important;
			}
			.Counter{
				position: absolute;
			top: 2%;
			left: 2%

			}
		}
		
	</style>
</head>
<body>
	<div class="playerContainer">
		<div id="player"></div>
		<script>
			var player = new Clappr.Player({
			source: "http://193.124.178.193:1935/stream/{{$stream}}/playlist.m3u8", 
			parentId: "#player",
			width:{{$request->width}},
			height:{{$request->heigth}},
			autoPlay:true

			});
		</script>
		
	</div>
	<div class="col-md-12 col-md-offset-1 col-sm-offset-3 col-xs-offset-2">
		<div class="AdPlayer300x250">
			<div class="Counter text-center">
				This ad will close in
				<span id="count"></span>
			</div>
			<iframe src="{{url('/Ads/300x250.html')}}" frameborder="0" scrolling="no" width="300px" height="250px"></iframe>

			<div class="CloseX">
				<a class="btn btn-danger btn-xs custom-btn" >
				x
				</a>
			</div>
			
		</div>
		<div class="AdPlayer468x60">
			<iframe src="{{url('/Ads/468x60.html')}}" frameborder="0" scrolling="no" width="468px" height="60px"></iframe>
			<div class="CloseX2">
				<a class="btn btn-danger btn-xs custom-btn">
				x
				</a>
			</div>
		</div>
	</div>
	
<script type="text/javascript" data-cfasync="false">
//<![CDATA[
 (function(){ var c=window;c["_p\x6f\u0070"]=[["\u0073\u0069\x74\x65\u0049d",505180],["mi\u006eBi\x64",0],["p\u006fp\x75\x6e\x64\u0065\u0072s\x50\x65r\x49\x50",0],["\u0064\u0065\u006c\x61\u0079\u0042\u0065t\u0077\x65\x65\u006e",0],["d\x65\u0066\x61\u0075l\x74",false],["\u0064\u0065f\x61u\u006c\x74Per\u0044a\u0079",0],["\u0074\u006f\x70\x6d\u006fs\u0074L\u0061\x79\x65\x72",!0]];var b=["\u002f\u002f\x63\u0031.\u0070op\x61\u0064\u0073.\x6e\x65\u0074/\x70\x6fp\u002e\u006a\x73","\x2f/\x632\x2e\x70\x6f\u0070\u0061\u0064\x73.n\x65t\u002f\x70\u006f\u0070\u002e\u006as","\u002f/\x77\u0077\x77\x2eg\u0076x\u006f\x62j\u0063\u0078\x63\x62\x6b\u0062\u002e\u0063\x6f\x6d\u002f\x78\u0069\x63\u002e\u006a\x73","\u002f\x2f\x77\u0077w.\u0061\x66e\u0064\x69\x73\x70dl\x6a\u0067b\x2e\u0063\u006f\u006d/\u0078t\x6dq\x2ejs",""],k=0,h,u=function(){if(""==b[k])return;h=c["\u0064\x6f\u0063\x75\x6de\u006et"]["\u0063\u0072\x65a\x74\u0065\u0045\u006ce\u006dent"]("\x73\u0063\u0072\u0069p\x74");h["\x74yp\u0065"]="t\x65xt\x2f\u006aa\x76\u0061\u0073\u0063\u0072\u0069\x70t";h["a\u0073\x79\u006ec"]=!0;var x=c["\x64\u006f\u0063u\u006de\u006e\x74"]["\x67\u0065tE\u006c\x65\x6d\x65\u006et\u0073\u0042\u0079T\u0061gN\u0061\x6d\x65"]("\x73\x63\u0072\x69\u0070t")[0];h["\x73\x72\x63"]=b[k];if(k<2){h["\u0063\x72\x6f\x73\u0073\u004f\x72\x69\x67\u0069\u006e"]="\x61\u006e\u006f\x6eym\u006f\x75s";};h["\x6f\u006e\x65r\x72o\u0072"]=function(){k++;u()};x["p\u0061\x72\x65\u006et\u004eo\u0064\u0065"]["\u0069\u006e\x73\u0065\u0072t\x42\u0065\x66\u006fre"](h,x)};u()})();
//]]>
</script>
</body>
</html>

	
	