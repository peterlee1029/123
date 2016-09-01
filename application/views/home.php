<!-- home.php -->
<div class="jumbotron text-center">
    <h3>開始獵人頭</h3>
    <input type="text" placeholder="輸入關鍵字" ng-model="keyword">
	<a ui-sref="search" ng-click="search()" class="btn btn-primary">Search</a>
</div>
<div ui-view></div>