		<script>
			$(function(){			
			});
		</script>		
		<style>
			.author-area {
				width: 100%;
			}
			li {
				height: 11vh;
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
						<!-- student name -->
						<ul class="list-group">
							<li class="list-group-item list-group-item-warning">						
								<div class="author-area">
									<div>Name									
										<div class="browser-fontsize">小明
											<div class="pull-right">
												<i class="fa fa-user" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
						<!-- info -->
						<ul class="list-group">
							<li class="list-group-item">						
								<div class="author-area">
									<div>
										<span class="item-color">畢業年度</span>
										<div class="browser-fontsize">105
											<div class="pull-right">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="list-group-item">						
								<div class="author-area">
									<div>
										<span class="item-color">Facebook</span>
										<div class="browser-fontsize">小明
											<div class="pull-right">
												<i class="fa fa-facebook-square" aria-hidden="true"></i>
											</div>										
										</div>
									</div>
								</div>
							</li>	
							<li class="list-group-item">						
								<div class="author-area">
									<div>
										<span class="item-color">LinkedIn</span>
										<div class="browser-fontsize">小明
											<div class="pull-right">
												<i class="fa fa-linkedin" aria-hidden="true"></i>
											</div>										
										</div>
									</div>
								</div>
							</li>
							<li class="list-group-item">						
								<div class="author-area">
									<div>
										<span class="item-color">Phone</span>
										<div class="browser-fontsize">0912345678
											<div class="pull-right">
												<i class="fa fa-phone" aria-hidden="true"></i>
											</div>										
										</div>
									</div>
								</div>
							</li>
							<li class="list-group-item">						
								<div class="author-area">
									<div>
										<span class="item-color">Email</span>
										<div class="browser-fontsize">234@example.com
											<div class="pull-right">
												<i class="fa fa-envelope" aria-hidden="true"></i>
											</div>										
										</div>
									</div>
								</div>
							</li>																											
						</ul>						

					</div>
				</div>
			</div>
		</div>
	</body>
</html>