<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda_Mahasiswa extends PI_Controller {

	public function index() {
		$this->load->view('templates/depan/css');
		$this->load->view('templates/depan/kepala');
		$this->load->view('templates/depan/menu');
		$this->load->view('kuliahdipi/beranda_mahasiswa');
		$this->load->view('templates/depan/js');
	}

}
