<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PCH extends CI_Controller {

	public function index()
	{
        $data = array(
            'main_view' => 'pch'
        );
		$this->load->view('layout', $data);
	}
}
