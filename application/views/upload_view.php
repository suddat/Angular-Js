<html lang="en" ng-app="app">
<head>
<?php 
	$this->load->view('include/header.php');
?>
</head>
<body ng-controller="ctrl" ng-cloak>
	<div class="col-md-4">
		<input type="file" name="file1" file-input="files" >
	</div>
	<div class="col-md-6">
		<md-button ng-show="display" class="md-raised md-primary" ng-click="uploadFile();" > Upload </md-button>
	</div>
</body>


<?php 
	$this->load->view('include/footer.php');
?>
<script src="<?=base_url()?>/scripts/file_upload.js"></script>

</html>
