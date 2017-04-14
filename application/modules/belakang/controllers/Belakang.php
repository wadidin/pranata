<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belakang extends Admin_Controller {

	public function index() {
	}

	public function masuk() {
		$this->load->view('masuk/view');
	}

	public function dashboard() {
		$this->load->view('templates/belakang/css');
		$this->load->view('templates/belakang/kepala');
		$this->load->view('templates/belakang/samping');
		$this->load->view('dashboard/view');
		$this->load->view('templates/belakang/js');
	}

}
