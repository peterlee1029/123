		<script>
			$(function(){			
			});
		</script>		
		<style>
			.panel-heading {
				cursor: pointer;
			}
			.panel-heading .chevron:after {
				content: "\f078";
			}
			.panel-heading.collapsed .chevron:after {
				content: "\f054";
			}  
			.keyword-result {
				background-color: #f5f5f5;
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
					<a href="../app" class="btn btn-default btn-block page-button browser-fontsize" role="button">
						<span class="glyphicon glyphicon-chevron-left">&nbsp;Back</span>
					</a>
				</div>
				<div class="col-xs-6 col-md-6 page-button-area">
					<a href="../app" class="btn btn-default btn-block page-button browser-fontsize" role="button">
						<span class="glyphicon glyphicon-home">&nbsp;Home</span>
					</a>
				</div>
			</div>
			<!-- divide -->
			<div class="page-divide text-center browser-fontsize">
				查詢結果
			</div>
			<!-- content 0.72 -->
			<div class="page-content">

				<div class="panel panel-default">
					<div class="panel-body bg-template">

						<div class="col-xs-12 col-lg-12 panel panel-default keyword-result browser-fontsize">
							<div class="panel-heading collapsed" data-toggle="collapse" data-target="#IOT-title">
								IOT-title<div class="pull-right"><i class="chevron fa fa-fw" ></i></div>
							</div>
							<div class="collapse" id="IOT-title">
								<!-- artists-author -->
								<div class="col-xs-6 text-center">
									<a href="teacher_info" class="browser-fontsize">Teacher</a>
								</div>
								<div class="col-xs-6 text-center">
									<a href="student_info" class="browser-fontsize">Stduent</a>
								</div>
								<br><br>
								<!-- artists -->
								<table class="table table-condensed table-striped">
									<tr><td><a href="author_artists">IOT-artists</a></td></tr>
									<tr><td><a href="author_artists">IOT-artists</a></td></tr>
									<tr><td><a href="author_artists">IOT-artists</a></td></tr>
									<tr><td><a href="author_artists">IOT-artists</a></td></tr>
									<tr><td><a href="author_artists">IOT-artists</a></td></tr>
								</table>
								<!-- source -->
								<div class="text-center">資料來源：www.google.com</div>
							</div>
						</div>

						<div class="col-xs-12 col-lg-12 panel panel-default keyword-result browser-fontsize">
							<div class="panel-heading collapsed" data-toggle="collapse" data-target="#robot-title">
								robot-title<div class="pull-right"><i class="chevron fa fa-fw" ></i></div>
							</div>
							<div class="collapse" id="robot-title">
								<!-- artists-author -->
								<div class="col-xs-6 text-center">
									<a href="teacher_info" class="browser-fontsize">Teacher</a>
								</div>
								<div class="col-xs-6 text-center">
									<a href="student_info" class="browser-fontsize">Stduent</a>
								</div>
								<br><br>
								<!-- artists -->
								<table class="table table-condensed table-striped">
									<tr><td><a href="author_artists">robot-artists</a></td></tr>
									<tr><td><a href="author_artists">robot-artists</a></td></tr>
									<tr><td><a href="author_artists">robot-artists</a></td></tr>
									<tr><td><a href="author_artists">robot-artists</a></td></tr>
									<tr><td><a href="author_artists">robot-artists</a></td></tr>
								</table>
								<!-- source -->
								<div class="text-center">資料來源：www.google.com</div>
							</div>
						</div>		

						<div class="col-xs-12 col-lg-12 panel panel-default keyword-result browser-fontsize">
							<div class="panel-heading collapsed" data-toggle="collapse" data-target="#test-title">
								test-title<div class="pull-right"><i class="chevron fa fa-fw" ></i></div>
							</div>
							<div class="collapse" id="test-title">
								test-content
							</div>
						</div>							

					</div>
				</div>

			</div>
		</div>
	</body>
</html>