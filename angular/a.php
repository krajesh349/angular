<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>changed in github</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>

<body>
<div ng-app="myApp" ng-controller="myCntrl">
	<p>Time is : {{theTime}}</p>
</div>

<script>

var app = angular.module("myApp",[]);
app.controller("myCntrl",function($scope,$interval){
	
	
	$scope.theTime= new Date().toLocaleTimeString();
	$interval(function(){
		$scope.theTime = new Date().toLocaleTimeString();
		},1000);
	
		
	
	});


</script>
</body>
</html>
