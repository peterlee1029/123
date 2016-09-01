		<script>
			$(function(){			
			});
		</script>		
		<style>
			.author-area {
				width: 100%;
			}
			li {
				height: 10vh;
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
		</div>
		<!-- other 0.8 -->
		<div class="IBM-content">
			<!-- back & home 0.08 -->
			<div class="page-action text-center">
				<div class="col-xs-6 col-md-6 page-button-area">
					<a href="search_result" class="btn btn-default btn-block page-button browser-fontsize" role="button">
						<span class="glyphicon glyphicon-chevron-left">&nbsp;Back</span>
					</a>
				</div>
				<div class="col-xs-6 col-md-6 page-button-area">
					<a href="../app" class="btn btn-default btn-block page-button browser-fontsize" role="button">
						<span class="glyphicon glyphicon-home">&nbsp;Home</span>
					</a>
				</div>
			</div>
			<!-- content 0.72 -->
			<div class="page-content-full">
				<div class="panel panel-default bg-template">
					<div class="panel-body">

						<ul class="list-group">
							<li class="list-group-item list-group-item-info">						
								<div class="author-area">
									<div>
										Teacher<div class="browser-fontsize">Name</div>
									</div>
								</div>
							</li>
							<li class="list-group-item list-group-item-warning">
								<div class="author-area">
									<div>
										Student<div class="browser-fontsize">Name</div>
									</div>								
								</div>
							</li>
						</ul>

						<!-- Journal Paper -->
						<div class="list-group">
							<a href="#" class="list-group-item list-group-item-success">Journal Paper</a>
							<a href="#" class="list-group-item">publication</a>
							<a href="#" class="list-group-item">publication</a>
							<a href="#" class="list-group-item">publication</a>
							<a href="#" class="list-group-item">publication</a>
						</div>
						<!-- Conference Paper -->
						<div class="list-group">
							<a href="#" class="list-group-item list-group-item-success">Conference Paper</a>
							<a href="#" class="list-group-item">publication</a>
							<a href="#" class="list-group-item">publication</a>
							<a href="#" class="list-group-item">publication</a>
							<a href="#" class="list-group-item">publication</a>
						</div>

					</div>
				</div>				
			</div>
		</div>
	</body>
</html>