angular
	.module('app',[])
	.controller('index', mainCtrl );

function mainCtrl($scope){
	$scope.datas = [
				      {
				        "id": 0,
				        "name": "Mcneil Barrera"
				      },
				      {
				        "id": 1,
				        "name": "Avis Workman"
				      },
				      {
				        "id": 2,
				        "name": "Maribel Fisher"
				      }
				   ];
	$scope.someValue = 'Hello World!';
}