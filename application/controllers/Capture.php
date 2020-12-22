<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Capture extends CI_Controller
{
	public function apps()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('capture/apps');
		$this->load->view('templates/footer');
	}
	public function website()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('capture/website');
		$this->load->view('templates/footer');
	}
}