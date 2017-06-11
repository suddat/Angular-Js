<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_upload extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('file_model');
	}
	
	public function index()
	{
		$this->load->view('upload_view');
	}

	public function upload(){
		if(!empty($_FILES)){
			$ext = explode('.', $_FILES['file']['name']);
			$_FILES['file']['name'] = date("Y-m-d H:i:s").".".$ext[1];
			
			$path = "uploads/".$_FILES['file']['name'];
			if (move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
				$this->file_model->upload($_FILES);
				echo "file moved to location";
			}
		}else{
			echo "Some Error";
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */