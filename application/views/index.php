<html ng-app="HeadHunterApp">
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>感知人頭獵人</title>

    <meta name="description" content="2016軟體創作達人暑期成長營">
    <meta name="author" content="暑假時光從來不擁有">
<!-- detect if this page is running from a website or local file system -->
	<script>
		function includeJs(jsFilePath) { //Facebook script
			var firstScript = document.getElementsByTagName('script')[0],
				  js = document.createElement('script');
			js.src = jsFilePath;
			js.onload = function () { //callback function
				console.log(jsFilePath);
			};
			firstScript.parentNode.insertBefore(js, firstScript);
		}
		switch(window.location.protocol) {
		case 'http:':
		case 'https:'://remote file over http or https
			var str = location.pathname;
			BASE_URL = (str.charAt(str.length-1)=='/')?(window.location.protocol + '//' + location.host + str):(window.location.protocol + '//' + location.host + str + '/');
//			 window.location.protocol + '//' + location.host + location.pathname + '/';//location.href;//
				 
		 break;
		case 'file:'://local file system excuted, it means that App executes on mobile devices
			BASE_URL = 'http://127.0.0.1/IBM_CI-server/';
			// dynamice load device-related JS files
			includeJs("cordova.js");
			includeJs("js/index.js");
		 break;
		default: //some other protocol
			BASE_URL = 'http://127.0.0.1/IBM_CI-server/';
		}
		console.log("BASE_URL = " +BASE_URL);
	</script>	
<!-- third party css/javascript files -->	
	<link rel="stylesheet" href="./public/third_party/jquery-mobile-min/jquery.mobile.min.css">
	<link rel="stylesheet" href="./public/third_party/bootstrap/dist/css/bootstrap.min.css" >

<script src="./public/third_party/jquery/dist/jquery.min.js"></script>
<script src="./public/third_party/angular/angular.min.js"></script>
<script src="./public/third_party/angular-resource/angular-resource.min.js"></script>
<script src="./public/third_party/angular-ui-router/release/angular-ui-router.min.js"></script>
<script src="public/third_party/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- our developing javascript/css files -->
    <script src="./public/devJS/app.js"></script>
  </head>
  
  <body>
	<div class="page-header">
		
	
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
			<a class="navbar-brand" ui-sref="home">IBM獵人頭</a>
			<a ng-click="goBack()" class="btn btn-default navbar-brand navbar-right">Back</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">	
        <li class="active"><a ui-sref="home">Home</a></li>
        <li><a ui-sref="search">Search</a></li>
      </ul>
			
    </div><!-- /.navbar-collapse -->
		
  </div><!-- /.container-fluid -->
</nav>
</div>
<div class="container">
    <!-- we use ui-view instead of ng-view -->
    <div ui-view></div>
</div>

  </body>
</html>