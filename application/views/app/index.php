<!-- <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"> -->
		<!-- <link rel="import" href=<?php echo base_url();?>"import.php"> -->
		<!-- confirm sceen -->
		<script>
			$(function(){
				buttonResize();
				$(window).resize(function(){
					buttonResize();
				});

				// hidden suggest for mobile keyboard
				var suggest = "";
				$("input").focusin(function(){
					suggest = $(".page-divide").text();
					$(".page-divide").text("");
				}).focusout(function(){
					$(".page-divide").text(suggest);
				});				
			});
			// resize button 
			function buttonResize(){
				var buttonHeight = $("button").height()*1.5;
				$(".search-keyword").css("height", buttonHeight+"px");					
			}
		</script>		
		<style>
		.search-keyword-area {
			padding-top: 0vh;
			width: 100%;
			/*background-color: black;*/
		}
		.search-keyword{			
			width: 100%;
		}
		.default-keyword {
			padding: 1% 0.5% 1% 0.5%;
		}
		</style>
	</head>
	<body>
		<!-- logo 0.2 -->
		<div class="IBM-logo text-center">
			<?php 
				$image_properties = array(
					'src' => 'public/images/IBM-logo.jpg',
					'class' => 'IBM-logo-img',
				);				
				echo img($image_properties); 
			?>
			<!-- // <img class="IBM-logo-img" src=<?php echo base_url();?>"IBM-logo.jpg"> -->
		</div>
		<!-- other 0.8 -->
		<div class="IBM-content">
			<!-- back & home 0.08 -->
			<div class="page-action text-center">
				<div class="col-xs-6 col-md-6 page-button-area">
					<a href="#" class="btn btn-default btn-block page-button browser-fontsize" role="button">
						<span class="glyphicon glyphicon-chevron-left">&nbsp;Back</span>
					</a>
				</div>
				<div class="col-xs-6 col-md-6 page-button-area">
					<a href="#" class="btn btn-default btn-block page-button browser-fontsize" role="button">
						<span class="glyphicon glyphicon-home">&nbsp;Home</span>
					</a>
				</div>
			</div>
			<!-- divide -->
			<div class="page-divide text-center browser-fontsize">
				請輸入或選擇預設關鍵字
			</div>
			<!-- content 0.72 -->
			<div class="page-content">
				<!-- search keyword-->			
				<div class="search-keyword-area">

					<table width="100%">
						<tr>
							<td width="77%">
								<input type="text" class="form-control search-keyword browser-fontsize" placeholder="Keyword">
							</td>
							<td width="1%"></td>
							<td width="22%">
								<a href="app/search_result" class="btn btn-default search-keyword browser-fontsize" role="button">
									&nbsp;<span class="glyphicon glyphicon-search browser-fontsize"></span>&nbsp;
								</a>								
							</td>
						</tr>
					</table>			
				</div>
				<br>
				<!-- default keyword -->	
				<div class="panel panel-default">
					<div class="panel-body bg-template">
						<div class="col-xs-12 text-center browser-fontsize">預設關鍵字</div>
						<div class="col-xs-6 col-lg-2 default-keyword">
							<a href="app/search_result" role="button" class="btn btn-default btn-block browser-fontsize">IOT</a>
						</div>
						<div class="col-xs-6 col-lg-2 default-keyword">
							<a href="app/search_result" role="button" class="btn btn-default btn-block browser-fontsize">Robot</a>
						</div>	
						<div class="col-xs-6 col-lg-2 default-keyword">
							<a href="app/search_result" role="button" class="btn btn-default btn-block browser-fontsize">Robot</a>
						</div>	
						<div class="col-xs-6 col-lg-2 default-keyword">
							<a href="app/search_result" role="button" class="btn btn-default btn-block browser-fontsize">IOT</a>
						</div>																		
					</div>
				</div>
						
			</div>
		</div>
	</body>
</html>