<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
	
class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}
	}

	function index()
	{
		$data['error'] = '';
		$this->template->load('template/basic', 'upload_form', $data);
	}

	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'xls|xlsx';
		$config['max_size']	= '1000';
		$config['overwrite'] = TRUE;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error['error'] = $this->upload->display_errors();

			$this->template->load('template/basic', 'upload_form', $error);
		}
		else
		{
			$data['upload_data'] = $this->upload->data();
			
			$this->load->library('PHPExcel');

			$this->template->load('template/basic', 'upload_success', $data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */