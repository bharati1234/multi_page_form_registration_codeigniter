<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('usermodel');
	}


	public function index()
	{
		if ($this->input->post('finish')) {

			$formarray = array(
				'name' => $this->input->post('name'),
				'password' => $this->input->post('password'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'gender' => $this->input->post('gender'),
				'dob' => $this->input->post('dob'),
				'address' => $this->input->post('address')
			);
			// $personal_details = array(
			// 	'name' => $this->input->post('name'),
			// 	'dob' => $this->input->post('dob'),
			// 	'gender' => $this->input->post('gender')
			// );
			// $password_details = array(
			// 	'password' => $this->input->post('password'),

			// );
			// $contact_details = array(
			// 	'email' => $this->input->post('email'),
			// 	'phone' => $this->input->post('phone'),
			// 	'address' => $this->input->post('address')
			// );

			// $this->session->userdata = $personal_details;
			// $this->session->userdata = $password_details;
			// $this->session->userdata = $contact_details;

			// print_r($this->session->userdata);
			// print_r($this->session->userdata);
			// print_r($this->session->userdata);

			$this->usermodel->insert_user($formarray);
			$data['success'] = $formarray;
			$this->load->view('registration_form', $data);
		} else {
			$this->load->view('registration_form');
		}
	}
}
