<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Charts with datasets overrides</title>

</head>
<body ng-app="app">
<br/>
<div id="container" class="container">
  <div class="row" ng-controller="OverrideCtrl">
    <div class="col-lg-6 col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">流量圖</div>
        <div class="panel-body">
          <canvas class="chart chart-bar" chart-data="data1" chart-labels="labels1"
                  chart-colors="colors" chart-dataset-override="datasetOverride1"></canvas>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">瀏覽裝置 Pie chart</div>
        <div class="panel-body">
          <canvas class="chart chart-doughnut" chart-data="data2" chart-labels="labels2"
                  chart-colors="colors" chart-dataset-override="datasetOverride2"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- third party css/javascript files -->	
<script src="{baseURL}public/third_party/jquery/dist/jquery.min.js"></script>
<script src="{baseURL}public/third_party/angular/angular.min.js"></script>
<link rel="stylesheet" href="{baseURL}public/third_party/bootstrap/dist/css/bootstrap.min.css" >
	<!--
<script src="{baseURL}public/third_party/Chart.js/src/chart.js"></script>
<script src="{baseURL}public/third_party/angular-chart/angular-chart.min.js"></script>
-->
<!-- other css/javascript files can not be managed by bower -->	
<script src="{baseURL}public/otherJS/Chart.min.js"></script>
<script src="{baseURL}public/otherJS/angular-chart.js"></script>
<!-- our developing javascript/css files -->
<script src="{baseURL}public/devJS/traffic_monitor.js"></script>

</body>
</html>
