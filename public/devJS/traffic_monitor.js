angular.module('app', ['chart.js']).controller('OverrideCtrl', ['$scope','$http', function ($scope, $http) {
  'use strict';

  $scope.colors = ['#45b7cd', '#ff6384', '#ff8e72'];

  $scope.labels1 = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
  $scope.data1 = [
    [0, 0, 0, 0, 0, 0, 0]
  ];
  $scope.datasetOverride1 = [
    {
      label: '來訪次數',
      borderWidth: 1,
      type: 'bar'
    }
  ];
	$scope.poll=function(){
		var CIURL="http://" + $(location).attr('host')+ "/IBM_CI-server/index.php/LogData/getDayOfWeek";
		$http({   
			method: 'GET',   
			url: CIURL,
			async: true,
			dataType: "json",
			timeout: 1000000		
		}).success(function(data, status, headers, config) { 
			var result = data.result;
			var i=0;
			$.each(result, function() {
				if(result[i].dayofweek == 1)
					$scope.data1[6] = result[i].daycount;
				else
					$scope.data1[result[i].dayofweek - 2] = result[i].daycount;
				i++;
			});
			  

			   
		}).error(function(data, status, headers, config) {   
			console.log('poll...error');					
		});   
		
		var CIURL="http://" + $(location).attr('host')+ "/IBM_CI-server/index.php/LogData/getPlatform";
		$http({   
			method: 'GET',   
			url: CIURL,
			async: true,
			dataType: "json",
			timeout: 1000000		
		}).success(function(data, status, headers, config) { 
			$scope.labels2 = data.platform;	
			$scope.data2 = data.use_count;   
			console.log(data.platform);
			console.log(data.use_count);
			setTimeout(
						$scope.poll, 
						1000 
					);
			   
		}).error(function(data, status, headers, config) {   
			console.log('poll...error');					
		});   		
	};
	$scope.poll();
  //$scope.labels2 = ['Download Sales', 'In-Store Sales', 'Mail-Order Sales'];
  //$scope.data2 = [350, 450, 100];
  $scope.datasetOverride2 = {
    hoverBackgroundColor: ['#45b7cd', '#ff6384', '#ff8e72'],
    hoverBorderColor: ['#45b7cd', '#ff6384', '#ff8e72']
  };
}]);
