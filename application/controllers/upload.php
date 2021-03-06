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
		$config['allowed_types'] = 'csv';
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
			
			 $this->load->library('CSVReader');  
  
	         $filePath = 'uploads/'.$data['upload_data']['file_name'];  
	  
	         $csvdata = $this->csvreader->parse_file($filePath, 1);
	         
	         foreach($csvdata as $user) {
	         	$username	= $user[0];
	         	$name		= $user[1];
	         	$apellido_p	= $user[2];
	         	$apellido_m	= $user[3];
	         	$fecha		= $user[4];
	         	$email		= $user[5];
	         	$password	= $user[0].substr($name, 0,1).substr($apellido_p, 0, 1);
	         	$puntos		= $user[6];
	         	$grupo		= $user[7];
	         	$equipo		= $user[8];
	         	
	         	$this->tank_auth->create_alumno($username, $name, $apellido_p, $apellido_m, $fecha, $email, $password, $puntos, $grupo, $equipo);
	         }
			

			$this->template->load('template/basic', 'upload_success', $data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
