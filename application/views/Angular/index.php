<!DOCTYPE html>
<html>
<head>
	<title>Angular</title>
</head>
<body ng-app="app">
<div ng-controller="mainCtrl as vm">
	<ul>
		<li ng-repeat="data in vm.datas">
			{{data.id}} - {{data.name}}
		</li>
	</ul>
</div>
</body>

<script src="<?=base_url()?>scripts/angular.min.js" ></script>
<script src="<?=base_url()?>scripts/app.js" ></script>
</html>