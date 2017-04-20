<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ketuayayasan extends PI_Controller {

	public function index() {
		$this->load->view('templates/depan/css');
		$this->load->view('templates/depan/kepala');
		$this->load->view('templates/depan/menu');
		$this->load->view('tentang/strukturpi/ketuayayasan/view');
		$this->load->view('templates/depan/js');
	}

}
