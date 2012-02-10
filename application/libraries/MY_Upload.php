<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class MY_Upload extends CI_Upload {

	public function __construct($props = array())
	{
		parent::__construct($props);
	}
	
	public function is_allowed_filetype()
	{
		$data = $this->data();
		return $data['file_ext'] == '.csv';
	}
}