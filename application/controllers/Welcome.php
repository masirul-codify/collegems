<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}

	public function adminRegister()
	{
		// <!-- start fetch data (admin , co - admin from database) -->
		$this ->load->model('queries');
		$roles = $this->queries->getRoles();

		$this->load->view('register', ['roles'=> $roles]);
		
		//<!-- end fetch data (admin , co - admin from database) -->	
	}

	public function adminSignup(){
		$this-> form_validation-> set_rules('username', 'Username', 'required',);
		$this-> form_validation-> set_rules('email', 'Email', 'required',);
		$this-> form_validation-> set_rules('gender', 'Gender', 'required',);
		$this-> form_validation-> set_rules('role_id', 'Role', 'required',);
		$this-> form_validation-> set_rules('password', 'Password', 'required',);
		$this-> form_validation-> set_rules('confpassword', 'Password Again', 'required',);
		$this-> form_validation->set_error_delimiters('<div class="text-danger" >','</div>');
		if ($this->form_validation->run()){
			echo 'Validation Passed';
		}else{
			$this->adminRegister();
		}
	}
}
