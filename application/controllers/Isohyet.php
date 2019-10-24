<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Isohyet extends CI_Controller {

	public function index()
	{
        $data = array(
            'main_view' => 'isohyet'
        );
		$this->load->view('layout', $data);
	}
}
