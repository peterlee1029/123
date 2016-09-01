
<title>IBM獵人頭</title>

<!-- Mobile -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">

<!-- jquery 3.1.0 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	

<!-- js -->
<script>
	$(function(){
		confirmBrowserSize();

		$(window).resize(function(){
			confirmBrowserSize();	
		});
	});
	// confirm screen & reset layout height
	function confirmBrowserSize(){
		// confirm screen
		var fontsize = "120%";
		if(screen.width < 500)
			fontsize = "60px";	
		$(".browser-fontsize").css("font-size", fontsize);
	}
</script>

<!-- global app css -->
<style>
body {
	background-color: #e0e0e0;
}
.IBM-logo {
	height: 20vh;
	background-color: #7baaf7;
	margin: 0 auto;
	width: 100%;
}
.IBM-content {
	height: 80vh;
}
.page-action {
	height: 10%;
	/*background-color: black;*/
}
.page-divide {
	height: 10%;
/*	background-color: black;
	color: white;*/
	padding-top: 2%;
}
.page-content {
	height: 80%;	
	padding: 1% 1% 1% 1%;
	/*background-color: green;*/
}
.page-button-area {
	height: 100%;
	padding: 1% 1% 1% 1%;
	/*background-color: green;*/
}
</style>