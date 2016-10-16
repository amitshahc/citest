<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('form_validation', Null, 'FV');

		//print_r($this->input->post());

		if( $this->input->post('uname') )
			echo $this->input->post('uname');

		$this->FV->set_rules('uname','Username','required|is_unique[user.username]');
		$this->FV->set_rules('pword','Password','required');

		if ($this->FV->run() == FALSE)
        {
        	echo "not ok";
        	//$this->load->view('myform');
        }
        else
        {
        	echo "ok";
			//$this->load->view('formsuccess');
        }
				
		$this->load->view('common/header');
		$this->load->view('login', $this->input->post());
		$this->load->view('common/footer');		
	}

	public function checkUnique($uname)
	{
		return false;
	}

	public function addUser()
	{
		$this->load->model('LoginModel');

		$this->LoginModel->addUser();
	}
}
