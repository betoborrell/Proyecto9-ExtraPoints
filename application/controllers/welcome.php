<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		}
	}
	
	function index()
	{
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
				
		$this->template->load('template/basic', 'welcome', $data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */