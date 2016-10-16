<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function addUser()
	{
		$username = "amitshahc";
		$fname = "Amit ";
		$lname = " Shah ";

		$data = array(
			'username' => $username,
			'fname' => $fname,
			'lname' => $lname
		);


		$this->db->trans_start();
		$insert = $this->db->insert('user', $data);
		$this->db->trans_complete();	
	
		if(! $insert )
		{
			print_r($this->db->error());
		}

		/*if ($this->db->trans_status() === FALSE)
		{
			echo $this->db->error();
		    // generate an error... or use the log_message() function to log your error
		}*/
	}
}