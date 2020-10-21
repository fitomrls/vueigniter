<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

	public function index()
	{
        $this->load->model('visitas_model');

        $data['visitas'] = $this->visitas_model->getVisitas();
        		
		$this->load->view('visitas', $data);
	}
}
