<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_init extends CI_Model {

	public function view($view='', $title='', $isiData='', $isiData2='')
	{
		# code...
		$data['title'] = $title;
		if($isiData !== ''){
			$data['arrayData'] = $this->queryBanyakHasil($isiData);
		}
		if ($isiData2 !== '') {
			$data['arrayData2'] = $this->queryBanyakHasil($isiData2);
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