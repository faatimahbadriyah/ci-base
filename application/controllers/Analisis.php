<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisis extends CI_Controller {

	public function index()
	{
        $data = array(
            'main_view' => 'analisis'
        );
		$this->load->view('layout', $data);
	}
}
