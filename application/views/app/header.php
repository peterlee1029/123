<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">

		<title>IBM獵人頭</title>

		<!-- Mobile -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes" />

		<!-- jquery 3.1.0 -->
		<script src="<?php echo base_url(); ?>public/third_party/jquery/dist/jquery.min.js"></script>

		<!-- bootstrap 3.3.7 -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/third_party/bootstrap/dist/css/bootstrap.min.css">
		<script src="<?php echo base_url(); ?>public/third_party/bootstrap/dist/js/bootstrap.min.js"></script>	

		<!-- font-awesome -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/third_party/font-awesome/css/font-awesome.min.css">

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
					fontsize = "20px";	
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
		.IBM-logo-img {
			height: 80%; 
			margin-top: 2vh;
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
		.page-content-full {
			height: 90%;	
			padding: 1% 1% 1% 1%;			
		}
		.page-button-area {
			height: 100%;
			padding: 1% 1% 1% 1%;
			/*background-color: green;*/
		}
		a {
			text-decoration: none;
		}	
		.bg-template {
			background-color: #eeeeee;
		}		
		.item-color	{
			color: #757575;
		}
		</style>		
