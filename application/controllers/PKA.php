<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PKA extends CI_Controller {

	public function index()
	{
        $data = array(
            'main_view' => 'pka'
        );
		$this->load->view('layout', $data);
	}
}
