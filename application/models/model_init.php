<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_init extends CI_Model {

	public function view($view='', $title='', $isiData='')
	{
		# code...
		$data['title'] = $title;
		if($isiData !== ''){
			$data['arrayData'] = $this->queryBanyakHasil($isiData);
		}
		$this->load->view('_layout/header', $data);
		$this->load->view($view, $data);
		$this->load->view('_layout/footer');
	}

	public function queryBanyakHasil($tquery){			
		$query = $this->db->query($tquery);
			
		if ($query->num_rows() > 0)		
			return $query->result();        		
		else 
			return array(); 
    }
	

}

/* End of file model_init.php */
/* Location: ./application/models/model_init.php */