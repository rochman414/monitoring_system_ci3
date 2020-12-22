<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ipmonitoring extends CI_Controller
{
	public function servers()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('ipmonitoring/servers');
		$this->load->view('templates/footer');
	}
	public function website()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('ipmonitoring/website');
		$this->load->view('templates/footer');
	}
}