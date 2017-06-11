var myApp = angular.module("app", ['ngMaterial']);

myApp.controller("ctrl", ctrl);

function ctrl($scope, $http){
   //$scope.display= true;
   $scope.uploadFile = function(){
   		var form_data = new FormData();
   		angular.forEach($scope.files, function(file){
   			form_data.append('file', file);
   		});
   		$http.post('file_upload/upload', form_data, 
   		{
   			transformRequest : angular.identity,
   			headers: {'Content-Type': undefined, 'Process-Data':false}
   		}).success(function(response){
   			alert(response);
   		}).error(function(err){
   			console.log(err);
   		})
   };
}

myApp.directive('fileInput', function($parse){
	return {		
		link: function($scope, elm, attrs) {
			elm.on("change", function(event){
				var files = event.target.files;
				var arr = [ 'xlt', 'xls' , 'xlm' , 'xlsx' , 'xlsm' , 'xltx' , 'xltm'];
				var ext = files[0].name;
				ext 	= ext.split('.');
				if (arr.indexOf(ext[1]) < 0) {
					$scope.display= false;
				}else{
					$scope.display= true;
					$parse(attrs.fileInput).assign($scope, elm[0].files);
				}
				$scope.$apply();
			});
		}
	};
});