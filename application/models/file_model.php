<?php 

	class File_model extends CI_Model{

		function __construct(){
			parent :: __construct();
			$this->load->library("Excel");
		}
		public function upload($test){
			//echo "<pre>";print_r($test);die;
			$file = "uploads/".$test['file']['name'];
			$excelReader = PHPExcel_IOFactory :: createReaderForFile($file);
			$excelObj	=	$excelReader->load($file);
			$worksheet	=	$excelObj->getSheet(0);
			$lastrow	=	$worksheet->getHighestRow();
			$lastcol	=	$worksheet->getHighestColumn();
			
			for ( $row = 2; $row <= $lastrow ; $row++ ) {
				$data[]['empcode']	= $worksheet->getCell('A'.$row)->getValue();
				$data[]['date']		= $worksheet->getCell('B'.$row)->getValue();
				$data[]['headcode']	= $worksheet->getCell('C'.$row)->getValue();				
			}
			echo "in model->><pre>".$lastrow."<br>---".$lastcol;print_r($data);
		}
	}

?>