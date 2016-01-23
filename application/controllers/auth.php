<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->model_utama->cekSession(); // cek session
		redirect('home','refresh');
	}

	public function login()
	{
		// $this->model_utama->cekSession(); // cek session
		$username = (isset($this->session->userdata['logged_in']['username'])) ? $this->session->userdata['logged_in']['username'] : '';
		$row = $this->model_utama->querySatuHasil("select count('id') as ct from user where username = '$username'");
		if($row->ct > 0){ 
			redirect('home','refresh');
		}
		$this->load->view('auth/login');

	}

	public function register($value='')
	{
		$this->load->view('auth/register');
	}

	public function post_register($value='')
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if ($username != '' && $password!= '') {
			$password = md5($password);
			$exec = $this->model_utama->queryinsert("insert into tugas_akhir_sia.user (username, password) value ('$username', '$password')");
		}

		if ($exec) {
			$this->index();
		}
	}

	public function post_login()
	{
		if (!$this->input->post()) {
			redirect('auth/login','refresh');
		}
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$auth = $this->model_utama->querySatuHasil("select * from user where username = '$data[username]' and password = '$data[password]' ");
		if ($auth != false) {
			$session_data = array(
				'username' => $auth->username,
			);
			$this->session->set_userdata('logged_in', $session_data);
			redirect('home','refresh');
		}else{
			$data = array(
				'error' => 'Invalid Username or Password'
			);
			$this->load->view('auth/login', $data);
		}
	}

	public function logOut($value='')
	{
		$session_data = array(
			'username' => ''
		);
		$this->session->unset_userdata('logged_in', $session_data);
		$data['loggedout'] = 'Successfully Logout';
		$this->load->view('auth/login', $data);
	}



}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */