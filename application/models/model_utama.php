<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_utama extends CI_Model {

	public function querySatuHasil($tquery='')
	{
		# code...
		$query = $this->db->query($tquery);
		if($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)	                    
			return $row;
        }
        else
			return  NULL;
	}

	public function queryinsert($tquery='')
	{
		$query = $this->db->query($tquery);
		if ($query) {
			return true;
		}
	}

	public function cekSession()
	{
		$username = (isset($this->session->userdata['logged_in']['username'])) ? $this->session->userdata['logged_in']['username'] : '';
		$row = $this->model_utama->querySatuHasil("select count('id') as ct from user where username = '$username'");
		if($row->ct > 0){ 
			return true;
		}else{
			redirect('auth/login', 'refresh');
		}
	}



}

/* End of file model_utama.php */
/* Location: ./application/models/model_utama.php */