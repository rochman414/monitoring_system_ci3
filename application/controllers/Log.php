<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Log extends CI_Controller
{
	public function servers()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('log/servers');
		$this->load->view('templates/footer');
	}
	public function website()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/sidebar');
		$this->load->view('log/website');
		$this->load->view('templates/footer');
	}
}