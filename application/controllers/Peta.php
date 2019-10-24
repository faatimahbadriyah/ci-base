<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peta extends CI_Controller {

	public function index()
	{
        $data = array(
            'main_view' => 'peta'
        );
		$this->load->view('layout', $data);
	}
}
