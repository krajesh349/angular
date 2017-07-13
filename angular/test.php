<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

</head>

<body>

<!--<div ng-app="myApp" ng-controller="myForm">
<input type="text" ng-model="firstName"> <br>
<input type="text" ng-model="lastName"><br>
{{firstName +" "+lastName}}
</div>

<script>
var hi = angular.module("myApp",[]);
hi.controller('myForm',function($scope){	
	$scope.firstName="John";
	$scope.lastName="Joe";		
	})
</script>-->

<div ng-app="myApp" ng-controller="myCntrl">
<ul>
	<li ng-repeat="x in names">
    	{{"Name: "+x.name +", Country Name: "+x.country}}
	</li>
</ul>
</div>


<!--<div ng-app="" ng-init="color=[1,2,312,4,53]">
<p ng-bind="color[4]"></p> 
{{color[2]}}


</div>-->

</body>
</html>

<script>
var app = angular.module("myApp",[]);
app.controller("myCntrl",function($scope){
	$scope.names = [
					{name:'rajesh',country:'india'},
					{name:'madhu',country:'US'},
					{name:'santhosh',country:'AUS'}
					];
	});
</script>

